<?php
/**
 * Created by PhpStorm.
 * User: Mr.F_17
 * Date: 1/26/2019
 * Time: 10:55 AM
 */ 
?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">ارسال المتقرح</h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">الصفحة الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">المتقرح </a>
                        </li>
                       
                    </ol>
                </div>
            </div>
        </div>



        <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-12">
			<div class="card" style="height: 963px;">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">ارسال المتقرح</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					<div class="heading-elements">
					 
					</div>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form  action="../Model/Message.php" method='post'class="form">
							<div class="form-body">
								<div class="form-group">
									<label for="projectinput8">المقترح</label>
									<textarea id="projectinput8" rows="5" class="form-control" name="message_text" placeholder="المقترح"></textarea>
								</div>
							</div>

							<div class="form-actions">
								<button name="action" value="saveMessage" type="submit" class="btn btn-primary">
									<i class="icon-check2"></i> ارسال
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
<!-- ////////////////////////////////////////////////////////////////////////////-->

