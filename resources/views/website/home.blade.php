@extends('website.index')
@section('assunto')
  <main>
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-copy">
          <span class="kicker">Lançamento da semana</span>
          <h1>Seu ecommerce com visual premium e foco em conversão.</h1>
          <p>Template institucional com cara de marca forte, homepage impactante, catálogo, produto, carrinho, checkout e contato. Pronto para personalização.</p>
          <div class="cta-row">
            <a class="btn btn-primary" href="/catalogo">Ver produtos</a>
            <a class="btn btn-light" href="/contato">Falar com a equipe</a>
          </div>
        </div>
        <div class="hero-card">
          <img src="{{ asset('assets/img/hero.svg') }}" alt="Banner principal da loja" />
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-head">
          <div>
            <h2>Destaques da coleção</h2>
            <p>Produtos com forte apelo visual e organização pensada para ecommerce moderno.</p>
          </div>
          <a class="btn btn-light" href="/catalogo">Explorar catálogo</a>
        </div>

        <div class="grid-4">
          @foreach($produtos as $produto)
          <article class="card">
            <img src="{{ asset($produto['img']) }}" alt="{{ $produto['nome'] }}" />
            
            <div class="product-body">
              <span class="tag">{{ $produto['tag'] }}</span>
              
              <h3>{{ $produto['nome'] }}</h3>
              
              <div class="price" data-price="{{ $produto['preco'] }}"></div>
              
              <div class="meta">
                <span>{{ $produto['meta1'] }}</span>
                <span>{{ $produto['meta2'] }}</span>
              </div>
            </div>
          </article>
          @endforeach
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container banner">
        <div>
          <h2>Visual elegante, seções bem distribuídas e navegação fluida.</h2>
          <p>Ideal para apresentar uma marca, vender produtos e transmitir confiança logo na primeira dobra.</p>
        </div>
        <a class="btn btn-light" href="/checkout">Testar checkout</a>
      </div>
    </section>

    <section class="section">
      <div class="container grid-3">
        <div class="feature">
          <h3>Design contemporâneo</h3>
          <p>Composição sofisticada com gradientes, cards arredondados e hierarquia visual forte.</p>
        </div>
        <div class="feature">
          <h3>Estrutura pronta</h3>
          <p>Páginas separadas e arquitetura fácil de adaptar para qualquer nicho de ecommerce.</p>
        </div>
        <div class="feature">
          <h3>Base em HTML, CSS e JS</h3>
          <p>Leve, sem dependências pesadas, simples de editar e publicar em hospedagem comum.</p>
        </div>
      </div>
    </section>
  </main>
@endsection