<?php
if (!empty($_POST)) {
    $id = intval($_POST['id']);
    $tenxe = empty(escape($_POST["tenxe"])) ? null : escape($_POST["tenxe"]);
    $chiphimua = intval($_POST["chiphimua"]);
    $chiphiban = intval($_POST["chiphiban"]);
    $giavon = intval($_POST["giavon"]);
    $giahienthi = intval($_POST["giahienthi"]);
    $giaban = intval($_POST["giaban"]);
    $soluong = intval($_POST["soluong"]);
    $ngaynhap = $_POST["ngaynhap"];
    $hangxe = intval($_POST["hangxe"]);
    $dongxe = intval($_POST["dongxe"]);
    $nhienlieu = intval($_POST["nhienlieu"]);
    $hopso = intval($_POST["hopso"]);
    $chongoi = intval($_POST["chongoi"]);
    $xuatxu = intval($_POST["xuatxu"]);
    $mausac = intval($_POST["mausac"]);
    $namsanxuat = intval($_POST["namsanxuat"]);
    $tieude = empty(escape($_POST["tieude"])) ? null : escape($_POST["tieude"]);
    $mota = empty(escape($_POST["mota"])) ? null : escape($_POST["mota"]);
    $chitiet = empty(escape($_POST["chitiet"])) ? null : escape($_POST["chitiet"]);
    $idnhanvien = null;
    if (!empty($_SESSION)){
        $idnhanvien = $_SESSION["idnhanvien"];
    }
    if ($id == 0) {
        $sqlxe = "
        INSERT INTO `xe` 
            (`tenxe`, `chiphimua`, `chiphiban`, `giavon`, `giahienthi`, `giaban`, `soluong`, `ngaynhap`, `hangxe`, `dongxe`, `nhienlieu`, `hopso`, `chongoi`, `xuatxu`, `mausac`, `namsanxuat`, `tieude`, `mota`, `chitiet`, `nhanviennhap`) 
        VALUES 
            ('$tenxe', $chiphimua, $chiphiban, $giavon, $giahienthi, $giaban, $soluong, '$ngaynhap', $hangxe, $dongxe, $nhienlieu, $hopso, $chongoi, $xuatxu, $mausac, $namsanxuat, '$tieude', '$mota', '$chitiet', $idnhanvien)";
        $isxe = insert_sql($sqlxe);
        if ($isxe > 0) {
            if(!empty($_POST["vondautus"])){
                $cvondautu = count($_POST["vondautus"]);
                for ($k = 0; $k < $cvondautu; $k++) {
                    $jsonvondautu = json_decode($_POST["vondautus"][$k]);
                    $idchudautu = $jsonvondautu->idchudautu;
                    $tiendautu = $jsonvondautu->tiendautu;
                    $taidautu = $jsonvondautu->taidautu;
                    $sqlvon =
                        "INSERT INTO `vondautu` (`idchudautu`, `idxe`, `taidautu`, `tiendautu`) 
                    SELECT $idchudautu, $isxe, $taidautu, $tiendautu FROM dual";
                    $isvon = insert_sql($sqlvon);
                }
            }
            if (!empty($_FILES)) {
                $countima = count($_FILES['hinhxes']['tmp_name']);
                for ($k = 0; $k < $countima; $k++) {
                    $hinhanh = "data:" . $_FILES['hinhxes']['type'][$k] . ";base64," . base64_encode(file_get_contents($_FILES['hinhxes']['tmp_name'][$k]));
                    $sqlhinh = "INSERT INTO `hinhanhxe` (`idxe`, `images`) SELECT $isxe, '$hinhanh' FROM dual";
                    $ishinh = insert_sql($sqlhinh);
                }
            }
            echo $isxe;
        } else {
            echo -1;
        }
    } else {
        $sqlu =
            "UPDATE `xe`
            SET `tenxe` = '$tenxe',
             `chiphimua` = $chiphimua,
             `chiphiban` = $chiphiban,
             `giavon` = $giavon,
             `giahienthi` = $giahienthi,
             `giaban` = $giaban,
             `soluong` = $soluong,
             `ngaynhap` = '$ngaynhap',
             `hangxe` = $hangxe,
             `dongxe` = $dongxe,
             `nhienlieu` = $nhienlieu,
             `hopso` = $hopso,
             `chongoi` = $chongoi,
             `xuatxu` = $xuatxu,
             `mausac` = $mausac,
             `namsanxuat` = $namsanxuat,
             `tieude` = '$tieude',
             `mota` = '$mota',
             `chitiet` = '$chitiet',
             `nhanviennhap` = $idnhanvien
            WHERE
                (`id` = $id)";
        $upxe = update_sql($sqlu);
        if ($upxe > 0) {
            if(!empty($_POST["vondautus"])){
                $sqld = "DELETE FROM vondautu WHERE idxe = $id";
                $rsqld = update_sql($sqld);
                $cvondautu = count($_POST["vondautus"]);
                for ($k = 0; $k < $cvondautu; $k++) {
                    $jsonvondautu = json_decode($_POST["vondautus"][$k]);
                    $idchudautu = $jsonvondautu->idchudautu;
                    $tiendautu = $jsonvondautu->tiendautu;
                    $taidautu = $jsonvondautu->taidautu;
                    $sqlvon =
                        "INSERT INTO `vondautu` (`idchudautu`, `idxe`, `taidautu`, `tiendautu`) 
                    SELECT $idchudautu, $id, $taidautu, $tiendautu FROM dual";
                    $isvon = insert_sql($sqlvon);
                }
            }
            if (!empty($_FILES)) {
                $sqld = "DELETE FROM hinhanhxe WHERE idxe = $id";
                $rsqld = update_sql($sqld);
                $countima = count($_FILES['hinhxes']['tmp_name']);
                for ($k = 0; $k < $countima; $k++) {
                    $hinhanh = "data:" . $_FILES['hinhxes']['type'][$k] . ";base64," . base64_encode(file_get_contents($_FILES['hinhxes']['tmp_name'][$k]));
                    $sqlhinh = "INSERT INTO `hinhanhxe` (`idxe`, `images`) SELECT $id, '$hinhanh' FROM dual";
                    $ishinh = insert_sql($sqlhinh);
                }
            }
            echo $upxe;
        } else {
            echo -1;
        }
    }
}
?>