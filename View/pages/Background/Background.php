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
                <h2 class="content-header-title">خلفيات الجدول</h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">الصفحة الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">خلفيات الجدول</a>
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
                            <h4 class="card-title">خلفيات الجدول</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><button type="button" class="btn mr-1  btn-outline-primary btn-sm" data-toggle='modal' data-target='#add'>اضافه جديد</button>  </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>الرقم</th>
                                        <th>اسم الخلفيه</th>
                                       
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <?php foreach(Action::RetrieveData('backgroundimage')as $attribute ){ ?>

                                        <th><?php echo $attribute['Id'] ?></th>
                                        <th><?php echo $attribute['name'] ?></th>
                                       

                                        <?php $ModelEditId = "Edit_". $attribute['Id']  ;  ?>
                                        <?php $ModeldeleteId = "delete". $attribute['Id']  ;  ?>

                                        <th>
                                            <button type="button" data-toggle='modal' data-target='#<?php echo $ModelEditId ;?>' class="btn mr-1  btn-outline-primary btn-sm">عرض الخلفيه</button>
                                            <button type="button"  data-toggle='modal' data-target='#<?php echo $ModeldeleteId ;?>'  class="btn mr-1  btn-outline-danger btn-sm">حذف</button>
                                        </th>
                                    </tr>

                                    <!-- Statr update Model -->
                                    <!-- id="" -->
                                                   
                                    <!-- Model to Add  -->
                                    <div class="modal fade text-xs-left" id="<?php echo $ModelEditId ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
                                                            <div style="height: 600px;" class="modal-dialog" role="document">
                                                                <div style="height: 600px;" class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type1="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                        </button>
                                                                        <h4 class="modal-title" id="myModalLabel19" class="form-section">
                                                                        الخلفيه</h4>
                                                                    </div>
                                                                    
                                                                    
                                                                    <div class="modal-body">
                                                                    <!-- action="../Model/Cateogry.php" -->
                                                                        <img src="../Model/upload/<?php  echo $attribute['path'] ?>" alt="image here" style="height: 500px;width: 566px;" />
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                </div> 
                                            </div>


                                    <!-- End Model to Add  -->                                                                                

                                    <!-- Model to delete  -->
                                            <div class="modal fade text-xs-left" id="<?php echo $ModeldeleteId ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
                                                    <div style="height: 150px;" class="modal-dialog" role="document">
                                                        <div style="height: 150px;" class="modal-content">
                                                            <div  class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel19" class="form-section">
                                                            
                                                                </h4>
                                                            </div>
                                                            
                                                            
                                                            <div class="modal-body">
                                                            <h3>   هل انت متاكد من حذف  " <?php echo $attribute['name'] ?> " </h3>
                                                            <!-- action="../Model/Cateogry.php" -->
                                                                <form class="form" action="../Model/Background.php" method='post' > 
                                                                    <div class="form-body">
                                                                        <div class="form-actions">
                                                                        <input type="hidden"  value="<?php echo $attribute['Id'] ; ?>" name="Id">
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

<!-- Model to Add  -->
<div class="modal fade text-xs-left" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel19" class="form-section">
                                    اضافة خاصيه</h4>
                                </div>
                                
                                 
                                <div class="modal-body">
                                <!-- action="../Model/Cateogry.php" -->
                                    <form class="form" action="../Model/Background.php" method='post'  enctype="multipart/form-data"> 
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="showCar">اسم الخلفيه</label>
                                                        <input type="text" id="CateogryName" class="form-control" required  name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Select File</label>
                                                        <label id="projectinput7" class="file center-block">
                                                            <input name="backgroundImage" type="file" id="file">
                                                            <span class="file-custom"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                          

                                            <div class="form-actions">
                                                <button  type="button"  data-dismiss="modal" class="btn btn-  float-lg-right">
                                                    <i class="icon-cross2"></i> الغاء
                                                </button>
                                                <button type='submit' name="action" value='save' id="SaveCate" class="btn btn-primary mr-1 float-lg-right">
                                                    <i class="icon-check2"></i> حفظ
                                                </button>
                                            </div>
                                    </form>

                                </div>
                                
                            </div>
                        </div>
            </div> 
        </div>


<!-- End Model to Add  --> 



