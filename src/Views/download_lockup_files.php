<div class="wdn-band">
	<div class="wdn-inner-wrapper">

<?php echo \Core::getGenerateOutput() ?>

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
</div>