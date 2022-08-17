<?php

namespace App\Http\Controllers;

use App\Exports\ParticipantesExport;
use Illuminate\Http\Request;
use App\Models\Participantes;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function exportExcel(){
        return Excel::download(new ParticipantesExport(), 'participantes.xlsx');
    }
}
