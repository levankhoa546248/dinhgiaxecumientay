<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="admin.php?controller=product">DUY LINH</a>

    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a href="admin.php?controller=user&action=list">
                <div> Nhân viên</div>
            </a>
        </li>
        <li class="dropdown">
            <a href="admin.php?controller=nhadautu&action=list">
                <div> Nhà đầu tư</div>
            </a>
        </li>
        <li class="dropdown">
            <a href="admin.php?controller=group">
                <div> Hãng xe</div>
            </a>
        </li>
        <li class="dropdown">
            <a href="admin.php?controller=product">
                <div> Nhập xe</div>
            </a>
        </li>
        <li class="dropdown">
            <a href="admin.php?controller=thongke">
                <div> Thống kê</div>
            </a>
        </li>
        <li class="dropdown">
            <a href="admin.php?controller=timmuaxe">
                <div> Tìm xe</div>
            </a>
        </li>
        <li class="dropdown">
            <a href="admin.php?controller=guibanxe">
                <div> Gửi xe</div>
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh mục</a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="admin.php?controller=dongxe">Dòng xe</a></li>
<!--                <li class="divider"></li>-->
<!--                <li><a href="admin.php?controller=namsanxuat">Năm sản xuất</a></li>-->
                <li class="divider"></li>
                <li><a href="admin.php?controller=nhienlieu">Nhiên liệu</a></li>
                <li class="divider"></li>
                <li><a href="admin.php?controller=hopso">Hộp số</a></li>
                <li class="divider"></li>
                <li><a href="admin.php?controller=chongoi">Chỗ ngồi</a></li>
                <li class="divider"></li>
                <li><a href="admin.php?controller=xuatxu">Xuất xứ</a></li>
                <li class="divider"></li>
                <li><a href="admin.php?controller=mausac">Màu sắc</a></li>
                <li class="divider"></li>
                <li><a href="admin.php?controller=namsanxuat">Năm sản xuất</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="website.php?controller=home" target="_blank">
                <div> Website</div>
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="admin.php?controller=user&amp;action=info&amp;uid=<?php echo $user['Id']; ?>">
                        <i class="fa fa-user fa-fw"></i> Thông tin</a></li>
                <li class="divider"></li>
                <li><a href="admin.php?controller=home&amp;action=logout">
                        <i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>