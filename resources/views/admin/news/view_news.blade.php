@extends('admin.master')

@section('title',"VIEW-NEWS")

@section('dashboardContent')
<!-- <link rel="stylesheet" href="{{asset('public/admin/backend/css/starlight.css') }}"> -->


<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous"> -->

<link rel="stylesheet" href="{{ asset('public/admin/backend/css') }}/bootstrap-tagsinput.css" crossorigin="anonymous">


<div class="card pd-20 pd-sm-40">
<div id="page-wrapper" style="height: 1600px;">
<div class="main-page">
  <div class="col-md-5 col-md-offset-3">
    <h6 class="card-body-title">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      Add News
      <a href="{{ route('admin.all.news') }}" class="btn btn-sm btn-warning" style="float:right;" >All News</a>
    </h6>
  </div>

<!-- <div class="col-md-8 col-md-offset-2"> -->
	<div class="col-md-12">
		<div class="col-md-10 col-md-offset-1">
			<div class="form-three widget-shadow">

				<div class="form-layout"><br>
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group" style="border: 1px solid #f1f1f1; padding: 10px;">
                  <label class="form-control-label">Category Name : <span class="tx-danger"></span></label>
                  <strong>{{ $news->category_name }}</strong>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group" style="border: 1px solid #f1f1f1; padding: 10px;">
                  <label class="form-control-label">Sub-Category : <span class="tx-danger"></span></label>
                  <strong>{{ $news->subcategory_name }}</strong>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group" style="border: 1px solid #f1f1f1; padding: 10px;">
                  <label class="form-control-label">District Name : <span class="tx-danger"></span></label>
                  <strong>{{ $news->district_name }}</strong>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group" style="border: 1px solid #f1f1f1; padding: 10px;">
                  <label class="form-control-label">Sub-District Name : <span class="tx-danger"></span></label>
                  <strong>{{ $news->subdistrict_name }}</strong>
                </div>
              </div>
              
             
             
         	<div class="col-lg-6">
                <div class="form-group" style="border: 1px solid #f1f1f1; padding: 10px;">
                  <label class="form-control-label">Tags : <span class="tx-danger"></span></label>
                  <strong>{{ $news->tags }}</strong>
                </div>
              </div><!-- col-4 -->
              

              <div class="col-lg-12">
                <div class="form-group" style="border: 1px solid #f1f1f1; padding: 10px;">
                  <label class="form-control-label">Title : <span class="tx-danger"></span></label>
                  <strong>{{ $news->title }}</strong>
                </div>
              </div><!-- col-4 -->


             
             

              <div class="col-lg-12">
                <div class="form-group" style="border: 1px solid #f1f1f1; padding: 10px;">
                  <label class="form-control-label">News Details : <span class="tx-danger"></span></label>
                    <br>
                  <strong>{!! $news->details !!}</strong>
                </div>  
              </div>
              <div class="col-lg-12">
                <div class="form-group" style="border: 1px solid #f1f1f1; padding: 10px;">
                  <label class="form-control-label">Video Link : <span class="tx-danger"></span></label>
                   <!-- <strong>{{ $news->video_link }}</strong> -->
                   <strong><a href="{{ $news->video_link }}">{{ $news->video_link }}</a></strong>
                </div>  
              </div>

              <div class="col-lg-4">
                <div class="form-group" >
                  <lebel><!-- Image --> <span class="tx-danger"></span></lebel>
                    <label class="custom-file">
                      <img src="{{ URL::to($news->image_one) }}" style="height: 100%; width: 100%;">
                    </label>
                    <br><br><br>
                </div>
              </div>
              
              
            </div><!-- row -->
            <hr>
            <div class="row">
              <div class="col-lg-4">
                <label class="">
              @if($news->top_section == 1)
                &nbsp;&nbsp;<span class="badge badge-success">Active</span> |
              @else
                &nbsp;&nbsp;<span class="badge badge-danger">Inactive</span> |
              @endif
              <span>Top Section</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="">
            @if($news->big_thumbnail == 1)
                &nbsp;&nbsp;<span class="badge badge-success">Active</span> |
              @else
                &nbsp;&nbsp;<span class="badge badge-danger">Inactive</span> |
              @endif
            <span>Big Thumbnail</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="">
            @if($news->small_thumbnail == 1)
                &nbsp;&nbsp;<span class="badge badge-success">Active</span> |
              @else
                &nbsp;&nbsp;<span class="badge badge-danger">Inactive</span> |
              @endif
            <span>Small Thumbnail</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="">
            @if($news->notice == 1)
                &nbsp;&nbsp;<span class="badge badge-success">Active</span> |
              @else
                &nbsp;&nbsp;<span class="badge badge-danger">Inactive</span> |
              @endif
            <span>Notice</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="">
	            	@if($news->published == 1)
	                	&nbsp;&nbsp;<span class="badge badge-success">Active</span> |
	              	@else
	                	&nbsp;&nbsp;<span class="badge badge-danger">Inactive</span> |
	              	@endif
           		<span>Published</span>
          		</label>
              </div>
              


            </div>
            <hr>
            <br><br>
            
          </div>

						

					


							


							






		  				











  							







  							
							
								


										

								

								

							
								

					
			</div>
		</div>
	</div>
</div>
</div>
</div>















@endsection