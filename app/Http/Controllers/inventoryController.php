<?php

namespace App\Http\Controllers;


use Hamcrest\Type\IsInteger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\inventoryModel;


class inventoryController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventoryModels = inventoryModel::all(); // Retrieve inventory items from the database
    return view('manageinventory.inventorylist', compact('inventoryModels'));

    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'brand' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'integer'],
            'description' => ['required', 'text', 'min:8'],
            'tax' => ['required', 'integer', 'min:1'],
            'discount' => ['required', 'integer', 'min:1'],
            'price' => ['required', 'integer', 'min:1'],
            'status' => ['required', 'text', 'min:1'],
        ]);
    }
     

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('manageinventory.addinventory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'tax' => 'required',
            'discount' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);
		$imageName="";
		if( $request->hasFile('image') ) {

		$file = $request->file('image');
		$imageName = time().'.'.$request->image->extension();     
        $file->move(('uploads'), $imageName);
		
		}
        inventoryModel::create([
            'name' => $request->name,
            'category' => $request->category,
            'brand' => $request->brand,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'tax' => $request->tax,
            'discount' => $request->discount,
            'price' => $request->price,
            'status' => $request->status,
			'image'=>$imageName,
        ]);
    
        return redirect()->route('manageinventory.inventorylist')
                        ->with('success', 'User created successfully.');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(inventoryModel $inventory): View
    {
        $data=inventoryModel::all();
        return view('manageinventory.inventorylist', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inventory = inventoryModel::find($id);

    // Pass the inventory variable to the view
    return view('manageinventory.updateinventory', compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     */

public function updateInventory($id)
{
    // Retrieve the inventory item from the database
    $inventory = inventoryModel::find($id);
	
    
    // Pass the $inventory variable to the view
    return view('manageinventory.updateinventory', compact('inventory'));
}

    public function update(Request $request,  $id): RedirectResponse
    {
        

        $validatedData = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'tax' => 'required',
            'discount' => 'required',
            'price' => 'required',
            
            
        ]);
		$inventory = inventoryModel::find($id);
		
		$imageName=$inventory->image;
		
		if( $request->hasFile('image') ) {

		$file = $request->file('image');
		$imageName = time().'.'.$request->image->extension();     
        $file->move(('uploads'), $imageName);
		
		}
		$inventory->Update([
            'name' => $request->name,
            'category' => $request->category,
            'brand' => $request->brand,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'tax' => $request->tax,
            'discount' => $request->discount,
            'price' => $request->price,
            'status' => $request->status,
			'image'=>$imageName,
            
        ]);
        //$inventoryModel->update($validatedData);
		

        return redirect()->route('manageinventory.inventorylist')
            ->with('success', 'Inventory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
		$inventoryModel = inventoryModel::find($id);
        $inventoryModel->delete();

        return redirect()->route('manageinventory.inventorylist')
            ->with('success', 'Inventory deleted successfully');
    }
	public function inventorylist(inventoryModel $inventory): View
    {
        $data=inventoryModel::where('status','Open')->get();
        return view('cashierinventory.inventorylist', compact('data'));
    }

	
}
