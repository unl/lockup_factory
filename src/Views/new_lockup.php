<div class="wdn-band">
	<div class="wdn-inner-wrapper">
        <h3 class="page-title">Create New Lockup</h3>

        <form method="POST" action="">
            <input type="hidden" id="id" name="id" value="<?php echo $context->lockup->id; ?>">
            <?php if (\Auth::$current_user === NULL): ?>
                <fieldset>
                    <legend>Log In</legend>
                    <div><label>We'll need you to log in to your UNL account before creating a lockup.</label></div>
                    <a class="wdn-button wdn-button-brand" href="https://login.unl.edu/cas/login?service=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Log in to UNL</a>
                </fieldset>
            <?php endif; ?>

            <fieldset>
                <legend>Style</legend>
                <div>
                    <input type="radio" id="show-horiz" name="show" checked="checked"><label for="show-horiz">Show Horizontal</label>
                    &nbsp;
                    <input type="radio" id="show-vert" name="show"><label for="show-vert">Show Vertical</label>
                </div>
                <br>
                <div class="bp2-wdn-grid-set-halves">
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="org_only" id="type-org-only" <?php if ($context->lockup->style == 'org_only') echo 'checked="checked"'; ?>>
                            <img class="horiz height-36" src="/images/org_only_example.png">
                            <img class="vert" style="display: none;" src="/images/org_only_vert_example.png">
                        </label><br>
                        <label for="type-org-only">
                            Organization-only lockup.
                        </label><br><br>
                    </div>
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="org_two_line" id="type-org-two-line" <?php if ($context->lockup->style == 'org_two_line') echo 'checked="checked"'; ?>>
                            <img class="horiz height-36" src="/images/org_two_line_example.png">
                            <img class="vert" style="display: none;" src="/images/org_two_line_vert_example.png">
                        </label><br>
                        <label for="type-org-two-line">
                            Organization-only lockup, with two lines. The lines are vertically centered in the horizontal version.
                        </label><br><br>
                    </div>
                </div>
                <div class="bp2-wdn-grid-set-halves">
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="org_subject" id="type-org-subject" <?php if ($context->lockup->style == 'org_subject') echo 'checked="checked"'; ?>>
                            <img class="horiz height-38" src="/images/org_subject_example.png">
                            <img class="vert" style="display: none;" src="/images/org_subject_vert_example.png">
                        </label><br>
                        <label for="type-org-subject">
                            Organization and subject lockup. 
                        </label><br><br>
                    </div>
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="org_subject_1_2" id="type-org-subject-1-2" <?php if ($context->lockup->style == 'org_subject_1_2') echo 'checked="checked"'; ?>>
                            <img class="horiz height-38" src="/images/org_subject_1-2_example.png">
                            <img class="vert" style="display: none;" src="/images/org_subject_1-2_vert_example.png">
                        </label><br>
                        <label for="type-org-subject-1-2">
                            Organization and subject lockup. Two lines for the subject, for extra detail when necessary.
                        </label><br><br>
                    </div>
                </div>
                <div class="bp2-wdn-grid-set-halves">
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="org_subject_2_1" id="type-org-subject-2-1" <?php if ($context->lockup->style == 'org_subject_2_1') echo 'checked="checked"'; ?>>
                            <img class="horiz height-38" src="/images/org_subject_2-1_example.png">
                            <img class="vert" style="display: none;" src="/images/org_subject_2-1_vert_example.png">
                        </label><br>
                        <label for="type-org-subject-2-1">
                            Organization and subject lockup. Two lines for the organization.
                        </label><br><br>
                    </div>
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="org_subject_2_2" id="type-org-subject-2-2" <?php if ($context->lockup->style == 'org_subject_2_2') echo 'checked="checked"'; ?>>
                            <img class="horiz height-38" src="/images/org_subject_2-2_example.png">
                            <img class="vert" style="display: none;" src="/images/org_subject_2-2_vert_example.png">
                        </label><br>
                        <label for="type-org-subject-2-2">
                            Organization and subject lockup. Two lines for the organization, two lines for the subject.
                        </label><br><br>
                    </div>
                </div>
                <div class="bp2-wdn-grid-set-halves">
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="acronym" id="type-acronym" <?php if ($context->lockup->style == 'acronym') echo 'checked="checked"'; ?>>
                            <img class="horiz height-36" src="/images/acronym_example.png">
                            <img class="vert" style="display: none;" src="/images/acronym_vert_example.png">
                        </label><br>
                        <label for="type-acronym">
                            Larger main text, for use with acronyms. This is intended only for merchandise.
                        </label><br><br>
                    </div>
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="acronym_subject" id="type-acronym-subject" <?php if ($context->lockup->style == 'acronym_subject') echo 'checked="checked"'; ?>>
                            <img class="horiz height-40" src="/images/acronym_subject_example.png">
                            <img class="vert" style="display: none;" src="/images/acronym_subject_vert_example.png">
                        </label><br>
                        <label for="type-acronym-subject">
                            Larger main text, for use with acronyms. Secondary line included. This is intended only for merchandise.
                        </label><br><br>
                    </div>
                </div>
                <div class="bp2-wdn-grid-set-halves">
                    <div class="wdn-col">
                        <label>
                            <input type="radio" name="type" value="extension" id="type-extension" <?php if ($context->lockup->style == 'extension') echo 'checked="checked"'; ?>>
                            <img class="horiz height-38" src="/images/extension_example.png">
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
                    <input type="text" name="organization" id="organization" value="<?php echo $context->lockup->organization; ?>">
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
                    <input type="text" name="subject" id="subject" value="<?php echo $context->lockup->subject; ?>">
                    <br>
                </div>
                <div id="subject-second-line-field" style="display: none;">
                    <label for="subject-second-line">Subject Second Line</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            40 characters max
                        </div>
                    </div>
                    <input type="text" name="subject_second_line" id="subject-second-line" value="<?php echo $context->lockup->subject_second_line; ?>">
                    <br>
                </div>
                <div id="acronym-field" style="display: none;">
                    <label for="acronym">Acronym</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            10 characters max
                        </div>
                    </div>
                    <input type="text" name="acronym" id="acronym" value="<?php echo $context->lockup->acronym; ?>">
                    <br>
                </div>
                <div id="acronym-subject-field" style="display: none;">
                    <label for="acronym-subject">Subject Acronym</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            15 characters max
                        </div>
                    </div>
                    <input type="text" name="acronym_subject" id="acronym-subject" value="<?php echo $context->lockup->acronym_subject; ?>">
                    <br>
                </div>
                <div id="extension-county-field" style="display: none;">
                    <label for="extension-county">Extension County</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            40 characters max
                        </div>
                    </div>
                    <input type="text" name="extension_county" id="extension-county" value="<?php echo $context->lockup->extension_county; ?>">
                    <br>
                </div>
            </fieldset>
            
            <fieldset>
                <legend>File Name Designations</legend>
                <label class="explanation">
                    The content entered in these fields does not affect the 
                    actual text in the lockup. It is used to determine file names for lockups.
                </label>
                <div class="bp2-wdn-grid-set-halves">
                    <div class="wdn-col">
                        <label for="file-organization">College/Organization/Institution</label>
                        <input type="text" id="file-organization" name="file_organization" value="<?php echo $context->lockup->file_organization; ?>">
                        <label for="file-organization-acronym">College/Organization/Institution Acronym</label>
                        <input type="text" id="file-organization-acronym" name="file_organization_acronym" value="<?php echo $context->lockup->file_organization_acronym; ?>">
                    </div>
                    <div class="wdn-col">
                        <label for="file-department">Department</label>
                        <input type="text" id="file-department" name="file_department" value="<?php echo $context->lockup->file_department; ?>">
                        <label for="file-department-acronym">Department Acronym</label>
                        <input type="text" id="file-department-acronym" name="file_department_acronym" value="<?php echo $context->lockup->file_department_acronym; ?>">
                    </div>
                </div>

            </fieldset>

            <fieldset>
                <legend>Communicator Approval</legend>
                <label class="explanation">
                    Lockup requests will be reviewed for approval by your designated Communicator Contact and University Communications.
                </label><br>
                <label for="approver">Select your Communicator Contact:</label>
                <select id="approver" name="approver">
                    <?php foreach ($context->approvers as $user): ?>
                        <option <?php if ($context->lockup->approver_id == $user->id) echo 'checked="checked"'; ?> value="<?php echo $user->id ?>"><?php echo $user->name ?> (<?php echo $user->organization_acronym ?>)</option>
                    <?php endforeach; ?>
                        <option <?php if ($context->lockup->approver_id == '') echo 'checked="checked"'; ?> value="">I'm not sure / not listed / N/A</option>
                </select>
            </fieldset>
            
            <?php if (\Auth::$current_user !== NULL): ?>
                <button type="submit" class="wdn-button wdn-button-brand">Submit Lockup</button>
            <?php else: ?>
                <a class="wdn-button wdn-button-brand" href="https://login.unl.edu/cas/login?service=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Log in to UNL</a>
            <?php endif; ?>
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