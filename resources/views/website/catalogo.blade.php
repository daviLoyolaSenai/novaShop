@extends('website.index')
@section('assunto')
  <main class="page-hero">
    <div class="container page-panel">
      <div class="section-head">
        <div>
          <h2>Catálogo completo</h2>
          <p>Use filtros visuais para destacar categorias, coleções e campanhas sazonais.</p>
        </div>
      </div>

      <div class="catalog-toolbar">
        <input type="text" placeholder="Buscar produto" />
        <select>
          <option>Todas as categorias</option>
          <option>Moda</option>
          <option>Tech</option>
          <option>Acessórios</option>
        </select>
        <select>
          <option>Mais vendidos</option>
          <option>Menor preço</option>
          <option>Maior preço</option>
        </select>
      </div>

      <div class="grid-4" style="margin-top:22px">
        @foreach($produtos as $produto)
        <article class="card">
          <img src="{{ asset($produto['img']) }}" alt="{{ $produto['nome'] }}">
          
          <div class="product-body">
            <span class="tag">{{ $produto['tag'] }}</span> 
            
            <h3>{{ $produto['nome'] }}</h3>
            
            <div class="price">
              R$ {{ number_format($produto['preco'], 2, ',', '.') }}
            </div>
          
            <div class="meta">
              <span>Pronta entrega</span>
              <a href="/produto">Ver detalhes</a>
            </div>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </main>
@endsection