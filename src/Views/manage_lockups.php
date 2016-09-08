<?php
    $all_pages = ceil($context->all_count / $context->page_size);
    $my_pages = ceil($context->my_count / $context->page_size);
    $approver_pages = ceil($context->approver_count / $context->page_size);
    $creative_pages = ceil($context->creative_count / $context->page_size);
    $page_array = array();
    if ($context->all_page != 1) {
        $page_array['all_page'] = $context->all_page;
    }
    if ($context->my_page != 1) {
        $page_array['page'] = $context->my_page;
    }
    if ($context->approver_page != 1) {
        $page_array['approver_page'] = $context->approver_page;
    }
    if ($context->creative_page != 1) {
        $page_array['creative_page'] = $context->creative_page;
    }

    function outputParam($key, $val) {
        return $key . '=' . $val;
    }

    function outputPages($array) {
        $str = '?';
        return $str . implode('&', array_map('outputParam', array_keys($array), $array));
    }
?>
<script type="text/javascript">
WDN.loadCSS(WDN.getTemplateFilePath('css/modules/pagination.css'));
</script>
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
                    <th>Version</th>
                    <th class="right">Actions</th>
                </tr>   
            </thead>
            <tbody>
            <?php foreach ($context->all_lockups as $lockup): ?>
                <tr>
                    <td><?php echo $lockup->id; ?></td>
                    <td><a href="<?php echo $lockup->getPreviewURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                    <td><?php echo $lockup->user->username; ?></td>
                    <td><?php echo $lockup->getApproverName(); ?></td>
                    <td><?php echo $lockup->getFullStatusText(); ?></td>
                    <td><?php echo $lockup->version; ?></td>
                    <td class="table-actions right" style="min-width: 200px;">
                        <?php if ($lockup->isEditable()): ?>
                            <a class="wdn-button wdn-button-triad" href="<?php echo $lockup->getEditURL(); ?>">Edit</a>
                        <?php endif; ?>
                        <form action="<?php echo $lockup->getDeleteURL(); ?>" method="POST" class="delete-form">
                            <button type="submit" class="wdn-button wdn-button-brand">Delete</button>
                            <input type="hidden" name="id" value="<?php echo $lockup->id ?>">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php if ($all_pages > 1): ?>
            <div style="text-align: center;">
                <div style="display: inline-block;">
                    <ul id="pending-pagination" class="wdn_pagination" data-tab="pending" style="padding-left: 0;">
                        <?php if($context->all_page != 1): ?>
                            <li class="arrow prev"><a href="<?php echo outputPages(array_merge($page_array, array('all_page' => $context->all_page - 1))); ?>" title="Go to the previous page">← prev</a></li>
                        <?php endif; ?>
                        <?php $before_ellipsis_shown = FALSE; $after_ellipsis_shown = FALSE; ?>
                        <?php for ($i = 1; $i <= $all_pages; $i++): ?>
                                <?php if ($i == $context->all_page): ?>
                                    <li class="selected"><span><?php echo $i; ?></span></li>
                                <?php elseif ($i <= 3 || $i >= $all_pages - 2 || $i == $context->all_page - 1 || 
                                            $i == $context->all_page - 2 || $i == $context->all_page + 1 || $i == $context->all_page + 2): ?>
                                    <li><a href="<?php echo outputPages(array_merge($page_array, array('all_page' => $i))); ?>" title="Go to page <?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php elseif ($i < $context->all_page && !$before_ellipsis_shown): ?>
                                    <li><span class="ellipsis">...</span></li>
                                    <?php $before_ellipsis_shown = TRUE; ?>
                                <?php elseif ($i > $context->all_page && !$after_ellipsis_shown): ?>
                                    <li><span class="ellipsis">...</span></li>
                                    <?php $after_ellipsis_shown = TRUE; ?>
                                <?php endif; ?>
                        <?php endfor; ?>
                        <?php if($context->all_page != $all_pages): ?>
                            <li class="arrow next"><a href="<?php echo outputPages(array_merge($page_array, array('all_page' => $context->all_page + 1))); ?>" title="Go to the next page">next →</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>My Lockups</th>
                    <th>Approver</th>
                    <th>Status</th>
                    <th class="right">Actions</th>
                </tr>   
            </thead>
            <tbody>
            <?php foreach ($context->my_lockups as $lockup): ?>
                <tr>
                    <td><a href="<?php echo $lockup->getPreviewURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                    <td><?php echo $lockup->getApproverName(); ?></td>
                    <td><?php echo $lockup->getFullStatusText(); ?></td>
                    <td class="table-actions right" style="min-width: 200px;">
                        <?php if ($lockup->isEditable()): ?>
                            <a class="wdn-button wdn-button-triad" href="<?php echo $lockup->getEditURL(); ?>">Edit</a>
                        <?php endif; ?>
                        <form action="<?php echo $lockup->getDeleteURL(); ?>" method="POST" class="delete-form">
                            <button type="submit" class="wdn-button wdn-button-brand">Delete</button>
                            <input type="hidden" name="id" value="<?php echo $lockup->id ?>">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php if ($my_pages > 1): ?>
            <div style="text-align: center;">
                <div style="display: inline-block;">
                    <ul id="pending-pagination" class="wdn_pagination" data-tab="pending" style="padding-left: 0;">
                        <?php if($context->my_page != 1): ?>
                            <li class="arrow prev"><a href="<?php echo outputPages(array_merge($page_array, array('page' => $context->my_page - 1))); ?>" title="Go to the previous page">← prev</a></li>
                        <?php endif; ?>
                        <?php $before_ellipsis_shown = FALSE; $after_ellipsis_shown = FALSE; ?>
                        <?php for ($i = 1; $i <= $my_pages; $i++): ?>
                                <?php if ($i == $context->my_page): ?>
                                    <li class="selected"><span><?php echo $i; ?></span></li>
                                <?php elseif ($i <= 3 || $i >= $my_pages - 2 || $i == $context->my_page - 1 || 
                                            $i == $context->my_page - 2 || $i == $context->my_page + 1 || $i == $context->my_page + 2): ?>
                                    <li><a href="<?php echo outputPages(array_merge($page_array, array('page' => $i))); ?>" title="Go to page <?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php elseif ($i < $context->my_page && !$before_ellipsis_shown): ?>
                                    <li><span class="ellipsis">...</span></li>
                                    <?php $before_ellipsis_shown = TRUE; ?>
                                <?php elseif ($i > $context->my_page && !$after_ellipsis_shown): ?>
                                    <li><span class="ellipsis">...</span></li>
                                    <?php $after_ellipsis_shown = TRUE; ?>
                                <?php endif; ?>
                        <?php endfor; ?>
                        <?php if($context->my_page != $my_pages): ?>
                            <li class="arrow next"><a href="<?php echo outputPages(array_merge($page_array, array('page' => $context->my_page + 1))); ?>" title="Go to the next page">next →</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
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
        <?php if ($approver_pages > 1): ?>
            <div style="text-align: center;">
                <div style="display: inline-block;">
                    <ul id="pending-pagination" class="wdn_pagination" data-tab="pending" style="padding-left: 0;">
                        <?php if($context->approver_page != 1): ?>
                            <li class="arrow prev"><a href="<?php echo outputPages(array_merge($page_array, array('approver_page' => $context->approver_page - 1))); ?>" title="Go to the previous page">← prev</a></li>
                        <?php endif; ?>
                        <?php $before_ellipsis_shown = FALSE; $after_ellipsis_shown = FALSE; ?>
                        <?php for ($i = 1; $i <= $approver_pages; $i++): ?>
                                <?php if ($i == $context->approver_page): ?>
                                    <li class="selected"><span><?php echo $i; ?></span></li>
                                <?php elseif ($i <= 3 || $i >= $approver_page - 2 || $i == $context->approver_page - 1 || 
                                            $i == $context->approver_page - 2 || $i == $context->approver_page + 1 || $i == $context->approver_page + 2): ?>
                                    <li><a href="<?php echo outputPages(array_merge($page_array, array('approver_page' => $i))); ?>" title="Go to page <?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php elseif ($i < $context->approver_page && !$before_ellipsis_shown): ?>
                                    <li><span class="ellipsis">...</span></li>
                                    <?php $before_ellipsis_shown = TRUE; ?>
                                <?php elseif ($i > $context->approver_page && !$after_ellipsis_shown): ?>
                                    <li><span class="ellipsis">...</span></li>
                                    <?php $after_ellipsis_shown = TRUE; ?>
                                <?php endif; ?>
                        <?php endfor; ?>
                        <?php if($context->approver_page != $approver_pages): ?>
                            <li class="arrow next"><a href="<?php echo outputPages(array_merge($page_array, array('approver_page' => $context->approver_page + 1))); ?>" title="Go to the next page">next →</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

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
        <?php if ($creative_pages > 1): ?>
            <div style="text-align: center;">
                <div style="display: inline-block;">
                    <ul id="pending-pagination" class="wdn_pagination" data-tab="pending" style="padding-left: 0;">
                        <?php if($context->creative_page != 1): ?>
                            <li class="arrow prev"><a href="<?php echo outputPages(array_merge($page_array, array('creative_page' => $context->creative_page - 1))); ?>" title="Go to the previous page">← prev</a></li>
                        <?php endif; ?>
                        <?php $before_ellipsis_shown = FALSE; $after_ellipsis_shown = FALSE; ?>
                        <?php for ($i = 1; $i <= $creative_pages; $i++): ?>
                                <?php if ($i == $context->creative_page): ?>
                                    <li class="selected"><span><?php echo $i; ?></span></li>
                                <?php elseif ($i <= 3 || $i >= $context->creative_page - 2 || $i == $context->creative_page - 1 || 
                                            $i == $context->creative_page - 2 || $i == $context->creative_page + 1 || $i == $context->creative_page + 2): ?>
                                    <li><a href="<?php echo outputPages(array_merge($page_array, array('creative_page' => $i))); ?>" title="Go to page <?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php elseif ($i < $context->creative_page && !$before_ellipsis_shown): ?>
                                    <li><span class="ellipsis">...</span></li>
                                    <?php $before_ellipsis_shown = TRUE; ?>
                                <?php elseif ($i > $context->creative_page && !$after_ellipsis_shown): ?>
                                    <li><span class="ellipsis">...</span></li>
                                    <?php $after_ellipsis_shown = TRUE; ?>
                                <?php endif; ?>
                        <?php endfor; ?>
                        <?php if($context->creative_page != $creative_pages): ?>
                            <li class="arrow next"><a href="<?php echo outputPages(array_merge($page_array, array('creative_page' => $context->creative_page + 1))); ?>" title="Go to the next page">next →</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <?php endif; ?>
    <?php endif; ?>
	</div>
</div>