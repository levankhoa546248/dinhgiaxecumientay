<?php
//load model
if (!empty($_POST)) {
    $id = intval($_POST['id']);
    delete('xe', 'id=' . $id);
    echo 1;
}