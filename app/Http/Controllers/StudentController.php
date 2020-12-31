<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        if ($search) {
            $students = Student::where('Nom', 'like', '%'.$search.'%') 
            -> get();
        } 
        else {
            $students = Student::all();
        }

        if ($search) {
            $students = Student::where('Prenom', 'like', '%'.$search.'%') 
            -> get();
        } 
        else {
            $students = Student::all();
        }

        if ($search) {
            $students = Student::where('Email', 'like', '%'.$search.'%') 
            -> get();
        } 
        else {
            $students = Student::all();
        }

        return view('students.index', ['students'=>$students]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Nom = $request->input('Nom');
        $Prenom = $request->input('Prenom');
        $Email = $request->input('Email');
        
        $student = new Student;
        $student -> Nom = $Nom;
        $student -> Prenom = $Prenom;
        $student -> Email = $Email;
        $student -> save();

        return redirect() -> route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', ['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student = Student::find($student -> id);
        $student -> Nom = $request -> input('Nom');
        $student -> Prenom = $request -> input('Prenom');
        $student -> Email = $request -> input('Email');
        $student -> save();
        
        return redirect() -> route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student = Student::find($student -> id);
        $student-> delete();
    
        return redirect()->route('students.index');
    }
}
