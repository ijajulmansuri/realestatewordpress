<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.svg" type="image/svg+xml">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- WordPress hook for styles and scripts -->

 
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <ul class="header-top-list">
          <li>
            <a href="mailto:ijajulmansuri@gmail.com" class="header-top-link">
              <ion-icon name="mail-outline"></ion-icon>
              <span>ijajulmansuri@gmail.com</span>
            </a>
          </li>

          <li>
            <a href="#" class="header-top-link">
              <ion-icon name="location-outline"></ion-icon>
              <address>860, CCC, Zirakpur</address>
            </a>
          </li>
        </ul>

        <div class="wrapper">
          <ul class="header-top-social-list">
            <li><a href="#" class="header-top-social-link"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#" class="header-top-social-link"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#" class="header-top-social-link"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#" class="header-top-social-link"><ion-icon name="logo-pinterest"></ion-icon></a></li>
          </ul>
          <button class="header-top-btn">Add Listing</button>
        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <a href="<?php echo home_url(); ?>" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Site Logo">
        </a>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">
            <a href="<?php echo home_url(); ?>" class="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Site Logo">
            </a>

            <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>

          <div class="navbar-bottom">
            <ul class="navbar-list">
              <li><a href="home" class="navbar-link" data-nav-link>Home</a></li>
              <li><a href="about" class="navbar-link" data-nav-link>About</a></li>
              <li><a href="service" class="navbar-link" data-nav-link>Service</a></li>
              <li><a href="property" class="navbar-link" data-nav-link>Property</a></li>
              <li><a href="blog" class="navbar-link" data-nav-link>Blog</a></li>
              <li><a href="contact" class="navbar-link" data-nav-link>Contact</a></li>
            </ul>
          </div>

        </nav>

        <div class="header-bottom-actions">
          <button class="header-bottom-actions-btn" aria-label="Search">
            <ion-icon name="search-outline"></ion-icon>
            <span>Search</span>
          </button>

          <button class="header-bottom-actions-btn" aria-label="Profile">
            <ion-icon name="person-outline"></ion-icon>
            <span>Profile</span>
          </button>

          <button class="header-bottom-actions-btn" aria-label="Cart">
            <ion-icon name="cart-outline"></ion-icon>
            <span>Cart</span>
          </button>

          <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
            <ion-icon name="menu-outline"></ion-icon>
            <span>Menu</span>
          </button>
        </div>

      </div>
    </div>

  </header>
