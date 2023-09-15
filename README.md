# Lockup Factory

Lockup factory is UNL's standardized lockup generator

## Installation (Development)

### Install Symfony CLI

- On macOS: `brew install symfony-cli/tap/symfony-cli` or view https://symfony.com/download

### Install Lockup Factory

1. Create a new database and run `db/db_name_2023-02-28.sql` and `db/db_update_fonts_2023-08-30.sql`.
2. Copy `.env` to `.env.local` and edit the database details *(including setting a proper serverVersion param)* and set the `APP_URL` to the url of your app.
3. Install inkscape in your local machine by `brew install --cask inkscape` on macOS or [Here for linux](https://inkscape.org/release/1.3/gnulinux/).
4. Also install imagemagick in your local machine by `brew install imagemagick` on macOS.
5. Run `composer install` & `npm install`.
6. (Dev) Edit `/etc/hosts` file to setup a unl.edu localhost domain (for the authentication system).
   1. Sample line: `127.0.0.1 lockups-local.unl.edu`
7. Run `symfony server:start`
8. Visit https://lockups-local.unl.edu:8000/

Note: If you're using Apache, you need to give write permission to the `public/lockups` folder.

## User Roles

| Role        | Description                            |
| ----------- | -------------------------------------- |
| default     | The standard Lockup Factory user       |
| creative    | UComm Approver                         |
| approver    | Approvers from different departments   |
| admin       | The admin user with special privileges |

## Updating Lockup Templates

1. Create the lockup on Adobe Illustrator or other similar vector editing program and export them
   1. Make sure your fonts are loaded on your system **(DO NOT EXPORT TEXT AS PATHS!!)**
   2. Make sure there is enough room for the max amount of characters for each part
      - This sets up the max width the lockup could be, this is important for the create page previews
      - Make sure you use capital W as the character to test the width for maximum maximum width
   3. Add an artboard for each lockup and fit the artboard to that lockup
      - This helps with the export later, we do not want extra white space around the SVG
      - Name the artboards the matching slug of slug column in the `lockup_templates` table in database
   4. Export all the artboards using `Export for Screens`
      1. Export the lockup as SVG with these settings
         - Styling: Presentation Attributes
         - Font: SVG
         - Images: Embed
         - Object IDs: Minimal
         - Decimals: 2
         - Minify: Un-Checked
         - Responsive: Checked
      2. Double check the lockup artboards are named the slugs so the names of the files will be correct
2. Hand edit SVG to fix formatting and add custom classes
   1. Remove `<?xml version="1.0" encoding="UTF-8"?>` since we do not need it
   2. Remove any IDs on any elements and add a `data-name` to the SVG element with a value of the lockup slug
      - This helps for debugging
   3. Remove any rect with `fill="none"` it only adds extra bulk to the file we do not need
   4. Rearrange any elements in the SVG to make sure they are arranged left to right and top to bottom for easier editing in the future
   5. Add a fill of `#000` for any elements who's fills are black but they are missing the fill property
      - This is needed for the SVG generator who will get errors if it try's to change a property that is missing from the element
   6. Flatten and separate text and tspans
      - tspan should only have `x` and `y` attributes so you might need to split text elements apart to achieve this
      - tspans should not have tspans inside them so you may need to transfer attributes up to text elements
      - Each color of text and/or font should have it's own text element
   7. Add color classes to any element with a fill *(Some classes may not be used on particular lockups)*
      - **n_main_color**: N, N outline, R, and R circle colors
      - **n_secondary_color**: White space around N, and R background
      - **clover_color**: Green of the 4h clover
      - **clover_h_color**: H color in the 4h clover
      - **text_main_color**: This is the main text color, typically *(but not always)* the condensed font
      - **text_secondary_color**: This is the secondary text color, typically *(but not always)* the serif font
   8. Add the text classes to the tspan element
      - These should match the lockup_templates_fields table in the database
   9. Make sure `font-family` match what is in the project's css file and you have those fonts loaded on your computer for inkscape to use
   10. Vertical Lockups Only *(We need to fix Adobe's exported center align text)*
         1. Go to the view box and take the width and divide it by two *(This is the center x value)*
         2. In the tspan's transform translate replace the `x` value with this new center x value
         3. Copy the tspan's transform translate's `y` value and replace it with 0
         4. Go through each tspan and replace the `x` with 0 and the `y` with y += tspan's transform translate old y value you should have copied
            - So if the old `y` value for the tspan was 0 then new value would just be the copied y translate value
            - So if the old `y` value for the tspan was 8.75 then the new value would be 8.75 + the copied y translate value
         5. Make sure there is **no white space at all** between any elements inside text element
            - This messes with the spacing around text and will make it not centered
            - Each text element should all live in one line of svg code
         6. Add `style="text-align: center;" text-anchor="middle"` to each text element to actually center the text
3. Replace the svg file in `public/lockup_templates` for future development
   - This is so we have a second copy that are actual files
4. Replace the svg stored in the `lockup_templates` table in the database
   - This is the actual svg used for all the things on the website
   - There should be no indents or new lines so remove those before entering into the database
5. As long as the svg's are valid then you should be good but if they aren't here is how to test
   - If you go to the create page it will give you an error if the SVG is not valid
   - If you test out generating files and your output is not matching the desired lockup styles you may have missed a class on something

### Notes for SVG Editing in VSCode

   This vscode extension helps to verify you are editing things correctly [https://marketplace.visualstudio.com/items?itemName=jock.svg](https://marketplace.visualstudio.com/items?itemName=jock.svg)

   It also helps to have text wrap on so long lines are easier to see fully

### Example before and after

Before editing (Example 1)

```SVG
<?xml version="1.0" encoding="UTF-8"?>
<svg id="a" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126.34 82.55">
  <g>
    <path d="M79.38,28.62c-.34,0-.61-.26-.61-.6s.27-.6,.61-.6c.32,0,.6,.28,.6,.6s-.27,.6-.6,.6m.02-1.36c-.44,0-.78,.34-.78,.76s.34,.76,.76,.76,.76-.34,.76-.76-.34-.76-.74-.76" fill="#d00000"/>
    <path d="M79.38,28.62c-.34,0-.61-.26-.61-.6s.27-.6,.61-.6c.32,0,.6,.28,.6,.6,0,.34-.27,.6-.6,.6" fill="#fff"/>
    <g>
      <path d="M60.45,21.2v6.62h-10.22v-6.62h1.89V7.57h-1.89V.95h8.71l9.84,15.52V7.57h-1.89V.95h10.22V7.57h-1.89v13.63h1.89v6.62h-8.71l-9.84-15.52v8.9h1.89ZM77.11,.38h-10.79v7.76h1.89v6.38L59.41,.64l-.15-.27h-9.6v7.76h1.89v12.49h-1.89v7.76h11.36v-7.76h-1.89v-6.38l8.8,13.88,.17,.27h9.58v-7.76h-1.89V8.14h1.89V.38h-.57Z" fill="#fff"/>
      <polygon points="68.78 16.47 58.93 .95 50.23 .95 50.23 7.57 52.12 7.57 52.12 21.2 50.23 21.2 50.23 27.82 60.45 27.82 60.45 21.2 58.56 21.2 58.56 12.3 68.4 27.82 77.11 27.82 77.11 21.2 75.21 21.2 75.21 7.57 77.11 7.57 77.11 .95 66.89 .95 66.89 7.57 68.78 7.57 68.78 16.47" fill="#d00000"/>
      <path d="M77.67,.95v7.19h-1.89v12.49h1.89v7.76h-9.58l-.17-.27-8.8-13.88v6.38h1.89v7.76h-11.36v-7.76h1.89V8.14h-1.89V.38h9.58l.17,.27,8.8,13.87v-6.38h-1.89V.38h11.36V.95Zm-.57-.95h-11.17V8.52h1.89v4.7L59.73,.44l-.27-.44h-10.18V8.52h1.89v11.73h-1.89v8.52h12.11v-8.52h-1.89v-4.69l8.1,12.78,.29,.44h10.16v-8.52h-1.89V8.52h1.89V0h-.94Zm2.2,27.96h.07c.07-.02,.11-.05,.11-.15,0-.06-.02-.09-.07-.11h-.19v.26h.08Zm-.23-.4h.27c.11,0,.15,0,.21,.04,.07,.04,.11,.11,.11,.21,0,.08-.02,.13-.06,.19-.02,.04-.05,.04-.11,.08h-.02l.21,.4h-.15l-.19-.38h-.11v.38h-.15v-.91Z" fill="#d00000"/>
    </g>
  </g>
  <text transform="translate(36.8 46.49) scale(.93 1)" font-family="Oswald-Medium, Oswald"><tspan fill="#d00000" font-size="15" letter-spacing="-.02em"><tspan x="0" y="0">ACRONYM</tspan></tspan><tspan fill="#d00000" font-size="15" letter-spacing="-.02em"><tspan x="-37.81" y="16">ACRONYM SECOND</tspan></tspan><tspan font-size="10.25" letter-spacing="-.02em"><tspan x="-8.57" y="32.75">ACRONYM SUBJECT</tspan></tspan></text>
</svg>
```

After editing (Example 1)

```SVG
<svg data-name="v_acronym_2_subject" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126.34 82.55">
  <g>
    <path class="n_main_color" d="M79.38,28.62c-.34,0-.61-.26-.61-.6s.27-.6,.61-.6c.32,0,.6,.28,.6,.6s-.27,.6-.6,.6m.02-1.36c-.44,0-.78,.34-.78,.76s.34,.76,.76,.76,.76-.34,.76-.76-.34-.76-.74-.76" fill="#d00000"/>
    <path class="n_secondary_color" d="M79.38,28.62c-.34,0-.61-.26-.61-.6s.27-.6,.61-.6c.32,0,.6,.28,.6,.6,0,.34-.27,.6-.6,.6" fill="#fff"/>
    <g>
      <path class="n_secondary_color" d="M60.45,21.2v6.62h-10.22v-6.62h1.89V7.57h-1.89V.95h8.71l9.84,15.52V7.57h-1.89V.95h10.22V7.57h-1.89v13.63h1.89v6.62h-8.71l-9.84-15.52v8.9h1.89ZM77.11,.38h-10.79v7.76h1.89v6.38L59.41,.64l-.15-.27h-9.6v7.76h1.89v12.49h-1.89v7.76h11.36v-7.76h-1.89v-6.38l8.8,13.88,.17,.27h9.58v-7.76h-1.89V8.14h1.89V.38h-.57Z" fill="#fff"/>
      <polygon class="n_main_color" points="68.78 16.47 58.93 .95 50.23 .95 50.23 7.57 52.12 7.57 52.12 21.2 50.23 21.2 50.23 27.82 60.45 27.82 60.45 21.2 58.56 21.2 58.56 12.3 68.4 27.82 77.11 27.82 77.11 21.2 75.21 21.2 75.21 7.57 77.11 7.57 77.11 .95 66.89 .95 66.89 7.57 68.78 7.57 68.78 16.47" fill="#d00000"/>
      <path class="n_main_color" d="M77.67,.95v7.19h-1.89v12.49h1.89v7.76h-9.58l-.17-.27-8.8-13.88v6.38h1.89v7.76h-11.36v-7.76h1.89V8.14h-1.89V.38h9.58l.17,.27,8.8,13.87v-6.38h-1.89V.38h11.36V.95Zm-.57-.95h-11.17V8.52h1.89v4.7L59.73,.44l-.27-.44h-10.18V8.52h1.89v11.73h-1.89v8.52h12.11v-8.52h-1.89v-4.69l8.1,12.78,.29,.44h10.16v-8.52h-1.89V8.52h1.89V0h-.94Zm2.2,27.96h.07c.07-.02,.11-.05,.11-.15,0-.06-.02-.09-.07-.11h-.19v.26h.08Zm-.23-.4h.27c.11,0,.15,0,.21,.04,.07,.04,.11,.11,.11,.21,0,.08-.02,.13-.06,.19-.02,.04-.05,.04-.11,.08h-.02l.21,.4h-.15l-.19-.38h-.11v.38h-.15v-.91Z" fill="#d00000"/>
    </g>
  </g>
  <text style="text-align: center;" text-anchor="middle" transform="translate(63.17 0) scale(.93 1)" class="text_main_color" font-family="Oswald-Medium, Oswald" fill="#d00000" font-size="15" letter-spacing="-.02em"><tspan class="acronym_first_line" x="0" y="46.49">ACRONYM</tspan><tspan class="acronym_second_line" x="0" y="62.49">ACRONYM SECOND</tspan></text>
  <text style="text-align: center;" text-anchor="middle" transform="translate(63.17 0) scale(.93 1)" class="text_secondary_color" font-family="Oswald-Medium, Oswald" fill="#000" font-size="10.25" letter-spacing="-.02em"><tspan class="acronym_subject" x="0" y="79.24">ACRONYM SUBJECT</tspan></text>
</svg>
```
