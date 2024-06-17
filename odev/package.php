<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Yükleniyor...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Türkiye/bilecik
                        merkez</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Türkiye</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link">Ana Sayfa</a>
                    <a href="about.html" class="nav-item nav-link">Biz Kimiz</a>
                    <a href="service.html" class="nav-item nav-link">Servisler</a>
                    <a href="package.php" class="nav-item nav-link active">Paketler</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Ödevler</a>
                        <div class="dropdown-menu m-0">
                            <a href="odev_1/index.html" class="dropdown-item">Ödev 1</a>
                            <a href="odev_2/index.html" class="dropdown-item">Ödev 2</a>
                            <a href="odev_3/index.html" class="dropdown-item">Ödev 3</a>
                            <a href="odev_4/index.html" class="dropdown-item">Ödev 4</a>
                            <a href="odev_5/index.html" class="dropdown-item">Ödev 5</a>
                            <a href="odev_6/index.html" class="dropdown-item">Ödev 6</a>
                            <a href="odev_7/index.php" class="dropdown-item">Ödev 7</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Tablo</a>
                </div>

            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Paketler</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a></li>

                                <li class="breadcrumb-item text-white active" aria-current="page">Paketler</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Paketler</h6>
                <h1 class="mb-5">Harika Paketler</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="	https://cdn2.enuygun.com/media/lib/825x620/uploads/image/kiz-kalesi-34371.webp"
                                alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Erdemli Mersin</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 gün</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Kişi</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">5,000TL</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Kıyıdan yaklaşık 600 metre uzaklıkta bir adada inşa edilmiş olan Kız Kalesi, birçok
                                efsaneye konu oluyor. 8 tane burçla korunan kalenin avlusunda kilise ve sarnıç
                                bulunuyor. Karayla bağlantısı zaman içerisinde kesilmiş olsa da bulunduğu mahalleye ve
                                plaja da adını veriyor. Kız Kalesi Plajı’nda denizin keyfini çıkardıktan sonra kıyıdaki
                                balıkçı tekneleriyle kaleyi gezmeye gidebilirsin. “Ben kendime güveniyorum kaleye kadar
                                yüzerim” dersen orası sana kalmış.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="https://tr.wikipedia.org/wiki/K%C4%B1z_Kalesi_(Mersin)"
                                    class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Daha Fazla</a>
                                <a href="https://maps.app.goo.gl/YL621xU2V2xJcTmx8" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Konum</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="	https://cdn2.enuygun.com/media/lib/825x620/uploads/image/side-antik-tiyatro-34918.webp"
                                alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Manavgat Antalya</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 gün</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Kişi</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">7,500TL</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Manavgat’a 7, Antalya şehir merkezine 80 kilometre uzaklıkta konumlanan Side Antik Kenti,
                                Pamfilya’nın en önemli liman şehri olduğu için birçok imparatorluğa ev sahipliği yapmış.
                                Lidyalılar, Persler, Romalılar ve Bizanslıların izlerinin görülebileceği antik kent,
                                tarihte bilinen ilk metropol olmasıyla öne çıkıyor. Side Antik Kenti’nin sınırları
                                içinde 17 bin kişilik antik tiyatro, Apollon Tapınağı, şehre açılan şehir kapısı,
                                hamamlar ve Vespasianus Çeşmesi bulunuyor. Şehir kapısının hemen yanında konumlanan Side
                                Müzesi de buraya kadar gelmişken gezmen gereken yerlerden. Helenistik Dönem, Roma Dönemi
                                ve Bizans Dönemi’ne ait eserleri müzede inceleyebilirsin.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="https://tr.wikipedia.org/wiki/Side"
                                    class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Daha Fazla</a>
                                <a href="https://maps.app.goo.gl/LrYwUjgzeUDv4jQw9" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Konum</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="	https://cdn2.enuygun.com/media/lib/825x620/uploads/image/egirdir-golu-33997.webp"
                                alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Eğirdir Isparta</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>2 gün</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                kişi</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">5,500TL</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Türkiye’nin en büyük ikinci tatlı su gölü olan Eğirdir Gölü, ortalama 12 metre derinliğe
                                sahip. Günün farklı saatlerinde değişik manzaralara sahne olan gölün çevresinde elma ve
                                şeftali bahçeleri ve plajlar bulunuyor. Gölün kuzeybatı kısmında yer alan Bedre Plajı ve
                                İstasyon mahallesinde konumlanan Altınkum Plajı, göl çevresinde yüzebileceğin en güzel
                                iki plaj. Ayrıca gölde iki küçük ada da var. Can Ada ve Yeşilada son yıllarda göl suları
                                azaldığı için kıyıya ve birbirlerine bağlı durumdalar.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="https://tr.wikipedia.org/wiki/E%C4%9Firdir_G%C3%B6l%C3%BC"
                                    class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Daha Fazla</a>
                                <a href="https://maps.app.goo.gl/VPvN8Mpj1tobrKzm9" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Konum</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="	https://cdn2.enuygun.com/media/lib/825x620/uploads/image/cennet-cehennem-mersin-33996.webp"
                                alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Silifke Mersin</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>5 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>4
                                kişi</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">25,000TL</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Silifke’ye 25 kilometre uzakta olan Cennet Cehennem Mağaraları, yeraltı sularının kireç
                                taşlarını eritmesiyle çöken iki büyük çukur aslında. Cennet çöküğüne inmek için 452 tane
                                basamağı olan bir merdiven kullanılıyor. 300. basamakta Meryem Ana Kilisesi’ni
                                görebilirsin. Çöküğün güney ucunda ise Zeus Tapınağı bulunuyor. O kadar basamağı
                                inmişken tapınağı da mutlaka görmelisin. Cennet Çöküğünden çıkıp 75 metre kuzeye
                                gittiğinde seni Cehennem Çöküğü karşılıyor. Çöküğün içine inmek mümkün değil ancak
                                yukardan görebileceğin bir teras var.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="https://tr.wikipedia.org/wiki/Cennet_ve_Cehennem_%C3%87%C3%B6k%C3%BCkleri#:~:text=Yakla%C5%9F%C4%B1k%20110%20m%20derinli%C4%9Fine%20sahip,75%20m%2C%20derinli%C4%9Fi%20110%20metre."
                                    class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Daha Fazla</a>
                                <a href="https://maps.app.goo.gl/udBiPPy1usREkmoQA" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Konum</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://cdn2.enuygun.com/media/lib/825x620/uploads/image/salda-golu-33998.webp"
                                alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Yeşilova Burdur</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>1 gün</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>3
                                kişi</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">4,300TL</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Yeşilova ilçe merkezine sadece 4 kilometre uzaklıkta olan Salda Gölü, ziyaret edenlere
                                turkuazın en güzel halini sunduğu için Türkiye’nin Maldivleri olarak anılıyor. Bir
                                krater gölü olan Salda’nın en derin olduğu yerlerde rengi çivit mavisine dönüyor. Bir
                                volkanik patlama sonucu oluştuğu için 184 metre derinliği var. Bu oranla da Türkiye’nin
                                en derin gölleri arasında yer alıyor. Gölün suyunda bulunan magnezyum, soda ve kil
                                sağlık sorunlarına da iyi geldiği için sağlık turizmi için de çok sık tercih ediliyor.
                            </p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="https://tr.wikipedia.org/wiki/Salda_G%C3%B6l%C3%BC#:~:text=Salda%20G%C3%B6l%C3%BC%2C%20Burdur'un%20Ye%C5%9Filova,Y%C3%BCz%C3%B6l%C3%A7%C3%BCm%C3%BC%20yakla%C5%9F%C4%B1k%2044%20kilometrekaredir."
                                    class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Daha Fazla</a>
                                <a href="https://maps.app.goo.gl/7umhw3WBFXM2Yuyy7" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Konum</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="https://cdn2.enuygun.com/media/lib/825x620/uploads/image/manavgat-36592.webp"
                                alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Manavgat Antalya</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>1 Hafta</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                kişi</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">20.000TL</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Ülkemizin en güzel şelalelerinden biri olan Manavgat Şelalesi, Manavgat’a 3, Antalya
                                merkezine ise 72 kilometre uzaklıkta konumlanıyor. Yaklaşık 5 metre yükseklikte bulunan
                                falezlerden akan Manavgat Şelalesi,serinlemek isteyenler için ideal bir nokta. Şelale
                                çevresinde yemek yiyebileceğin ve çay ya da kahve içebileceğin birçok mekan bulunuyor.
                                Ayrıca piknik malzemelerini hazırlayıp şelale çevresindeki alanlarda piknik de
                                yapabilirsin. Manavgat Şelalesi’nde rafting ya da kano gibi su sporlarını da
                                deneyimleyebilirsin ya da jeep safari turlarına katılabilirsin.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="https://tr.wikipedia.org/wiki/Manavgat_%C5%9Eelalesi"
                                    class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Daha Fazla</a>
                                <a href="https://maps.app.goo.gl/gbERZ7Unpe8vFYYq9" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Konum</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->

    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Paketler</h6>
                        <h1 class="text-white mb-4">Online Paketler</h1>
                        <p class="mb-4">Burada hazır paketler bulunmkatadır.</p>
                        <p class="mb-4">Rezarvasyon Yaptıktan sonra şirketimiz sizle iletişime geçecektir</p>

                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Paket seç</h1>
                        <form action="package.php" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" name="isim"
                                            placeholder="İsim">
                                        <label for="name">isim</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" name="mail"
                                            placeholder="Mail">
                                        <label for="email">Mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="Soyad" name="soyad"
                                            placeholder="Soyad">
                                        <label for="Soyad">Soyad</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="paket" name="paket"
                                            placeholder="paket">
                                        <label for="Paket">Paket 1-6 aralıgı</label>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="İsteklerr"
                                            id="message" name="istekler" style="height: 100px"></textarea>
                                        <label for="message">İstekler</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Randuvu al</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->

    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">İşlemler</h6>
                <h1 class="mb-5">3 Kolay Adım</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Bir Lokasyon seçin</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Hızlı ve Kolay şekilde gitmek istediğiniz yeri belirleynizi</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Online Ödeme</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Online ödeme ,Kolay Geri İade,Çeşitli Taksit seçenkleri ve daha fazlası</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Ulaşım</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Net lokasyonlar ve Yeterli bilgilendirme</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Şiket</h4>
                    <a class="btn btn-link" href="about.html">Biz Kimiz</a>
                    <a class="btn btn-link" href="service.html">Servisler</a>
                    <a class="btn btn-link" href="package.php">Paketler</a>
                    <a class="btn btn-link" href="contact.php">Tablo</a>
                </div>
                <div class="col-lg-3 col-md-6">

                </div>
                <div class="col-lg-3 col-md-6">


                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">İletiş<img src="" alt=""></h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Türkiye/bilecik merkez</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Türkiye</a>, Bütün hakları saklıdır.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Dizayn <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Ana Sayfa</a>
                            <a href="">Çerezler</a>
                            <a href="">Yardım</a>
                            <a href="">İnfo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php
include ("connet.php");
include ("gonder.php");
?>