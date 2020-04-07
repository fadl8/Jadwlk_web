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
        <div class="content-body"><!-- Basic Tables start -->
            <!-- Hoverable rows start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">التصنيفات</h4>
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
                                        <th>التصنيف  </th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                    <?php  foreach(  Action::RetrieveData('cateogry')as $Cateogry ){ ?>

                                        <th><?php echo $Cateogry['Id'] ?></th>
                                        <th><?php echo $Cateogry['name'] ?></th>
                                        <?php $ModelEditId = "Edit_". $Cateogry['Id']  ;  ?>
                                        <?php $ModeldeleteId = "delete". $Cateogry['Id']  ;  ?>

                                        <th>
                                            <button type="button" data-toggle='modal' data-target='#<?php echo $ModelEditId ;?>' class="btn mr-1  btn-outline-primary btn-sm">تعديل</button>
                                            <button type="button"  data-toggle='modal' data-target='#<?php echo $ModeldeleteId ;?>'  class="btn mr-1  btn-outline-danger btn-sm">حذف</button>
                                        </th>
                                    </tr>

                                    <!-- Statr update Model -->
                                    <!-- id="" -->

                                    <!-- Model to Add  -->
                                    <div class="modal fade text-xs-left" id="<?php echo $ModelEditId ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
                                                            <div style="height: 200px;" class="modal-dialog" role="document">
                                                                <div style="height: 200px;" class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                        </button>
                                                                        <h4 class="modal-title" id="myModalLabel19" class="form-section">
                                                                        تعديل تصنيف</h4>
                                                                    </div>


                                                                    <div class="modal-body">
                                                                    <!-- action="../Model/Cateogry.php" -->
                                                                        <form class="form" action="../Model/Cateogry.php" method='post' >
                                                                            <div class="form-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="showCar"> التصنيف </label>
                                                                                            <input type="hidden" value="<?php  echo $Cateogry['Id']  ?>" name="Id">
                                                                                            <input type="text" id="CateogryName" value="<?php  echo $Cateogry['name']  ?>" class="form-control" placeholder="التصنيف" name="name">
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="form-actions">
                                                                                    <button  type="button"  data-dismiss="modal" class="btn btn-  float-lg-right">
                                                                                        <i class="icon-cross2"></i> الغاء
                                                                                    </button>
                                                                                    <button type='submit' name="action" value='edit' id="SaveCate" class="btn btn-primary mr-1 float-lg-right">
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
                                                            <h3>   هل انت متاكد من حذف  " <?php echo $Cateogry['name'] ?> " </h3>
                                                            <!-- action="../Model/Cateogry.php" -->
                                                                <form class="form" action="../Model/Cateogry.php" method='post' >
                                                                    <div class="form-body">
                                                                        <div class="form-actions">
                                                                        <input type="hidden"  value="<?php echo $Cateogry['Id'] ; ?>" name="Id">
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
                                    اضافة تصنيف</h4>
                                </div>


                                <div class="modal-body">
                                <!-- action="../Model/Cateogry.php" -->
                                    <form class="form" action="../Model/Cateogry.php" method='post' >
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="showCar"> التصنيف </label>
                                                        <input type="text" id="CateogryName" class="form-control" placeholder=" التصنيف " name="name">
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
