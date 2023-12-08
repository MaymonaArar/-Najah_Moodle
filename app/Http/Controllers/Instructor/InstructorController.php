<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Course;


class InstructorController extends Controller
{

    public function home()
{
    $instructorUser = (object)[
        'name' => 'Maymona Arar',
        'email' => 'maymona@email.com',
    ];
    return view('instructor.courses.home', compact('instructorUser'));
}

public function profile()
{
    $instructorUser = (object)[
        'name' => 'Maymona Arar',
        'email' => 'maymonaA@email.com',
    ];
    $courses = [
        (object)[
            'courseId' => 1, // Add the ID property
            'title' => 'Course 1',
            'description' => 'Description for Course 1',
        ],
        (object)[
            'id' => 2, // Add the ID property
            'title' => 'Course 2',
            'description' => 'Description for Course 2',
        ],
        (object)[
            'id' => 3, // Add the ID property
            'title' => 'Course 3',
            'description' => 'Description for Course 2',
        ],
        (object)[
            'id' => 4, // Add the ID property
            'title' => 'Course 4',
            'description' => 'Description for Course 2',
        ],
        (object)[
            'id' => 5, // Add the ID property
            'title' => 'Course 5',
            'description' => 'Description for Course 2',
        ],
        (object)[
            'id' => 6, // Add the ID property
            'title' => 'Course 6',
            'description' => 'Description for Course 2',
        ],
        // Add more courses here
    ];
    return view('instructor.profile', compact('instructorUser', 'courses'));
}


    public function index()
{
    // You may fetch data or perform any necessary operations here
    // Mock instructor user and courses (replace with your actual data)
  
    $instructorUser = (object)[
        'name' => 'Maymona Arar',
        'email' => 'maymona@email.com',
    ];

    $courses = [
        (object)[
            'courseId' => 1, // Add the ID property
            'title' => 'Course 1',
            'description' => 'Description for Course 1',
        ],
        (object)[
            'id' => 2, // Add the ID property
            'title' => 'Course 2',
            'description' => 'Description for Course 2',
        ],
        (object)[
            'id' => 3, // Add the ID property
            'title' => 'Course 3',
            'description' => 'Description for Course 2',
        ],
        (object)[
            'id' => 4, // Add the ID property
            'title' => 'Course 4',
            'description' => 'Description for Course 2',
        ],
        (object)[
            'id' => 5, // Add the ID property
            'title' => 'Course 5',
            'description' => 'Description for Course 2',
        ],
        (object)[
            'id' => 6, // Add the ID property
            'title' => 'Course 6',
            'description' => 'Description for Course 2',
        ],
        // Add more courses here
    ];

    return view('instructor.courses.index', compact('instructorUser', 'courses'));
}

public function showLoginForm()
{
    return view('instructor.login');
}
public function login()
{
    $courseId = 123;

    return view('instructor.login');
}

public function createCourse(Request $request)
{
    // Logic to validate and create a new course
}

public function editCourseForm($id)
{
    // Retrieve course details and display the edit form
}

public function updateCourse(Request $request, $id)
{
    // Logic to validate and update the course
}

public function deleteCourse($id)
{
    // Logic to delete a course
}

// ------------------Add Course Materials-----------------------

public function addLectureForm($courseId)
{
    // Display the form to add a lecture to the course
    return view('instructor.courses.add-lecture', compact('courseId'));
}

public function addLecture(Request $request, $courseId)
{
    // Logic to validate and add a lecture to the course
     
}

public function addAssignmentForm($courseId)
{
    // Display the form to add an assignment to the course
    
    return view('instructor.courses.add-assignment', compact('courseId')); 
}

public function addAssignment(Request $request, $courseId)
{
    // Logic to validate and add an assignment to the course
}

public function addQuizForm($courseId)
{
    return view('instructor.courses.add-quiz', compact('courseId'));
}


public function addQuiz(Request $request, $courseId)
{
    // Logic to validate and add a quiz to the course
}


//------------view Student-----------
public function viewStudentProgress($courseId)
{
    // Retrieve and calculate student progress for the course
    // You may fetch data from your database, calculate progress, and pass it to the view

    $course = Course::find($courseId);
    $progressData = $course->calculateProgress(); 

    return view('instructor.courses.view-progress', compact('progressData', 'course'));
}


}
