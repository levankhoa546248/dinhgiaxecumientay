<?php
//load model
if (!empty($_POST)) {
    $idxe = intval($_POST['idxe']);
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
        'sotienconlai' => intval($_POST['sotienconlai'])
    );
    update('xe', $xe, 'id = ' . $idxe);
    //upload ảnh 4
//    if(!empty($_FILES)){
//        $tenxe = escape($_POST['tenxe']);
//        $nameimage = $idxe . "_" . alias($tenxe);
//        $idhinh = select_id_auto("hinhanhxe");
//        $arrxe = array(
//            'idxe' => $idxe
//        );
//        delete("hinhanhxe", 'idxe = ' . $idxe);
//        $image = upload("images", $nameimage, 'hinhanhxe', $arrxe, $idhinh);
//    }
    $jsonnhadautu = json_decode($_POST["dsnhadautu"]);
    $countnhadautu = count($jsonnhadautu);
    if ($countnhadautu > 0){
        delete('chudautuxe', 'idxe = ' . $idxe);
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
    }
    //chuyển hướng
    echo json_encode($idxe);
}