<!DOCTYPE html>

@extends('layouts.app')

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Cold Beverages Index</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	</head>
	<body>
		@section('content')
		<div class="container mt-2">
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Index Cold Beverages</h2>
					</div>
				</div>
			</div>

			<table class="table table-bordered">
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Address</th>
					<th>Phonenumber</th>
					<th>Email</th>
					<th>Date of birth</th>
					<th>Nationality</th>
					<th>Linkedin</th>
					<th width="280px">Action</th>
				</tr>

			</table>
		</div>
		@endsection		
	</body>
</html>