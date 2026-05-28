<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller
{
    public function home() 
    {
        $produtos = [
            [
                'img'   => 'assets/img/product1.svg',
                'tag'   => 'Moda urbana',
                'nome'  => 'Tenis Urban',
                'preco' => 289.90, 
                'meta1' => '4.9 estrelas',
                'meta2' => '12x sem juros'
            ],
            [
                'img'   => 'assets/img/product2.svg',
                'tag'   => 'Acessorios',
                'nome'  => 'Mochila Pro',
                'preco' => 229.90,
                'meta1' => 'Mais vendida',
                'meta2' => 'Entrega rapida'
            ],
            [
                'img'   => 'assets/img/product3.svg',
                'tag'   => 'Lifestyle',
                'nome'  => 'Relogio Edge',
                'preco' => 399.90,
                'meta1' => 'Edicao premium',
                'meta2' => 'Garantia 1 ano'
            ],
            [
                'img'   => 'assets/img/product4.svg',
                'tag'   => 'Tech',
                'nome'  => 'Headphone Air',
                'preco' => 519.90,
                'meta1' => 'Noise canceling',
                'meta2' => 'Frete gratis'
            ]
        ];
        
        return view('website.home', compact('produtos'));
    }

    public function catalogo() 
    {
        $produtos = [
            [
                'img'   => 'assets/img/product1.svg',
                'tag'   => 'Moda urbana',
                'nome'  => 'Tenis',
                'preco' => 289.90, 
            ],
            [
                'img'   => 'assets/img/product2.svg',
                'tag'   => 'Acessórios',
                'nome'  => 'Mochila',
                'preco' => 229.90,
            ],
            [
                'img'   => 'assets/img/product3.svg',
                'tag'   => 'Lifestyle',
                'nome'  => 'Relógio',
                'preco' => 399.90,
            ],
            [
                'img'   => 'assets/img/product4.svg',
                'tag'   => 'Tech',
                'nome'  => 'Headphone',
                'preco' => 519.90,
            ]
        ];
        
        return view('website.catalogo', compact('produtos'));
    }

    public function produto()
    {
        $produtoSelecionado = [
            'img'   => 'assets/img/product1.svg',
            'nome'  => 'Tenis Urban',
            'preco' => 289.90,
        ];
        
        return view('website.produto', compact('produtoSelecionado'));
    }

    public function carrinho()
    {
        $itensCarrinho = [
            [
                'img'      => 'assets/img/product1.svg',
                'nome'     => 'Tenis Urban Edition',
                'detalhes' => 'Cor branco • Tamanho 40',
                'preco'    => 289.90
            ],
            [
                'img'      => 'assets/img/product4.svg',
                'nome'     => 'Headphone Air',
                'detalhes' => 'Preto fosco • Bluetooth 5.3',
                'preco'    => 519.90
            ]
        ];

        return view('website.carrinho', compact('itensCarrinho'));
    }

    public function checkout()
    {
        return view('website.checkout');
    }

    public function contato()
    {
        return view('website.contato');
    }
}