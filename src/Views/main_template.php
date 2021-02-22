<?php
use UNL\Templates\Templates;

$page = Templates::factory('AppLocal', Templates::VERSION_5_3);

# this should be the server root, that is, the public directory of where static files come from.
# the templates library will stick /wdn/templates_5.3 on there for you
$wdn_include_path = \Core::ROOT . '/public';
if (file_exists($wdn_include_path . '/wdn/templates_5.3')) {
    $page->setLocalIncludePath($wdn_include_path);
}

$baseURL = '/';
$appControlURL = '';

// Hacks for when in dev env uncomment but don't commit
// TODO: Make app dev friendly
//$baseURL = $controllerOutput->getBaseURL();
//$appControlURL = $baseURL;

# Document titles
$page->doctitle = '<title>UNL Lockup Factory</title>';
$page->titlegraphic = '<a class="dcf-txt-h5" href="' .  $baseURL . '">UNL Lockup Factory</a>';
$page->affiliation = '<a href="http://ucomm.unl.edu">University Communication</a>';

// Add WDN Deprecated Styles
$page->head .= '<link rel="preload" href="/wdn/templates_5.3/css/deprecated.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'"> <noscript><link rel="stylesheet" href="/wdn/templates_5.3/css/deprecated.css"></noscript>';

# css
$page->addStyleSheet($baseURL . 'css/main.css');

# javascript
$page->addScriptDeclaration('WDN.setPluginParam("idm", "logout", "/logout/");');
$page->addScriptDeclaration('WDN.initializePlugin("notice");');

# navigation
$page->appcontrols = '
<ul>
<li><a href="' .  $appControlURL . '/lockups/create/">New Lockup</a></li>
<li><a href="' .  $appControlURL . '/lockups/manage/">Manage Lockups</a></li>
<li><a href="' .  $appControlURL . '/lockups/library/">Lockup Library</a></li>
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

$page->maincontentarea .= $controllerOutput->getContent();
$scriptState = $controllerOutput->getScriptState();
if ($scriptState instanceof \Models\ScriptState) {
    $scriptState->applyScripts($page);
    $scriptState->applyScriptDeclarations($page);
}

# set footer
ob_start();
include \Core::ROOT . '/src/Views/localfooter.php';
$page->contactinfo = ob_get_clean();

# echo everything
echo $page;
