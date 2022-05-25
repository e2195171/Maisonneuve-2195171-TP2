<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = City::select()
        ->get();
        return view('student.create', ['city'=>$city]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|min:2|max:50',
            'address'       => 'required|min:2|max:191',
            'phone'         => 'required|min:2|max:20',
            'email'         => 'required|email|mimes:.com',
            'date_birthday' => 'required|min:2|max:191',
        ]);
        $newStudent = Student::create([
            'name'          => $request->name,
            'address'       => $request->address,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'date_birthday' => $request->date_birthday,
            'city_id'       => $request->city
        ]);
        return redirect('student/'.$newStudent->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $city = City::find($student->city_id);  
        return view('student.show', ['student'=>$student,'city'=>$city]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $city = City::select()
        ->get();
        return view('student.edit', ['student'=>$student, 'city'=>$city]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'          => 'required|min:2|max:50',
            'address'       => 'required|min:2|max:191',
            'phone'         => 'required|min:2|max:20',
            'email'         => 'required|email|mimes:.com',
            'date_birthday' => 'required|min:2|max:191',
        ]);
        $student->update([
            'name'          => $request->name,
            'address'       => $request->address,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'date_birthday' => $request->date_birthday,
            'city_id'       => $request->city
        ]);
        return redirect(route('student.show', $student->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect(route('student'));
    }
}