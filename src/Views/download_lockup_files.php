<div class="dcf-bleed dcf-pt-8 dcf-pb-8">
	<div class="dcf-wrapper">
	<h3 class="page-title">Your files for "<?php echo $context->lockup->getName(); ?>" Lockup</h3>
	<div class="dcf-txt-center">
   		<div class="center">
			<img src="<?php echo $context->lockup->getPNGDownloadURL() ?>" role="presentation">
		</div>
		<br>
        <table class="dcf-table dcf-table-bordered">
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
		<table class="dcf-table dcf-table-bordered">
			<thead>
				<tr>
					<th><strong>Please Read!</strong> Instructions for Pantone Lockups</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						This software is unable to input the correct Pantone colors into Adobe Illustrator and .eps files. However, we have provided a script
						for users to be able to make the conversion in Adobe Illustrator. To execute the script, perform the instructions below.
						<ol>
							<li>Download the lockup package as .zip per usual. The scripts will be included in this .zip archive. Extract or open the archive if necessary.</li>
							<li>Open Adobe Illustrator, there is no need to open a file.</li>
							<li>Click File &gt; Scripts &gt; Other Scripts...  to open a dialog to run scripts.</li>
							<li>Navigate to your extracted lockup .zip archive. You should see a horiz_convert_pantone.jsx and a vert_convert_pantone.jsx. Select one of these
							and click Open. The conversion will begin automatically. Don't click while it's working!</li>
							<li>Run the other script if necessary. Some lockup styles do not include a certain orientation, thus there are two scripts.</li>
							<li>Your Pantone .ai files (see under PMS186CP folder) should now be created and have the correct Pantone color selected in Adobe Illustrator.</li>
						</ol>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
        <table class="dcf-table dcf-table-bordered">
			<thead>
				<tr>
					<th>Download Specific File</th>
					<th>Format</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($context->files as $lockup_file): ?>
				<tr>
					<td><a href="<?php echo $lockup_file->downloadLink(); ?>"><?php echo $lockup_file->getName(); ?></a></td>
					<td><?php echo $lockup_file->type; ?>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>