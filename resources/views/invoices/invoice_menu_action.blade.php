@extends("layouts.app")

@section('content')


    <div class="alert alert-success" role="alert">
        
        <h3>  Congratulation !, Your invoice in XML format has been stored into database successfully</h3>
        Now you can 
        <a href="{{ route('mailCreate', ['id' => $id ]) }}" class="alert-link"> send it like attachment by email </a> 
        or
        <a href="{{ route('invoiceDownload', ['id' => $id ]) }}" class="alert-link"> download it in your local disk</a>

    </div>
    <div class="btn-group">
            <a href="{{ route('mailCreate', ['id' => $id ]) }}" class="btn btn-primary">  <i class="fas fa-envelope"></i> Sending </a>
            <a href="{{ route('invoiceDownload', ['id' => $id ]) }}" class="btn btn-secondary">  <i class="fas fa-download"></i> Download</a>
    </div>

@endsection
