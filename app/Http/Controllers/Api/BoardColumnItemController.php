<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Models\Board;
use App\Models\BoardColumnItem;

class BoardColumnItemController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        $item = new BoardColumnItem();
        $item->board_column_id = $request->column_id;
        $item->content = "New Item...";
        $item->order = $request->order;
        $item->save();

        return Board::getBoard();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BoardColumnItem::where('id', $id)->delete();

        return Board::getBoard();
    }
}
