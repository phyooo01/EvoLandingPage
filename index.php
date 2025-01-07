<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <title>Evobird</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/evofav.png" rel="icon" />
    <link href="assets/img/evofav.png" rel="evobird-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container">
        <div class="row d-flex flex-col">
          <!-- Uncomment below if you prefer to use an image logo -->

          <nav id="navbar" class="navbar h-auto">
            <a href="index.html" class="logo me-auto w-auto"
              ><img src="assets/img/evofav.png" alt="" class="img-fluid"
            /></a>
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#feature">Fitur</a></li>
              <li><a class="nav-link scrollto" href="#pricing">Harga</a></li>
              <!-- <li><a class="nav-link scrollto" href="#pricing">Login</a></li> -->
              <li><a class="nav-link scrollto" href="#demo">Demo</a></li>
              <ul>
                <!-- <li><a class="nav-link scrollto" href="#contact">Kontak</a></li> -->
                <a  href="/xyravevo/EvoLandingPage/login/login.php" class="getstarted scrollto">Beli Sekarang</a>               
                   <!-- <a href="/login/login.php" class="btn-get-started scrollto"
                >Coba Sekarang</a> -->
               
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </ul>
          </nav>
          <!-- .navbar -->
        </div>
      </div>

      <script>
        const navLinks = document.querySelectorAll("nav ul li a");
        navLinks.forEach((link) => {
          link.addEventListener("click", (event) => {
            event.preventDefault();

            const targetId = event.currentTarget.getAttribute("href").slice(1);
            const targetElement = document.getElementById(targetId);
            console.log("runned");

            if (targetElement) {
              const offsetTop = targetElement.offsetTop - 100;
              window.scrollTo({
                top: offsetTop,
                behavior: "smooth",
              });
            }
          });
        });
        window.addEventListener("scroll", function () {
          const sections = document.querySelectorAll("section");

          let currentSection = "";

          sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (window.pageYOffset >= sectionTop - sectionHeight / 3) {
              currentSection = section.getAttribute("id");
            }
          });

          navLinks.forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href").includes(`#${currentSection}`)) {
              link.classList.add("active");
            }
          });
        });
      </script>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <h1>
              Kirim banyak pesan dan balas otomatis di semua channel bisnis anda
              hanya dalam satu Platform
            </h1>
            <h2
              class="elementor-headline-dynamic-text elementor-headline-text-active"
            >
              Tingkatkan penjualan hingga <strong>100%</strong> dengan
              menjangkau pelanggan lebih banyak dan cepat secara efisien
            </h2>
            <ul class="l1-features">
              <!-- <li>Multichannel Chat (WhatsApp, Instagram, facebook, dan lainnya)</li> -->
              <li><i class="ri-check-double-line"></i> Multichannel Chat</li>
              <li><i class="ri-check-double-line"></i> Broadcast Pesan</li>
              <li><i class="ri-check-double-line"></i> Multi Admin</li>
              <li><i class="ri-check-double-line"></i> Chatbot canggih</li>
              <li><i class="ri-check-double-line"></i> Laporan performa</li>
            </ul>

            <!-- for every li add double-check.png in front of with with class checkmark-->

            <div
              class="d-flex justify-content-center justify-content-lg-start gap-4"
            >
            <a  href="/xyravevo/EvoLandingPage/login/login.php" class="btn-get-started scrollto"
                >Coba Sekarang</a
              >
              <a href="#demo" class="btn-get-started scrollto"
                >View Demo</a
              >
              <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
            </div>
          </div>
          <div
            class="col-lg-6 order-1 order-lg-2 hero-img"
            data-aos="zoom-in"
            data-aos-delay="200"
          >
            <img
              src="assets/img/logo1.png"
              class="img-fluid animated"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients section-bg">
        <div class="container">
          <div class="row" data-aos="zoom-in">
            <div
              class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center mb-2"
            >
              <img
                src="assets/img/clients_cropped/wa-2.png"
                class="img-fluid client-icon"
                alt=""
              />
            </div>

            <div
              class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center mb-2"
            >
              <img
                src="assets/img/clients_cropped/gs.png"
                class="img-fluid client-icon"
                alt=""
              />
            </div>

            <div
              class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center mb-2"
            >
              <img
                src="assets/img/clients_cropped/insta.png"
                class="img-fluid client-icon"
                alt=""
              />
            </div>

            <div
              class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center mb-2"
            >
              <img
                src="assets/img/clients_cropped/gmail.png"
                class="img-fluid client-icon"
                alt=""
              />
            </div>

            <div
              class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center mb-2"
            >
              <img
                src="assets/img/clients_cropped/to.png"
                class="img-fluid client-icon"
                alt=""
              />
            </div>
            <div
              class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center mb-2 coming-soon"
            >
              <img
                src="assets/img/clients_cropped/shoe.png"
                class="img-fluid client-icon"
                alt=""
              />
            </div>
            <div
              class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center mb-2 coming-soon"
            >
              <img
                src="assets/img/clients_cropped/tiktok.png"
                class="img-fluid client-icon"
                alt=""
              />
            </div>

            <div
              class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center mb-2 coming-soon"
            >
              <img
                src="assets/img/clients_cropped/web.png"
                class="img-fluid client-icon"
                alt=""
              />
            </div>

            <div
              class="col-md-4 d-flex align-items-center justify-content-center mb-2 coming-soon d-none d-lg-none d-md-flex"
            >
              <img
                src="assets/img/clients_cropped/more.png"
                class="img-fluid client-icon"
                alt=""
              />
            </div>
          </div>
        </div>
      </section>
      <!-- End Cliens Section -->
      <section id="feature">
        <!-- ======= About Us Section ======= -->
        <div id="about" class="about pb-5">
          <div class="container" data-aos="fade-up">
            <div class="section-title">
              <h2>
                Solusi lengkap untuk meningkatkan<br />kepercayaan pelanggan dan
                penjualan anda
              </h2>
            </div>

            <div class="row content justify-content-center text-larger">
              <div class="col-lg-6">
                <p>
                  EvoBird adalah platform Omnichannel Chat dan Chatbot AI yang
                  membantu bisnis Anda:
                </p>
                <ul>
                  <li>
                    <i class="ri-check-double-line"></i>Mengelola percakapan
                    pelanggan dalam satu dashboard yang mudah digunakan dari
                    berbagai platform seperti WhatsApp, Instagram Facebook,
                    Email, Marketplace dan lainnya.
                  </li>
                  <li>
                    <i class="ri-check-double-line"></i>Mengirim pesan broadcast
                    yang dipersonalisasi ke pelanggan Anda untuk meningkatkan
                    penjualan dan loyalitas.
                  </li>
                  <li>
                    <i class="ri-check-double-line"></i>Menjawab pertanyaan
                    pelanggan secara otomatis dan real-time dengan Chatbot
                    canggih yang tersedia 24 jam nonstop
                  </li>
                  <li>
                    <i class="ri-check-double-line"></i>Menganalisis data
                    percakapan pelanggan untuk mendapatkan insights yang
                    berharga tentang kebutuhan dan preferensi mereka.
                  </li>
                  <li>
                    <i class="ri-check-double-line"></i>Dapatkan Laporan
                    performa penjualan anda untuk pengambilan keputusan yang
                    tepat
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <div id="" class="why-us section-bg">
          <div class="container-fluid" data-aos="fade-up">
            <div class="row">
              <div
                class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1"
              >
                <div class="content">
                  <h3>
                    Chatbot Evo
                    <strong
                      >Menjawab pertanyaan pelanggan secara otomatis dan
                      real-time dengan Chatbot canggih yang tersedia 24 jam
                      nonstop, 24/7.</strong
                    >
                  </h3>
                  <p>
                    Kami membantu Anda Membangun kesan dan citra profesional
                    untuk bisnis Anda
                  </p>
                </div>

                <div class="accordion-list">
                  <ul id="accordion-list">
                    <li>
                      <a
                        data-bs-toggle="collapse"
                        class="collapse"
                        data-bs-target="#accordion-list-1"
                        ><span>01</span> Balas chat masuk secara otomatis dan
                        tambahkan fitur "Quick Answer"
                        <i class="bx bx-chevron-down icon-show"></i
                        ><i class="bx bx-chevron-up icon-close"></i
                      ></a>
                      <div
                        id="accordion-list-1"
                        class="collapse show"
                        data-bs-parent=".accordion-list"
                      >
                        <p>
                          Chatbot Evo dapat membantu Anda merespons pesan
                          pelanggan secara otomatis, bahkan menambahkan fitur
                          "Quick Answer" untuk tanggapan yang lebih cepat dan
                          efisien.
                        </p>
                      </div>
                    </li>

                    <li>
                      <a
                        data-bs-toggle="collapse"
                        data-bs-target="#accordion-list-2"
                        class="collapsed"
                        ><span>02</span> Customer dapat membalas pesan dengan
                        cepat hanya dengan satu karakter
                        <i class="bx bx-chevron-down icon-show"></i
                        ><i class="bx bx-chevron-up icon-close"></i
                      ></a>
                      <div
                        id="accordion-list-2"
                        class="collapse"
                        data-bs-parent=".accordion-list"
                      >
                        <p>
                          Dengan Chatbot Evo, pelanggan dapat membalas pesan
                          dengan cepat hanya dengan satu karakter, meningkatkan
                          efisiensi dan interaksi dengan pelanggan.
                        </p>
                      </div>
                    </li>

                    <li>
                      <a
                        data-bs-toggle="collapse"
                        data-bs-target="#accordion-list-3"
                        class="collapsed"
                        ><span>03</span>Kirim balasan otomatis sesuai dengan
                        rule yang anda buat
                        <i class="bx bx-chevron-down icon-show"></i
                        ><i class="bx bx-chevron-up icon-close"></i
                      ></a>
                      <div
                        id="accordion-list-3"
                        class="collapse"
                        data-bs-parent=".accordion-list"
                      >
                        <p>
                          Chatbot Evo memungkinkan Anda mengirimkan balasan
                          otomatis sesuai dengan aturan yang Anda buat,
                          memastikan respons yang konsisten dan efisien kepada
                          pelanggan.
                        </p>
                      </div>
                    </li>

                    <li>
                      <a
                        data-bs-toggle="collapse"
                        data-bs-target="#accordion-list-4"
                        class="collapsed"
                        ><span>04</span>Customer puas dengan respon yang instan
                        dan closing rate meningkat
                        <i class="bx bx-chevron-down icon-show"></i
                        ><i class="bx bx-chevron-up icon-close"></i
                      ></a>
                      <div
                        id="accordion-list-4"
                        class="collapse"
                        data-bs-parent=".accordion-list"
                      >
                        <p>
                          Dengan respon yang instan dari Chatbot Evo, pelanggan
                          akan lebih puas dan closing rate bisnis Anda akan
                          meningkat secara signifikan.
                        </p>
                      </div>
                    </li>
                  </ul>

                  <!-- activate accordion repeatable until user click -->
                  <script>
                    const accordionItems =
                      document.querySelectorAll("#accordion-list li");

                    let clicked = false;
                    let index = 1;
                    let totals = accordionItems.length;
                    let intervalId;

                    intervalId = setInterval(() => {
                      if (!clicked) {
                        accordionItems[index].querySelector("a").click();
                        index++;
                        index = index % totals;
                      }
                    }, 2500);

                    accordionItems.forEach((item) => {
                      item.addEventListener("mousedown", () => {
                        clicked = true;
                        clearInterval(intervalId);
                      });
                    });
                  </script>
                </div>
              </div>

              <div
                class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                style="background-image: url('assets/img/chat.png')"
                data-aos="zoom-in"
                data-aos-delay="150"
              >
                &nbsp;
              </div>
            </div>
          </div>
        </div>
        <!-- End Why Us Section -->

        <div class="lay3">
          <div class="lay3-group lay3-phone">
            <div class="phone-graphic">
              <div class="phone-case">
                <div class="phone-frame-outer">
                  <div class="phone-frame-inner">
                    <div class="phone-screen">
                      <!-- phone-header -->
                      <div class="phone-header whatsapp">
                        <p class="phone-header-time">1:02 PM</p>
                        <p class="phone-header-icons">
                          <span class="material-icons"
                            >signal_cellular_alt</span
                          >
                          <span class="material-icons">wifi</span>
                          <span class="material-icons battery"
                            >battery_std</span
                          >
                        </p>
                      </div>
                      <!-- /phone-header -->

                      <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <!-- whatsapp -->
                          <div class="swiper-slide">
                            <div class="whatsapp app">
                              <div class="app-header">
                                <div class="app-header-group">
                                  <span class="material-icons">arrow_back</span>
                                  <div class="profile-picture">
                                    <span class="material-icons">person</span>
                                  </div>

                                  <div class="name-status">
                                    <div class="name">EvoBird</div>
                                    <div class="status">Online</div>
                                  </div>
                                </div>
                                <div class="app-header-group">
                                  <span
                                    class="material-icons icon-small videocam"
                                    >videocam</span
                                  >
                                  <span
                                    class="material-icons icon-small phonecall"
                                    >call</span
                                  >
                                  <span class="material-icons icon-small"
                                    >more_vert</span
                                  >
                                </div>
                              </div>
                              <div class="chat-window">
                                <div class="chat-bubbles">
                                  <div class="chat-bubble chat-customer">
                                    <p>Halo EvoBird</p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      Halo selamat datang di EvoBird, ada yang
                                      bisa kami bantu?<br /><br />info lainnya
                                      silahkan KETIK Angka/Klik button :<br />
                                      1. Produk<br />
                                      2. Komplain<br />
                                      3. Pengiriman
                                    </p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-customer">
                                    <p>
                                      1
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      untuk melihat harga bisa langsung kunjungi
                                      url ini ya www.evobird.id/produk/harga
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                </div>

                                <div class="chat-input">
                                  <div class="text-input">
                                    <span class="material-icons"
                                      >emoji_emotions</span
                                    >
                                    <input
                                      type="text"
                                      class="message-input"
                                      placeholder="Message"
                                    />
                                    <span class="material-icons"
                                      >attach_file</span
                                    >
                                    <span class="material-icons"
                                      >photo_camera</span
                                    >
                                    <span class="material-icons">mic</span>
                                  </div>

                                  <div class="send-input">
                                    <span class="material-icons">send</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- shopee -->
                          <div class="swiper-slide">
                            <div class="shopee app">
                              <div class="app-header">
                                <div class="app-header-group">
                                  <span class="material-icons">arrow_back</span>
                                  <div class="profile-picture">
                                    <span class="material-icons">person</span>
                                  </div>

                                  <div class="name-status">
                                    <div class="name">EvoBird</div>
                                    <div class="status">Online</div>
                                  </div>
                                </div>
                                <div class="app-header-group">
                                  <!-- <span class="material-icons icon-small videocam"
                                >videocam</span
                              >
                              <span class="material-icons icon-small phonecall"
                                >call</span
                              > -->
                                  <span class="material-icons icon-small"
                                    >more_vert</span
                                  >
                                </div>
                              </div>
                              <div class="chat-window">
                                <div class="chat-bubbles">
                                  <div class="chat-bubble chat-customer">
                                    <p>Halo EvoBird</p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      Halo selamat datang di EvoBird, ada yang
                                      bisa kami bantu?<br /><br />info lainnya
                                      silahkan KETIK Angka/Klik button :<br />
                                      1. Produk<br />
                                      2. Komplain<br />
                                      3. Pengiriman
                                    </p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-customer">
                                    <p>
                                      1
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      untuk melihat harga bisa langsung kunjungi
                                      url ini ya www.evobird.id/produk/harga
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                </div>
                                <div class="chat-input">
                                  <!-- plus icon -->
                                  <div class="quick-chat">
                                    <p class="quick-chat-item">
                                      Hi! apakah produk ini masih ada?
                                    </p>
                                    <p class="quick-chat-item">Terima kasih</p>
                                    <p class="quick-chat-item">
                                      Kapan dikirim ya?
                                    </p>
                                  </div>

                                  <div class="chat-input-container">
                                    <span class="material-icons add">add</span>
                                    <div class="chat-emoji">
                                      <input
                                        type="text"
                                        class="message-input"
                                        placeholder="Message"
                                      />
                                      <!-- icon emoji -->
                                      <span class="material-icons"
                                        >emoji_emotions</span
                                      >
                                    </div>
                                  </div>
                                  <!-- input message -->
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- instagram -->
                          <div class="swiper-slide">
                            <div class="instagram app">
                              <div class="app-header">
                                <div class="app-header-group">
                                  <span class="material-icons">arrow_back</span>
                                  <div class="profile-picture">
                                    <span class="material-icons">person</span>
                                  </div>

                                  <div class="name-status">
                                    <div class="name">EvoBird</div>
                                    <div class="status">Online</div>
                                  </div>
                                </div>

                                <span
                                  class="material-icons icon-small phonecall"
                                  >call</span
                                >
                                <div class="app-header-group">
                                  <span
                                    class="material-icons icon-small videocam"
                                    >videocam</span
                                  >
                                </div>
                              </div>
                              <div class="chat-window">
                                <div class="chat-bubbles">
                                  <div class="time-section">Mar 12, 18:17</div>

                                  <div class="chat-bubble chat-customer">
                                    <p>Halo EvoBird</p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      Halo selamat datang di EvoBird, ada yang
                                      bisa kami bantu?<br /><br />info lainnya
                                      silahkan KETIK Angka/Klik button :<br />
                                      1. Produk<br />
                                      2. Komplain<br />
                                      3. Pengiriman
                                    </p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-customer">
                                    <p>
                                      1
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      untuk melihat harga bisa langsung kunjungi
                                      url ini ya www.evobird.id/produk/harga
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                </div>

                                <div class="chat-input-container">
                                  <span class="material-icons camera"
                                    >camera_alt</span
                                  >

                                  <!-- mic -->

                                  <div class="chat-emoji">
                                    <input
                                      type="text"
                                      class="message-input"
                                      placeholder="Message"
                                    />
                                  </div>
                                  <!-- like -->
                                  <span class="material-icons mic">mic</span>
                                  <!-- gallery -->
                                  <span class="material-icons gallery"
                                    >photo_library</span
                                  >
                                  <!-- sticker -->
                                  <span class="material-icons sticker"
                                    >insert_emoticon</span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- telegram -->
                          <div class="swiper-slide">
                            <div class="telegram app">
                              <div class="app-header">
                                <div class="app-header-group">
                                  <span class="material-icons">arrow_back</span>
                                  <div class="profile-picture">
                                    <span class="material-icons">person</span>
                                  </div>

                                  <div class="name-status">
                                    <div class="name">EvoBird</div>
                                    <div class="status">Online</div>
                                  </div>
                                </div>
                                <div class="app-header-group">
                                  <!-- <span class="material-icons icon-small videocam"
                                >videocam</span
                              >
                              <span class="material-icons icon-small phonecall"
                                >call</span
                              > -->
                                  <span class="material-icons icon-small"
                                    >more_vert</span
                                  >
                                </div>
                              </div>
                              <div class="chat-window">
                                <div class="chat-bubbles">
                                  <div class="chat-bubble chat-customer">
                                    <p>Halo EvoBird</p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      Halo selamat datang di EvoBird, ada yang
                                      bisa kami bantu?<br /><br />info lainnya
                                      silahkan KETIK Angka/Klik button :<br />
                                      1. Produk<br />
                                      2. Komplain<br />
                                      3. Pengiriman
                                    </p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-customer">
                                    <p>
                                      1
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      untuk melihat harga bisa langsung kunjungi
                                      url ini ya www.evobird.id/produk/harga
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                </div>
                                <div class="chat-input">
                                  <div class="chat-input-container">
                                    <!-- emoji -->
                                    <span class="material-icons emoji"
                                      >emoji_emotions</span
                                    >
                                    <!-- input -->
                                    <input
                                      type="text"
                                      class="message-input"
                                      placeholder="Message"
                                    />
                                    <!-- attachment -->
                                    <span class="material-icons attachment"
                                      >attach_file</span
                                    >
                                    <!-- mic -->
                                    <span class="material-icons mic">mic</span>
                                  </div>
                                  <div class="black-bar"></div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- tokopedia -->
                          <div class="swiper-slide">
                            <div class="tokopedia app">
                              <div class="app-header">
                                <div class="app-header-group">
                                  <span class="material-icons">arrow_back</span>
                                  <div class="profile-picture">
                                    <span class="material-icons">person</span>
                                  </div>

                                  <div class="name-status">
                                    <div class="name">EvoBird</div>
                                    <div class="status">Online</div>
                                  </div>
                                </div>
                                <div class="app-header-group">
                                  <!-- <span class="material-icons icon-small videocam"
                                >videocam</span
                              >
                              <span class="material-icons icon-small phonecall"
                                >call</span
                              > -->
                                  <span class="material-icons icon-small"
                                    >more_vert</span
                                  >
                                </div>
                              </div>
                              <div class="chat-window">
                                <div class="chat-bubbles">
                                  <div class="chat-bubble chat-customer">
                                    <p>Halo EvoBird</p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      Halo selamat datang di EvoBird, ada yang
                                      bisa kami bantu?<br /><br />info lainnya
                                      silahkan KETIK Angka/Klik button :<br />
                                      1. Produk<br />
                                      2. Komplain<br />
                                      3. Pengiriman
                                    </p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-customer">
                                    <p>
                                      1
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      untuk melihat harga bisa langsung kunjungi
                                      url ini ya www.evobird.id/produk/harga
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                </div>
                                <div class="chat-input">
                                  <!-- plus icon -->
                                  <div class="quick-chat">
                                    <p class="quick-chat-item">
                                      Hi! apakah produk ini masih ada?
                                    </p>
                                    <p class="quick-chat-item">Terima kasih</p>
                                    <p class="quick-chat-item">
                                      Kapan dikirim ya?
                                    </p>
                                  </div>

                                  <div class="chat-input-container">
                                    <span class="material-icons add">add</span>
                                    <div class="chat-emoji">
                                      <input
                                        type="text"
                                        class="message-input"
                                        placeholder="Message"
                                      />
                                      <!-- icon emoji -->
                                      <span class="material-icons"
                                        >emoji_emotions</span
                                      >
                                    </div>
                                    <!-- send -->
                                    <span class="material-icons send"
                                      >send</span
                                    >
                                  </div>
                                  <!-- input message -->
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- facebook -->
                          <div class="swiper-slide">
                            <div class="facebook app">
                              <div class="app-header">
                                <div class="app-header-group">
                                  <span class="material-icons">arrow_back</span>
                                  <div class="profile-picture">
                                    <span class="material-icons">person</span>
                                  </div>

                                  <div class="name-status">
                                    <div class="name">EvoBird</div>
                                    <div class="status">Online</div>
                                  </div>
                                </div>

                                <span
                                  class="material-icons icon-small phonecall"
                                  >call</span
                                >
                                <div class="app-header-group">
                                  <span
                                    class="material-icons icon-small videocam"
                                    >videocam</span
                                  >

                                  <!-- information icon (i)-->
                                  <span class="material-icons icon-small"
                                    >info</span
                                  >
                                </div>
                              </div>
                              <div class="chat-window">
                                <div class="chat-bubbles">
                                  <div class="time-section">Mar 12, 18:17</div>
                                  <div class="chat-bubble chat-customer">
                                    <p>Halo EvoBird</p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      Halo selamat datang di EvoBird, ada yang
                                      bisa kami bantu?<br /><br />info lainnya
                                      silahkan KETIK Angka/Klik button :<br />
                                      1. Produk<br />
                                      2. Komplain<br />
                                      3. Pengiriman
                                    </p>
                                    <span class="time">18:17</span>
                                  </div>
                                  <div class="chat-bubble chat-customer">
                                    <p>
                                      1
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                  <div class="chat-bubble chat-evo">
                                    <p>
                                      untuk melihat harga bisa langsung kunjungi
                                      url ini ya www.evobird.id/produk/harga
                                      <span class="time">18:17</span>
                                    </p>
                                  </div>
                                </div>

                                <div class="chat-input-container">
                                  <span class="material-icons add">add</span>
                                  <!-- camera -->
                                  <span class="material-icons camera"
                                    >camera_alt</span
                                  >
                                  <!-- gallery -->
                                  <span class="material-icons gallery"
                                    >photo_library</span
                                  >
                                  <!-- mic -->
                                  <span class="material-icons mic">mic</span>

                                  <div class="chat-emoji">
                                    <input
                                      type="text"
                                      class="message-input"
                                      placeholder="Message"
                                    />
                                    <!-- icon emoji -->
                                    <span class="material-icons"
                                      >emoji_emotions</span
                                    >
                                  </div>
                                  <!-- like -->

                                  <span class="material-icons like"
                                    >thumb_up</span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- /phone-screen -->

                      <!-- slide builder -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="lay3-group lay3-text">
            <p class="lay3-title">
              Bangunlah chatbot anda di
              <span class="currentApp">
                <span class="shown">WhatsApp</span></span
              >
              dalam hitungan menit.
            </p>
            <p class="lay3-desc">
              Chatbot Evo adalah solusi kami dalam pembuatan chatbot yang dapat
              dikostumisasi untuk bisnis apapun. Buatlah chatbot yang sesuai
              untuk bisnis anda dalam hitungan menit tanpa harus memiliki
              pengetahuan pemrograman.
            </p>

            <!-- <p class="orange-button" href="#hargapaket">Cobalah Sekarang</p> -->
            <!-- <p class="cta-btn align-middle">Cobalah Sekarang</p> -->
          </div>
        </div>

        <!-- ======= Services Section ======= -->
        <div id="services" class="services section-bg pb-5">
          <div class="container" data-aos="fade-up">
            <div class="section-title pt-5">
              <h2>Fitur dan Keunggulan Evobird</h2>
            </div>

            <div class="row justify-content-center">
              <div
                class="col-xl-3 col-md-6 d-flex align-items-stretch"
                data-aos="zoom-in"
                data-aos-delay="100"
              >
                <div class="icon-box">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <h4><a href="">Omnichannel Messaging</a></h4>
                  <p>
                    Kelola percakapan pelanggan di berbagai platform dari satu
                    dashboard yang mudah digunakan, seperti Tokopedia, Shopee,
                    Instagram, Facebook, dan lainnya
                  </p>
                </div>
              </div>

              <div
                class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
                data-aos="zoom-in"
                data-aos-delay="200"
              >
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4><a href="">AI Chatbot 24/7</a></h4>
                  <p>
                    Chatbot yang cerdas dan personal dapat memahami pertanyaan
                    dan permintaan pelanggan dengan baik, memberikan jawaban
                    yang informatif dan responsif 24/7
                  </p>
                </div>
              </div>

              <div
                class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0"
                data-aos="zoom-in"
                data-aos-delay="300"
              >
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-tachometer"></i></div>
                  <h4><a href="">Analisis Data / Report</a></h4>
                  <p>
                    Dapatkan insights yang berharga tentang kebutuhan dan
                    preferensi pelanggan Anda dengan menganalisis data
                    percakapan mereka
                  </p>
                </div>
              </div>
            </div>

            <br />

            <div class="row justify-content-center">
              <div
                class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0"
                data-aos="zoom-in"
                data-aos-delay="400"
              >
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-layer"></i></div>
                  <h4><a href="">Campaign</a></h4>
                  <p>
                    Kirim pesan broadcast yang dipersonalisasi ke pelanggan Anda
                    untuk meningkatkan penjualan dan loyalitas
                  </p>
                </div>
              </div>

              <div
                class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0"
                data-aos="zoom-in"
                data-aos-delay="400"
              >
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-data"></i></div>
                  <h4><a href="">Pengelolaan Data Pelanggan</a></h4>
                  <p>Simpan dan kelola kontak pelanggan anda dengan mudah</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <div id="why-us" class="cta">
          <div class="container" data-aos="zoom-in">
            <div class="row">
              <div class="col-lg-9 text-center text-lg-start">
                <h3>WHY EVOBIRD?</h3>
                <p>
                  Spesialis Omnichannel & Chatbot AI Terdepan, EvoBird dipercaya
                  oleh lebih dari 100 perusahaan. Menawarkan layanan online
                  training dan maintenance gratis, EvoBird juga merupakan mitra
                  resmi penyedia platform seperti Meta, Tokopedia, dan Shopee.
                  Platform ini menyediakan fitur lengkap, termasuk Chatbot AI,
                  Omnichannel, Broadcast, dan lainnya. Dengan fokus pada
                  keamanan data, EvoBird memberikan solusi terpercaya kepada
                  pelanggannya.
                </p>
              </div>
              <div class="col-lg-3 cta-btn-container text-center">
                <!-- <a class="cta-btn align-middle" href="#">Call To Action</a> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="hargapaket">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="font-size: 45px">Pilih Paket Sesuai Kebutuhan Anda</h2>
            <p style="font-size: 23px">
              Lebih hemat dengan paket 12 Bulan atau 1 Tahun
            </p>
          </div>

          <button class="button" id="btn1Tahun">1 Tahun</button>
          <button class="button transparent" id="btn3Bulan">3 Bulan</button>

          <h2 id="teksharga3bulan" style="font-size: 38px">
            <br />Paket Harga 3 Bulan
          </h2>
          <div class="box-container" id="boxContainer3Bulan">
            <div class="box-conta">
              <div class="box">
                <div class="box-title" style="font-size: 30px">
                  Starter Plan
                  <p>Rp.399.000 / Bulan</p>
                </div>
                <div class="specifications">
                  <ul style="font-size: 20px">
                    <li>2 User</li>
                    <li>Omnichannel Chat</li>
                    <li>Basic Broadcast</li>
                    <li>Basic Chatbot</li>
                    <li>Web & Mobile Access</li>
                    <li>Manajemen Laporan</li>
                  </ul>
                </div>
              </div>
              <div class="box">
                <div class="box-title" style="font-size: 30px">
                  Business Plan
                  <p>Rp.849.000 / Bulan</p>
                </div>
                <div class="specifications">
                  <ul style="font-size: 20px">
                    <li>10 User</li>
                    <li>Omnichannel Chat</li>
                    <li>Premium Broadcast</li>
                    <li>Premium Chatbot</li>
                    <li>Web & Mobile Access</li>
                    <li>Manajemen Kontak</li>
                    <li>Manajemen Laporan</li>
                    <li>Artificial Intelligence</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <h2 id="teksharga1tahun" style="font-size: 38px">
            <br />Paket Harga 1 Tahun
          </h2>
          <div class="box-container" id="boxContainer1Tahun">
            <div class="box-conta">
              <div class="box">
                <div class="box-title" style="font-size: 30px">
                  Starter Plan
                  <p>Rp.249.000 / Bulan</p>
                </div>
                <div class="specifications">
                  <ul style="font-size: 20px">
                    <li>2 User</li>
                    <li>Omnichannel Chat</li>
                    <li>Basic Broadcast</li>
                    <li>Basic Chatbot</li>
                    <li>Web & Mobile Access</li>
                    <li>Manajemen Laporan</li>
                  </ul>
                </div>
              </div>
              <div class="box">
                <div class="box-title" style="font-size: 30px">
                  Business Plan
                  <p>Rp.699.000 / Bulan</p>
                </div>
                <div class="specifications">
                  <ul style="font-size: 20px">
                    <li>10 User</li>
                    <li>Omnichannel Chat</li>
                    <li>Premium Broadcast</li>
                    <li>Premium Chatbot</li>
                    <li>Web & Mobile Access</li>
                    <li>Manajemen Kontak</li>
                    <li>Manajemen Laporan</li>
                    <li>Artificial Intelligence</li>
                  </ul>
                </div>
              </div>
        
            </div>
          </div>
        </div>
      </section>
      <!-- End Pricing Section -->

      <!-- ======= Team Section ======= -->
      <section id="demo" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>demo kirim broadcast dengan evobird</h2>
            <!-- <p>
              Lihatlah demonstrasi penggunaan platform Evobird untuk mengirim
              siaran pesan secara massal dengan cepat dan efektif. Temukan
              bagaimana Evobird dapat membantu Anda mencapai audiens Anda dengan
              cara yang lebih personal dan efisien, meningkatkan keterlibatan
              pelanggan dan memperkuat hubungan bisnis Anda.
            </p> -->
          </div>

          <div class="row">
            <div
              class="col-lg-12 text-center"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/f0UBlZ-sw7w"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
          </div>

          <div class="row">
            <div
              class="col-lg-12 text-center"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <br />
              <!-- <p>
                Jika Anda tertarik untuk mencoba Evobird, jangan ragu untuk
                melihat opsi harga kami dan temukan paket yang sesuai dengan
                kebutuhan bisnis Anda.
              </p> -->
              <a  href="/xyravevo/EvoLandingPage/login/login.php" class="buy-btn">Beli Sekarang</a>
       
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Team Section

      <!-- ======= Frequently Asked Questions Section ======= -->
      <!-- <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Hal - hal yang sering ditanyakan</p>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  class="collapse"
                  data-bs-target="#faq-list-1"
                  >Apa itu EvoBird? <i class="bx bx-chevron-down icon-show"></i
                  ><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div
                  id="faq-list-1"
                  class="collapse show"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    EvoBird adalah alat yang dapat mengelola percakapan dengan
                    pelanggan di berbagai platform dari satu dashboard yang
                    mudah digunakan.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-list-2"
                  class="collapsed"
                  >Apakah saya membutuhkan EvoBird?
                  <i class="bx bx-chevron-down icon-show"></i
                  ><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div
                  id="faq-list-2"
                  class="collapse"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    EvoBird dapat mempermudah urusan bisnis anda, seperti
                    Chatbot yang siap sedia menjawab pertanyaan pelanggan,
                    menyimpan dan mengelola kontak pelanggan, dan mengirim pesan
                    broadcast dengan mudah untuk meningkatkan penjualan dan
                    loyalitas. Jadi mengapa tidak?
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-list-3"
                  class="collapsed"
                  >Apakah EvoBird cocok untuk saya?
                  <i class="bx bx-chevron-down icon-show"></i
                  ><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div
                  id="faq-list-3"
                  class="collapse"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    EvoBird cocok untuk bisnis anda yang memerlukan kemudahan
                    untuk menjawab pelanggan di banyak platform seperti
                    whatsApp, Facebook, Instagram, Shopee, Dan lain - lain.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section> -->
      <!-- End Frequently Asked Questions Section -->

      <!-- ======= Contact Section =======
      <section id="purchase" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Beli Sekarang</h2>
          </div>

          <div class="row">
            <div
              class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch justify-content-center"
            >
        
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>EVOBIRD</h3>
              <p>
                Jl. Sukasari I No.4, Sukawarna, <br />
                Kec. Sukajadi, Kota Bandung <br />
                Jawa Barat <br /><br />
                <strong>Phone:</strong> +62 815 5303 7483 <br />
                <strong>Email:</strong> admin@impactlabs.id<br />
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#about">About us</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#services">Fitur</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">Chatbot WhatsApp</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Chatbot Instagram</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Chatbot Gmail</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">Chatbot Tokopedia</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Chatbot Facebook</a>
                </li>
              </ul>
            </div>


            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/evobird.ai/" class="instagram"
                  ><i class="bx bxl-instagram"></i
                ></a>
                <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
                <a href="https://id.linkedin.com/in/evobird-ai-52b7a82bb" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>EVOBIRD</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">Evobird.id</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
      // create swiper instance
      const swiper = new Swiper(".swiper-container", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: true,
        },
        // disable interactivity
        // allowTouchMove: false,
      });

      const classes = [
        "whatsapp",
        "shopee",
        "instagram",
        "telegram",
        "tokopedia",
        "facebook",
      ];
      const appName = [
        "WhatsApp",
        "Shopee",
        "Instagram",
        "Telegram",
        "Tokopedia",
        "Facebook",
      ];

      const randomColor = ["#F2BE5A", "#51A9E3", "#6ADDB2"];

      const phone_header = document.querySelector(".phone-header");
      const currentApp = document.querySelector(".currentApp");
      let currentColor = 0;
      swiper.on("realIndexChange", function () {
        const currentSlide = swiper.realIndex;

        // remove all classes
        // lower classes
        phone_header.classList.remove(...classes);

        // add current class
        phone_header.classList.add(classes[currentSlide]);

        // change above top -100%
        const currents = document.querySelectorAll(".shown");

        const newElement = document.createElement("span");
        newElement.classList.add("shown");
        newElement.textContent = appName[currentSlide];
        newElement.style.top = "100%";

        currentApp.appendChild(newElement);
        setTimeout(() => {
          newElement.style.top = "0";
          currents.forEach((current) => {
            current.style.top = "-100%";
          });

          currentColor += 1;
          currentColor %= randomColor.length;
          currentApp.style.color = randomColor[currentColor];
        }, 10);

        setTimeout(() => {
          currents.forEach((current) => {
            current.remove();
          });
        }, 500);

        // set currentApp Color randomly
      });
      const btn3Bulan = document.getElementById("btn3Bulan");
      const btn1Tahun = document.getElementById("btn1Tahun");
      const boxContainer3Bulan = document.getElementById("boxContainer3Bulan");
      const boxContainer1Tahun = document.getElementById("boxContainer1Tahun");
      const teksharga3bulan = document.getElementById("teksharga3bulan");
      const teksharga1tahun = document.getElementById("teksharga1tahun");

      boxContainer3Bulan.style.display = "none";
      teksharga3bulan.style.display = "none";
      boxContainer1Tahun.style.display = "block";
      teksharga1tahun.style.display = "block";

      btn3Bulan.addEventListener("click", function () {
        boxContainer3Bulan.style.display = "block";
        teksharga3bulan.style.display = "block";
        boxContainer1Tahun.style.display = "none";
        teksharga1tahun.style.display = "none";
        btn1Tahun.classList.add("transparent"); // Tambahkan kelas transparan pada tombol 1 Tahun
        btn3Bulan.classList.remove("transparent"); // Hapus kelas transparan dari tombol 3 Bulan
      });

      btn1Tahun.addEventListener("click", function () {
        boxContainer3Bulan.style.display = "none";
        teksharga3bulan.style.display = "none";
        boxContainer1Tahun.style.display = "block";
        teksharga1tahun.style.display = "block";
        btn1Tahun.classList.remove("transparent"); // Hapus kelas transparan dari tombol 1 Tahun
        btn3Bulan.classList.add("transparent"); // Tambahkan kelas transparan pada tombol 3 Bulan
      });
    </script>
  </body>
</html>
