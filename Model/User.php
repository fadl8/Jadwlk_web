<?php 

    include 'DB.php';
    if(isset($_POST['action'])) {
 
        if($_POST['action'] === 'delete'){
            unset($_POST['action']);
            Action::DeleteDate('user', $_POST['Id'] );
            header("Location: ../View/index_CP.php?page=users");
            exit();
        }
    }

?>