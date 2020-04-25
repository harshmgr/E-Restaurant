<?php
    session_start();
include_once 'connection.php';
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $reg_id=$_GET['reg_id'];
    $mail=$_GET['mail'];
    $dob=$_GET['dob'];
    $mobile=$_GET['mobile'];
    $gender=$_GET['gender'];
    $sql="UPDATE registration SET fname='$fname', lname='$lname',email_id='$mail', mobile='$mobile',dob='$dob',gender='$gender' WHERE reg_id='$reg_id'";
    if (mysqli_query($conn,$sql)) {
              ?>
              <!DOCTYPE html>
              <html>
              <head>
                  <title>Data Update Request</title>
              </head>
              <body>
              <h1 style="font-size: 300px;padding: 0px; margin-top: 0px; text-align: center;background-color: #000040; color: #fff">Data Updated</h1>
              </body>
              </html>
              <?php
              echo "<script>setTimeout(\"location.href = 'user.php';\",2500);</script>";
                  }
    else {
        echo mysqli_error($conn);
    }
?>