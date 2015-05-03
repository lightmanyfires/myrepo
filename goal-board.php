<?php
define('PAGE_TITLE', 'Sporple | Rugby | Goals');
define('PAGE_DESC', '');
define('PAGE_KEYWORDS', '');
?>

<!-- Include Header -->
<?php include "php/components/global/header.php"; ?>

<!-- Include Navbar -->
<?php include "php/components/global/navbar.php"; ?>

        
     
        <!-- Start #right-sidebar -->
        <aside id="right-sidebar" class="hide-sidebar">
            <!-- Start .sidebar-inner -->
            <div class="sidebar-inner">
                <!-- Start .sidebar-panel -->
                <div class="sidebar-panel mt0">
                    <!-- Start sidebar-panel-content -->
                    <div class="sidebar-panel-content fullwidth pt0">

                        <!-- Import Chat -->
                        <?php include "php/components/global/chat.php"; ?>
                        
                        <div class="chat-box">
                            <h5>
                                <span class="device"><i class="im-screen4"></i></span>
                                <span class="status online"><i class="im-circle-small"></i></span> Mat Koubardaris
                            </h5>
                            <a id="close-user-chat" class="close" aria-hidden="true">&times;</a>
                            <ul class="chat-messages">
                                <li>
                                    <div class="avatar">
                                        <img src="assets/img/avatars/3.jpg" alt="@chadengle">
                                    </div>
                                    <div class="message">
                                        <p class="chat-name">Mat Koubardaris <span class="chat-time">15 sec ago</span>
                                        </p>
                                        <p class="chat-txt">Hi Jack, are you still looking for a club in the UK?</p>
                                    </div>
                                </li>
                                <li class="chat-me">
                                    <div class="avatar">
                                        <img src="assets/img/avatars/1.jpg" alt="@jonhdoe">
                                    </div>
                                    <div class="message">
                                        <p class="chat-name">Jack Reid <span class="chat-time">10 sec ago</span>
                                        </p>
                                        <p class="chat-txt">Yeah mate, still looiking for the right club</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/img/avatars/3.jpg" alt="@chadengle">
                                    </div>
                                    <div class="message">
                                        <p class="chat-name">Chad Engle <span class="chat-time">now</span>
                                        </p>
                                        <p class="chat-txt">Great, let me give you a call later today.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="chat-write">
                                <form action="#" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <textarea name="sendmsg" id="sendMsg" class="form-control elastic" rows="1"></textarea>
                                        <a role="button" class="btn" id="attach_photo_btn">
                                            <i class="im-image2 s20"></i> 
                                        </a>
                                        <input type="file" name="attach_photo" id="attach_photo" class="unstyled">
                                    </div>
                                    <!-- End .form-group  -->
                                </form>
                            </div>
                        </div>
                        <!-- End chat-box -->
                    </div>
                    <!-- End sidebar-panel-content -->
                </div>
                <!-- End .sidebar-panel -->
            </div>
        </aside>
        <!-- End .sidebar-inner -->
        </aside>
        <!-- Start #right-sidebar -->
        <!-- Start #content -->
        <div id="content">
            <!-- Start .content-wrapper -->
            <div class="content-wrapper">
                <div id="page-heading" class="page-header">
                    <h2>Goals</h2>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
                <div class="goal-board-intro">
                    <p>This is your visualistation board. <br>
                    Add images and videos to keep you focused on your goals and to push you through the struggles</p>
                    
                </div>
                <!-- Start .content-inner  -->
                <div class="content-inner">
                    <!-- Start .row -->
                    <div class="row">
                        <!-- col-lg-4 end here -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sortable-layout">
                            <!-- col-lg-4 start here -->
                            <div class="panel panel-orange panelMove">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">GOAL 1: To play for Australia an win a World Cup! </h4>
                                </div>
                                <div class="panel-body p5">
                                        <div class="embed-responsive embed-responsive-16by9">
                                             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/huBgHCKNlbU"></iframe>
                                        </div>
                                </div>
                            </div>
                        </div>
                            <!-- End .panel -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sortable-layout">
                            <div class="panel panel-orange panelMove">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> GOAL 2</h4>
                                </div>
                                <div class="panel-body p0">
                                    <div>
                                        <img src="assets/img/goals/arnold.jpg" class="img-responsive">
                                    </div>
                                </div>
                          </div>
                        </div>
                        <!-- End .panel -->
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sortable-layout">
                            <div class="panel panel-orange panelMove">
                                <!-- Start .panel -->
                                <div class="panel-heading">GOAL 3</h4>
                                </div>
                                <div class="panel-body p0">
                                    <div>
                                        <img src="assets/img/goals/ibiza.jpg" class="img-responsive">
                                    </div>
                                </div>
                          </div>
                        </div>
                        <!-- End .panel -->
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sortable-layout">
                            <div class="panel panel-orange panelMove">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> GOAL 4</h4>
                                </div>
                                <div class="panel-body p0">
                                    <div>
                                        <img src="assets/img/goals/arnold.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .panel -->
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sortable-layout">
                            <div class="panel panel-orange panelMove">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> GOAL 5</h4>
                                </div>
                                <div class="panel-body p0">
                                    <div>
                                        <img src="assets/img/goals/arnold.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .panel -->
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sortable-layout">
                            <div class="panel panel-orange panelMove">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> GOAL 6</h4>
                                </div>
                                <div class="panel-body p0">
                                    <div>
                                        <img src="assets/img/goals/arnold.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .panel -->
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sortable-layout">
                            <div class="panel panel-orange panelMove">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> GOAL 7</h4>
                                </div>
                                <div class="panel-body p0">
                                    <div>
                                        <img src="assets/img/goals/arnold.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .panel -->
                        <div class="panel panel-orange panelMove">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title"> GOAL 8: To own an Audi R8</h4>
                            </div>
                            <div class="panel-body p0">
                                <div>
                                    
                                    <img src="assets/img/goals/car.jpg" class="img-responsive">
                                </div>
                            </div>
                        </div>
                            <!-- End .panel -->
                        </div>
                        <!-- col-lg-4 end here -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .content-inner -->
            </div>
            <!-- End .content-wrapper -->
            <div class="clearfix"></div>
        </div>
        <!-- End #content -->
        
        <!-- Javascripts -->
        <?php include "php/components/global/scripts.php"; ?>
    </body>
</html>