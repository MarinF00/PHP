<?php
echo "
<form action='" . APPLICATION_PATH . "index.php?controller=items&action=create' method='post' enctype='multipart/form-data'>
    <label>Item Type</label>
        <input type='text' name='item'><br>
    <label>Description</label><br>
    <textarea rows='4' cols='50' name='description'></textarea><br>
    <label>Gender</label>
    <input type='text' name='gender'><br>
    <label>Price</label>
    <input type='text' name='price'><br>
    <label>Razmer</label>
    <input type='text' name='razmer'><br>
    <label>Contacts</label>
    <input type='text' name='contact'><br>
    <label>Picture</label>
    <input type='file' name='thumbnail'><br>
    <button name='create' value='true'>Create</button>
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
