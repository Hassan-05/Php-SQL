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
          <?php 
          $sql1 = "SELECT * FROM sclass";
          $result1 = mysqli_query($conn, $sql1);
            if (!$result1) {
            echo "SQL Error: " . mysqli_error($conn);
            }else{
                if(mysqli_num_rows($result1) > 0){
                    echo '<select name="sclass">';
                    while($row1 = mysqli_fetch_assoc($result1)){
                        if($row['sclass'] == $row1['cid']){
                            $select = "selected";
                        }
                        else{
                            $select = "";
                        }
                        echo "<option {$select} value='{$row1['id']}'>{$row1['cname']}</option>";
                    }
                    echo '</select>';
                }   
            }?>
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
