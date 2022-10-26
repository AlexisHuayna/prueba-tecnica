<?php

namespace App\Http\Processes;

use App\Http\Resources\FullReport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClientProcess
{
    public function getFullReport() {
        Log::info("DAT");
        $query = DB::table('clientes')
            ->join('campaigns', 'clientes.id', '=', 'campaigns.cliente_id')
            ->join('plan_medios', 'campaigns.id', '=', 'plan_medios.campaign_id')
            ->join('detalle_plan_medios', 'plan_medios.id', '=', 'detalle_plan_medios.idPlanMedio')
            ->join('programa_contactos', 'detalle_plan_medios.idProgramaContacto', '=', 'programa_contactos.id')
            ->join('personas', 'programa_contactos.idContacto', '=', 'personas.id')
            ->join('programas', 'programa_contactos.programa_id','=','programas.id')
            ->join('medios', 'programas.medio_id', '=', 'medios.id')
            ->join('medio_plataformas', 'medios.id', '=','medio_plataformas.medio_id')
            ->join('plataforma_clasificacions', 'medio_plataformas.idPlataformaClasificacion', '=', 'plataforma_clasificacions.id')
            ->join('plataformas', 'plataforma_clasificacions.plataforma_id', '=', 'plataformas.id');

        $query->select(
            'clientes.nombreComercial as cliente',
            'campaigns.titulo as campania',
            'plan_medios.nombre as planMedio',
            'programas.nombre as nombrePrograma',
            'medios.nombre as medio',
            'personas.nombres as nombrePeriodista',
            'personas.apellidos as apellidoPeriodista',
            'plataforma_clasificacions.descripcion as plataformaClasificacion',
            'plataformas.descripcion as plataformaDescripccion'
        );

        $data = $query->get();

        return FullReport::collection($data);
    }
}
