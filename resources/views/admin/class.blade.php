@extends('admin.master')

@section('title', 'Create New Class')

@section('content')

<form action="{{route('classes.save-add')}}" method="post" >
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text"
		 name="name"
		  class="form-control">
	</div>
		<div class="form-group">
		<label for="teacher_name">teacher_Name</label>
		<input type="text"
		 name="name"
		  class="form-control">
	</div>
	<div class="form-group">
		<select name="major"
		class="form-group">
			<option value="CNTT">Công nghệ thông tin </option>
			<option value="DPT">Công nghệ thông tin </option>
			<option value="MKT">Công nghệ thông tin </option>
			<option value="UD">Công nghệ thông tin </option>
		</select>
	</div>
	<div class="form-group">
		<label for="max_student">Max Student</label>
		<input type="number"
		class="form-control"
		name="max_student" 
		/>
	</div>
	<div>
		<button type="submit"
		class="btn btn_submit">
			Create Class
		</button>
	</div>
</form>
@include('admin.class_detail')
@endsection