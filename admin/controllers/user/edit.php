<?php
//load model
require_once('admin/models/users.php');
//if form submit
if (!empty($_POST)) {
    $user_edit = array(
        'Id' => intval($_POST['id']),
        'Name' => escape($_POST['name']),
        'Address' => escape($_POST['address']),
        'Phone' => escape($_POST['phone']),
        'TypeUser' => escape($_POST['typeuser']),
        'RoleId' => escape($_POST['roleid']),
        'QuyenTruyCap' => intval(isset($_POST['quyentruycap']) == "on" || null ? "1" : "0"),
        'CauHinhWebsite' => intval(isset($_POST['cauhinhwebsite']) == "on" || null ? "1" : "0"),
        'DonHang' => intval(isset($_POST['donhang']) == "on" || null ? "1" : "0"),
        'SanPham' => intval(isset($_POST['sanpham']) == "on" || null ? "1" : "0"),
        'DanhMucSanPham' => intval(isset($_POST['danhmucsanpham']) == "on" || null ? "1" : "0"),
        'NhomDanhMuc' => intval(isset($_POST['nhomdanhmuc']) == "on" || null ? "1" : "0"),
        'PhatVideo' => intval(isset($_POST['phatvideo']) == "on" || null ? "1" : "0"),
        'BinhLuan' => intval(isset($_POST['binhluan']) == "on" || null ? "1" : "0"),
        'PhanHoi' => intval(isset($_POST['phanhoi']) == "on" || null ? "1" : "0"),
        'ThongKe' => intval(isset($_POST['thongke']) == "on" || null ? "1" : "0")
    );
    $uid =  save('user', $user_edit);
    $avatar_name = 'avatar_name'.$uid.'-'.alias($_POST['username']);
    $config = array(
        'name' => $avatar_name,
        'upload_path'  => 'public/upload/images/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $avatar = upload('Image1', $config);
    //cập nhật ảnh mới
    if($avatar){
        $user_edit = array(
            'Id' => $uid,
            'Avatar' => $avatar
        );
        save('user', $user_edit);
    }
//        $_SESSION['user'] = get_a_record('user', $uid);
//    header('location:admin.php?controller=user&action=info&uid='.intval($_POST['id']));
    header('location:admin.php?controller=user&action=info&uid='.intval($_POST['id']));
} else {
}
if (isset($_GET['uid'])) $uid = intval($_GET['uid']); else $uid=0;
$title = ($uid==0) ? 'Thêm thông tin' : 'Cập nhật thông tin tài khoản';
$user = $_SESSION['user'];
$user_info = get_a_record('user', $uid);
//load view
require('admin/views/user/edit.php');