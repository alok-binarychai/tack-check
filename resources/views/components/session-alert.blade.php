@if (Session::get('error') || Session::get('success') || Session::get('warning') || Session::get('info'))
    @if($message=Session::get('error'))
    <div class="alert alert-danger fade{{Session::has('error') ? 'show' : 'in'}}" role="alert">
        <strong>Error!&nbsp;</strong>{{$message}}
    </div>
    @endif
    @if($message=Session::get('success'))
    <div class="alert alert-success fade{{Session::has('success') ? 'show' : 'in'}}" role="alert">
        <strong>Success!&nbsp;</strong>{{$message}}
    </div>
    @endif
    @if($message=Session::get('warning'))
    <div class="alert alert-warning fade{{Session::has('warning') ? 'show' : 'in'}}" role="alert">
        <strong>Warning!&nbsp;</strong>{{$message}}
    </div>
    @endif
    @if($message=Session::get('info'))
    <div class="alert alert-info fade{{Session::has('info') ? 'show' : 'in'}}" role="alert">
        {{$message}}
    </div>
    @endif
@endif
@if ($errors->any())
    <div class="alert alert-danger fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif