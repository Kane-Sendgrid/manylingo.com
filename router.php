<?php
// router.php
if ($_SERVER["REQUEST_URI"]=="/") {
    require("./index.html");
}
else if (preg_match('/\.html$/', $_SERVER["REQUEST_URI"])) {
    require("." . $_SERVER["REQUEST_URI"]);
} else {
    return false;
}
?>
