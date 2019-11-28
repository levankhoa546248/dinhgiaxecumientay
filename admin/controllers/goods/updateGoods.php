<?php
require_once("../dbConnect.php");
$db = new DBController();
if (!empty($_POST)) {
    $id = isset($_POST['id']) ? empty($_POST['id']) ? '0' : intval($_POST['id']) : '0';
    $name = $_POST['name'];
    $goodsunit = $_POST['goodsunit'];
    $goodssizesex = $_POST['goodssizesex'];
    $goodssize = $_POST['goodssize'];
    $goodscolor = $_POST['goodscolor'];
    $goodstype = $_POST['goodstype'];
    $goodsgroupsub = $_POST['goodsgroupsub'];
    $goodsgroup = $_POST['goodsgroup'];
    $country = $_POST['country'];
    $supplier = $_POST['supplier'];
    $opCheckName = array(
        'where' => "UPPER(name)='". strtoupper($name) ."'"
    );
    $issetName = $db->get_total('goods', $opCheckName);
    if ($issetName > 0 && $id == 0) {
        echo 0;
    } else {
        $option = array(
            'id' => $id,
            'name' => $name,
            'unit' => $goodsunit,
            'sizesex' => $goodssizesex,
            'sizeid' => $goodssize,
            'colorid' => $goodscolor,
            'typeid' => $goodstype,
            'groupsubid' => $goodsgroupsub,
            'groupid' => $goodsgroup,
            'countryid' => $country,
            'supplierid' => $supplier
        );
        $result = $db->save('goods', $option);
        echo json_encode($result);
    }
} else {
    echo 0;
}
?>