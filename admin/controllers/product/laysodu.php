<?php
if (!empty($_POST)) {
    $manhadautu = $_POST['manhadautu'];
    $where = 'manhadautu = ' . $manhadautu;
    $selects = 'sodu';
    $total = select_value_a_record('nhadautu', $where, $selects);
    echo $total;
}
?>