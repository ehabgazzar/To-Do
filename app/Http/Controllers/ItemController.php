<?php

namespace App\Http\Controllers;

use App\TodoItem;
use App\TodoList;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return TodoItem::all();
    }

    public function show($id,$list)
    {
        return  TodoItem::Getlist($id)->Where('list_id','=',$list )->get();

    }

    public function store($listid)
    {
        $item = new TodoItem;
        $item->list_id=$listid;
        $item->description=request('description');
        $item->save();
        return $item;
    }

    public function update(Request $request, $itemid,$listid)
    {
        $Item=TodoItem::where('id', $itemid)
            ->where('list_id', $listid)
            ->update($request->all());
//        $Item = TodoItem::findOrFail($id);
//        $Item->update($request->all());

        return $Item;
    }

    public function delete(Request $request, $itemid)
    {
        $Item = TodoItem::findOrFail($itemid);
        $Item->delete();

        return 204;
    }
}
