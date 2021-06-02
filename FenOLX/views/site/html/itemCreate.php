<?php
echo "
<form action='" . APPLICATION_PATH . "index.php?controller=items&action=create' method='post' enctype='multipart/form-data'>
    <label>Item Type</label>
        <input type='text' name='item'><br>
    <label>Description</label>
    <input type='text' name='description'><br>
    <label>Gender</label>
    <input type='text' name='gender'><br>
    <label>Price</label>
    <input type='text' name='price'><br>
    <label>Razmer</label>
    <input type='text' name='razmer'><br>
    <label>Picture</label>
    <input type='file' name='file_to_upload'><br>
    <button name='create' value='true'>Create</button>
</form>
";