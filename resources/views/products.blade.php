@extends('layouts.main')

@section('container')
<style>
.products {
    height: auto;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    position: absolute;
    top: 115px;
    left: 0px;
    right: 0px;
    margin: 0;
}
 
    .products h1 {
        font-weight: 700;
        font-size: 3rem; /* Ukuran huruf */
        margin: 0; /* Hilangkan margin default */
        padding: 20px 0; /* Jarak atas dan bawah */
        text-transform: uppercase; /* Huruf kapital */
        color: #D4AF37; /* Warna teks */
        background-color: #1e1e1e; /* Warna latar highlight */
        width: 100%; /* Pastikan memenuhi lebar layar */
        box-shadow: 0px 5px 5px 5px rgba(0, 0, 0, 0.5);
        position: sticky; /* Tetap di tempat saat scroll */
        top: 0; /* Pastikan judul tetap di bagian atas */
        z-index: 10; /* Berada di atas elemen lain */
    }
    
    .products-container {
        display: flex; /* Elemen dalam kontainer diletakkan secara horizontal */
        gap: 0; /* Jarak antar elemen */
        overflow-x: auto; /* Aktifkan scroll horizontal */
        padding: 10px 0; /* Tambahkan padding untuk jarak */
        margin: 0; /* Tengahkan kontainer */
        width: 100%; /* Pastikan kontainer produk tetap dalam area */
        box-sizing: border-box; /* Sertakan padding dalam ukuran elemen */
        scroll-snap-type: x mandatory; /* Scroll snap untuk pengalaman scroll yang lebih baik */
    }
    
    .products-container::-webkit-scrollbar {
        height: 8px; /* Tinggi scrollbar */
    }
    
    .products-container::-webkit-scrollbar-thumb {
        background: #D4AF37; /* Warna scrollbar */
        border-radius: 10px; /* Membuat sudut scrollbar melingkar */
    }
    
    .products-container::-webkit-scrollbar-track {
        background: #1B1B1B; /* Warna latar belakang track scrollbar */
    }
    
    .product-post {
        flex: 0 0 auto; /* Elemen produk tidak menyusut atau melebar */
        scroll-snap-align: center; /* Snap ke posisi tengah saat scroll */
        width: 427px; /* Lebar tetap untuk setiap produk */
        text-align: center; /* Rata tengah konten */
        padding: 20px; /* Jarak dalam elemen */
        border-left: 0.1px solid #8E8B6E; /* Garis pembatas kiri antar produk */
        border-right: 0.1px solid #8E8B6E;
    }
    
    .product-post:first-child {
        border-left: none;
    }
    
    .product-post:last-child {
        border-right: none;
    }

    .product-post img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin-bottom: 20px;
        margin-top: 20px;
        align-items: center;
        object-fit: cover;
    }

    /* Nama produk */
    .product-post h2 {
        font-weight: 600;
        font-size: 1.5rem;
        align-items: center;
        margin-bottom: 15px;
        margin-top: 20px;
        color: #F5E3C3;
    }

    /* Deskripsi produk */
    .product-post p {
        font-weight: 400;
        font-size: 1rem;
        align-items: center;
        line-height: 1.5;
        color: #8E8B6E;
        display: -webkit-box; /* Membuat elemen menjadi fleksibel dalam tampilan */
        -webkit-line-clamp: 3; /* Membatasi teks hanya dua baris */
        -webkit-box-orient: vertical; /* Menentukan arah teks */
        overflow: hidden; /* Menyembunyikan teks yang lebih panjang */
        text-overflow: ellipsis;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 768px) {
        .products-products {
            width: 100%;
        }
        
        .products-container {
            flex-wrap: nowrap; /* Scroll horizontal tetap berlaku */
            justify-content: flex-start; /* Elemen mulai dari kiri */
            width: 100%;
        }

        .product-post {
            width: 100%;
        }
    }
    
    a.product-post {
        display: block; /* Supaya elemen <a> membungkus seluruh konten */
        text-decoration: none; /* Hilangkan garis bawah */
        color: inherit; /* Gunakan warna teks elemen induk */
        transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Efek hover */
    }

    a.product-post:hover {
        background-color: #D4AF37; /* Ubah latar belakang saat hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Tambahkan bayangan */
    }     

    .product-post:hover h2 {
        color: #1B1B1B; /* Mengubah warna judul produk menjadi emas saat hover */
    }
    
    .product-post:hover p {
        color: #1e1e1e; /* Mengubah warna deskripsi produk menjadi terang saat hover */
    }
</style>
<body>
<div class="products">
      <h1>PRODUCTS</h1>

        <div class="products-container">
          @foreach ($products as $product)
            <a href="/products/{{ $product->slug }}" class="product-post">
              <img src="/img/{{ $product->name }}.jpg" alt="{{ $product->name }}">
              <h2>{{ $product->name }}</h2>
              <p>{{ $product->excerpt }}</p>
            </a>
          @endforeach
        </div>
</div>
</body>
@endsection