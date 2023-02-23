<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\events;
use App\Models\Schedule;
use Carbon\Carbon;
use DateTime;

class Front extends Controller
{

    //EVENT FORM SHOW FUNCRTION
    function index(){

         return view('front_pages/Scheduled_Events');
   }
//EVENT FORM SHOW FUNCRTION END


   public function store(Request $request){
//session
    $userid = $request->session()->get('userid');
///session

//Creating New Event code
       $event = new events;

       $event->name = $request->name;
       $event->description = $request->description;
       $event->start_time = $request->start_time;
       $event->end_time = $request->end_time;
       $event->day_of_week = $request->day_of_week;
       $event->userid=$userid;
       $event->save();
       /// New Event code end

        $startdate = ($request->start_time);
        $endtime = ($request->end_time);

// I have converted 90 days into weeks with help of for loop

       for ($i = 0; $i <= 12; $i++) {
           $days = $i * 7;
           $newdate = date('Y-m-d', strtotime($startdate.' + '. $days. ' days'));

//Creating New Schedule code
           $schedule = new Schedule;

           $schedule->event_id = $event->id;
           $schedule->start_date = $newdate;
           $schedule->end_time = $startdate. ' ' . $endtime;
           $schedule->userid=$userid;

           $schedule->save();
       }
// New Schedule code end
       return redirect('Events_list')->with('success', 'Event created successfully!');
   }


   //EVENT LIST FUNCTION

   function event_list(Request $request){
    //session
    $userid = $request->session()->get('userid');
///session
    $Schedule= Schedule::where('userid', '=',$userid)->get();

    $data = compact('Schedule');
     return view('front_pages/event_list')->with($data);

        }
    ///EVENT LIST FUNCTION END
}
