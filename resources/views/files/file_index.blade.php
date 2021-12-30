@extends("layout")

@section('content')

    <h2> List of generated invoices </h2>
    <p> This is all of invoice who have been generated. You can perfom the action in choosing one link : </p>

    <table class="u-full-width">
        <thead>
            <tr>
                <th> ID </th>
                <th> Filename </th>
                <th> Size </th>
                <th> Last Modified </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            @php
                $count = 1;
            @endphp
            @foreach ($data as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $item['filename'] }}</td>
                    <td>
                        {{ $item['filesize'] . ' bytes' }} /
                        {{ round($item['filesize'] / 1000, 1) . ' KB' }} /
                        {{ round($item['filesize'] / (1000 * 1024), 2) . ' MB' }}
                    </td>
                    <td>{{ $item['lastModified'] }}</td>
                    <td>
                        <a href="{{ route('file-show', $item['filename'] ) }}">Show</a>
                        <a href="{{  route('file-download', $item['filename'] )  }}">Download</a>
                        <a href="{{ route('file-delete', $item['filename'] ) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    

@endsection
