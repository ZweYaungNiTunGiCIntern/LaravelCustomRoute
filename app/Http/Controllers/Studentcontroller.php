<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index',compact('students'));
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(StoreStudentRequest $request)
    {
        //return dd($request);
        $student = new Student();
        $student->name=$request->name;
        $student->rollnumber=$request->rollnumber;
        $student->totalmark=$request->totalmark;
        $student->level=$request->level;
        $student->save();
        return redirect()->route('student.index');

    }
    public function show(Student $student)
    {
        return view('student.detail',compact('student'));
    }
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }
    public function update(UpdateStudentRequest $request, Student $student)
    {

        $student->name=$request->name;
        $student->rollnumber=$request->rollnumber;
        $student->totalmark=$request->totalmark;
        $student->level=$request->level;
        $student->update();
        return redirect()->route('student.index');
    }
    public function destroy(Student $student)
    {
        if($student){
            $student->delete();

        }
        return redirect()->back();
    }


}
