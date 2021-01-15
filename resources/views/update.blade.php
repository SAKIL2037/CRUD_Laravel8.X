@extends('master')


@section('title')
Update Student
@endsection


@section('content')

    	<div class="row my-4">
    		<div class="col">
    			
				<form class="ml-4 mr-4" action="/update/{{$student->id}}'}}" method="post">
					{{ csrf_field() }}
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Registration ID</label>
				    <div class="col-sm-10">
				      <input type="number" value="{{ $student->registration_id }}" name="registration_id" class="form-control" id="registration_id" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text" value="{{ $student -> name }}"  class="form-control" id="name" name="name" required>
				    </div>
				  </div>
				 <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Department Name</label>
				    <div class="col-sm-10">
				      <input type="text" value="{{ $student->department }}"  class="form-control" id="department_name" name="department_name" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="inputPassword3" class="col-sm-2 col-form-label">Information</label>
				    <div class="col-sm-10">
			
				      <textarea class="form-control" id="info" name="info">{{ $student->info }}</textarea>
				    </div>
				  </div>
				 
				  <div class="form-group row">
				    <div class="col-sm-10 text-center my-4">
				      <button type="submit" class="btn btn-primary" >Update</button>
				    </div>
				  </div>
				</form>
    		</div>
    	</div>

@endsection   