@extends("layout")

@section('content')
    <h2> Sending the generated invoice as an attachment by email</h2>

    <p> Please fill in the following form with the mail parameters.</p>
    <form method="post" action="{{ route('mailSend') }}">
        @csrf
        
        <div class="row">

            <input id="idAttachment" type="hidden" name="idAttachment" value="{{ old('id') ?? $id }}" placeholder="{{$id}}" class="@error('id') is-invalid @enderror">
            </br>
            <!--  INPUT mailTo -->
            <label for="mailTo">To: </label>
            <input required size="100%" id="mailTo" type="email" name="mailTo" value="{{ old('mailTo') }}" placeholder=" recipient@customdomain.com" class="@error('mailTo') is-invalid @enderror">
            @error('mailTo')
            <div class="form-error">{{ $message }}</div>
            @enderror
            </br>
            <!--  INPUT mailCc -->
            <label for="mailCc"> Cc: </label>
            <input size="100%" id="mailCc" type="email" name="mailCc" value="{{ old('mailCc') }}" placeholder=" recipient@customdomain.com" class="@error('mailCc') is-invalid @enderror">
            @error('mailCc')
            <div class="form-error">{{ $message }}</div>
            @enderror
            </br>
            <!--  INPUT mailFrom -->
            <label for="mailFrom"> From: </label>
            <input disabled size="100%" id="mailFrom" type="email" name="mailFrom" value="{{ old('mailFrom') }}" placeholder="devmainkam@gmail.com" class="@error('mailFrom') is-invalid @enderror">
            @error('mailFrom')
            <div class="form-error">{{ $message }}</div>
            @enderror
            </br>
            <!--  INPUT mailSubject -->
            <label for="mailSubject"> Subject: </label>
            <input required  size="100%" id="mailSubject" type="text" name="mailSubject" value="{{ old('mailSubject') }}" placeholder=" Mail object" class="@error('mailSubject') is-invalid @enderror">
            @error('mailSubject')
            <div class="form-error">{{ $message }}</div>
            @enderror
            <br>
            <!--  INPUT mailTitle -->
            <label for="mailTitle"> Title: </label>
            <input size="100%" id="mailTitle" type="text" name="mailTitle" value="{{ old('mailTitle') }}" placeholder=" Dear title of email ..." class="@error('mailTitle') is-invalid @enderror">
            @error('mailTitle')
            <div class="form-error">{{ $message }}</div>
            @enderror
            </br>
            <!--  INPUT mailMessage -->
            <label for="mailMessage"> Message: </label></br>
            <textarea required  rows="10" cols="100%" id="mailMessage" type="text" name="mailMessage" onKeyPress placeholder=" Type your mail message body here ..." class="@error('mailMessage') is-invalid @enderror">{{ old('mailMessage') }}</textarea>
            @error('mailMessage')
            <div class="form-error">{{ $message }}</div>
            @enderror

        </div>
        <!--  INPUT SUBMIT BUTTON-->
        <button type="submit" name="submit" value="submit"> Send mail </button>
        <button type="reset" name="reset" value="reset"> Reset</button>
</br>
        <a href="{{ route('goback') }}"> Go back to form </a>
    </form>
    <hr>
@endsection
