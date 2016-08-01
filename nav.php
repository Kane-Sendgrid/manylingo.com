<?php
require_once("./functions.php");
?>
<ul class="nav navbar-nav main-navigation">
    <li class="<?php echo activeClass("/"); ?>"><a href="/">Home</a></li>
    <li class="<?php echo activeClass("/about.html"); ?>"><a href="/about.html">About</a></li>
    <li class="<?php echo activeClass("/services.html"); ?>"><a href="/services.html">Services</a></li>
    <li class="<?php echo activeClass("/prices.html"); ?>"><a href="/prices.html">Prices</a></li>
    <li class="<?php echo activeClass("/faq.html"); ?>"><a href="/faq.html">FAQ</a></li>
    <li><a href="#contact">Contact</a></li>
</ul>
