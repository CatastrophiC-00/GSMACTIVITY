@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/home/strands/{{ $strand->id }}/update">
			@csrf
		   <div class="form-group">
		    <label for="Strand Name">Strand Name</label>
		    <input type="text" class="form-control" name="name" value= '{{ $strand->name }}'>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection