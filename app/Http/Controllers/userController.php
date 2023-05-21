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
  
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::latest()->paginate(5);
        
        return view('products.index',compact('products'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

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
    $request->validate([
        'name' => 'required',
        'student_id' => 'required',
        'email' => 'required',
        'type' => 'required',
        'password' => 'required',
    ]);

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
        $data=User::all();
        return view('manageusers.userlists',compact('data'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('manageusers.newuseredit', compact('user'));
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $user = User::findOrFail($id);

    $data = $request->all();

    if (isset($data['password'])) {
        $data['password'] = Hash::make($data['password']);
    }

    $user->update($data);

    return redirect()->route('manageusers.userlists')->with('success', 'User Updated Successfully');
}

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
         
        return redirect()->route('manageusers.userlists')
                        ->with('success','User Deleted Successfully');
    }
}
