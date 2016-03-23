<div class="wdn-band">
	<div class="wdn-inner-wrapper">
        <h3 class="page-title">Create New Logo Lockup</h3>
        <form method="POST" action="">
            <fieldset>
                <legend>Style</legend>
                <div>
                    <input type="radio" id="show-horiz" name="show" checked="checked"><label for="show-horiz">Show Horizontal</label>
                    &nbsp;
                    <input type="radio" id="show-vert" name="show"><label for="show-vert">Show Vertical</label>
                </div>
                <br>
        		<div class="bp2-wdn-grid-set-halves wdn-center">
                    <div class="wdn-col">
                    	<label>
                            <input type="radio" name="type" value="org_only" id="type-org-only" checked="checked">
                            <img class="horiz" src="/images/org_only_example.png">
                            <img class="vert" style="display: none;" src="/images/org_only_vert_example.png">
                        </label><br>
                        <label for="type-org-only">
                            Organization-only lockup.
                        </label><br><br>
                    </div>
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="org_two_line" id="type-org-two-line">
                            <img class="horiz" src="/images/org_two_line_example.png">
                            <img class="vert" style="display: none;" src="/images/org_two_line_vert_example.png">
                        </label><br>
                        <label for="type-org-two-line">
                            Organization-only lockup, with two lines.
                        </label><br><br>
                    </div>
                </div>
                <div class="bp2-wdn-grid-set-halves wdn-center">
                    <div class="wdn-col">
                    	<label>
                            <input type="radio" name="type" value="org_subject" id="type-org-subject">
                            <img class="horiz" src="/images/org_subject_example.png">
                            <img class="vert" style="display: none;" src="/images/org_subject_vert_example.png">
                        </label><br>
                        <label for="type-org-subject">
                            Organization and subject lockup. 
                        </label><br><br>
                    </div>
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="org_subject_1_2" id="type-org-subject-1-2">
                            <img class="horiz" src="/images/org_subject_1-2_example.png">
                            <img class="vert" style="display: none;" src="/images/org_subject_1-2_vert_example.png">
                        </label><br>
                        <label for="type-org-subject-1-2">
                            Organization and subject lockup. 
                        </label><br><br>
                    </div>
                </div>
                <div class="bp2-wdn-grid-set-halves wdn-center">
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="org_subject_2_1" id="type-org-subject-2-1">
                            <img class="horiz" src="/images/org_subject_2-1_example.png">
                            <img class="vert" style="display: none;" src="/images/org_subject_2-1_vert_example.png">
                        </label><br>
                        <label for="type-org-subject-2-1">
                            Organization and subject lockup. 
                        </label><br><br>
                    </div>
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="acronym" id="type-acronym">
                            <img class="horiz" src="/images/acronym_example.png">
                            <img class="vert" style="display: none;" src="/images/acronym_vert_example.png">
                        </label><br>
                        <label for="type-acronym">
                            Larger main text, for use with acronyms.
                        </label><br><br>
                    </div>
                </div>
                <div class="bp2-wdn-grid-set-halves wdn-center">
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="acronym_subject" id="type-acronym-subject">
                            <img class="horiz" src="/images/acronym_subject_example.png">
                            <img class="vert" style="display: none;" src="/images/acronym_subject_vert_example.png">
                        </label><br>
                        <label for="type-acronym-subject">
                            Larger main text, for use with acronyms. Secondary line included.
                        </label><br><br>
                    </div>
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="extension" id="type-extension">
                            <img class="horiz" src="/images/extension_example.png">
                            <img class="vert" style="display: none;" src="/images/extension_vert_example.png">
                        </label><br>
                        <label for="type-extension">
                            Extension-specific lockup with county included.
                        </label><br><br>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Text</legend>
                <div id="organization-field">
                    <label for="organization">Organization</label>
                    <input type="text" name="organization" id="organization">
                </div>
                <div id="organization-second-line-field" style="display: none;">
                    <label for="organization-second-line">Organization Second Line</label>
                    <input type="text" name="organization_second_line" id="organization-second-line">
                </div>
                <div id="subject-field" style="display: none;">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject">
                    <br>
                </div>
                <div id="subject-second-line-field" style="display: none;">
                    <label for="subject-second-line">Subject Second Line</label>
                    <input type="text" name="subject_second_line" id="subject-second-line">
                    <br>
                </div>
                <div id="acronym-field" style="display: none;">
                    <label for="acronym">Acronym</label>
                    <input type="text" name="acronym" id="acronym">
                    <br>
                </div>
                <div id="acronym-subject-field" style="display: none;">
                    <label for="acronym-subject">Acronym Subject</label>
                    <input type="text" name="acronym_subject" id="acronym-subject">
                    <br>
                </div>
                <div id="extension-county-field" style="display: none;">
                    <label for="extension-county">Extension County</label>
                    <input type="text" name="extension_county" id="extension-county">
                    <br>
                </div>
                <br>
                <button type="submit" class="wdn-button wdn-button-triad">Submit</button>
            </fieldset>
        </form>
	</div>
</div>

<script type="text/javascript">
require(['jquery'], function ($) {
    $(document).ready(function () {
        $('input[name=type]').change(function (change) {
            if ($('#type-org-only').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').hide();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-org-two-line').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').show();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-org-subject').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').hide();
                $('#subject-field').show();
                $('#subject-second-line-field').hide();
                $('#acronym-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-org-subject-1-2').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').hide();
                $('#subject-field').show();
                $('#subject-second-line-field').show();
                $('#acronym-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-org-subject-2-1').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').show();
                $('#subject-field').show();
                $('#subject-second-line-field').hide();
                $('#acronym-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-acronym').is(':checked')) {
                $('#organization-field').hide();
                $('#organization-second-line-field').hide();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').show();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-acronym-subject').is(':checked')) {
                $('#organization-field').hide();
                $('#organization-second-line-field').hide();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').show();
                $('#acronym-subject-field').show();
                $('#extension-county-field').hide();
            } else if ($('#type-extension').is(':checked')) {
                $('#organization-field').hide();
                $('#organization-second-line-field').hide();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').show();
            } 
        }).change();
        $('#show-horiz, #show-vert').change(function (change) {
            if ($('#show-horiz').is(':checked')) {
                $('img.horiz').show();
                $('img.vert').hide();
            } else if ($('#show-vert').is(':checked')) {
                $('img.vert').show();
                $('img.horiz').hide();
            }
        }).change();
    });
});
</script>