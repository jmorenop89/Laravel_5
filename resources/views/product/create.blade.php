@extends('layout.index')
@section("title")
    Registrar Producto
@stop
@section("title page")
    Registrar Producto
@stop
@section("content")
    <div class="table-responsive">
        {!! Form::open() !!}
        <table class="table table-striped">
            @include('product.fields')
            <tr>
                <td>
                    <input type="submit" value="Guardar" class="btn btn-success">
                </td>
                <td>
                    <a class="btn btn-info" href="{{ route('product.index') }}">
                        Cancelar
                    </a>
                </td>
            </tr>
        </table>
        {!! Form::close() !!}
    </div>
@stop