@extends('layout.main')


@section('container')
    <header class="bg-white shadow mb-6 h-16 ">
        <div class=" w-full px-96 py-3 sm:px-6 lg:px-8 ">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Produk</h1>
        </div>
    </header>

    <div class="py-4">
        <table class="border-collapse border-slate-500 table-auto ml-12">
            <thead>
                <tr>
                    <th class="border border-slate-600 ... p-4">No.</th>
                    <th class="border border-slate-600 ... p-4">Nama Produk</th>
                    <th class="border border-slate-600 ... p-4">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td class="border border-slate-600 p-4">{{ $item->id }}</td>
                        <td class="border border-slate-600 p-4">{{ $item->name }}</td>
                        <td class="border border-slate-600 p-4">Rp.{{ $item->price }}</td>

                    </tr>
                @endforeach
            </tbody>

            <table>

    </div>
@endsection
