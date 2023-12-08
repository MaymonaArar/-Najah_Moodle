@extends('layouts.instructor_layout') <!-- Make sure to extend the correct layout -->

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">
                    <h3>{{ $instructorUser->name }} Profile</h3>
                </div>
                <div class="card-body">
                    <img src="{{ asset('images/instructor_image.png') }}" alt="Instructor Image" class="img-thumbnail" style="width: 150px; height: 150px;"> <!-- Update with your actual path -->
                    <h4 class="card-title mt-3">{{ $instructorUser->name }}</h4>
                    <p class="card-text">{{ $instructorUser->email }}</p>
                    <!-- Other details you want to include -->
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-primary">Edit Profile</a> <!-- Make sure route is defined -->
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Courses Taught</h4>
                </div>
                <ul class="list-group list-group-flush">
                    @forelse ($courses as $course)
                        <li class="list-group-item">
                            {{ $course->title }}
                            <span class="float-right">
                                <a href="" class="btn btn-sm btn-secondary">Edit</a> <!-- Make sure route is defined -->
                            </span>
                        </li>
                    @empty
                        <li class="list-group-item">No courses found</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
