@extends('layouts.master')
@section('title', 'Főoldal')
@section('content')
@include('menu')

<h1 id="test">Autók listája</h1>
<div class="container text-white rounded-2">
    <div class="row">
        <div class="col">
            <table class="table-striped table table-dark text-white m-2 text-center">
                <thead class="table-light">
                    <td>Rendszám</td>
                    <td>Típus</td>
                    <td>Szín</td>
                    <td>Részletek</td>
                </thead>
                @foreach ($autok as $item)
                <tr>
                    <td>{{$item->rendszam}}</td>
                    <td>{{$item->tipus}}</td>
                    <td>{{$item->szin}}</td>
                    <td>
                        <form method="POST">
                            <button type="button" class="btn btn-info"data-bs-toggle="modal" data-bs-target="#myModal">Részletek</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tulajdonosok és balesetek száma</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
                <div class="row">
                    <div class="col">

                                @foreach ($tulaj as $elem)
                                <div class="row">
                                    <div class="col">
                                        {{$elem->tulajdonos_neve}}
                                    </div>
                                    </div>
                                @endforeach

                    </div>
                    <div class="col">Balesetek száma: {{count($baleset)}}</div>
                </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Bezárás</button>
        </div>

      </div>
    </div>
  </div>
@endsection