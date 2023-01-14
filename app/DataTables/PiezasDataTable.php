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
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'piezas.action')
            ->addColumn('action', function ($pieza) {
                return '<a class="btn btn-success btn-sm" href="'.route('piezas.edit',$pieza->id).'" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
                <a class="btn btn-primary btn-sm" href="'.route('piezas.show',$pieza->id).'" data-toggle="tooltip" data-placement="top" title="Mostrar"><i class="fas fa-eye"></i></a>';
            })
            ->setRowId('id');


    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Pieza $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pieza $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('piezas-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
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
     *
     * @return array
     */
    public function getColumns(): array
    {
        // $piezas = Pieza::select(['*']);

        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            Column::make('NPRO'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Piezas_' . date('YmdHis');
    }
}
