@extends("layout")

@section('content')

    <h3> Fattura elettronica italiana <strong>in XML</strong> (formato FatturaPA)</h3>
    <p>A PHP app for managing italian e-invoice and notice XML formats. (Pacchetto PHP per gestire il formato XML di fatture e notifiche come richiesto dal SdI).</p>
    </hr>
    <a href="{{ route('fattura-edit') }}">Go to form</a></br></br>
    
@endsection
