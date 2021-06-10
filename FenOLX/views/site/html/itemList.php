<?php
echo "

<section>
    <h1>Items</h1>
                <form class='d-flex' action='" . APPLICATION_PATH . "index.php?controller=items&action=listAll' method='post'>
<input class='form-control me-2' id='topic' type='text' placeholder='Search for item' name='topic'>
<button class='btn btn-outline-success' name='search' value='true'>Search</button>
</form>

";

if (is_array($data)) {
    foreach ($data as $item) {
        echo "<div class='card'>
  <img  src='".IMG_PATH."$item->thumbnail' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$item->item</h5>
    <p class='card-text'>$item->price</p>
     <form action='" . APPLICATION_PATH ."index.php?controller=items&action=view' method='post'>
                    <button class='btn btn-primary' name='item_id' value='$item->id'>View</button>
                </form>
                ";
                if(!empty($_SESSION) && !empty($_SESSION["user_role"]) && strcmp($_SESSION["user_role"],"admin") ===0)
                    echo "
                 <form action='" . APPLICATION_PATH ."index.php?controller=items&action=delete' method='post'>
                    <button class='btn btn-primary' id='delete' name='item_id' value='$item->id'>Delete</button>
                </form>";

echo"
                
  </div>
</div>";
    }
}

echo "  </tbody>
    </table>
</section>"
    ?>
<style>
body {
background-repeat: no-repeat;
background-size: 100% 100%;
background-attachment: fixed;
background-image: url('https://live.staticflickr.com/2877/33823450815_411667305b_b.jpg');


}

td {
color:white;
}
h1 {
color:white;
}
.card {
width: 30rem;
padding: 15px;
background-color: #f6fba2;
background-image: linear-gradient(315deg, #f6fba2 0%, #20ded3 74%);;
}
section {
justify-content: center;
align-items: center;
display: flex;
flex-direction: column;
}
.btn {
color:red;
background: black;
border-color: green;
}
.btn:hover {
background: yellow;
color: red;
display: flex;
flex-direction: row;
}
#delete {
right: 30px;
position: absolute;
top: 550px;
}

</style>";
