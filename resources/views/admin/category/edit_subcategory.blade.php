@extends('admin.master')

@section('title',"EDIT-SUB-CATEGORY")

@section('dashboardContent')

<div class="card pd-20 pd-sm-40">
<div id="page-wrapper">
<div class="main-page">
<!-- <div class="table-wrapper"> -->
  <div class="col-md-8 col-md-offset-2">
    <h6 class="card-body-title"><!-- Ediy-Sub-Category Responsive DataTable -->
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <a href="{{ route('admin.sub.categories') }}" class="btn btn-sm btn-warning" style="float:right;">All Sub-Category</a>
    </h6>
  </div>

<div class="card pd-20 pd-sm-40">


    <div style="padding-left: 200px;" class="col-md-8 ">
      <form method="post" action="{{ URL('admin/update/subcategory/'.$subcat->id) }}" >
        @csrf
      <div class="modal-body">
        <!-- Bootstrap Form -->
        
            <div class="form-group">
              <input type="hidden" name="id" value="{{ $subcat->id }}">
              <label for="exampleInputEmail1">Sub-Category Name</label>
              <span><br>&nbsp;</span>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="subcategory_name" value="{{ $subcat->subcategory_name }}">
              <!-- <small id="emailHelp" class="form-text text-muted">Add a unique subcat</small> -->
            </div>


            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <span><br>&nbsp;</span>
              <select class="form-control" name="category_id">
                @foreach($category as $row)
                  <option value="{{ $row->id }}" <?php if ($row->id == $subcat->category_id) {
                    echo "selected";
                  } ?> >
                    {{ $row->category_name }}
                  </option>
                @endforeach
              </select>
              <!-- <small id="emailHelp" class="form-text text-muted">Select Category</small> -->
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