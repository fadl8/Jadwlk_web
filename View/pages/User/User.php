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
                <h2 class="content-header-title">مستخدمين الموقع</h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">الصفحة الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">المستخدمين </a>
                        </li>
                       
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->
            <!-- Hoverable rows start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">المستخدمين </h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                               
                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>الرقم</th>
                                        <th>اسم المستخدم</th>
                                        <th> الايميل</th>
                                        <th> تاريخ الانشاء </th>
                                       
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <?php  foreach( Action::RetrieveData('user') as $user ){ ?>

                                        <th><?php echo $user['Id'] ?></th>
                                        <th><?php echo $user['name'] ?></th>
                                        <th><?php echo $user['email'] ?></th>
                                        <th><?php echo $user['createDate'] ?></th>
                                       

                                        <?php $ModelEditId = "Edit_". $user['Id']  ;  ?>
                                        <?php $ModeldeleteId = "delete". $user['Id']  ;  ?>

                                        <th>
                                            <button type="button"  data-toggle='modal' data-target='#<?php echo $ModeldeleteId ;?>'  class="btn mr-1  btn-outline-danger btn-sm">حذف</button>
                                        </th>
                                    </tr>

                                    <!-- Statr update Model -->
                                    <!-- id="" -->
                                                                                                                

                                    <!-- Model to delete  -->
                                            <div class="modal fade text-xs-left" id="<?php echo $ModeldeleteId ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
                                                    <div style="height: 150px;" class="modal-dialog" role="document">
                                                        <div style="height: 150px;" class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel19" class="form-section">
                                                            
                                                                </h4>
                                                            </div>
                                                            
                                                            
                                                            <div class="modal-body">
                                                            <h3>   هل انت متاكد من حذف  " <?php echo $user['name'] ?> " </h3>
                                                            <!-- action="../Model/Cateogry.php" -->
                                                                <form class="form" action="../Model/User.php" method='post' > 
                                                                    <div class="form-body">
                                                                        <div class="form-actions">
                                                                        <input type="hidden"  value="<?php echo $user['Id'] ; ?>" name="Id">
                                                                            <button  type="button"  data-dismiss="modal" class="btn btn-  float-lg-right">
                                                                                <i class="icon-cross2"></i> الغاء
                                                                            </button>
                                                                            <button type='submit' name="action" value='delete' id="SaveCate" class="btn btn-primary mr-1 float-lg-right">
                                                                                <i class="icon-check2"></i> تاكيد   
                                                                            </button>
                                                                        </div>
                                                                </form>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            </div> 
                                            </div> 
                                        <!-- End Model to delete  --> 
                                    <?php } ?>
                                    
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hoverable rows end -->
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

