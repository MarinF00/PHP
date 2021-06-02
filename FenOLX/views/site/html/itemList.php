<?php
echo "
<form class='' action='" . APPLICATION_PATH . "index.php?controller=items&action=create' method='post'>
    <button>Create</button>
</form>
<section>
    <h1>Items</h1>
                <form class='d-flex' action='" . APPLICATION_PATH . "index.php?controller=items&action=listAll' method='post'>
<input class='form-control me-2' id='topic' type='text' placeholder='Search for item' name='topic'>
<button class='btn btn-outline-success' name='search' value='true'>Search</button>
</form>

    <table class='table table-dark'>
        <thead>
            <tr>
                <th scope='col'>Item</th>
                <th scope='col'>Gender</th>
                <th scope='col'>Size</th>
                <th scope='col'>Price</th>
                <th scope='col'>Description</th>
                <th scope='col'>Picture</th>
            </tr>
        </thead>
        <tbody>";

if (is_array($data)) {
    foreach ($data as $item) {
        echo "<tr>
             <td>$item->item</td>
             <td>$item->gender</td>   
             <td>$item->razmer</td>
             <td>$item->price</td>
             <td>$item->description</td>     
             <td><img width='300px' src='" . IMG_PATH . "$item->thumbnail' /></td>
             <td>
                <form action='" . APPLICATION_PATH ."index.php?controller=items&action=view' method='post'>
                    <button name='item_id' value='$item->id'>View</button>
                </form>
                <form action='" . APPLICATION_PATH . "index.php?controller=items&action=delete' method='post'>
                    <button name='item_id' value='$item->id'>Delete</button>
             </td>
          </tr>";
    }
}

echo "  </tbody>
    </table>
</section>
<style>
body {
background-repeat: no-repeat;
background-size: 100% 100%;
background-attachment: fixed;
background-image: url('http://excelpro.soccer/wp-content/uploads/2020/09/Epic-Soccer-Training-Review-29.jpg');
//}

td {
color:white;
}
h1 {
color:white;
}
</style>";
