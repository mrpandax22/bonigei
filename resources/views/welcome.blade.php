@extends('layouts.plantilla')
@section('section')

@guest
<div class="container">
    <div class="row align-items-center p-5">
        <div class="col"></div>
        <div class="col">
            <h2 class="display-3 text-center">Welcome</h2>
            <a href="login" class="btn  btn-block btn-outline-dark">Login</a>
            <a href="register" class="btn  btn-block btn-outline-primary">Register</a>
        </div>
        <div class="col"></div>
        
    </div>
</div>
@endguest

@auth
<div class="container">
    <div class="row align-items-center p-5">
        <div class="col"></div>
        <div class="col">
            <h2 class="display-3">Welcome</h2>
            <a href="home" class="btn  btn-block btn-outline-dark">Index</a>
        </div>
        <div class="col"></div>
        
    </div>
</div>    



@endauth

@endsection