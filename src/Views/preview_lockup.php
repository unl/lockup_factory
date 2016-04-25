<div class="wdn-band">
	<div class="wdn-inner-wrapper">
		<h3 class="page-title">Preview for "<?php echo $context->lockup->getName() ?>" Lockup</h3>
		<div class="bp2-wdn-grid-set-halves wdn-center">
            <div class="wdn-col center">
				<?php echo $context->lockup->preview_svg; ?>
			</div>
			<div class="wdn-col center">
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
		<div class="bp2-wdn-grid-set-halves">
			<div class="wdn-col" style="margin-bottom: 1em;">
				<div class="approval-bug <?php echo $comm_approval_status; ?>">
					<strong><?php echo $comm_approval_words; ?></strong><br>from<br><strong><?php echo $context->lockup->approver == NULL ? '(communicator not specified)' : $context->lockup->getApproverName(); ?></strong>
				</div>
			</div>
			<div class="wdn-col">
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
			<div class="tools">
				<?php if ($context->lockup->isFullyApproved() && ($context->lockup->user_id == \Auth::$current_user->id || \Auth::$current_user->isAdmin())): ?>
				<form method="POST" action="/lockups/generate/" id="generate" class="wdn-center">
					<div><label>You have permission to generate this lockup. Click "Generate Files" below to begin.</label></div>
					<input type="text" class="hidden" value="<?php echo $context->lockup->id ?>" name="id">
					<button type="submit" class="wdn-button wdn-button-triad" id="submit-generate">Generate Files</button>
					<div style="display: none;" id="going-message">
						<img src="/images/spinner.svg" style="height: 16px;">
						<label style="font-style: italic;">And off we go! This will take a little while. Please be patient, we'll redirect you when this is complete.</label>
					</div>
				</form>
				<br>
				<?php endif; ?>

				<form id="approve" class="wdn-center">
					<?php if ((\Auth::$current_user->isApprover() && $context->lockup->approver_id == \Auth::$current_user->id) || 
								(\Auth::$current_user->isCreative()) || 
								\Auth::$current_user->isAdmin()): ?>
						<button id="approve-lockup" type="button" class="wdn-button wdn-button-complement">Approve This Lockup</button>
						<button id="leave-feedback" type="button" class="wdn-button wdn-button-triad">Just Leave Feedback</button>
						<button id="deny-lockup" type="button" class="wdn-button wdn-button-brand">Deny This Lockup</button>
						<div style="margin-top: 1em;"><label>Feedback will be left whichever option you choose above.</label></div>
					<?php endif; ?>
					<fieldset>
						<legend><?php if (\Auth::$current_user->isApprover() && $context->lockup->approver_id == \Auth::$current_user->id || \Auth::$current_user->isCreative()) echo 'Leave '; ?>Feedback</legend>
						<div class="bp2-wdn-grid-set-halves">
							<div class="wdn-col">
								<label for="communicator-feedback">Communicator Feedback</label>
								<textarea <?php if (!(\Auth::$current_user->isApprover() && $context->lockup->approver_id == \Auth::$current_user->id)) echo 'disabled' ?> rows=10 id="communicator-feedback" name="communicator_feedback"><?php echo $context->lockup->communicator_feedback; ?></textarea>
							</div>
							<div class="wdn-col">
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

<script type="text/javascript">
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
    				id: <?php echo $context->lockup->id; ?>,
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
    				id: <?php echo $context->lockup->id; ?>,
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
    				id: <?php echo $context->lockup->id; ?>,
    				communicator_feedback: $('#communicator-feedback').val(),
    				creative_feedback: $('#creative-feedback').val()
    			},
    			complete: function () {
    				window.location = window.location;
    			}
    		});
    	});
    });
});
</script>