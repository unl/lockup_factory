<div class="dcf-bleed dcf-pt-8 dcf-pb-8">
	<div class="dcf-wrapper">
		<h3 class="page-title">Please Regenerate This Lockup
			<small class="dcf-subhead"><?php echo $context->lockup->getName(); ?></small>
		</h3>
		<div id="explanation">
			<p>
				We've updated our lockup generation software with new tools or styles; 
				this lockup may or may not have changed but we know you'll want to have the latest and greatest.
				You can regenerate this lockup by clicking "Regenerate" below. You'll then be able to download its files.
			</p>
		</div>

		<div class="visual-island">
			<div class="vi-header">
				Actions
			</div>
			<div class="tools dcf-txt-center">
				<?php if ($context->lockup->isFullyApproved()): ?>
				<form method="POST" action="/lockups/regenerate/" id="regenerate" class="dcf-form dcf-txt-center">
					<input type="hidden" value="<?php echo $context->lockup->id ?>" name="id">
					<button type="submit" class="dcf-btn dcf-btn-secondary" id="submit-regenerate">Regenerate Files</button>
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

<?php
$context->scriptState->loadScriptDeclaration("
require(['jquery'], function ($) {
    $(document).ready(function () {
    	$('#regenerate').submit(function (submit) {
    		$('#going-message').show();
    		$('#submit-regenerate').attr('disabled', 'disabled');
    	});
    }
)});");
?>