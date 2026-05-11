<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Katalog Produk</title>

    <link rel="stylesheet" href="{{ asset('css/katalog.css') }}">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

</head>

<body>

    <!-- HEADER -->
    <section class="header">

        <div class="header-left">

            <!-- BUTTON SIDEBAR -->
            <button class="menu-btn" onclick="toggleSidebar()">
                <i class="fa-solid fa-bars"></i>
            </button>

            <!-- LOGO -->
            <a href="/" class="logo-section">

                <img
                src="{{ asset('images/logo-company.png') }}"
                alt="Logo">

                <span>
                    CV Mitra Mandiri Sejati
                </span>

            </a>

        </div>


        <div class="header-right">

            <!-- SEARCH -->
            <div class="search-box">

                <i class="fa-solid fa-magnifying-glass"></i>

                <input
                type="text"
                id="searchInput"
                placeholder="Cari produk...">

            </div>
        </div>

    </section>


    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">

        <div class="sidebar-header">

            <h2>Kategori</h2>

            <button onclick="toggleSidebar()">

                <i class="fa-solid fa-xmark"></i>

            </button>

        </div>

        <div class="category-list">

            <a href="#">Kategori 1</a>
            <a href="#">Kategori 2</a>
            <a href="#">Kategori 3</a>
            <a href="#">Kategori 4</a>
            <a href="#">Kategori 5</a>
            <a href="#">Kategori 6</a>
            <a href="#">Kategori 7</a>
            <a href="#">Kategori 8</a>
            <a href="#">Kategori 9</a>

        </div>

    </div>


    <!-- OVERLAY -->
    <div
    class="overlay"
    id="overlay"
    onclick="toggleSidebar()">
    </div>


    <!-- Hero Section -->
    <section class="hero">

        <div class="hero-content">
            <img src="{{ asset('images/logo-company.png') }}" alt="Logo Company" class="hero-logo">
            <h1>CV Mitra Mandiri Sejati</h1>
            <p class="hero-subtitle">Your Trusted Business Partner</p>
            <p class="hero-description">Industrial & Business Solutions</p>
            <div class="hero-buttons">
                <a href="#katalog" class="catalog-btn">Lihat Katalog</a>
                <a href="https://wa.me/6282333891441" class="contact-btn">Hubungi Kami</a>
            </div>
        </div>
    </section>

   <!-- TITLE -->
    <section class="title-section" id="katalog">
        <h1>Katalog Produk</h1>
        <p>Industrial & Business Solutions</p>
    </section>



    <!-- PRODUK -->
    <section class="product-grid" id="productGrid">

        @foreach($products as $product)

        <a
        href="/product/{{ $product->id }}"
        class="card product-card">

            <img
            src="{{ $product->link_gambar }}"
            alt="">

            <div class="card-body">

                <div class="nama">

                    {{ $product->nama_barang }}

                </div>

                <div class="pn">

                    PN :
                    {{ $product->pn }}

                </div>

            </div>

        </a>

        @endforeach

    </section>



<script>

    // SIDEBAR
    function toggleSidebar(){

        document
        .getElementById('sidebar')
        .classList
        .toggle('active');

        document
        .getElementById('overlay')
        .classList
        .toggle('active');

    }


    // SEARCH
    const searchInput =
    document.getElementById('searchInput');

    searchInput.addEventListener('keyup', function(){

        const value =
        this.value.toLowerCase();

        const cards =
        document.querySelectorAll('.product-card');

        cards.forEach(card => {

            const text =
            card.innerText.toLowerCase();

            if(text.includes(value)){

                card.style.display = 'block';

            }
            else{

                card.style.display = 'none';

            }

        });

    });

</script>

</body>
</html>