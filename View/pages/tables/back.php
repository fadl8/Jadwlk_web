

<div class="card-block">
<form  action="../Model/tables.php" method="post"  class="form">
<input type="hidden" value="<?php  if(isset($_GET["tableId"])) { echo $_GET["tableId"]; }?>" name="table_id">

    <div class="form-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="issueinput5">اختار خلفية الجدول</label>
                <select id="ChangImage" name="background_Id" class="form-control" title="">
                    <option value="-1">لا توجد</option>
                    <?php  foreach( Action::RetrieveData('backgroundimage') as $back ){ ?>
                    <?php echo '<option data-path="'.$back["path"].'" value="'.$back["Id"].'">'.$back["name"].'</option>'; ?>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <img id="Putimage" src="app-assets/images/8.jpg" alt="image here" style="height: 260px;width: 415px;">
        </div>
    </div>
    </div>
    <div class="form-actions">
        <button type="submit" name="action" value="saveback" class="btn btn-primary">
            التالي <i class="icon-check2"></i> 
        </button>
    </div>
</form>

</div>