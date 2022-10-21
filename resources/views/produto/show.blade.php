@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$produtos->produto}}</div>
                <div class="card-body">  
                <fieldset disabled>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Preço</label>
<input type="decimal" class="form-control" value="{{$produtos->preco}}">
</div>
</fieldset>
    <a href="{{url()->previous()}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
</div>
@endsection
