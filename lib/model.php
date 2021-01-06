<?php
//require "function.php";
require_once("dbConnect.php");
function show_404()
{
    header('HTTP/1.1 Not Found 404', true, 404);
    require('404.php');
    exit();
}

function escape($str)
{
    $conn = connectDB();
    return mysqli_real_escape_string($conn, $str);
}

function pagination($url, $page, $total)
{
    $adjacents = 2;
    $prevlabel = "&lsaquo; Trước";
    $nextlabel = "Tiếp &rsaquo;";
    $out = '<ul class="pagination">';
    //first
    if ($page == 1) {
        $out .= '<li class="disabled"><span>Đầu</span></li>';
    } else {
        $out .= '<li><a href="' . $url . '">Đầu</a></li>';
    }
    // previous
    if ($page == 1) {
        $out .= '<li class="disabled"><span>&Lt;</span></li>';
    } elseif ($page == 2) {
        $out .= '<li><a href="' . $url . '">&Lt;</a></li>';
    } else {
        $out .= '<li><a href="' . $url . '&amp;page=' . ($page - 1) . '">&Lt;</a></li>';
    }

    $pmin = ($page > $adjacents) ? ($page - $adjacents) : 1;
    $pmax = ($page < ($total - $adjacents)) ? ($page + $adjacents) : $total;
    for ($i = $pmin; $i <= $pmax; $i++) {
        if ($i == $page) {
            $out .= '<li class="active"><span>' . $i . '</span></li>';
        } elseif ($i == 1) {
            $out .= '<li><a href="' . $url . '">' . $i . '</a></li>';
        } else {
            $out .= '<li><a href="' . $url . "&amp;page=" . $i . '">' . $i . '</a></li>';
        }
    }
    // next
    if ($page < $total) {
        $out .= '<li><a href="' . $url . '&amp;page=' . ($page + 1) . '">&Gt;</a></li>';
    } else {
        $out .= '<li class="disabled"><span>&Gt;</span></li>';
    }
    //last
    if ($page < $total) {
        $out .= '<li><a href="' . $url . '&amp;page=' . $total . '">Cuối</a></li>';
    } else {
        $out .= '<li class="disabled"><span>Cuối</span></li>';
    }

    $out .= '</ul>';
    return $out;
}

/**
 * Upload file
 * @param string
 * @param array
 * @return mixed
 */
function upload($images, $nameimages, $table, $idxe)
{
    $count = count($_FILES[$images]["name"]);
    for ($i = 0; $i < $count; $i++) {
        $file = $_FILES[$images];
        $config = array(
            'name' => $nameimages . "_" . $i,
            'upload_path' => 'admin/upload/',
            'allowed_exts' => 'jpg|jpeg|png|gif',
        );
        $options = array(
            'name' => '',
            'upload_path' => './',
            'allowed_exts' => '*',
            'overwrite' => TRUE,
            'max_size' => 0
        );
        $options = array_merge($options, $config);
        if (!isset($file)) return FALSE;
        if ($file['error'][$i] != 0) return FALSE;
        $temp = explode(".", $file["name"][$i]);
        $ext = end($temp);
        if ($options['allowed_exts'] != '*') {
            $allowedExts = explode('|', $options['allowed_exts']);
            if (!in_array($ext, $allowedExts)) return FALSE;
        }
        $size = $file['size'][$i] / 1024 / 1024;
        if (($options['max_size'] > 0) && ($size > $options['max_size'])) return FALSE;

        $name = empty($options['name']) ? $file["name"][$i] : $options['name'] . '.' . $ext;
        $file_path = $options['upload_path'] . $name;
        if ($options['overwrite'] && file_exists($file_path)) {
            unlink($file_path);
        }

        move_uploaded_file($file["tmp_name"][$i], $file_path);        //cập nhật ảnh mới
        if ($name) {
//            $arrinsert = $array + array("duongdan" => $file_path);
//            insert($table, $arrinsert);
            $sql = "";
            if ($i == 0) {
                $sql = "SELECT $idxe, $file_path FROM DUAL";
            } else {
                $sql = $sql + "UNION ALL SELECT $idxe, $file_path FROM DUAL";
            }
        }
    }
    $sqlInsert = "INSERT INTO hinhanhxe (idxe, duongdan) " + $sql;
    numRows($sqlInsert);
    return 1;
}

function strU($str)
{
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = preg_replace("/(Đ)/", 'D', $str);
    $str = preg_replace("/[^A-Za-z0-9 ]/", '', $str);
    $str = preg_replace("/\s+/", ' ', $str);
    $str = trim($str);
    return $str;
}

function alias($str)
{
    $str = strU($str);
    $str = strtolower($str);
    $str = str_replace(' ', '-', $str);
    return $str;
}

function substring($string, $num)
{
    if (strlen($string) <= $num) return $string;
    $number = strpos($string, ' ', $num);
    $str = substr($string, 0, $number) . "....";
    return $str;
}

function save($table, $data = array())
{
    $conn = connectDB();
    $values = array();
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($conn, $value);
        $values[] = "`$key`='$value'";
    }
    $Id = intval($data['Id']);
    if ($Id > 0) {
        $sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE Id=$Id";
    } else {
        $sql = "INSERT INTO `$table` SET " . implode(',', $values);
    }

    mysqli_query($conn, $sql) or die(mysqli_error());

    $Id = ($Id > 0) ? $Id : mysqli_insert_id($conn);
    return $Id;
}

function get_a_record($table, $id, $select = '*')
{
    $conn = connectDB();
    $sql = "SELECT $select FROM `$table` WHERE $id";
    $query = mysqli_query($conn, $sql) or die(mysqli_error());
    $data = NULL;
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        mysqli_free_result($query);
    }
    return $data;
}

function get_a_record_by_alias($table, $alias, $select = '*')
{
    $conn = $GLOBALS["conn"];
    $alias = mysqli_real_escape_string($alias);
    $sql = "SELECT $select FROM `$table` WHERE alias='$alias'";
    $query = mysqli_query($conn, $sql) or die(mysqli_error());
    $data = NULL;
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        mysqli_free_result($query);
    }
    return $data;
}

function Selecct_a_record($table, $options = array(), $select = '*')
{
    $conn = $GLOBALS["conn"];
    $select = isset($options['select']) ? $options['select'] : '*';
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';

    $sql = "SELECT $select FROM `$table` $where $order_by $limit";
    $query = mysqli_query($conn, $sql) or die(mysqli_error());

    $data = NULL;
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        mysqli_free_result($query);
    }
    return $data;
}

function get_all($table, $options = array())
{
    $conn = connectDB();
    $select = isset($options['select']) ? $options['select'] : '*';
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';
    $sql = "SELECT $select FROM $table $where $order_by $limit";
    $query = mysqli_query($conn, $sql) or die(mysqli_error());

    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }

    return $data;
}

function get_total($table, $options = array())
{
    $conn = connectDB();
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $sql = "SELECT COUNT(*) as total FROM `$table` $where";
    $query = mysqli_query($conn, $sql) or die(mysqli_error());
    $row = mysqli_fetch_assoc($query);
    return $row['total'];
}

function getRealIpAddr()
{
    $count_file = fopen("counter.txt", "r") or die("Unable to open file!");
    $count_visiter = print_r(fgets($count_file));
    fclose($count_file);
    return $count_visiter;
}

function get_time($timePost, $timeReply)
{

    $datePost = date_parse_from_format('Y:m:d H:i:s', $timePost);
    $dateReply = date_parse_from_format('Y:m:d H:i:s', $timeReply);

    $tsPost = mktime($datePost['hour'], $datePost['minute'], $datePost['second'], $datePost['month'], $datePost['day'], $datePost['year']);
    $tsReply = mktime($dateReply['hour'], $dateReply['minute'], $dateReply['second'], $dateReply['month'], $dateReply['day'], $dateReply['year']);
    $distance = $tsReply - $tsPost;

    switch ($distance) {
        case ($distance < 60):
            $result = ($distance == 1) ? $distance . ' second ago' : $distance . ' seconds ago';
            break;
        case ($distance >= 60 && $distance < 3600):
            $minute = round($distance / 60);
            $result = ($minute == 1) ? $minute . ' minute ago' : $minute . ' minutes ago';
            break;
        case ($distance >= 3600 && $distance < 86400):
            $hour = round($distance / 3600);
            $result = ($hour == 1) ? $hour . ' hour ago' : $hour . ' hours ago';
            break;
        case (round($distance / 86400) == 1):
            $result = 'Yesterday at ' . date('H:i:s', $tsReply);
            break;
        default:
            $result = date('d/m/Y \a\t H:i:s', $tsPost);
            break;
    }
    return $result;
}

function get_select_nested($sql)// select lồng
{
    $conn = connectDB();
    $query = mysqli_query($conn, $sql) or die(mysqli_error());

    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }

    return $data;
}

function insert($table, $data = array())
{
    $conn = connectDB();
    $values = array();
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($conn, $value);
        $values[] = "`$key`='$value'";
    }
    $sql = "INSERT INTO `$table` SET " . implode(',', $values);

    if (mysqli_query($conn, $sql) or die(mysqli_error())) {
        $id = mysqli_insert_id($conn);
        return $id;
    } else {
        return 0;
    }
}

function update($table, $data = array(), $where)
{
    $conn = connectDB();
    $values = array();
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($conn, $value);
        $values[] = "`$key`='$value'";
    }
    $sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE " . $where;

    if (mysqli_query($conn, $sql) or die(mysqli_error())) {
        return 1;
    } else {
        return 0;
    }
}

function select($sql)
{
    $conn = connectDB();
    $query = mysqli_query($conn, $sql) or die(mysqli_error());

    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }

    return $data;
}

function select_1_record($sql)
{
    $conn = connectDB();
    $query = mysqli_query($conn, $sql) or die(mysqli_error());
    $data = NULL;
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        mysqli_free_result($query);
    }
    return $data;
}

function delete($table, $where)
{
    $conn = connectDB();
    $sql = "DELETE FROM `$table` WHERE " . $where;
    mysqli_query($conn, $sql) or die(mysqli_error());
}

function select_id_auto($table)
{
    $conn = connectDB();
    $sql = "SELECT AUTO_INCREMENT AS autoid FROM information_schema.TABLES WHERE TABLE_NAME = '$table'";
    $query = mysqli_query($conn, $sql) or die(mysqli_error());
    $row = mysqli_fetch_assoc($query);
    return $row['autoid'];
}

function run_query($query)
{
    $conn = connectDB();
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $resultset[] = $row;
    }
    if (!empty($resultset))
        return $resultset;
}

function numRows($query)
{
    try {
        $result = mysqli_query(connectDB(), $query);
        if ($result){
            return 1;
        }
        return 0;
    } catch (Exception $e) {
        return 0;
    }

}

function select_value_a_record($table, $where, $selects)
{
    $conn = connectDB();
    $sql = "SELECT  $selects as total FROM `$table` WHERE " . $where;
    $query = mysqli_query($conn, $sql) or die(mysqli_error());
    $row = mysqli_fetch_assoc($query);
    return $row['total'];
}


function insert_sql($sql)
{
    $conn = connectDB();
    if (mysqli_query($conn, $sql) or die(mysqli_error())) {
        $id = mysqli_insert_id($conn);
        return $id;
    } else {
        return 0;
    }
}

function update_sql($sql)
{
    $conn = connectDB();
    if (mysqli_query($conn, $sql) or die(mysqli_error())) {
        return 1;
    } else {
        return 0;
    }
}