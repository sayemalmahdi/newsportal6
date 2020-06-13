@extends('admin.master')

@section('title',"ADD-NEWS")

@section('dashboardContent')
<!-- <link rel="stylesheet" href="{{asset('public/admin/backend/css/starlight.css') }}"> -->


<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous"> -->

<link rel="stylesheet" href="{{ asset('public/admin/backend/css') }}/bootstrap-tagsinput.css" crossorigin="anonymous">


<div class="card pd-20 pd-sm-40">
<div id="page-wrapper" style="height: 1200px;">
<div class="main-page">
  <div class="col-md-8 col-md-offset-2">
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
      <a href="#" class="btn btn-sm btn-warning" style="float:right;" data-toggle="modal" data-target="#exampleModal">All News</a>
    </h6>
  </div>

<!-- <div class="col-md-8 col-md-offset-2"> -->
	<div class="col-md-12">
	

		<div class="col-md-9 col-md-offset-1">
					<div class="form-three widget-shadow">


							<form class="form-horizontal">
								

								<!-- <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Your help text!</p>
									</div>
								</div> -->

								
								
								<!-- <div class="form-group">
    								
    								<label for="focusedinput" class="col-sm-2 control-label">Testing Input</label>

    								<div class="col-sm-8">
    								<input type="email" class="form-control1" id="exampleFormControlInput1" placeholder="name@example.com">
    								</div>

  								</div> -->



							<div class="form-group">
								<label for="exampleFormControlSelect1" class="col-sm-3 control-label">Category</label>
								<div class="col-sm-5">
										<!-- <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input"> -->
								<select class="form-control-custom" id="exampleFormControlSelect1">
			     				 		<option>1</option>
			      						<option>2</option>
			      						<option>3</option>
			      						<option>4</option>
			      						<option>5</option>
		    						</select>
								</div>
									
							</div>


							<div class="form-group">
								<label for="exampleFormControlSelect1" class="col-sm-3 control-label">Sub-Category</label>
								<div class="col-sm-5">
										<!-- <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input"> -->
								<select class="form-control-custom" id="exampleFormControlSelect1">
			     				 		<option>1</option>
			      						<option>2</option>
			      						<option>3</option>
			      						<option>4</option>
			      						<option>5</option>
		    						</select>
								</div>
									
							</div>



							<div class="form-group">
								<label for="exampleFormControlSelect1" class="col-sm-3 control-label">District</label>
								<div class="col-sm-5">
										<!-- <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input"> -->
								<select class="form-control-custom" id="exampleFormControlSelect1">
			     				 		<option>1</option>
			      						<option>2</option>
			      						<option>3</option>
			      						<option>4</option>
			      						<option>5</option>
		    						</select>
								</div>
									
							</div>


							<div class="form-group">
								<label for="exampleFormControlSelect1" class="col-sm-3 control-label">Sub-District</label>
								<div class="col-sm-5">
										<!-- <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input"> -->
								<select class="form-control-custom" id="exampleFormControlSelect1">
			     				 		<option>1</option>
			      						<option>2</option>
			      						<option>3</option>
			      						<option>4</option>
			      						<option>5</option>
		    						</select>
								</div>
									
							</div>




							<div class="form-group">
    								<!-- <label for="exampleFormControlInput1">Email address</label> -->
    						<label for="focusedinput" class="col-sm-3 control-label">Title</label>

    								<div class="col-sm-8">
    								<input type="text" class="form-control1" id="exampleFormControlInput1" placeholder="Enter the title">
    							</div>

  							</div>




  				<div class="form-group">
    				<!-- <label for="exampleFormControlInput1">Email address</label> -->
    				<label for="focusedinput" class="col-sm-3 control-label">News Details</label>

    					<div class="col-sm-8">
    						<!-- <input type="text" class="form-control1" id="exampleFormControlInput1" placeholder="Enter the title"> -->

    						<textarea class="form-control" id="summernote" name="">
                    
                   			</textarea>
    					</div>
  				</div>







  			<!-- <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote" name="product_details">
                    
                   </textarea>
                </div>  
            </div> -->








  							<div class="form-group">
    								<!-- <label for="exampleFormControlInput1">Email address</label> -->
    						<label for="focusedinput" class="col-sm-3 control-label">Video link</label>

    								<div class="col-sm-8">
    								<input type="text" class="form-control1" id="exampleFormControlInput1" placeholder="Video link">
    							</div>

  							</div>




  							<div class="form-group">
    								<!-- <label for="exampleFormControlInput1">Email address</label> -->
    						<label for="focusedinput" class="col-sm-3 control-label">Tags</label>

    								<div class="col-sm-8">
    								<input type="text" class="form-control1" id="exampleFormControlInput1" placeholder="Tags" data-role="tagsinput">
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
    								</label>
    							</div>

  							</div>








							<!-- From Multiauth Project -->
  							<!-- <div class="col-lg-4">
				                <lebel>Image One (Main Thumbnail) <span class="tx-danger">*</span></lebel>
				                <label class="custom-file">
					                <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);" required="" accept="image">
					                <span class="custom-file-control"></span>
					                <img src="#" id="one" >
				              	</label>
				            </div> -->




  							
								<div class="form-group">
									<label for="checkbox" class="col-sm-3 control-label">Top Section Post</label>
									<div class="col-sm-8">

										<div class="checkbox-inline"><label><input type="checkbox">&nbsp;</label></div>
										
									</div>
								</div>

								<div class="form-group">
									<label for="checkbox" class="col-sm-3 control-label">Big Thumbnail</label>
									<div class="col-sm-8">
										
										<div class="checkbox-inline"><label><input type="checkbox">&nbsp;</label></div>
										
									</div>
								</div>

								<div class="form-group">
									<label for="checkbox" class="col-sm-3 control-label">Small Thumbnail</label>
									<div class="col-sm-8">
										
										<div class="checkbox-inline"><label><input type="checkbox">&nbsp;</label></div>
										
									</div>
								</div>

								<div class="form-group">
									<label for="checkbox" class="col-sm-3 control-label">Notice</label>
									<div class="col-sm-8">
										
										<div class="checkbox-inline"><label><input type="checkbox">&nbsp;</label></div>
										
									</div>
								</div>


								<div class="form-group">
									<label for="checkbox" class="col-sm-3 control-label">Published</label>
									<div class="col-sm-8">
										
										<div class="checkbox-inline"><label><input type="checkbox">&nbsp;</label></div>
										
									</div>
								</div>








								<!-- <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="disabledinput" placeholder="Disabled Input">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" id="inputPassword" placeholder="Password">
									</div>
								</div> 

							
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Checked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
									<div class="col-sm-8">
										<div class="checkbox-inline"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" checked=""> Checked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								




								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
									<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
										<option>Lorem ipsum dolor sit amet.</option>
										<option>Dolore, ab unde modi est!</option>
										<option>Illum, fuga minus sit eaque.</option>
										<option>Consequatur ducimus maiores voluptatum minima.</option>
									</select></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Multiple Select</label>
									<div class="col-sm-8">
										<select multiple="" class="form-control1">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
									<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio</label>
									<div class="col-sm-8">
										<div class="radio block"><label><input type="radio"> Unchecked</label></div>
										<div class="radio block"><label><input type="radio" checked=""> Checked</label></div>
										<div class="radio block"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
										<div class="radio block"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio Inline</label>
									<div class="col-sm-8">
										<div class="radio-inline"><label><input type="radio"> Unchecked</label></div>
										<div class="radio-inline"><label><input type="radio" checked=""> Checked</label></div>
										<div class="radio-inline"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
										<div class="radio-inline"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Small Input">
									</div>
								</div>
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="mediuminput" placeholder="Medium Input">
									</div>
								</div>
								<div class="form-group mb-n">
									<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Large Input">
									</div>
								</div>
								 -->


								

								<br>
								<div class="col-md-4 col-md-offset-1">
									<button type="submit" class="btn btn-primary">Submit</button>
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



@endsection