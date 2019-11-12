<?php
require_once("../dbConnect.php");
$db = new DBController();
if (!empty($_POST)) {
    $id = isset($_POST['id']) ? empty($_POST['id']) ? '0' : intval($_POST['id']) : '0';
    $name = $_POST['name'];
    $sizesex = $_POST['sizesex'];
    $opCheckName = array(
        'where' => "UPPER(name)='". strtoupper($name) ."'" .
            ' AND sex = ' .$sizesex
    );
    $issetName = $db->get_total('size', $opCheckName);
    if ($issetName > 0) {
        echo 0;
    } else {
        $option = array(
            'id' => $id,
            'name' => $name,
            'sex' => $sizesex
        );
        $result = $db->save('size', $option);
        echo json_encode($result);
    }
} else {
    echo 0;
}
?>