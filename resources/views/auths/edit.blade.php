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
 
<div>
	<div style="text-align: center;">
	<form action="{{route('auths.update',$auth->id) }}" method="POST">
 	 	@csrf
 	 	@method('PUT')
 <div calss="row" style="text-align:center;background:#fff2e6;"> 

 	 <div>
		<strong>Patient Name:</strong><br>
		 <input type="text" name="patients_name" placeholder="Patient Name"
		value="{{$auth->patients_name}}">
	</div>
	<div>
		 <strong>Age:</strong><br>
		<input type="text" name="age" placeholder="Age"
		value="{{$auth->age}}"> 
	</div>
	 <div>
		 <strong>Occupation:</strong><br>
		 <input type="text" name="occupation" placeholder="Occupation" 
		value="{{$auth->occupation}}">
	</div>
	<div>
		 <strong>Patients Address:</strong><br>
		 <input type="text" name="patients_address" placeholder="Patients Address" 
		value="{{$auth->patients_address}}">
	</div>
	<div>
 	 	 <strong>Contact Number:</strong><br>
		<input type="text" name="patients_contact_number" placeholder="Contact Number" 
		 value="{{$auth ->patients_contact_number}}">
    </div>
   
	
	<div>
		 <strong>Nationality:</strong><br>
		 <input type="text" name="nationality" placeholder="Nationality"
		value="{{$auth->nationality}}">
	</div>
	<div>
		  <strong>Religion:</strong><br>
		  <input type="text" name="religion" placeholder="Religion" 
		value="{{$auth->religion}}">
	</div>
	<div>
		 <strong>Guardian:</strong><br>
		  <input type="text" name="guardian" placeholder="Guardian"
		value="{{$auth->guardian}}"> 
	</div>
	<div>
 	 	 <strong>Guardian Occupation:</strong><br>
		  <input type="text" name="guardian_occupation" placeholder="Guardian Occupation"	
		value="{{$auth->guardian_occupation}}"> 
	</div><br> 
		<button class="btn btn-warning" type="submit" >Update</button>

	</form>
  </div>
</div>