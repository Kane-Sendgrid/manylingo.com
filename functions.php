<?php
if(isset($_REQUEST["contact_form"])) {
    $message = <<<EOD
    From: {$_REQUEST["email"]}
    {$_REQUEST["message"]}
EOD;
    mail("kane.isturm@gmail.com", "ManyLingo contact request", $message);
}

function activeClass($active){
    $url = $_SERVER["REQUEST_URI"];
    if ($url == $active) {
        return "active";
    }
}

?>
