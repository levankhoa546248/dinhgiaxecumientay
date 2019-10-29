<?php
require_once("../dbcontroller.php");
$db_handle = new DBController();
if (isset($_GET['cid'])) {
    $cid = intval($_POST['cid']);
    $subcategories = get_all('Subcategory', array(
        'where' => 'CategoryId='.$cid,
        'select'=>'Id,Name',
        'order_by' => 'Name'
    ));
    echo '<b><h4>'.''.'</h4></b>';
}

?>
<select name="subcategory_id" class="form-control" id="subcategory_id">
    <?php
        $selected = 'selected';
        foreach ($subcategories as $subcategory) {
        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
    } ?>
</select>