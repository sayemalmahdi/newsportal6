@extends('admin.master')

@section('title',"ALL-NEWS")

@section('dashboardContent')



<div class="card pd-20 pd-sm-40">
<div id="page-wrapper"  style="height: 700px;">
<div class="main-page">
<!-- <div class="table-wrapper"> -->
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
      Category Responsive DataTable
      <a href="{{ route('admin.add.news') }}" class="btn btn-sm btn-warning" style="float:right;" >Add New</a>
    </h6>
  </div>

<div class="col-md-12 col-md-offset-0">
	<table class="table table-sm table-dark table table-hover">
	  <thead>
	    <tr>
	      <th class="wd-15p">ID</th>
          <th class="wd-15p" style="text-align: center;">Category Name</th>
          <!-- <th class="wd-15p">Sub-Category Name</th> -->
          <!-- <th class="wd-15p" style="text-align: center;">District Name</th> -->
          <!-- <th class="wd-15p">Sub-District Name</th> -->
          <th class="wd-15p" style="text-align: center;">News Title</th>
          <th class="wd-15p" style="text-align: center;">View</th>
          <th class="wd-20p" style="text-align: center;">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($news as $row)
            <tr>
              <td>{{ $row->id }}</td>
              <td class="col-sm-2" style="text-align: center;">{{ $row->category_name }}</td>
              
          
              <td class="col-sm-6" style="text-align: center;">{{ Str::limit($row->title,60) }}</td>              
              <td class="col-sm-1" style="text-align: center;">0</td> 

              <!-- <td>
                <a href="#" class="btn btn-sm btn-success">View</a>
                <a href="#" class="btn btn-sm btn-info">Edit</a>
                <a href="#" class="btn btn-sm btn-danger" id="delete">Delete</a>
              </td> -->
              
              <td class="col-sm-3" style="text-align: center;">
                    <a href="#" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="{{ URL::to('admin/delete/news/'.$row->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                    <a href="{{ URL::to('admin/view/news/'.$row->id) }}" class="btn btn-sm btn-warning" title="View"><i class="fa fa-eye"></i></a>

                    @if($row->published == 1)
                      <a href="{{ URL::to('admin/inactive/news/'.$row->id) }}" class="btn btn-sm btn-success" title="Active"><i class="fa fa-thumbs-up"></i></a>
                    @else
                      <a href="{{ URL::to('admin/active/news/'.$row->id) }}" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                    @endif
                    
              </td>

            </tr>  
        @endforeach       
	  </tbody>
	</table>

        <div class="col-md-8 col-md-offset-2">
              {{ $news->links() }}  
        </div>

</div>
<!-- </div> -->


</div>
</div>
</div>







@endsection