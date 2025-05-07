<?php
/*
Template Name: Blob Test
*/
get_header();
?>

<style>
.hero {
  position: relative;
  overflow: hidden;
  background-color: #eecdc2;
  text-align: center;
  padding: 100px 20px;
}
.hero-inner {
  position: relative;
  z-index: 1;
}
.hero-blobs {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  pointer-events: none;
}
.blob {
  position: absolute;
  width: 300px;
  height: 300px;
  background: radial-gradient(circle at center, rgba(255, 255, 255, 0.4), transparent 70%);
  border-radius: 50%;
  animation: float 20s infinite ease-in-out;
  filter: blur(20px);
  opacity: 0.7;
}
.blob-1 { top: -50px; left: -80px; animation-delay: 0s; }
.blob-2 { top: 30%; left: 60%; animation-delay: 6s; }
.blob-3 { bottom: -80px; right: -50px; animation-delay: 12s; }
@keyframes float {
  0% { transform: translateY(0) scale(1); }
  50% { transform: translateY(-30px) scale(1.05); }
  100% { transform: translateY(0) scale(1); }
}
</style>

<main class="hero">
  <div class="hero-blobs">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
  </div>
  <div class="hero-inner">
    <h1>ZARA TEST BLOBS</h1>
    <p>This is just a test — let's make it pretty ✨</p>
  </div>
</main>

<?php get_footer(); ?>
