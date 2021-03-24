@extends('auths.layout')

@section('content')
<div class='row' style="text-align:center;margin-top:15px;margin-bottom:15px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Information</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('auths.index')}}">Back</a>
        </div>
    </div>
</div>
<div calss="row" style="text-align:center;background:#cce6ff;"> 
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Patient Name<br></strong>
           {{$auth->patients_name}}
        </div>
    </div>
     <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Age<br></strong>
            {{$auth->age}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Occupation:<br></strong>
            {{$auth->occupation}}
        </div>
    </div>
     <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Patients Address:<br></strong>
            {{$auth->patients_address}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contact Number <br></strong>
            {{$auth ->patients_contact_number}}
        </div>
    </div>
   
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nationality<br></strong>
            {{$auth->nationality}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Religion<br></strong>
            {{$auth->religion}}
        </div>
    </div>
    
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Guardian<br></strong>
            {{$auth->guardian}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Guardian Occupation<br></strong>
            {{$auth->guardian_occupation}}
        </div>
    </div>
    
</div>
@endsection