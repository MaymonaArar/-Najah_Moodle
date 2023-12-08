@extends('layouts.instructor_layout')

@section('content')


<div class="container mt-5 ">
  <h2 class="mb-4">My Courses</h2>
  <div class="row">
    @foreach ($courses as $course)

    <div class="col-md-3">
      <div class="course-card">
        <img src="{{ asset('images/course-icon.png') }}" alt="Course Icon" class="course-icon">
        <h5 class="card-title">{{ $course->title }}</h5>
        <p>Course ID: <br> Status: Not Started</p>
        <a href="#" class="btn-course">Go to Course</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
