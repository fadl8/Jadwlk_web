<?php 

    include 'DB.php';

    Action::test($_POST);
    if(isset($_POST['action'])) {

        if($_POST['action'] === 'save'){
            unset($_POST['action']);
             Action::InsertData('cateogry' , $_POST);
            header("Location: ../View/index_CP.php?page=Cateogry");
            exit();
        }

        if($_POST['action'] === 'delete'){
            unset($_POST['action']);
             Action::DeleteDate('cateogry', $_POST['Id'] );
            header("Location: ../View/index_CP.php?page=Cateogry");
            exit();
        }

        if($_POST['action'] === 'edit'){
            unset($_POST['action']);
             Action::UpdateDate('cateogry', $_POST );
            header("Location: ../View/index_CP.php?page=Cateogry");
            exit();
        }
    }

?>