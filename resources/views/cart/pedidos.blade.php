@extends('layout')
@section('main')

<h1>Meus Pedidos</h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/banner1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Número do Pedido:</h5>
              <div class="row">
                <h6>Data da compra: </h6>
              </div>
              <p class="card-text">Produto nome</p>
              <p class="card-text"><small class="text-muted">Total: R$</small></p>
              <button class="btn btn-outline-danger btn-block btn-sm">Ver Evento</button>
            </div>
          </div>
        </div>
      </div>


@endsection
