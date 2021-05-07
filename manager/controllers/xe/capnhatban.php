<?php
if (!empty($_POST)) {
    $id = intval($_POST['id']);
    $tenxe = empty(escape($_POST["tenxe"])) ? null : escape($_POST["tenxe"]);
    $chiphimua = intval($_POST["chiphimua"]);
    $chiphiban = intval($_POST["chiphiban"]);
    $giavon = intval($_POST["giavon"]);
    $giaban = intval($_POST["giaban"]);
    $soluong = intval($_POST["soluong"]);
    $ngayban = $_POST["ngayban"];
    $idnhanvien = null;
    if (!empty($_SESSION)) {
        $idnhanvien = $_SESSION["idnhanvien"];
    }
    $sqlu =
        "UPDATE `xe`
            SET `tenxe` = '$tenxe',
             `chiphimua` = $chiphimua,
             `chiphiban` = $chiphiban,
             `giavon` = $giavon,
             `giaban` = $giaban,
             `soluong` = $soluong,
             `ngayban` = '$ngayban',
             `nhanvienban` = $idnhanvien,
             `tienlai` = $giaban - ($chiphiban + $chiphimua + $giavon),
             `trangthai` = 1
            WHERE
                (`id` = $id)";
    $upxe = update_sql($sqlu);
    $tienlai = $giaban - $giavon;
    if ($upxe > 0) {
        $cvondautu = count($_POST["vondautus"]);
        for ($k = 0; $k < $cvondautu; $k++) {
            $jsonvondautu = json_decode($_POST["vondautus"][$k]);
            $idvon = $jsonvondautu->id;
            $idchudautu = $jsonvondautu->idchudautu;
            $tiendautu = $jsonvondautu->tiendautu;
            $taidautu = $jsonvondautu->taidautu;
            $phantramvon = floor($tiendautu/$giavon*100);
            $laidautu = $phantramvon * $tienlai / 100;
            $sqlchudautu =
                "UPDATE chudautu
                    SET sodu = sodu + $laidautu
                    WHERE
                        id = $idchudautu";
            $ischudautu = update_sql($sqlchudautu);
        }
        echo $upxe;
    } else {
        echo -1;
    }
}
?>