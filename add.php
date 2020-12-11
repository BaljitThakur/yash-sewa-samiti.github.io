<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lets Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="add.css">

</head>

<body>
    <?php
    $servername = "localhost";
    $username ="root";
    $password="1234";
    $dbname= "event";

        if(isset($_POST['submit'])){
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            if(!$conn){
                die('could not connect:' .mysqli_connect_error());
            }else{
                echo 'success';
            }
            $title= $_POST['title'];
            $description= $_POST['description'];
            $imagefile= $_POST['imagefile'];

            $sql= "INSERT INTO data (title,description,imagefile) VALUES ('$title','$description','$imagefile')";
            
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              
              mysqli_close($conn);

        }

    ?>

    <div class="header1 ">
        <div class="container">
        <h1>Yash Sewa Samiti</h1>
        <h4>Add event</h4>
        </div>
        
        
    </div>
    <div class="container">
        <form method="POST" action="<?php $_PHP_SELF ?>">
            <div class="form-group">
                <label >Title</label>
                <input name="title" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label >Description</label>
                <input name="description" type="text" class="form-control" >
            </div>
            <div class="form-group pd2">
                <label >Image</label>
                <input name="imagefile" type="file" class="form-control">
            </div>
           
            <button name="submit" type="submit" class="btn btn-info mt-3 ">Submit</button>
           
        </form>
    </div>
        <a href="view.php"><button name="view" class="btn btn-info" id="viewbutt" >View all events</button></a>
</body>
</html>