<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<head> 
   <?php include_once 'header.php' ?>
</head>
<!-- END HEAD -->

<!-- BODY -->
<body>
    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
     <!-- Navbar -->
     <?php include_once 'nav.php';  ?>
     <!-- Navbar -->
 </header>
 <!--========== END HEADER ==========-->

 <!--========== PARALLAX ==========-->
 <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
    <div class="parallax-content container">
        <h1 class="carousel-title">Join Us</h1>
        <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<div class="content-lg container" id="position">
    <div class="row">
        <div id="faq" class="col-md-9">
            <p class="lead">Our opening positions</p>
            <div class="panel-group" id="accordion">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">
                               Sales
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Position not available.</p>
                        </div>
                        <div class="panel-footer">
                         <!--  <div class="btn-group btn-group-xs"><span class="btn">Was this question useful?</span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Yes</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> No</a></div> -->
                            <div class="btn-group btn-group-xs">
                                <a class="btn btn-primary" href="#" disabled>
                                Apply</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse-2">
                                 Marketing
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-2" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Position not available.</p>
                        </div>
                        <div class="panel-footer">
                            <div class="btn-group btn-group-xs">
                                <a class="btn btn-primary" href="#" disabled>Apply</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse-3">
                                 Finance
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Position not available.</p>
                        </div>
                        <div class="panel-footer">
                            <div class="btn-group btn-group-xs">
                                <a class="btn btn-primary" href="#" disabled>Apply</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse-4">
                                 Administration
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Position not available.</p>
                        </div>
                        <div class="panel-footer">
                            <div class="btn-group btn-group-xs">
                                <a class="btn btn-primary" href="#" disabled>Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <p class="lead">Our Advantages</p>
            <div class="list-group panel-group" id="accordion2">
                <div class="panel panel-default">
                    <a href="#collapse-5" class="list-group-item panel-title accordion-toggle" data-toggle="collapse" data-parent="#accordion2">Profit</a>
                    <div id="collapse-5" class="panel-collapse collapse">
                        <div class="panel-body">
                            des desdesde desdeds sfdsasdsdsdsdds
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <a href="#collapse-6" class="list-group-item panel-title accordion-toggle" data-toggle="collapse" data-parent="#accordion2">Bonus</a>
                     <div id="collapse-6" class="panel-collapse collapse">
                        <div class="panel-body">
                            des desdesde desdeds sfdsasdsdsdsdds
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <a href="#collapse-7" class="list-group-item panel-title accordion-toggle" data-toggle="collapse" data-parent="#accordion2">Insurance</a>
                    <div id="collapse-7" class="panel-collapse collapse">
                        <div class="panel-body">
                            des desdesde desdeds sfdsasdsdsdsdds
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <a href="#collapse-8" class="list-group-item panel-title accordion-toggle" data-toggle="collapse" data-parent="#accordion2">Envornment</a>
                    <div id="collapse-8" class="panel-collapse collapse">
                        <div class="panel-body">
                            des desdesde desdeds sfdsasdsdsdsdds
                        </div>
                    </div>
                </div>

 
            </div>
        </div>
    </div>
</div>

<!--========== FOOTER ==========-->
<?php include_once 'footer.php'; ?>
<!--========== END FOOTER ==========-->
<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>
<script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
<script>
$('.carousel').carousel({
    interval: 3000
})
</script>
 
</body>
<!-- END BODY -->
</html>