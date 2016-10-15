<?php
require_once("./functions.php");
?>
<div class="navbar navbar-invers menu-wrap">
    <div class="navbar-header text-center">
    <a class="navbar-brand logo-right" href="javascript:void(0)"><i class="mdi-editor-functions"></i>ManyLingo</a>
    </div>
    <ul class="nav navbar-nav main-navigation">
        <li class="<?php echo activeClass("/"); ?>"><a href="/">Home</a></li>
        <li class="<?php echo activeClass("/about.html"); ?>"><a href="/about.html">About</a></li>
        <li class="<?php echo activeClass("/services.html"); ?> dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
            <ul class="dropdown-menu" style="padding-left:15px;font-size:90%;">
                <li><a href="/services.html">Services</a></li>
                <li><a href="/services.html#translation">Translation</a></li>
                <li><a href="/services.html#localization">localization</a></li>
                <li><a href="/services.html#transcreation">Transcreation</a></li>
                <li><a href="/services.html#voiceover">Voiceover</a></li>
            </ul>
        </li>
        <li class="<?php echo activeClass("/prices.html"); ?>"><a href="/prices.html">Prices</a></li>
        <li class="<?php echo activeClass("/faq.html"); ?>"><a href="/faq.html">FAQ</a></li>
        <li><a href="/#contact">Contact</a></li>
    </ul>
    <button class="close-button" id="close-button">Close Menu</button>
</div>
