<style>
svg {
    min-height: 100px;
    min-width: 200px;
}
</style>

<div class="wdn-band">
	<div class="wdn-inner-wrapper">
        <h3 class="page-title">Lockup Library</h3>
        <?php foreach ($context->lockups as $chunk): ?>
            <table>
                <thead>
                    <tr>
                        <th>Lockups Approved For <?php echo $chunk[0]->approver == '' ? '(unknown)' : $chunk[0]->approver->organization ?></th>
                        <th>Preview</th>
                    </tr>   
                </thead>
                <tbody>
                    <?php foreach ($chunk as $lockup): ?>
                        <tr>
                            <td><a href="<?php echo $lockup->getDownloadURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                            <td><a href="<?php echo $lockup->getDownloadURL(); ?>"><?php echo $lockup->preview_svg; ?></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
        <?php endforeach; ?>
    </div>
</div>