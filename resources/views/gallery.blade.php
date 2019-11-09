@extends('layout')
@section ('title', ' Gallery')

@section('navbar')
@parent

@stop 

@section('gallery')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-12" style="background-color: rgb(156, 149, 81);">
            <center><h2>Gallery</h2></center>  
        </div>
      </div>
      
        <div class="row">        
          <div class="col-sm-3" style="background-color: rgb(211, 214, 168);">
                   <img src="images/1.jpg" style="height: 300px;">
              
          </div>
          <div class="col-sm-3" style="background-color: rgb(211, 214, 168);">
              <img src="images/2.jpg" style="height: 300px; ">            
              
          </div>
          <div class="col-sm-3" style="background-color: rgb(211, 214, 168);">
              <img src="images/3.jpg" style="height: 300px;">            
              
          </div>
          <div class="col-sm-3" style="background-color: rgb(211, 214, 168);">
              <img src="images/4.jpg" style="height: 300px; width: 300px; ">           
              
          </div>
        </div>
      </div>
      @endsection 
