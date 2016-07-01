
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 &copy; Project Locus by Team Locus | Powered by <a style="text-decoration:none;" href="http://www.pldt.com.ph">PLDT</a> "We're Changing Lives."
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>js/jquery.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=base_url()?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=base_url()?>js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url()?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?=base_url()?>js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?=base_url()?>js/owl.carousel.js" ></script>
    <script src="<?=base_url()?>js/jquery.customSelect.min.js" ></script>
    <script src="<?=base_url()?>js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="<?=base_url()?>js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="<?=base_url()?>js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?=base_url()?>js/sparkline-chart.js"></script>
    <script src="<?=base_url()?>js/easy-pie-chart.js"></script>
    <script src="<?=base_url()?>js/count.js"></script>

  <script  src="<?=base_url()?>assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
   <script src="<?=base_url()?>js/advanced-form-components.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>

  </body>

</html>
