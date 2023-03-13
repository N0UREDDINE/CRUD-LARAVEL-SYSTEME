<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;


class StudentsController extends Controller
{
    public function index()
    {
        $data = Students::get();
        //return $data;
        return view('ListStudents', compact('data'));
    }
    public function AddStudents()
    {
        return view('AddStudents');
    }
    public function SaveStudents(Request $request)
    {
        $request->validate
        ([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'adress' => 'required',
            ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $adress = $request->input('adress');

        $StudentsData = new Students();
        $StudentsData->name = $name;
        $StudentsData->email = $email;
        $StudentsData->phone = $phone;
        $StudentsData->adress = $adress;
        $StudentsData->save();

        //return view('ListStudents');   this is the return
        return redirect('ListStudents')->with('success', 'Student Added Successfully');
    }
    public function EditStudents($id)
    {
        $data = Students::where('id', '=', $id)->first();
        return view('EditStudents', compact('data'));
    }
    public function UpdateStudents(Request $request)
    {
        $request->validate
        ([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'adress' => 'required',
            ]);
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $adress = $request->input('adress');

        students::where('id','=',$id)->update([
            'name'=> $name,
            'email'=> $email,
            'phone'=> $phone,
            'adress'=> $adress
            ]);

        return redirect('ListStudents')->with('success', 'Student Updated Successfully');
    }
    public function DeleteStudents($id)
{
    Students::where('id', '=', $id)->delete();
    return redirect()->back()->with('success', 'Student deleted Successfully');
}

}