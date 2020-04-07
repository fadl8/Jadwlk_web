<?php 
include 'DB.php';

if(isset($_POST['action'])) {
    
    $data = $datas= array();
    if ($_POST['action'] == 'EditTable') {

        Action::test($_POST);

        $data["Id"] = $_POST["Id"];
        $data["name"] = $_POST["name"];
        $data["rowCount"] = $_POST["rowCount"];
        $data["Cateogry_Id"] = $_POST["Cateogry_Id"]; 

        Action::UpdateDate('tables' , $data);
        
        $table_ID = $_POST['Id'];

        unset($_POST['Id']);
        unset($_POST['name']);
        unset($_POST['Cateogry_Id']);
        unset($_POST['rowCount']);
        unset($_POST['action']);
        unset($_POST['columnCount']);
        
        
        
        foreach ($_POST as $key => $value) {
            
            $Id = explode('-' ,$key);
            $datas['Table_Id'] = $table_ID;
            $datas['columnName'] =  $value;
            $datas['Id'] = $Id[1];
            
            if($Id[0] ==  "0"){
            unset($datas['Id']);
            Action::InsertData('columntable' , $datas);
            
        }else {
         
            $ExtracId = explode('_' ,$datas['Id']);
            $datas['Id'] = $ExtracId[1];
            Action::UpdateDate('columntable' , $datas);
           }
        }
        header("Location: ../View/index_CP.php?page=EditTable&step=desgin&tableId=". $table_ID."");
        exit();

    }


    if ($_POST['action'] == 'Editdesgen') { 
        unset($_POST['action']);
        Action::UpdateDate('tablestyle' , $_POST);
        header("Location: ../View/index_CP.php?page=EditTable&step=back&tableId=".$_POST['table_id']."&i=0");
        exit();

    }

    if ($_POST['action'] == 'Editback') { 
        unset($_POST['action']);
        $_POST['Id'] = $_POST['table_id'];
        unset($_POST['table_id']);
        Action::UpdateDate('tables' , $_POST);
        header("Location: ../View/index_CP.php?page=Add&step=view&tableId=".$_POST['Id']."");
        exit();
    }
}

?>