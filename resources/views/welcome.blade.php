@extends("layout")

@section('content')

    <div class="row">
        <h3> Welcome to <strong> Fattura-electronica App</strong></h3>

        <p> This application firstly allows you to generate an invoice in XML format from the data filled in a form. Then send the generated invoice (XML file) by email.</p>
        
        <p> <a href="{{ route('invoiceCreate') }}"> Create your invoice</a> </p>
        
        <hr>
    </div>
    
@endsection
