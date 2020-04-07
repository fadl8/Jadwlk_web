<?php 

    if(!isset($_GET['Id'])){
        header("Location: index.php?page=tables");
    }

    $tableInfo = Action::RetrieveData('tables','*' , ' Id = ' . $_GET['Id'] ) ;
    $tableInfo = $tableInfo[0];
    // get the cloumn of table 
    $tableColumn  = Action::RetrieveData('columntable', '*' ,' Table_Id = ' . $_GET['Id'] ) ;
 
?>


<div class="card-block">
    <form action="../Model/tablesEdit.php" method='post' class="form">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="projectinput1">اسم الجدول</label>
                    <input type="text" id="projectinput1" class="form-control" value="<?php echo $tableInfo['name']; ?>"   name="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="issueinput5">التصنيف</label>
                    <select id="issueinput5" name="Cateogry_Id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">
                        <option></option>
                        <?php  foreach( Action::RetrieveData('cateogry') as $cateogry ){ ?>
                        <?php echo '<option value="'. $cateogry["Id"].'">' . $cateogry["name"].'</option>'; ?>
                        <?php } ?>
                    </select>
                    <input type="hidden"   class="form-control" value="<?php echo $tableInfo['Id']; ?>"  name="Id">
                    <input type="hidden" id="EditrowCountinput" class="form-control" value="<?php echo $tableInfo['rowCount']; ?>"  name="rowCount">
                    <input type="hidden" id="EditcolumnCountinput" class="form-control" value="<?php echo count($tableColumn);?>" name="columnCount">
                </div>
                
            </div>
        </div>
            <div class="row">
                <div class="col-12">
                    <button type="button" id="Editaddrow" class="btn btn-info">اضافه صف</button>
                    <button type="button" id="Editaddcolumn" class="btn btn-info">اضافه عمود</button>
                    <button type="button" id="Editdeleterow" class="btn btn-denger"> حذف صف</button>
                    <button type="button" id="Editdeletecolumn" class="btn btn-denger"> حذف عمود</button>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-8">
                    <table id="table" width="100%"   cellpadding="0" cellspacing="0" class="tabelcontrol table-striped" id="tb">
                        <thead id="theads">
                            <tr>
                                <?php 
                                    for ($i=0; $i < count($tableColumn) ; $i++) { 
                                       echo '<th class="th"><input type="text" value="'.$tableColumn[$i]['columnName'].'" placeholder="ادخل اسم العمود" style="width:100%;" name="1-column_'.$tableColumn[$i]['Id'].'" ></th>'; 
                                    }
                                ?>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <?php 
                            for ($i=1; $i <= $tableInfo['rowCount'] ; $i++) {
                                    echo "<tr>" ;
                                         for ($s=0; $s < count($tableColumn) ; $s++) {
                                             echo "<td> المحتوى </td>";
                                         }
                                    echo "</tr>";
                                 }
                                 ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>

        <div class="form-actions">
            <button name="action" value="EditTable" type="submit" class="btn btn-primary">
                التالي <i class="icon-check2"></i> 
            </button>
        </div>
    </form>
</div>