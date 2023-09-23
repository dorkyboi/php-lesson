<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort(404);
        return view("lists.index", ['lists' => TodoList::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("lists.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $list = new TodoList();
        $list
            ->fill($request->all())
            ->save();
        return response()->redirectTo(route("lists.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('lists.form', [
            "list" => ['title' => 'First list']
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TodoList::destroy($id);
        return response()->redirectTo(route("lists.index"));
    }
}