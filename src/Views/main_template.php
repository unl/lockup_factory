<?php
use UNL\Templates\Templates;

$page = Templates::factory('Fixed', Templates::VERSION_4_1);

# this should be the server root, that is, the public directory of where static files come from.
# the templates library will stick /wdn/templates_4.1 on there for you
$wdn_include_path = \Core::ROOT . '/public';
if (file_exists($wdn_include_path)) {
    $page->setLocalIncludePath($wdn_include_path);
}

# Document titles
$page->doctitle = '<title>UNL Lockup Factory</title>';
$page->titlegraphic = 'UNL Lockup Factory';
$page->pagetitle = '';
$page->affiliation = '<a href="http://ucomm.unl.edu">University Communications</a>';

# css
$page->addStyleSheet('/css/main.css');

# javascript
$page->head .= '<script type="text/javascript">WDN.setPluginParam("idm", "logout", "/logout/");</script>' . PHP_EOL;
$page->head .= '<script type="text/javascript">WDN.initializePlugin("notice");</script>' . PHP_EOL;

# other

# breadcrumbs
$page->breadcrumbs = '<ul>';
foreach (\Core::$breadcrumbs as $crumb) { 
	$page->breadcrumbs .= '<li>';
	if (!empty($crumb['href'])) {
		$page->breadcrumbs .= '<a href="' . $crumb['href'] . '">' . $crumb['text'] . '</a>';
	} else {
		$page->breadcrumbs .= $crumb['text'];
	}
	$page->breadcrumbs .= '</li>';
}
$page->breadcrumbs .= '</ul>';

# navigation
$page->navlinks = '
<ul>
<li><a href="/lockups/create/">New Lockup</a></li>
<li><a href="/lockups/manage/">Manage Lockups</a></li>
<li><a href="/lockups/library/">Lockup Library</a></li>
</ul>'
;

# set output
$page->maincontentarea = '';
if (($notice = \Core::getNotice()) != NULL) {
    $class = '';
    switch ($notice['level']) {
        case 'success':
            $class = 'affirm';
            break;
        case 'failure':
            $class = 'negate';
            break;
        case 'alert':
            $class = 'alert';
            break;
    }
    $page->maincontentarea .= '
        <div id="notice" class="wdn_notice ' . $class . '">
            <div class="close">
            <a href="#" title="Close this notice">Close this notice</a>
            </div>
            <div class="message">
            <h4>' . $notice['header'] . '</h4>
            <div class="message-content">' . html_entity_decode($notice['messageHTML']) . '</div>
            </div>
        </div>
    ';
} else {
    $page->maincontentarea .= '
        <div id="notice" class="wdn_notice" style="display: none;">
            <div class="close">
            <a href="#" title="Close this notice">Close this notice</a>
            </div>
            <div class="message">
            <h4>Message Header</h4>
            <div class="message-content">Message Content</div>
            </div>
        </div>
    ';
}
$page->maincontentarea .= $main_content;


# set footer
ob_start();
include \Core::ROOT . '/src/Views/localfooter.php';
$page->leftcollinks = ob_get_clean();

# echo everything
echo $page;
