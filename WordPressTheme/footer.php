  <div class="c-to-top">
    <a href="#top"><span></span></a>
  </div>

<?php
$home = esc_url(home_url('/'));
$about = esc_url(home_url('/about/'));
$service = esc_url(home_url('/service/'));
$works = esc_url(home_url('/works/'));
$contact = esc_url(home_url('/contact/'));
?>

  <footer class="l-footer p-footer">
    <div class="p-footer__inner">

      <nav class="p-footer__nav p-footer-nav">
        <ul class="p-footer-nav__items">
          <li class="p-footer-nav__item">
            <a href="<?php echo $home ?>">HOME</a>
          </li>
          <li class="p-footer-nav__item">
            <a href="<?php echo $service ?>">SERVICE</a>
          </li>
          <li class="p-footer-nav__item">
            <a href="<?php echo $works ?>">WORKS</a>
          </li>
          <li class="p-footer-nav__item">
            <a href="<?php echo $about ?>">ABOUT</a>
          </li>
          <li class="p-footer-nav__item">
            <a href="<?php echo $contact ?>">CONTACT</a>
          </li>
        </ul>
      </nav>
      <div class="p-footer__copyright">
        <small>&copy; GLOCAL CODE</small>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
