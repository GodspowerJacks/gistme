<?php

session_start();
include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <title>gistme-chatzone</title>
</head>
<body>

<div id="main" class=" col-md-6 m-auto border">
    <h1 class="bg-info text-light text-center"><small><?php echo $_SESSION['name']  ?>-online</small></h1>
    <div class="output">

    <?php

        $sql = "SELECT * FROM post";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            //output data of each row
            while($row=$result->fetch_assoc()){
                echo "".$row['name']. " ".":: " . $row['msg']." --" . $row['date']."<br>";
                echo "<br>";
            }
        }else{
            echo "0 results";
        }
        $conn->close();
    ?>
        
    </div>


    <form action="send.php" method="post">
        <textarea name="msg" placeholder="write your message here" class="form-control col-md-4 col-12"></textarea>
        <br>
        <div class="d-flex justify-content-between">
        <input class="btn btn-success text-light" type="submit" value="send"> 
        <a class="btn btn-info text-light" href="logout.php">logout</a> 
        </div>
  
    </form>
    <br>
   

</div>


</body>
</html>