@extends('layouts.main')

@section('title'. 'Vinicius Events')

<h1>teste</h1>

@if (10 > 5)
<p>A condição é true</p>
@endif
@if ($nome == 'Vinicius')
<p>que nome bonito</p>
@endif
<p>{{$nome}}</p>

@endsection