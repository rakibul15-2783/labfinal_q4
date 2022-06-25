<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    
<?php

        $ids = $_GET['id'];

        $showquery = "SELECT * from student3 where id={$ids}";

        $showdata = mysqli_query($con,$showquery);

        $arrdata = mysqli_fetch_array($showdata);

        if(isset($_POST["submit"])){
            $idupdate = $_GET['id'];
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $age=$_POST["age"];
           

            $updatequery = "UPDATE student3 set id=$idupdate,fname = '$fname',
            lname='$lname', age=$age where id = $idupdate";
            $data=mysqli_query($con,$updatequery);   
        }
?>

<form action ="" method="POST">
        <input type="text" name="fname" value="<?php echo $arrdata['fname']; ?>" placeholder ="Firstname"><br><br>
        <input type="text" name="lname" value="<?php echo $arrdata['lname']; ?>" placeholder ="lastname"><br><br>
        <input type="number" name="age" value="<?php echo $arrdata['age']; ?>" placeholder ="Number"><br><br>

        <input type = "submit" name="submit" value="Update">
        <a href="display.php">
           <input type="button" value="Show">
        </a>
</form>
</body>
</html>