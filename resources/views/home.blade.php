@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="/notes" method="POST">
                    <input name="text">
                    <checkbox></checkbox>
                    <div></div>
                    <button>Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
