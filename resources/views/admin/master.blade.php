<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<!-- <title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title> -->
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>




<!-- Bootstrap Core CSS -->
<link href="{{ asset('public/admin/backend/css') }}/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="{{ asset('public/admin/backend/css') }}/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="{{ asset('public/admin/backend/css') }}/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href="{{ asset('public/admin/backend/css') }}/SidebarNav.min.css" media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="{{ asset('public/admin/backend/js') }}/jquery-1.11.1.min.js"></script>
<script src="{{ asset('public/admin/backend/js') }}/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="{{ asset('public/admin/backend/js') }}/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="{{ asset('public/admin/backend/js') }}/metisMenu.min.js"></script>
<script src="{{ asset('public/admin/backend/js') }}/custom.js"></script>
<link href="{{ asset('public/admin/backend/css') }}/custom.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">





<link href="{{asset('public/admin/backend/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">





<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="{{ asset('public/admin/backend/js') }}/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="{{ asset('public/admin/backend/css') }}/owl.carousel.css" rel="stylesheet">
					<script src="{{ asset('public/admin/backend/js') }}/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	

	@include('admin.inc.header-left')

	@include('admin.inc.header-top')
		
		
	@yield('dashboardContent')
    
    @yield('dashboardContentExtra')



	@include('admin.inc.footer')


	
	</div>
		
	
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="{{ asset('public/admin/backend/js') }}/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<!--scrolling js-->
	<script src="{{ asset('public/admin/backend/js') }}/jquery.nicescroll.js"></script>
	<script src="{{ asset('public/admin/backend/js') }}/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src="{{ asset('public/admin/backend/js') }}/SidebarNav.min.js" type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->

	<!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('public/admin/backend/js') }}/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->





<script src="{{asset('public/admin/backend/lib/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{asset('public/admin/backend/lib/medium-editor/medium-editor.js') }}"></script>

    <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>
    <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote1').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>







<!-- Sweetalert -->

    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
    <script>
        @if(Session::has('message'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('message') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('message') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
          }
        @endif
     </script>  

     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>
<!--End Sweetalert -->

</body>
</html>