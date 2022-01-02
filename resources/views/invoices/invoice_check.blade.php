@extends("layout")

@section('content')

    <h2> Generate an invoice in XML format <em> - step 2 - </em></h2>
    <p> Please check if your invoice is correct : </p>
    <pre style = "border: 1px solid;
                  margin: 5px;
                  padding: 10px;
                  overflow-x: auto;
                  white-space: pre-wrap;
                  word-wrap: break-word;
                  background-color: rgb(226, 234, 241);
                  font-family: Open sans;
                  font-size: 15px;"> {{$contents}} </pre>
     <hr>   
    <ul>
        <li> If it isn't correct, <a href="{{ route('invoiceCreate') }}">go back to form</a></li>
        </br>
        <li> If it's correct 
            <a href="{{ route('invoiceStore') }}">Store generated Invoice into database</a>
       </li>
        </br>
    </ul>
    <hr>
@endsection
