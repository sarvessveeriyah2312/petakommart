<?php

namespace App\Http\Controllers;

use App\Models\announcementModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class announcementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // TODO: Implement the logic to retrieve and display announcements
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

        $imageName = "";

        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $imageName = time() . '.' . $file->extension();
            $file->move('uploads', $imageName);
        }

        announcementModel::create([
            'Title' => $request->input('Title'),
            'Content' => $request->input('Content'),
            'Image' => $imageName,
        ]);

        return redirect()->route('manageannouncement.showAnnouncement')
            ->with('success', 'Announcement Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(announcementModel $announcement): View
    {
        $data = announcementModel::all();
        return view('manageannouncement.showAnnouncement', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function view(announcementModel $announcement): View
    {
        $data = announcementModel::all();
        return view('manageannouncement.announcementlist', compact('data'));
    }

    /**
     * Show the details of a specific announcement.
     */
    public function detail($id)
    {
        $data = announcementModel::findOrFail($id);
        return view('manageannouncement.announcementdetail', compact('data'));
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
    public function update(Request $request, $id)
    {
        $announcement = announcementModel::findOrFail($id);

        $request->validate([
            'Title' => 'required',
            'Content' => 'required',
            'Image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation for image file
        ]);

        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the new image in the "uploads" directory
            $image->storeAs('uploads', $imageName);

            // Delete the previous image if it exists
            if (!empty($announcement->Image)) {
                Storage::delete('uploads/' . $announcement->Image);
            }

            $announcement->Image = $imageName;
        }

        $announcement->Title = $request->input('Title');
        $announcement->Content = $request->input('Content');
        $announcement->save();

        return redirect()->route('manageannouncement.showAnnouncement')
            ->with('success', 'Announcement Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(announcementModel $announcement): RedirectResponse
    {
        $announcement->delete();

        return redirect()->route('manageannouncement.showAnnouncement')
            ->with('success', 'Announcement Deleted Successfully');
    }
}
