<?php
echo "

<form action='" . APPLICATION_PATH . "index.php?controller=items&action=create' method='post' enctype='multipart/form-data'>
<div class='hello'>
    <div class='form-group'>
        <label for='inputEmail'>Type</label>
        <input name='item' type='email' class='form-control'  placeholder='Type'>
    </div>
    <div class='form-group'>
        <label for='inputPassword'>Description</label>
        <textarea rows='4' cols='59' name='description'></textarea><br>
    </div>
        <div class='form-group'>
        <label for='inputPassword'>Gender</label>
        <input name='gender' type='password' class='form-control'  placeholder='Gender'>
    </div>
        <div class='form-group'>
        <label for='inputPassword'>Price</label>
        <input name='price' type='password' class='form-control'  placeholder='Price'>
    </div>
        <div class='form-group'>
        <label  for='inputPassword'>Size</label>
        <input name='razmer' type='password' class='form-control'  placeholder='Size'>
    </div>    <div class='form-group'>
        <label for='inputPassword'>Contact</label>
        <input name='contact' type='password' class='form-control'  placeholder='Contact'>
    </div>
        <div class='form-group'>
        <label for='inputPassword'>Thumbnail</label>
        <input name='thumbnail' type='file' class='form-control'  placeholder='Thumbnail'>
    </div>
    
    <button class='btn btn-primary' name='create' value='true'>Create</button>
    
    </div>
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
    .btn {
        margin-top: 20px;
        background-color: lightgreen;
        color: black;
        font-weight: bolder;
        border-color: lightgreen;
    }
    .btn:hover {
        background-color: darkgreen;
        color:white;
        font-weight: bolder;
        border-color: darkgreen;
    }
</style>
