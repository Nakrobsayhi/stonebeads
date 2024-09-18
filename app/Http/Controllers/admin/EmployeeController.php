<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = User::all();
        return view('backend.employee.index', compact('employee'));
    }

    public function add()
    {
        return view('backend.employee.add');
    }

    public function edit($id)
    {
        $employee = User::find($id);
        return view('backend.employee.edit', compact('employee'));
    }

    public function insert(Request $request)
    {
        $employee = new User();
        $employee->name = $request->name;
        $employee->username = $request->username;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->password = Hash::make($request->password);
        $employee->save();
        alert()->success('Successfully Saved', 'บันทึกสำเร็จ');
        return redirect('admin/employee/index');
    }

    public function update(Request $request, $id)
    {
        $employee = User::find($id);
        $employee->name = $request->name;
        $employee->username = $request->username;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->password = Hash::make($request->password);
        $employee->update();
        alert()->success('Successfully Saved', 'บันทึกสำเร็จ');
        return Redirect('admin/employee/index');
    }

    public function delete($id)
    {
        $employee = User::find($id);
        $employee->delete();
        alert()->success('Successfully Deleted', 'ลบข้อมูลสำเร็จ');
        return redirect('admin/employee/index');
    }
}
