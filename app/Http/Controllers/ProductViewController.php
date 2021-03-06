<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BrandsController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\PlacesController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\UnitsController;
use App\Place;
use App\Price;
use App\Product;
use App\Property;
use App\Unit;
use http\Env\Response;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestMatcher;
use Symfony\Component\HttpFoundation\Test\Constraint\RequestAttributeValueSame;

class ProductViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $product = new ProductsController();
        $product = $product->index();
        $category = new CategoriesController();
        $category = $category->index();
        $brand = new BrandsController();
        $brand = $brand->index();
        $place = new PlacesController();
        $place = $place->index();
        return view("product_index")->with(["product" => $product, "category" => $category, "brand" => $brand, "place" => $place]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $ct = new ProductsController();
        return view("product_detail")->with($ct->show($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $pr = new ProductsController();
        if ($pr->destroy($id)) return back();
    }
}
