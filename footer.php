<footer class="site-footer">
  <div class="footer-card">
    <div class="footer-left">
      <h3 class="footer-title">Let’s Connect </h3>
      <ul class="contact-list">
        <li>📧 zara06r@gmail.com</li>
        <li>📍 Esbjerg, Denmark</li>
        <li>📞 +45 61 33 85 21</li>
        <li>🔗 <a href="https://www.linkedin.com/in/ZaraAlRawashdeh" target="_blank">LinkedIn</a></li>
      </ul>
  

  <p class="footer-copy">&copy; <?php echo date('Y'); ?> Zara Rawashdeh. All rights reserved.</p>
</footer>



<?php wp_footer(); ?>
<script>
  const faders = document.querySelectorAll('.fade-in');

  const appearOptions = {
    threshold: 0.3,
  };

  const appearOnScroll = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('active');
      observer.unobserve(entry.target);
    });
  }, appearOptions);

  faders.forEach(fader => {
    appearOnScroll.observe(fader);
  });
</script>

</body>
</html>
