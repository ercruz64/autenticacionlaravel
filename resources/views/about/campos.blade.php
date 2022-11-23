
<label for="" class="form-label">Nombre</label>
<input type="text" class="form-control" name="nombreUsuario" value="{{old('nombreUsuario',$about->nombreUsuario)}}">
@error('nombreUsuario')
<br>
<small class="alert alert-danger">{{ $message }}</small>
@enderror
<br>
<label for="" class="form-label">descripcion</label>
<input type="textarea" class="form-control" name="descripcion" value="{{old('descripcion',$about->descripcion)}}"></textarea>
@error('descripcion')
<br>
<small class="alert alert-danger">{{ $message }}</small>
@enderror
<br>
