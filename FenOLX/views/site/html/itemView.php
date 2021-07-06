<?php

echo "
<h1>$data->item</h1>
<p>$data->description</p>
<p>$data->gender</p>
<p>$data->price</p>
<p>$data->razmer</p>
<p><img width='300px' src=".IMG_PATH."$data->thumbnail></p>
<form action='" . APPLICATION_PATH . "index.php?controller=items&action=update&item_id=$data->id' method='post'>
    <button type='submit'>Update</button>
</form>


";

echo "
<script type='application/javascript'>
const buttonForComment = document.getElementById('addComment');
buttonForComment.onclick = () => {
    let message = document.getElementById('message').value;
    document.getElementById('message').value = '';
}
</script>

";
?>
<style>
    body {
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
        background-image: url('http://excelpro.soccer/wp-content/uploads/2020/09/Epic-Soccer-Training-Review-29.jpg');
    //}

    p {
        color:white;
    }
    h1 {
        color:white;
    }
</style>";

