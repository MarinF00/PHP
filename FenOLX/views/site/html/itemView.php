<?php

echo "
<div class='mySection'>
<div class='card'>
<img src='".IMG_PATH."$data->thumbnail' class='card-img-top' alt='...'>
<div class='card-body'>

<h1 class='card-title'>$data->item</h1>
<label>Description:</label>
<p class='card-text'>$data->description</p><br>
<label>Gender:</label>
<p class='card-text'>$data->gender</p><br>
<label>Price:</label>
<p class='card-text'>$data->price</p><br>
<label>Size:</label>
<p class='card-text'>$data->razmer</p><br>
<label>Contacts:</label>
<p class='card-text'>$data->contact</p><br>

</div>

";
if(!empty($_SESSION) && !empty($_SESSION["user_role"]) && strcmp($_SESSION["user_role"],"admin") ===0)
                    echo "
<form action='" . APPLICATION_PATH . "index.php?controller=items&action=update&item_id=$data->id' method='post'>
    <button class='myButton' type='submit'>Update</button>
</form>
</b>
</div>
</div>

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


    .mySection{
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        color: white;
    }

    .card{
        width:50rem;
        justify-content: center;
        align-items: center;
        border:2px solid black;
        padding:10px;
        background-color: #f5f186;
        background-image: linear-gradient(315deg, darkred 0%, #000000 130%);
        border-radius: 10px;
        margin:10px;
    }
    .myButton {
        margin-bottom: 40px;
        background-color: lightgreen;
        color: black;
        font-weight: bolder;
        border-color: lightgreen;
        border-radius: 10%;
    }
    .myButton:hover {
        background-color: black;
        color:darkred;
        font-weight: bolder;
        border-color: black;
    }


</style>

