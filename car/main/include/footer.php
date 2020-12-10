<?php
$infocompany = select_1_record("select * from infocompany where trangthai = 1");
?>
<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Cơ sở chính</h2>
                    </div>
                    <address>
                        <p><?php echo $infocompany["diachi"]; ?></p>
                    </address>

                    <ul class="social-icon">
                        <li><a href="<?php echo $infocompany["facebook"]; ?>" class="fa fa-facebook-square"
                               attr="facebook icon" target="_blank"></a></li>
                        <li><a href="<?php echo $infocompany["twitter"]; ?>" class="fa fa-twitter"></a></li>
                        <li><a href="<?php echo $infocompany["instagram"]; ?>" class="fa fa-instagram"></a></li>
                    </ul>

                    <div class="copyright-text">
                        <p>Copyright &copy; 2020 Company Name</p>
                        <p>Template by: <a href="https://www.dinhgiaxecumientay.com/">dinhgiaxecumientay.com</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Liên hệ</h2>
                    </div>
                    <address>
                        <p><?php echo $infocompany["dienthoai"]; ?></p>
                        <p>
                            <a href="mailto:<?php echo $infocompany["email"]; ?>"><?php echo $infocompany["email"]; ?></a>
                        </p>
                    </address>

                    <div class="footer_menu">
                        <h2>Danh mục</h2>
                        <ul>
                            <li><a href="car.php?controller=home&action=index">Home</a></li>
                            <li><a href="car.php?controller=xe&action=xeC">Xe</a></li>
                            <li><a href="car.php?controller=dinhgia&action=index">Định giá</a></li>
                            <li><a href="car.php?controller=timmua&action=index">Tìm mua</a></li>
                            <li><a href="car.php?controller=tintuc&action=index">Tin tức</a></li>
                            <li><a href="car.php?controller=lienhe&action=index">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="footer-info newsletter-form">
                    <div id="fb-root"></div>
                    <div class="fb-page"
                         data-href="https://www.facebook.com/C%E1%BB%ADa-H%C3%A0ng-D%C5%A9ng-L%C3%A2m-387688081723225/"
                         data-tabs="timeline" data-width="" data-height="" data-small-header="false"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle"><a href="tel:0939571387" class="pps-btn-img"><i
                        class="fa fa-phone"></i></div>
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
    </ul>
</div>
<link rel="stylesheet" type="text/css" media="screen" href="car/themes/css/hotline.css"/>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0"
        nonce="CqeMMtGp"></script>
