<div class="wdn-band">
	<div class="wdn-inner-wrapper">
        <h3 class="page-title">Create New Lockup</h3>

        <form method="POST" action="">
            <?php if (\Auth::$current_user === NULL): ?>
                <fieldset>
                    <legend>Log In</legend>
                    <div><label>We'll need you to log in to your UNL account before creating a lockup.</label></div>
                    <a class="wdn-button wdn-button-brand" href="https://login.unl.edu/cas/login?service=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Log in to UNL</a>
                </fieldset>
            <?php endif; ?>

            
            <fieldset>
                <legend>File Name Designations</legend>
                <label class="explanation">These fields are for the system to determine file names for your created files, and do not affect the
                actual text in the lockup.</label>
                <div class="bp2-wdn-grid-set-halves">
                    <div class="wdn-col">
                        <label for="file-organization">College/Organization/Institution</label>
                        <input type="text" id="file-organization" name="file_organization">
                        <label for="file-organization-acronym">College/Organization/Institution Acronym</label>
                        <input type="text" id="file-organization-acronym" name="file_organization_acronym">
                    </div>
                    <div class="wdn-col">
                        <label for="file-department">Department</label>
                        <input type="text" id="file-department" name="file_department">
                        <label for="file-department-acronym">Department Acronym</label>
                        <input type="text" id="file-department-acronym" name="file_department_acronym">
                    </div>
                </div>

            </fieldset>

            <fieldset>
                <legend>Communicator Approval</legend>
                <label for="approver">Select your Communicator Contact:</label>
                <select id="approver" name="approver">
                    <?php foreach ($context->approvers as $user): ?>
                        <option value="<?php echo $user->id ?>"><?php echo $user->name ?> (<?php echo $user->organization_acronym ?>)</option>
                    <?php endforeach; ?>
                </select>
            </fieldset>

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
                            Organization-only lockup, with two lines. The lines are vertically centered in the horizontal version.
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
                            Organization and subject lockup. Two lines for the subject, for extra detail when necessary.
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
                            Organization and subject lockup. Two lines for the organization.
                        </label><br><br>
                    </div>
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="org_subject_2_2" id="type-org-subject-2-2">
                            <img class="horiz" src="/images/org_subject_2-2_example.png">
                            <img class="vert" style="display: none;" src="/images/org_subject_2-2_vert_example.png">
                        </label><br>
                        <label for="type-org-subject-2-2">
                            Organization and subject lockup. Two lines for the organization, two lines for the subject.
                        </label><br><br>
                    </div>
                </div>
                <div class="bp2-wdn-grid-set-halves wdn-center">
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="acronym" id="type-acronym">
                            <img class="horiz" src="/images/acronym_example.png">
                            <img class="vert" style="display: none;" src="/images/acronym_vert_example.png">
                        </label><br>
                        <label for="type-acronym">
                            Larger main text, for use with acronyms. This is intended only for merchandise.
                        </label><br><br>
                    </div>
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="acronym_subject" id="type-acronym-subject">
                            <img class="horiz" src="/images/acronym_subject_example.png">
                            <img class="vert" style="display: none;" src="/images/acronym_subject_vert_example.png">
                        </label><br>
                        <label for="type-acronym-subject">
                            Larger main text, for use with acronyms. Secondary line included. This is intended only for merchandise.
                        </label><br><br>
                    </div>
                </div>
                <div class="bp2-wdn-grid-set-halves wdn-center">
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
                <legend>Lockup Text</legend>
                <div id="organization-field">
                    <label for="organization">Organization</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            30 characters max
                        </div>
                    </div>
                    <input type="text" name="organization" id="organization">
                </div>
                <div id="organization-second-line-field" style="display: none;">
                    <label for="organization-second-line">Organization Second Line</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            30 characters max
                        </div>
                    </div>
                    <input type="text" name="organization_second_line" id="organization-second-line">
                </div>
                <div id="subject-field" style="display: none;">
                    <label for="subject">Subject</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            40 characters max
                        </div>
                    </div>
                    <input type="text" name="subject" id="subject">
                    <br>
                </div>
                <div id="subject-second-line-field" style="display: none;">
                    <label for="subject-second-line">Subject Second Line</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            40 characters max
                        </div>
                    </div>
                    <input type="text" name="subject_second_line" id="subject-second-line">
                    <br>
                </div>
                <div id="acronym-field" style="display: none;">
                    <label for="acronym">Acronym</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            10 characters max
                        </div>
                    </div>
                    <input type="text" name="acronym" id="acronym">
                    <br>
                </div>
                <div id="acronym-subject-field" style="display: none;">
                    <label for="acronym-subject">Acronym Subject</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            15 characters max
                        </div>
                    </div>
                    <input type="text" name="acronym_subject" id="acronym-subject">
                    <br>
                </div>
                <div id="extension-county-field" style="display: none;">
                    <label for="extension-county">Extension County</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            40 characters max
                        </div>
                    </div>
                    <input type="text" name="extension_county" id="extension-county">
                    <br>
                </div>
                <br>
                <?php if (\Auth::$current_user !== NULL): ?>
                    <button type="submit" class="wdn-button wdn-button-brand">Submit Lockup</button>
                <?php else: ?>
                    <a class="wdn-button wdn-button-brand" href="https://login.unl.edu/cas/login?service=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Log in to UNL</a>
                <?php endif; ?>
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
            } else if ($('#type-org-subject-2-2').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').show();
                $('#subject-field').show();
                $('#subject-second-line-field').show();
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