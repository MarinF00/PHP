<?php

echo "
<b>
<h1>$data->item</h1>
<label>Description:</label>
$data->description<br>
<label>Gender:</label>
$data->gender<br>
<label>Price:</label>
$data->price<br>
<label>Size:</label>
$data->razmer<br>
<label>Contacts:</label>
$data->contact<br>
<label>Thumbnail</label><br>
<img width='300px' src=".IMG_PATH."$data->thumbnail>
<form action='" . APPLICATION_PATH . "index.php?controller=items&action=update&item_id=$data->id' method='post'>
    <button type='submit'>Update</button>
</form>
</b>


";
?>

<style>
    body {
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
        background-image: url('https://pbs.twimg.com/media/D49aN5YX4AArKYo.jpg');
        font-size: 20px;
        color:white;
    }

    p {
        color:white;
    }
    h1 {
        color:white;
    }



</style>

