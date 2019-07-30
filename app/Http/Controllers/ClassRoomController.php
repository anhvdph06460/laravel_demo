<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function index()
    {
        $classes = ClassRoom::all();
        return view('classes', ['classes' => $classes]);
    }


public function crateForm()
{
	return view('admin.class');
}

public function saveAdd(Request $Request){
	$this->validate($request,[
            'name' => 'required|string|min:8',
            'teacher_name' => 'required|string|min:5|max:15',
            'major' => 'required|string',
            'max_student' => 'nullable||numeric',   
            
        ]);
	$data = $request->except('_token');
	#dd($data);
	$ClassRoom = new ClassRoom();
	$ClassRoom->name = $data['name'];
	$ClassRoom->teacher_name = $data['teacher_name'];
	$ClassRoom->major = $data['major'];
	$ClassRoom->max_student = $data['max_student'];

	$ClassRoom->save();
	return view('admin.classes', ['classes' => ClassRoom::all()]);
}
}
