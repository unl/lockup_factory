<div class="dcf-bleed dcf-pt-8 dcf-pb-8">
	<div class="dcf-wrapper">
        <h3 class="page-title">Create New Lockup</h3>

        <form id="create-lockup" method="POST" action="">
            <input type="hidden" id="id" name="id" value="<?php echo $context->lockup->id; ?>">
            <?php if (\Auth::$current_user === NULL): ?>
                <fieldset>
                    <legend class="dcf-legend">Login</legend>
                    <div><label class="dcf-label">We'll need you to login to your My.UNL account before creating a lockup.</label></div>
                    <a class="dcf-btn dcf-btn-primary" href="https://shib.unl.edu/idp/profile/cas/login?service=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Login</a>
                </fieldset>
            <?php endif; ?>

            <fieldset class="dcf-pb-4">
                <legend class="dcf-legend">Style</legend>
                <div>
                    <input class="dcf-input-control" type="radio" id="show-horiz" name="show" checked="checked"><label class="dcf-label" for="show-horiz">Show Horizontal</label>
                    <input class="dcf-input-control" type="radio" id="show-vert" name="show"><label class="dcf-label" for="show-vert">Show Vertical</label>
                </div>
                <br>
                <div class="dcf-grid-full dcf-grid-halves@sm dcf-col-gap-vw">
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="org_only" id="type-org-only" <?php if ($context->lockup->style == 'org_only' || empty($context->lockup->style)) echo 'checked="checked"'; ?>>
                            <img class="horiz height-36" src="<?php echo $context->baseURL; ?>images/org_only_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/org_only_vert_example.png">
                        </label><br>
                        <label for="type-org-only" class="dcf-label">
                            Primary ID lockup (A): primary hierarchy for your full College, Department, Unit or Subject name in a single line design.
                        </label><br><br>
                    </div>
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="org_two_line" id="type-org-two-line" <?php if ($context->lockup->style == 'org_two_line') echo 'checked="checked"'; ?>>
                            <img class="horiz height-36" src="<?php echo $context->baseURL; ?>images/org_two_line_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/org_two_line_vert_example.png">
                        </label><br>
                        <label for="type-org-two-line" class="dcf-label">
                            Primary ID lockup (B): primary hierarchy for your full College, Department, Unit or Subject name in a two-line design.
                            <br><em>*Additional line should be used when ID is too long to fit on one line.</em>
                        </label><br><br>
                    </div>
                </div>
                <div class="dcf-grid-full dcf-grid-halves@sm dcf-col-gap-vw">
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="org_subject" id="type-org-subject" <?php if ($context->lockup->style == 'org_subject') echo 'checked="checked"'; ?>>
                            <img class="horiz height-38" src="<?php echo $context->baseURL; ?>images/org_subject_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/org_subject_vert_example.png">
                        </label><br>
                        <label for="type-org-subject" class="dcf-label">
                            Primary and Secondary ID lockup (A): primary and secondary hierarchy for your full College, Department, Unit or Subject name in a single line design.
                        </label><br><br>
                    </div>
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="org_subject_1_2" id="type-org-subject-1-2" <?php if ($context->lockup->style == 'org_subject_1_2') echo 'checked="checked"'; ?>>
                            <img class="horiz height-38" src="<?php echo $context->baseURL; ?>images/org_subject_1-2_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/org_subject_1-2_vert_example.png">
                        </label><br>
                        <label for="type-org-subject-1-2" class="dcf-label">
                            Primary and Secondary ID lockup (B): primary hierarchy for your full College, Department, Unit or Subject name in one line and secondary hierarchy in a two-line design.
                            <br><em>*Additional line should be used when ID is too long to fit on one line.</em>
                        </label><br><br>
                    </div>
                </div>
                <div class="dcf-grid-full dcf-grid-halves@sm dcf-col-gap-vw">
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="org_subject_2_1" id="type-org-subject-2-1" <?php if ($context->lockup->style == 'org_subject_2_1') echo 'checked="checked"'; ?>>
                            <img class="horiz height-38" src="<?php echo $context->baseURL; ?>images/org_subject_2-1_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/org_subject_2-1_vert_example.png">
                        </label><br>
                        <label for="type-org-subject-2-1" class="dcf-label">
                            Primary and Secondary ID lockup (C): primary hierarchy for your full College, Department, Unit or Subject name in two lines and secondary hierarchy in a single line design.
                            <br><em>*Additional line should be used when ID is too long to fit on one line.</em>
                        </label><br><br>
                    </div>
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="org_subject_2_2" id="type-org-subject-2-2" <?php if ($context->lockup->style == 'org_subject_2_2') echo 'checked="checked"'; ?>>
                            <img class="horiz height-38" src="<?php echo $context->baseURL; ?>images/org_subject_2-2_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/org_subject_2-2_vert_example.png">
                        </label><br>
                        <label for="type-org-subject-2-2" class="dcf-label">
                            Primary and Secondary ID lockup (D): primary hierarchy for your full College, Department, Unit or Subject name in two lines and secondary hierarchy in a two-line design.
                            <br><em>*Additional line should be used when ID is too long to fit on one line.</em>
                        </label><br><br>
                    </div>
                </div>
                <div class="dcf-grid-full dcf-grid-halves@sm dcf-col-gap-vw">
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="acronym" id="type-acronym" <?php if ($context->lockup->style == 'acronym') echo 'checked="checked"'; ?>>
                            <img class="horiz height-36" src="<?php echo $context->baseURL; ?>images/acronym_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/acronym_vert_example.png">
                        </label><br>
                        <label for="type-acronym" class="dcf-label">
                            Merchandise lockup* (A): primary hierarchy for the shorthand abbreviation of your College, Department, Unit or Subject name in a single line, short character design. Use this version also to create casual lockups for social media. i.e. CASNR, IANR, COJMC.
                            <br><em>*Restricted to merchandise and social media use only.</em>
                        </label><br><br>
                    </div>
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="acronym_subject" id="type-acronym-subject" <?php if ($context->lockup->style == 'acronym_subject') echo 'checked="checked"'; ?>>
                            <img class="horiz height-40" src="<?php echo $context->baseURL; ?>images/acronym_subject_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/acronym_subject_vert_example.png">
                        </label><br>
                        <label for="type-acronym-subject" class="dcf-label">
                            Merchandise lockup (B): primary and secondary hierarchy for the shorthand abbreviation of your College, Department, Unit or Subject name in a single line, short character design. Restricted to merchandise use only. i.e. CASNR/ALEC, CEHS/CYFS.
                        </label><br><br>
                    </div>
                </div>
                <div class="dcf-grid-full dcf-grid-halves@sm dcf-col-gap-vw">
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="acronym_subject_2_1" id="type-acronym-subject-2-1" <?php if ($context->lockup->style == 'acronym_subject_2_1') echo 'checked="checked"'; ?>>
                            <img class="horiz" src="<?php echo $context->baseURL; ?>images/acronym_subject_2-1_vert_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/acronym_subject_2-1_vert_example.png">
                        </label><br>
                        <label for="type-acronym-subject-2-1" class="dcf-label">
                            Embroidery lockup: primary hierarchy for your full College, Department, Unit or Subject name in two lines and secondary hierarchy in a single and optional two-line design.*
                            <br><em>*Embroidery requires larger text, so we recommend keeping text to a minimum and as few lines of text as possible.</em>
                            <br><em>**This lockup is vertical style ONLY.</em>
                        </label><br><br>
                    </div>
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="extension" id="type-extension" <?php if ($context->lockup->style == 'extension') echo 'checked="checked"'; ?>>
                            <img class="horiz height-38" src="<?php echo $context->baseURL; ?>images/extension_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/extension_vert_example.png">
                        </label><br>
                        <label for="type-extension" class="dcf-label">
                            Extension lockup: primary hierarchy for Extension and secondary hierarchy for the counties in a single line design.
                        </label><br><br>
                    </div>
                </div>
                <div class="dcf-grid-full dcf-grid-halves@sm dcf-col-gap-vw">
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="ncta" id="type-ncta" <?php if ($context->lockup->style == 'ncta') echo 'checked="checked"'; ?>>
                            <img class="horiz height-38" src="<?php echo $context->baseURL; ?>images/ncta_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/ncta_vert_example.png">
                        </label><br>
                        <label for="type-extension" class="dcf-label">
                            NCTA lockup: primary hierarchy for NCTA and secondary hierarchy for the subject in a single line design.
                        </label><br><br>
                    </div>
                    <div>
                        <label class="dcf-label">
                            <input type="radio" name="type" value="extension_4h" id="type-extension-4h" <?php if ($context->lockup->style == 'extension_4h') echo 'checked="checked"'; ?>>
                            <img class="horiz" src="<?php echo $context->baseURL; ?>images/extension_4h_vert_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/extension_4h_vert_example.png">
                        </label><br>
                        <label for="type-extension-4h" class="dcf-label">
                            Extension/4H lockup: primary hierarchy for Extension and secondary hierarchy for the counties in a single line design. 4H logo included.
                            <br><em>*This lockup is vertical style ONLY.</em>
                        </label><br><br>
                    </div>
                </div>
                <div class="dcf-grid-full dcf-grid-halves@sm dcf-col-gap-vw">
                    <div>
                        <label class="center dcf-label">
                            <input type="radio" name="type" value="acronym_social" id="type-acronym-social" <?php if ($context->lockup->style == 'acronym_social') echo 'checked="checked"'; ?>>
                            <img class="horiz" src="<?php echo $context->baseURL; ?>images/acronym_social_vert_example.png">
                            <img class="vert" style="display: none;" src="<?php echo $context->baseURL; ?>images/acronym_social_vert_example.png">
                        </label><br>
                        <label for="type-acronym-social" class="dcf-label">
                            Social lockup: primary hierarchy for the shorthand abbreviation of your College, Department, Unit or Subject name in a single line, short character design.
                            <br><em>*This lockup is vertical style ONLY.</em>
                        </label><br><br>
                    </div>
                </div>
            </fieldset>

            <fieldset id="lockup-text" class="dcf-pt-4 dcf-pb-4">
                <legend class="dcf-legend">Lockup Text</legend>
                <div id="text-notice" class="wdn_notice alert" style="display: none;" tab-index="-1">
                    <div class="message">
                        <h4>Invalid Text Entered</h4>
                        <div class="message-content"></div>
                    </div>
                </div>

                <div id="organization-field">
                    <label for="organization" class="dcf-label">Organization</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            31 characters max
                        </div>
                    </div>
                    <input class="dcf-input-text" type="text" name="organization" id="organization" maxlength="31" value="<?php echo $context->lockup->organization; ?>">
                </div>
                <div id="organization-second-line-field" style="display: none;">
                    <label for="organization-second-line" class="dcf-label">Organization Second Line</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            31 characters max
                        </div>
                    </div>
                    <input class="dcf-input-text" type="text" name="organization_second_line" maxlength="31" id="organization-second-line">
                </div>
                <div id="subject-field" style="display: none;">
                    <label for="subject" class="dcf-label">Subject</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            40 characters max
                        </div>
                    </div>
                    <input type="text" name="subject" id="subject" maxlength="40" value="<?php echo $context->lockup->subject; ?>">
                    <br>
                </div>
                <div id="subject-second-line-field" style="display: none;">
                    <label for="subject-second-line" class="dcf-label">Subject Second Line</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            40 characters max
                        </div>
                    </div>
                    <input class="dcf-input-text" type="text" name="subject_second_line" maxlength="40" id="subject-second-line" value="<?php echo $context->lockup->subject_second_line; ?>">
                    <br>
                </div>
                <div id="acronym-field" style="display: none;">
                    <label for="acronym" class="dcf-label">Acronym</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            10 characters max
                        </div>
                    </div>
                    <input class="dcf-input-text" type="text" name="acronym" id="acronym" maxlength="10" value="<?php echo $context->lockup->acronym; ?>">
                    <br>
                </div>
                <div id="acronym-second-line-field" style="display: none;">
                    <label for="acronym-second-line" class="dcf-label">Acronym Second Line</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            10 characters max
                        </div>
                    </div>
                    <input class="dcf-input-text" type="text" name="acronym_second_line" id="acronym-second-line" maxlength="10" value="<?php echo $context->lockup->acronym_second_line; ?>">
                    <br>
                </div>
                <div id="acronym-subject-field" style="display: none;">
                    <label for="acronym-subject" class="dcf-label">Subject Acronym</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            15 characters max
                        </div>
                    </div>
                    <input class="dcf-input-text" type="text" name="acronym_subject" id="acronym-subject" maxlength="15" value="<?php echo $context->lockup->acronym_subject; ?>">
                    <br>
                </div>
                <div id="extension-county-field" style="display: none;">
                    <label for="extension-county" class="dcf-label">Extension County</label>
                    <div class="tooltip wdn-icon-info italic hang-right">
                        <div>
                            40 characters max
                        </div>
                    </div>
                    <input class="dcf-input-text" type="text" name="extension_county" id="extension-county" maxlength="40" value="<?php echo $context->lockup->extension_county; ?>">
                    <br>
                </div>
            </fieldset>
            
            <fieldset class="dcf-pt-4 dcf-pb-4">
                <legend class="dcf-legend">File Name Designations</legend>
                <label class="explanation" class="dcf-label">
                    The content entered in these fields does not affect the 
                    actual text in the lockup. It is used to determine file names for lockups.
                </label>
                <div class="dcf-grid-full dcf-grid-halves@sm dcf-col-gap-vw">
                    <div>
                        <label for="file-organization">College/Organization/Institution</label>
                        <input class="dcf-input-text" type="text" id="file-organization" name="file_organization" value="<?php echo $context->lockup->file_organization; ?>">
                        <label for="file-organization-acronym">College/Organization/Institution Acronym</label>
                        <input class="dcf-input-text" type="text" id="file-organization-acronym" name="file_organization_acronym" value="<?php echo $context->lockup->file_organization_acronym; ?>">
                    </div>
                    <div>
                        <label for="file-department">Department</label>
                        <input class="dcf-input-text" type="text" id="file-department" name="file_department" value="<?php echo $context->lockup->file_department; ?>">
                        <label for="file-department-acronym">Department Acronym</label>
                        <input class="dcf-input-text" type="text" id="file-department-acronym" name="file_department_acronym" value="<?php echo $context->lockup->file_department_acronym; ?>">
                    </div>
                </div>
            </fieldset>

            <fieldset class="dcf-pt-4 dcf-pb-4">
                <legend class="dcf-legend">Communicator Approval</legend>
                <label class="explanation dcf-label">
                    Lockup requests will be reviewed for approval by your designated Communicator Contact and University Communication.
                </label><br>
                <label for="approver" class="dcf-label">Select your Communicator Contact:</label>
                <select id="approver" name="approver" class="dcf-input-select">
                        <option value="">Select your Communicator Contact</option>
                    <?php foreach ($context->approvers as $user): ?>
                        <option <?php if ($context->lockup->approver_id == $user->id) echo 'selected="selected"'; ?> value="<?php echo $user->id ?>"><?php echo $user->name ?> (<?php echo $user->organization_acronym ?>)</option>
                    <?php endforeach; ?>
                        <option <?php if ($context->lockup->approver_id == '' && $context->lockup->id != NULL) echo 'selected="selected"'; ?> value="">I'm not sure / not listed / N/A</option>
                </select>
            </fieldset>
            
            <?php if (\Auth::$current_user !== NULL): ?>
                <button type="submit" class="dcf-btn dcf-btn-primary">Submit Lockup</button>
            <?php else: ?>
                <a class="dcf-btn dcf-btn-primary" href="https://shib.unl.edu/idp/profile/cas/login?service=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Login</a>
            <?php endif; ?>
        </form>
	</div>
</div>

<?php
$context->scriptState->loadScriptDeclaration("
function ucwords (str) {
    return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
        return $1.toUpperCase();
    });
}

require(['jquery'], function ($) {
    $(document).ready(function () {
        $('#create-lockup').submit(function (submit) {
            var valid = true;
            var messages = '';

            // look at all text fields that are visible inside lockup text
            $('#lockup-text input').each(function(index, input) {
                if ($(input).is(':visible')) {
                    if ($(input).val().length > parseInt($(input).attr('maxlength'))) {
                        messages = messages + ucwords($(input).attr('id').split('-').join(' ')) + ' must be ' + $(input).attr('maxlength') + ' characters or fewer.<br>';
                        valid = false;
                    }
                }
            });

            if (!valid) {
                submit.preventDefault();
                $('#text-notice').find('.message-content').html(messages);
                $('#text-notice').show();
                window.location.hash = 'text-notice';
            }
        });

        // temporary hack, until framework is improved to allow for closeable notices that do not remove HTML
        $('#text-notice').click(function (click) {
            $(this).fadeOut();
        });

        $('input[name=type]').change(function (change) {
            if ($('#type-org-only').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').hide();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').hide();
                $('#acronym-second-line-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-org-two-line').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').show();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').hide();
                $('#acronym-second-line-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-org-subject').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').hide();
                $('#subject-field').show();
                $('#subject-second-line-field').hide();
                $('#acronym-field').hide();
                $('#acronym-second-line-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-org-subject-1-2').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').hide();
                $('#subject-field').show();
                $('#subject-second-line-field').show();
                $('#acronym-field').hide();
                $('#acronym-second-line-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-org-subject-2-1').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').show();
                $('#subject-field').show();
                $('#subject-second-line-field').hide();
                $('#acronym-field').hide();
                $('#acronym-second-line-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-org-subject-2-2').is(':checked')) {
                $('#organization-field').show();
                $('#organization-second-line-field').show();
                $('#subject-field').show();
                $('#subject-second-line-field').show();
                $('#acronym-field').hide();
                $('#acronym-second-line-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-acronym').is(':checked')) {
                $('#organization-field').hide();
                $('#organization-second-line-field').hide();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').show();
                $('#acronym-second-line-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-acronym-subject').is(':checked')) {
                $('#organization-field').hide();
                $('#organization-second-line-field').hide();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').show();
                $('#acronym-second-line-field').hide();
                $('#acronym-subject-field').show();
                $('#extension-county-field').hide();
            } else if ($('#type-acronym-subject-2-1').is(':checked')) {
                $('#organization-field').hide();
                $('#organization-second-line-field').hide();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').show();
                $('#acronym-second-line-field').show();
                $('#acronym-subject-field').show();
                $('#extension-county-field').hide();
            } else if ($('#type-extension').is(':checked') || $('#type-extension-4h').is(':checked')) {
                $('#organization-field').hide();
                $('#organization-second-line-field').hide();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').hide();
                $('#acronym-second-line-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').show();
            } else if ($('#type-ncta').is(':checked')) {
                $('#organization-field').hide();
                $('#organization-second-line-field').hide();
                $('#subject-field').show();
                $('#subject-second-line-field').hide();
                $('#acronym-field').hide();
                $('#acronym-second-line-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
            } else if ($('#type-acronym-social').is(':checked')) {
                $('#organization-field').hide();
                $('#organization-second-line-field').hide();
                $('#subject-field').hide();
                $('#subject-second-line-field').hide();
                $('#acronym-field').show();
                $('#acronym-second-line-field').hide();
                $('#acronym-subject-field').hide();
                $('#extension-county-field').hide();
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
});");
?>
