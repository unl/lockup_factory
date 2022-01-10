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
    $class = 'dcf-notice-info';
    switch ($notice['level']) {
        case 'success':
            $class = 'dcf-notice-success';
            break;
        case 'failure':
            $class = 'dcf-notice-danger';
            break;
        case 'alert':
            $class = 'dcf-notice-warning';
            break;
        default:
            $class = 'dcf-notice-info';
            break;
    }
    $page->maincontentarea .= '
        <div id="notice" class="dcf-mt-4 dcf-notice ' . $class . '" hidden>
            <h2>' . $notice['header'] . '</h2>
            <div class="message-content">' . html_entity_decode($notice['messageHTML']) . '</div>
        </div>
    ';
} else {
    $page->maincontentarea .= '
        <div id="notice" class="dcf-mt-4 dcf-notice dcf-notice-info" hidden style="display: none!important;">
            <h2>Message Header</h2>
            <div class="message-content">Message Content</div>
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
