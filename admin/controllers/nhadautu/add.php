<?php
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
    );
    $uid = save('user', $user_add);
    $avatar_name = 'avatar_name' . $uid . '-' . alias($_POST['username']);
    $config = array(
        'name' => $avatar_name,
        'upload_path' => 'public/upload/images/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $avatar = upload('Image1', $config);
    if ($avatar) {
        $user_add = array(
            'Id' => $uid,
            'Avatar' => $avatar
        );
        save('user', $user_add);
    }
    header('location:admin.php?controller=nhadautu&action=list');
} else {
}
if (isset($_GET['uid'])) $uid = intval($_GET['uid']); else $uid = 0;
$title = ($uid == 0) ? 'Thêm thông tin' : 'Cập nhật thông tin tài khoản';
$user = $_SESSION['user'];
$user_info = get_a_record('user', $uid);
//load view
require('admin/views/nhadautu/add.php');