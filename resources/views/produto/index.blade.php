@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produto</div>

                <div class="card-body">
                   <table class="table">
  <thead>
    <tr>
      <th scope="col">Usuário</th>
      <th scope="col">Produto</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($produtos as $key => $t)
    <tr>
      <th scope="row">{{ $t['user_id'] }}</th>
      <td>{{ $t['produto'] }}</td>
      <td>{{ $t['preco'] }}</td>
    </tr>
     @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
