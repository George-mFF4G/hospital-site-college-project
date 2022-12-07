<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vaccaine;

class VaccaineController extends Controller
{
    public function index(){
        $data=vaccaine::paginate(4);    // select all from doctors table
        return view('vaccaine.vaccaine-index',['data'=>$data]);
    }

    public function add(){
        return view('vaccaine.vaccaine-add');
    }

    public function store(Request $request){   
        $validated = $request->validate([
            'patient_name'    => 'required|max:100',
            'phone'           => 'required|unique:doctors|max:11',
            'age'             => 'required|max:2',
            'description'     => 'required|max:75',
            'appoint_date'    => 'required|max:10'
        ]);
        $data = request()->all();
        vaccaine::create([
            'patient_name'  =>$data['patient_name'],
            'phone'         =>$data['phone'],
            'age'           =>$data['age'],
            'description'   =>$data['description'],
            'appoint_date'  =>$data['appoint_date']
        ]);
        return redirect('vaccaine')->with('msg','New vaccaine Added...');
    }

    public function edit($id){
        $data = vaccaine::findorfail($id);
        return view('vaccaine.vaccaine-edit',compact('data'));
    }

    public function update($id ,Request $request){ 
        $vaccaine=vaccaine::findorfail($id);
        $validated = $request->validate([
            'patient_name'    => 'required|max:100',
            'phone'           => 'required|unique:doctors|max:11',
            'age'             => 'required|max:2',
            'description'     => 'required|max:75',
            'appoint_date'    => 'required|max:10'
        ]);
        $data=request()->all();
        $vaccaine->update(
            [
            'patient_name'  =>$data['patient_name'],
            'phone'         =>$data['phone'],
            'age'           =>$data['age'],
            'description'   =>$data['description'],
            'appoint_date'  =>$data['appoint_date'],
            ]
        );
        if($vaccaine['confirmed']){
            echo 'true';
            die();
        }
        return redirect()->route('vaccaine.index')->with('msg','vaccaine Updated Successfully...');
    }


    public function confirm($id){
        $vaccaine=vaccaine::findorfail($id);
        $data=request()->all();
        if(isset($_POST['confirm'])){
            $vaccaine->update(
                [
                'confirmed'=>$data['confirm']
                ]);
                return redirect()->route('vaccaine.index')->with('msg','Vaccaine Confirmed...');
        }
        else{
            $vaccaine->update(
                [
                'confirmed'=>0
                ]);
            return redirect()->route('vaccaine.index')->with('msg','Vaccaine UnConfirmed...');
        }   
        
    }
// ---------------------------------------------
    public function destroy($id){
        $vaccaine = vaccaine::findorfail($id)->delete();
        return redirect()->route('vaccaine.index')->with('msg','vaccaine Deleted...');
    }


}
