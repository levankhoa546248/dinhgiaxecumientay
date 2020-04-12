<?php
if (isset($_POST['cid'])) {
    $cid = intval($_POST['cid']);
    $subcategories = get_all('Subcategory', array(
        'where' => 'CategoryId='.$cid,
        'select'=>'Id,Name',
        'order_by' => 'Name'
    ));
    echo '<b><h4>'.''.'</h4></b>';
}
?>