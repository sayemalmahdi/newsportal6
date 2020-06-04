@extends('admin.master')

@section('title',"ALL-DISTRICT")

@section('dashboardContent')
<div class="card pd-20 pd-sm-40">
<div id="page-wrapper">
<div class="main-page">
<!-- <div class="table-wrapper"> -->
  <div class="col-md-8 col-md-offset-2">
    <h6 class="card-body-title"><!-- District Responsive DataTable -->
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <a href="#" class="btn btn-sm btn-warning" style="float:right;" data-toggle="modal" data-target="#exampleModal">Add New</a>
    </h6>
  </div>

<div class="col-md-8 col-md-offset-2">
	<table class="table table-sm table-dark">
	  <thead>
	    <tr>
	      <th class="wd-15p">ID</th>
	      <th class="wd-15p">Sub-District Name</th>
          <th class="wd-15p">District Name</th>
          <th class="wd-20p">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($subdist as $row)
            <tr>
              <td>{{ $row->id }}</td>
              <td>{{ $row->subdistrict_name }}</td>
              <td>{{ $row->district_name }}</td>
              
              <td>
                <a href="{{ URL::to('admin/edit/district/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                <a href="{{ URL::to('admin/delete/district/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
              </td>
            </tr>  
            @endforeach       
	  </tbody>
	</table>
</div>
<!-- </div> -->
</div>
</div>
</div>







<!-- Modal Start-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="top:10%;left:4%;outline: none;overflow:hidden;">
    <div class="modal-content" style="width: 84%;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <span>
        <h3 style="color: darkorange;text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add New Sub-District&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
      </span>
      <!-- @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif -->
      <form method="post" action="{{ route('admin.store.subdist') }}" >
        @csrf
      <div class="modal-body">
        <!-- Bootstrap Form -->
        
           <div class="form-group">
              <label for="exampleInputEmail1">Sub-District Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="subdistrict_name">
              <small id="emailHelp" class="form-text text-muted">Add a unique Sub-District</small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">District Name</label>
              <select class="form-control" name="district_id">
                @foreach($district as $row)
                  <option value="{{ $row->id }}">
                    {{ $row->district_name }}
                  </option>
                @endforeach
              </select>
              <small id="emailHelp" class="form-text text-muted">Select District</small>
            </div>
        
        <!-- End Bootstrap Form -->
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Start-->


@endsection