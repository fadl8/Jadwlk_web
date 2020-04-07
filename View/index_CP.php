<?php
    session_start();

    if(!isset($_SESSION["UserLogin"])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="rtl" class="loading">
<?php
  include "../Model/DB.php";
  include "pages/MainContant/head.php";
?>


  <body data-open="click" data-menu="vertical-menu" data-col="2-columns"
        class="vertical-layout vertical-menu 2-columns  fixed-navbar">

  <?php
    include 'pages/MainContant/topnav.php';

    if($_SESSION["UserLogin"][0]['type'] == 1){
        include 'pages/MainContant/sidebar.php';
    }else {
      include 'pages/MainContant/sidebarSub.php';
    }


    if(isset($_GET['page'])){

        switch ($_GET['page']) {
            case 'Cateogry':
                include 'pages/Cateogry/Cateogry.php';
            break;

            case 'Background':
              include 'pages/Background/Background.php';
            break;

            case 'users':
              include 'pages/User/User.php';
            break;

            case 'tables':
              include 'pages/tables/tables.php';
            break;

            case 'EditTable':
              include 'pages/tables/EditTable.php';
            break;

            case 'Add':
              include 'pages/tables/Add.php';
            break;

            case 'Viewpage':
              include 'pages/tables/Viewpage.php';
            break;

            case 'cateTable':
              include 'pages/dataTable/select.php';
            break;

            case 'Tablefilled':
              include 'pages/Tablefilled/Tablefilled.php';
            break;


            case 'UserViewTable':
              include 'pages/dataTable/UserViewTable.php';
            break;



            case 'DownloadTable':
              include 'pages/Tablefilled/DownloadTable.php';
            break;

            case 'dataTableFill':
              include 'pages/dataTable/dataTable.php';
            break;

            case 'message':
              include 'pages/Message/message.php';
            break;

            case 'users':
              include 'pages/User/User.php';
            break;

            case 'sendMessage':
              include 'pages/sendMessage/sendMessage.php';
            break;
            default:
                  if($_SESSION["UserLogin"][0]['type'] == 1){
                    include 'pages/MainContant/maincont.php';
                  }else {
                    include 'pages/dataTable/SelectCategry.php';
                  }
            break;
        }
    }else {
      if($_SESSION["UserLogin"][0]['type'] == 1){
        include 'pages/MainContant/maincont.php';
      }else {
        include 'pages/dataTable/SelectCategry.php';
      }
    }

    include 'pages/MainContant/footer.php';

  ?>
  </body>
</html>
