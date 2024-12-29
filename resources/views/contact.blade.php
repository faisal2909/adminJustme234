@extends('layouts.main')

@section('container')
<style>
.contact {
    background-color: #F5E3C3;
    font-family: 'Playfair Display', serif;
    font-weight: 400;
    width: 100%;
}

    .contact-container {
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

        .contact-container .contact-judul {
            background-color: transparent;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding-top: 1rem;
        }

        .contact-judul h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #4E342E;
        }


        .contact-kontak {
            background-color: transparent;
            display: flex;
            flex-direction: row;
            align-items: top;
            padding: 1rem;
            text-align: justify;
            column-gap: 70px;
            row-gap: 20px;
            width: 100%;
            justify-content: space-evenly;
        }

            .contact-informasi {
                background-color: transparent;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: justify;
                width: 550px;
                padding: 0.5rem 0.75rem;
                margin-bottom: 1rem;
            }

            .contact-informasi h2{
                text-align: center;
                font-weight: 600;
                color: #4E342E;
            }

        .kontak-sosmed {
            display: flex;
            flex-direction: column; /* Elemen disusun secara vertikal */
            align-items: center; /* Rata tengah secara horizontal */
            gap: 1rem; /* Jarak antar tombol */
        }

        .kontak-sosmed a {
            width: 10rem;
            display: inline-block;
            text-decoration: none;
            background-color: #4E342E;; /* Warna latar belakang tombol */
            color: white; /* Warna teks */
            padding: 0.5rem 1.5rem; /* Padding untuk ukuran tombol */
            border-radius: 8px; /* Membuat tombol melengkung */
            font-size: 1rem;
            font-weight: bold;
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        .kontak-sosmed a:hover {
            background-color: white;
            color: #4E342E;
        }


        .kontak-pesan {
            display: grid;
            flex-direction: column;
            justify-content: center;
            gap: 1rem;
        }

    /* title contact */
            .kontak-pesan #contact-judul {
                font-size: 1.5rem;
                font-weight: 600;
                text-align: center;
                margin-top: 1rem;
                color: #4E342E;
            }

            .kontak-pesan form {
                display: grid;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

    /* form contact */
            form .form {
                margin-bottom: 1rem;
            }

            form input, form textarea {
                width: 500px;
                min-height: 40px;
                max-height: 100px; /* Batas tinggi textarea */
                padding: 0.5rem 0.75rem;
                background-color: white;
                border: 1px solid white;
                border-radius: 10px;
                resize: none; /* Menonaktifkan resize manual */
                overflow-y: auto; /* Tampilkan scrollbar vertikal jika konten terlalu panjang */
            }
            
            form input:focus, form textarea:focus {
                outline: none;
                border: 1px solid #8E8B6E;
            }

    /* button contact */
            .kontak-pesan .contact-button {
                padding: 0.8rem 1rem;
                border: none;
                border-radius: 10px;

                background-color: #4E342E;
                text-transform: uppercase;
                font-size: 20px;
                font-weight: 700;
                color: white;
                cursor: pointer;
                transform: all 0.8s ease-in-out;
                margin: 0;
            }

            .kontak-pesan .contact-button:hover {
                background-color: white;
                color: #4E342E;
            }

@media (max-width: 768px) {
    .contact-kontak {
        flex-direction: column; /* Ubah susunan menjadi kolom */
        align-items: center; /* Rata tengah secara horizontal */
        gap: 2rem; /* Jarak antar elemen */
    }

    .contact-informasi {
        width: 100%;
    }
    .kontak-sosmed, .kontak-pesan {
        width: 100%; /* Sesuaikan lebar elemen agar pas dengan layar kecil */
    }

    form input, form textarea {
        width: 100%; /* Form mengikuti lebar kontainer */
    }
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border: 1px solid #c3e6cb;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 14px;
    text-align: center;
}

</style>

<body class="contact"> <!--Bagian Body seluruhnya wajib-->
    <div class="contact-container">
        <div class="contact-judul">
            <h1>CONTACT US</h1>
            <p>Ada pertanyaan atau komentar ? Hubungi kami !</p>
        </div>

        <div class="contact-kontak">
            <div>
                <div class="contact-informasi">
                    <h2>Informasi Kontak</h2>
                    <p>
                        Jika Anda mempunyai pertanyaan atau kekhawatiran, Anda dapat menghubungi kami
                        dengan mengisi formulir kontak, menelepon kami, datang ke kantor kami,
                        menemukan kami di jejaring sosial lain, atau Anda dapat mengirim email
                        pribadi kepada kami di :
                    </p>
                </div>
                <div class="kontak-sosmed">
                    <a href="https://wa.me/12345678910" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                    <a href="mailto:bijiopi@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i> Email</a>
                    <a href="https://facebook.com/bijikopi" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a>
                    <a href="https://instagram.com/bijikopi" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a>
                </div>                
            </div>
            <div class="kontak-pesan">
                <h1 id="contact-judul">Langsung saja isi form di bawah yaa..</h1>
                <form id="contactForm">
                    @csrf <!-- Laravel CSRF Token -->
                    <div class="form">
                        <input type="text" id="nama" placeholder="Name" name="name" required>
                    </div>    
                    <div class="form">
                        <input type="email" id="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="form">
                        <input type="numeric" id="noTelp" placeholder="Nomor Telepon" name="noTelp" required>
                    </div>
                    <div class="form">
                        <textarea id="message" placeholder="Pesan yang ingin Anda sampaikan" name="message" cols="30" rows="10" required></textarea>
                    </div> 
                    <button class="contact-button" type="submit">Submit</button>
                </form>     
                <div id="notification" style="display:none; color: green; font-weight: bold;"></div>           
            </div>
            <script>
                const form = document.getElementById('contactForm');
                const notification = document.getElementById('notification');
            
                form.addEventListener('submit', function(event) {
                    event.preventDefault(); // Mencegah refresh halaman
            
                    const formData = new FormData(form); // Mengambil data dari form
            
                    fetch("{{ route('contact.store') }}", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            notification.style.display = 'block';
                            notification.textContent = data.success; // Tampilkan pesan sukses
                            form.reset(); // Reset form setelah submit
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                });
            </script>
        </div>
    </div>
</body>
@endsection