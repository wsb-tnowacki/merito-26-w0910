@extends('layout.layout')
@section('tytul', ' - O nas')
@section('podtytul', 'Strona kontaktowa')
@section('tresc')
    <p>
        Treść strony O nas
        @isset($zadania)
          {{-- @dump($zadania)  --}}  
          <ol>
          @foreach ($zadania as $zadanie)
          <li>{{ $zadanie }}</li>  
          @endforeach   
          </ol>    
        @endisset

    </p>
@endsection