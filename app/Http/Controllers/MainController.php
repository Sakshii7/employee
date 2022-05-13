<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use File;
use DB;
use Auth;

class MainController extends Controller
{
    public function login()
    {
        
        return view('admin.login');
    }
    
    public function loginpost(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $auth_data = [
            'email' => $email,
            'password' => $password,
        ];
        
        if (Auth::attempt($auth_data)) {
            return redirect('dashboard');
        } else {
            return back()->with('error', 'Invalid email or password!');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function employeelist()
    {

        $data=employee::paginate(5);
        
        return view('employee.employeelist',compact('data'));
    }

    public function deleteEmployee($id)
    {

        $data=employee::find($id);
        $data->delete();
        
        return redirect()->back();
    }

    public function update($id)
    {

        $data=employee::find($id);
    
        return view('employee.employeeupdate',compact('data'));
    }

    public function updateemployee(Request $request,$id)
    {
        $validated = $request->validate([
            'first_name' => 'required||max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|max:50|unique:employees',
            'phone' => 'required|unique:employees',
        ]);


        $data=employee::find($id);

            $data->first_name=$request->first_name;
            $data->last_name=$request->last_name;
            $data->email=$request->email;
            $data->phone=$request->phone;

            $data->save();

            return redirect('/employee-list');

    }

    public function showEmployee()
    {
        if(Auth::id())
        {
            return view('employee.employeeview');
        }else{
            return redirect('/login');
        }
    }

    public function uploademployee(Request $request)
    {

        $validated = $request->validate([
            'first_name' => 'required||max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|max:50|unique:employees',
            'phone' => 'required|unique:employees',
        ]);

        $data=new employee;

        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        // $data =- $request->company_id;
        $data->save();
        
        return redirect('employee-list');
        
    }

}
