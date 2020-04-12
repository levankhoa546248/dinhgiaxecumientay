<?php
//load model
if (!empty($_POST)) {
    $ngaynhap = $_POST["ngaynhap"];
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
        'ngaynhap' => $ngaynhap,
        'ngaytao' => date('Y-m-d'),
        'nhanvien' => $_SESSION["user"]["Id"]
    );
    $idxe = insert('xe', $xe);

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
//        $sql = "";
        if ($k == 0) {
            $sql = " SELECT $chudautu, $idxe, $vondautu, $taidautu, $tile, $tienlai, '" . $ngaynhap . "' FROM DUAL ";
        } else {
            $sql = $sql . " UNION ALL SELECT $chudautu, $idxe, $vondautu, $taidautu, $tile, $tienlai, '" . $ngaynhap . "' FROM DUAL ";
        }
//        insert("chudautuxe", $chudautuxe);
    }
    $sqlInsert =
        "INSERT INTO `duylinhstore`.`chudautuxe` (
            `idchudautu`,
            `idxe`,
            `vondautu`,
            `taidautu`,
            `tile`,
            `tienlai`,
            `ngaynhap`
        )" . $sql;
    numRows($sqlInsert);
    //chuyển hướng
    echo $idxe;
}