  <?php if($this->router->fetch_class() == 'dashboard'): ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
<footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?= base_url(); ?>includes/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>includes/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>includes/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>includes/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?= base_url(); ?>includes/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url(); ?>includes/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url(); ?>includes/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script src="<?= base_url(); ?>includes/js/script.js" type="text/javascript"></script>
</body>

</html>