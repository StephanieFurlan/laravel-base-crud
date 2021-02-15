<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Beer;

class BeerController extends Controller
{   
    private $beerValidator = [
        'name' => 'required|max:20',
        'quantity' => ' required|numeric',
        'price' => ' required|numeric',
        'alcohol' => ' required|numeric',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $beers = Beer::all();
        // dd($beers);
        return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $data = $request->all();

        $request->validate($this->beerValidator);

        $beer = new Beer();
        $beer->name = $data['name'];
        $beer->quantity = $data['quantity'];
        $beer->alcohol = $data['alcohol'];
        $beer->price = $data['price'];
        $beer->save();

        return redirect()->route('beers.index')->with('message', $beer->name . " salvata correttamente.");;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $beer = Beer::find($id);
        return view('beers.beer', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {   
        
        return view('beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        //
        $newBeer = $request->all();
        $request->validate($this->beerValidator);
        $beer->update($newBeer);
        return redirect()->route('beers.index')->with('message', $beer->name . " modificata correttamente.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
