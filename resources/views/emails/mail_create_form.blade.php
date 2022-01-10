@extends("layouts.app")

@section('content')

    <h3> Sending the generated invoice as an attachment by email</h3>

    <p class="fst-italic text-primary"> Please fill in the following form with the mail parameters.</p>


<div class="card border-dark mb-3" style="max-width: 50rem;border:2px solid">
    <div class="card-header" style="border-bottom: 2px solid;">
    <h4 class="card-title"> <i class="fas fa-edit"></i>  New mail </h4>
    </div>
    <div class="card-body" style="background-color: var(--bs-light);">

        <form method="post" action="{{ route('mailSend') }}">
            @csrf
            
            <div class="row mb-2">

                <input id="idAttachment" type="hidden" name="idAttachment" value="{{ old('id') ?? $id }}" placeholder="{{$id}}" class="form-control @error('id') is-invalid @enderror">
                </br>
                <!--  INPUT mailTo -->
                <label for="mailTo"> To: </label>
                <input required  id="mailTo" type="email" name="mailTo" value="{{ old('mailTo') }}" placeholder=" recipient@customdomain.com" class="form-control @error('mailTo') is-invalid @enderror">
                @error('mailTo')
                <div class="form-error">{{ $message }}</div>
                @enderror
                </br>
                <!--  INPUT mailCc -->
                <label for="mailCc"> Cc: </label>
                <input  id="mailCc" type="email" name="mailCc" value="{{ old('mailCc') }}" placeholder=" recipient@customdomain.com" class="form-control @error('mailCc') is-invalid @enderror">
                @error('mailCc')
                <div class="form-error">{{ $message }}</div>
                @enderror
                </br>
                <!--  INPUT mailFrom -->
                <label for="mailFrom"> From: </label>
                <input disabled  id="mailFrom" type="email" name="mailFrom" value="{{ old('mailFrom') }}" placeholder="devmainkam@gmail.com" class="form-control @error('mailFrom') is-invalid @enderror">
                @error('mailFrom')
                <div class="form-error">{{ $message }}</div>
                @enderror
                </br>
                <!--  INPUT mailSubject -->
                <label for="mailSubject"> Subject: </label>
                <input required  id="mailSubject" type="text" name="mailSubject" value="{{ old('mailSubject') }}" placeholder=" Mail object" class="form-control @error('mailSubject') is-invalid @enderror">
                @error('mailSubject')
                <div class="form-error">{{ $message }}</div>
                @enderror
                <br>
                <!--  INPUT mailTitle -->
                <label for="mailTitle"> Title: </label>
                <input  id="mailTitle" type="text" name="mailTitle" value="{{ old('mailTitle') }}" placeholder=" Dear title of email ..." class="form-control @error('mailTitle') is-invalid @enderror">
                @error('mailTitle')
                <div class="form-error">{{ $message }}</div>
                @enderror
                </br>
                <!--  INPUT mailMessage -->
                <label for="mailMessage"> Message: </label></br>
                <textarea required rows="5"  id="mailMessage" type="text" name="mailMessage" onKeyPress placeholder=" Type your mail message body here ..." class="form-control @error('mailMessage') is-invalid @enderror">{{ old('mailMessage') }}</textarea>
                @error('mailMessage')
                <div class="form-error">{{ $message }}</div>
                @enderror

            </div>
            <!--  INPUT SUBMIT BUTTON-->
            <button type="submit" name="submit" value="submit" class="btn btn-primary">  <i class="fas fa-paper-plane"></i> Send mail </button>
            <button type="reset" name="reset"  class="btn btn-warning">  <i class="fas fa-undo"></i>  Reset </button>

        </form>   
    </div>
    <div class="card-footer text-muted" style="border-top: 2px solid;">
    <i class="fas fa-exclamation-triangle"></i> 
         Please contact administrator to use your own sender email
    </div>
</div>

@endsection
