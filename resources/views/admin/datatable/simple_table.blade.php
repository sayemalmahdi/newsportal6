@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users Details</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->
                    <div class="panel panel-default">
            	<!-- <div class="panel-heading">Users Details</div> -->
            	<div class="panel-body">
            		<table class="table table-bordered table-hover">
            			<thead class="card-header thead-light">
            				<tr>
            					<th>Name</th>
            					<th>Phone</th>
            					<th>User Name</th>
            					<th>Email</th>
            					<th>Created_at</th>
            					<th>Updated_at</th>
            				</tr>
            			</thead>
            			<tbody>
            				@foreach ($users as $row)
            				<tr>
            					<td>{{ $row->name }}</td>
            					<td>{{ $row->phone }}</td>
            					<td>{{ $row->username }}</td>
            					<td>{{ $row->email }}</td>
            					<td>{{ $row->created_at }}</td>
            					<td>{{ $row->updated_at }}</td>
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
