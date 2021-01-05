<?php
$username = $_SESSION["username"];
$nhanvien = select_1_record("SELECT * FROM nhanvien WHERE username = '$username'");
$avatar = 'data:image/png;base64,' . $nhanvien["avatar"];
$hoten = $nhanvien["hoten"];
$menu = select("SELECT * FROM menu WHERE level = 1 order by sortmenu asc");
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo $logows; ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $namews; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $avatar; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="manager.php?controller=home&action=profile" class="d-block"><?php echo $hoten; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <?php
                foreach ($menu as $menus => $array) {
                    if ($array["children"] == "0") {
                        ?>
                        <li class="nav-item">
                            <a href="<?php echo $array["link"] ?>" class="nav-link <?php if($array["active"] == $_GET["controller"]) echo "active"; else echo ""; ?>">
                                <i class="nav-icon <?php echo $array["icon"]; ?>"></i>
                                <p>
                                    <?php echo $array["name"]; ?>
                                </p>
                            </a>
                        </li>
                        <?php
                    } else {
                        $children = select("SELECT * FROM menu WHERE level = 2 and groupmenu = " . $array["groupmenu"] . " order by sortmenu asc");
                        ?>
                        <li class="nav-item has-treeview <?php if(isset($_GET["menu"]) && $array["active"] == $_GET["menu"]) echo "menu-open"; else echo ""; ?>">
                            <a href="#" class="nav-link <?php if(isset($_GET["menu"]) && $array["active"] == $_GET["menu"]) echo "active"; else echo ""; ?>">
                                <i class="nav-icon <?php echo $array["icon"]; ?>"></i>
                                <p>
                                    <?php echo $array["name"]; ?>
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <?php foreach ($children as $childrens => $child) {
                                    ?>
                                    <li class="nav-item">
                                        <a href="<?php echo $child["link"] ?>" class="nav-link <?php if($child["active"] == $_GET["action"]) echo "active"; else echo ""; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p><?php echo $child["name"] ?></p>
                                        </a>
                                    </li>
                                    <?php
                                } ?>
                            </ul>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
