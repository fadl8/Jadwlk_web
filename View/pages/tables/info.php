
<div class="card-block">
    <form action="../Model/tables.php" method='post' class="form">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="projectinput1">اسم الجدول</label>
                    <input type="text" id="projectinput1" class="form-control"   name="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="issueinput5">التصنيف</label>
                    <select id="issueinput5" name="Cateogry_Id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">
                        <?php  foreach( Action::RetrieveData('cateogry') as $cateogry ){ ?>
                        <?php echo '<option value="'.$cateogry["Id"].'">'.$cateogry["name"].'</option>'; ?>
                        <?php } ?>
                    </select>
                    <input type="hidden" id="rowCountinput" class="form-control"   name="rowCount">
                    <input type="hidden" id="columnCountinput" class="form-control" name="columnCount">
                </div>
                
            </div>
        </div>
            <div class="row">
                <div class="col-12">
                    <button type="button" id="addrow" class="btn btn-info">اضافه صف</button>
                    <button type="button" id="addcolumn" class="btn btn-info">اضافه عمود</button>
                    <button type="button" id="deleterow" class="btn btn-denger"> حذف صف</button>
                    <button type="button" id="deletecolumn" class="btn btn-denger"> حذف عمود</button>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-8">
                    <table id="table" width="100%" border="1" cellpadding="0" cellspacing="0" class="tabelcontrol table-striped" id="tb">
                        <thead id="theads">
                            <tr>
                                <th class="th"><input type="text" placeholder="ادخل اسم العمود" style="width:100%;" name="column1" ></th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <tr>
                                <td >المحتوي</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
                
                    

        <div class="form-actions">
            <button name="action" value="save" type="submit" class="btn btn-primary">
                التالي <i class="icon-check2"></i> 
            </button>
        </div>
    </form>
</div>