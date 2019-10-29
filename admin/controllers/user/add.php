<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $user_add = array(
        'Id' => intval($_POST['id']),
        'Username' => escape($_POST['username']),
        'Password' => md5($_POST['password']),
        'Email' => escape($_POST['email']),
        'RoleId' => escape('1'),
        'Name' => escape($_POST['name']),
        'Address' => escape($_POST['address']),
        'CreateDate' => gmdate('Y-m-d H:i:s', time() + 7 * 3600),
        'Phone' => escape($_POST['phone']),
        'TypeUser' => intval($_POST['typeuser'])
//        'QuyenTruyCap' => intval($_POST['quyentruycap'] == "on" ? "1" : "0"),
//        'CauHinhWebsite' => intval($_POST['cauhinhwebsite'] == "on" ? "1" : "0"),
//        'DonHang' => intval($_POST['donhang'] == "on" ? "1" : "0"),
//        'SanPham' => intval($_POST['sanpham'] == "on" ? "1" : "0"),
//        'DanhMucSanPham' => intval($_POST['danhmucsanpham'] == "on" ? "1" : "0")
//        'NhomDanhMuc' => intval($_POST['nhomdanhmuc'] == "on" ? "1" : "0"),
//        'PhatVideo' => intval($_POST['phatvideo'] == "on" ? "1" : "0"),
//        'BinhLuan' => intval($_POST['binhluan'] == "on" ? "1" : "0"),
//        'PhanHoi' => intval($_POST['phanhoi'] == "on" ? "1" : "0"),
//        'ThongKe' => intval($_POST['thongke'] == "on" ? "1" : "0")
    );
    $uid =  save('user', $user_add);
    $avatar_name = 'avatar_name'.$uid.'-'.alias($_POST['username']);
    $config = array(
        'name' => $avatar_name,
        'upload_path'  => 'public/upload/images/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $avatar = upload('Image1', $config);
    if($avatar){
        $user_add = array(
            'Id' => $uid,
            'Avatar' => $avatar
        );
        save('user', $user_add);
    }
    header('location:admin.php?controller=user&action=list');
} else {
}
if (isset($_GET['uid'])) $uid = intval($_GET['uid']); else $uid=0;
$title = ($uid==0) ? 'Thêm thông tin' : 'Cập nhật thông tin tài khoản';
 $user = $_SESSION['user'];
$user_info = get_a_record('user', $uid);
//load view
require('admin/views/user/add.php');