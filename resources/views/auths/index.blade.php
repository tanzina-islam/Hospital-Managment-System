@extends('auths.layout')

@section('content')

<div class="text-center">

	<h1> Patients Profiles </h1>

	<br>
	<!--<a class="btn btn-primary"href="{{ route('auths.create') }}"> Registered Patients </a>-->

	<br>
	<hr>

	<table class="table table-striped table-dark" style="text-align: center;" border="2" width="1000">
		<tr>
			<th> Patient Name </th>	
			<th> Age </th>
			<th> Occupation </th>
			<th> Patients Address </th>
			<th> Contact Number </th>
			<th> Nationality </th>
			<th> Religion </th>
			<th> Guardian </th>
			<th> Guardian Occupation </th>
			<th> Action </th>
		</tr>

		@foreach ($auths as $auth)
		<tr> 
			<td>{{$auth->patients_name}} </td>
			<td>{{$auth->age}} </td>
			<td>{{$auth->occupation}} </td>
			<td>{{$auth->patients_address}}</td>
			<td>{{$auth->patients_contact_number}} </td>
			<td>{{$auth->nationality}} </td>
			<td>{{$auth->religion}} </td>
			<td>{{$auth->guardian}} </td>
			<td>{{$auth->guardian_occupation}} </td>
			<td>
				<form action="{{ route('auths.destroy', $auth->id)}}" method="POST">
					<a class="btn btn-primary" href="{{route('auths.show', $auth->id)}}">Show</a>
					<a class="btn btn-success" href="{{route('auths.edit', $auth->id)}}"> Edit </a>					
					@csrf
                    @method('DELETE') 

					<button class="btn btn-danger" type="submit" > Delete </button>
				</form>
			</td>
		</tr>
		@endforeach 

	</table>

<div class="row" style="text-align:center;margin-top:15px;margin-bottom:15px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('/dashboard') }}">Back To Dashboard</a>
        </div>
    </div>
</div>
	
</div>