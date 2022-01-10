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
    if (!empty($context->search_term)) {
        $page_array['search_term'] = $context->search_term;
    }

    function outputParam($key, $val) {
        return $key . '=' . $val;
    }

    function outputPages($array) {
        $str = '?';
        return $str . implode('&', array_map('outputParam', array_keys($array), $array));
    }
?>
<div class="dcf-bleed dcf-pt-8 dcf-pb-8">
	<div class="dcf-wrapper">
    <h3 class="page-title">Manage Lockups</h3>
    <form class="dcf-form">
        <label for="search-term">Search Lockups</label>
        <div class="dcf-input-group">
            <input value="<?php echo $context->search_term ?>" type="text" name="search_term" id="search-term">
            <button type="submit" class="dcf-btn dcf-btn-primary" >Search</button>
	        <?php if (!empty($context->search_term)): ?>
                <button id="clear-search" class="dcf-btn dcf-btn-secondary" type="button">&times;</button>
	        <?php endif; ?>
        </div>
    </form>
    <?php if (\Auth::$current_user->isAdmin()): ?>
        <h4 class="dcf-mt-6">All Lockups</h4>
        <table class="dcf-table dcf-table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Submitter</th>
                    <th>Submitted</th>
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
                    <td><?php echo !is_null($lockup->user) ? $lockup->user->username: 'Unknown'; ?></td>
                    <td><?php echo $lockup->date_created;?></td>
                    <td><?php echo $lockup->getApproverName(); ?></td>
                    <td><?php echo $lockup->getFullStatusText(); ?></td>
                    <td><?php echo $lockup->version; ?></td>
                    <td class="table-actions right" style="min-width: 250px;">
                        <?php if ($lockup->isEditable()): ?>
                            <a class="dcf-btn dcf-btn-secondary" href="<?php echo $lockup->getEditURL(); ?>">Edit</a>
                        <?php endif; ?>
                        <?php if ($lockup->isGenerated() && $lockup->isPublished()): ?>
                        <form action="<?php echo $lockup->getUnpublishURL(); ?>" method="POST" class="dcf-form delete-form">
                            <button type="submit" class="dcf-btn dcf-btn-primary">Unpublish</button>
                            <input type="hidden" name="id" value="<?php echo $lockup->id ?>">
                        </form>
                        <?php endif; ?>
                        <?php if ($lockup->isGenerated() && !$lockup->isPublished()): ?>
                        <form action="<?php echo $lockup->getPublishURL(); ?>" method="POST" class="dcf-form delete-form">
                            <button type="submit" class="dcf-btn dcf-btn-secondary">Publish</button>
                            <input type="hidden" name="id" value="<?php echo $lockup->id ?>">
                        </form>
                        <?php endif; ?>
                        <form action="<?php echo $lockup->getDeleteURL(); ?>" method="POST" class="dcf-form delete-form">
                            <button type="submit" class="dcf-btn dcf-btn-primary">Delete</button>
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
                    <nav class="dcf-pagination dcf-txt-center dcf-mt-3">
                        <ol class="dcf-list-bare dcf-list-inline">
                        <?php if($context->all_page != 1): ?>
                            <li><a class="dcf-pagination-prev" href="<?php echo outputPages(array_merge($page_array, array('all_page' => $context->all_page - 1))); ?>">Prev</a></li>
                        <?php endif; ?>
                        <?php $before_ellipsis_shown = FALSE; $after_ellipsis_shown = FALSE; ?>
                        <?php for ($i = 1; $i <= $all_pages; $i++): ?>
                                <?php if ($i == $context->all_page): ?>
                                    <li><span class="dcf-pagination-selected"><?php echo $i; ?></span></li>
                                <?php elseif ($i <= 3 || $i >= $all_pages - 2 || $i == $context->all_page - 1 || 
                                            $i == $context->all_page - 2 || $i == $context->all_page + 1 || $i == $context->all_page + 2): ?>
                                    <li><a href="<?php echo outputPages(array_merge($page_array, array('all_page' => $i))); ?>"><?php echo $i; ?></a></li>
                                <?php elseif ($i < $context->all_page && !$before_ellipsis_shown): ?>
                                    <li><span class="dcf-pagination-ellipsis">...</span></li>
                                    <?php $before_ellipsis_shown = TRUE; ?>
                                <?php elseif ($i > $context->all_page && !$after_ellipsis_shown): ?>
                                    <li><span class="dcf-pagination-ellipsis">...</span></li>
                                    <?php $after_ellipsis_shown = TRUE; ?>
                                <?php endif; ?>
                        <?php endfor; ?>
                        <?php if($context->all_page != $all_pages): ?>
                            <li><a class="dcf-pagination-next" href="<?php echo outputPages(array_merge($page_array, array('all_page' => $context->all_page + 1))); ?>">Next</a></li>
                        <?php endif; ?>
                        </ol>
                    </nav>
                </div>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <?php if (\Auth::$current_user->isApprover()): ?>
        <h4>Lockups Needing Communicator Approval</h4>
        <table class="dcf-table dcf-table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Submitter</th>
                    <th>Submitted</th>
                    <th>Status</th>
                </tr>   
            </thead>
            <tbody>
            <?php foreach ($context->approver_lockups as $lockup): ?>
                <tr>
                    <td><a href="<?php echo $lockup->getPreviewURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                    <td><?php echo $lockup->user->username ?></td>
                    <td><?php echo date('M j, Y', strtotime($lockup->date_created)) ?></td>
                    <td><?php echo $lockup->getFullStatusText(); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php if ($approver_pages > 1): ?>
            <div style="text-align: center;">
                <div style="display: inline-block;">
                    <nav class="dcf-pagination dcf-txt-center dcf-mt-3">
                        <ol class="dcf-list-bare dcf-list-inline">
                        <?php if($context->approver_page != 1): ?>
                            <li><a class="dcf-pagination-prev" href="<?php echo outputPages(array_merge($page_array, array('approver_page' => $context->approver_page - 1))); ?>">Prev</a></li>
                        <?php endif; ?>
                        <?php $before_ellipsis_shown = FALSE; $after_ellipsis_shown = FALSE; ?>
                        <?php for ($i = 1; $i <= $approver_pages; $i++): ?>
                                <?php if ($i == $context->approver_page): ?>
                                    <li><span class="dcf-pagination-selected"><?php echo $i; ?></span></li>
                                <?php elseif ($i <= 3 || $i >= $approver_page - 2 || $i == $context->approver_page - 1 || 
                                            $i == $context->approver_page - 2 || $i == $context->approver_page + 1 || $i == $context->approver_page + 2): ?>
                                    <li><a href="<?php echo outputPages(array_merge($page_array, array('approver_page' => $i))); ?>"><?php echo $i; ?></a></li>
                                <?php elseif ($i < $context->approver_page && !$before_ellipsis_shown): ?>
                                    <li><span class="dcf-pagination-ellipsis">...</span></li>
                                    <?php $before_ellipsis_shown = TRUE; ?>
                                <?php elseif ($i > $context->approver_page && !$after_ellipsis_shown): ?>
                                    <li><span class="dcf-pagination-ellipsis">...</span></li>
                                    <?php $after_ellipsis_shown = TRUE; ?>
                                <?php endif; ?>
                        <?php endfor; ?>
                        <?php if($context->approver_page != $approver_pages): ?>
                            <li><a class="dcf-pagination-next" href="<?php echo outputPages(array_merge($page_array, array('approver_page' => $context->approver_page + 1))); ?>">Next</a></li>
                        <?php endif; ?>
                        </ol>
                    </nav>
                </div>
            </div>
        <?php endif; ?>
        <br>
        <?php endif; ?>
        <?php if (\Auth::$current_user->isCreative()): ?>
        <h4>Lockups Needing Creative Approval</h4>
        <table class="dcf-table dcf-table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Submitter</th>
                    <th>Submitted</th>
                    <th>Status</th>
                </tr>   
            </thead>
            <tbody>
            <?php foreach ($context->creative_approval_lockups as $lockup): ?>
                <tr>
                    <td><a href="<?php echo $lockup->getPreviewURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                    <td><?php echo $lockup->user->username ?></td>
                    <td><?php echo date('M j, Y', strtotime($lockup->date_created)) ?></td>
                    <td><?php echo $lockup->getFullStatusText(); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php if ($creative_pages > 1): ?>
            <div style="text-align: center;">
                <div style="display: inline-block;">
                    <nav class="dcf-pagination dcf-txt-center dcf-mt-3">
                        <ol class="dcf-list-bare dcf-list-inline">
                        <?php if($context->creative_page != 1): ?>
                            <li><a class="dcf-pagination-prev" href="<?php echo outputPages(array_merge($page_array, array('creative_page' => $context->creative_page - 1))); ?>">Prev</a></li>
                        <?php endif; ?>
                        <?php $before_ellipsis_shown = FALSE; $after_ellipsis_shown = FALSE; ?>
                        <?php for ($i = 1; $i <= $creative_pages; $i++): ?>
                                <?php if ($i == $context->creative_page): ?>
                                    <li><span class="dcf-pagination-selected"><?php echo $i; ?></span></li>
                                <?php elseif ($i <= 3 || $i >= $context->creative_page - 2 || $i == $context->creative_page - 1 || 
                                            $i == $context->creative_page - 2 || $i == $context->creative_page + 1 || $i == $context->creative_page + 2): ?>
                                    <li><a href="<?php echo outputPages(array_merge($page_array, array('creative_page' => $i))); ?>"><?php echo $i; ?></a></li>
                                <?php elseif ($i < $context->creative_page && !$before_ellipsis_shown): ?>
                                    <li><span class="dcf-pagination-ellipsis">...</span></li>
                                    <?php $before_ellipsis_shown = TRUE; ?>
                                <?php elseif ($i > $context->creative_page && !$after_ellipsis_shown): ?>
                                    <li><span class="dcf-pagination-ellipsis">...</span></li>
                                    <?php $after_ellipsis_shown = TRUE; ?>
                                <?php endif; ?>
                        <?php endfor; ?>
                        <?php if($context->creative_page != $creative_pages): ?>
                            <li><a class="dcf-pagination-next" href="<?php echo outputPages(array_merge($page_array, array('creative_page' => $context->creative_page + 1))); ?>">Next</a></li>
                        <?php endif; ?>
                        </ol>
                    </nav>
                </div>
            </div>
        <?php endif; ?>
        <br>
        <?php endif; ?>
        <h4>My Lockups</h4>
        <table class="dcf-table dcf-table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
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
                            <a class="dcf-btn dcf-btn-secondary" href="<?php echo $lockup->getEditURL(); ?>">Edit</a>
                        <?php endif; ?>
                        <?php if ($lockup->isGenerated() && $lockup->isPublished()): ?>
                        <form action="<?php echo $lockup->getUnpublishURL(); ?>" method="POST" class="dcf-form delete-form">
                            <button type="submit" class="dcf-btn dcf-btn-primary">Unpublish</button>
                            <input type="hidden" name="id" value="<?php echo $lockup->id ?>">
                        </form>
                        <?php endif; ?>
                        <?php if ($lockup->isGenerated() && !$lockup->isPublished()): ?>
                        <form action="<?php echo $lockup->getPublishURL(); ?>" method="POST" class="dcf-form delete-form">
                            <button type="submit" class="dcf-btn dcf-btn-secondary">Publish</button>
                            <input type="hidden" name="id" value="<?php echo $lockup->id ?>">
                        </form>
                        <?php endif; ?>
                        <form action="<?php echo $lockup->getDeleteURL(); ?>" method="POST" class="dcf-form delete-form">
                            <button type="submit" class="dcf-btn dcf-btn-primary">Delete</button>
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
                    <nav class="dcf-pagination dcf-txt-center dcf-mt-3">
                        <ol class="dcf-list-bare dcf-list-inline">
                        <?php if($context->my_page != 1): ?>
                            <li><a class="dcf-pagination-prev" href="<?php echo outputPages(array_merge($page_array, array('page' => $context->my_page - 1))); ?>">Prev</a></li>
                        <?php endif; ?>
                        <?php $before_ellipsis_shown = FALSE; $after_ellipsis_shown = FALSE; ?>
                        <?php for ($i = 1; $i <= $my_pages; $i++): ?>
                                <?php if ($i == $context->my_page): ?>
                                    <li><span class="dcf-pagination-selected"><?php echo $i; ?></span></li>
                                <?php elseif ($i <= 3 || $i >= $my_pages - 2 || $i == $context->my_page - 1 || 
                                            $i == $context->my_page - 2 || $i == $context->my_page + 1 || $i == $context->my_page + 2): ?>
                                    <li><a href="<?php echo outputPages(array_merge($page_array, array('page' => $i))); ?>"><?php echo $i; ?></a></li>
                                <?php elseif ($i < $context->my_page && !$before_ellipsis_shown): ?>
                                    <li><span class="dcf-pagination-ellipsis">...</span></li>
                                    <?php $before_ellipsis_shown = TRUE; ?>
                                <?php elseif ($i > $context->my_page && !$after_ellipsis_shown): ?>
                                    <li><span class="dcf-pagination-ellipsis">...</span></li>
                                    <?php $after_ellipsis_shown = TRUE; ?>
                                <?php endif; ?>
                        <?php endfor; ?>
                        <?php if($context->my_page != $my_pages): ?>
                            <li><a  class="dcf-pagination-next" href="<?php echo outputPages(array_merge($page_array, array('page' => $context->my_page + 1))); ?>">Next</a></li>
                        <?php endif; ?>
                        </ol>
                    </nav>
                </div>
            </div>
        <?php endif; ?>
        <br>
    <?php endif; ?>
	</div>
</div>

<?php
$context->scriptState->loadScriptDeclaration("
WDN.initializePlugin('pagination');
require(['jquery'], function ($) {
    $(document).ready(function () {
        $('#clear-search').click(function (click) {
            window.location = window.location.href.split('?')[0];
        });
    });
});");
?>