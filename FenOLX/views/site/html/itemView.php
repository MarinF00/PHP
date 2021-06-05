<?php

echo "
<h1>$data->item</h1>
<p>$data->description</p>
<p>$data->gender</p>
<p>$data->price</p>
<p>$data->razmer</p>
<p>$data->contact</p>
<p><img width='300px' src=".IMG_PATH."$data->thumbnail></p>
<form action='" . APPLICATION_PATH . "index.php?controller=items&action=update&item_id=$data->id' method='post'>
    <button type='submit'>Update</button>
</form>


";
?>

<style>
    body {
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
        background-image: url('https://live.staticflickr.com/2877/33823450815_411667305b_b.jpg');
    //}

    p {
        color:white;
    }
    h1 {
        color:white;
    }
</style>";

