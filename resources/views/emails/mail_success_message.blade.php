@extends("layout")

@section('content')

    <div class="row">

        <h2> Email sent successfully! </h2>
        <p> Your generated invoice  in XML format has been sent successfully.</p>
        <p> <a href="{{ route('invoiceDownload', ['id' => $id ]) }}"> Download generated invoice in your local disk</a></p>
        <p> <a href="{{ url('/') }}">Go back to Home</a></p>
        
    </div>
    <hr>

@endsection
