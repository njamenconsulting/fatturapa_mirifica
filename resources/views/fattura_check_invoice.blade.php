@extends("layout")

@section('content')

    <h3> Generate an invoice in XML format <em> - step 2 - </em></h3>
    <p> Please check if your invoice is correct : </p>
    <pre style = "border: 1px solid;
                  margin: 5px;
                  padding: 10px;
                  overflow-x: auto;
                  white-space: pre-wrap;
                  word-wrap: break-word;
                  background-color: rgb(226, 234, 241);
                  font-family: Open sans;
                  font-size: 15px;"> {{$content}} </pre>
    
    <ul>
    <hr>
        <li> If it isn't correct, <a href="#">go back to form</a></li>
        </br>
        <li> If it's correct 
            <a href="{{ url('fattura/download',$filename) }}">Download Invoice generated</a>
             or 
            <a href="{{ url('fattura/mail',$filename) }}">Send Invoice generated by mail</a>
        </li>
        </br>
        <hr>
    </ul>
@endsection