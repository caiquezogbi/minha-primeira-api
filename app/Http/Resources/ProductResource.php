<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)  //convertendo para json
    {
        // return [                                                               // trabalhando com objetos singular
        //     'name' => $this->name,
        //     'price' => $this->price,
        //     // 'description' => $this->description,
        //     // 'slug' => $this->slug,
        // ];

        return $this->resource->toArray(); //utilizando menos linhas para pegar todos os dados
    }

    public function with($request) //metodo with para deixar separa da colecao
    {
        return ['extra_single-data' => 'retornar nessa chamada!'];
    }
}
