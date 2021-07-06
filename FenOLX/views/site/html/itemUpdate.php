<?php
echo "
<form action='" . APPLICATION_PATH . "index.php?controller=items&action=update' method='post' enctype='multipart/form-data'>
<input style='display: none' name='id' value='$data->id'>
<div class='hello'>
    <div class='form-group'>
        <label for='type'>Type</label>
        <input name='item' type='text' class='form-control' value='$data->item' placeholder='Type'>
    </div>
    <div class='form-group'>
        <label for='description'>Description</label>
        <textarea rows='4' cols='59'  name='description'></textarea><br>
    </div>
        <div class='form-group'>
        <label for='gender'>Gender</label>
        <input name='gender' type='text' class='form-control' value='$data->gender' placeholder='Gender'>
    </div>
        <div class='form-group'>
        <label for='price'>Price</label>
        <input name='price' type='text' class='form-control' value='$data->price' placeholder='Price'>
    </div>
        <div class='form-group'>
        <label  for='size'>Size</label>
        <input name='razmer' type='text' class='form-control' value='$data->razmer' placeholder='Size'>
    </div>    <div class='form-group'>
        <label for='contacts'>Contacts</label>
        <input name='contact' type='text' class='form-control' value='$data->contact' placeholder='Contact'>
    </div>
        <div class='form-group'>
        <label for='picture'>Picture</label>
        <input name='thumbnail' type='text' class='form-control' value='$data->thumbnail' placeholder='Picture'>
    </div>
    
    <button class='btn1 btn-primary' name='update' value='true'>Update</button>
    
    </div>
</form>
 
    ";

if(!empty($_SESSION) && !empty($_SESSION["user_role"]) && strcmp($_SESSION["user_role"],"admin") !==0)
    echo "
    <form>
    <button name='update' value='true'>Update</button>
    </form>
";
?>
<?php
require_once "views/site/footer.php";
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
    .hello {
        border: 2px solid black;
        width: 30rem;
        padding: 20px;
        background:darkred;
        opacity: 70%;

    }
    form {
        position: center;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .btn1 {
        background-color: lightgreen;
        color: black;
        font-weight: bolder;
        margin-top: 20px;
        border-color: lightgreen;
        border-radius: 10%;
    }
    .btn1:hover {
        background-color: black;
        color:darkred;
        font-weight: bolder;
        border-color: black;
    }
</style>
