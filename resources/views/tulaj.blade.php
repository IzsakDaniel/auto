@extends('layouts.master')
@section('title','Tulaj')
@section('content')
    @include('menu')

<div class="container p-5 my-5 border rounded-5 bg-dark text-white col-lg-6">
  <div class="container p-2 my-2 text-warning"><h1>Tulajdonos regisztrálása</h1> </div>
<form method="post">
  @csrf
      @if (session()->get('kesz'))
      <div class="alert alert-success">{{session()->get('kesz')}}  </div>
      @endif
    <div class="form-group col-mb-3">
      <label for="tulaj" class="form-label">Tulajdonos neve</label>
      <input type="text" class="form-control" id="tnev" placeholder="Add meg a neved" name="tnev">
    </div>
    <div class="mb-3 ">
      <label for="pwd" class="form-label">Tulajdonjog kezdete</label>
      <input name="start" type="text" class="form-control" id="start">
    </div>
    <div class="mb-3 ">
        <label for="pwd" class="form-label">Tulajdonjog vége</label>
        <input name="end" type="text" class="form-control" id="end">
      </div>
    <div class="">
    <button type="submit" class="btn btn-warning">Küldés</button>
    </div>
  </form>
</div>
                                 


@endsection