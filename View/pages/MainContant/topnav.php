<?php
/**
 * Created by PhpStorm.
 * User: Mr.F_17
 * Date: 1/26/2019
 * Time: 10:48 AM
 */
?>

<nav style="height: 20px;" class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <!--
            this div the logo of web
            done by F8
        -->
        <div style="background:#fbf2e9;" class="navbar-header">
            <ul class="nav navbar-nav" >
                <li class="nav-item mobile-menu hidden-md-up float-xs-left">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs">
                        <i class="icon-menu5 font-large-1"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="navbar-brand nav-link">
                        <img alt="branding logo" src="app-assets/images/logo.png" style="margin-right: 10px;width: 174px; height: 150px;" class="brand-logo">
                    </a>
                </li>

                <li class="nav-item hidden-md-up float-xs-right">
                    <a data-toggle="collapse" data-target="#navbar-mobile"
                       class="nav-link open-navbar-container">
                        <i class="icon-ellipsis pe-2x icon-icon-rotate-right-right">
                        </i>
                    </a>
                </li>

            </ul>
        </div>



        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">

                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs">
                            <i class="icon-menu5"></i>
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav float-xs-right">
                
                     
                    <li class="dropdown dropdown-user nav-item">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                      <span class="avatar avatar-online">
                           
                           
                      </i></span><span class="user-name"> <?php  echo $_SESSION["UserLogin"][0]['name'] ; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">
                            <a href="../Model/logout.php" class="dropdown-item"><i class="icon-power3"></i>تسجيل الخروج</a>
                        </div>
                    </li>
                    <!--
                    end of  profile in the web
                     done by F8
                     -->
                </ul>
            </div>
        </div>
    </div>
</nav>

