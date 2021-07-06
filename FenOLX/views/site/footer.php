
<?php
?>

</section>
<div class="foot">


    <footer class="text-center text-white" style="background-color: red;">

        <div class="myDate">        <?php if(!empty($_SESSION) && !empty($_SESSION["full_name"]))
                echo $_SESSION["full_name"]. "
 Logged on: <h3 id='date'></h3>
<script>
    let today = new Date();
    let date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    document.getElementById('date').innerHTML = date;
</script>";
            ?>
        </div>

    </footer>

</div>
</main>
</body>
</html>
<style>
    .foot {
        position:fixed;
        bottom:0;
        width:100%;
        height:60px;
        background:darkred;
        opacity: 45%;
    }
    .myDate {

    }

</style>
