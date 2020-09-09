<?php
$options_parent_menu = array(
    'order_by' => 'Id'
);
$parent_menus = get_all('categories', $options_parent_menu);

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <!--    <base href="http://localhost/StoreManager/" />-->
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'eCommerce - Fashion Shop'; ?></title>
    <link rel="shortcut icon" href="admin/themes/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shop thời trang nam">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Shop thời trang nam"/>
    <link href="website/themes/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="website/themes/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="website/themes/content/jquery.min.js"></script>
    <script src="website/themes/js/bootstrap.min.js"></script>
    <link href="website/themes/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="website/themes/css/header.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="website/themes/css/livechat.css" rel="stylesheet" type="text/css" media="all"/>


    <link href="admin/themes/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin/themes/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="admin/themes/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin/themes/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="admin/themes/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin/themes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="admin/themes/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin/themes/css/dataTables.responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="admin/themes/js/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <script src="admin/themes/js/jquery.alerts.js" type="text/javascript"></script>
    <link href="admin/themes/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <script src="admin/themes/js/2.5.3-crypto-md5.js" type="text/javascript"></script>
    <script src="admin/themes/js/selfjs.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <!--Include upload images-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" type="text/css" media="screen"
          href="admin/themes/css/selfcss.css"/>
    <link rel="stylesheet" type="text/css" media="screen"
          href="admin/themes/combogrid/css/smoothness/jquery-ui-1.10.1.custom.css"/>
    <script type="text/javascript" src="admin/themes/combogrid/jquery/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="admin/themes/combogrid/jquery/jquery-ui-1.10.1.custom.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="admin/themes/combogrid/css/jquery-ui-redmond.1.9.1.css"/>
    <link rel="stylesheet" type="text/css" media="screen"
          href="admin/themes/combogrid/css/smoothness/jquery.ui.combogrid.css"/>
    <script type="text/javascript" src="admin/themes/combogrid/plugin/jquery.ui.combogrid-1.6.4.js"></script>
    <script type="text/javascript" src="http://malsup.github.io/jquery.blockUI.js"></script>

    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="website/themes/css/memenu.css" rel="stylesheet" type="text/css" media="all"/>

</head>

<body>
<div class="header-top">
    <div class="header-bottom">
        <div class="container-top" style="padding-top: 0px">
            <div class="logo">
                <a href="index.html">
                    <?php echo '<image class="img-responsive" src="' . PATH_IMG_WEB . $logo['Images'] . '?time=' . time() . '" alt="' . $logo['Images'] . '"/ >'; ?>
                </a>
            </div>
            <div class="top-nav navbar-right" style="width: auto;">
                <ul class="memenu skyblue">
                    <li><a href="website.php?controller=home">Trang chủ</a></li>
                    <li><a href="website.php?controller=home">Sản phẩm</a></li>
                    <li><a href="website.php?controller=guibanxe">Gửi bán xe</a></li>
                    <li><a href="website.php?controller=timmuaxe">Tìm mua xe</a></li>
                    <li><a href="livesport">LIÊN HỆ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>