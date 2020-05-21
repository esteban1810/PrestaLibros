<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Libro extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $preserveKeys = true;
    
    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
            'id' => $this->id,
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'genero' => $this->genero->nombre,
            'editorial' => $this->editorial,
            'edicion' => $this->edicion,
            'anio' => $this->anio,
            'descripcion' => $this->descripcion,
        ];
    }
}
