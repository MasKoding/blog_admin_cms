<?php 
    require_once "connect.php";
    
    $queryDelete = "DELETE FROM artikel";

    if($connect->query($queryDelete)){
        echo "<script>
        alert('Sukses Delete');
           window.location.href='index.php';
         </script>";
    }

?>