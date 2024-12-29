@extends('layouts.main')

@section('container')
<style>
body {
    background-color: #8E8B6E;
    font-family: 'Playfair Display', serif;
    width: 100%;

}

    .content-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        position: absolute;
        top: 115px;
        left: 0px;
        right: 0px;
    }

    .content-container .content-about {
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/img/About.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #F5E3C3;
        height: 500px;
        font-weight: 400;
        width: 100%; /* Memastikan background memenuhi viewport */
        position: relative;
        margin: 0;

        padding: 2rem 4rem;
    }

    .content-container .content-about h1 {
        font-size: 3rem;
        font-weight: 700;
    }

    .content-container .content-ourstory {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-weight: 400;
        text-align: justify;

        gap: 1rem;
        padding: 2rem 4rem;
    }

    .content-container .content-ourstory h1 {
        font-size: 3rem;
        font-weight: 600;
    }

    .content-container .content-whatweoffer {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-weight: 400;
        text-align: justify;

        gap: 1rem;
        padding: 2rem 4rem;
    }

    .content-container .content-whatweoffer h1 {
        font-size: 3rem;
        font-weight: 600;
    }

    .content-container .content-meetourteam {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-weight: 400;

        gap: 1rem;
        padding: 2rem 4rem;
    }

    .content-container .content-meetourteam h1 {
        font-size: 3rem;
        font-weight: 600;
    }

    .content-container .content-meetourteam h2 {
        font-size: 1.5rem;
        font-weight: 500;
    }

    .content-meetourteammembers {
        display: flex;
        flex-wrap: wrap; /* Membungkus elemen ke baris berikutnya jika melebihi ruang */
        justify-content: center; /* Mengatur elemen ke tengah */
        gap: 2rem; /* Memberikan jarak antar elemen */
    }

    .teammember {
        flex: 1 1 calc(33.333% - 2rem); /* Lebar setiap anggota 1/3 dari container */
        max-width: calc(33.333% - 2rem); /* Membatasi lebar maksimal */
        box-sizing: border-box; /* Termasuk padding dan border dalam ukuran elemen */
        text-align: center; /* Mengatur teks ke tengah */
    }

    .teammember img {
        width: 200px;
        height: 200px;
        border-radius: 10px;
        margin-bottom: 20px;
        margin-top: 20px;
        align-items: center;
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .content-about {
            width: 100%;
            margin: 0;
            
        }
        .content-container {
            width: 100%;
            padding: 2rem 0;
        }

        .teammember {
            flex: 1 1 calc(50% - 1rem); /* Lebar anggota menjadi 1/2 pada layar kecil */
            max-width: calc(50% - 1rem);
        }

    }

    @media (max-width: 480px) {
        .teammember {
            flex: 1 1 100%; /* Lebar anggota menjadi 100% pada layar sangat kecil */
            max-width: 100%;
        }
    }

</style>
<body> <!--Bagian Body seluruhnya wajib-->
    <div class="content-container">
      <div class="content-about">
        <h1>ABOUT</h1>
        <p>
          Selamat datang di Cofee Been, tempat di mana passion anda akan kopi berawal dari biji kopi terbaik. Didirikan dengan misi untuk menghadirkan biji kopi berkualitas luar biasa ke cangkir Anda.
        </p>
      </div>
      <div class="content-ourstory">
        <h1>Our Story</h1>
        <p>
          Kisah Cobean berawal dari hasrat sederhana: kecintaan mendalam terhadap kopi dan keinginan untuk 
          berbagi kekayaannya dengan dunia. Kami percaya bahwa kopi lebih dari sekadar minuman—melainkan pengalaman, 
          tradisi, dan cara untuk terhubung dengan orang lain. Dari keyakinan ini, lahirlah misi kami: mencari biji 
          kopi terbaik, memelihara praktik berkelanjutan, dan menghadirkan kualitas luar biasa pada setiap cangkir.
          Perjalanan kami dimulai dari para petani, pahlawan sejati di balik setiap biji kopi. Kami bekerja langsung
          dengan petani lokal yang telah menyempurnakan keahlian mereka dari generasi ke generasi. Dengan memahami
          teknik, tantangan, dan aspirasi mereka, kami tidak hanya memastikan bahwa kopi kami memenuhi standar tertinggi,
          tetapi juga berkontribusi pada pertumbuhan komunitas mereka.
        </p>
      </div>
      <div class="content-whatweoffer">
        <h1>What We Offer</h1>
        <p>
          Di Cobean, kami bangga menawarkan berbagai macam biji kopi untuk memenuhi beragam selera dan preferensi. 
          Dari yang kuat dan bersahaja hingga yang lembut dan beraroma bunga, pilihan kami dikurasi dengan cermatuntuk
          memenuhi kebutuhan para pencinta kopi di setiap level. Baik Anda seorang barista berpengalaman yang mencari
          hasil panggangan yang sempurna, seorang pembuat kopi rumahan yang menjelajahi berbagai profil rasa, atau
          pemilik kafe yang mencari konsistensi dan kualitas, biji kopi kami dirancang untuk meningkatkan pengalaman
          minum kopi Anda Penawaran kami meliputi biji kopi asal tunggal dari beberapa daerah penghasil kopi paling
          terkenal, serta campuran yang dibuat secara ahli yang menyatukan rasa yang saling melengkapi.
        </p>
      </div>
      <div class="content-meetourteam">
        <h1>Meet Our Team</h1>
        <div class="content-meetourteammembers">
            <div class="teammember">
                <img src="/img/FotoAmri.jpg" alt="Foto Amri">
                <h2>Amri Hanif Faiz Abidin</h2>
                <p>Hidup Seperti Larry</p>
            </div>
            <div class="teammember">
                <img src="/img/FotoHaikal.jpg" alt="Foto Haikal">
                <h2>Haikal Firdaus</h2>
                <p>I Don't Give A Fish</p>
            </div>
            <div class="teammember">
                <img src="/img/FotoFaisal.jpg" alt="Foto Faisal">
                <h2>Muhammad Faisal Hakim</h2>
                <p>Kratos Messi</p>
            </div>
            <div class="teammember">
                <img src="/img/FotoRafi.jpg" alt="Foto Rafi">
                <h2>Rafi Haritsya Fajar</h2>
                <p>Tidur Pun Sodap Ni</p>
            </div>
            <div class="teammember">
                <img src="/img/FotoThariq.jpg" alt="Foto Thariq">
                <h2>Thariq Aziz</h2>
                <p>Santai Santai</p>
            </div>
        </div>
      </div>
    </div>
  </body>
@endsection