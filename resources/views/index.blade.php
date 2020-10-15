@extends('layouts.app')
@section('content')
@foreach ($data as $auto)
<ul>
  <li>{{$auto->marca}}</li>
  <li>{{$auto->modello}}</li>
  <li>{{$auto->anno}}</li>
</ul>
@endforeach
@endsection
