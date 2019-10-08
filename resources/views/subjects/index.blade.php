@extends('layouts.master')
@extends('layouts.nav')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Subject Name</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subjects as $subject)
					<tr>
						<td>{{ $subject->id }}</td>
						<td>{{ $subject->name }}</td>
						<td><a href="/home/subjects/{{$subject->id}}/edit">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/home/subjects/add'>Add New Subject</a>
	</div>
@endsection