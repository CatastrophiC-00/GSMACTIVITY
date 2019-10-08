@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/home/subjects/{{ $subject->id }}/update">
			@csrf
		  <div class="form-group">
		    <label for="subjectname">Subject Name</label>
		    <input type="text" class="form-control" name='name' value='{{ $subject->name }}'>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection