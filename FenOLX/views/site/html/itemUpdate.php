<?php
echo "
<form action='" . APPLICATION_PATH . "index.php?controller=items&action=update' method='post'>
    <input style='display: none' name='id' value='$data->id'>
    <label>Item type</label>
    <input type='text' name='item' value='$data->item'><br>
    <label>Description</label>
    <input type='text' name='description' value='$data->description'><br>
    <label>Gender</label>
    <input type='text' name='gender' value='$data->gender'><br>
    <label>Price</label>
    <input type='text' name='price' value='$data->price'><br>
    <label>Size</label>
    <input type='text' name='razmer' value='$data->razmer'><br>
    <label>Thumbnail</label>
    <input type='text' name='thumbnail' value='$data->thumbnail'><br>
    <button name='update' value='true'>Update</button>
</form>
";
?>
<style>
    label {
        color:white;
    }
    body {
        background-image: url("http://excelpro.soccer/wp-content/uploads/2020/09/Epic-Soccer-Training-Review-29.jpg") ;
        background-attachment: fixed;
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
</style>
