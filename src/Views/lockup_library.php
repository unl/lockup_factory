<style>
svg {
    min-height: 100px;
    min-width: 200px;
}
</style>

<div class="wdn-band">
	<div class="wdn-inner-wrapper">
        <h3 class="page-title">Lockup Library</h3>
        <form>
        <input style="width: auto;" value="<?php echo $context->search_term ?>" type="text" placeholder="Search..." name="search_term">
        <button type="submit" class="wdn-button wdn-button-triad">Search</button>
        <?php if (!empty($context->search_term)): ?>
        <button id="clear-search" class="wdn-button wdn-button" type="button">&times;</button>
        <?php endif; ?>
        </form>
        <br>
        <?php foreach ($context->lockups as $chunk): ?>
            <h4 class="wdn-brand">Lockups Approved For <?php echo $chunk[0]->approver == '' ? '(unknown)' : $chunk[0]->approver->organization ?></h4>
            <table>
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
                            <td><a href="<?php echo $lockup->getDownloadURL(); ?>"><?php echo $lockup->preview_svg; ?></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
        <?php endforeach; ?>
    </div>
</div>

<script type="text/javascript">
require(['jquery'], function ($) {
    $(document).ready(function () {
        $('#clear-search').click(function (click) {
            window.location = window.location.href.split('?')[0];
        });
    });
});
</script>