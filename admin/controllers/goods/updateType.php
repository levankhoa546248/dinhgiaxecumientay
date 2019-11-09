<?php
require_once("../dbConnect.php");
$db = new DBController();
if (!empty($_POST)) {
    $id = isset($_POST['id']) ? empty($_POST['id']) ? '0' : intval($_POST['id']) : '0';
    $name = $_POST['name'];
    $opCheckName = array(
        'where' => "UPPER(name)='". strtoupper($name) ."'"
    );
    $issetName = $db->get_total('goodstype', $opCheckName);
    if ($issetName > 0) {
        echo 0;
    } else {
        $option = array(
            'id' => $id,
            'name' => $name
        );
        $result = $db->save('goodstype', $option);
        echo json_encode($result);
    }
} else {
    echo 0;
}
?>