<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function insert()
    {
    
        Student::create([
            'nim' => '005',
            'name' => 'messi',
            'study_program' => 'football',
        ]);

        return "Students inserted successfully!";
    }

    public function update($id)
    {
        $updated = Student::where('id', $id)->update(['name' => 'ronaldo']);
        return $updated ? "Student updated successfully!" : "Update failed!";
    }

    public function delete($id)
    {
        $deleted = Student::destroy($id);
        return $deleted ? "Student deleted successfully!" : "Deletion failed!";
    }

    public function read()
    {
        $students = Student::all();
        return view('students.index', compact('students')); // Use a Blade file for better presentation
    }

    public function find($id)
    {
        $student = Student::findOrFail($id);
        return $student->name;
    }

    public function softDelete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return "Student soft-deleted successfully!";
    }

    public function readSoftDeleted()
    {
        $students = Student::withTrashed()->get();
        return $students;
    }

    public function restore($id)
    {
        Student::withTrashed()->where('id', $id)->restore();
        return "Student restored successfully!";
    }

    public function forceDelete($id)
    {
        Student::withTrashed()->where('id', $id)->forceDelete();
        return "Student permanently deleted!";
    }
}
