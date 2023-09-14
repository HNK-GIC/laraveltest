<?php

namespace App\Exports;

use App\Models\Person;
use Illuminate\contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PersonExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('excelData',[
            'persons'=> Person::all(),
        ]);
    }
}
