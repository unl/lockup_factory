<div class="wdn-band">
	<div class="wdn-inner-wrapper">
	<h3 class="page-title">Your files for "<?php echo $context->lockup->getName(); ?>" Logo Lockup</h3>
	<div class="bp2-wdn-grid-set wdn-center">
        <div class="wdn-col-two-thirds">
       		<div class="center">
				<img src="<?php echo $context->lockup->getPNGDownloadURL() ?>">
			</div>
			<br>
        	<table>
				<thead>
					<tr>
					<th>Download File</th>
					<th>Format</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($context->lockup->files as $lockup_file): ?>
					<tr>
						<td><a href="<?php echo $lockup_file->downloadLink(); ?>"><?php echo $lockup_file->getName(); ?></a></td>
						<td><?php echo $lockup_file->type; ?>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="wdn-col-one-third">
			<div class="visual-island">
                <div class="vi-header">
                    <label>System Output</label>
                </div>
                <div class="details">
                	<textarea disabled="disabled" rows=20 style="font-family: monospace; width: 100%; resize: none;"><?php echo \Core::getGenerateOutput() ?></textarea>
				</div>
		</div>
	</div>
</div>