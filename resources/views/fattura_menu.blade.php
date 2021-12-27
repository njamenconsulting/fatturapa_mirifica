@extends("layout")

@section('content')

    <div style="padding-left:16px">
        <h3> Fattura elettronica italiana <strong>in XML</strong> (formato FatturaPA)</h3>
        <p>A PHP app for managing italian e-invoice and notice XML formats. (Pacchetto PHP per gestire il formato XML di fatture e notifiche come richiesto dal SdI).</p>
        </br></br>

        <a href="{{ url('fattura/download',$filename) }}">Download XML file</a>

        </br></br>

        <a href="{{ url('fattura/mail',$filename) }}">Send XML invoice by mail</a>

        </br></br>
    </div>

@endsection
