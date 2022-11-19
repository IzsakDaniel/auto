@extends('layouts.master')
@section('title','Auto Regisztráció')
@section('content')
    @include('menu')

<div class="container p-5 my-5 border rounded-5 bg-dark text-white col-lg-6">
    <div class="container p-2 my-2 text-warning"><h1>Autók regisztrálása</h1> </div>
    <form method="post" action="{{url('auto-save')}}">
        @csrf
        <div class="mb-3 mt-3  ">
          <label for="tulaj" class="form-label">Rendszám:</label>
          <input type="text" class="form-control" id="rendszam" placeholder="Pl. XXX-000 || XXXX-000" name="rendszam">
        </div>
        <div class="mb-3 ">
          <label for="pwd" class="form-label">Típus:</label>
          <input type="text" class="form-control" id="tipus" placeholder="Pl. Suzuki Swift 1.0" name="tipus">
        </div>
        <div class="mb-3 ">
            <label for="pwd" class="form-label">Szín:</label>
            <input type="text" class="form-control" id="szin" placeholder="Pl. kék" name="szin">
          </div>
        <div>
        <button type="submit" class="btn btn-warning" >Küldés</button>
        </div>
      </form>
    </div>
@endsection