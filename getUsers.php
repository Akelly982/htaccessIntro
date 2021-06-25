<?php 

    //Set these before including this code
        //userId

    include "dbConnectSQLOO.php";

    //get all categories
    $query = $conn->prepare("SELECT id,name FROM users");

    $query->execute();
    
    //store result
    $query -> bind_result($userId,$userName);

    while($query -> fetch()){
        echo "id: ".$userId." / username: ".$userName ."<br>";
    }


    //close Query
    $query->close();

    //close db connection
    mysqli_close($conn);  //$conn comes from include connectSQL above
    
?>