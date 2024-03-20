<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages/categories/index');
    }

    public function data(Request $request)
    {
        $page = $request->query('page') ?? 1;
        $limit = $request->query('limit') ?? 10;
        $from = $page == 1 ? 0 : $page * $limit - $limit;
        $keyword = $request->query('keyword');

        // QUERY
        $query = DB::table('product_categories');

        if ($keyword) {
            $query = $query->whereRaw("LOWER(name) LIKE '%".strtolower($keyword)."'%");
        }

        // DATA 
        $total = count($query->get()); 
        $data = $query->offset($from)->take($limit)->get();
        
        // PAGINATION
        $pageCount = ceil($total / $limit);
        $slNo = $page == 1 ? 0 : $page * $limit - 1;

        // RESULT
        $pagination = [
            'itemCount'   => $total,
            'limit'       => $limit,
            'pageCount'   => $pageCount,
            'page'        => $page,
            'slNo'        => $slNo + 1,
            'hasPrevPage' => $page > 1 ? true : false,
            'hasNextPage' => $page < $pageCount ? true : false,
            'prevPage'    => $page > 1 && $page != 1 ? $page - 1 : null,
            'nextPage'    => $page < $pageCount ? $page + 1 : null,

        ];

        return [
            'data' => $data,
            'paginator' => $pagination
        ];

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
