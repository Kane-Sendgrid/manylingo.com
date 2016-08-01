<?php
function activeClass($active){
    $url = $_SERVER["REQUEST_URI"];
    if ($url == $active) {
        return "active";
    }
}

?>
