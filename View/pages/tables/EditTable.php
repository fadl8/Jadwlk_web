<?php 

$info  = $Desgin = $back = $view = '';
$infoariaExpanded  = $DesginariaExpanded = $backariaExpanded = $viewariaExpanded = 'false';
$infoClasses  = $DesginClasses = $backClasses = $viewClasses = 'tab-pane fade';

$infodisabled  = $Desgindisabled = $backdisabled = $viewdisabled = true;


if(isset($_GET["tableId"] , $_GET["step"] , $_GET["page"] )){


    if($_GET["step"] == "desgin"){

        $Desgin =  "active";

        $DesginariaExpanded = "true";

        $DesginClasses="tab-pane fade active in";

        $infoariaExpanded  = $backariaExpanded = $viewariaExpanded = 'false';
        $infoClasses    = $backClasses = $viewClasses = 'tab-pane fade';
        $info  =  $back = $view = '';
        $infodisabled = $backdisabled = $viewdisabled = false ;
    }

    if($_GET["step"] == "back"){

        $back =  "active";
        $backariaExpanded = "true";
        $backClasses ="tab-pane fade active in";

        $infoariaExpanded  = $DesginariaExpanded  = $viewariaExpanded  = 'false';
        $infoClasses  = $DesginClasses  = $viewClasses = 'tab-pane fade';
        $info  = $Desgin  = $view = '';
        $infodisabled  = $Desgindisabled =  $viewdisabled = false ;
    }

    if($_GET["step"] == 'view'){
        $view =  "active";
        $viewariaExpanded = "true";
        $viewClasses ="tab-pane fade active in";

        $infoariaExpanded  = $DesginariaExpanded = $backariaExpanded = 'false';
        $infoClasses  = $DesginClasses = $backClasses = 'tab-pane fade';
        $info  = $Desgin  = $back = '';
        $infodisabled  = $Desgindisabled = $backdisabled = false ;
    }

}else {
    echo '<script>alert("info")</script>';
    $info =  "active";
    $infoariaExpanded = "true";
    $infoClasses="tab-pane fade active in";
    $Desgindisabled = $backdisabled = $viewdisabled= false ;
}

?>


<div class="app-content content container-fluid">
      <div class="content-wrapper">
        
      <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">جداول</h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">الصفحة الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">جدول</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">تعديل</a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>

        <div class="content-body">
           
           <!-- Justified With Top Border start -->
           <section id="justified-top-border">
              
               <div class="row match-height">
                   <div class="col-xs-12">
                       <div class="card">
                           <div class="card-header">
                               <h4 class="card-title">تعديل جدول </h4>
                           </div>
                           <div class="card-body">
                               <div class="card-block">
                                   <ul class="nav nav-tabs nav-justified">

                                        <li class="nav-item ">  
                                            <?php 
                                            // var_dump($_GET);
                                            if($infodisabled) {  ?>
                                                <a class="nav-link <?php echo $info; ?> " id="active-tab" data-toggle="tab" href="#info" aria-controls="active" aria-expanded="true">بيانات الجدول</a>
                                            <?php  } else { ?>
                                                <a class="nav-link disabled">بيانات الجدول</a>
                                            <?php }  ?>
                                       </li>

                                       <li class="nav-item">
                                       <?php if($Desgindisabled) {  
                                           echo '<a class="nav-link  '.$Desgin.';" id="active-tab" data-toggle="tab" href="#desgin" aria-controls="active" aria-expanded="true">تصميم الجدول</a> ';
                                         } else { 
                                            echo '<a class="nav-link disabled">تصميم الجدول</a>';
                                           }  ?>
                                       </li>

                                       <li class="nav-item">
                                            <?php if($backdisabled) {  
                                               echo '<a  class="nav-link '. $back.';  ?>" id="link-tab" data-toggle="tab" href="#background" aria-controls="link" aria-expanded="false">الخلفية</a>';
                                              } else {  
                                                echo '<a class="nav-link disabled">الخلفية</a>';
                                              }  ?>
                                       </li>
                                       
                                     
                                       <li class="nav-item">
                                            <?php if( $viewdisabled) {  
                                            echo '<a  class="nav-link  '.$view.'; " id="linkOpt-tab" data-toggle="tab" href="#view" aria-controls="linkOpt" aria-expanded="false">عرض الجدول</a>';
                                            } else {
                                                echo '<a class="nav-link disabled">عرض الجدول</a>';
                                            } 
                                            ?>
                                       </li>
                                   </ul>



                                   <div class="tab-content px-1 pt-1">

                                        <div role="tabpanel" class="<?php echo $infoClasses ?> " id="info" aria-labelledby="active-tab" aria-expanded="true">
                                            <?php include 'Editinfo.php'; ?>
                                        </div>

                                        <div class="<?php echo  $DesginClasses  ?> " id="desgin" role="tabpanel" aria-labelledby="link-tab" aria-expanded="false">
                                        <?php include 'Editdesgen.php'; ?>
                                        </div>

                                        <div class="<?php echo $backClasses  ?> " id="view" role="tabpanel" aria-labelledby="link-tab" aria-expanded="false">
                                        <?php include 'Editback.php'; ?>
                                        </div>

                                        <div class="<?php echo $viewClasses?> " id="background" role="tabpanel" aria-labelledby="link-tab" aria-expanded="false">
                                        <?php include 'view.php'; ?>
                                        </div>
                                    </div>
                                   
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- Justified With Top Border end -->
          
       </div>


      </div>
</div>

                                     