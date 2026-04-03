<?php require_once __DIR__ . '/url-helper.php'; ?>
<!-- Marquee Announcement -->
<div style="background:#E92227; color:white; font-weight:600; font-size:16px; padding:6px 0; overflow:hidden;">
    <div class="custom-marquee">
        <div class="custom-marquee-content">
            <span>
                <strong>Summer Sale is Here!</strong> Enjoy <strong>10% OFF</strong> on all packaging solutions when
                you shop through our Website or Mobile App.
                Use code <strong>SUMMERSALE10</strong> at checkout.
                Hurry-offer valid for a limited time!
            </span>

            <span class="marquee-gap"></span>

            <span>
                <strong>Summer Sale is Here!</strong> Enjoy <strong>10% OFF</strong> on all packaging solutions when you
                shop through our Website or Mobile App.
                Use code <strong>SUMMERSALE10</strong> at checkout.
                Hurry-offer valid for a limited time!
            </span>
        </div>

    </div>
</div>
<header>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid p-0">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img width="110" src="img/logo.png" alt="prem Industries India Limited" title="" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav"
                aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
                <img src="img/menu.png" alt="menu" title="" />
            </button>
            <div class="collapse navbar-collapse" id="mobile_nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item prem-industries-promo">
                        <a class="nav-link prem-industries-promo-link" href="https://premindustries.net/"
                            target="_blank" rel="noopener noreferrer" aria-label="Visit Prem Industries parent website">
                            <i class="fa fa-angle-right promo-arrow" aria-hidden="true"></i>
                            <span class="promo-text-wrap">
                                <span class="promo-kicker">Other Business</span>
                                <span class="promo-main">PARENT WEBSITE : PREM INDUSTRIES</span>
                            </span>
                        </a>
                    </li>

                    <!--========-->
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Packaging Solutions</a>
                        <div class="dropdown-menu megamenu sm-menu p-0 m-0" aria-labelledby="dropdown01"
                            style="z-index: 999">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6 border-right">
                                    <h6>What we Serve!</h6>
                                    <a class="dropdown-item" href="<?php echo site_url('E-commerce-packaging'); ?>">Ecommerce Packaging </a>
                                    <a class="dropdown-item" href="<?php echo site_url('E-com-paper-bags'); ?>">E-com Paper Bags </a>
                                    <a class="dropdown-item" href="<?php echo site_url('food-packaging'); ?>">Food Packaging</a>
                                    <a class="dropdown-item" href="<?php echo site_url('luxury-packaging'); ?>">Luxury Packaging</a>
                                    <a class="dropdown-item" href="<?php echo site_url('commercial-printing'); ?>">Commercial Printing</a>
                                    <a class="dropdown-item" href="<?php echo site_url('electronics-packaging'); ?>">Electronics Packaging</a>
                                    <a class="dropdown-item" href="<?php echo site_url('beauty-personal-care-packaging'); ?>">Beauty & Personal
                                        Care<br />
                                        Packaging</a>
                                    <a class="dropdown-item" href="<?php echo site_url('fmcg-packaging'); ?>">FMCG Packaging</a>
                                    <a class="dropdown-item" href="<?php echo site_url('healthcare-packaging'); ?>">Healthcare Packaging</a>
                                </div>
                                <div class="col-sm-6 col-lg-6 border-right">
                                    <h6><a href="<?php echo site_url('corrugated-packaging'); ?>">Corrugated Packaging </a></h6>
                                    <a class="dropdown-item" href="<?php echo site_url('corrugated-containers'); ?>">Corrugated Containers</a>
                                    <a class="dropdown-item" href="<?php echo site_url('displays'); ?>">Displays</a>
                                    <h6><a href="<?php echo site_url('sustainability'); ?>">Sustainability</a></h6>
                                    <h6><a href="<?php echo site_url('packaging-technology'); ?>">Packaging Technology</a></h6>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--=========-->

                    <!--========-->
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Products</a>
                        <div class="dropdown-menu megamenu sm-menu border-top p-0 m-0" aria-labelledby="dropdown01">
                            <div class="row">
                                <!-- Add one border-left class bellow for division -->
                                <div class="col-sm-4 col-lg-4">
                                    <a class="dropdown-item" href="<?php echo site_url('corrugated-boxes'); ?>">Corrugated Boxes</a>
                                    <a class="dropdown-item" href="<?php echo site_url('offset-printed-cartons-folding-cartons'); ?>">Offset
                                        Printed Cartons /
                                        <br>Folding Cartons</a>
                                    <a class="dropdown-item" href="<?php echo site_url('flexible-laminates-pouches'); ?>">Flexible Laminates &
                                        Pouches</a>
                                    <a class="dropdown-item" href="<?php echo site_url('retort-packaging'); ?>">Retort Packaging</a>
                                    <a class="dropdown-item" href="<?php echo site_url('rigid-boxes'); ?>">Rigid Boxes</a>
                                    <a class="dropdown-item" href="<?php echo site_url('paper-mailer-bags'); ?>">Paper Mailer Bags</a>
                                    <a class="dropdown-item" href="<?php echo site_url('2-ply-corrugated-mailer-bags'); ?>">2 Ply Corrugated
                                        Mailer Bags</a>
                                    <a class="dropdown-item" href="<?php echo site_url('carry-bags'); ?>">Carry Bags</a>
                                    <a class="dropdown-item" href="<?php echo site_url('packpro-tapes'); ?>">PackPro<sup>&trade;</sup>
                                        Tapes</a>
                                    <a class="dropdown-item" href="<?php echo site_url('wetboxtech'); ?>">WetBoxTech<sup>&trade;</sup></a>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <a class="dropdown-item" href="<?php echo site_url('flexpand'); ?>">Flexpand<sup>&trade;</sup></a>
                                    <a class="dropdown-item" href="<?php echo site_url('rollabel-labels'); ?>">Rollabel<sup>&trade;</sup>
                                        Labels</a>
                                    <a class="dropdown-item" href="<?php echo site_url('labels-with-multiups'); ?>">Rollabel<sup>&trade;</sup>
                                        Labels
                                        with Multiups</a>
                                    <a class="dropdown-item"
                                        href="<?php echo site_url('packpro-honeycomb-food-wrapping-paper'); ?>">PackPro<sup>&trade;</sup>
                                        HoneyComb <br>Food Wrapping Papers</a>
                                    <a class="dropdown-item"
                                        href="<?php echo site_url('packpro-carry-handle-tape'); ?>">PackPro<sup>&trade;</sup>
                                        Carry Handle
                                        Tapes</a>
                                    <a class="dropdown-item" href="<?php echo site_url('peel-and-seal-bags'); ?>">Peel and Seal Bags</a>
                                    <a class="dropdown-item" href="<?php echo site_url('void-tape'); ?>">Void Tapes</a>
                                    <a class="dropdown-item" href="<?php echo site_url('security-bag'); ?>">Security Bags</a>
                                    <a class="dropdown-item" href="<?php echo site_url('returnable-poly-mailer'); ?>">Returnable Poly
                                        Mailers</a>
                                    <a class="dropdown-item" href="<?php echo site_url('m-folder'); ?>">M Folders</a>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <a class="dropdown-item"
                                        href="<?php echo site_url('packpro-honeycomb-wrapper'); ?>">PackPro<sup>&trade;</sup>
                                        HoneyComb
                                        <br>Wrappers</a>
                                    <a class="dropdown-item" href="<?php echo site_url('paper-bubble-bag'); ?>">Paper Bubble Bags</a>
                                    <a class="dropdown-item" href="<?php echo site_url('bubble-pouch'); ?>">Bubble Pouches</a>
                                    <a class="dropdown-item" href="<?php echo site_url('heattechbox'); ?>">HeatTechBox</a>
                                    <a class="dropdown-item" href="<?php echo site_url('variable-depth-box'); ?>">Variable Depth Boxes</a>
                                    <a class="dropdown-item" href="<?php echo site_url('buy-back-box'); ?>">Buy Back Boxes</a>
                                    <a class="dropdown-item" href="<?php echo site_url('child-resistant-pouch'); ?>">Child Resistant Pouch</a>
                                    <a class="dropdown-item" href="<?php echo site_url('paper-cups-and-plates'); ?>">Paper Cups and Plates</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--=========-->

                    <li class="nav-item dmenu dropdown">
                        <button class="nav-link dropdown-toggle" type="button" id="navbarDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="background:none; border:0;">
                            Company Overview
                        </button>
                        <div class="dropdown-menu sm-menu sm2Menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo site_url('about-us'); ?>">About Us</a>
                            <a class="dropdown-item" href="<?php echo site_url('clients'); ?>">Our Clients</a>
                            <a class="dropdown-item" href="<?php echo site_url('careers'); ?>">Careers</a>
                            <a class="dropdown-item" href="<?php echo site_url('awards'); ?>">Awards</a>
                            <a class="dropdown-item" href="<?php echo site_url('quality-control'); ?>">Quality Control</a>
                            <a class="dropdown-item" href="<?php echo site_url('research-development'); ?>">Research & Development</a>
                            <a class="dropdown-item" href="<?php echo site_url('exhibitions'); ?>">Exhibitions</a>
                            <a class="dropdown-item" href="<?php echo site_url('brochure/Prem Packaging.pdf'); ?>" download="Prem Packaging.pdf"
                                target="_blank" rel="noreferrer">Download Brochure</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('innovation'); ?>">Innovation</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('contact-us'); ?>">Contact Us</a></li>

                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('blogs'); ?>">blogs</a></li>


                    <li class="nav-item"><a class="nav-link" href="https://store.prempackaging.com/">
                            <div style="display:flex ; flex-direction:row;align-items:center;">
                                <div><i class="fa fa-shopping-cart fa-lg cart-shake" style="margin-right:6px;"></i>
                                </div>
                                <div>Shop</div>
                            </div>
                        </a></li>

                </ul>
                <ul class="prem-right-menu">
                    <li class="call-header-button">
                        <div class="sub-header-button">
                            <div class="header-info">
                                <span>Talk to an expert</span>
                                <!-- <a href="tel:120-286-7136"><p>120-286-7136</p></a>-->
                                <a href="tel:+91 84472 47227">
                                    <p>+918447247227</p>
                                </a>

                            </div>
                            <!-- <div class="icon-box"><a href="https://wa.link/yts00a" target="_blank"><i class="fa-brands fa-whatsapp text-white" style="font-size: 32px;"></i></a></div> -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <?php include 'StaticSocialButtons.php'; ?>
    </nav>
</header>

<head>
    <style>
    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    @keyframes shake-cart {

        0%,
        80%,
        100% {
            transform: translateX(0);
        }

        10%,
        30%,
        50%,
        70% {
            transform: translateX(-1px);
        }

        20%,
        40%,
        60% {
            transform: translateX(1px);
        }

        85%,
        100% {
            transform: translateX(0);
        }
    }

    .cart-shake {
        animation: shake-cart 2s infinite;
        display: inline-block;
    }

    .navbar .container-fluid {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
    }

    .navbar .navbar-brand {
        display: flex;
        align-items: center;
        flex-shrink: 0;
        margin-right: 10px;
    }

    .navbar .navbar-brand img {
        display: block;
        width: auto;
        max-width: 110px;
        height: auto;
        object-fit: contain;
    }

    .navbar .navbar-toggler {
        flex-shrink: 0;
        margin-left: auto;
    }

    .navbar .navbar-toggler img {
        display: block;
        width: 30px;
        height: 30px;
        object-fit: contain;
    }

    .navbar .dropdown-menu.megamenu {
        width: min(900px, calc(100vw - 24px));
        max-width: calc(100vw - 24px);
        overflow-x: hidden;
    }

    .prem-right-menu {
        display: flex;
        align-items: stretch;
        margin-left: 12px;
        flex-shrink: 0;
    }

    .call-header-button {
        height: auto;
        min-height: 82px;
        display: flex;
        align-items: stretch;
    }

    .navbar-light .sub-header-button {
        height: auto;
        min-height: 82px;
    }

    .sub-header-button .header-info {
        padding: 10px 18px;
        white-space: nowrap;
    }

    .sub-header-button .header-info span {
        display: block;
        font-size: 11px;
        line-height: 1.2;
    }

    .sub-header-button .header-info p {
        font-size: 16px;
        line-height: 1.2;
    }

    .prem-industries-promo {
        margin-right: 8px;
        margin-top: -10px;
        display: flex;
        align-items: center;
        align-self: center;
    }

    .prem-industries-promo .prem-industries-promo-link {
        display: inline-grid;
        grid-template-columns: auto 1fr;
        column-gap: 8px;
        align-items: stretch;
        justify-content: flex-start;
        width: auto;
        height: auto;
        padding: 7px 12px !important;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0;
        color: #7a0b0e !important;
        line-height: 1.1;
        text-transform: none;
        white-space: nowrap;
        /* background: #ffe9ea; */
        border-radius: 3px;
        position: relative;
        transition: all 0.2s ease;
    }

    .prem-industries-promo .prem-industries-promo-link .promo-arrow {
        color: #e92227;
        font-size: 24px;
        font-weight: 800;
        line-height: 1;
        align-self: stretch;
        display: flex;
        align-items: center;
    }

    .prem-industries-promo .promo-text-wrap {
        display: flex;
        flex-direction: column;
        line-height: 1.1;
    }

    .prem-industries-promo .promo-kicker {
        font-size: 9px;
        font-weight: 600;
        color: #b8161b;
        text-transform: uppercase;
        letter-spacing: 0.2px;
    }

    .prem-industries-promo .promo-main {
        font-size: 13px;
        font-weight: 700;
        color: #7a0b0e;
        text-transform: uppercase;
    }

    .prem-industries-promo .prem-industries-promo-link:hover {
        /* background: #e92227; */
        color: #ffffff !important;
        /* border-left-color: #c31318; */
        text-decoration: none;
    }

    .prem-industries-promo .prem-industries-promo-link:hover .promo-kicker,
    .prem-industries-promo .prem-industries-promo-link:hover .promo-main {
        color: #ffecec;
    }

    .prem-industries-promo .prem-industries-promo-link:hover .promo-arrow {
        color: #ffffff;
    }

    .navbar-light .navbar-nav li.prem-industries-promo:hover .prem-industries-promo-link {
        /* background: #e92227; */
        color: #ffffff !important;
        /* border-left-color: #c31318; */
    }

    .navbar-light .navbar-nav li.prem-industries-promo:hover .prem-industries-promo-link .promo-kicker,
    .navbar-light .navbar-nav li.prem-industries-promo:hover .prem-industries-promo-link .promo-main {
        color: #ffecec;
    }

    .navbar-light .navbar-nav li.prem-industries-promo:hover .prem-industries-promo-link .promo-arrow {
        color: #ffffff;
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .navbar .navbar-brand img {
            max-width: 72px;
        }

        .navbar-light .navbar-nav .nav-link {
            padding-left: 3px;
            padding-right: 3px;
            padding-top: 18px;
            padding-bottom: 18px;
            font-size: 11px;
            letter-spacing: 0;
        }

        .prem-industries-promo {
            margin-right: 2px;
            margin-top: 0;
        }

        .prem-industries-promo .prem-industries-promo-link {
            padding: 3px 4px !important;
            column-gap: 4px;
        }

        .prem-industries-promo .promo-arrow {
            font-size: 14px;
        }

        .prem-industries-promo .promo-kicker {
            font-size: 7px;
        }

        .prem-industries-promo .promo-main {
            font-size: 9px;
        }

        .prem-right-menu {
            margin-left: 2px;
        }

        .call-header-button,
        .navbar-light .sub-header-button {
            min-height: 42px;
        }

        .sub-header-button .header-info {
            padding: 4px 6px;
            white-space: normal;
        }

        .sub-header-button .header-info span {
            font-size: 7px;
        }

        .sub-header-button .header-info p {
            font-size: 10px;
            line-height: 1.2;
            margin: 0;
        }
    }

    @media (max-width: 991px) {
        .navbar {
            position: relative;
        }

        .navbar .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
            flex-wrap: wrap;
        }

        .navbar .navbar-brand {
            padding-left: 0 !important;
            margin-left: 0 !important;
            margin-right: 8px;
            max-width: calc(100vw - 80px);
        }

        .navbar .navbar-brand img {
            max-width: 104px;
            max-height: 42px;
        }

        .navbar .navbar-toggler {
            padding: 4px;
        }

        .navbar .navbar-toggler img {
            width: 26px;
            height: 26px;
        }

        div#mobile_nav {
            top: 100%;
            max-height: calc(100vh - 130px);
            overflow-y: auto;
            padding-bottom: 12px;
        }

        #mobile_nav .navbar-nav {
            width: 100%;
            margin-left: 0 !important;
        }

        #mobile_nav .navbar-nav .nav-item {
            width: 100%;
        }

        #mobile_nav .navbar-nav .nav-link {
            display: block;
            width: 100%;
            padding: 13px 12px;
        }

        .prem-industries-promo {
            margin: 0;
            width: 100%;
        }

        .prem-industries-promo .prem-industries-promo-link {
            width: 100%;
            align-items: flex-start;
            text-align: left;
            padding: 12px !important;
            white-space: normal;
        }

        #mobile_nav .prem-right-menu {
            margin: 10px 0 0;
            padding: 0;
            width: 100%;
        }

        #mobile_nav .call-header-button {
            height: auto;
            width: 100%;
        }

        #mobile_nav .sub-header-button {
            width: 100%;
            border-radius: 4px;
            justify-content: center;
        }

        #mobile_nav .sub-header-button .header-info {
            width: 100%;
            text-align: center;
            padding: 12px 14px;
        }

        #mobile_nav .sub-header-button .header-info p {
            font-size: 20px;
            line-height: 1.2;
        }

        #mobile_nav .dropdown-menu.megamenu {
            width: 100%;
            max-width: 100%;
        }
    }

    @media (max-width: 360px) {
        .navbar .navbar-brand img {
            max-width: 92px;
            max-height: 38px;
        }

        .navbar .navbar-toggler img {
            width: 24px;
            height: 24px;
        }
    }

    .custom-marquee {
        width: 100%;
        overflow: hidden;
        position: relative;
        height: 28px;
        line-height: 28px;
    }

    .custom-marquee-content {
        display: inline-block;
        white-space: nowrap;
        padding-left: 0;
        animation: marquee-scroll 22s linear infinite;
    }

    .custom-marquee-content b {
        color: #fff;
        font-weight: bold;
    }

    .marquee-gap {
        display: inline-block;
        width: 80px;
    }

    @keyframes marquee-scroll {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
        }
    }
    </style>
</head>

