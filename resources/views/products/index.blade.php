@extends('templates.layout')

Product name: {{ $product }}

@section('content')
<ul>
    @if($count > 1)
        @foreach($products as $k => $product)
            <li><a href="/products/{{ $product }}">{{ $k }} : {{ $product }}</a></li>
        @endforeach
            
    @else
        <p>Товаров на складе нет!</p>
    @endif
</ul>
@endsection