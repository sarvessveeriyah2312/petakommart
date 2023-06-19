<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hamcrest\Type\IsInteger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Retrieve users data from the database
        $users = User::latest()->paginate(5);
        
        return view('products.index',compact('products'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Validate the user input data.
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'student_id' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'type' => ['required', 'integer', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('manageusers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the user input
        $request->validate([
            'name' => 'required',
            'student_id' => 'required',
            'email' => 'required',
            'type' => 'required',
            'password' => 'required',
        ]);

        // Create a new user with the provided data
        User::create([
            'name' => $request->name,
            'student_id' => $request->student_id,
            'email' => $request->email,
            'type' => $request->type,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('manageusers.userlists')
                    ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): View
    {
        // Retrieve all users data from the database
        $data = User::all();

        return view('manageusers.userlists', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        return view('manageusers.newuseredit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        $data = $request->all();

        // If password is set, hash it before updating
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        // Update the user data
        $user->update($data);

        return redirect()->route('manageusers.userlists')->with('success', 'User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        // Delete the user from the database
        $user->delete();
         
        return redirect()->route('manageusers.userlists')
                        ->with('success','User Deleted Successfully');
    }
}
