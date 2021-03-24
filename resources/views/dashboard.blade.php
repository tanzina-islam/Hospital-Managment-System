@extends('auths.layout')
<x-app-layout>
    <x-slot name="header">
        <h2 style="text-align:center; font-family: rokkitt" class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to Hospital Management System') }}
        </h2>
    </x-slot>




    <div class="pull-right" style="position:absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">


            <h2 class="text-center">Doctors Sections</h2>
    		<a  class="btn btn-primary"href="{{route('dcts.create')}}" >Registered Doctor</a>
    		<a  class="btn btn-success"href="http://127.0.0.1:8000/dcts" >Show All Docotrs</a>
            </br></br>

            <h2 class="text-center">Patients Sections</h2>
            <a  class="btn btn-primary"href="{{route('auths.create')}}" >Registered Patient</a>
            <a  class="btn btn-success" href="http://127.0.0.1:8000/auths">Show All Patients</a>
    </div>

</x-app-layout>