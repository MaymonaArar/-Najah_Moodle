@extends('layouts.instructor_layout')

@section('content')
<div class="home-background d-flex justify-content-center align-items-center">
    <div class="text-center text-white">
        <h1>Welcome {{ $instructorUser->name }} </h1>
        <p class="lead">Explore courses, manage your progress, and achieve your learning goals.</p>
        
        
    </div>
</div>
@endsection
