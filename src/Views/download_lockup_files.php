<div class="wdn-band">
	<div class="wdn-inner-wrapper">
	<h3 class="page-title">Your files for "<?php echo $context->lockup->getName(); ?>" Logo Lockup</h3>
	<div class="wdn-center">
   		<div class="center">
			<img src="<?php echo $context->lockup->getPNGDownloadURL() ?>">
		</div>
		<br>
		<table>
			<thead>
				<tr>
					<th>Download Entire Package as ZIP</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="<?php echo $context->lockup->getZIPDownloadLink(); ?>">ZIP Package</a></td>
				</tr>
			</tbody>
		</table>
		<br>
    	<table>
			<thead>
				<tr>
					<th>Download Specific File</th>
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
</div>