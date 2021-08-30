<<<<<<< HEAD
@if (session()->has('alert-success'))
    <div class="alert alert-success">
        <span>{{session('alert-success')}}</span>
    </div>
@endif
@if (session()->has('alert-danger'))
    <div class="alert alert-danger">
        <span>{{session('alert-danger')}}</span>
    </div>
=======

@if (session()->has('alert-success'))
 <div class="alert alert-success">{{ session('alert-success') }}</div>
@endif


@if (session()->has('alert-danger'))
    <div class="alert alert-danger">{{ session('alert-danger') }}</div>
>>>>>>> f4882f09503791f60d5cf01145b8ac0d7a77096f
@endif