<?php
echo "
<form action='" . APPLICATION_PATH . "index.php?controller=items&action=update' method='post' enctype='multipart/form-data'>
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
    <label>Contacts</label>
    <input type='text' name='contact' value='$data->contact'><br>
    <label>Your Picture file name</label>
    <input type='text' name='thumbnail' value='$data->thumbnail'><br>
    </form>
    ";

if(!empty($_SESSION) && !empty($_SESSION["user_role"]) && strcmp($_SESSION["user_role"],"admin") !==0)
    echo "
    <form>
    <button name='update' value='true'>Update</button>
    </form>
";
?>


<style>
    label {
        color:white;
    }
    body {
        background-image: url("https://live.staticflickr.com/2877/33823450815_411667305b_b.jpg") ;
        background-attachment: fixed;
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
</style>
