<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\BoardColumnItem;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Board::getBoard();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $board = $request->board;
        foreach ($board['columns'] as $column) {
            foreach ($column['items'] as $idx => $item) {
                BoardColumnItem::where('id', $item['item_id'])->update([
                    "board_column_id" => $column['column_id'],
                    "content" => $item['content'],
                    "order" => $idx + 1
                ]);
            }
        }

        return Board::getBoard();
    }
}
