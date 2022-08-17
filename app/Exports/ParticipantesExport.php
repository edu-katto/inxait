<?php

namespace App\Exports;
use App\Models\Participantes;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ParticipantesExport implements FromView
{
    public function view(): View
    {
        return view('export.reportExcel', [
            'participantes' => DB::table('vista_participantes')->get()
        ]);
    }
}
