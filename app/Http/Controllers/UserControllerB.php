<?php

namespace App\Http\Controllers;

use App\Exports\TempExport;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
class UserControllerB extends Controller
{
    //
    public function export()
    {
        return Excel::download(new TempExport,'users.xlsx');
    }
    public function storeExcel(){
        return Excel::store(new UsersExport,'invoices.xlsx');
    }
}
