@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Venda de Produtos</div>
                <div class="card-body">
                   <table class="table">
                   <form class="row g-3">
  <div class="col-md-6">
    <label for="product" class="form-label">Produto</label>
    <select class="form-control" id="product">
      @foreach ($produtos as $product)
          <option value="{{$product->id}}">{{$product['produto']}}</option>
      @endforeach
    </select>
  </div>
  <div class="col-md-6">
    <label for="product" class="form-label">Cliente</label>
    <select  class="form-control" class="product">
    @foreach ($cliente as $cli)
          <option value="{{$cli->user_id}}">{{$cli['name']}}</option>
      @endforeach
      </select>
  </div>
    <label for="inputState" class="form-label">Parcelamento</label>
    <select id="parcelamento" class="form-select" >
      <option value="1"selected>1x</option>
      <option value="2"> 2x</option>
      <option value="3">3x</option>
      <option value="4">4x</option>
      <option value="5">5x</option>
      <option value="6">6x</option>
      <option value="7">7x</option>
      <option value="8">8x</option>
      <option value="9" >9x</option>
      <option value="10">10x</option>
      <option value="11">11x</option>
      <option value="12">12x</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Comprar</button>
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
