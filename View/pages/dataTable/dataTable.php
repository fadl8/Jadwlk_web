<?php 
  if(isset($_GET['Id'])){

    $ImgeTable=$RowSheepstyle = $CloumnSheepstyle ='';
    $tableInfo = $tableColumn = $tableStyle = array();
    // get the table by the id 
    $tableInfo = Action::RetrieveData('tables','*' , ' Id = ' . $_GET['Id'] ) ;
    
    if(isset($tableInfo[0])){
        $tableInfo = $tableInfo[0] ; 
    }else {
        echo '<script>alert("انشاء جدول قبل العرض")</script>';
    }
    
     
    $tableImage = Action::RetrieveData('backgroundimage','*' , ' Id = ' . $tableInfo["background_Id"]  ) ;

    // get the cloumn of table 
    $tableColumn  = Action::RetrieveData('columntable', '*' ,' Table_Id = ' . $_GET['Id'] ) ;
    
    // get the style of the table 

    $tableStyle = Action::RetrieveData('tablestyle','*' , ' table_id = ' . $_GET['Id'] ) ;
    
    
    $tableStyle = $tableStyle[0];

    $styleTable ="" ;


    if($tableInfo['background_Id'] !=='-1'){
        $tableImage = Action::RetrieveData('backgroundimage','*' , ' Id = ' . $tableInfo["background_Id"]  ) ;
    }

   
    $stylecolumn = "";  

                   
                   $styleRow = "";
                   
            
            if(is_string($ImgeTable) && isset($tableImage[0]['path'])){
                $styleTable .= "";
            }else {
                $stylecolumn .= "" ;
                $styleRow .="" ;
                $RowSheepstyle = "";
                $CloumnSheepstyle = "";
            }

  } else {
      header("Location:index.php?page=tables");
  }
?>


<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">جدول</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">الصفحة الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">الجداول </a>
                    </li>
                </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->

      



<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">جدول</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                         
                        <thead>
                            <tr>
                                <th>#</th>
                                 <?php 
                                    for ($i=0; $i < count($tableColumn) ; $i++) { 
                                        echo "<th> " . $tableColumn[$i]['columnName']   . "</th>";
                                    }
                                
                                  ?>
                            </tr>
                        </thead>
                        <tbody>
                        <form class="form" action="../Model/tables.php" method="post" > 
                            <input type="hidden" name='Table_id' value="<?php echo $_GET['Id'] ?>" />
                            <input type="hidden" name='user_id' value="<?php echo $_SESSION['UserLogin'][0]["Id"] ?>" />
                            <?php 
                                
                                for ($i=1; $i <= $tableInfo['rowCount'] ; $i++) {

                                   echo "<tr style='border-width: 8px;'>
                                        <td class='" . $tableStyle["cellstyle"]. "'>$i</td>" ;
                                        for ($s=1; $s <= count($tableColumn) ; $s++) {
                                            echo "  <td style='".$styleRow."'> 
                                                        <div class='".$tableStyle["cellstyle"]."'>  
                                                            <input class='form-control border-primary' type='text' name='$i-$s'/></span> 
                                                        </div>
                                                    </td>";
                                        }
                                   echo "</tr>";

                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="form-actions">
                <button name="action" value="fillDataTable"  type="submit" class="btn btn-primary">
									  التالي
								</button>
                        </form>
        </div>
               


            </div>
        </div>
    </div>
</div>
        </div>
      </div>
    </div>




























