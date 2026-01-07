<?php
// include the core and database
include_once "../../../../config/core.php";
include_once "../../../../config/database.php";

$page_title = "Overview";
$require_login = true;
include_once "../../../../login_checker.php";
include_once "../../layout/layout_head.php";

// include the navbar
include_once "navbar.php";
?>


<?php "../../layout/layout_foot.php";?>