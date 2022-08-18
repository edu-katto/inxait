<?php

namespace App\Http\Controllers;

use App\Models\Participantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Participantes $participantes)
    {
        //se modifico para enviar los datos de los usuarios registrado y se agrago paginacion para evitar un colapso con grandes sumas de datos
        return view('home', [
            'participantes' => DB::table($participantes->getView())->select()->paginate(5)
        ]);
    }
}
