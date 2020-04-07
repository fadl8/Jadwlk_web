<?php
/**
 * Created by PhpStorm.
 * product: Mr.F_17
 * Date: 1/26/2019
 * Time: 10:55 AM
 */
  function getCateName($cate_ID){
        $cate_Name =  Action::RetrieveData('cateogry','*','Id = ' . $cate_ID );
       return $cate_Name[0]['name'];
  }

  $data = array();
  
  if(isset($_POST["datatable"])){
    $data  = Action::RetrieveData('tables','*','Cateogry_Id=' . $_POST["datatable"]);
  }
  
?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">الجداول</h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">الجداول </a>
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
                            <h4 class="card-title">الجداول</h4>
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
                                        <th>اسم الجدول </th>
                                        <th>التصنيف</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <?php foreach( $data as $table ){ ?>
                                        
                                        <th><?php echo $table['Id'] ?></th>
                                        <th><?php echo $table['name'] ?></th>
                                        <th><?php echo getCateName($table['Cateogry_Id']); ?></th>

                                        <?php $ModelEditId = "Edit_". $table['Id']  ;  ?>
                                        <?php $ModeldeleteId = "delete". $table['Id']  ;  ?>

                                        <th>
                                            <a href="?page=UserViewTable&Id=<?php echo $table['Id']; ?>"   class="btn  btn-outline-primary btn-sm">تعبئه </a>
                                        </th>
                                    </tr>

                                    <!-- Statr update Model -->

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
                                                            <h3>   هل انت متاكد من حذف  " <?php echo $table['name'] ?> " </h3>
                                                            <!-- action="../Model/Cateogry.php" -->
                                                                <form class="form" action="../Model/tables.php" method="post" > 
                                                                    <div class="form-body">
                                                                        <div class="form-actions">
                                                                        <input type="hidden"  value="<?php echo $table['Id'] ; ?>" name="Id">
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