
<div class="card-block">
<form action="../Model/tables.php" method="post"  class="form">
							<input type="hidden" value="<?php  if(isset($_GET["tableId"])) { echo $_GET["tableId"]; }?>" name="table_id">
							<div class="form-body">
								<h4 class="form-section">تصميم الجدول</h4>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="projectinput1">حجم الخط</label>
											<input type="text" id="projectinput1" class="form-control"  name="main_FontSize">
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="form-group">
											<label for="issueinput5">توع الخط</label>
											<select id="issueinput5" name="main_font_family" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">
												<option value="Arial">Arial</option>
												<option value="Cambria">Cambria</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="issueinput5">اشكال جاهزه</label>
											<select id="issueinput5" name="cellstyle" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">
												<option value="normal">افتراضي</option>
												<option value="square">مربع</option>
												<option value="triangle">مثلث</option>
												<option value="egg">بيضاوي</option>
												<option value="parallelogram">متوازي</option>
												<option value="circle">دائره</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="projectinput2">حجم الاطار</label>
											<input type="text" id="projectinput2" class="form-control"  name="main_mrgen">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
                                    <div class="form-group">
											<label>التاثير</label>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input value="1" type="radio" name="main_affect" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">يوجد</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input value="0" type="radio" name="main_affect" checked="" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">لا يوجد</span>
												</label>
											</div>
										</div>
									</div>
								 
									<div class="col-md-4">
                                    <div class="form-group">
											<label>البوردر</label>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input value="1" type="radio" name="main_border" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">يوجد</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input value="0" type="radio" name="main_border" checked="" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">لا يوجد</span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-md-4">
                                    <div class="form-group">
											<label>الوان الصفوف</label>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input value="1" type="radio" name="main_row_color" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">يوجد</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input value="0" type="radio" name="main_row_color" checked="" class="custom-control-input">
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
                                            <input type="color" value="#FFFFFF" id="companyName" class="form-control" name="column_backgroung_Color">
                                        </div>
									</div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون الخط</label>
                                            <input type="color" value="#000000" id="companyName" class="form-control"  name="column_font_Color">
                                        </div>
									</div>
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون الشكل الجاهز</label>
                                            <input type="color" value="#FFFFFF" id="companyName" class="form-control"  name="ReadySheepCloumn">
                                        </div>
									</div>
							 
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون االبوردر</label>
                                            <input type="color" value="#FFFFFF" id="companyName" class="form-control" name="column_border_Color">
                                        </div>
									</div>
                                    
								</div>

                                <h4 class="form-section">الصف</h4>


                                <div class="row">
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون الخلفية</label>
                                            <input type="color" value="#FFFFFF" id="companyName" class="form-control"  name="row_background_Color">
                                        </div>
									</div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون الخط</label>
                                            <input type="color"  value="#000000" id="companyName" class="form-control"  name="row_font_Color">
                                        </div>
									</div>
								    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون الشكل الجاهز</label>
                                            <input type="color" value="#FFFFFF" id="companyName" class="form-control"  name="ReadySheepRow">
                                        </div>
									</div>
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label for="companyName">لون االبوردر</label>
                                            <input type="color" value="#FFFFFF" id="companyName" class="form-control"  name="row_border_Color">
                                        </div>
									</div>
                                   
								</div>
							</div>

							<div class="form-actions">
								 
								<button name="action" value="savedesgen"  type="submit" class="btn btn-primary">
									  التالي
								</button>
							</div>
						</form>
</div>