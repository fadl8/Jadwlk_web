<?php
/**
 * Created by PhpStorm.
 * product: Mr.F_17
 * Date: 1/26/2019
 * Time: 10:55 AM
 */
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
                        <li class="breadcrumb-item"><a href="">الصفحة الرئيسية</a>
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
                            <h4 class="card-title">جدول تم تعبيتها</h4>
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
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <?php 
                                    foreach( Action::TableFilled($_SESSION["UserLogin"][0]["Id"]) as $table ){ ?>
                                        <th><?php echo $table['Id'] ?></th>
                                        <th><?php echo $table['name'] ?></th>
                                        <th>
                                            <a href="?page=DownloadTable&Id=<?php echo $table['Id']; ?>"  class="btn   btn-outline-primary btn-sm">عرض </a>
                                            <a href="../Model/tables.php?userId=<?php echo$_SESSION['UserLogin'][0]['Id']; ?>&tableId=<?php echo $table['Id']; ?>"  class="btn btn-outline-danger btn-sm">حذف </a>
                                        </th>
                                        
                                    </tr>
                                    <!-- Statr update Model -->

                                  
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
