<?php
require_once "navigation.php";
?>
<?php

if (!empty($data)) {
if (!empty($_GET["action"])) {
switch ($_GET["action"]) {
case "create":
require_once "html/itemCreate.php";
break;
case "listAll":
require_once "html/itemList.php";
break;
case "view":
require_once "html/itemView.php";
break;
case "update":
require_once "html/itemUpdate.php";
break;
default:
require_once "html/itemList.php";
break;
}
}
}
?>
<?php
require_once "footer.php";
?>