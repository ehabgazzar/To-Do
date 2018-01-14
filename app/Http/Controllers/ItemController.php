<?php

namespace App\Http\Controllers;

use App\TodoItem;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function store(Request $request, $listid)
    {
        $item_count = TodoItem::where('list_id', $listid)->count();

        $item = new TodoItem;
        $item->list_id = $listid;
        $item->item_id = $item_count + 1;
        $item->description = $request->input('description');

        $item->save();
        return $item;
    }

    public function update(Request $request, $listid, $itemid)
    {

        $item = TodoItem::where('list_id', $listid)
            ->where('item_id', $itemid)
            ->update($request->all());

        return $item;
    }

    public function delete($listid, $itemid)
    {
        $item = TodoItem::where('list_id', $listid)
            ->where('item_id', $itemid)
            ->delete();


        return $item;
    }
}
