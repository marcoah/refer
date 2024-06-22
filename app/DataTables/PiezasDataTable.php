<?php

namespace App\DataTables;

use App\Models\Pieza;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PiezasDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function(Pieza $pieza){
                $boton = '<a class="btn btn-primary btn-sm" href="'.route('piezas.show', $pieza->id).'" data-toggle="tooltip" data-placement="top" title="Mostrar"><i class="fas fa-eye"></i></a>';
                $boton .= '&nbsp;<a class="btn btn-success btn-sm" href="'.route('piezas.edit', $pieza->id).'" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>';
                $boton .= '&nbsp;<a class="btn btn-danger btn-sm" href="" data-bs-toggle="modal" data-bs-target="#modalEliminar'.$pieza->id.'" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></a>';
                $boton .= '&nbsp;<div class="modal fade" id="modalEliminar'.$pieza->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header d-flex justify-content-center"><h4>Eliminar Registro</h4></div><div class="modal-body"><p class="text-center">Está seguro(a) de eliminar el pieza '.$pieza->dpro.'/ ID: '.$pieza->id.'?</p></div><div class="modal-footer d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancelar</button><form action="'.route('piezas.destroy', $pieza->id).'" method="post"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="'.csrf_token().'"><button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i> Borrar</button></form></div></div></div></div>';
                return $boton;
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Pieza $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('piezas-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('add'),
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(180)
                  ->addClass('text-center'),
            Column::make('NPRO'),
            Column::make('DPRO'),
            Column::make('STOC'),
            Column::make('UBIC'),
            Column::make('BPNC'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Piezas_' . date('YmdHis');
    }
}
