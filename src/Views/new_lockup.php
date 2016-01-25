<div class="wdn-band">
	<div class="wdn-inner-wrapper">
        <h3 class="page-title">Create New Logo Lockup</h3>
        <form method="POST" action="">
            <fieldset>
                <legend>Style</legend>
        		<div class="bp2-wdn-grid-set-halves wdn-center">
                    <div class="wdn-col">
                    	<label>
                            <input type="radio" name="type" value="org_only" id="type-org-only" checked="checked">
                            <img src="/images/org_only_example.png"
                        </label>
                        <label for="type-org-only">
                            Organization-only lockup. For colleges, departments, and organizations that don't need/want to show
                            a parent organization.
                        </label>
                    </div>
                    <div class="wdn-col">
                    	<label>
                            <input type="radio" name="type" value="affil_org" id="type-affil-org">
                            <img src="/images/affil_org_example.png"
                        </label>
                        <label for="type-affil-org">
                        Affiliation-organization combination lockup. For showing your parent organization/affiliation with your department.
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Text</legend>
                <label for="organization">Organization</label>
                <input type="text" name="organization" id="organization">
                <br>
                <div id="affil-field" style="display: none;">
                    <label for="affiliation">Affiliation</label>
                    <input type="text" name="affiliation" id="affiliation">
                    <br>
                </div>
                <br>
                <button type="submit" class="wdn-button wdn-button-triad">Submit</button>
            </fieldset>
        </form>
	</div>
</div>

<script type="text/javascript">
require(['jquery'], function ($) {
    $(document).ready(function () {
        $('input[type=radio]').click(function (click) {
            if ($('#type-org-only').is(':checked')) {
                $('#affil-field').hide();
            } else {
                $('#affil-field').show();
            }
        });
    });
});
</script>