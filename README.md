** Installation (Devlopment) **
------------------

1. Create a new database and import the sql dump in `/db`.
2. Edit the database details in the .env file.
3. Install inkscape in your local machine by `brew install --cask inkscape` on macOS.
4. Also install imagemagick in your local machine by `brew install imagemagick` on macOS.
5. Run `composer install`.
6. (Dev) Edit the hosts file to setup a .edu localhost domain (for the authentication system).
7. Run `symfony server:start`.