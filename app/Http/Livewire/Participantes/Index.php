<?php

namespace App\Http\Livewire\Participantes;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Participantes;
use App\Models\Departamento;
use App\Models\Ciudad;

use App\Mail\ConfirmEmail;
use Illuminate\Support\Facades\Mail;

/*
 * Se decicio usar liveware para poder tener un componente reactivo como lo es el formulario del sorteo.
 * con esto se gusca que la pagina no se recargue mientras el usuario ingresa los datos y con esto mejoramos la experiencia del usuario
 */

class Index extends Component
{
    //definimos los campos del formulario
    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $correo;
    public $terminos_condiciones;

    //inicializamos estos valores en null para poder hacer el select aninado y que se llenen de forma progresiva
    public $ciudades = NULL;
    public $departamento = NULL;
    public $cod_departamento = NULL;
    public $cod_ciudad = NULL;

    //reglas de firltrado para garantizar la calidad el dato
    protected $rules = [
        'nombre' => 'required|string|regex:/^[\pL\s\-]+$/u',
        'apellido' => 'required|string|regex:/^[\pL\s\-]+$/u',
        'cedula' => 'required|numeric|min:6|unique:participantes,cedula',
        'telefono' => 'required|numeric|min:10|unique:participantes,telefono',
        'cod_departamento' => 'required',
        'cod_ciudad' => 'required',
        'correo' => 'required|email|unique:participantes,correo',
        'terminos_condiciones' => 'required',
    ];

    //visualizar componene
    /*
     * este componente tiene unas modificaciones extras como de donde extiende y la session,
     * ya que no se una ninguna plantilla de laravel ui si no que se obto por tener plantillas personalizadas
     * por eso es que se le agregan los dos parametros extras extends() y section()
     */
    public function render(){
        return view('livewire.participantes.index', [
            'departamentos' => Departamento::all(),
            'ganador' => Participantes::where('ganador', 1)->get()->first()

        ])->extends('layouts.landingPage')
          ->section('content');

    }

    //componente para llenar el segundo select de ciudades teniendo en cuenta el departemamento selecionado
    public function updatedcodDepartamento($cod_departamento){
        $this->ciudades = Ciudad::where('cod_departamento', $cod_departamento)->get();
    }

    public function save(){

        //validamos la informacion
        $this->validate();

        /*
         * uno de los requisitos es que la convocatoria solo es para los clientes en bogota.
         * asi que se hace una comprovación para saber si la ciudad elegida es bogota.
         * si no es bogota se manda de nuevo al formulario con un mensaje de información sobre la situación
         */
        if ($this->cod_ciudad != 107){
            return redirect()
                ->back()
                ->with('info','lo sentimos este concurso solo esta disponible para la ciudad de Bogota');
        }

        //token validacion correo
        $token = Str::uuid();

        //creamos el participante
        Participantes::create([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'cedula' => $this->cedula,
            'telefono' => $this->telefono,
            'cod_departamento' => $this->cod_departamento,
            'cod_ciudad' => $this->cod_ciudad,
            'correo' => $this->correo,
            'terminos_condiciones' => $this->terminos_condiciones == 'on' ? '1' : '0',
            'validacion' => 0,
            'token_validacion' => $token
        ]);

        //envio de correo
        $mailData = [
            'token' => $token,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido
        ];

        $correo = new ConfirmEmail($mailData);
        Mail::to($this->correo)->send($correo);

        //si todo salio brien se manda un mensaje de exito
        return redirect()
            ->back()
            ->with('success','Ya casi estas listo para participar, solo falta que leas el correo que te mandamos');
    }
}
