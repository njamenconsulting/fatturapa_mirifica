@extends("layouts.app")

@section('content')

    <div class="alert alert-success mt-2" role="alert">

        <h3> Sending mail  successfully! </h3>
        <p class="fst-italic"> Your generated invoice  in XML format has been sent successfully.</p>
    </div>
    <div class="btn-group">
        <a href="{{ route('invoiceDownload', ['id' => $id ]) }}" class="btn btn-primary">  <i class="fas fa-download"></i> Download generated invoice</a>
        <a href="{{ url('/') }}" class="btn btn-secondary">  <i class="fas fa-home"></i> Go back to Home</a>
    </div>
 
@endsection
