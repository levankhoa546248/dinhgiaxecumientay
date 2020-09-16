<?php
$options_category = array(
    'order_by' => 'Id'
);
$categories = get_all('categories', $options_category);
$contactinfo = get_a_record('contactinfo', 1);
?>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1>
                    contact info
                </h1>
                <address>
                    <p><i class="fa fa-home pr-10"></i> Address:<?php echo $contactinfo['Address'] ?></p>

                    <p><i class="fa fa-globe pr-10"></i> <?php echo $contactinfo['Country'] ?></p>

                    <p><i class="fa fa-mobile pr-10"></i> Mobile : <?php echo $contactinfo['Mobile'] ?></p>

                    <p><i class="fa fa-phone pr-10"></i> Phone : <?php echo $contactinfo['Phone'] ?></p>

                </address>
            </div>
            <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1>
                    Social
                </h1>
                <address>

                    <p><i class="fa fa-envelope pr-10"></i> Email : <a
                                href="javascript:"><?php echo $contactinfo['Email'] ?></a></p>

                    <p><i class="fa fa-facebook pr-10"></i> Facebook : <a
                                href="javascript:"><?php echo $contactinfo['Facebook'] ?></a></p>

                    <p><i class="fa fa-envelope pr-10"></i> Zalo : <a
                                href="javascript:"><?php echo $contactinfo['Zalo'] ?></a></p>

                    <p><i class="fa fa-skype pr-10"></i> Skype :<a
                                href="javascript:"><?php echo $contactinfo['Skype'] ?></a></p>
                </address>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                    <h1>
                        order
                    </h1>
                    <ul class="page-footer-list">
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="intro">About Us</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="intro">Order Guide</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="intro">Shipping</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                    <h1>
                        Categories
                    </h1>
                    <ul class="page-footer-list">
                        <?php if (!empty($categories)) : ?>
                            <?php foreach ($categories as $category): ?>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="group/<?php echo $category['Id'] ?>-<?php echo $category['alias'] ?>.html"> <?php echo $category['Name'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->
<!--small footer start -->
<div class="footer-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 pull-right">
                <ul class="social-link-footer list-unstyled">
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i
                                    class="fa fa-google-plus"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i
                                    class="fa fa-dribbble"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i
                                    class="fa fa-linkedin"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i
                                    class="fa fa-twitter"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i
                                    class="fa fa-skype"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i
                                    class="fa fa-github"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i
                                    class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="copyright">
                    <p>&copy; Copyright - Fashion For Men</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle"><a href="tel:0898982526" class="pps-btn-img"> <img
                        src="https://netweb.vn/img/hotline/icon.png" alt="so dien thoai" width="50"> </a></div>
    </div>
    <div class="hotline-bar">
        <a href="tel:0898982526"> <span class="text-hotline">0939571387</span> </a>
    </div>

</div>

<div class="float-icon-hotline">
    <ul class="left-icon hotline">
        <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton"
                                          href="https://zalo.me/0939571387"><i
                        class="fa fa-zalo animated infinite tada"></i><span>Zalo</span></a></li>
        <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton"
                                          href="https://www.messenger.com/t/vanhaiweb"><i
                        class="fa fa-messenger animated infinite tada"></i><span>Facebook</span></a></li>
    </ul>
</div>
<div id="fb-root"></div>
<script>
    (function($) {
        $(document).ready(function() {
            $('.fb-page-box').hide();
            $('.fb-page-header').click(function(){
                $('.fb-page-box').slideToggle();
            });
        });
    })(jQuery);
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }
    (document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-chat-popup">
    <div class="fb-page-header"><i class="fa fa-facebook"></i></div>
    <div class="fb-page-box">
        <div class="fb-page" data-href="https://www.facebook.com/C%E1%BB%ADa-H%C3%A0ng-D%C5%A9ng-L%C3%A2m-387688081723225/" data-height="350" data-width="300" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false" data-tabs="messages" data-show-posts="false"></div>
        <div class="chat-single"><a target="_blank" href="https://www.facebook.com/C%E1%BB%ADa-H%C3%A0ng-D%C5%A9ng-L%C3%A2m-387688081723225/"><i class="fa fa-facebook-square"></i> Fanpage Blog</a></div>
    </div>
</div>
</body>
</html>
<link rel="stylesheet" type="text/css" media="screen" href="website/themes/css/hotline.css"/>

