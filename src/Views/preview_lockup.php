<div class="wdn-band">
	<div class="wdn-inner-wrapper">
		<h3 class="page-title">Preview for "<?php echo $context->lockup->getName() ?>" Logo Lockup</h3>
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
			<strong>This is only a preview!</strong> Your lockup is being reviewed by University Communications and your Communicator Contact. You can check the status of your
			lockup by clicking "Manage Lockups" in the navigation menu.
			</p>
		</div>

		<?php if (\Auth::$current_user->role == 'admin' || \Auth::$current_user->id == $context->lockup->approver_id): ?>
		<form method="POST" action="/lockups/generate/" id="generate">
			<div><label>You have permission to generate this lockup. Click "Generate Files" below to begin.</label></div>
			<input type="text" class="hidden" value="<?php echo $context->lockup->id ?>" name="id">
			<button type="submit" class="wdn-button wdn-button-triad" id="submit-generate">Generate Files</button>
			<div style="display: none;" id="going-message">
				<img src="/images/spinner.svg" style="height: 16px;">
				<label style="font-style: italic;">And off we go! This will take a little while. Please be patient, we'll redirect you when this is complete.</label>
			</div>
		</form>
		<?php endif; ?>
	</div>
</div>

<script type="text/javascript">
require(['jquery'], function ($) {
    $(document).ready(function () {
    	$('#generate').submit(function (submit) {
    		$('#going-message').css('display', 'inline-block');
    		$('#submit-generate').attr('disabled', 'disabled');
    	});
    });
});
</script>