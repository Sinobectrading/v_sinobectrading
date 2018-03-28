<!doctype html>
<html>
<?php include_once '../header.php'; ?>
<link rel="stylesheet" href="temp.css">

<body>
<!-- Header -->
<?php include_once 'nav.php'; ?>
<div class="allcontain">
    <div id="std" class="col-md-12 abc">
         <div class="tab_container">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1" class="thum">
                <img src="../img/png/angel.png" alt="">
                <span class="itemname">Angle</span>
            </label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2" class="thum">
                <img src="../img/png/sc_bar.png" alt="">
                <span class="itemname">Bar</span>
            </label>

            <input id="tab3" type="radio" name="tabs">
            <label for="tab3" class="thum">
                <img src="../img/png/beam.png" alt="">
                <span class="itemname">Beam</span>
            </label>

            <input id="tab4" type="radio" name="tabs">
            <label for="tab4" class="thum">
                <img src="../img/png/channel.png" alt="">
                <span class="itemname">Channel</span>
            </label>

            <input id="tab5" type="radio" name="tabs">
            <label for="tab5" class="thum">
                <img src="../img/png/pipe.png" alt="">
                <span class="itemname">Pipe</span>
            </label>

            <input id="tab6" type="radio" name="tabs">
            <label for="tab6" class="thum">
                <img src="../img/png/sq_tube.png" alt="">
                <span class="itemname">Tube</span>
            </label>

            <section id="Angle" class="tab-content">
                <h3>Angle Extrusion</h3>
                <div class="col-md-4">
                    <img src="../img/1920x1500/angle01.jpg" alt="">
                    <!-- <img src="../img/1920x1500/angle02.jpg" alt=""> -->
                </div>
                <div class="col-md-8">
                    <p>
                    6061 T6 aluminum angle is the most commonly used aluminum for structural applications. It has above average corrosion resistance, good machinability, and is excellent for welding. 6061 aluminum angle is heat-treatable, resistant to stress cracking and non-magnetic.
                    </p>
                    <p>6063 T5aluminium angle has sharp corners and is generally used where surface finish is more important than strength. 6063 Anodized Aluminum Angle offers very high corrosion resistance and high strength. 
                    </p>
                    <p>We supply with two types of aluminum angle:</p>
                    <div class="ajaxcontent">
                        <div class="col-md-6">
                            <p>Radius Corner</p>
                            <a href="ex/AngleRadiusInside.html" data-remote="false" data-toggle="modal" data-target="#myModal">
                                <img src="../img/650_500/AngleRadiusInside.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <p>Sharp Corner</p>
                            <a href="ex/AngleSharpCorner.html" data-remote="false" data-toggle="modal" data-target="#myModal">
                                <img src="../img/650_500/AngleSharpCorner.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Default bootstrap modal example -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
                            </div>
                            <div class="modal-body">
                            ...
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>

            <section id="Bar" class="tab-content">
                <h3>Bar</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                <div class="col-md-8">
                    <div class="ajaxsection">
                        
                    </div>
                </div>
            </section>

            <section id="Beam" class="tab-content">
                <h3>Headline 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <section id="Channel" class="tab-content">
                <h3>Headline 4</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
            </section>

            <section id="Pipe" class="tab-content">
                <h3>Headline 5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
            </section>

            <section id="Tube" class="tab-content">
                <h3>Tube Extrusion</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
            </section>

        </div>
    </div>
</div>
 
<?php include_once 'footer.php'; ?>
<!-- <script src="temp.js"></script> -->
<script>
// $("#angle .ajaxsection").load("ex/Angle.html");
// $(".thum").click(function(){
//         var str = $(this).text();
//         var url = str.replace(/\s/g, '');
//         $.ajax({
//         context: this,
//         dataType : "html",
//         url : "ex/"+url+".html",
//         success : function(results) {
//               $('#loading').hide();
//               $("#"+str+ " .ajaxsection").html(results);
//             },
//         complete: function(){

//             }
//         });
//     });
</script>
<script>
$("#myModal").on("show.bs.modal", function(e) {
    var link = $(e.relatedTarget);
    $(this).find(".modal-body").load(link.attr("href"));
});
</script>
</body>
</html>