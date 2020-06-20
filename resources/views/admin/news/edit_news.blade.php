@extends('admin.master')

@section('title',"EDIT-NEWS")

@section('dashboardContent')

@php
  $category=DB::table('categories')->get();
  $subcategory=DB::table('subcategories')->get();
  $district=DB::table('districts')->get();
  $subdistrict=DB::table('subdistricts')->get();
@endphp


<!-- <link rel="stylesheet" href="{{asset('public/admin/backend/css/starlight.css') }}"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous"> -->

<link rel="stylesheet" href="{{ asset('public/admin/backend/css') }}/bootstrap-tagsinput.css" crossorigin="anonymous">


<div class="card pd-20 pd-sm-40">
<div id="page-wrapper" style="height: 1300px;">
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
	

		<div class="col-md-9 col-md-offset-1">
					<div class="form-three widget-shadow">

						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            					@csrf

							<div class="form-group">
								<label for="exampleFormControlSelect1" class="col-sm-3 control-label">Category</label>
								<div class="col-sm-5">
										<!-- <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input"> -->
									<select class="form-control-custom" id="exampleFormControlSelect1" name="cat_id" data-placeholder="Choose Category">
										<option label="Choose Category"></option>
										@foreach($category as $row)
				     				 		<option value="{{ $row->id }}" <?php if ($news->cat_id == $row->id) {
						                      echo "selected";
						                    } ?>>{{ $row->category_name }}</option>
				      					@endforeach
		    						</select>
								</div>
									
							</div>


							<div class="form-group">
								<label for="exampleFormControlSelect1" class="col-sm-3 control-label">Sub-Category</label>
								<div class="col-sm-5">
										<!-- <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input"> -->
								<select class="form-control-custom" id="exampleFormControlSelect1" name="subcat_id">
			     				 	@foreach($subcategory as $row)
					                      <option value="{{ $row->id }}" <?php if ($news->subcat_id == $row->id) {
					                      echo "selected";
					                    } ?> >{{ $row->subcategory_name }}</option>
					                @endforeach()
		    					</select>
								</div>
									
							</div>



							<div class="form-group">
								<label for="exampleFormControlSelect1" class="col-sm-3 control-label">District</label>
								<div class="col-sm-5">
										<!-- <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input"> -->
									<select class="form-control-custom" id="exampleFormControlSelect1" name="dist_id">
										<option label="Choose Category"></option>
										@foreach($district as $row)
				     				 		<option value="{{ $row->id }}"<?php if ($news->dist_id == $row->id) {
						                      echo "selected";
						                    } ?>>{{ $row->district_name }}</option>	
				     				 	@endforeach		      						
			    					</select>
								</div>
									
							</div>


							<div class="form-group">
								<label for="exampleFormControlSelect1" class="col-sm-3 control-label">Sub-District</label>
								<div class="col-sm-5">
										<!-- <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input"> -->
									<select class="form-control-custom" id="exampleFormControlSelect1" name="subdist_id">
				     				 	@foreach($subdistrict as $row)
					                      <option value="{{ $row->id }}" <?php if ($news->subdist_id == $row->id) {
					                      echo "selected";
					                    } ?> >{{ $row->subdistrict_name }}</option>
					                    @endforeach()
			    					</select>
								</div>
									
							</div>




							<div class="form-group">
    								<!-- <label for="exampleFormControlInput1">Email address</label> -->
    						<label for="focusedinput" class="col-sm-3 control-label">Title</label>

    								<div class="col-sm-8">
    								<input type="text" class="form-control1" id="exampleFormControlInput1" placeholder="Enter the title" name="title" value="{{ $news->title }}">
    							</div>

  							</div>




		  				<div class="form-group">
		    				<!-- <label for="exampleFormControlInput1">Email address</label> -->
		    				<label for="focusedinput" class="col-sm-3 control-label">News Details</label>

		    					<div class="col-sm-8">
		    						<!-- <input type="text" class="form-control1" id="exampleFormControlInput1" placeholder="Enter the title"> -->

		    						<textarea class="form-control" id="summernote" name="details">
		                    			{{ $news->details}}
		                   			</textarea>
		    					</div>
		  				</div>




  							<div class="form-group">
    								<!-- <label for="exampleFormControlInput1">Email address</label> -->
    						<label for="focusedinput" class="col-sm-3 control-label">Video link</label>

    								<div class="col-sm-8">
    								<input type="text" class="form-control1" id="exampleFormControlInput1" placeholder="Video link" name="video_link" value="{{ $news->video_link }}">
    							</div>

  							</div>




  							<div class="form-group">
    								<!-- <label for="exampleFormControlInput1">Email address</label> -->
    						<label for="focusedinput" class="col-sm-3 control-label">Tags</label>

    								<div class="col-sm-8">
    								<input type="text" class="form-control1" id="exampleFormControlInput1" placeholder="Tags" data-role="tagsinput" name="tags" value="{{ $news->tags }}">
    							</div>

  							</div>


  							<div class="form-group">
    								<!-- <label for="exampleFormControlInput1">Email address</label> -->
    						<label for="focusedinput" class="col-sm-3 control-label">Image</label>

    							<div class="col-sm-8">
    								<!-- <lebel>Image One (Main Thumbnail) <span class="tx-danger">*</span></lebel> -->
    								<label class="custom-file">
    									<!-- <input type="text" class="form-control1" id="exampleFormControlInput1" placeholder="Enter the title"> -->
    								<input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);" required="" accept="image">
    									<span class="custom-file-control"></span>
    									<input type="hidden" name="old_one" value="{{ $news->image_one }}">
    								<img src="{{ URL::to($news->image_one) }}" style="height: 80px; width: 80px;" id="one" >
    									
    								</label>
    							</div>

  							</div>



  							
								<div class="form-group">
									<label for="checkbox" class="col-sm-3 control-label">Top Section Post</label>
									<div class="col-sm-8">

										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="top_section" value="1" 
													<?php if ($news->top_section == 1) {
										              echo "checked";
										            } 
										            ?>
												>&nbsp;
											</label>
										</div>
										
									</div>
								</div>

								


								<div class="form-group">
									<label for="checkbox" class="col-sm-3 control-label">Big Thumbnail</label>
									<div class="col-sm-8">
										
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="big_thumbnail" value="1"
													<?php if ($news->big_thumbnail == 1) {
										              echo "checked";
										            } 
										            ?>
												>&nbsp;
											</label>
										</div>
										
									</div>
								</div>

								<div class="form-group">
									<label for="checkbox" class="col-sm-3 control-label">Small Thumbnail</label>
									<div class="col-sm-8">
										
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="small_thumbnail" value="1"
													<?php if ($news->small_thumbnail == 1) {
											              echo "checked";
											        } 
											        ?>
										        >&nbsp;
											</label>
										</div>
										
									</div>
								</div>

								<div class="form-group">
									<label for="checkbox" class="col-sm-3 control-label">Notice</label>
									<div class="col-sm-8">
										
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="notice" value="1"
													<?php if ($news->notice == 1) {
											              echo "checked";
											        } 
											        ?>
												>&nbsp;
											</label>
										</div>
										
									</div>
								</div>


								<div class="form-group">
									<label for="checkbox" class="col-sm-3 control-label">Published</label>
									<div class="col-sm-8">
										
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="published" value="1"
													<?php if ($news->published == 1) {
											              echo "checked";
											        } 
											        ?>
												>&nbsp;
											</label>
										</div>
										
									</div>
								</div>

								

								<br>
								<div class="col-md-4 col-md-offset-1">
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
								<br>
								

							</form>
						</div>

						<br>
						<br>
					</div>

	</div>
</div>
</div>
</div>





<!-- For Input Tags field start -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
<!-- For Input Tags field end -->



<!-- subcategory collect by ajax request start -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $('select[name="cat_id"]').on('change', function(){
             var cat_id = $(this).val();
             if(cat_id) {
                 $.ajax({
                     url: "{{  url('/admin/get/subcategory/') }}/"+cat_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        var d =$('select[name="subcat_id"]').empty();
                           $.each(data, function(key, value){

                               $('select[name="subcat_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');

                           });
  
                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });

</script>
<!-- subcategory collect by ajax request end -->




<!-- subdist collect by ajax request start -->

<script type="text/javascript">
    $(document).ready(function() {
         $('select[name="dist_id"]').on('change', function(){
             var dist_id = $(this).val();
             if(dist_id) {
                 $.ajax({
                     url: "{{  url('/admin/get/subdistrict/') }}/"+dist_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        var d =$('select[name="subdist_id"]').empty();
                           $.each(data, function(key, value){

                               $('select[name="subdist_id"]').append('<option value="'+ value.id +'">' + value.subdistrict_name + '</option>');

                           });
  
                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });

</script>
<!-- subdist collect by ajax request end -->



<!-- selected image show by ajax request start -->
<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<!-- selected image show by ajax request end -->
@endsection