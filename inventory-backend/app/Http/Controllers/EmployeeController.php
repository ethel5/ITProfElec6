<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // CREATE
    public function create(Request $request)
    {
        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'position' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'age' => 'required|integer|min:0|max:150',
            'civil_status' => 'required|string|max:50',
            'gender' => 'required|string|max:50',
        ]);

        $employee = Employee::create($validated);

        return response()->json($employee, 201);
    }

    // UPDATE
    public function update(Request $request)
    {
        $employee = Employee::findOrFail($request->id);

        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'position' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'age' => 'required|integer|min:0|max:150',
            'civil_status' => 'required|string|max:50',
            'gender' => 'required|string|max:50',
        ]);

        $employee->update($validated);

        return response()->json($employee);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $employee = Employee::findOrFail($request->id);

        $employee->delete();

        return response()->json([
            'message' => 'Employee deleted successfully'
        ]);
    }

    // READ ALL
    public function all()
    {
        return response()->json(Employee::all());
    }
}
