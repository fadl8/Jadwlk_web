
<?php 

    include 'DB.php';

    if(isset($_POST['action'])) {

        if($_POST['action'] === 'delete'){
            unset($_POST['action']);
             Action::DeleteDate('message', $_POST['Id'] );
            header("Location: ../View/index_CP.php?page=message");
            exit();
        }
        if($_POST['action'] === 'saveMessage'){
            unset($_POST['action']);
             Action::InsertData('message', $_POST);
            header("Location: ../View/index_CP.php?page=sendMessage");
            exit();
        }
        

    }

?>