@extends("layouts.app")

@section('content')

    <h2> Details of invoice {{ $filename}} </h2>
    <p class="fst-italic"> Here you can see all of the details of this invoice: </p>

    <pre style = "border: 1px solid;
                  margin: 5px;
                  padding: 10px;
                  overflow-x: auto;
                  white-space: pre-wrap;
                  word-wrap: break-word;
                  background-color: rgb(226, 234, 241);
                  font-family: Open sans;
                  font-size: 15px;"> {{$content}} </pre>
    
    <a href="{{ route('fileList') }}"> Go back</a> 
    <hr>  

@endsection
