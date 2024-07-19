<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ZipCodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'cep' => $this->cep,
            "label" => Str::of($this->logradouro)->append(', ')->append($this->localidade),
            "logradouro" => $this->logradouro,
            "complemento" => $this->complemento,
            "bairro" => $this->bairro,
            "localidade" => $this->localidade,
            "uf" => $this->uf,
            "ibge" => $this->ibge,
            "gia" => $this->gia,
            "ddd" => $this->ddd,
            "siafi" => $this->siafi,
        ];
    }
}
