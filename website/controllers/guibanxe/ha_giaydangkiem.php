<?php
if (!empty($_FILES)) {
    $idguiban = intval($_GET['idguiban']);
    $numimages = count(glob("images/xeguiban/" . "*")) + 1;
    $namefile = $_POST["fileId"];
    $file = $_FILES["file_data"];
    $nameimage = $idguiban . "_" . $numimages . "_" . $namefile;
    $config = array(
        'name' => $nameimage,
        'upload_path' => 'images/xeguiban/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $options = array(
        'name' => '',
        'upload_path' => './',
        'allowed_exts' => '*',
        'overwrite' => TRUE,
        'max_size' => 0
    );
    $options = array_merge($options, $config);
    if (!isset($file)) return FALSE;
    if ($file['error'] != 0) return FALSE;
    $temp = explode(".", $file["name"]);
    $ext = end($temp);
    if ($options['allowed_exts'] != '*') {
        $allowedExts = explode('|', $options['allowed_exts']);
        if (!in_array($ext, $allowedExts)) return FALSE;
    }
    $size = $file['size'] / 1024 / 1024;
    if (($options['max_size'] > 0) && ($size > $options['max_size'])) return FALSE;

//    $name = empty($options['name']) ? $file["name"] : $options['name'] . '_' . $_POST["file_id"] . '.' . $ext;
//    $file_path = $options['upload_path'] . $name;
    $file_path = $options['upload_path'] . $nameimage;
    if ($options['overwrite'] && file_exists($file_path)) {
        unlink($file_path);
    }

    move_uploaded_file($file["tmp_name"], $file_path);
    $sqlInsert = "INSERT INTO ha_giaydangkiem (idguiban, duongdan) VALUES ($idguiban, '$file_path')";
    $result = numRows($sqlInsert);
    echo $result;
//    header('location:admin.php?controller=product');
}