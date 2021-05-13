<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index()
    {
        return View('dashboard',['data' => Goods::all()] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Goods::create($this->validateData());
        return view('dashboard', ['message' => "stored successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('dashboard', [
            'singleItem' => Goods::findOrFail(request('id'))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $item = Goods::findOrFail(request('id'));
        $item->update($this->validateData());
        $item->save();
        return view('dashboard', ['message' => "updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {

    }


    protected function validateData()
    {
        return request()->validate([
            'name' => 'required|string|max:125',
            'price' => 'required|numeric',
            'user_id' => auth()->id
        ]);
    }
}
