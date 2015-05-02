<?php
session_start();
require './Smarty.class.php';
// if ($_SESSION['saved']) $smarty->assign('saved',$_SESSION['saved']);
$supported = array('php','bash','wct');
foreach($supported as $support) {if (!file_exists("./exec/{$support}")) {echo "Service Temporarily unavailable (Missing an language: {$support})";exit;}}
if ($_GET['completed_id']) {
    $file = json_decode(file_get_contents("./sessions/".$_GET['completed_id']),true);
    $smarty->assign('code',$file['code'])->assign('result',$file['response']);
}
$smarty->display('./templates/index.tpl');