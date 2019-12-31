<?php

namespace App\Http\Controllers\Shift;

use App\Shift;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShiftController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function show_shifts()
    {
        $shifts=Shift::paginate(8);
        return view('admin.shifts.index',compact('shifts'));
    }

    public function post_shift( Request $request){
        $this->validate($request, [
              'shift_radio' => 'required',
//            'shift_name' => 'required|unique:shifts',
//            'first_half_start_time' => 'required',
//            'first_half_end_time' => 'required',
//            'second_half_start_time' => 'required',
//            'second_half_end_time' => 'required',
//            'break_start_time' => 'required',
//            'break_end_time' => 'required',
//            'minutes'=>'required',
        ]);
        if ($request->ajax())
        {
            return response(Shift::create($request->all()));
        }
        else{
        $shift=new Shift();

        if ($request->shift_radio=='full_shift'){
            $this->validate($request, [
            'full_shift_name' => 'required',
            'full_start_time' => 'required',
            'full_end_time' => 'required',
            ]);
            $shift->shift_type=$request->shift_radio;
            $shift->shift_name=$request->full_shift_name;
            $shift->shift_color=$request->shift_color;
            $shift->first_half_start_time=$request->full_start_time;
            $shift->first_half_end_time="00.00";
            $shift->second_half_start_time="00.00";
            $shift->second_half_end_time=$request->full_end_time;

            $shift->shift_start_time=$request->full_start_time;
            $shift->shift_end_time=$request->full_end_time;
            if ($shift->save()){
                return redirect()->back()->with('message','shift saved successfully');
            }else{
                return redirect()->back()->with('error','shift could not be added please try again later');
            }
        }

        if ($request->shift_radio=='split_shift'){

        $shift->shift_type=$request->shift_radio;
        $shift->shift_name=$request->split_shift_name;
        $shift->shift_color=$request->shift_color;
        $shift->first_half_start_time=$request->first_half_start_time;
        $shift->first_half_end_time=$request->first_half_end_time;
        $shift->second_half_start_time=$request->second_half_start_time;
        $shift->second_half_end_time=$request->second_half_end_time;


        $shift->shift_start_time=$request->first_half_start_time;
        $shift->shift_end_time=$request->second_half_end_time;


        if ($shift->save()){
            return redirect()->back()->with('message','shift has been added successfully');
         }
        else{
            return redirect()->back()->with('error','shift could not be added');
        }

        }






        }
    }


    public  function shift_edit($id){
        $shifts=Shift::paginate(8);
        $shift=Shift::findOrFail($id);
       return view('admin.shifts.edit_shift',compact('shifts','shift'));
    }

    public  function shift_delete($id){
        $shift=Shift::findOrFail($id);
        if ($shift){
            $shift->delete();
            return redirect()->route('show_shifts')->with('message','The shift has been deleted successfully');
        }
        else{
            return redirect()->back()->with('error','The shift could not be deleted try again later');
        }

    }
    public  function shift_update(Request $request,$id){


        $this->validate($request, [
            'shift_radio' => 'required',
//            'shift_name' => 'required|unique:shifts',
//            'first_half_start_time' => 'required',
//            'first_half_end_time' => 'required',
//            'second_half_start_time' => 'required',
//            'second_half_end_time' => 'required',
//            'break_start_time' => 'required',
//            'break_end_time' => 'required',
//            'minutes'=>'required',
        ]);
        if ($request->ajax())
        {
            return response(Shift::create($request->all()));
        }

        else{
            $shift=Shift::findOrFail($id);

            if ($request->shift_radio=='full_shift'){
                $this->validate($request, [
                    'full_shift_name' => 'required',
                    'full_start_time' => 'required',
                    'full_end_time' => 'required',
                ]);
                $shift->shift_type=$request->shift_radio;
                $shift->shift_name=$request->full_shift_name;
                $shift->shift_color=$request->shift_color;
                $shift->first_half_start_time=$request->full_start_time;
                $shift->first_half_end_time="00.00";
                $shift->second_half_start_time="00.00";
                $shift->second_half_end_time=$request->full_end_time;

                $shift->shift_start_time=$request->full_start_time;
                $shift->shift_end_time=$request->full_end_time;

                if ($shift->save()){
                    return redirect()->back()->with('message','shift updated successfully');
                }else{
                    return redirect()->back()->with('error','shift could not be added please try again later');
                }
            }

            if ($request->shift_radio=='split_shift'){

                $shift->shift_type=$request->shift_radio;
                $shift->shift_name=$request->split_shift_name;
                $shift->shift_color=$request->shift_color;
                $shift->first_half_start_time=$request->first_half_start_time;
                $shift->first_half_end_time=$request->first_half_end_time;
                $shift->second_half_start_time=$request->second_half_start_time;
                $shift->second_half_end_time=$request->second_half_end_time;

                $shift->shift_start_time=$request->first_half_start_time;
                $shift->shift_end_time=$request->second_half_end_time;
                if ($shift->save()){
                    return redirect()->back()->with('message','shift has been updated successfully');
                }
                else{
                    return redirect()->back()->with('error','shift could not be updated please try again');
                }

            }






        }















































//        $this->validate($request, [
//            'shift_name' => 'required',
//            'first_half_start_time' => 'required',
//            'first_half_end_time' => 'required',
//            'second_half_start_time' => 'required',
//            'second_half_end_time' => 'required',
//        ]);
//
//        $shift=Shift::findOrFail($id);
//        $shift->shift_name=$request->shift_name;
//        $shift->shift_color=$request->shift_color;
//        $shift->first_half_start_time=$request->first_half_start_time;
//        $shift->first_half_end_time=$request->first_half_end_time;
//        $shift->second_half_start_time=$request->second_half_start_time;
//        $shift->second_half_end_time=$request->second_half_end_time;
//        if ($shift){
//            $shift->save();
//            return redirect()->back()->with('message','shift has been updated successfully');
//        }
//        else{
//            return redirect()->back()->with('error','shift could not be Updated');
//        }


    }




}
