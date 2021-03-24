@extends('auths.layout')

@section('content')
@if ($errors->any())
    <div>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


	<div style="text-align: center;">
	<form action="{{route('dcts.update',$dct->id) }}" method="POST">
 	 	@csrf
 	 	@method('PUT')
 	 	<div calss="row" style="text-align:center;background:#fff2e6;"> 

 	 <div>
 	 	 <strong>Doctor Name:</strong><br>
		 <input type="text" name="doctor_name" placeholder="Doctor Name"
		value="{{$dct->doctor_name}}">
		</div>
		<div>
 	 	<strong>Role:</strong><br>
		<input type="text" name="role" placeholder="Role" 
		value="{{$dct->role}}"> 
		</div>
		<div>
 	 	 <strong>Doctor Contact Number:</strong><br>
		 <input type="text" name="doctor_contact_number" placeholder="Doctor Contact Number"
		 value="{{$dct->doctor_contact_number}}">
		</div><br> 
		<button class="btn btn-warning" type="submit" >Update</button>

	</form>
  </div>

