<form action="">

    <input type="text" name="nombre" value="{{old('nombre','nombre por defecto')}}">
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <input type="submit" value="enviar">
</form>