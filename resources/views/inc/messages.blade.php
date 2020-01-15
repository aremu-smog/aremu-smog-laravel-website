<div class="col-10 message">
@if($errors->any())

    Eish... The following errors occured
<ul>
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
</ul>
@endif

@if(session('success'))
    {!! session('success') !!}  
@endif
</div>