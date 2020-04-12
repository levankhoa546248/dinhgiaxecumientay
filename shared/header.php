<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.png">
    <title><?php echo isset($title) ? $title : 'Quản trị hệ thống'; ?></title>
    <script type="text/javascript" src="themes/jquery/js/jquery-3.4.1.js"></script>
    <link href="themes/css/bootstrap.min.css" rel="stylesheet">
    <link href="themes/css/metisMenu.min.css" rel="stylesheet">
    <link href="themes/css/timeline.css" rel="stylesheet">
    <link href="themes/css/sb-admin-2.css" rel="stylesheet">
    <link href="themes/css/morris.css" rel="stylesheet">
    <link href="themes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="themes/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="themes/css/dataTables.responsive.css" rel="stylesheet">
    <script type="text/javascript" src="themes/js/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="themes/js/respond/1.4.2/respond.min.js"></script>
    <script type="text/javascript" src="themes/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen"
          href="themes/bootstrap-select/1.13.9/css/bootstrap-select.min.css">
    <script type="text/javascript" src="themes/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
    <script src="themes/js/jquery.alerts.js" type="text/javascript"></script>
    <link href="themes/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen"/>
    <script src="themes/js/2.5.3-crypto-md5.js" type="text/javascript"></script>
    <script src="themes/js/selfjs.js" type="text/javascript"></script>
    <link rel="stylesheet" href="themes/bootstrap-tagsinput/0.8.0/css/bootstrap-tagsinput.css">
    <script type="text/javascript" src="themes/bootstrap-tagsinput/0.8.0/js/bootstrap-tagsinput.min.js"></script>
    <link rel="stylesheet" href="themes/jquery/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" media="screen" href="themes/css/selfcss.css"/>
    <!--    <link rel="stylesheet" type="text/css" media="screen"-->
    <!--          href="themes/combogrid/css/smoothness/jquery-ui-1.10.1.custom.css"/>-->
    <!--    <link rel="stylesheet" type="text/css" media="screen" href="themes/combogrid/css/jquery-ui-redmond.1.9.1.css"/>-->
    <!--    <link rel="stylesheet" type="text/css" media="screen"-->
    <!--          href="themes/combogrid/css/smoothness/jquery.ui.combogrid.css"/>-->
    <!--    <script type="text/javascript" src="themes/combogrid/plugin/jquery.ui.combogrid-1.6.4.js"></script>-->
    <script type="text/javascript" src="themes/jquery/blockUI/jquery.blockUI.js"></script>
    <link rel="stylesheet" href="http://ui-grid.info/release/ui-grid.css" type="text/css"/>
    <script type="text/javascript" src="themes/combogrid/jquery/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="themes/combogrid/jquery/jquery-ui-1.10.1.custom.min.js"></script>
    <script type="text/javascript" src="themes/js/jquery.dataTables.min.js"></script>
</head>
<body>

<div id="wrapper">
<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
require('admin/views/shared/navbar.php'); ?>