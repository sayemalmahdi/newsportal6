@extends('layouts.app')

@section('styles')
<!-- online link start -->
<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
<!-- online link end-->
	
    <link href="{{asset('public/admin/backend/datatables/jquery.dataTables.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users Details</div>
                <div class="card-body">
                    <div class="panel panel-default">
            	<div class="panel-body">
            		<table class="table table-bordered table-hover" id="datatable">
            			<thead class="card-header thead-light">
            				<tr>
            					<th>ID</th>
                                <th>Name</th>
            					<th>Phone</th>
            					<th>User_name</th>
            					<th>Email</th>
            					<th>Created_at</th>
            					<th>Updated_at</th>
                                <th>Action</th>
            				</tr>
            			</thead>
            			<tbody>
            				@foreach ($users as $row)
            				<tr>
            					<td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
            					<td>{{ $row->phone }}</td>
            					<td>{{ $row->username }}</td>
            					<td>{{ $row->email }}</td>
            					<td>{{ $row->created_at }}</td>
            					<td>{{ $row->updated_at }}</td>
                                <td>
                                    <a href="{{ URL::to('admin/edit/user/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{ URL::to('admin/delete/user/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                </td>
            				</tr>
            				@endforeach
            			</tbody>
            		</table>
            	</div>
            	
            </div>
          </div>
       </div>
    </div>
    </div>
</div>
@endsection

@section('javascripts')


<!-- online link start -->
<!-- <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
<!-- online link end-->
	
    <script src="{{asset('public/admin/backend/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/admin/backend/datatables-responsive/dataTables.responsive.js')}}"></script>
	<script>
		$(document).ready( function () {
    	   $('#datatable').DataTable();
	   } );
	</script>
    
@endsection
