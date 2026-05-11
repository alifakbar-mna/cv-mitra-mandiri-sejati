<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Produk</title>

    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

</head>

<body>

    <!-- HEADER -->
    <section class="header">

        <div class="header-left">

            <!-- BACK BUTTON -->
            <a href="/katalog" class="back-btn">

                <i class="fa-solid fa-arrow-left"></i>

            </a>

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
                placeholder="Cari produk...">

            </div>

            <!-- USER -->
            <a href="/login" class="user-btn">

                <i class="fa-solid fa-user"></i>

            </a>

        </div>

    </section>


    <!-- DETAIL -->
    <section class="detail-section">

        <div class="detail-container">

            <!-- IMAGE -->
            <div class="image-box">

                <img
                src="{{ $product->link_gambar }}"
                alt="">

            </div>


            <!-- CONTENT -->
            <div class="detail-content">

                <h1>

                    {{ $product->nama_barang }}

                </h1>


                <div class="detail-info">

                    <b>PN :</b>

                    {{ $product->PN }}

                </div>


                <div class="detail-info">

                    <b>Merk :</b>

                    {{ $product->MERK }}

                </div>


                <div class="detail-info">

                    <b>QTY :</b>

                    {{ $product->QTY }}

                </div>


                <div class="detail-info">

                    <b>Detail Produk :</b>

                    <br><br>

                    {{ $product->detail_barang }}

                </div>


                <!-- BUTTON WA -->
                <a
                href="https://wa.me/6282333891441?text=Saya%20ingin%20memesan%20{{ urlencode($product->nama_barang) }}"
                target="_blank"
                class="wa-btn">

                    <i class="fa-brands fa-whatsapp"></i>

                    Hubungi Untuk Memesan

                </a>

            </div>

        </div>

    </section>

</body>
</html>