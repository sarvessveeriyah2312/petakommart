<?php

namespace App\Http\Controllers;

use App\Models\announcementModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class announcementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('manageannouncement.addAnnouncement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Title' => 'required',
            'Content' => 'required',
        ]);
        
        announcementModel::create($request->all());
         
        return redirect()->route('manageannouncement.showAnnouncement')
                        ->with('success','Announcement Created Successfully.');
    }
  

    /**
     * Display the specified resource.
     */
    public function show(announcementModel $announcement): View
{
    $data=announcementModel::all();
    return view('manageannouncement.showAnnouncement', compact('data'));
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $announcement = announcementModel::findOrFail($id);
        return view('manageannouncement.updateAnnouncement', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $announcement = announcementModel::findOrFail($id);
    $data = $request->all();
    $announcement->update($data);

    return redirect()->route('manageannouncement.showAnnouncement')->with('success', 'Announcement Updated Successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(announcementModel $announcement): RedirectResponse
    {
        $announcement->delete();
         
        return redirect()->route('manageannouncement.showAnnouncement')
                        ->with('success','Announcement Deleted Successfully');
    }
}
