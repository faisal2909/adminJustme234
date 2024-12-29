@extends('layouts.main')

@section('container')
    <style>
        .product {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
            url('{{ asset("img/{$product['name']}.jpg") }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            display: flex;
            flex-direction: column;
            font-size: 1rem;
        }
            .product h2 {
                font-family: 'Playfair Display', serif;
                font-weight: 500; /* Bold */
                font-size: 3rem; /* Ukuran font besar untuk judul */
                margin: 20px;
                margin-top: 0;
                color: #D4AF37;
                justify-content: center;
                text-align: center;
            }

            .product-container {
                display: flex;
                flex-direction: row;
                justify-content: center;
                padding: 0 20px;
                margin-bottom: 1rem;
            }

            .product-img {
                justify-content: center;
            }
            
            .product-img img {
                width: 400px;
                height: 400px;
                border-radius: 10px;
                margin-bottom: 0px;
                margin-top: 20px;
                align-items: center;
                object-fit: cover;
            }

            .product-img p {
                font-family: 'Playfair Display', serif;
                font-weight: 100; /* Normal */
                margin: 5px;
                margin-bottom: 20px;
                color: #F5E3C3;
                justify-content: center;
                text-align: center;
            }


            .product-desc {
                max-width: 700px;
                margin: 0 20px;
            }

            .product-desc h4 {
                font-family: 'Playfair Display', serif;
                font-weight: 200; /* Bold */
                font-size: 2rem; /* Ukuran font besar untuk judul */
                margin: 10px;
                color: #D4AF37;
                justify-content: flex-start;
            }
            .product-desc h5 {
                font-family: 'Playfair Display', serif;
                font-weight: 200; /* Bold */
                font-size: 1.5rem; /* Ukuran font besar untuk judul */
                margin: 10px;
                margin-bottom: 20px;
                color: #F5E3C3;
                justify-content: flex-start;
            }

            .product-desc p{
                font-family: 'Playfair Display', serif;
                font-weight: 100; /* Normal */
                font-size: 1.5rem; /* Ukuran font tagline */
                margin: 10px;
                margin-bottom: 20px;
                color: #F5E3C3;
                justify-content: flex-start;
                text-align: justify;
            }

            .product-desc a {
                font-family: 'Playfair Display', serif;
                font-weight: 100; /* Normal */
                font-size: 1rem; /* Ukuran font tagline */
                margin: 5px;
                margin-left: 10px;
                margin-bottom: 20px;
                color: #D4AF37;
                justify-content: flex-start;
            }
            @media (max-width: 768px) {
                .product-container {
                    flex-direction: column; /* Ubah susunan menjadi kolom */
                    align-items: center; /* Rata tengah secara horizontal */
                    gap: 1rem; /* Jarak antar elemen */
                }

                .product-desc {
                    width: 100%;
                }
                .product-img {
                    
                    width: fit-content; /* Sesuaikan lebar elemen agar pas dengan layar kecil */
                }
            }
    </style>

    <body class="product">
        <h2>{{ $product["name"] }}</h2>
        <div class="product-container">
            <div class="product-img">
                <img src="/img/{{ $product->name }}.jpg" alt="{{ $product->name }}">
                <p>Biji Kopi {{ $product->name }}</p>
            </div>
            <div class="product-desc"> 
                <h4>Tipe:</h4>
                <h5>{{ $product["type"] }}</h5>
                <h4>Asal:</h4>
                <h5>{{ $product["source"] }}</h5>
                <h4>Deskripsi:</h4>
                <p>{{ $product["desc"] }}</p>
                <a href="/products">Back to Products</a>
            </div>
        </div>  
    </body>
@endsection