@extends('layouts.main')

@section('container')
<style>
.home {
    background-image: url('/img/BG.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
}

    .home-home {
        height: fit-content; /* Tinggi hero section sebesar tinggi layar */
        width: 100%; /* Lebar 100% agar konten tetap di bagian kanan */
        display: flex; /* Gunakan Flexbox */
        justify-content: flex-end; /* Tempatkan konten di sisi kanan */
        padding: 0 50px; /* Beri jarak dari tepi kanan */
        position: absolute;
        top: 150px;
        right: 70px;
        align-items: flex-start; /* Tempatkan konten di atas */
        text-align: center; /* Rata tengah untuk teks */
    }

    .home-content {
        max-width: 700px; /* Batasi lebar konten */
    }

    .home h1 {
        font-weight: 700; /* Bold */
        font-size: 5.5rem; /* Ukuran font besar untuk judul */
        margin: 0;
        color: #D4AF37; /* Warna teks */
    }

    .home p {
        font-weight: 400; /* Normal */
        font-size: 1.5rem; /* Ukuran font tagline */
        margin: 10px 0 0;
        color: #F5E3C3;
    }

    @media (max-width: 768px) {
        .home-home {
            width:auto;
        }
    }

</style>
<body class="home">
    <div class="home-home">
        <div class="home-content">
            <h1>Coffee Been</h1>
            <p>From Bean to Brew, Your Perfect Cup Awaits</p>
        </div>
    </div>
</body>
@endsection

