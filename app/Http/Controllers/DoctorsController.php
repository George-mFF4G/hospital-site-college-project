<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Models\doctor;
// use App\Http\Requests\StoredoctorRequest;

class DoctorsController extends Controller
{
    public function index(){
        $data=doctor::paginate(4);    // select all from doctors table
        return view('doctors-index',['data'=>$data]);
    }

    public function add(){
        return view('doctors-add');
    }

    public function store(Request $request){   
        $validated = $request->validate([
            'first_name'    => 'required|max:100',
            'last_name'     => 'required|max:100',
            'phone'         => 'required|unique:doctors|max:11',
            'age'           => 'required|max:2',
            'specialist'    => 'required|max:100',
            'address'       => 'required|max:255'
        ]);
        $data = request()->all();
        doctor::create([
            'first_name'=>$data['first_name'],
            'last_name' =>$data['last_name'],
            'phone'     =>$data['phone'],
            'address'   =>$data['address'],
            'age'       =>$data['age'],
            'specalist' =>$data['specialist']
        ]);
        return redirect('doctors')->with('msg','New Doctor Added...');
    }

    public function edit($id){
        $data = doctor::findorfail($id);
        return view('doctors-edit',compact('data'));
    }

    public function update($id ,Request $request){
        $doctor=doctor::findorfail($id);
        $validated = $request->validate([
            'first_name'    => 'required|max:100',
            'last_name'     => 'required|max:100',
            'phone'         => 'required|max:11',
            'age'           => 'required|max:2',
            'specialist'    => 'required|max:100',
            'address'       => 'required|max:255'
        ]);
        $data=request()->all();
        $doctor->update(
            [
                'first_name' =>$data['first_name'],
                'last_name'=>$data['last_name'],
                'phone'=>$data['phone'],
                'address'=>$data['address'],
                'age'=>$data['age'],
                'specalist'=>$data['specialist']
            ]
        );
        return redirect()->route('doctors.index')->with('msg','Doctor Updated Successfully...');
    }


    public function destroy($id){
        $doctor = doctor::findorfail($id)->delete();
        return redirect()->route('doctors.index')->with('msg','Doctor Deleted...');
    }

    // ---------------------------------------------------

    public function search(){
        $filter = request()->all();
        if(isset($filter['phase'])!='')
        {
            $filteredusers = doctor::where(['specalist'=>$filter['phase']])->get();
        }
        // dd($filteredusers);
        if(isset($filteredusers) && $filteredusers->count()){
            return view('filter',['filteredusers'=>$filteredusers]);
        }
        else{
            return redirect()->route('doctors.index')->with('msg','No Result Founded...');
        }
        if(isset($filteredusers) && $filteredusers->count()){
            return redirect()->route('doctors.index')->with('msg','No Result Founded...');
        }   
        
    }

}
