<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FullReport extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Cliente' => $this->cliente,
            'Campania' => $this->campania,
            'PlanMedio' => $this->planMedio,
            'NombrePeriodista' => $this->nombrePeriodista,
            'ApellidoPeriodista' => $this->apellidoPeriodista,
            'Medio' => $this->medio,
            'NombrePrograma' => $this->nombrePrograma,
            'PlataformaDescripccion' => $this->plataformaDescripccion,
            'PlataformaClasificacion' => $this->plataformaClasificacion,
        ];
    }
}
