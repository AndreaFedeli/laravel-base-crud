@extends('layouts.app')
@section('content')
  <form action="{{route('autos.store')}}" method="post">
  @csrf
  {{-- <input name="_method" type="hidden" value="POST"> --}}
  @method('POST')
  <label for="title">Marca</label>
  <input type="text" name="marca" placeholder="Marca">
  <label for="content">Modello</label>
  <input type="text" name="modello"
  placeholder="Modello">
  <label for="title">Anno</label>
  <input type="text" name="anno" placeholder="anno">
  <input type="submit" value="Invia">
  </form>

@endsection
