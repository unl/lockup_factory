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
			<strong>This is only a preview!</strong> Downloading these images as SVG or elsewise will not work, as you likely do not have the fonts
			necessary to display the text. Please log in to your UNL account, and click "Generate Files" to create vectorized versions as well as 
			PNGs, with all color variations, which you can download and use for your organization.
			</p>
		</div>

		<?php if (\Auth::$current_user !== NULL): ?>
		<form method="POST" action="/lockups/generate/">
			<input type="text" class="hidden" value="<?php echo $context->lockup->id ?>" name="id">
			<button type="submit" class="wdn-button wdn-button-triad">Generate Files</button>
		</form>
		<span>
			
		</span>
		<?php else: ?>
			<a class="wdn-button wdn-button-brand" href="https://login.unl.edu/cas/login?service=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Log in to UNL</a>
		<?php endif; ?>
	</div>
</div>