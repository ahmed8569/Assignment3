@extends('layout')
@section ('title', ' header')

@section('navbar')
@parent
@endsection

@section('header')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <img src="images/bg1.jpg" style="height: 300px; width:100%">
        </div>
      </div>
        <div class="row">
          <div class="col-sm-12" style="background-color:rgb(156, 149, 81); width: 100%; height: 30px; color: white;">
            <center>Adaptive responsive carousel </center>

          </div>        
      </div>
    </div>
    @endsection 
