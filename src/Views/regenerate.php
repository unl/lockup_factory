<div class="wdn-band">
	<div class="wdn-inner-wrapper">
		<h3 class="page-title">This Lockup is out of date!
			<small class="wdn-subhead"><?php echo $context->lockup->getName(); ?></small>
		</h3>
		<div id="explanation">
			<p>
				We've updated our lockup generation software and we know you'll want to have the latest and greatest. If you created this lockup, you can
				regenerate its files below.
			</p>
		</div>

		<div class="visual-island">
			<div class="vi-header">
				Actions
			</div>
			<div class="tools wdn-center">
				<?php if ($context->lockup->isFullyApproved() && ($context->lockup->user_id == \Auth::$current_user->id 
				|| \Auth::$current_user->isCreative()
				|| \Auth::$current_user->isAdmin())): ?>
				<form method="POST" action="/lockups/regenerate/" id="regenerate" class="wdn-center">
					<input type="text" class="hidden" value="<?php echo $context->lockup->id ?>" name="id">
					<button type="submit" class="wdn-button wdn-button-triad" id="submit-regenerate">Regenerate Files</button>
					<div style="display: none;" id="going-message">
						<img src="/images/spinner.svg" style="height: 16px;">
						<label style="font-style: italic;">And off we go! This will take a little while. Please be patient, we'll redirect you when this is complete.</label>
					</div>
				</form>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
require(['jquery'], function ($) {
    $(document).ready(function () {
    	$('#regenerate').submit(function (submit) {
    		$('#going-message').show();
    		$('#submit-regenerate').attr('disabled', 'disabled');
    	});
    }
)});
</script>