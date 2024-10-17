<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php
    if(isset($_POST['deletebtn'])){
        header("Location: http://localhost/php-sql/index.php?id={$_POST['sid']");
    }
    ?>
</div>
</div>
</body>
</html>
