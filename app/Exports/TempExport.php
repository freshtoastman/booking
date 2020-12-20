<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\User;

class TempExport implements FromView
{
    public function view(): View
    {
        return view('export.test', ['users' => User::all()]);
    }
}
