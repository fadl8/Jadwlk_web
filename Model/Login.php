<?php
          
    session_start();
    include 'DB.php';
    $action = '';
    
    function CkickEmplty($data){
        foreach ($data as $key => $value) {
            if(empty($value)){
               return false ;
            }  
        }
        return true;
    }
    if(isset($_POST['action'])) {
        if($_POST['action'] === 'login'){
            $action = $_POST['action'];
            unset($_POST['action']);
            $user =  Action::RetrieveData('user' ,'*', ' email = "' . $_POST['email'] . '"' ) ;
            if(isset($user[0])){
                if( $_POST['password'] == $user[0]["password"] ) {
                    $_SESSION['UserLogin'] = $user;
                    header("Location: ../View/index_CP.php");
                    exit();

                }else {
                    header("Location: ../View/login.php?error=nopass");
                     exit();
                }
            }else {
                header("Location: ../View/login.php?error=nouser");
                exit();
            }
             $_POST['action']= $action ;
        }
        if($_POST['action'] === 'createNew'){
            // page name =>  Singup.php
            // ckick if the input not null 
           
               if(CkickEmplty($_POST) ){

                   // ckick if the password is equl 
                    if($_POST["password"] === $_POST["Repassword"]){

                        unset($_POST['action']);
                        unset($_POST['Repassword']);

                        $_POST['type'] = 0;
                        Action::test($_POST);
                        echo Action::InsertData('user',$_POST);
                       if(Action::InsertData('user',$_POST) == true){
                           header("Location: ../View/login.php");
                            exit();
                        }else {
                            header("Location: ../View/Singup.php?error=3");
                            exit();
                        }
                    }else {
                        header("Location: ../View/Singup.php?error=2");
                        exit();
                    }
               }else {
                   // go to the page with error 
                   header("Location: ../View/Singup.php?error=1");
                   exit();
               }
        }
    }
?>