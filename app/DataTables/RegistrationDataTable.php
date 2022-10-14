<?php


namespace App\DataTables;

use App\Models\Registration;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RegistrationDataTable extends DataTable
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
            ->eloquent($query)->addColumn('Fiche inscription',function($row){

                return view('admin.datatables.buttons.registration', ['row' => $row]);

            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Registration $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Registration $model)
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
            ->setTableId('registrations-table')
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
            Column::make('Gender'),
            Column::make('First_name'),
            Column::make('Last_name'),
            Column::make('Birthdate'),
            Column::make('Phone'),
            Column::make('Email'),
            Column::make('Level'),
            Column::make('Courses_choice'),
            Column::make('Level_certificate'),
            Column::make('Staying_type'),
            Column::make('Nationality'),
            Column::make('Address'),
            Column::make('Fiche inscription','Fiche inscription'),
            Column::make("Confirmer l'inscription","Confirmer l'inscription")
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Registrations_' . date('YmdHis');
    }
}