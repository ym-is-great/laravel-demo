<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// my code start
use Validator;
use App\Student;
// my code end

class StudentController extends Controller
{

    // my code start
    
    public function index ()
    {
        return Student::all();
        // return Student::where('class_id', '1')->get(); // Query
        // return Student::withTrashed()->get(); // SoftDelete
        // return Student::paginate(15); // Pagination
        // return Student::with('class')->get(); // Relation
    }

    public function show ($id)
    {
        return Student::find($id);
    }

    public function store (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required|unique:students|max:10',
            'name' => 'required|max:8',
            'class_id' => 'required|in:1,2,3'
        ]);
        if ($validator->fails()) {
            return response($validator->errors(), 422);
        }
        return Student::create($request->all());
    }

    public function update (Request $request, $id)
    {
        Student::where('id', $id)->update($request->all());
    }

    public function destory ($id)
    {
        Student::destroy($id);
    }

    // my code end

}
