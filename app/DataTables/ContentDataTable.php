<?php


namespace App\DataTables;

use App\Models\Content;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ContentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('Modifier',function ($row){

                return view('admin.datatables.buttons.edit', compact('row'));



            })->addColumn('Langue', function($row){

                return  view('admin.datatables.buttons.lang', compact('row'));

            })->addColumn('Contenu', function($row){

                return strlen($row->content) <= 100 ? $row->content : substr($row->content,0,100).'...';

            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Registration $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Content $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('contents-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('page'),
            Column::make('mnemonic'),
            Column::make('Langue','Langue'),
            Column::make('Contenu','Contenu'),
            Column::make('Modifier','Modifier'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Contents_' . date('YmdHis');
    }
}