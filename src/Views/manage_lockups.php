<div class="wdn-band">
	<div class="wdn-inner-wrapper">
    <h3 class="page-title">Manage Lockups</h3>
    <?php if (\Auth::$current_user->isAdmin()): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>All Lockups</th>
                    <th>Submitter</th>
                    <th>Approver</th>
                    <th>Status</th>
                </tr>   
            </thead>
            <tbody>
            <?php foreach ($context->all_lockups as $lockup): ?>
                <tr>
                    <td><?php echo $lockup->id ?></td>
                    <td><a href="<?php echo $lockup->getPreviewURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                    <td><?php echo $lockup->user->username ?></td>
                    <td><?php echo $lockup->status; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>My Lockups</th>
                    <th>Status</th>
                </tr>   
            </thead>
            <tbody>
            <?php foreach ($context->my_lockups as $lockup): ?>
                <tr>
                    <td><a href="<?php echo $lockup->getPreviewURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                    <td><?php echo $lockup->status; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <?php if (\Auth::$current_user->isApprover()): ?>
        <table>
            <thead>
                <tr>
                    <th>Lockups Needing Communicator Approval</th>
                    <th>Submitter</th>
                    <th>Status</th>
                </tr>   
            </thead>
            <tbody>
            <?php foreach ($context->approver_lockups as $lockup): ?>
                <tr>
                    <td><a href="<?php echo $lockup->getPreviewURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                    <td><?php echo $lockup->user->username ?></td>
                    <td><?php echo $lockup->status; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>

        <?php if (\Auth::$current_user->isCreative()): ?>
        <table>
            <thead>
                <tr>
                    <th>Lockups Needing Creative Approval</th>
                    <th>Submitter</th>
                    <th>Status</th>
                </tr>   
            </thead>
            <tbody>
            <?php foreach ($context->approver_lockups as $lockup): ?>
                <tr>
                    <td><a href="<?php echo $lockup->getPreviewURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                    <td><?php echo $lockup->user->username ?></td>
                    <td><?php echo $lockup->status; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    <?php endif; ?>
	</div>
</div>