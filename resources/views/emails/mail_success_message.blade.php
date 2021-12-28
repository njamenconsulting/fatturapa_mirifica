@extends("layout")

@section('content')

    <div class="row">

        <h3> <strong> Congratulation !</strong> </h3>
        <p> Your invoice in XML format has been sent successfully.</p>
        </br>
        <a href="{{ url('/') }}">Go back to Home</a>
        </br>

    </div>

@endsection
