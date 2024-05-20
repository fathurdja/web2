@extends('layout.main')


@section('container')
<ol>
    @foreach ($data as $item)
        <li>{{$item->name}}</li>
    @endforeach
</ol>
@endsection

