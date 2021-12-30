@extends("layout")

@section('content')

    <h2> A- How to generate an invoice? </h2>

    <ol> 
        <li> First, go to <a href="{{ route('invoice-create')  }}"> New invoice </a> menu item ; </li> 
        <li> After fill out the form with invoice parameters; </li> 
        <li> See the XML format corresponding at filled parameters and ensure that it's correct; </li>
        <ul>
            <li>If it's correct, then you can choose to download it or send it by mail;</li>
            <li>Else, you go back to form to do the modifications</li>
        </ul>
    </ol>

    <h2> B- How to manage old invoices generated? </h2>

    <ol> 
        <li> First, go to <a href="{{ route('file-list')  }}"> See invoices </a> menu item;  </li> 
        <li> choose action that you want to run: </li> 
        <ul>
            <li> Delete; </li>
            <li> Download; </li>
            <li> See. </li>
        </ul>
    </ol>


@endsection
