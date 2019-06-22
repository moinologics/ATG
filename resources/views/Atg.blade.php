<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ATG - Task 1</title>
	<link rel="stylesheet" href="{{URL::to('/')}}/libs/css/bootstrap.min.css">
</head>
<body>
	<div class="container"><br><br>
		<h2 class="text-center"> ATG Task 1	</h2><br><br>
		@if($errors->any())
			<div class="alert alert-danger col-lg-6 mx-auto">
				<ul>
				   	{{--@foreach ($errors->all() as $error)
				      	<li>{{ $error }}</li>
				  	@endforeach--}}
				  	<li> {{$errors->first()}}</li>
				</ul>
			</div>
		@endif
		@isset($success)
			<div class="alert alert-success col-lg-6 mx-auto">
				{{ $success }}
			</div>
		@endisset
		<form action="{{URL::to('/')}}/store" method="POST">
			<div class="col-lg-6 mx-auto">
				@csrf
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control form-control-sm" value="{{old('name')}}" id="name"><br>
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control form-control-sm" id="newpasswd" value="{{old('email')}}"><br>
				<label for="pin">PinCode</label>
				<input type="number" name="pin" class="form-control form-control-sm" id="pin" value="{{old('pin')}}"><br>
				<div class="text-center">
					<input type="submit" class="btn btn-sm btn-success" value="Submit">	
				</div>
			</div>
		</form><br><br><br>

		<div class="container">
			
			@if(sizeof($persons) > 0)
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Name</td>
							<td>Email</td>
							<td>Pin</td>
						</tr>
					</thead>
					<tbody>				
						@foreach($persons as $person)
							
							<td>
								<tr>{{$person['name']}}</tr>
								<tr>{{$person['email']}}</tr>
								<tr>{{$person['pin']}}</tr>
							</td>

						@endforeach
					</tbody>
				</table>
			@endif
		</div>
	</div>
</body>
</html>