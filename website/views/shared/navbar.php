<nav class="navbar navbar-default navbar-static-top" role="navigation" style="height: 61px; margin-bottom: 10px">
    <div class="navbar-header navbar-top-links">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="website.php?controller=home" style="padding: 5px 1em">
            <?php echo '<image class="img-responsive" src="' . PATH_IMG_WEB . $logo['Images'] . '?time=' . time() . '" alt="' . $logo['Images'] . '"/ >'; ?>
        </a>

    </div>
    <ul class="nav navbar-top-links navbar-right" style="font-size: large">
        <li><a href="website.php?controller=home">Trang chủ</a></li>
        <li><a href="website.php?controller=home">Sản phẩm</a></li>
        <li><a href="website.php?controller=guibanxe">Gửi bán xe</a></li>
        <li><a href="website.php?controller=timmuaxe">Tìm mua xe</a></li>
        <li><a href="#">Liên hệ</a></li>
        <li><a href="admin.php?controller=home&action=login" class="fa fa-user"></a></li>
    </ul>
</nav>