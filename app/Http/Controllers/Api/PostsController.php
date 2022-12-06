<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return Datatables::of(Client::query())->make(true);
        $limit = $request->limit ?? env('RECORD_LIMIT', 15);
        $column = $request->column ?? env('DEFAULT_SORT_COLUMN');
        $direction = $request->direction ?? env('DEFAULT_SORT_DIRECTION');

        return Post::orderBy($column, $direction)
                    //->filter(request(['inv_code', 'reason']))
                    ->paginate($limit);
    }
}
