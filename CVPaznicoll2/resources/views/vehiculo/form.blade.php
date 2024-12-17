<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="marca_vehiculo" class="form-label">{{ __('Marcavehiculo') }}</label>
            <input type="text" name="MarcaVehiculo" class="form-control @error('MarcaVehiculo') is-invalid @enderror" value="{{ old('MarcaVehiculo', $vehiculo?->MarcaVehiculo) }}" id="marca_vehiculo" placeholder="Marcavehiculo">
            {!! $errors->first('MarcaVehiculo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="categoria" class="form-label">{{ __('Categoria') }}</label>
            <input type="text" name="Categoria" class="form-control @error('Categoria') is-invalid @enderror" value="{{ old('Categoria', $vehiculo?->Categoria) }}" id="categoria" placeholder="Categoria">
            {!! $errors->first('Categoria', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="placa" class="form-label">{{ __('Placa') }}</label>
            <input type="text" name="Placa" class="form-control @error('Placa') is-invalid @enderror" value="{{ old('Placa', $vehiculo?->Placa) }}" id="placa" placeholder="Placa">
            {!! $errors->first('Placa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>