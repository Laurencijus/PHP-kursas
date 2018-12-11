<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function show($id, Request $request)
    {
        return view('course_view', ['course' => Course::find($id)]);
    }

    public function edit($id, Request $request)
    {
        return view('course_edit', ['course' => Course::find($id)]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:32',
        ]);

        $course = Course::find($id);
        $course->name = $request->input('name');
        $course->save();
        redirect(route('course_all'));

    }

    public function all(Request $request)
    {
        return view('course_all', ['courses' => Course::all()]);
    }
}
