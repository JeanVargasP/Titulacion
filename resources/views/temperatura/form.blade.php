<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ isset($temperatura->descripcion) ? $temperatura->descripcion : ''}}" >
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Grados') ? 'has-error' : ''}}">
    <label for="Grados" class="control-label">{{ 'Grados' }}</label>
    <input class="form-control" name="Grados" type="number" id="Grados" value="{{ isset($temperatura->Grados) ? $temperatura->Grados : ''}}" >
    {!! $errors->first('Grados', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Create' }}">
</div>
