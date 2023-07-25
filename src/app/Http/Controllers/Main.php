<?php

namespace App\Http\Controllers;

use App\Models\CSVOrderImportProcessRepository;
use Illuminate\Database\Eloquent\Collection;

class Main extends Controller
{
    private CSVOrderImportProcessRepository $model;

    public function __construct()
    {
        $this->model = new CSVOrderImportProcessRepository();
    }

    /** @return \Illuminate\Database\Eloquent\Collection<int, \App\Models\CSVOrderImportProcessRepository> */
    public function __invoke(): Collection
    {
        return $this->model->setConnection('mysql')->newQuery()
            ->whereNot('id', 0)
            ->get();
    }
}
