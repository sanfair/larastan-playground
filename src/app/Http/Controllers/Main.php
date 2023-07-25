<?php

namespace App\Http\Controllers;

use App\Models\CSVOrderImportProcess;
use Illuminate\Database\Eloquent\Collection;

class Main extends Controller
{
    private CSVOrderImportProcess $model;

    public function __construct()
    {
        $this->model = new CSVOrderImportProcess();
    }

    /** @return \Illuminate\Database\Eloquent\Collection<int, \App\Models\CSVOrderImportProcess> */
    public function __invoke(): Collection
    {
        return $this->model->setConnection('mysql')->newQuery()
            ->whereNot('id', 0)
            ->get();
    }
}
