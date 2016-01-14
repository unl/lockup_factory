<?php
use UNL\Templates\Templates;

$page = Templates::factory('Fixed', Templates::VERSION_4_1);

$wdn_include_path = __DIR__ . '/../wdn/templates_4.1';
if (file_exists($wdn_include_path)) {
    $page->setLocalIncludePath($wdn_include_path);
}

# Document titles
$page->doctitle = '<title>UNL Lockup Factory</title>';
$page->titlegraphic = 'UNL Lockup Factory';
$page->pagetitle = '';
$page->affiliation = '<a href="http://ucomm.unl.edu">University Communications</a>';

# css

# javascript

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
<li><a href="/">New Lockup</a></li>
<li><a href="/manage/">Manage Lockups</a></li>
</ul>'
;

# set output and footer
$page->maincontentarea = $main_content;
$page->leftcollinks = 'leftcollinks';

# echo everything
echo $page;
