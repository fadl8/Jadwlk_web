<html lang="en">
<?php
  include "pages/MainContant/head.php";
        // 1 => same file is empty
        // 2 => pass word not match
        if(isset($_GET["error"])){
            if($_GET["error"] === '1'){
                echo "<script> alert('يجب ملئ الحقل كلها ')  </script>";
            }
            if($_GET["error"] === '2'){
                echo "<script> alert('كلمة السر ليس متطلبقة')  </script>";
            }
        }
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
                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>انشاء جديد</span></h6>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <form class="form-horizontal form-simple" action="../Model/logout.php" method="post">
                        
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input type="text" class="form-control form-control-lg input-lg" name="name" id="user-name" placeholder="اسم المستخدم" required>
                            <div class="form-control-position">
                                <i class="icon-head"></i>
                            </div>
                        </fieldset>
                        
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input type="text" class="form-control form-control-lg input-lg" name="email" id="user-name" placeholder="البريد الاكتروني" required>
                            <div class="form-control-position">
                                <i class="icon-email2"></i>
                            </div>
                        </fieldset>
                        
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input type="password" class="form-control form-control-lg input-lg" name="password" id="user-name" placeholder="كلمه السر" required>
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                        </fieldset>
                        
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control form-control-lg input-lg" name="Repassword" id="user-password" placeholder="اعاده  كلمة السر " required>
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                        </fieldset>
                        
                        <button type="submit" name="action" value="createNew" class="btn btn-primary btn-lg btn-block">انشاء</button>
                    
                    </form>
                </div>
            </div>
           
        </div>
    </div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
</body>
</html>