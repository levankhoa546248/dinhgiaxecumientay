<?php
$website = select_1_record('SELECT * FROM website');
$logows = $website["logo"];
$shortcuticon = $website["shortcuticon"];
$namews = $website["name"];
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo $shortcuticon; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">