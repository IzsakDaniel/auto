@extends('layouts.master')
@section('title','baleset')
@section('content')
    @include('menu')

<div class="container p-5 my-5 border rounded-5 bg-dark text-white col-lg-6">
    <div class="container p-2 my-2 text-warning"><h1>Balesetek regisztrálása</h1> </div>
    <form method="post">
      @csrf
      @if (session()->get('kesz'))
      <div class="alert alert-success">{{session()->get('kesz')}} </div>
      @endif
        <div class="mb-3 mt-3  ">
          <label for="tulaj" class="form-label">Baleset időpontja:</label>
          <input type="date" class="form-control" id="Idopont" placeholder="Pl." name="Idopont" value="{{old('Idopont')}}" >
          @error('Idopont')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div class="mb-3 ">
          <label for="pwd" class="form-label">Baleset leírása:</label>
          
          <input type="textbox" class="form-control" id="serules_leirasa" placeholder="Mesélje el mi történt" name="serules_leirasa" value="{{old('serules_leirasa')}}">
          @error('serules_leirasa')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
        </div>
        
        <div>
        <button type="submit" class="btn btn-warning">Küldés</button>
        </div>
      </form>
    </div>
@endsection