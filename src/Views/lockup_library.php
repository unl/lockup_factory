<style>
#dcf-main svg {
    min-height: 100px;
    min-width: 200px;
}
</style>

<div class="dcf-bleed dcf-pt-8 dcf-pb-8">
	<div class="dcf-wrapper">
        <h3 class="page-title">Lockup Library</h3>
        <form class="dcf-form">
            <label for="search-term">Search Lockups</label>
            <div class="dcf-input-group">
                <input value="<?php echo $context->search_term ?>" type="text" id="search-term" name="search_term">
                <button type="submit" class="dcf-btn dcf-btn-primary">Search</button>
                <?php if (!empty($context->search_term)): ?>
                <button id="clear-search" class="dcf-btn dcf-btn-secondary" type="button">&times;</button>
                <?php endif; ?>
            </div>
        </form>
        <br>
        <?php foreach ($context->lockups as $chunk): ?>
            <h4>Lockups Approved For <?php echo $chunk[0]->approver == '' ? '(unknown)' : $chunk[0]->approver->organization ?></h4>
            <table class="dcf-table dcf-table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Preview</th>
                    </tr>   
                </thead>
                <tbody>
                    <?php foreach ($chunk as $lockup): ?>
                        <tr>
                            <td><a href="<?php echo $lockup->getDownloadURL(); ?>"><?php echo $lockup->getName(); ?></a></td>
                            <td><a href="<?php echo $lockup->getDownloadURL(); ?>" aria-label="View lockup <?php echo $lockup->getName(); ?>"><?php echo $lockup->preview_svg; ?></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
        <?php endforeach; ?>
    </div>
</div>

<?php
$context->scriptState->loadScriptDeclaration("
require(['jquery'], function ($) {
    $(document).ready(function () {
        $('#clear-search').click(function (click) {
            window.location = window.location.href.split('?')[0];
        });
    });
});");
?>