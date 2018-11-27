<footer id="footer">
  <div class="footer">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-12 col-md-3">
          <div class="logo">
            <img src="<?php echo THEME_URL; ?>/assets/images/logo-white.svg">
          </div>
        </div>
        <div class="col-12 col-md-auto">
          <nav>
            <ul>
              <?php wp_nav_menu_no_ul_footer(); ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    &copy; Green Tips 2018
  </div>
</footer>
<script type="text/javascript">
var url = "<?= (isset($_SERVER["HTTPS"]) ? 'https' : 'http') . ':' . strstr(THEME_URL, 'wp-content', true); ?>";
</script>