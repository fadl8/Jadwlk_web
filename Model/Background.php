<?php 

    include 'DB.php';
    if(isset($_POST['action'])) {

        if($_POST['action'] === 'save'){
            unset($_POST['action']);
            $_POST['path'] = Action::UplodeOnePhoto($_FILES['backgroundImage']['name'] , $_FILES['backgroundImage']['tmp_name'] , $_FILES['backgroundImage']['size']) ;
            Action::InsertData('backgroundimage' , $_POST);
            header("Location: ../View/index_CP.php?page=Background");
            exit();
        }
        if($_POST['action'] === 'delete'){
            unset($_POST['action']);
            Action::DeleteDate('backgroundimage', $_POST['Id'] );
            header("Location: ../View/index_CP.php?page=Background");
            exit();
        }
    }

?>