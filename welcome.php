<?php
require "lab-panel/include/inc_fe.php";
$errorMsg = "";

$smarty->assign("errorMsg", $errorMsg);
$smarty->assign("page_title", "MSDP LAB Tool Availability");

$smarty->display("welcome.tpl");
//$smarty->display("welcome.tpl");
//$smarty->display("welcome.tpl");
?>
