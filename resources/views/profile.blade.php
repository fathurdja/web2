@extends('layout.main')


@section('container')

    <ol>
        @foreach ($data as $item)
            <li> <span> {{ $item->id }}</span> {{$item->name}} <span>{{ $item->email }}</span></li>
        @endforeach
    </ol>


@endsection

