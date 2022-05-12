@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->type === 1)
                    <div class="btndiv" style="  display:flex;justify-content: center;">
                    <button  class="btn btn-primary" ><a href="{{ route('articles.index') }}" style="color:white; text-decoration:none;">admin panel</a></button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
