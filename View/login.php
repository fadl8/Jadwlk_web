<html lang="en" data-textdirection="rtl" class="loaded">
<?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 'nouser'){
            echo '<script>alert("لا يوجد مستخدم بهذا الايميل")</script>';
        }
    }
  include "pages/MainContant/head.php";
?>

  <body style="background-color:#1c3749;" data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

<style>
  .btn-primary {
    border-color: #1c3749;
    background-color: #1c3749;
    color: #FFFFFF;
}
.btn-primary:hover {
    border-color: #1c3749;
    background-color: #1c3749;
    color: #FFFFFF;
}

  

    </style>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header no-border">
                <div class="card-title text-xs-center">
                    <div class="p-1">
                    <a href="index.php">
                    <img src="app-assets/images/logo.png" style="width: 200px;height: 200px;" alt="branding logo">
                    </a>
                </div>
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>تسجيل الدخول</span></h6>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <form class="form-horizontal form-simple" action="../Model/Login.php" method="post" novalidate="">
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input type="text" class="form-control form-control-lg input-lg" name="email" id="user-name" placeholder="البريد الاكتروني" required>
                            <div class="form-control-position">
                                <i class="icon-head"></i>
                            </div>
                        </fieldset>
                        
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control form-control-lg input-lg" name="password" id="user-password" placeholder="كلمة السر" required>
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                        </fieldset>

                       
                        <button type="submit" name="action" value="login" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> دخول</button>
                    </form>
                    <!-- Singup.php right -->
                </div>
            </div>
            <div class="card-footer">
                <div class="">
                    <p class="float-sm-left  text-xs-center m-0">هل لديك حساب؟  <a href="Singup.php" class="card-link"> انشاء الحساب</a></p>
                </div>
            </div>
           
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    

</body></html>