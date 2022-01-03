<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Prestamointerno;
use App\Models\Interno;
use App\Models\Equipo;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
class StatComponent extends DataTableComponent
{

    

    public function columns(): array
    {   
        $prestamointernos = Prestamointerno::get();
        return [
            Column::make('Indetificador','id')
                ->sortable()
                ->searchable(),
            Column::make('Alumno', 'interno.nombres')
                ->sortable()
                ->searchable(),
                
            Column::make('Equipo', 'equipo.nombre_equipo')
                ->sortable()
                ->searchable(),

                Column::make('Fecha', 'fecha')
                ->sortable()
                ->searchable(),
                
        ];
    }
  
    public function query(): Builder
    {
        return PrestamoInterno::query()
        ->leftJoin('internos', 'internos.id', 'prestamointernos.id_alumno_interno', 'equipos' , 'equipos.id', 'prestamointernos.id_equipo');

    }
   

  //  public function render()
   // {
      //  return view('livewire.stat-component');
   // }
}
