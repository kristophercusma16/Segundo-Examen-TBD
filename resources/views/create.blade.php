@extends('layout')

@section('title','Crear Alumno')

@section('content')
<table cellpadding="3" cellspacing="5">
    <tr>
        <th colspan="4">Crear Alumno Nuevo</th>
    </tr>
    <form action="{{ route('alumnos.store') }}" method="post">
        @csrf
        <tr>
            <th>Nombre</th>
            <td><input type="text" name="nombre_alumno" value="{{ old('nombre_alumno') }}"><br>{{ $errors->first('nombre_alumno') }}</td>
        </tr>
        <tr>
            <th>Curso</th>
            <td><input type="text" name="curso" value="{{ old('curso') }}"><br>{{ $errors->first('curso') }}</td>
        </tr>
        <tr>
            <th>Nota 1</th>
            <td><input type="number" step="0.01" name="nota_1_alumno" value="{{ old('nota_1_alumno') }}"><br>{{ $errors->first('nota_1_alumno') }}</td>
        </tr>
        <tr>
            <th>Nota 2</th>
            <td><input type="number" step="0.01" name="nota_2_alumno" value="{{ old('nota_2_alumno') }}"><br>{{ $errors->first('nota_2_alumno') }}</td>
        </tr>
        <tr>
            <th>Fecha de Registro</th>
            <td><input type="date" name="fecha_reg" value="{{ old('fecha_reg') }}"><br>{{ $errors->first('fecha_reg') }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button>Guardar</button></td>
        </tr>
    </form>
</table>
@endsection
