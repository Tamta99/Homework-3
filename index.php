<?php
include 'template.php';

$template = new Template;

$template->assign('Forall', 'Hello');
$template->assign('Username', 'Tamta');
$template->assign('sign', '!');

$template->render('mytemplate');

?>
