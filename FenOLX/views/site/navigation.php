

<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: darkred;">
    <div class="container-fluid">
        <a style="color:white;" class="nav-link" href="<?php echo APPLICATION_PATH?>index.php"><h1>MUFC OLX</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo APPLICATION_PATH?>index.php">Home</a>
                </li>


                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APPLICATION_PATH?>index.php?controller=items&action=listAll">Items</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APPLICATION_PATH?>index.php?controller=items&action=create">Sell item</a>
                </li>




            </ul>

             <div class="user">
                <p> Welcome <?php if (!empty($_SESSION) && !empty($_SESSION["full_name"])) echo $_SESSION["full_name"];?></p>
             </div>


            <?php
            echo "<form class='d-flex' '
                        
                      action='" . APPLICATION_PATH . "index.php?login=true' method='post'>
                        <input class='form-control me-2' type='submit' value='";
            echo (!empty($_SESSION["uid"])) ? "Logout" : "Login";
            echo "'>
                    </form>
                ";
            ?>


        </div>
    </div>
</nav>
</body>
<style>

.user {
    margin-right: 10px;
    margin-top: 20px;
    font-weight: bolder;
    font-size: 15px;
    color: white;
}
    </style>






