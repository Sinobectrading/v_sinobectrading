<!doctype html>
<html>
<?php include_once '../header.php'; ?>
<style>
 
</style>
<body>
<!-- Header -->
<?php include_once 'nav.php'; ?>
<div class="allcontain">
    <div id="std" class="col-md-12 abc">
    <?php include_once 'subnav.php'; ?>
    
    <main class="cd-main">
        <section class="cd-section contact visible">
            <header>
                <div class="cd-title">
                    <h2>Beam</h2>
                    <span>Some text here</span>
                </div>

                <a href="#contact-content" class="cd-scroll">Scroll Down</a>
            </header>

            <div class="cd-content" id="contact-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, voluptate ut accusamus veniam numquam, porro! Cum minima a molestiae, similique voluptate, perferendis vel iusto quam suscipit delectus dolore ducimus possimus illo molestias voluptas labore optio consequuntur sapiente pariatur libero nam temporibus. Laudantium!
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, voluptate ut accusamus veniam numquam, porro! Cum minima a molestiae, similique voluptate, perferendis vel iusto quam suscipit delectus dolore ducimus possimus illo molestias voluptas labore optio consequuntur sapiente pariatur libero nam temporibus. Laudantium!
                </p>
                
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, voluptate ut accusamus veniam numquam, porro! Cum minima a molestiae, similique voluptate, perferendis vel iusto quam suscipit delectus dolore ducimus possimus illo molestias voluptas labore optio consequuntur sapiente pariatur libero nam temporibus. Laudantium!
                </p>
                
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, voluptate ut accusamus veniam numquam, porro! Cum minima a molestiae, similique voluptate, perferendis vel iusto quam suscipit delectus dolore ducimus possimus illo molestias voluptas labore optio consequuntur sapiente pariatur libero nam temporibus. Laudantium!
                </p>
            </div> <!-- .cd-content -->
        </section> <!-- .cd-section -->
    </main> <!-- .cd-main -->

    <div id="cd-loading-bar" data-scale="1" class="contact"></div> <!-- lateral loading bar -->
    </div>
</div>
 
<?php include_once 'footer.php'; ?>
<script>
$(document).ready(function(){
$('.cd-section').load('ex/Angel.html');
});
</script>
<script>
$(".ajax").click(function(){
        var str = $(this).text();
        var url = str.replace(/\s/g, '');
        $.ajax({
        context: this,
        dataType : "html",
        url : "ex/"+url+".html",
        success : function(results) {
              $('#loading').hide();
              $(".cd-section").html(results);
              // var header = $("#container thead").html();
              // $("<tfoot>"+header+"</tfoot>").insertBefore("#container tbody");
            },
        complete: function(){

            }
        });
    });
</script>

</body>
</html>