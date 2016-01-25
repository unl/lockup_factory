<div class="wdn-band">
	<div class="wdn-inner-wrapper">
        <table>
            <thead>
                <tr>
                    <th>My Lockups</th>
                </tr>   
            </thead>
            <tbody>
            <?php foreach ($context->lockups as $lockup): ?>
                <tr>
                    <td><a href="<?php echo $lockup->getDownloadURL(); ?>"><?php echo $lockup->organization; ?></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
	</div>
</div>