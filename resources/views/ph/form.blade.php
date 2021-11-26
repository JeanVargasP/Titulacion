<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ isset($ph->descripcion) ? $ph->descripcion : ''}}" >
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nivel') ? 'has-error' : ''}}">
    <label for="Nivel" class="control-label">{{ 'Nivel' }}</label>
    <input class="form-control" name="Nivel" type="number" id="Nivel" value="{{ isset($ph->Nivel) ? $ph->Nivel : ''}}" >
    {!! $errors->first('Nivel', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Create' }}">
</div>
