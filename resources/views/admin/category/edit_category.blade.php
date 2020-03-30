@extends('admin.master')

@section('title',"EDIT-CATEGORY")

@section('dashboardContent')

<div class="card pd-20 pd-sm-40">
<div id="page-wrapper">
<div class="main-page">
<!-- <div class="table-wrapper"> -->
  <div class="col-md-8 col-md-offset-2">
    <h6 class="card-body-title"><!-- Ediy-Category Responsive DataTable -->
      <a href="{{ route('admin.categories') }}" class="btn btn-sm btn-warning" style="float:right;">All Category</a>
    </h6>
  </div>

<div class="card pd-20 pd-sm-40">


    
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    <div style="padding-left: 200px;" class="col-md-8 ">
      <form method="post" action="{{ URL('admin/update/category/'.$category->id) }}" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <!-- Bootstrap Form -->
        
            <div class="form-group">
              <input type="hidden" name="id" value="{{ $category->id }}">
              <label for="exampleInputEmail1">Category Name</label>
              <span><br>&nbsp;</span>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_name" value="{{ $category->category_name }}">
              <!-- <small id="emailHelp" class="form-text text-muted">Add a unique category</small> -->
            </div>

           
        
        <!-- End Bootstrap Form -->
        </div>


          <div style="padding:0px 0px 220px 190px;">
            <button style="width: 120px;" type="submit" class="btn btn-primary">Update</button>
          </div>
      </form>
    </div>
<!-- End Edit-category form -->


         
        </div>
<!-- </div> -->
</div>
</div>
</div>

@endsection