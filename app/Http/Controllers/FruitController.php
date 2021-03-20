<?php

namespace App\Http\Controllers;

use App\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dati_frutta = Fruit::all();
        $data = [
            'frutti' => $dati_frutta 
        ];
        return view('fruits.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fruits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Fruit $fruit)
    {
        $data = $request->validate([
            'nome' => 'required|max:50',
            'peso' => 'required',
            'stagione' => 'required|max:15',
            'prezzo' => 'required'
        ]);
            $fruit->fill($data);
            $fruit->save();

            return redirect()->route('fruits.index')->with(['messaggio' => 'Il frutto è stato salvato']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fruit $fruit)
    {
        if ($fruit){
            $data = [
                'frutto' => $fruit
            ];
            return view('fruits.show',$data);
        }
        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fruit $fruit)
    {
        if ($fruit){
            $data = [
                'frutto' => $fruit
            ];
            return view('fruits.edit', $data);
        }
        abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fruit $fruit)
    {
        $data = $request->validate([
            'nome' => 'required|max:50',
            'peso' => 'required',
            'stagione' => 'required|max:15',
            'prezzo' => 'required'
        ]);
        $fruit->update($data);

        return redirect()->route('fruits.index',$data)->with(['messaggio' => 'Il frutto è stato modificato']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fruit $fruit)
    {
        $fruit->delete();
        return redirect()->route('fruits.index')->with(['messaggio' => 'Il frutto è stato eliminato']);
    }
}
