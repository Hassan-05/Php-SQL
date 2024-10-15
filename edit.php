<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $conn = mysqli_connect("localhost","root","","news_project");
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
    }else{
  $sql = "SELECT * FROM students WHERE sid = {$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    }
    if (!$result) {
        echo "SQL Error: " . mysqli_error($conn);
    }else{
        $row = mysqli_fetch_assoc($result);
        var_dump($row);
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']?> "/>
          <input type="text" name="sname" value="<?php echo $row['sname']?> "/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']?> "/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="sclass">
              <option value="" selected disabled>Select Class</option>
              <option value="3">B.TECH</option>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']?> "/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
    }
    ?>
</div>
</div>
</body>
</html>
