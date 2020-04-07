<?php
   include "../Model/DB.php";
?>
<!DOCTYPE html>
<html lang="ar" dir="ltr">
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

       <!--============ Start Overview ============-->
       <div  class="overview text-center testimonials">
        <div class="overlay"></div>
        <div class="container">
            <h2 class="h1 my-h2">ابدأ الان وقم بتصميم
                شكل جدولك</h2>
            <p class="my-main-p">في موقع جدولك يمكنك تصميم العديد من أشكال الجداول او يمكنك الاختيار من بعض الاشكال التي صممناها من اجلك</h4>
            <br>
                <a  href="login.php" class="btn  btn-primary mt-2">تسجيل الدخول</a>
        </div>
    </div>
    <!--============ End Overview ============-->

        <!--============ Start features ============-->
        <div class="features text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <i class="fa fa-cog fa-fw fa-3x rounded-circle"></i>
                        <h3>سهل الاستخدام</h3>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <i class="fa fa-cubes fa-fw fa-3x rounded-circle"></i>
                        <h3>تصاميم مناسبة</h3>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <i class="fa  fa-diamond fa-fw fa-3x rounded-circle"></i>
                        <h3>متجاوب</h3>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <i class="fa fa-table fa-fw fa-3x rounded-circle"></i>
                        <h3>جداول متعدده</h3>
                     </div>
                </div>
            </div>
        </div>
        <!--============ End features ============-->
       


        <!--=========== Start Choose Us ==============-->
        <div class="choose-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="app-assets/images/fw-4.jpg" alt="choose-us" />
                    </div>
                    <div class="col-lg-6">
                        
                        <img src="app-assets/images/logo.png" style="float: right; width: 200px;height: 200px;" alt="branding logo">
                        <h2 class="text-center">عن جدولك</h2>
                        <p style="margin-top: 115px;" class="text-center">جدولك : تطبيق يمكنك من ترتيب مهامك اليوميه والاسبوعيه والشهريه حيث تستطيع ان تختار الجدول المناسب لك من خلال قائمه الجداول المطروحه فى النظام كما تستطيع اختيار الخلفيه المناسبه لك
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== End Choose Us ==============-->

        <!--=========== Start Statistics ==============-->
        <div class="stats text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                         <div class="stat">
                             <i class="fa fa-user fa-fw fa-5x"></i>
                             <span><?php echo count(Action::RetrieveData('user')); ?></span>
                             <p>عملاء</p>
                         </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                         <div class="stat">
                             <i class="fa fa-cog fa-fw fa-5x"></i>
                             <span><?php echo count(Action::RetrieveData('cateogry')); ?></span>
                             <p>فسم</p>
                         </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                         <div class="stat">
                             <i class="fa fa-table fa-fw fa-5x"></i>
                             <span><?php echo count(Action::RetrieveData('tables')); ?></span>
                             <p>جداول</p>
                         </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                         <div class="stat">
                             <i class="fa fa-commenting fa-fw fa-5x"></i>
                             <span><?php echo count(Action::RetrieveData('message')); ?></span>
                             <p>مقترح</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== End Statistics ==============-->

        <div class="contact-us">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-8 text-md-right">
                    
                        <form action="Model/Message.php" method="post" class="form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="projectinput8">الاسم</label>
                                        <input type="text" class="form-control" require/>
                                    </div>
                                    <div class="form-group">
                                        <label for="projectinput8">البريد الاكتروني</label>
                                        <input type="email" class="form-control" require />
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="projectinput8">المقترح</label>
                                        <textarea id="projectinput8" rows="5" require class="form-control" name="message_text" ></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button name="action" value="saveMessage" type="submit"class="btn btn-outline-primary">
                                        <i class="icon-check2"></i> ارسال
                                    </button>
                                </div>
                            </form>    
                    </div>
                    <div class="col-md-4 text-md-right"> 
                        <p>تستطيع التواصل معانا من خلال ارسال رساله  من خلال الحقول الاتية </p>
                    </div>
                </div>
            </div>
        </div>
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
