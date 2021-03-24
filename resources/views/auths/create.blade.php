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

<div style="background-image: url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
 padding-bottom: 10px;padding-top:10px;color:black;"
        class="relative flex items-top justify-center min-h-screen bg-gray-100 ">
<div style="text-align:center; ">
	<form action="{{route('auths.store')}}" method="POST">
 	 	@csrf
 	 	


		<div>
 	 	 <strong>Patient Name:</strong><br>
		 <input type="text" name="patients_name" placeholder="Patient Name">
		</div>
		<div>
 	 	<strong>Age:</strong><br>
		<input type="text" name="age" placeholder="Age" >
		</div>
		<div>
 	 	 <strong>Occupation:</strong><br>
		 <input type="text" name="occupation" placeholder="Occupation">
		</div>
		<div>
		 <strong>Patients Address:</strong><br>
		 <input type="text" name="patients_address" placeholder="Patients Address">
	    </div>
		<div>
 	 	 <strong>Contact Number:</strong><br>
		<input type="text" name="patients_contact_number" placeholder="Contact Number">
		</div>
		
		<div>
 	 	 <strong>Nationality:</strong><br>
		 <input type="text" name="nationality" placeholder="Nationality">

	   </div>
		<div>
 	 	 <strong>Religion:</strong><br>
		  <input type="text" name="religion" placeholder="Religion">
		</div>
		<div>
 	 	 <strong>Guardian:</strong><br>
		  <input type="text" name="guardian" placeholder="Guardian">
		</div>
		<div>
 	 	 <strong>Guardian Occupation:</strong><br>
		  <input type="text" name="guardian_occupation" placeholder="Guardian Occupation">

		</div><br>
		<button class="btn btn-primary" type="submit" >Register</button>

		</form>
	</div>
</div>