@extends("layout")

@section('content')

    <div class="row">

        <h2>  Congratulation !</h2>
        <p> Your invoice in XML format has been stored successfully.</p>
        <p> Now you can perform this action:</p>
        <p> 
                <a href="{{ route('mailCreate', ['id' => $id ]) }}"> - Send like attachment by email</a>
        </p>
        <p> 
            <a href="{{ route('invoiceDownload', ['id' => $id ]) }}"> - Download in your local disk</a>
        </p>
        <hr>

    </div>

@endsection
