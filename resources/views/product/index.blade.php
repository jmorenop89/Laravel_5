@extends('layout.index')
@section("title")
    Lista de Productos
@stop
@section("title page")
    Lista de Productos
@stop
@section("content")
    <a href="{{ route('product.create') }}" class="btn btn-info">NUEVO</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>
                        <a href="{{ route('product.edit',$product->id) }}">Editar</a>
                        <a href="{{ route('product.delete',$product->id) }}">Elminar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop