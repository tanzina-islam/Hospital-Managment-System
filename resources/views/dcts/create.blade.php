
@extends('auths.layout')

@section('content')
@if ($errors->any())
    <div  >
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div style="background-image: url('https://image.freepik.com/free-photo/doctor-s-stethoscope-with-blue-background_23-2147652363.jpg');


 padding-bottom: 10px;padding-top:10px;color:black;"
        class="relative flex items-top justify-center min-h-screen bg-gray-100 ">
<div style="text-align:center;">
	<form action="{{route('dcts.store')}}" method="POST">
 	 	@csrf
 	 	

		<div>
 	 	 <strong>Doctor Name:</strong><br>
		 <input type="text" name="doctor_name" placeholder="Doctor Name">
		</div>
		<div>
 	 	<strong>Role:</strong><br>
		<input type="text" name="role" placeholder="Role" >
		</div>
		<div>
 	 	 <strong>Doctor Contact Number:</strong><br>
		 <input type="text" name="doctor_contact_number" placeholder="Doctor Contact Number">
		</div><br><br>
		<button class="btn btn-primary" type="submit" >Register</button>

		</form>
</div>
