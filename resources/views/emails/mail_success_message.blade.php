@extends("layouts.app")

@section('content')

    <div class="alert alert-success" role="alert">

        <h3> Email sent successfully! </h3>
        <p class="fst-italic"> Your generated invoice  in XML format has been sent successfully.</p>
    </div>
    <div class="btn-group">
        <a href="{{ route('mailCreate', ['id' => $id ]) }}" class="btn btn-primary">  <i class="fas fa-download"></i> Download generated invoice</a>
        <a href="{{ url('/') }}" class="btn btn-secondary">  <i class="fas fa-home"></i> Go back to Home</a>
    </div>
 
@endsection
