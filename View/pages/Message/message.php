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
                <h2 class="content-header-title">الرسايل </h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">الصفحة الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">الرسايل </a>
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
                            <h4 class="card-title">الرسايل</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                              
                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>الرقم </th>
                                        <th>المقترح</th>
                                        <th>وقت  الرساله</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                    <?php foreach( Action::RetrieveData('message') as $user ){ ?>

                                        <th><?php echo $user['Id'] ?></th>
                                        <th><?php echo $user['message_text'] ?></th>
                                        
                                        <th><?php echo $user['createTime'] ?></th>
                                       

                                        <?php $ModelEditId = "Edit_". $user['Id']  ;  ?>
                                        <?php  $ModeldeleteId = "delete". $user['Id']  ;  ?>

                                        <th>
                                            <button type="button"  data-toggle='modal' data-target='#<?php echo $ModeldeleteId ;?>'  class="btn mr-1  btn-outline-danger btn-sm">حذف</button>
                                        </th>
                                    </tr> 

                                    <!-- Statr update Model -->
                                    <!-- id="" -->
                                                   
                                    <!-- Model to Add  -->
                                    <div class="modal fade text-xs-left" id="<?php echo $ModelEditId ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                        </button>
                                                                        <h4 class="modal-title" id="myModalLabel19" class="form-section">
                                                                        تعديل تصنيف</h4>
                                                                    </div>
                                                                    
                                                                    
                                                                    <div class="modal-body">
                                                                    <!-- action="../Model/Cateogry.php" -->
                                                                        <form class="form" action="../Model/User.php" method='post' > 
                                                                            <div class="form-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="showCar"> الاسم</label>
                                                                                            <input type="hidden" value="<?php  echo $user['Id']  ?>" name="Id">
                                                                                            <input type="text" id="CateogryName" value="<?php  echo $user['username']  ?>" class="form-control" placeholder="نوع التصنيف" name="username">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="showCar"> الايميل</label>
                                                                                            <input type="hidden" value="<?php  echo $user['Id']  ?>" name="Id">
                                                                                            <input type="text" id="CateogryName" value="<?php  echo $user['email']  ?>" class="form-control" placeholder="نوع التصنيف" name="email">
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
                                                    <div style="height: 200px;" class="modal-dialog" role="document">
                                                        <div style="height: 150px;" class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel19" class="form-section">
                                                            
                                                                </h4>
                                                            </div>
                                                            
                                                            
                                                            <div class="modal-body">
                                                            <h3>   هل انت متاكد من الحذف  </h3>
                                                            <!-- action="../Model/Cateogry.php" -->
                                                                <form class="form" action="../Model/Message.php" method='post' > 
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
                                    <?php   } ?>
                                    
                                    
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
                                    اضافة المدير </h4>
                                </div>
                                
                                 
                                <div class="modal-body">
                                <!-- action="../Model/Cateogry.php" -->
                                    <form class="form" action="../Model/User.php" method='post'enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="showCar">اسم المدير</label>
                                                        <input type="text" id="CateogryName" class="form-control" placeholder="اسم المدير" name="username">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="showCar">الباسورد</label>
                                                        <input type="text" id="CateogryName" class="form-control" placeholder="الباسورد" name="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="showCar">الايميل</label>
                                                        <input type="text" id="CateogryName" class="form-control" placeholder="الايميل" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput5">صلاحيات</label>
                                                        <select id="projectinput5" name="privlge_Id" class="form-control">
                                                            <option value="0" selected="" disabled="">صلاحيات</option>
                                                            <?php  foreach(Action::RetrieveData('privlge')as $privlge ){ ?>

                                                                <option value="<?php echo $privlge['Id'] ?>"><?php echo $privlge['Name'] ?></option>
                                                            <?php } ?>  
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="showCar">صوره المستخدم</label>
                                                        <input type="file" id="CateogryName" class="form-control" name="image">
                                                    </div>
                                                </div>
                                            </div>

                                          

                                            <div class="form-actions">
                                                <button  type="button"  data-dismiss="modal" class="btn btn-  float-lg-right">
                                                    <i class="icon-cross2"></i> الغاء
                                                </button>
                                                <button type='submit' name="action" value='addingAdmin' id="SaveCate" class="btn btn-primary mr-1 float-lg-right">
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

