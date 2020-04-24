<?php 
include 'connection.php';
session_start();
$user=$_SESSION['uid'];
$sql="select * from registration where reg_id=$user";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){ 
    
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <form action="user.php" method="POST">
        <label>User Id</label>
        <input type="text" name="reg_id" value="<?php echo $row['reg_id']?>" readonly><br>
        <input type="text" name="fname" value="<?php echo $row['fname']?>"><br>
        <input type="text" name="lname" value="<?php echo $row['lname'] ?>"><br>
        <input type="text" name="mail" value="<?php echo $row['email_id']?>"><br>
        <input type="text" name="mobile" value="<?php echo $row['mobile'] ?>"><br>
        <input type="date" name="dob" value="<?php echo $row['dob']?>"><br>
        <input type="text" name="gender" value="<?php echo $row['gender'] ?>"><br>
        <input type="submit" name="submit" value="Update">
</select>
    </form>
</body>
</html>
<?php
}
?>
