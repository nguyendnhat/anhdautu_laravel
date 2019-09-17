<!DOCTYPE html>
<html id="XenForo" lang="vi-VN" dir="LTR" class="Public LoggedOut NoSidebar  NoResponsive hasJs NoTouch HasDragDrop" xmlns="http://www.w3.org/1999/xhtml">
<head>
@include('site.layout.header')
</head>
<body 
data-spy="scroll" data-target=".navbar-collapse" data-offset="100">
@if(Session('thongbao2'))
			<div class="alert alert-danger show-error">
				
    
    {{Session('thongbao2')}}
    
    
			</div>
			@endif
    <!-- <div class="loading">
    		<div class="table">
    			<div class="inner">
    				<h5>LOADING</h5>
    				<svg class="spinner" width="26px" height="26px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
    				<circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    				</svg> </div>
    		</div>
<script>
  (function() {
    var cx = '008429029597746889198:d2c0xmu-vpg';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
    	</div> -->
	<div class="transition-overlay"></div>
@yield('menu')
@yield('content')
        <!--Footer Start-->
@include('site.layout.footer')


</body>

</html>