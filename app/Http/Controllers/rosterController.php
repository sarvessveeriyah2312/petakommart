<?php
  
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\rosterModel;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class rosterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {           
        //
    }

    /**
     * display add roster/schedule form
     */
    public function create(): View
    {
        $users = User::all();
        return view('manageRoster.addSchedule', compact('users'));
    }

    /**
     * function add/store roster/schedule data
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'date' => 'required|date',
            'time' =>  [
                'required',
                function ($attribute, $value, $fail) use ($request) {
                    $existingRoster = rosterModel::where('date', $request->date)
                        ->where('time', $value)
                        ->first();
                        
                    if ($existingRoster) {
                        $fail('The selected time slot is already taken for the given date.');
                    }
                }
            ],
        ]);
        
        rosterModel::create($request->all());
         
        return redirect()->route('manageRoster.listSchedule')
                        ->with('success','Schedule Created Successfully.');
    }
  

    /**
     * Display tlist of roster/schedule sorted by date and time admin-petakom
     */
    public function show(rosterModel $tblroster): View
{
    // $data=rosterModel::all();
    $data = rosterModel::orderBy('date', 'desc')
        ->orderByRaw("CASE
            WHEN time = '8:00AM - 10:00AM' THEN 1
            WHEN time = '10:00AM - 12:00PM' THEN 2
            WHEN time = '12:00PM - 2:00PM' THEN 3
            WHEN time = '2:00PM - 4:00PM' THEN 4
            WHEN time = '4:00PM - 6:00PM' THEN 5
            ELSE 6
        END")
        ->get();
    return view('manageRoster.listSchedule', compact('data'));
}

// Display tlist of roster/schedule sorted by date and time for cashier
public function view(rosterModel $tblroster): View
{
   
    
    $data = rosterModel::orderBy('date', 'desc')
        ->orderByRaw("CASE
            WHEN time = '8:00AM - 10:00AM' THEN 1
            WHEN time = '10:00AM - 12:00PM' THEN 2
            WHEN time = '12:00PM - 2:00PM' THEN 3
            WHEN time = '2:00PM - 4:00PM' THEN 4
            WHEN time = '4:00PM - 6:00PM' THEN 5
            ELSE 6
        END")
        ->get();

    return view('manageRoster.viewSchedule', compact('data'));
}



    /**
     * display edit form for admin&petakomm
     */
    public function edit($id)
    {
        $tblroster = rosterModel::findOrFail($id);
        $users = User::pluck('name', 'student_id'); // Retrieve the users from the database
        return view('manageRoster.updateSchedule', compact('tblroster', 'users'));
    }

    /**
     * update roster/schedule information
     */
    public function update(Request $request, string $id)
{
    $tblroster = rosterModel::findOrFail($id);
    $data = $request->all();
    $tblroster->update($data);

    return redirect()->route('manageRoster.listSchedule')->with('success', 'Schedule Updated Successfully');
}

    /**
     * delete the roster/schedule detail
     */
    public function destroy($id): RedirectResponse
    {
        $tblroster = rosterModel::find($id);
        $tblroster->delete();
         
        return redirect()->route('manageRoster.listSchedule')
                        ->with('success','Schedule Deleted Successfully');
    }
}
