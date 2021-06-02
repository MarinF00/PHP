<?php
require_once "navigation.php";
?>

    <header>
        <p>Welcome <?php if (!empty($_SESSION) && !empty($_SESSION["full_name"])) echo $_SESSION["full_name"];?></p>
    </header>

<body>


</body>

<?php
require_once "footer.php";
?>
<style>
    p{
        color:white;
    }
    body {
background-image: url("http://excelpro.soccer/wp-content/uploads/2020/09/Epic-Soccer-Training-Review-29.jpg") ;
        background-attachment: fixed;
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
</style>
