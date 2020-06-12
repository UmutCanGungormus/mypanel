<?php $settings = get_settings(); ?>
<nav id="app-navbar" class="navbar navbar-expand-lg navbar-dark danger fixed-top">

    <a class="navbar-brand" href="<?= base_url() ?>"><img width="150" src="https://mutfakyapim.com/images/mutfak/logo.png?v=1" alt="Mutfak Yapım" class="img-fluid"></a>
    <button type="button" id="menubar-toggle-btn" class="navbar-toggler d-sm-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
        <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
            <li class="hidden-float hidden-menubar-top">
                <a href="javascript:void(0)" role="button" id="menubar-fold-btn" class="hamburger hamburger--arrowalt is-active js-hamburger">
                    <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                </a>
            </li>
        </ul>
    </div>
</nav>