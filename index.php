<?php
include 'template.php';

$template = new Template;

$template->assign('Begin', 'Hello');
$template->assign('Username', 'Tamta');
$template->assign('sign', '!');

$template->render('mytemplate');

?>
