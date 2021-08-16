<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductList;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductListController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('product_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.product-list.index');
    }

    public function create()
    {
        abort_if(Gate::denies('product_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.product-list.create');
    }

    public function edit(ProductList $productList)
    {
        abort_if(Gate::denies('product_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.product-list.edit', compact('productList'));
    }

    public function show(ProductList $productList)
    {
        abort_if(Gate::denies('product_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productList->load('style');

        return view('admin.product-list.show', compact('productList'));
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['product_list_create', 'product_list_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }
        if (request()->has('max_width') || request()->has('max_height')) {
            $this->validate(request(), [
                'file' => sprintf(
                'image|dimensions:max_width=%s,max_height=%s',
                request()->input('max_width', 100000),
                request()->input('max_height', 100000)
                ),
            ]);
        }

        $model                     = new ProductList();
        $model->id                 = $request->input('model_id', 0);
        $model->exists             = true;
        $media                     = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));
        $media->wasRecentlyCreated = true;

        return response()->json(compact('media'), Response::HTTP_CREATED);
    }
}
