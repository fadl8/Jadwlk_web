<?php 
  if(isset($_GET['tableId'])){

    $ImgeTable=$RowSheepstyle = $CloumnSheepstyle ='';
    $tableInfo = $tableColumn = $tableStyle = array();
    // get the table by the id 
    $tableInfo = Action::RetrieveData('tables','*' , ' Id = ' . $_GET['tableId'] ) ;
    
    if(isset($tableInfo[0])){
        $tableInfo = $tableInfo[0] ; 
    }else {
        echo '<script>alert("انشاء جدول قبل العرض")</script>';
    }
    
     
    $tableImage = Action::RetrieveData('backgroundimage','*' , ' Id = ' . $tableInfo["background_Id"]  ) ;

    // get the cloumn of table 
    $tableColumn  = Action::RetrieveData('columntable', '*' ,' Table_Id = ' . $_GET['tableId'] ) ;
    
    // get the style of the table 

    $tableStyle = Action::RetrieveData('tablestyle','*' , ' table_id = ' . $_GET['tableId'] ) ;
    
    
    $tableStyle = $tableStyle[0];

    $styleTable ="font-size: ".  $tableStyle["main_FontSize"]." ;" .
                 "font-family: ".  $tableStyle["main_font_family"]." ;" .
                 " border : ".  $tableStyle["main_border"]."px solid #000000 ;" ;


    if($tableInfo['background_Id'] !=='-1'){
        $tableImage = Action::RetrieveData('backgroundimage','*' , ' Id = ' . $tableInfo["background_Id"]  ) ;
    }

   
    $stylecolumn = "font-size: ".$tableStyle["main_FontSize"].
                   "; font-family: ".  $tableStyle["main_font_family"].
                   "; border: 1px solid ".$tableStyle["column_border_Color"].
                  
                   "; color: ".$tableStyle["column_font_Color"].";";  

                   
                   $styleRow = "font-size:".$tableStyle["main_FontSize"]."
                   ; font-family:".  $tableStyle["main_font_family"]."
                   ; border: 1px solid".$tableStyle["row_border_Color"]. 
                   "; color: ".$tableStyle["row_font_Color"].";";
                   
            
            if(is_string($ImgeTable) && isset($tableImage[0]['path'])){
                $styleTable .= "background-image: url('../Model/upload/".$tableImage[0]['path'] ."'); background-size: 100% 100%;";
            }else {
                $styleTable .="";
                $styleRow .="background-color: ".$tableStyle["row_background_Color"]." ;" ;
                $stylecolumn .= " background-color: ".$tableStyle["column_backgroung_Color"]." ;" ;
            }

        
        
        $RowSheepstyle = "background-color:".$tableStyle["ReadySheepRow"]."; border-bottom-color:".$tableStyle["ReadySheepRow"].";";
        $CloumnSheepstyle = "background-color:".$tableStyle["ReadySheepCloumn"]."; border-bottom-color:".$tableStyle["ReadySheepCloumn"].";";
          

  }
?>


<style>

        .circle {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            margin: auto;
            line-height: 80px;
            overflow-y: auto;
            white-space: nowrap;
        }
        .triangle {
            width: 0;
            height: 0;
            border-left: 75px solid transparent;
            border-right: 75px solid transparent;
            border-bottom: 125px solid red;
            white-space: nowrap;
            line-height: 120px;
            margin: auto;
            position: relative;
            background-color: unset !important;
        }
        .square {
            width: 100px;
            height: 100px;
            white-space: nowrap;
            overflow-y: auto;
            line-height: 100px;
            margin: auto;
        }
        .parallelogram {
            width: 150px;
            height: 100px;
            transform: skew(20deg);
            background: red;
            background-color: red;
            white-space: nowrap;
            overflow-y: auto;
            line-height: 100px;
            margin: auto;
        }
        .egg {
            display: block;
            width: 126px;
            height: 180px;
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            white-space: nowrap;
            overflow-y: auto;
            line-height: 180px;
            margin: auto;
        }
</style>

<div class="table-responsive">
                    <table style="<?php echo $styleTable ?>" class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <?php  echo "<th style='".$stylecolumn."'> 
                                            <div class='".$tableStyle["cellstyle"]."' style='".$CloumnSheepstyle."'>
                                                <p style='text-align:left;margin-right: 20px;'>#</p>
                                            </div>
                                        </th>";  ?> 
                            <?php  
                            for ($i=0; $i < count($tableColumn) ; $i++) {

                                echo "<th style='".$stylecolumn."'> 
                                            <div class='".$tableStyle["cellstyle"]."' style='".$CloumnSheepstyle."'>
                                                <p style='text-align:left'>" . $tableColumn[$i]['columnName'] . "</p>
                                            </div>
                                        </th>";
                            }
                            ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                for ($i=1; $i <= $tableInfo['rowCount'] ; $i++) {
                                    
                                   echo "<tr style='border-width: 8px;'>
                                                <td style='".$styleRow."'> 
                                                <div class='".$tableStyle["cellstyle"]."' style='".$RowSheepstyle."'> 
                                                    <p style='text-align:left;'>المحتوى</p> 
                                                </div>
                                            </td>
                                        
                                        " ;
                                        for ($s=0; $s < count($tableColumn) ; $s++) {
                                            echo "  <td style='".$styleRow."'> 
                                                        <div class='".$tableStyle["cellstyle"]."' style='".$RowSheepstyle."'> 
                                                            <p style='text-align:left;'>المحتوى</p> 
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
        <a href="?page=tables" class="btn btn-primary">
             انهاء <i class="icon-check2"></i> 
        </a>
        </div>