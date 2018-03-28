<!doctype html>
<html>
<?php include_once '../header.php'; ?>
<link rel="stylesheet" href="temp.css">
<style>
 html { overflow: scroll; } 
</style>
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
                <div class="flex">
                    <div class="col-lg-3 col-md-4 leftimg">
                        <img src="../img/1920x1500/angle01.jpg" alt="">
                        <!-- <img src="../img/1920x1500/angle02.jpg" alt=""> -->
                    </div>
                    <div class="col-lg-9 col-md-8 righttext">
                        <h4>Angle Extrusion</h4>
                        <p>
                        6061 T6 aluminum angle is the most commonly used aluminum for structural applications. It has above average corrosion resistance, good machinability, and is excellent for welding. 6061 aluminum angle is heat-treatable, resistant to stress cracking and non-magnetic.
                        </p>
                        <p>6063 T5aluminium angle has sharp corners and is generally used where surface finish is more important than strength. 6063 Anodized Aluminum Angle offers very high corrosion resistance and high strength. 
                        </p>
                        <p class="supply"><b>We supply with two types of aluminum angle:</b></p>
                        <div class="ajaxcontent">
                            <div class="col-md-6">
                                <p class="sharp">Radius Corner</p>
                                <a href="ex/AngleRadiusInside.html" data-remote="false" data-toggle="modal" data-target="#myModal_1">
                                    <img src="../img/650_500/AngleRadiusInside.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <p class="sharp">Sharp Corner</p>
                                <a href="ex/AngleSharpCorner.html" data-remote="false" data-toggle="modal" data-target="#myModal_1">
                                    <img src="../img/650_500/AngleSharpCorner.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default bootstrap modal example -->
                <div class="modal fade" id="myModal_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <div class="flex">
                    <div class="col-lg-3 col-md-4 leftimg">
                        <img src="../img/1920x1500/bar01.jpg" alt="">
                        <!-- <img src="../img/1920x1500/angle02.jpg" alt=""> -->
                    </div>
                    <div class="col-lg-9 col-md-8 righttext">
                        <h4>Bar Extrusion</h4>
                        <p>
                        Aluminum Bar extrusion is widely used in all walks of life,such as cars,ships,aerospace,aviation,electronics,agriculture, mechanical and electrical,home.
                        </p>
                        <p class="supply">
                            Available Alloy
                        </p>
                        <p>
                            1060, 6005A-T6, 6026-T6, 6060-T5, 6060-T66, 6061, 6061-T4, 6061-T6, 6061-T6511, 6063-T1, 6063-T5, 6063-T591, 6063-T6
                        </p>
                        <p class="supply"><b>We supply with three types of aluminum bar:</b></p>
                        <div class="ajaxcontent">
                            <div class="col-md-4">
                                <p class="sharp">Bar Round Corner</p>
                                <a href="ex/BarRound.html" data-remote="false" data-toggle="modal" data-target="#myModal_2">
                                    <img src="../img/650_500/BarRound.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <p class="sharp">Bar Sharp Corner</p>
                                <a href="ex/BarSharpCorner.html" data-remote="false" data-toggle="modal" data-target="#myModal_2">
                                    <img src="../img/650_500/BarSharpCorner.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <p class="sharp">Bar Round (Rod)</p>
                                <a href="ex/Rod.html" data-remote="false" data-toggle="modal" data-target="#myModal_2">
                                    <img src="../img/650_500/Rod.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default bootstrap modal example -->
                <div class="modal fade" id="myModal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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



            <section id="Beam" class="tab-content">
                <div class="flex">
                    <div class="col-lg-3 col-md-4 leftimg">
                        <img src="../img/1920x1500/beam01.jpg" alt="">
                        <!-- <img src="../img/1920x1500/beam01.jpg" alt=""> -->
                    </div>
                    <div class="col-lg-9 col-md-8 righttext">
                        <h4>Beam Extrusion</h4>
                        <p>
                        Aluminum Beam extrusion is used in furniture, windows&doors, decorations ,industry and construction.
                        </p>
                        <p class="supply">
                            Available Alloy
                        </p>
                        <p>
                            6005, 6061
                        </p>
                        <p class="supply"><b>We supply with two types of aluminum beam:</b></p>
                        <div class="ajaxcontent">
                            <div class="col-md-6">
                                <p class="sharp">Beam Radius Inside</p>
                                <a href="ex/BeamRadiusInside.html" data-remote="false" data-toggle="modal" data-target="#myModal_3">
                                    <img src="../img/650_500/BeamRadiusInside.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <p class="sharp">Beam Square Corner</p>
                                <a href="ex/BeamSquareCorner.html" data-remote="false" data-toggle="modal" data-target="#myModal_3">
                                    <img src="../img/650_500/BeamSquareCorner.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default bootstrap modal example -->
                <div class="modal fade" id="myModal_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

            <section id="Channel" class="tab-content">
                <div class="flex">
                    <div class="col-lg-3 col-md-4 leftimg">
                        <img src="../img/1920x1500/channel01.jpg" alt="">
                     </div>
                    <div class="col-lg-9 col-md-8 righttext">
                        <h4>Channel Extrusion</h4>
                        <p>
                        Aluminum channel extrusion is used in TV frames, rim for bicycles and motorcycles, radiator, furniture, ladder, guide rail, leisure materials, shower room, solar module frame, motor shell, pipeline integration etc..
                        </p>
                        <p class="supply">
                            Available Alloy
                        </p>
                        <p>
                            6005-T5, 6060-T5, 6060-T66, 6061-T6, 6061-T6511, 6063-T4, 6063-T5, 6063-T52, 6063-T6
                        </p>
                        <p class="supply"><b>We supply with two types of aluminum channel:</b></p>
                        <div class="ajaxcontent">
                            <div class="col-md-6">
                                <p class="sharp">Channel Association</p>
                                <a href="ex/ChannelAssociation.html" data-remote="false" data-toggle="modal" data-target="#myModal_4">
                                    <img src="../img/650_500/ChannelAssociation.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="ajaxcontent">
                            <div class="col-md-6">
                                <p class="sharp">Channel Square Corners</p>
                                <a href="ex/ChannelSquareCorners.html" data-remote="false" data-toggle="modal" data-target="#myModal_4">
                                    <img src="../img/650_500/ChannelSquareCorners.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default bootstrap modal example -->
                <div class="modal fade" id="myModal_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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



            <section id="Pipe" class="tab-content">
                <div class="flex">
                    <div class="col-lg-3 col-md-4 leftimg">
                        <img src="../img/1920x1500/pipe01.jpg" alt="">
                        <!-- <img src="../img/1920x1500/pipe01.jpg" alt=""> -->
                    </div>
                    <div class="col-lg-9 col-md-8 righttext">
                        <h4>Pipe Extrusion</h4>
                        <p>
                        Aluminum Beam extrusion is used in furniture, windows&doors, decorations ,industry and construction.
                        </p>
                        <p class="supply">
                            Available Alloy
                        </p>
                        <p>
                            6061-T6, 6061-T6511, 6063-T4, 6063-T52
                        </p>
                        <p class="supply"><b>We supply with one type of aluminum pipe:</b></p>
                        <div class="ajaxcontent">
                            <div class="col-md-6">
                                <p class="sharp">Pipe</p>
                                <a href="ex/Pipe.html" data-remote="false" data-toggle="modal" data-target="#myModal_5">
                                    <img src="../img/650_500/Pipe.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default bootstrap modal example -->
                <div class="modal fade" id="myModal_5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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



            <section id="Tube" class="tab-content">
                <div class="flex">
                    <div class="col-lg-3 col-md-4 leftimg">
                        <img src="../img/1920x1500/tube01.jpg" alt="">
                     </div>
                    <div class="col-lg-9 col-md-8 righttext">
                        <h4>Tube Extrusion</h4>
                        <p>
                        Aluminum Tube extrusion is used in construcion buildings (window, door, curtain wall, hand railing,etc.) and industrial parts.
                        </p>
                        <p class="supply">
                            Available Alloy
                        </p>
                        <p>
                            5356-T5, 6060-T5, 6061-T6, 6061-T6511, 6063-T5, 6063-T52, 6063-T66s
                        </p>
                        <p class="supply"><b>We supply with three types of aluminum beam:</b></p>
                        <div class="ajaxcontent">
                            <div class="col-md-4">
                                <p class="sharp">Rectangular Tube (Round Corner)</p>
                                <a href="ex/RectangularTubeRoundCorner.html" data-remote="false" data-toggle="modal" data-target="#myModal_6">
                                    <img src="../img/650_500/RectangularTubeRoundCorner.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <p class="sharp">Rectangular Tube (Sharp Corner)</p>
                                <a href="ex/RectangularTubeSharpCorner.html" data-remote="false" data-toggle="modal" data-target="#myModal_6">
                                    <img src="../img/650_500/RectangularTubeSharpCorner.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <p class="sharp">Round Tubing</p>
                                <a href="ex/RoundTubing.html" data-remote="false" data-toggle="modal" data-target="#myModal_6">
                                    <img src="../img/650_500/RoundTubing.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default bootstrap modal example -->
                <div class="modal fade" id="myModal_6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
$(".modal").on("show.bs.modal", function(e) {
    var link = $(e.relatedTarget);
    $(this).find(".modal-body").load(link.attr("href"));
});
</script>
</body>
</html>