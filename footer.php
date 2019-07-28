<footer class="footer">
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-6">
        <p class="footer__text footer__copyright">BC Fund &copy <?php echo date("Y"); ?> - <?php echo _e("Todos os direitos reservados", LANG_DOMAIN); ?>.</p>
       <p>Powered by <a href="https://mzgroup.com" target="_blank" style="color:#005E91;">MZ</a></p>
      </div>

      <div class="col-sm-6" style="text-align:right;">
        <a href="<?php echo get_home_url(); ?>">
          <img class="header_brand_logo" src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="<?php bloginfo('name'); ?>">
        </a>
      </div>

    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
</body>

</html>