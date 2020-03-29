@extends('admin.master')

@section('title',"Test-Dashboard")

@section('dashboardContent')
<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$452</strong></h5>
                      <span>Total Revenue</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$1019</strong></h5>
                      <span>Online Revenue</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-money user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$1012</strong></h5>
                      <span>Expenses</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$450</strong></h5>
                      <span>Expenditure</span>
                    </div>
                </div>
        	 </div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1450</strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>











<!-- Carousel Slider START -->
<!-- <div class="charts">		
			<div class="mid-content-top charts-grids">
				<div class="middle-content">
						<h4 class="title">Carousel Slider</h4>
					
					<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{ asset('public/admin/backend/images') }}/slider1.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{ asset('public/admin/backend/images') }}/slider2.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{ asset('public/admin/backend/images') }}/slider3.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{ asset('public/admin/backend/images') }}/slider4.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{ asset('public/admin/backend/images') }}/slider5.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{ asset('public/admin/backend/images') }}/slider6.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{ asset('public/admin/backend/images') }}/slider7.jpg" alt="name">
						</div>
						
					</div>
				</div>
					
			</div>
		</div> -->
<!-- Carousel Slider End -->

	</div>
</div>

@endsection