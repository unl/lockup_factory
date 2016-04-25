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
                    <th>Actions</th>
                </tr>   
            </thead>
            <tbody>
            <?php foreach ($context->all_lockups as $lockup): ?>
                <tr>
                    <td><?php echo $lockup->id ?></td>
                    <td><a href="<?php echo $lockup->getPreviewURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                    <td><?php echo $lockup->user->username ?></td>
                    <td><?php echo $lockup->getApproverName(); ?></td>
                    <td><?php echo $lockup->getFullStatusText(); ?></td>
                    <td>
                        <form action="<?php echo $lockup->getDeleteURL(); ?>" method="POST">
                            <button type="submit" class="wdn-button wdn-button-brand">Delete</button>
                            <input type="hidden" name="id" value="<?php echo $lockup->id ?>">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>My Lockups</th>
                    <th>Approver</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>   
            </thead>
            <tbody>
            <?php foreach ($context->my_lockups as $lockup): ?>
                <tr>
                    <td><a href="<?php echo $lockup->getPreviewURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                    <td><?php echo $lockup->getApproverName(); ?></td>
                    <td><?php echo $lockup->getFullStatusText(); ?></td>
                    <td>
                        <form action="<?php echo $lockup->getDeleteURL(); ?>" method="POST">
                            <button type="submit" class="wdn-button wdn-button-brand">Delete</button>
                            <input type="hidden" name="id" value="<?php echo $lockup->id ?>">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <br>
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
                    <td><?php echo $lockup->getFullStatusText(); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
        <br>
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
            <?php foreach ($context->creative_approval_lockups as $lockup): ?>
                <tr>
                    <td><a href="<?php echo $lockup->getPreviewURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                    <td><?php echo $lockup->user->username ?></td>
                    <td><?php echo $lockup->getFullStatusText(); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    <?php endif; ?>
	</div>
</div>