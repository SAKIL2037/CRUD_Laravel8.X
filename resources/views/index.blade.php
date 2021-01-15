@extends('master')
@section('title')
Home Page
@endsection
@section('content')

    	<div class="row my-4">
    		<div class="col ml-4 mr-4">
    			
				 <table class="table table-bordered">
				  <thead>
				    <tr class="table-active">
				      <th scope="col">SL</th>
				      <th scope="col">Registration ID</th>
				      <th scope="col">Name</th>
				      <th scope="col">Department</th>
				      <th scope="col">Information</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@php 
				  	$i = 0;
				  	@endphp
				  	@foreach ($students as $student)
				  	@php 
				  	$i++;
				  	@endphp
				    <tr>
				      <td>{{ $i }}</td>
				      <td>{{ $student->registration_id }}</td>
				      <td>{{ $student->name }}</td>
				      <td>{{ $student->department }}</td>
				      <td>{{ $student->info }}</td>
				      <td>
				      	<a href="/edit/{{$student->id}}" class="btn btn-primary" title="">Edit</a>
				      	<a href="/delete/{{$student->id}}" class="btn btn-danger" title="">Delete</a>
				      	
				      </td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
    		</div>
    	</div>





@endsection   