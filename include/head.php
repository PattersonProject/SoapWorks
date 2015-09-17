<link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/navigation.css">
        <link rel="stylesheet" type="text/css" href="css/soapworks.css">
        <link rel="shortcut icon" type="image/x-icon" href="http://morpheus.dce.harvard.edu/~mpatters/psw/swfavicon.ico"> <!--favicon-->
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'> <!--Shadows font -->
        <link href='http://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet' type='text/css'> <!-- Boogaloo font -->
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script><!--jquery-->
        
        <script type="text/javascript" src="js/Fancybox/jquery.fancybox.pack.js?v=2.1.5"></script><!--fancybox js-->
        <link rel="stylesheet" type="text/css" href="js/Fancybox/jquery.fancybox.css?v=2.1.5" media="screen"><!--fancybox css-->
        <link rel="stylesheet" href="js/Fancybox/helpers/jquery.fancybox-buttons.css" type="text/css"><!--fancybox helpers-->
        <script type="text/javascript">
            $(document).ready(function() {
                $(".slide").fancybox({
                    beforeShow : function() {
                    var alt = this.element.find('img').attr('alt');
                    this.inner.find('img').attr('alt', alt);
                    this.title = alt;
                    }
                
                });//use alt as slide title
                $("a.fancybox").fancybox({
                    'autoDimensions' : false,
                    'autoSize' : false,
                    'fitToView' : false,
                    'type' : 'iframe',
                    'width' : '80%',
                    'height' : '80%',
                    'autoScale' : true
                });
                
                //iamhere navigation
                var bodyid=$('body').attr('id');
                console.log(bodyid);
                var navid='#nav' + bodyid;
                console.log(navid);
                $(navid).attr('id', 'iamhere');
                
    
 
            });
        </script>