@extends("layout")

@section('content')
    <h3> Fattura elettronica italiana <strong>in XML</strong> (formato FatturaPA)</h3>

    </br>
    <form method="post" action="{{ route('fattura-sendmail') }}"}}>
        @csrf
        <fieldset class="fieldset"><legend> Mail details:</legend>
            <input id="filename" type="hidden" name="filename" value="{{ old('filename') ?? $filename }}" placeholder="{{$filename}}" class="@error('filename') is-invalid @enderror">
            </br>
            <!--  INPUT mailTo -->
            <label for="mailTo">To: </label>
            <input id="mailTo" type="text" name="mailTo" value="{{ old('mailTo') }}" placeholder=" destinator@domain.com" class="@error('mailTo') is-invalid @enderror">
            @error('mailTo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </br>
            <!--  INPUT mailFrom -->
            <label for="mailFrom"> From: </label>
            <input id="mailFrom" type="text" name="mailFrom" value="{{ old('mailFrom') }}" placeholder="sender@domain.com" class="@error('mailFrom') is-invalid @enderror">
            @error('mailFrom')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </br>
            <!--  INPUT mailSubject -->
            <label for="mailSubject"> Subject: </label>
            <input id="mailSubject" type="text" name="mailSubject" value="{{ old('mailSubject') }}" placeholder=" Mail object" class="@error('mailSubject') is-invalid @enderror">
            @error('mailSubject')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </br>
            <!--  INPUT mailMessage -->
            <label for="mailMessage"> Message: </label>
            <textarea id="mailMessage" type="text" name="mailMessage" onKeyPress placeholder=" Type your mail message body here" class="@error('mailMessage') is-invalid @enderror">{{ old('mailMessage') }}</textarea>
            @error('mailMessage')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </fieldset>
        <!--  INPUT SUBMIT BUTTON-->
        <button type="submit" name="submit" value="submit">Send mail</button>
    </form>

@endsection
