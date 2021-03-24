@extends('auths.layout')

@section('content')

<div class="text-center">

	<h1> Doctors Profiles </h1>

	<br>
	<!--<a class="btn btn-primary" href="{{ route('dcts.create') }}"> Registered Doctor </a>-->

	<br>
	<br>

	<table class="table table-striped table-dark"  border="2" width="800">
		<tr>
			<th> Doctor Name </th>	
			<th> Role </th>
			<th> Doctor Contact Number </th>
			<th>Actions</th>
		</tr>

		@foreach ($dcts as $dct)
		<tr> 
			<td>{{$dct->doctor_name}} </td>
			<td>{{$dct->role}} </td>
			<td>{{$dct->doctor_contact_number}} </td>
			
			<td>
				<form action="{{ route('dcts.destroy', $dct->id)}}" method="POST">
					<a class="btn btn-primary" href="{{route('dcts.show', $dct->id)}}">Show</a>
					<a class="btn btn-success" href="{{route('dcts.edit', $dct->id)}}"> Edit </a>					
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