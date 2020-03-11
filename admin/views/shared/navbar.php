<script>
    $(document).ready(function () {
        hideMenu();
        function hideMenu(){
            if ($('#navbarmenu')[0].style.display == "block") {
                $('#navbarmenu').hide();
                document.getElementById("page-wrapper").style.marginLeft = "0px";
            } else {
                $('#navbarmenu').show();
                document.getElementById("page-wrapper").style.marginLeft = "200px";
            }
        }
        $('#btnHideMenu').click(function (e) {
            hideMenu();
        });
    })
</script>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
    <div class="navbar-header small">
<!--        <button class="navbar-brand" type="button" style="border-bottom-style: dashed"-->
<!--                id="btnHideMenu"><i-->
<!--                    class="glyphicon glyphicon-menu-hamburger small"></i>-->
<!--        </button>-->
        <a class="navbar-brand" href="admin.php" style="font-size: 25px">DUY LINH</a>
    </div>
    <ul class="nav navbar-top-links navbar-right small">
        <li class="dropdown">
            <a href="admin.php?controller=order"><i class="fa fa-upload fa-fw"></i> Đơn hàng</a>
        </li>
        <li class="dropdown">
            <a href="admin.php?controller=import"><i class="fa fa-cloud-download fa-fw"></i> Nhập hàng</a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-th-list fa-fw"></i> Danh mục <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a href="admin.php?controller=employees">Nhân viên</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="admin.php?controller=customer">Khách hàng</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="admin.php?controller=goods">Hàng hóa</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="admin.php">
                <i class="fa fa-dashboard fa-fw"></i> Dashboard
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="admin.php?controller=user&amp;id=<?php echo $user['id']; ?>"><i
                                class="fa fa-user fa-fw"></i> Thông tin tài khoản</a></li>
                <li class="divider"></li>
                <li><a href="admin.php?controller=home&amp;action=logout"><i class="fa fa-sign-out fa-fw"></i>
                        Logout</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar small" role="navigation" style="display: block" id="navbarmenu">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <form id="product_form" method="post" action="admin.php?controller=product" role="form">
                        <div class="input-group custom-search-form">
                            <input id="search" name="search" type="text" class="form-control" placeholder="Tìm kiếm"/>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </li>
                <li>
                    <a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-th-list fa-fw"></i> Danh mục<span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin.php?controller=employees">Nhân viên</a>
                        </li>
                        <li>
                            <a href="admin.php?controller=customer">Khách hàng</a>
                        </li>
                        <li>
                            <a href="admin.php?controller=goods">Hàng hóa</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="admin.php?controller=import"><i class="fa fa-cloud-download fa-fw"></i> Nhập hàng</a>
                </li>
                <li>
                    <a href="admin.php?controller=order"><i class="fa fa-upload fa-fw"></i> Đơn hàng</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="page-wrapper">
