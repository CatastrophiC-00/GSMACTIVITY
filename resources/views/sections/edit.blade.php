@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/home/sections/{{ $section->id }}/update">
			@csrf
		  <div class="form-group">
		    <label for="sectionname">Section Name</label>
		    <input type="text" class="form-control" name='name' value='{{ $section->name }}'>
		  </div>
		   <div class="form-group">
		    <label for="Status">Status</label>
		    <input type="text" class="form-control" name="is_active" value='{{ $section->is_active }}'>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection