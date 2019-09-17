  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trang quản trị</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <base href="{{asset('')}}">
  <!-- Bootstrap 3.3.6 -->
  <link type="image/x-icon" href="admin_asset/images/user.png" rel="SHORTCUT ICON"/>
  <link rel="stylesheet" href="admin_asset/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- <link rel="stylesheet" href="admin_asset/dist/css/fontawesome.min.css">
  Ionicons
  <link rel="stylesheet" href="admin_asset/dist/css/ionicons.min.css"> -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="admin_asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_asset/dist/css/AdminLTE.css">
  <link href="http://vjs.zencdn.net/5.11.7/video-js.css" rel="stylesheet">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="admin_asset/dist/css/skins/_all-skins.min.css">
  @yield('css')
  <script type="text/javascript">
  var base_url  = '{{asset('')}}';
</script>
  <script src="admin_asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="admin_asset/ckeditor/ckeditor.js" ></script>
  <script src="admin_asset/ckfinder/ckfinder.js" ></script>
  <script type="text/javascript">
      $(document).ready(function () {
        //giu class menu trai
        $(".sidebar ul.sidebar-menu li a").click(function () {
          $this=$(this).parent();
        var id = $this.attr("id");

        $('#' + id).siblings().find(".active").removeClass("active");
            //                       ^ you forgot this
        $('#' + id).addClass("active");
        localStorage.setItem("selectedolditem", id);
    });

    var selectedolditem = localStorage.getItem('selectedolditem');

    if (selectedolditem != null) {
        $('#' + selectedolditem).siblings().find(".active").removeClass("active");
        //                                        ^ you forgot this
        $('#' + selectedolditem).addClass("active");
        $('#' + selectedolditem).parent().parent().addClass("active");
        localStorage.clear();

    }

      //end jquery 1
           
        $(".alert-success").delay(3000).slideUp();
        $("#popupimage").click(function () {
            var finder = new CKFinder();
//           finder.connectorInfo = 'baseurl=slides';
      finder.language = 'vi';
      finder.resourceType= 'Images';
            finder.selectActionFunction = function (fileUrl) {
              $("#my_image").attr("src",fileUrl);
              $("#image").val(fileUrl);
            };
            finder.popup();
        });
        $("#popupimage1").click(function () {
            var finder = new CKFinder();
//           finder.connectorInfo = 'baseurl=slides';
      finder.language = 'vi';
      finder.resourceType= 'Images';
            finder.selectActionFunction = function (fileUrl) {
              $("#my_image1").attr("src",fileUrl);
              $("#image1").val(fileUrl);
            };
            finder.popup();
        });
        $("#popupimage2").click(function () {
            var finder = new CKFinder();
//           finder.connectorInfo = 'baseurl=slides';
      finder.language = 'vi';
      finder.resourceType= 'Images';
            finder.selectActionFunction = function (fileUrl) {
              $("#my_image2").attr("src",fileUrl);
              $("#image2").val(fileUrl);
            };
            finder.popup();
        });
        $("#popupimage3").click(function () {
            var finder = new CKFinder();
//           finder.connectorInfo = 'baseurl=slides';
      finder.language = 'vi';
      finder.resourceType= 'Images';
            finder.selectActionFunction = function (fileUrl) {
              $("#my_image3").attr("src",fileUrl);
              $("#image3").val(fileUrl);
            };
            finder.popup();
        });
        $("#popupimage4").click(function () {
            var finder = new CKFinder();
//           finder.connectorInfo = 'baseurl=slides';
      finder.language = 'vi';
      finder.resourceType= 'Images';
            finder.selectActionFunction = function (fileUrl) {
              $("#my_image4").attr("src",fileUrl);
              $("#image4").val(fileUrl);
            };
            finder.popup();
        });
        $("#popupimage5").click(function () {
            var finder = new CKFinder();
//           finder.connectorInfo = 'baseurl=slides';
      finder.language = 'vi';
      finder.resourceType= 'Images';
            finder.selectActionFunction = function (fileUrl) {
              $("#my_image5").attr("src",fileUrl);
              $("#image5").val(fileUrl);
            };
            finder.popup();
        });
          $("#popupimage6").click(function () {
              var finder = new CKFinder();
//           finder.connectorInfo = 'baseurl=slides';
              finder.language = 'vi';
              finder.resourceType= 'Images';
              finder.selectActionFunction = function (fileUrl) {
                  $("#my_image6").attr("src",fileUrl);
                  $("#image6").val(fileUrl);
              };
              finder.popup();
          });
          $("#popupimage7").click(function () {
              var finder = new CKFinder();
//           finder.connectorInfo = 'baseurl=slides';
              finder.language = 'vi';
              finder.resourceType= 'Images';
              finder.selectActionFunction = function (fileUrl) {
                  $("#my_image7").attr("src",fileUrl);
                  $("#image7").val(fileUrl);
              };
              finder.popup();
          });
    });
 </script>

<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",55852]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>

  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92251910-1', 'auto');
  ga('send', 'pageview');

</script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->