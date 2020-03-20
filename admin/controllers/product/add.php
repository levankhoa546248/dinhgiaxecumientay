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
} else {
    $title = 'Thêm xe';
    $user = $_SESSION['user'];
//Sub category
    $subcategories = get_all('subcategory', array(
        'select' => 'Id,Name',
        'order_by' => 'Name'
    ));
    $dsNhaDauTu = select('SELECT * FROM nhadautu');
//load view
    require('admin/views/product/add.php');
}