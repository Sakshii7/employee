<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use DB;
use File;
use Validator;
use Auth;

class HomeController extends Controller
{

    public function companylist()
    {

        $data=company::paginate(3);
        
        return view('admin.companylist',compact('data'));
    }

    public function showcompany()
    {

        
        if(Auth::id())
        {
            return view('admin.company');
        }else{
            return redirect('/login');
        }
    }

    public function deletecompany($id)
    {

        $data=company::find($id);
        $data->delete();
        
        return redirect()->back();
    }

    public function updateview($id)
    {

        $data=company::find($id);
    
        return view('admin.updateview',compact('data'));
    }

    public function updatecompany(Request $request,$id)
    {   
        $validated = $request->validate([
            'name' => 'required||max:50',
            'email' => 'required|unique:companies',
            'website' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg|min_height:100|min_width:100',
        ]);
        
        $data=company::find($id);

        $image=$request->file;

        if($image)
        {
           
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->file->move('storage',$imagename);

            $data->logo= $imagename;
        }

            $data->name=$request->name;
            $data->email=$request->email;
            $data->website=$request->website;

            $data->save();

            return redirect('/company-list');

    }

    
    public function uploadcompany(Request $request)
    {

        $validated = $request->validate([
<<<<<<< HEAD
            'name' => 'required|max:50',
=======
            'name' => 'required||max:50',
>>>>>>> 28a09e1eaa69bcc8b7e5638819d97fe14e4ed2ba
            'email' => 'required|unique:companies',
            'website' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg|min_height:100|min_width:100',
        ]);

        $data=new company;
        
        $image=$request->file;
        
        $imagename=time().'.'.$image->getClientOriginalExtension();
        
        $request->file->move('storage',$imagename);
        
        $data->logo= $imagename;
        
        $data->name=$request->name;
        $data->email=$request->email;
        $data->website=$request->website;
        
        
        $data->save();
        
        return redirect('/company-list');
        
    }

}
