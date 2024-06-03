{{-- <table>
    <thead>
        <tr>
            <th>no</th>
            <th>title</th>
            <th>author</th>
            <th>publicationdate</th>
            <th>isbn</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->publicationDate }}</td>
                <td>{{ $item->isbn }}</td>
                <td>{{ $item->price }}</td>
            </tr>
        @endforeach
    </tbody>
