<?php
$website = select_1_record('SELECT * FROM website');
$logows = 'data:image/png;base64,' . $website["logo"];
$shortcuticon = $website["shortcuticon"];
$namews = $website["name"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo $shortcuticon; ?>">