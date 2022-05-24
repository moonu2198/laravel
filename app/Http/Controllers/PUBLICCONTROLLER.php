<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horizontal_table;
use DB;

class PUBLICCONTROLLER extends Controller
{
    /**
     * view form of form testing
     **/
    public function form()
    {
        return view('form');
    }

    public function table()
    {
        return view('table');
    }

    public function insertdata(Request $requst)
    {
        
           $data= new Horizontal_table;
           $data->Username=$requst->Username;
           $data->Email=$requst->Email;
           $data->Mobile=$requst->Mobile;
           $data->Password=$requst->Password;
           $data->Repassword=$requst->Repassword;
           echo $data->save();
           return redirect ('/show');

    }

    public function showdata()
    {
        $productdata=DB::table('Horizontal_table')
            ->get();
            return view('table',['productdata'=>$productdata]);
    }

     public function editdata(Horizontal_table $productdata,$id)
     {
       $productdata=DB::table('Horizontal_table')->where('ID',$id)->first();
    //    echo "<pre>";
    //    print_r($productdata);
    //    die;
         return view('edit',['productdata'=>$productdata]);
     }

    public function update(Request $request)

    {
        echo "<pre>";
       print_r($productdata);
       die;
           $data=Horizontal_table::find($request->id);
           $data->Username=$request->Username;
           $data->Email=$request->Email;
           $data->Mobile=$request->Mobile;
           $data->Password=$request->Password;
           $data->Repassword=$request->Repassword;
           $data->save();
           return redirect ('show');  
    }

    public function delete(Request $request,$id)
    {
        $productdata=DB::table('Horizontal_table')->where('ID',$id)->delete();
        // $productdata=Horizontal_table::find($request->id);
        // $productdata->delete();
        return redirect('/show')->with('success', 'Deleted successfully');
    }

 
    }

 
}
