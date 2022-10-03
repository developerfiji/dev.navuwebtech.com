<footer class="ftco-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5" style="width:100%;">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mb-5">

                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Navu Web Tech</p>
            </div>
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.1.3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.stellar.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollax.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<script type="text/javascript">
    var caption = $('.caption', 'header');

    $(window).scroll(function(event){
        if($(this).scrollTop() > 0) caption.fadeOut();
        else caption.fadeIn();
    });

    $(document).ready(function () {
        $('#frmSendMesage').submit(function () {

            var $data = $('#frmSendMesage').serialize(); console.log($data);

            $.ajax({
                type: "POST",
                url: "/message/contact/",
                data: $data,
                error: function (jqXHR, textStatus, errorThrown) {

                },
                success: function (result) {
                    alert(result);
                    $('input', '#frmSendMesage').val('');
                    $('textarea', '#frmSendMesage').val('');
                }
            });

            return false;
        });

    });

</script>
</body>
</html>