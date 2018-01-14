<?php

namespace App\Http\Controllers;

use App\TodoItem;
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
        $items = TodoItem::where('list_id', $id)->get();
        return $items;
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
        $status = false;
        $items = TodoItem::where('list_id', $id)->delete();
        $list = TodoList::find($id);
        if ($list)
            $status = $list->delete();

        return $status . "";
    }

}
