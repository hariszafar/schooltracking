@if(Session::has('message') || Session::has('error'))
<div class="row m-0">
    <div class="col-md-12">
        @if(Session::has('message'))
        <div class="a_alert alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <em> {!! session('message') !!}</em>
        </div>
        @endif
        @if(Session::has('error'))
        <div class="a_alert alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <em> {!! session('error') !!}</em>
        </div>
        @endif
    </div>
</div>
@endif
@if (isset($errors) && count($errors) > 0)
<div style="width: 50%; margin-left: 1%; margin-top: 1%;" class="a_alert alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif