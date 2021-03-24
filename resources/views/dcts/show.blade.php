@extends('auths.layout')

@section('content')

<div class='row' style="text-align:center;margin-top:15px;margin-bottom:15px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Information</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('dcts.index')}}">Back</a>
        </div>
    </div>
</div>
<div calss="row" style="text-align:center;background:#cce6ff;"> 
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Doctor Name<br></strong>
           {{$dct->doctor_name}}
        </div>
    </div>
     <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role<br></strong>
            {{$dct->role}}
        </div>
    </div>
   
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Doctor Contact Number <br></strong>
            {{$dct ->doctor_contact_number}}
        </div>
    </div>
   
</div>
@endsection