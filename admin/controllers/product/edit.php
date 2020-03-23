<?php
//load model
if (!empty($_POST)) {
    $xe = array(
        'hangxe' => intval($_POST['hangxe']),
        'tenxe' => escape($_POST['tenxe']),
        'mausac' => escape($_POST['mausac']),
        'giavon' => intval($_POST['giavon']),
        'chietkhaumua' => intval($_POST['chietkhaumua']),
        'chietkhauban' => intval($_POST['chietkhauban']),
        'soluong' => intval($_POST['soluong']),
        'chiphiphatsinh' => intval($_POST['chiphiphatsinh']),
        'giaban' => intval($_POST['giaban']),
        'tonglai' => intval($_POST['tonglai']),
        'sotienconlai' => intval($_POST['sotienconlai']),
        'ngaynhap' => date('Y-m-d')
    );
    $idxe = insert('xe', $xe);
    //upload ảnh 4
    $tenxe = escape($_POST['tenxe']);
    $nameimage = $idxe . "_" . alias($tenxe) . "_" . date('Ymd');
    $arrxe = array(
        'idxe' => $idxe
    );
    $image = upload("images", $nameimage, 'hinhanhxe', $arrxe);
    $jsonnhadautu = json_decode($_POST["dsnhadautu"]);
    $countnhadautu = count(json_decode($_POST["dsnhadautu"]));
    for ($k = 0; $k < $countnhadautu; $k++) {
        $chudautu = $jsonnhadautu[$k]->chudautu;
        $vondautu = $jsonnhadautu[$k]->vondautu;
        $taidautu = $jsonnhadautu[$k]->taidautu;
        $tile = $jsonnhadautu[$k]->tile;
        $tienlai = $jsonnhadautu[$k]->tienlai;
        $chudautuxe = array(
            "idchudautu" => $chudautu,
            "idxe" => $idxe,
            "vondautu" => $vondautu,
            "taidautu" => $taidautu,
            "tile" => $tile,
            "tienlai" => $tienlai
        );
        insert("chudautuxe", $chudautuxe);
    }
    //chuyển hướng
    echo json_encode($idxe);
}
$title = 'Sửa thông tin';
$user = $_SESSION['user'];
//Sub category
$subcategories = get_all('subcategory', array(
    'select' => 'Id,Name',
    'order_by' => 'Name'
));
$dsNhaDauTu = select('SELECT * FROM nhadautu');
//load view
$idxe = $_GET["idxe"];
$xe = select_1_record('SELECT * FROM xe WHERE id = ' . $idxe);
$chudautuxe = select(
    'SELECT
            c.id,
            c.idchudautu AS manhadautu,
            c.idxe AS maxedautu,
            FORMAT(c.vondautu, \',\', \'.\') as vondautu,
	        CASE c.taidautu WHEN 0 THEN \'true\' ELSE \'false\' END as taidautu,
            c.tile,
            FORMAT(c.tienlai, \',\', \'.\') as tienlai,
            n.tennhadautu
        FROM
            chudautuxe c
        JOIN nhadautu n ON c.idchudautu = n.manhadautu
        WHERE
            idxe = ' . $idxe
);
$chudautuxejson = json_encode($chudautuxe);
$hinhanhxe = select('SELECT * FROM hinhanhxe WHERE idxe =' . $idxe);
require('admin/views/product/edit.php');