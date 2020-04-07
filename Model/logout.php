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

    if($_POST['action'] === 'createNew'){
        // page name =>  Singup.php
        // ckick if the input not null 
       
           if(CkickEmplty($_POST) ){
               // ckick if the password is equl 
                if($_POST["password"] === $_POST["Repassword"]){
                    unset($_POST['action']);
                    unset($_POST['Repassword']);
                    $_POST['type'] = 0;
                   if(Action::InsertData('user',$_POST)){
                       header("Location: ../View/login.php");
                    }
                }else {
                    header("Location: ../View/Singup.php?error=2");
                }
           }else {
               // go to the page with error 
               header("Location: ../View/Singup.php?error=1");
           }
    }

}

session_unset();
session_destroy();
header("Location: ../View/login.php");
?>