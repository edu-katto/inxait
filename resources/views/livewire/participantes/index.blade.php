<div>
    <!-- ======= Details Section ======= -->
    <section id="concurso" class="details">
        <div class="container">

            <div class="row content">
                <div class="col-md-6">
                    <img src="{{ asset('landingPage/img/subaru-cars.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 pt-1">
                    <h3>Subaru colombia trae para todos sus clientes el sorte de un espectacular SUBARU XV.</h3>
                    <p class="fst-italic">
                        Los pasos son super sencillos, solo llena el siguiente formulario y a tu correo llegara la confirmacion de tu participacion.
                    </p>
                    <div class="col-lg-12 mt-5 mt-lg-0">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Alerta!</strong> {{ $message }}.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Alerta!</strong> Antes de guardar validar los errores.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form wire:submit.prevent="save">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" wire:model="nombre" class="form-control" placeholder="Nombre" required>
                                    <small class="help-block form-text text-danger">@error('nombre') {{ $message }} @enderror</small>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" wire:model="apellido" placeholder="Apellido" required>
                                    <small class="help-block form-text text-danger">@error('apellido') {{ $message }} @enderror</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <div class="form-group mt-3">
                                        <input type="number" class="form-control" wire:model="telefono" placeholder="Celular" required>
                                        <small class="help-block form-text text-danger">@error('telefono') {{ $message }} @enderror</small>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="form-group mt-3">
                                        <input type="number" class="form-control" wire:model="cedula" placeholder="Cedula" required>
                                        <small class="help-block form-text text-danger">@error('cedula') {{ $message }} @enderror</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mt-3">
                                    <select class="form-select" wire:model="cod_departamento">
                                        @foreach($departamentos as $departamento)
                                            <option value="{{ $departamento->cod_departamento }}">{{ $departamento->departamento }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if(!is_null($ciudades))
                                <div class="col-md-12 form-group mt-3">
                                    <select class="form-select" wire:model="cod_ciudad">
                                        @foreach($ciudades as $ciudad)
                                            <option value="{{ $ciudad->cod_ciudad }}">{{ $ciudad->ciudad }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <div class="form-group mt-3">
                                        <input type="email" class="form-control" wire:model="correo" placeholder="Correo" required>
                                        <small class="help-block form-text text-danger">@error('correo') {{ $message }} @enderror</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <div class="form-group mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" id="terminos_condiciones" type="checkbox" wire:model="terminos_condiciones">
                                            <label class="form-check-label" for="terminos_condiciones">
                                                Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales. Haga clic aquí
                                            </label>
                                            <small class="help-block form-text text-danger">@error('terminos_condiciones') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center my-3"><button class="btn btn-dark" type="submit">Participa</button></div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Details Section -->
</div>
