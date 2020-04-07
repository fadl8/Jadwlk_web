<?php
/**
 *  Created by PhpStorm.
 *  User: Mr.F_17
 *  Date: 1/26/2019
 */
?>
<style>
.bg-teal {
    background-color: #1c3749 !important;
}
.btn-outline-primary:hover {
    background-color: #1c3749;
    color: #FFFFFF !important;
}
.btn-outline-primary:hover {
    color: #FFFFFF;
    border-color: #1c3749;
}
</style>
<div class="app-content content container-fluid">
    <div class="content-wrapper">
    <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">لوحة التحكم</h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">الصفحة الرئيسية</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-body">
        <!-- stats -->
        <div class="row">

            <div class="col-xl-4 col-lg-4">
         
                <div class="card bg-teal">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body white text-xs-left">
                                    <h3><?php echo count(Action::RetrieveData('tables')); ?></h3>
                                    <span>جدول</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-th white font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-teal">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body white text-xs-left">
                                    <h3><?php echo count(Action::RetrieveData('user')); ?></h3>
                                    <span>مستخدم</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-users white font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-teal">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body white text-xs-left">
                                    <h3><?php echo count(Action::RetrieveData('cateogry')); ?></h3>
                                    <span>تصنيفات</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-grid white font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        
                <div class="card bg-teal">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body white text-xs-left">
                                    <h3><?php echo count(Action::RetrieveData('message')); ?></h3>
                                    <span>مقترح</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-ios-help-outline white font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <div class="col-xl-8 col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">اخر الجداول</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                 
            </div>
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>رقم</th>
                                <th>الاسم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach( Action::RetrieveData('tables limit 8') as $table ){ ?>
                                <tr>
                                    <th><?php echo $table['Id'] ?></th>
                                    <th><?php echo $table['name'] ?></th>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  
</div>
            <!--/ stats -->
        </div>
    </div>
</div>