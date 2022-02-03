<div class="dcf-bleed dcf-pt-8 dcf-pb-8">
	<div class="dcf-wrapper">
		<h3 class="page-title">Preview for "<?php echo trim($context->lockup->getName()) ?>" Lockup</h3>
		<div class="dcf-grid-full dcf-grid-halves@sm dcf-col-gap-vw dcf-txt-center">
            <div class="center">
            	<?php if ($context->lockup->style != 'acronym_subject_2_1' && $context->lockup->style != 'acronym_social' && $context->lockup->style != 'extension_4h'): ?>
					<?php echo $context->lockup->preview_svg; ?>
				<?php else: ?>
					No horizontal version of this lockup.
				<?php endif; ?>
			</div>
			<div class="center">
				<?php echo $context->lockup->vert_preview_svg; ?>
			</div>
		</div>

		<div id="explanation">
			<p>
				<strong>This is only a preview!</strong> Your lockup is being reviewed by your Communicator Contact and University Communications. 
			</p>
		</div>

		<?php 
			$comm_approval_status = 'pending';
			$comm_approval_words = 'Awaiting approval';
			if ($context->lockup->isCommunicatorApproved()) {
				$comm_approval_status = 'approved';
				$comm_approval_words = 'Approval received';
			} else if ($context->lockup->isCommunicatorDenied()) {
				$comm_approval_status = 'denied';
				$comm_approval_words = 'Denied approval';
			} else if ($context->lockup->isCommunicatorFeedbackGiven()) {
				$comm_approval_words = 'Feedback received';
			}
			$creative_approval_status = 'pending';
			$creative_approval_words = 'Awaiting approval';
			if ($context->lockup->isCreativeApproved()) {
				$creative_approval_status = 'approved';
				$creative_approval_words = 'Approval received';
			} else if ($context->lockup->isCreativeDenied()) {
				$creative_approval_status = 'denied';
				$creative_approval_words = 'Denied approval';
			} else if ($context->lockup->isCreativeFeedbackGiven()) {
				$creative_approval_words = 'Feedback received';
			}
		?>
		<div class="dcf-grid-full dcf-grid-halves@sm dcf-col-gap-vw">
			<div style="margin-bottom: 1em;">
				<div class="approval-bug <?php echo $comm_approval_status; ?>">
					<strong><?php echo $comm_approval_words; ?></strong><br>from<br><strong><?php echo $context->lockup->approver == NULL ? '(communicator not specified)' : $context->lockup->getApproverName(); ?></strong>
				</div>
			</div>
			<div>
				<div class="approval-bug <?php echo $creative_approval_status; ?>">
					<strong><?php echo $creative_approval_words; ?></strong><br>from<br><strong>University Communications</strong>
				</div>
			</div>
		</div>
		<br>

		<div class="visual-island">
			<div class="vi-header">
			Actions
			</div>
			<div class="tools dcf-txt-center">
				<?php if ($context->lockup->user_id == \Auth::$current_user->id || \Auth::$current_user->isAdmin()): ?>
					<div><a class="dcf-btn dcf-btn-secondary" href="<?php echo $context->lockup->getEditURL(); ?>">Edit Lockup</a></div><br>
				<?php endif; ?>
				<?php if ($context->lockup->isFullyApproved() && ($context->lockup->user_id == \Auth::$current_user->id || \Auth::$current_user->isAdmin())): ?>

				<form method="POST" action="/lockups/generate/" id="generate" class="dcf-form dcf-txt-center dcf-p-4 dcf-b-1 dcf-b-solid dcf-m-auto" style="max-width: 500px">
					<p>You have permission to generate this lockup. Click "Generate Files" below to begin.</p>
					<input type="hidden" value="<?php echo $context->lockup->id ?>" name="id">
					<button type="submit" class="dcf-btn dcf-btn-secondary" id="submit-generate">Generate Files</button>
                    <div class="dcf-form-group">
                        <div class="dcf-mt-3 dcf-input-checkbox dcf-m-auto" style="max-width: 300px">
                            <input type="checkbox" checked="checked" id="publish-lockup" name="publish-lockup">
                            <label for="publish-lockup">Publish lockup for all UNL users?</label>
                        </div>
                    </div>
                    <div style="display: none;" id="going-message">
						<img src="/images/spinner.svg" style="height: 16px;">
						<label style="font-style: italic;">And off we go! This will take a little while. Please be patient, we'll redirect you when this is complete.</label>
					</div>
				</form>
				<br>
				<?php endif; ?>

				<form id="approve" class="dcf-form dcf-txt-center">
					<?php if ((\Auth::$current_user->isApprover() && $context->lockup->approver_id == \Auth::$current_user->id) || 
								(\Auth::$current_user->isCreative()) || 
								\Auth::$current_user->isAdmin()): ?>
						<button id="approve-lockup" type="button" class="dcf-btn dcf-btn-secondary">Approve This Lockup</button>
						<button id="leave-feedback" type="button" class="dcf-btn dcf-btn-secondary">Just Leave Feedback</button>
						<button id="deny-lockup" type="button" class="dcf-btn dcf-btn-primary">Deny This Lockup</button>
						<div style="margin-top: 1em;"><label>Feedback will be left whichever option you choose above.</label></div>
					<?php endif; ?>
					<fieldset>
						<legend><?php if (\Auth::$current_user->isApprover() && $context->lockup->approver_id == \Auth::$current_user->id || \Auth::$current_user->isCreative()) echo 'Leave '; ?>Feedback</legend>
						<div class="dcf-grid-full dcf-grid-halves@sm dcf-col-gap-vw">
							<div>
								<label for="communicator-feedback">Communicator Feedback</label>
								<textarea <?php if (!(\Auth::$current_user->isApprover() && $context->lockup->approver_id == \Auth::$current_user->id)) echo 'disabled' ?> rows=10 id="communicator-feedback" name="communicator_feedback"><?php echo $context->lockup->communicator_feedback; ?></textarea>
							</div>
							<div>
								<label for="creative-feedback">Creative Feedback</label>
								<textarea <?php if (!\Auth::$current_user->isCreative()) echo 'disabled' ?> rows=10 id="creative-feedback" name="creative_feedback"><?php echo $context->lockup->creative_feedback; ?></textarea>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
$context->scriptState->loadScriptDeclaration("
require(['jquery'], function ($) {
    $(document).ready(function () {
      $('#generate').submit(function (submit) {
        $('#going-message').show();
        $('#submit-generate').attr('disabled', 'disabled');
      });

      $('#approve-lockup').click(function (click) {
        click.preventDefault();
        $.ajax({
          url: '/lockups/approve/',
          type: 'POST',
          data: {
            id: " . $context->lockup->id . ",
            communicator_feedback: $('#communicator-feedback').val(),
            creative_feedback: $('#creative-feedback').val()
          },
          complete: function () {
            window.location = window.location;
          }
        });
      });

      $('#leave-feedback').click(function (click) {
        click.preventDefault();
        $.ajax({
          url: '/lockups/feedback/',
          type: 'POST',
          data: {
            id: " . $context->lockup->id . ",
            communicator_feedback: $('#communicator-feedback').val(),
            creative_feedback: $('#creative-feedback').val()
          },
          complete: function () {
            window.location = window.location;
          }
        });
      });

      $('#deny-lockup').click(function (click) {
        click.preventDefault();
        $.ajax({
          url: '/lockups/deny/',
          type: 'POST',
          data: {
            id: " . $context->lockup->id . ",
            communicator_feedback: $('#communicator-feedback').val(),
            creative_feedback: $('#creative-feedback').val()
          },
          complete: function () {
            window.location = window.location;
          }
        });
      });
    });
});");
?>