@extends('website.index')
@section('assunto')
  <main class="page-hero">
    <div class="container cart-grid">
      <section class="page-panel">
        <h2>Seu carrinho</h2>
        <div class="list">
          
          @foreach($itensCarrinho as $item)
          <div class="line-item">
            <img src="{{ asset($item['img']) }}" alt="{{ $item['nome'] }}">
            <div>
              <strong>{{ $item['nome'] }}</strong>
              <p class="small">{{ $item['detalhes'] }}</p>
              <div class="price" data-price="{{ $item['preco'] }}">
                R$ {{ number_format($item['preco'], 2, ',', '.') }}
              </div>
            </div>
          </div>
          @endforeach
          </div>
      </section>

      <aside class="summary">
        <h3>Resumo do pedido</h3>
        <div class="summary-row"><span>Subtotal</span><strong>R$ 809,80</strong></div>
        <div class="summary-row"><span>Frete</span><strong>Grátis</strong></div>
        <div class="summary-row"><span>Desconto</span><strong>R$ 40,00</strong></div>
        <div class="summary-row"><span>Total</span><strong>R$ 769,80</strong></div>
        <div class="cta-row">
          <a class="btn btn-primary" href="/checkout">Continuar</a>
          <a class="btn btn-light" href="/catalogo">Adicionar mais</a>
        </div>
      </aside>
    </div>
  </main>
@endsection