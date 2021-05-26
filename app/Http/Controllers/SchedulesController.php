<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedules;
use App\Models\Patient;
use App\Models\Dentist;


class SchedulesController extends Controller
{
    public function index(){

        return view("schedules.index", ["schedules" => Schedules::all()
        ]);
    }


    public function show(Schedules $schedule){
        return view("schedules.show", ["schedule" => $schedule]);
    }

    public function create(){
        return view("schedules.create", [
            "patients" => Patient::all(),
            "dentists" => Dentist::all()
        ]);
    }

    public function store(Schedules $schedule){
    $this->validateSchedule();
       Schedule::create([
            "name" => $schedule->name,
            "date" => $schedule->date,
            "time" => $schedule->time,
            "patient_id" => $schedule->patient_id,
            "dentist_id" => $schedule->dentist_id,
       ]);
       return redirect(route("schedules.index"));
    }

    public function edit(Schedules $schedule){
        return view("schedules.edit", compact("schedule"));
    }

    public function update(Schedules $schedule){

        $schedule->update($this->validateSchedule());

        return redirect("/schedules/" . $schedule->id);
    }


    public function destroy(Schedules $schedule){

        $schedule->delete();

        return redirect(route("schedules.index"));
    }

    public function validateSchedule(){
        return request()->validate([
            "name" => "required",
            "date" => "required",
            "time" => "required",
            "patient_id" => "exists:patient,id",
            "dentist_id" => "exists:dentist,id"
        ]);
    }
}
