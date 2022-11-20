@extends('layouts.master')
@section('title', 'Főoldal')
@section('content')
@include('menu')


<div class="container p-5 my-5 border rounded-5 bg-dark text-white col-lg-6">
   <div class="container  p-2 my-2 text-warning"><h1 id="test">Autók listája</h1></div> 
    <div class="row">
        <div class="col">
            <table class="table-striped table table-dark text-white m-2 text-center " >
                <thead class="table-secondary text-dark fw-bold fst-italic">
                    <td>Rendszám</td>
                    <td>Típus</td>
                    <td>Szín</td>
                    <td>Információk</td>
                </thead>
                @foreach ($autok as $item)
                <tr>
                    <td>{{$item->rendszam}}</td>
                    <td>{{$item->tipus}}</td>
                    <td>{{$item->szin}}</td>
                    <td>
                        <form method="POST">
                            <button type="button" class="btn btn-warning text-black"data-bs-toggle="modal" data-bs-target="#myModal">Információk</button>
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
                                        {{$elem->nev}}
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