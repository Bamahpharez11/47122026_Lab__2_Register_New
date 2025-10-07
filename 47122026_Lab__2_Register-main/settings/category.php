<?php
require_once("../settings/core.php");
if (!is_logged_in() || !is_admin()) {
    header("Location: ../login.php");
    exit();
}
// ...HTML for category CRUD forms and JS includes...
?>