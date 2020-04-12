<?php
if (!empty($_FILES)) {
    $tenxe = escape($_GET['tenxe']);
    $idxe = intval($_GET['idxe']);
    $file = $_FILES["file"];
    $nameimage = $idxe . "_" . alias($tenxe);
    $count = count($file["name"]);
    for ($i = 0; $i < $count; $i++) {
        $config = array(
            'name' => $nameimage,
            'upload_path' => 'admin/upload/',
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
        if ($file['error'][$i] != 0) return FALSE;
        $temp = explode(".", $file["name"][$i]);
        $ext = end($temp);
        if ($options['allowed_exts'] != '*') {
            $allowedExts = explode('|', $options['allowed_exts']);
            if (!in_array($ext, $allowedExts)) return FALSE;
        }
        $size = $file['size'][$i] / 1024 / 1024;
        if (($options['max_size'] > 0) && ($size > $options['max_size'])) return FALSE;

        $name = empty($options['name']) ? $file["name"][$i] : $options['name'] . '_' . $i . '.' . $ext;
        $file_path = $options['upload_path'] . $name;
        if ($options['overwrite'] && file_exists($file_path)) {
            unlink($file_path);
        }

        move_uploaded_file($file["tmp_name"][$i], $file_path);        //cập nhật ảnh mới
        if ($name) {
//            $sqlI = "";
            if ($i == 0) {
                $sql_0 = " SELECT $idxe, '$file_path' FROM DUAL ";
            } else {
                $sql_0 = $sql_0 . " UNION ALL SELECT $idxe, '$file_path' FROM DUAL ";
            }
        }
    }
    $sqlInsert = "INSERT INTO hinhanhxe (idxe, duongdan) " . $sql_0;
    $result = numRows($sqlInsert);
    echo $result;
//    header('location:admin.php?controller=product');
}