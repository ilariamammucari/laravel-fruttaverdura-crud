<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vegetable;

class VegetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dati_verdura = Vegetable::all();
        $data = [
            'verdure' => $dati_verdura
        ];
        return view('vegetables.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vegetables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Vegetable $vegetable)
    {
        $data = $request->validate([
            'nome' => 'required|max:50',
            'peso' => 'required|between:0-9999,99',
            'stagione' => 'required|max:15',
            'prezzo' => 'required|between:0-9999,99'
        ]);
        $vegetable->fill($data);
        $vegetable->save();

        return redirect()->route('vegetables.index')->with('messaggio','La verdura è stata salvata');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vegetable $vegetable)
    {
        // if ($vegetable){
        //     $data = [
        //         'verdura' => $vegetable
        //     ];
        //     return view('vegetables.show', $data);
        // }
        // abort('404');

        $data = [
            'verdura' => $vegetable ?? abort('404')
        ];
        return view('vegetables.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vegetable $vegetable)
    {
        // if($vegetable){
        //     $data = [
        //         'verdura' => $vegetable
        //     ];
        //     return view('vegetables.edit', $data);
        // }
        // abort('404');

        $data = [
            'verdura' => $vegetable ?? abort('404')
        ];
        return view('vegetables.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vegetable $vegetable)
    {
        $data = $request->validate([
            'nome' => 'required|max:50',
            'peso' => 'required|between:0-9999,99',
            'stagione' => 'required|max:15',
            'prezzo' => 'required|between:0-9999,99'
        ]);
        $vegetable->update($data);

        return redirect()->route('vegetables.index')->with('messaggio','La verdura è stata modificata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vegetable $vegetable)
    {
        $vegetable->delete();
        return redirect()->route('vegetables.index')->with('messaggio','La verdura è stata eliminata');
    }
}
