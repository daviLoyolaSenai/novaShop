@extends('website.index')
@section('assunto')
  <main class="page-hero">
    <div class="container">
      <div class="notice">Mensagem enviada com sucesso. Personalize este formulário para integrar com email ou CRM.</div>
      <div class="contact-grid" style="margin-top:18px">
        <section class="page-panel">
          <span class="kicker">Contato comercial</span>
          <h2>Fale com a NovaShop</h2>
          <p>Use esta página para atendimento, dúvidas, suporte e formulários comerciais.</p>
          <p><strong>Email:</strong> contato@novashop.com</p>
          <p><strong>Telefone:</strong> +55 11 4000-0000</p>
          <p><strong>Endereço:</strong> Av. Exemplo, 1200 - São Paulo</p>
        </section>

        <section class="page-panel">
          <form id="contactForm" class="list">
            <label>Nome<input required type="text" placeholder="Seu nome" /></label>
            <label>Email<input required type="email" placeholder="voce@email.com" /></label>
            <label>Assunto<input required type="text" placeholder="Como podemos ajudar?" /></label>
            <label>Mensagem<textarea required placeholder="Escreva sua mensagem"></textarea></label>
            <button class="btn btn-primary" type="submit">Enviar mensagem</button>
          </form>
        </section>
      </div>
    </div>
  </main>
@endsection