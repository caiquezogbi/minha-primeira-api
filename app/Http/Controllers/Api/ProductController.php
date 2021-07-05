<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use  App\Http\Controllers\controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Repository\ProductRepository;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    private $product;
    public function __construct(Product $product)

    {
        $this->product = $product;
    }

    public function index(Request $request)
    {
        $products = $this->product;
        $ProductRepository = new ProductRepository($products);
        if ($request->has('coditions')) {                                                                                 //filtro da tabela produto por condicao

            $ProductRepository->selectCoditions($request->get('coditions'));
        }




        if ($request->has('fields')) {                                                                                           //filtro da tabela produto por campos
            $ProductRepository->selectFilter($request->get('fields'));
        }

        return new ProductCollection($ProductRepository->getResult()->paginate(5));
    }


    public function show($id)
    {
        $products = $this->product->find($id); //buscando produtos pelo id
        return new ProductResource($products);
    }


    public function save(ProductRequest $req)
    {
        $data = $req->all();
        $product = $this->product->create($data);

        return response()->json($product);
    }

    public function update(Request $req)
    {
        $data = $req->all();
        $product = $this->product->find($data['id']);
        $product->update($data);

        return response()->json($product);
    }

    public function delete($id)
    {
        $product = $this->product->find($id);
        $product->delete($id);

        return response()->json(['data' => ['msg' => 'produto removido!']]);
    }
}
