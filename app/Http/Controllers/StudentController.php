<?php

namespace App\Http\Controllers;
use App\Student;
use App\Group;
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
        $students = Student::get();//Lấy hết tất cả các hàng trong CSDL của bảng Student 
        // echo "ohho";
        // return response()->json($students);
        return view('student',['students'=>$students]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::get();// lay tat ca cac group
        return view('add',['groups'=> $groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //bắt lỗi client
        $request->validate([
            'name' => 'required|max:10',
            'age' => 'required',
            'group' => 'required',
        ]);
        //bắt lỗi client

        $name= request()->input('name');
        $age= request()->input('age');
        $group = request()->input('group');

        $student= new Student();
        $student->name=$name;
        $student->age=$age;
        $student->group_id=$group;
        $student->save();
    return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::with('group')->find($id);// tìm id của student trong bảng
        $groups = Group::get();// tìm id student trong bảng
        return view('edit',['student'=> $student,'groups'=> $groups]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  app\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $name =request()->input('name');
        $age =request()->input('age');
        $group =request()->input('group');


        $student = Student::find($id);
        $student->name = $name;
        $student->age = $age;
        $student->group_id = $group;

        $student->save();


        return redirect('/students');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('students');
    }
}
