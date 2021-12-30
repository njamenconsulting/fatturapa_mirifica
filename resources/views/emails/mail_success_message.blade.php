@extends("layout")

@section('content')

    <div class="row">

        <h2>  Congratulation !</h2>
        <p> Your invoice in XML format has been sent successfully.</p>
        </br>
        <a href="{{ url('/') }}">Go back to Home</a>
        </br>

    </div>

@endsection
