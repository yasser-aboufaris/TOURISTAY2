<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\User;
use App\Models\equipement;
use Illuminate\Http\Request;
use App\Models\House;
use Illuminate\Support\Facades\Auth; // For Auth

class HouseController extends Controller
{
    /**
     * Show the form for creating a new house.
     *
     * @return \Illuminate\View\View

    /**
     * Store a newly created house in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     * 
     * 
     * 
     * 
     */


public function delete($id){
    House::destroy($id);
    
}

public function editHouse(Request $request){
    $validatedData = $request->validate([
        "title" =>'required|string|max:255',
        "description" =>'required|string',
        "price"=> 'required|numeric'
    ]);
    
    $house = House::findorfail($request->id);
    $house->update($request->all());
    return redirect()->back();
}

public function ownerController()
{
    // $userId = auth()->id(); // Get authenticated user ID
    $userId=1;
    $equipement = Equipement::all();
    $houses = House::where('id', $userId)->get(); // Filter houses by user ID

    return view('ownerHome', compact('houses', 'equipement'));
}



public function getAll()
{
    $houses=House::all();
    return view('adminehousesdashboard');
}

public function index(Request $request)
{
    $perPage = $request->query('per_page', 9);

    $houses = House::with(['category', 'equipement'])->paginate($perPage);

    return view('paginate', compact('houses', 'perPage'));
}


public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title'         => 'required|string|max:255',
        'description'   => 'required|string',
        'price'         => 'required|numeric',
        'id_categorie'  => 'required|exists:categories,id',
        'start_contract'=> 'nullable|date',
        'end_contract'  => 'nullable|date|after:start_contract',
        'image'         => 'nullable|image|max:2048', // Max 2MB image
        'equipements'   => 'sometimes|array',
        'equipements.*' => 'exists:equipements,id'
    ]);

    // Get the authenticated user's ID
    $idOwner = auth()->user()->id;

    // Handle image upload
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('houses', 'public');
    }

    try {
        // Create the house
        $house = House::create([
            'id_owner'        => $idOwner,
            'title'           => $request->title,
            'id_categorie'    => $request->id_categorie,
            'description'     => $request->description,
            'price'           => $request->price,
            'image'           => $imagePath,
            'start_contract'  => $request->start_contract,
            'end_contract'    => $request->end_contract
        ]);

        // Attach equipements if provided
        if ($request->has('equipements') && is_array($request->equipements)) {
            $house->equipements()->attach($request->equipements);
        }

        // Redirect with success message
        return redirect()->back()->with('success', 'House created successfully');
    } catch (\Exception $e) {
        // Log the error
        \Log::error('House creation error: ' . $e->getMessage());
        
        // Redirect back with error message
        return redirect()->back()->with('error', 'Failed to create house')->withInput();
    }
}





    public function base(){
        $x = ''; 
        

    $houses = House::with('equipement')
    ->where('title', 'ILIKE', "%{$x}%")
    ->orWhereRelation('equipement', 'name', 'ILIKE', "%{$x}%")
    ->get();
    return view('bysearch',compact('houses'));
    }

    public function find($id){
        $house=House::find($id);
    }
    
    public function addToFavorits($id){
        $user = Auth::user();
        // dd($id);
        
        $user->favorites()->attach($id);
        return redirect()->back();
    }
    





public function search(Request $request) { 
    $x = $request->input('search'); 
    
    $houses = House::with('equipement')
        ->where('title', 'ILIKE', "%{$x}%")
        ->orWhereRelation('equipement', 'name', 'ILIKE', "%{$x}%")
        ->get();

    return view('bysearch', compact('houses'));
}

public function dashboardAdmine(){
    $houses = House::paginate(5);
    // $averageHousePrice = House::avg('price');
    $housesCount = House::count();
    return view('admineDashboard',compact('houses','housesCount'));
}

}
