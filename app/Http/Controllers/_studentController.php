<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class _studentController extends Controller
{
    // Method to show the list of students
    public function index()
    {
        // Retrieve the student data from the session
        $student = session('student', []);

        // Pass the student data to the view
        return view('student.index', compact('student'));
    }

    // Method to show the form for creating a new student
    public function create()
    {
        // Return the view for creating a student
        return view('student.create');
    }

    // Method to save the new student record
    public function saveRecord(Request $request)
    {
        // Validate and get the form data
        $data = $request->all();

        // Store the student data in the session
        session(['student' => $data]);

        // Redirect to the student list view
        return redirect()->route('student.index');
    }
}

?>
