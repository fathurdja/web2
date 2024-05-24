@extends('layout.main')


@section('container')
<ol>
    <p>Data Produk</p>
    @foreach ($data as $item)
        <li> <span> {{ $item->id }}</span> {{$item->name}} <span>{{ $item->price }}</span></li>
    @endforeach
</ol>
@endsection

