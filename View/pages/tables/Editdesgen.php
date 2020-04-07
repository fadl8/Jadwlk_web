
<?php 
	if(!isset($_GET['tableId'])){
		header("Location: index.php?page=tables");
	}
	 $tableStyle = Action::RetrieveData('tablestyle','*' , ' table_id = ' . $_GET['tableId'] ) ;
?>


<div class="card-block">									
<form action="../Model/tablesEdit.php" method="post"  class="form">
							<input type="hidden" value="<?php  echo $tableStyle[0]["Id"]?>" name="Id">
							<input type="hidden" value="<?php  echo $tableStyle[0]["table_id"]?>" name="table_id">
							<div class="form-body">
								<h4 class="form-section">تصميم الجدول</h4>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="projectinput1">حجم الخط</label>
											<input type="text" value="<?php echo $tableStyle[0]['main_FontSize'] ; ?>" id="projectinput1" class="form-control"  name="main_FontSize">
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="form-group">
											<label for="issueinput5">توع الخط</label>
											<select id="issueinput5" name="main_font_family" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">
											
												<option value="<?php echo $tableStyle[0]['main_font_family'] ; ?>"><?php echo $tableStyle[0]['main_font_family'] ; ?></option>
												<option value="Arial">Arial</option>
												<option value="Cambria">Cambria</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="issueinput5">اشكال جاهزه</label>
											<select id="issueinput5" name="cellstyle" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">
												<option value="<?php echo $tableStyle[0]['cellstyle'] ; ?>"><?php echo $tableStyle[0]['cellstyle'] ; ?></option>
												<option value="squer">مربع</option>
												<option value="rectangl">مثلث</option>
												<option value="circle">دائره</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="projectinput2">حجم الاطار</label>
											<input type="text" value="<?php echo $tableStyle[0]['main_mrgen'] ; ?>" id="projectinput2" class="form-control"  name="main_mrgen">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
                                    <div class="form-group">
											<label>التاثير</label>
											 <?php 
												$chick = $unchick = '';
											 if($tableStyle[0]['main_affect'] == 1){
														 $chick = 'checked=""';
														}else {
														 $unchick = 'checked=""';
														}
														 
												?>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input type="radio" <?php echo $chick ?> value="1" name="main_affect" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">يوجد</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input type="radio" <?php echo $unchick ?>  name="main_affect" value="0"  class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">لا يوجد</span>
												</label>
											</div>
										</div>
									</div>
								 
									<div class="col-md-4">
                                    <div class="form-group">
											<label>البوردر</label>
											<?php 
												$border = $unborder = '';
											 if($tableStyle[0]['main_affect'] == 1){
													$border = 'checked=""';
												}else {
													$unborder = 'checked=""';
												}
														 
												?>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input <?php echo $border ?> type="radio" value="1" name="main_border" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">يوجد</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input <?php echo $unborder ?> type="radio" value="0" name="main_border" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">لا يوجد</span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-md-4">
                                    <div class="form-group">
											<label>الوان الصفوف</label>
											<?php 
												$have = $unhave = '';
											 if($tableStyle[0]['main_affect'] == 1){
												$have = 'checked=""';
												}else {
													$unhave= 'checked=""';
												}
														 
												?>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input <?php echo $have ?>  type="radio" value="1" name="main_row_color" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">يوجد</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input <?php echo $unhave ?>  type="radio" value="0"  name="main_row_color"   class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">لا يوجد</span>
												</label>
											</div>
										</div>
									</div>
								</div>

								<h4 class="form-section">العمود</h4>


                                <div class="row">
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون الخلفية</label>
                                            <input type="color"  value="<?php echo $tableStyle[0]['column_backgroung_Color'] ;?>"  id="companyName" class="form-control" name="column_backgroung_Color">
                                        </div>
									</div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون الخط</label>
                                            <input type="color" value="<?php echo $tableStyle[0]['column_font_Color'] ;?>" id="companyName" class="form-control"  name="column_font_Color">
                                        </div>
									</div>
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون الشكل الجاهز</label>
                                            <input type="color" value="#FFFFFF" id="companyName" value="<?php echo $tableStyle[0]['ReadySheepCloumn'] ;?>" class="form-control"  name="ReadySheepCloumn">
                                        </div>
									</div>
							 
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون االبوردر</label>
                                            <input type="color" value="<?php echo $tableStyle[0]['column_border_Color'] ;?>" id="companyName" class="form-control" name="column_border_Color">
                                        </div>
									</div>
                                    
								</div>

                                <h4 class="form-section">الصف</h4>


                                <div class="row">
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون الخلفية</label>
                                            <input type="color"  value="<?php echo $tableStyle[0]['row_background_Color'] ;?>"  id="companyName" class="form-control"  name="row_background_Color">
                                        </div>
									</div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون الخط</label>
                                            <input type="color"  value="<?php echo $tableStyle[0]['row_font_Color'] ;?>" id="companyName" class="form-control"  name="row_font_Color">
                                        </div>
									</div>
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون الشكل الجاهز</label>
                                            <input type="color"  value="<?php echo $tableStyle[0]['ReadySheepRow'] ;?>"  id="companyName" class="form-control"  name="ReadySheepRow">
                                        </div>
									</div>
								 
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون االبوردر</label>
                                            <input type="color"  value="<?php echo $tableStyle[0]['row_border_Color'] ;?>" id="companyName" class="form-control"  name="row_border_Color">
                                        </div>
									</div>
                                   
								</div>
							</div>

							<div class="form-actions">
								 
								<button name="action" value="Editdesgen"  type="submit" class="btn btn-primary">
									  التالي
								</button>
							</div>
						</form>
</div>