<?php 
include 'DB.php';

if(isset($_GET)){
    
    if(isset($_GET['userId'] ,$_GET['tableId'])){
       Action::DeleteDateTow('tablesdata' , ' Table_id = '.$_GET['tableId'] .' and  user_id =' .$_GET['userId']. ' ' );
       header("Location: ../View/index_CP.php?page=Tablefilled");
       exit();
    }
} 

if(isset($_POST['action'])) {

    if($_POST['action'] === 'save'){
        unset($_POST['action']);

        Action::test($_POST);
        // $data = array();
        
        $data['name'] = $_POST['name'];
        $data['Cateogry_Id'] = $_POST['Cateogry_Id'];
        $data['rowCount'] = $_POST['rowCount'];

        Action::InsertData('tables' , $data);
        
        unset($_POST['name']);
        unset($_POST['Cateogry_Id']);
        unset($_POST['columnCount']);
        unset($_POST['rowCount']);
       
        $LastId =  Action::RetrieveData("tables","Max(Id)");

        $dataCloumn = array();
        foreach ($_POST as  $value) {
            $dataCloumn["columnName"] = $value ;
            $dataCloumn["Table_Id"] = $LastId[0]["Max(Id)"];

            Action::InsertData('columntable' , $dataCloumn);
            unset($dataCloumn);
        }
        header("Location: ../View/index_CP.php?page=Add&step=desgin&tableId=".$LastId[0]["Max(Id)"]."");
        exit();
    }

    if( $_POST['action'] === 'savedesgen'){
        unset($_POST['action']);
        
        $LastId =  Action::RetrieveData("tables","Max(Id)");
         Action::InsertData('tablestyle' , $_POST);
        header("Location: ../View/index_CP.php?page=Add&step=back&tableId=".$LastId[0]["Max(Id)"]."");
        exit();
    }
    
    if( $_POST['action'] === 'saveback'){
        $LastId =  Action::RetrieveData("tables","Max(Id)");
        unset($_POST['action']);
        $_POST['Id'] = $_POST['table_id'];
        unset($_POST['table_id']);
         Action::UpdateDate("tables" ,$_POST);
        header("Location: ../View/index_CP.php?page=Add&step=view&tableId=".$LastId[0]["Max(Id)"]."");
        exit();
    }

    if( $_POST['action'] === 'delete'){
        unset($_POST['action']);
         Action::DeleteDate("tables" ,$_POST["Id"]);
        header("Location: ../View/index_CP.php?page=tables");
        exit();
    }

    if( $_POST['action'] === 'dataTable'){
        if(isset($_POST['datatable'])) {
            header("Location: ../View/index_CP.php?page=filldataTable&Id=" . $_POST['datatable']);
            exit();

        } else {
            header("Location: ../View/index_CP.php?page=dataTable");
            exit();
        }
    }

    if( $_POST['action'] === 'fillDataTable'){
     
        unset($_POST['action']);
        
       
        $userId = $_POST['user_id'];
        $tableId = $_POST['Table_id'];
        unset($_POST['user_id']);
        unset($_POST['Table_id']);

        $data = array();
        foreach ($_POST as $key => $value) {
           
            $Id = explode('-' ,$key);
           
            
            $data['Table_id']  =  $tableId ;
            $data['user_id']  =  $userId;
            $data['Row_id'] =  $Id[0] ; 
            $data['column_id']   =  $Id[1] ;
            $data['value']    =   $value ;
            Action::InsertData('tablesdata' , $data);
        }
        header("Location: ../View/index_CP.php?page=Tablefilled" );
        exit();
    }
}

?>