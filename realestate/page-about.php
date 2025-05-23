<?php
/*
Template Name: About 
*/
get_header();
?>

<section class="about" id="about">
  <div class="container">

    <figure class="about-banner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-banner-1.png" alt="House interior">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-banner-2.jpg" alt="House interior" class="abs-img">
    </figure>

    <div class="about-content">

      <p class="section-subtitle">About Us</p>

      <h2 class="h2 section-title">The Leading Real Estate Rental Marketplace.</h2>

      <p class="about-text">
        Over 39,000 people work for us in more than 70 countries all over the world.
        This breadth of global coverage, combined with specialist services...
      </p>

      <ul class="about-list">

        <li class="about-item">
          <div class="about-item-icon">
            <ion-icon name="home-outline"></ion-icon>
          </div>
          <p class="about-item-text">Smart Home Design</p>
        </li>

        <li class="about-item">
          <div class="about-item-icon">
            <ion-icon name="leaf-outline"></ion-icon>
          </div>
          <p class="about-item-text">Beautiful Scene Around</p>
        </li>

        <li class="about-item">
          <div class="about-item-icon">
            <ion-icon name="wine-outline"></ion-icon>
          </div>
          <p class="about-item-text">Exceptional Lifestyle</p>
        </li>

        <li class="about-item">
          <div class="about-item-icon">
            <ion-icon name="shield-checkmark-outline"></ion-icon>
          </div>
          <p class="about-item-text">Complete 24/7 Security</p>
        </li>

      </ul>

      <p class="callout">
        "Enimad minim veniam quis nostrud exercitation llamco laboris. Lorem ipsum dolor sit amet"
      </p>

      <a href="<?php echo site_url('/services'); ?>" class="btn">Our Services</a>

    </div>

  </div>
</section>

<?php get_footer(); ?>
