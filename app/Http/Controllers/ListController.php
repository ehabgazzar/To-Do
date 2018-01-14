<?php

namespace App\Http\Controllers;

use App\TodoList;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        return TodoList::all();
    }

    public function show($id)
    {
        return TodoList::find($id);
    }

    public function store(Request $request)
    {
        return TodoList::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $List = TodoList::findOrFail($id);
        $List->update($request->all());

        return $List;
    }

    public function delete(Request $request, $id)
    {
        $List = TodoList::findOrFail($id);
        $List->delete();

        return 204;
    }

}
