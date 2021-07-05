<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data ' => $this->collection //nao trabalha com objetos singular
            // , 'extra' => 'dado adicional'
        ];
    }

    public function with($request) //metodo with para deixar separa da colecao
    {
        return
            [
                'extra_information' => 'another data!',
                'extra' => 'dado adicional'
            ];
    }
}
