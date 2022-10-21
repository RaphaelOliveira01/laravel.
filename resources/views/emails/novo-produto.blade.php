@component('mail::message')
# {{$produto}}

Preço do Porduto: {{ $preco}}

@component('mail::button', ['url' => $url])
Clique aqui para ver o produto
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent
