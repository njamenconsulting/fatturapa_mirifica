@extends("layouts.app")

@section('content')

    <h2> Generate an invoice in XML format - STEP 2 - </h2>
    <p class="fst-italic text-primary">  Please check if your invoice is correct : </p>
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
        <li> If it isn't correct, 
            <a class="btn btn-warning" role="button" href="{{ route('invoiceCreate') }}"> <i class="fas fa-hand-point-left"></i> Go back to form </a></li>
        </br>
        <li> If it's correct 
            <a  class="btn btn-primary" role="button" href="{{ route('invoiceStore') }}"> <i class="fas fa-database"></i> Store generated Invoice into database </a>
       </li>
        </br>
    </ul>
    <hr>
@endsection
