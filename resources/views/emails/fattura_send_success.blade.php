@extends("layout")

@section('content')

    <div style="padding-left:16px">
        <h3> <strong> Mail success message</strong> </h3>
        <p> Your italian e-invoice in XML formats has been sended successfully.</p>
        </br>
        <a class="active" href="{{ url('/') }}">Go back to Home</a>
        </br></br>

    </div>

@endsection
