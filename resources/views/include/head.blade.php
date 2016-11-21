<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="resources/default/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine"/>
<script type='text/javascript' src="resources/default/js/jquery-1.11.1.min.js"></script>
<link href="resources/default/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'/>
<link href="{{ asset('public/default/css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="resources/default/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="resources/default/css/etalage.css" rel="stylesheet" type="text/css" media="all" />
<link href="resources/default/css/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="resources/default/js/megamenu.js"></script>
<script>$(document).ready(function () {
        $(".megamenu").megamenu();
    });</script>
<script src="resources/default/js/simpleCart.min.js"></script>
<script src="resources/default/js/responsiveslides.min.js"></script>
<script>
    $(function () {
        // Slideshow 1
        $("#slider1").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks"
        });
    });
</script>
<script src="resources/default/js/jquery.etalage.min.js"></script>
<script>
    $(document).ready(function ($) {

        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 400,
            source_image_width: 900,
            source_image_height: 1200,
            show_hint: true,
            click_callback: function (image_anchor, instance_id) {
                alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
            }
        });

    });
</script>
