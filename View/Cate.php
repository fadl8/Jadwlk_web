<?php
   include "../Model/DB.php";
   $data = array();

  
   if(isset($_GET['CateID'])) {
    $total_results = count (Action::RetrieveData('tables','*','Cateogry_Id = ' . $_GET['CateID'] ));

    $limit = 5 ;
    
    $total_pages = ceil($total_results/$limit);
 
   if (!isset($_GET['page']))
     {$page = 1;}
       else
     {$page = $_GET['page'];}
 
     $starting_limit = ($page-1) * $limit;
    
     $data = Action::RetrieveData('tables','*','Cateogry_Id = ' . $_GET['CateID'] . " LIMIT $starting_limit ,  $limit");
   }
?>
<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <title>جدولك</title>
        <link rel="stylesheet" href="app-assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="app-assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="app-assets/css/main.css" />
    </head>
    <body>

        <!--============ Start Upper Bar ============-->
        <div class="upper-bar">
            <div class="container">
                <div class="row">
                   
                    <div class="info col-sm text-center text-sm-left">
                    </div>
                    <div class="info col-sm text-center text-sm-right"> 
                        <i class="fa fa-envelope"></i> Jadwlk@gmail.com
                    </div>
                </div>
            </div>
        </div>
        <!--============ End Upper Bar ============-->

        <!--============ Start Navbar ============-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                
               
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Singup.php">انشاء حساب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">تسجيل الدخول</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Cate.php">الاقسام</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="index.php">الرئيسية <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>

                <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#main-nav">
                <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="index.php">
                <img src="app-assets/images/logo.png" style="width: 170px;height: 140px;" alt="branding logo">

                </a>
            </div>
        </nav>
        <!--============ End Navbar ============-->
 


        

        <div style="padding-top:70px ;" class="contact-us">
            <div class="container">
                <div class="row">
                <div class="col-md-2"> 
                    </div>
                    <div class="col-md-8 text-md-right">
                       
                                <form action="" method="GET" class="form">
                                    <div class="form-body">
                                        <div class="form-group">
                                        <label for="projectinput8">اختار قسم لتظهر الجداول الخاصة بالقسم</label>

											<select id="projectinput6" name="CateID" class="form-control">
												<option value="-1"></option>
                                            <?php  foreach(  Action::RetrieveData('cateogry') as $Cateogry ){ ?>
												
												<option value="<?php echo $Cateogry['Id'] ?>"><?php echo $Cateogry['name'] ?></option>
												 
                                            <?php  } ?>
                                            </select>
                                            
										</div>
                                    </div>
                                    <div class="form-actions">
                                        <button  type="submit"class="btn btn-outline-primary m-2">
                                            <i class="icon-check2"></i> اظهار
                                        </button>
                                    </div>
                                </form>
                            
                    </div>
                    <div class="col-md-2  "> 
                    </div>
                </div>
            </div>
        </div>
<?php if($data) { ?>
        <div class="contact-us">
            <div class="container">
                <div class="row">
                <div class="col-md-2  "> 
                    </div>
                    <div class="col-md-8">
                    <table style="direction: rtl; color:#fff" class="table table-hover ">
                        <thead>
                            <tr>
                            <th >الرقم</th>
                            <th>الاسم</th>
                            <th></th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  foreach( $data as $table ){ ?>
                            <tr >
                                <td class="text-center"><?php echo $table['Id'] ?></td>
                                <td></td>
                                <td><?php echo $table['name'] ?></td>
                                <td></td>
                            </tr>
                            <?php  }?>
                        </tbody>
                        </table>
                        <div class="text-xs-center mb-3">
                            <ul class="pagination">
                                <?php
                                $next=$page+1;
                                $prev=$page-1; 
                                ?>

                                <?php if($prev<=$total_pages && $prev>0){ ?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo "?CateID=". $_GET['CateID'] ."&page=$prev"; ?>">السابق</a>
                                        </li>
                                <?php } ?>
                                <?php for ($page=1; $page <= $total_pages ; $page++) { ?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo "?CateID=". $_GET['CateID'] ."&page=$page"; ?>"><?php  echo $page; ?></a>
                                        </li>
                                <?php } ?>
                                <?php if($next<=$total_pages) { ?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo "?CateID=". $_GET['CateID'] ."&page=$next"; ?>">التالي</a>
                                        </li>
                                <?php } ?>
                            </ul>

                            </div>
                        </div>
                    <div class="col-md-2  "> 
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
       
        <!--=========== Start Footer ==============-->
        <footer style="direction: rtl;background-color: #eee;">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md text-center text-md-center text-uppercase">
                           الحقوق محفوظة لدي جدولك
                        </div>
                    </div>
                </div>
              </div>
        </footer>
        <!--=========== End Footer ==============-->

 

        <script src="app-assets/js/bootstrap.min.js"></script>
    </body>
</html>
