<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>The Odin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cinzel:400,700%7CRaleway:500,500i,600,700%7CMaterial+Icons&amp;display=swap"/>
    <!-- Template Vendor's Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'css/vendor.css'  ?>"/>
    <!-- Template Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'css/main.css'  ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'css/style.css'  ?>"/>
    <!-- Favicons & App Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(). 'img/content/apple-icon-57x57.png'  ?>"/>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(). 'img/content/apple-icon-60x60.png'  ?>"/>
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(). 'img/content/apple-icon-72x72.png'  ?>"/>
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(). 'img/content/apple-icon-76x76.png'  ?>"/>
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(). 'img/content/apple-icon-114x114.png'  ?>"/>
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(). 'img/content/apple-icon-120x120.png'  ?>"/>
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(). 'img/content/apple-icon-144x144.png'  ?>"/>
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(). 'img/content/apple-icon-152x152.png'  ?>"/>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(). 'img/content/apple-icon-180x180.png'  ?>"/>
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url(). 'img/content/android-icon-192x192.png'  ?>"/>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(). 'img/content/favicon-32x32.png'  ?>"/>
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(). 'img/content/favicon-96x96.png'  ?>"/>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(). 'img/content/favicon-16x16.png'  ?>"/>
    <link rel="manifest" href="i<?php echo base_url(). 'img/content/manifest.json'  ?>"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="<?php echo base_url(). 'img/content/ms-icon-144x144.png'  ?>"/>
    <meta name="theme-color" content="#ffffff"/>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(). 'img/content/favicon.ico'  ?>"/>
    <style>
   
   .mob {

     display: none;
   }
   @media (max-width: 768px) {
     .mob {
       display: block;
     }

     .desk {
       display: none;
     }
   }
  
 </style>
  </head>
  <body>
    <div data-barba="wrapper">
      <!-- PAGE PRELOADER -->
      <div class="preloader text-center bg-dark-2" id="js-preloader" data-arts-theme-text="light">
        <div class="preloader__content">
          <!-- header -->
          <div class="preloader__header mt-auto">
            <img src="<?php echo base_url() . 'img\images\intro_text.png';?>" alt="" style="width: 30%;">
          </div>
          <!-- - header -->
          <!-- counter -->
          <div class="preloader__counter h5"><span class="preloader__counter-number preloader__counter-current">0</span><span class="preloader__counter-divider">&nbsp;&nbsp;/&nbsp;&nbsp;</span><span class="preloader__counter-number preloader__counter-total">100</span></div>
          <!-- - counter -->
          <!-- circle holder -->
          <div class="preloader__circle"></div>
          <!-- - circle holder -->
        </div>
      </div>
      <!-- - PAGE PRELOADER -->
      <!-- Loading Spinner -->
      <svg class="spinner d-lg-none" id="js-spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="spinner__path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
      </svg>
      <!-- - Loading Spinner -->
      <!-- Transition Curtain-->
      <!-- TRANSITION CURTAINS -->
      <!-- page curtain AJAX transition -->
      <div class="curtain transition-curtain" id="js-page-transition-curtain">
        <div class="curtain__wrapper-svg">
          <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Default Rectangle -->
            <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
            <!-- - Default Rectangle -->
            <!-- Curve Top -->
            <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
            <!-- - Curve Top -->
            <!-- Curve Bottom -->
            <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
            <!-- - Curve Bottom -->
          </svg>
        </div>
      </div>
      <!-- - page curtain AJAX transition -->
      <!-- header curtain show/hide -->
      <div class="header-curtain curtain" id="js-header-curtain">
        <div class="curtain__wrapper-svg">
          <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Default Rectangle -->
            <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
            <!-- - Default Rectangle -->
            <!-- Curve Top -->
            <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
            <!-- - Curve Top -->
            <!-- Curve Bottom -->
            <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
            <!-- - Curve Bottom -->
          </svg>
        </div>
      </div>
      <!-- - header curtain show/hide -->
      <!-- header curtain AJAX transition -->
      <div class="header-curtain header-curtain_transition curtain" id="js-header-curtain-transition">
        <div class="curtain__wrapper-svg">
          <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Default Rectangle -->
            <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
            <!-- - Default Rectangle -->
            <!-- Curve Top -->
            <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
            <!-- - Curve Top -->
            <!-- Curve Bottom -->
            <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
            <!-- - Curve Bottom -->
          </svg>
        </div>
      </div>
      <!-- - header curtain AJAX transition -->
      <!-- - TRANSITION CURTAINS -->
      <!-- Cursor Follower-->
      <div class="cursor" id="js-cursor">
        <div class="cursor__wrapper">
          <!-- circles -->
          <div class="cursor__follower">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <circle id="inner" cx="25" cy="25" r="24" style="opacity: 0.6;"></circle>
              <circle id="outer" cx="25" cy="25" r="24" style="stroke-dashoffset: 252.327; stroke-dasharray: 0px, 999999px;"></circle>
            </svg>
          </div>
          <!-- - circles -->
          <!-- arrows -->
          <div class="cursor__arrows">
            <div class="cursor__arrow cursor__arrow_up material-icons">keyboard_arrow_up</div>
            <div class="cursor__arrow cursor__arrow_down material-icons">keyboard_arrow_down</div>
            <div class="cursor__arrow cursor__arrow_left material-icons">keyboard_arrow_left</div>
            <div class="cursor__arrow cursor__arrow_right material-icons">keyboard_arrow_right</div>
          </div>
          <!-- - arrows -->
          <!-- label holder -->
          <div class="cursor__label"></div>
          <!-- - label holder -->
          <!-- icon holder -->
          <div class="cursor__icon material-icons"></div>
          <!-- - icon holder -->
        </div>
      </div>
      <!-- - Cursor Follower-->
      <!-- PAGE HEADER -->
      <header 
      class="header header_menu-right header_fixed container-fluid" id="page-header" 
      data-arts-theme-text="<?php if($this->uri->segment(1)=="" || ($this->uri->segment(1)=="home" && $this->uri->segment(2)=="")  ){echo "light";}else{echo "dark";}?>" data-arts-header-sticky-theme="bg-dark-1" 
      data-arts-header-logo="<?php if($this->uri->segment(1)=="" || ($this->uri->segment(1)=="home" && $this->uri->segment(2)=="")){echo "secondary";}else{echo "primary";}?>" 
      data-arts-header-sticky-logo="primary" data-arts-header-overlay-theme="dark" data-arts-header-overlay-background="#ffffff">
        <!-- top bar -->
        <div class="header__container header__controls">
          <div class="row justify-content-between align-items-center">
            <!-- logo -->
            <div class="col-auto header__col header__col-left"><a class="logo" href="<?php echo base_url(); ?> ">
                <div class="logo__wrapper-img">
                  <!-- primary logo version (for light backgrounds)--><img class="logo__img-primary header-logo" src="<?php echo base_url(). 'img/general/logo.png'  ?>" alt="The Odin" height="20"/>
                  <!-- secondary logo version (for dark backgrounds)--><img class="logo__img-secondary header-logo-secondary" src="<?php echo base_url(). 'img/general/logo_white.png'  ?>" alt="The Odin" height="20"/>
                </div></a>
            </div>
            <!-- - logo -->
            <!-- burger icon -->
            <div class="col-auto header__col">
              <div class="header__burger" id="js-burger" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.7" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true">
                <div class="header__burger-line"></div>
                <div class="header__burger-line"></div>
                <div class="header__burger-line"></div>
              </div>
            </div>
            <!-- - burger icon -->
            <!-- "back" button for submenu nav -->
            <div class="header__overlay-menu-back" id="js-submenu-back">
              <div class="arrow arrow-left js-arrow arrow_mini" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                </svg>
                <div class="arrow__pointer arrow-left__pointer"></div>
                <div class="arrow__triangle"></div>
              </div>
            </div>
            <!-- - "back" button for submenu nav -->
          </div>
        </div>
        <!-- - top bar -->
        <!-- fullscreen overlay container -->
        <div class="header__wrapper-overlay-menu container-fluid container-fluid_paddings">
          <!-- fullscreen menu -->
          <div class="header__wrapper-menu">
            <ul class="menu-overlay js-menu-overlay">
              <li class="menu-item-has-children"><a class="h2" href="<?php echo base_url();  ?>" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Home</div></a>
              </li>
              <li class="menu-item-has-children"><a class="h2" href="<?php echo(base_url() . 'portfolio') ?>" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Portfolio</div></a>
              </li>
              <li class="menu-item-has-children"><a class="h2" href="<?php echo(base_url() . 'works') ?>" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Products</div></a>
              </li>
             
              <li class="menu-item-has-children"><a class="h2" href="<?php echo(base_url() . 'industries') ?>" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Industries</div></a>
              </li>
             
              <li class="menu-item-has-children"><a class="h2" href="<?php echo(base_url() . 'services') ?>" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Services</div></a>
              </li>
              <li class="menu-item-has-children"><a class="h2" href="<?php echo(base_url() . 'aboutus') ?>" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">About Compnay</div></a>
              </li>
              <li class="menu-item-has-children"><a class="h2" href="<?php echo(base_url() . 'resources') ?>" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Resources</div></a>
              </li>
            </ul>
          </div>
          <!-- - fullscreen menu -->
          <!-- fullscreen widgets -->
          <div class="header__wrapper-overlay-widgets">
            <div class="row">
              <!-- widget TEXT -->
              <div class="col-lg-4 header__widget">
                <div class="header__widget-title small-caps js-split-text split-text" data-split-text-type="lines">Get in touch</div>
                <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">
                  <p><a href="info@theodin.in">info@theodin.in</a><br/>+91 77422 79911<br/>
                  <ul class="social">
                    <li style="margin-left:-7.5px" class="social__item"><a target="_blank" class="fa fa-facebook-f" href="https://www.facebook.com/theodinjaipur/"></a></li>
                    <li class="social__item"><a target="_blank" class="fa fa-instagram" href="https://www.instagram.com/theodin.in/"></a></li>
                    <li class="social__item"><a target="_blank" class="fa fa-linkedin" href="https://www.linkedin.com/company/theodin/"></a></li>
                    <li class="social__item"><a target="_blank" class="fa fa-whatsapp" href="https://wa.me/91774227991"></a></li>
                  </ul>
                 
                </p>
                </div>
              </div>
              <!-- - widget TEXT -->
              <!-- widget TEXT -->
              <div class="col-lg-4 header__widget">
                <div class="header__widget-title small-caps js-split-text split-text" data-split-text-type="lines">Head Office</div>
                <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">
                <p>216, Ganpati Enclave<br>Surya nagar,Jaipur<br>Rajasthan, India-302018</p>
            
              </div>
              </div>
              <!-- - widget TEXT -->
              <!-- widget TEXT -->
              <div class="col-lg-4 header__widget">
                <div class="header__widget-title small-caps js-split-text split-text" data-split-text-type="lines">Want to Work with Us?</div>
                <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">
                 <br>
                 <p><a href="<?php echo base_url() . 'contactus';  ?>">
                  <button class="button button_solid button_black button_fullwidth" data-hover="Send Message">
                    <span class="button__label-hover">Contact Now</span>
                  </button> 
                  </a>
                  </p>
                </div>
              </div>
              <!-- - widget TEXT -->
            </div>
          </div>
          <!-- - fullscreen widgets -->
        </div>
        <!-- - fullscreen overlay container -->
      </header>
      <!-- - PAGE HEADER -->

