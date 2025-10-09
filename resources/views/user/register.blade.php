@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if ($error->any())
            @foreach ($error->all() as $err )
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif

        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Name<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="" id="" value="{{  }}">
            </div>
            
            <div class="mb-3">
                <label>Username<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="" id="" value="{{  }}">
            </div>

            <div class="mb-3">
                <label>Password<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="" id="" value="{{  }}">
            </div>

            <div class="mb-3">
                <label>Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="" id="" value="{{  }}">
            </div>

            <div class="mb-3">
               <button class="btn btn-primary">Register</button>
               <a class="btn btn-danger" href="{{ route('home') }}"></a>
            </div>
            
            
        </form>
    </div>
</div>
@endsection