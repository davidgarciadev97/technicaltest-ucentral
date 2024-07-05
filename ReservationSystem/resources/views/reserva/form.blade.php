<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $reserva?->name) }}" id="name" placeholder="Nombre">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_identi" class="form-label">{{ __('Num. Identidad') }}</label>
            <input type="text" name="numIdenti" class="form-control @error('numIdenti') is-invalid @enderror" value="{{ old('numIdenti', $reserva?->numIdenti) }}" id="num_identi" placeholder="Num. Identidad">
            {!! $errors->first('numIdenti', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_type" class="form-label">{{ __('Tipo de Usuario') }}</label>
            <select id="usrTypeField" type="text" name="userType" class="form-control @error('userType') is-invalid @enderror">
                        <option value="" selected disabled hidden></option>
                        <option value="Estudiante">Estudiante</option>
                        <option value="Docente">Docente</option>
                        <option value="Administrativo">Administrativo</option>
            </select>
            <!-- <input type="text" name="userType" class="form-control @error('userType') is-invalid @enderror" value="{{ old('userType', $reserva?->userType) }}" id="user_type" placeholder="Tipo de Usuario"> -->
            {!! $errors->first('userType', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="type_lab" class="form-label">{{ __('Tipo de Laboratorio') }}</label>
            <select id="usrTypeField" type="text" name="typeLab" class="form-control @error('typeLab') is-invalid @enderror">
                        <option value="" selected disabled hidden></option>
                        <option value="Fotografía">Fotografía</option>
                        <option value="Video">Video</option>
                        <option value="Sonido">Sonido</option>
            </select>
            <!-- <input type="text" name="typeLab" class="form-control @error('typeLab') is-invalid @enderror" value="{{ old('typeLab', $reserva?->typeLab) }}" id="type_lab" placeholder="Tipo de Laboratorio"> -->
            {!! $errors->first('typeLab', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="area" class="form-label">{{ __('Dependencia o Programa') }}</label>
            <input type="text" name="area" class="form-control @error('area') is-invalid @enderror" value="{{ old('area', $reserva?->area) }}" id="area" placeholder="Dependencia o Programa">
            {!! $errors->first('area', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date_solicitud" class="form-label">{{ __('Fecha Solicitud') }}</label>
            <input type="text" name="dateSolicitud" class="form-control @error('dateSolicitud') is-invalid @enderror" value="{{ old('dateSolicitud', $reserva?->dateSolicitud) }}" id="date_solicitud" placeholder="Fecha Solicitud">
            {!! $errors->first('dateSolicitud', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date_inicio" class="form-label">{{ __('Fecha Inicio') }}</label>
            <input type="text" name="dateInicio" class="form-control @error('dateInicio') is-invalid @enderror" value="{{ old('dateInicio', $reserva?->dateInicio) }}" id="date_inicio" placeholder="Fecha Inicio">
            {!! $errors->first('dateInicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date_fin" class="form-label">{{ __('Fecha Fin') }}</label>
            <input type="text" name="dateFin" class="form-control @error('dateFin') is-invalid @enderror" value="{{ old('dateFin', $reserva?->dateFin) }}" id="date_fin" placeholder="Fecha Fin">
            {!! $errors->first('dateFin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observacion" class="form-label">{{ __('Observación') }}</label>
            <input type="text" name="observacion" class="form-control @error('observacion') is-invalid @enderror" value="{{ old('observacion', $reserva?->observacion) }}" id="observacion" placeholder="Observación">
            {!! $errors->first('observacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>