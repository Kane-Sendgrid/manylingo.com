<div class="container">
    <div class="col-md-12">

    <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
        <div class="container">
        <a class="navbar-brand logo-right" href="javascript:void(0)"><i class="mdi-editor-functions"></i>ManyLingo</a>
        <div class="navbar-header">
            <ul class="nav navbar-nav main-navigation hidden-sm visible-md-block visible-lg-block">
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
                <li><a href="/#contact-form">Contact</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <button class="menu-icon"  id="open-button">
            <i class="mdi-navigation-menu"></i>
            </button>
        </div>
        </div>
    </div>
</div>
