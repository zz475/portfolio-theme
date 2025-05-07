<?php
/*
Template Name: Home
*/
get_header(); ?>
<?php echo "<!-- USING TEMPLATE: HOME -->"; ?>

<main class="hero">
  <div class="hero-blobs">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
  </div>
  <div class="hero-inner">
    <?php if ($image = get_field('profile_image')): ?>
      <img class="profile-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>
    <h1 class="hero-name">Zara Yazeed Al-Rawashdeh</h1>
    <p class="hero-tagline"><?php the_field('intro_text'); ?></p>
  </div>
</main>


<section class="about">
  <div class="container">
    <h2>My Creative Core</h2>
    <div class="about-text">
      <?php the_field('about_me'); ?>
    </div>
  </div>
</section>




<section class="video-cv-section">
  <div class="container fade-in">
    <h2>My Video CV</h2>
    <div class="video-wrapper">
      <iframe 
        src="https://www.youtube.com/embed/_NxNL0Hulqw" 
        frameborder="0" 
        allowfullscreen>
      </iframe>
    </div>
  </div>
</section>



<section class="projects">
  <div class="container">
  <h2>A Peek Into My Portfolio</h2>

<div class="project-card">
  <a href="http://portfolio.local/wp-content/uploads/2025/04/zaras-business-card-.pdf" target="_blank">
    <h3>Business Card</h3>
  </a>
</div>

<div class="project-card">
  <a href="http://portfolio.local/wp-content/uploads/2025/04/zaras-cv-template-.pdf" target="_blank">
    <h3>CV Template</h3>
  </a>
</div>


  <div class="project-card">
    <a href="http://portfolio.local/wp-content/uploads/2025/04/trifolder.pdf" target="_blank">Trifolder</a>
  </div>

  <div class="project-card">
    <a href="http://portfolio.local/wp-content/uploads/2025/04/ZARA-ICE.pdf" target="_blank">Infographic</a>
  </div>

  <div class="project-card">
    <a href="http://portfolio.local/wp-content/uploads/2025/04/poster.pdf" target="_blank">Poster</a>
  </div>

  <div class="project-card">
    <a href="http://portfolio.local/wp-content/uploads/2025/04/LOGOS.pdf" target="_blank">Logo's</a>
  </div>
</section>

<style>
body {
  font-family: 'Helvetica Neue', sans-serif;
  color: #333; 
  background-color: #f9f7f3; /* soft neutral */
  margin: 0;
  padding: 0;
}
.hero {
  background-color: #eecdc2;
  text-align: center;
  padding: 60px 20px;
}
.hero-name {
  margin: 10px 0 0;
  font-size: 36px;
  color: #5e4a47;
}
.hero-tagline {
  font-size: 18px;
  color: #5e4a47;
}
.profile-img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
}
.about {
  padding: 60px 20px;
  background: #ffffff;
}
.about h2 {
  color: #5e4a47;
  font-size: 28px;
  text-align: center;
  margin-bottom: 20px;
}
.about-text {
  max-width: 800px;
  margin: 0 auto;
  font-size: 16px;
  line-height: 1.6;
}
.projects {
  padding: 60px 20px;
  background: #eecdc2;
}
.projects h2 {
  text-align: center;
  font-size: 28px;
  color: #5e4a47;
}
.project-card {
  margin: 20px auto;
  max-width: 600px;
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}
.project-card h3 {
  color: #5e4a47;
  margin-bottom: 10px;
}
.button {
  background-color: #5e4a47;
  color: #fff;
  padding: 10px 20px;
  border-radius: 4px;
  text-decoration: none;
  display: inline-block;
}
.button:hover {
  background-color: #3b2f2c;
}
</style>

<?php get_footer(); ?>

