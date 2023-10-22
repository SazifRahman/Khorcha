@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12 welcome_part">
        <p><span>Welcome Mr.</span> <b> <i> {{Auth::user()->name}} </i> </b> </p>
    </div>
</div>

@endsection