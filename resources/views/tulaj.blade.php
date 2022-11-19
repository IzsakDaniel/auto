@extends('layouts.master')
@section('title','Tulaj')
@section('content')
    @include('menu')

<div class="container p-5 my-5 border rounded-5 bg-dark text-white col-lg-6">
  <div class="container p-2 my-2 text-warning"><h1>Tulajdonos regisztrálása</h1> </div>
<form method="post" action="">
 
    <div class="mb-3 mt-3  ">
      <label for="tulaj" class="form-label">Tulaj neve</label>
      <input type="text" class="form-control" id="tnev" placeholder="Add meg a neved" name="tnev">
    </div>
    <div class="mb-3 ">
      <label for="pwd" class="form-label">Tulajdonjog kezdete</label>
      <input type="number" class="form-control" id="tkezd" placeholder="Pl. 2003" name="tkezd">
    </div>
    <div class="mb-3 ">
        <label for="pwd" class="form-label">Tulajdonjog vége</label>
        <input type="number" class="form-control" id="tveg" placeholder="Pl. 2020" name="tveg">
      </div>
    <div class="">
    <button type="button" class="btn btn-warning">Küldés</button>
    </div>
  </form>
</div>
                                 


@endsection