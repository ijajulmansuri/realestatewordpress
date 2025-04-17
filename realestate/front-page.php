
<?php
/*
Template Name: Home 
*/
get_header();
?>
<main>
    <article>

    <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <ion-icon name="home"></ion-icon>

              <span>Real Estate Agency</span>
            </p>

            <h2 class="h1 hero-title">Find Your Dream House By Us</h2>

            <p class="hero-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
            </p>

            <button class="btn">Make An Enquiry</button>

          </div>

          <figure class="hero-banner">
            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/hero-banner.png" alt="Modern house model" class="w-100">
          </figure>

        </div>
      </section>
      <?php get_footer(); ?>

     