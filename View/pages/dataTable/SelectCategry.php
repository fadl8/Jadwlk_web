

<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">التصنيفات</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">الصفحة الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">التصنيفات</a>
                            </li>
                    </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->

<section id="basic-form-layouts">
	<div class="row match-height">

		<div class="col-md-12">
			<div class="card" >
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">اختار التصنيف</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				 
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
							<div class="form-body">
								 <form action="?page=cateTable" method='post'>
								<div class="row">
									<div class="col-md-6">
                                        <div class="form-group">
                                                <label for="projectinput5"></label>
                                                <select id="projectinput5" name="datatable" class="form-control">
                                                    <option value="none" selected="" disabled="">اختار التصنيف</option>
                                                    <?php  foreach( Action::RetrieveData('cateogry') as $cateogry ){ ?>
                                                    <?php echo '<option value="'.$cateogry["Id"].'">'.$cateogry["name"].'</option>'; ?>
                                                    <?php } ?>
                                                </select>
										</div>
                                    </div>
								</div>
							</div>
							<div class="form-actions">
								<button value="dataTable" name="action" type="submit" class="btn btn-primary">
									<i class="icon-check2"></i> انتقال
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	 
	</div>	 
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>