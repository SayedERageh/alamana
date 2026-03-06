@extends('layoutes.app')

@section('title', 'الصفحة الرئيسية')

@section('content')
<!-- Hero Section -->
@include('home.hero')



 <!-- Features Section -->
@include('home.features')


<!-- Features Section - شركة الأمانة سعود -->
<section id="features-2" class="features-2 section" dir="rtl">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row align-items-center">

      <!-- العمود الأيمن -->
      <div class="col-lg-4">

        <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="200">
          <div class="d-flex align-items-center justify-content-end gap-4">
            <div class="feature-content">
              <h3>شركة الأمانة سعود لعزل الخزانات</h3>
              <p>
                تقدم شركة الأمانة سعود خدمات عزل الخزانات بأحدث المواد والتقنيات لضمان حماية المياه من التسرب والتلوث.
              </p>
            </div>
            <div class="feature-icon flex-shrink-0">
              <i class="bi bi-droplet-half"></i>
            </div>
          </div>
        </div>

        <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="300">
          <div class="d-flex align-items-center justify-content-end gap-4">
            <div class="feature-content">
              <h3>شركة الأمانة سعود لعزل الأسطح</h3>
              <p>
                توفر شركة الأمانة سعود خدمات عزل الأسطح لحماية المباني من الحرارة وتسرب المياه باستخدام أفضل مواد العزل.
              </p>
            </div>
            <div class="feature-icon flex-shrink-0">
              <i class="bi bi-house-lock"></i>
            </div>
          </div>
        </div>

        <div class="feature-item text-end" data-aos="fade-right" data-aos-delay="400">
          <div class="d-flex align-items-center justify-content-end gap-4">
            <div class="feature-content">
              <h3>شركة الأمانة سعود لأعمال الترميم</h3>
              <p>
                تقدم شركة الأمانة سعود خدمات ترميم المنازل والمباني باحترافية عالية لإعادة المبنى إلى أفضل حالة.
              </p>
            </div>
            <div class="feature-icon flex-shrink-0">
              <i class="bi bi-tools"></i>
            </div>
          </div>
        </div>

      </div>

      <!-- الصورة في المنتصف -->
      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="phone-mockup text-center">
          <img src="assets/img/phone-app-screen.png" alt="شركة الأمانة سعود للعزل والترميم والنظافة" class="img-fluid">
        </div>
      </div>

      <!-- العمود الأيسر -->
      <div class="col-lg-4">

        <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="200">
          <div class="d-flex align-items-center gap-4">
            <div class="feature-icon flex-shrink-0">
              <i class="bi bi-bucket"></i>
            </div>
            <div class="feature-content">
              <h3>شركة الأمانة سعود لخدمات النظافة</h3>
              <p>
                تقدم شركة الأمانة سعود خدمات تنظيف المنازل والفلل والشركات باستخدام أحدث معدات النظافة.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="300">
          <div class="d-flex align-items-center gap-4">
            <div class="feature-icon flex-shrink-0">
              <i class="bi bi-stars"></i>
            </div>
            <div class="feature-content">
              <h3>تنظيف الكنب والسجاد</h3>
              <p>
                توفر شركة الأمانة سعود خدمة تنظيف الكنب والسجاد بالبخار لإزالة الأوساخ والبقع بفعالية.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-item" data-aos="fade-left" data-aos-delay="400">
          <div class="d-flex align-items-center gap-4">
            <div class="feature-icon flex-shrink-0">
              <i class="bi bi-bug"></i>
            </div>
            <div class="feature-content">
              <h3>مكافحة الحشرات</h3>
              <p>
                تقدم شركة الأمانة سعود خدمات مكافحة الحشرات باستخدام مواد آمنة وفعالة للقضاء على جميع أنواع الحشرات.
              </p>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</section>
<!-- /Features Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section" dir="rtl">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row content justify-content-center align-items-center position-relative">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="display-4 mb-4">
          شركة الأمانة سعود للعزل والترميم والنظافة
        </h2>
        <p class="mb-4">
          تقدم شركة الأمانة سعود خدمات متكاملة تشمل عزل الخزانات، عزل الأسطح،
          أعمال الترميم، تنظيف الكنب والسجاد، ومكافحة الحشرات باستخدام أحدث
          المعدات لضمان أفضل جودة وخدمة لعملائنا.
        </p>
        <a href="#contact" class="btn btn-cta">
          تواصل مع شركة الأمانة سعود الآن
        </a>
      </div>

      <!-- Abstract Background Elements -->
      <div class="shape shape-1">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
          <path d="M47.1,-57.1C59.9,-45.6,68.5,-28.9,71.4,-10.9C74.2,7.1,71.3,26.3,61.5,41.1C51.7,55.9,35,66.2,16.9,69.2C-1.3,72.2,-21,67.8,-36.9,57.9C-52.8,48,-64.9,32.6,-69.1,15.1C-73.3,-2.4,-69.5,-22,-59.4,-37.1C-49.3,-52.2,-32.8,-62.9,-15.7,-64.9C1.5,-67,34.3,-68.5,47.1,-57.1Z" transform="translate(100 100)"></path>
        </svg>
      </div>

      <div class="shape shape-2">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
          <path d="M41.3,-49.1C54.4,-39.3,66.6,-27.2,71.1,-12.1C75.6,3,72.4,20.9,63.3,34.4C54.2,47.9,39.2,56.9,23.2,62.3C7.1,67.7,-10,69.4,-24.8,64.1C-39.7,58.8,-52.3,46.5,-60.1,31.5C-67.9,16.4,-70.9,-1.4,-66.3,-16.6C-61.8,-31.8,-49.7,-44.3,-36.3,-54C-22.9,-63.7,-8.2,-70.6,3.6,-75.1C15.4,-79.6,28.2,-58.9,41.3,-49.1Z" transform="translate(100 100)"></path>
        </svg>
      </div>

      <!-- Dot Pattern Groups -->
      <div class="dots dots-1">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
          <pattern id="dot-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
          </pattern>
          <rect width="100" height="100" fill="url(#dot-pattern)"></rect>
        </svg>
      </div>

      <div class="dots dots-2">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
          <pattern id="dot-pattern-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
          </pattern>
          <rect width="100" height="100" fill="url(#dot-pattern-2)"></rect>
        </svg>
      </div>

      <div class="shape shape-3">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
          <path d="M43.3,-57.1C57.4,-46.5,71.1,-32.6,75.3,-16.2C79.5,0.2,74.2,19.1,65.1,35.3C56,51.5,43.1,65,27.4,71.7C11.7,78.4,-6.8,78.3,-23.9,72.4C-41,66.5,-56.7,54.8,-65.4,39.2C-74.1,23.6,-75.8,4,-71.7,-13.2C-67.6,-30.4,-57.7,-45.2,-44.3,-56.1C-30.9,-67,-15.5,-74,0.7,-74.9C16.8,-75.8,33.7,-70.7,43.3,-57.1Z" transform="translate(100 100)"></path>
        </svg>
      </div>

    </div>

  </div>

</section>
<!-- /Call To Action Section -->
 <!-- Clients Section -->
<section id="clients" class="clients section" dir="rtl">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      </script>

      <div class="swiper-wrapper align-items-center">

        <!-- Example: شركاء أو شهادات اعتماد -->
        <div class="swiper-slide">
          <img src="assets/img/clients/client-1.png" class="img-fluid" alt="شريك تعليمي 1">
        </div>
        <div class="swiper-slide">
          <img src="assets/img/clients/client-2.png" class="img-fluid" alt="شريك تعليمي 2">
        </div>
        <div class="swiper-slide">
          <img src="assets/img/clients/client-3.png" class="img-fluid" alt="شريك تعليمي 3">
        </div>
        <div class="swiper-slide">
          <img src="assets/img/clients/client-4.png" class="img-fluid" alt="شريك تعليمي 4">
        </div>
        <div class="swiper-slide">
          <img src="assets/img/clients/client-5.png" class="img-fluid" alt="شريك تعليمي 5">
        </div>
        <div class="swiper-slide">
          <img src="assets/img/clients/client-6.png" class="img-fluid" alt="شريك تعليمي 6">
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Clients Section -->
<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section light-background" dir="rtl">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>آراء عملاء شركة الأمانة سعود</h2>
    <p>تعرف على تجارب عملائنا مع شركة الأمانة سعود للعزل والترميم والنظافة</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row g-5">

      <!-- Testimonial 1 -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="testimonial-item shadow-sm p-4 rounded">
          <img src="assets/img/testimonials/testimonial1.jpg" class="testimonial-img rounded-circle" alt="عبدالله محمد">
          <h3>عبدالله محمد</h3>
          <h4>عميل</h4>
          <div class="stars text-warning">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p class="mt-3">
            <i class="bi bi-quote quote-icon-left"></i>
            تعاملت مع شركة الأمانة سعود في عزل الخزانات وكانت الخدمة ممتازة والعمل احترافي جدًا.
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="testimonial-item shadow-sm p-4 rounded">
          <img src="assets/img/testimonials/testimonial2.jpg" class="testimonial-img rounded-circle" alt="سالم علي">
          <h3>سالم علي</h3>
          <h4>عميل</h4>
          <div class="stars text-warning">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p class="mt-3">
            <i class="bi bi-quote quote-icon-left"></i>
            شركة الأمانة سعود قامت بعزل السطح لمنزلي وكانت النتيجة رائعة وحماية ممتازة من تسرب المياه.
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="testimonial-item shadow-sm p-4 rounded">
          <img src="assets/img/testimonials/testimonial3.jpg" class="testimonial-img rounded-circle" alt="فهد خالد">
          <h3>فهد خالد</h3>
          <h4>عميل</h4>
          <div class="stars text-warning">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p class="mt-3">
            <i class="bi bi-quote quote-icon-left"></i>
            أفضل شركة نظافة تعاملت معها، شركة الأمانة سعود نظفت الكنب والسجاد بطريقة احترافية.
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="testimonial-item shadow-sm p-4 rounded">
          <img src="assets/img/testimonials/testimonial4.jpg" class="testimonial-img rounded-circle" alt="ماجد حسن">
          <h3>ماجد حسن</h3>
          <h4>عميل</h4>
          <div class="stars text-warning">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p class="mt-3">
            <i class="bi bi-quote quote-icon-left"></i>
            شركة الأمانة سعود قدمت خدمة مكافحة حشرات ممتازة وسريعة، أنصح بها بشدة.
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
        </div>
      </div>

    </div>

  </div>

</section>
<!-- /Testimonials Section -->
<!-- Stats Section -->
<!-- Stats Section -->
<section id="stats" class="stats section dark-background text-light py-5" dir="rtl">

  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <!-- Stat 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center shadow rounded p-4 position-relative bg-gradient" 
             style="background: linear-gradient(135deg, #ff7e5f, #feb47b);">
          <i class="bi bi-people-fill display-4 mb-2"></i>
          <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="2" class="purecounter fs-2 fw-bold"></span>
          <p class="mt-2 fs-5">عملاء شركة الأمانة سعود</p>
        </div>
      </div>

      <!-- Stat 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center shadow rounded p-4 position-relative bg-gradient" 
             style="background: linear-gradient(135deg, #6a11cb, #2575fc);">
          <i class="bi bi-house-fill display-4 mb-2"></i>
          <span data-purecounter-start="0" data-purecounter-end="850" data-purecounter-duration="2" class="purecounter fs-2 fw-bold"></span>
          <p class="mt-2 fs-5">عمليات عزل خزانات وأسقف</p>
        </div>
      </div>

      <!-- Stat 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center shadow rounded p-4 position-relative bg-gradient" 
             style="background: linear-gradient(135deg, #f7971e, #ffd200);">
          <i class="bi bi-stars display-4 mb-2"></i>
          <span data-purecounter-start="0" data-purecounter-end="2000" data-purecounter-duration="2" class="purecounter fs-2 fw-bold"></span>
          <p class="mt-2 fs-5">خدمات تنظيف منازل وكنب</p>
        </div>
      </div>

      <!-- Stat 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center shadow rounded p-4 position-relative bg-gradient" 
             style="background: linear-gradient(135deg, #43cea2, #185a9d);">
          <i class="bi bi-tools display-4 mb-2"></i>
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter fs-2 fw-bold"></span>
          <p class="mt-2 fs-5">فريق شركة الأمانة سعود</p>
        </div>
      </div>

    </div>

  </div>

</section>
<!-- /Stats Section -->

<!-- Script for PureCounter -->
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
<script>
  new PureCounter();
</script>

<style>
  .stats-item:hover {
    transform: translateY(-10px) scale(1.05);
    transition: all 0.4s ease-in-out;
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
  }
  .stats-item i {
    animation: bounce 2s infinite;
  }
  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
  }
</style>
<!-- Services Section -->
<section id="services" class="services section light-background" dir="rtl">

 <!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>خدمات شركة الأمانة سعود</h2>
  <p>
    تقدم شركة الأمانة سعود مجموعة متكاملة من الخدمات تشمل عزل الخزانات والأسطح،
    أعمال الترميم، تنظيف الكنب والسجاد، ومكافحة الحشرات باستخدام أحدث المعدات
    لضمان أفضل جودة وخدمة لعملائنا.
  </p>
</div>
<!-- End Section Title -->
  <div class="container" data-aos="fade-up" data-aos-delay="100">

   <div class="row g-4">

  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
    <div class="service-card d-flex">
      <div class="icon flex-shrink-0">
        <i class="bi bi-laptop"></i>
      </div>
      <div>
        <h3>تنظيف المنازل والشركات</h3>
        <p>تقدم شركة الأمانة خدمات تنظيف المنازل والشركات باستخدام أحدث المعدات ومواد التنظيف الآمنة لضمان أفضل مستوى من النظافة.</p>
        <a href="#" class="read-more">المزيد <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div><!-- End Service Card -->

  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
    <div class="service-card d-flex">
      <div class="icon flex-shrink-0">
        <i class="bi bi-bar-chart"></i>
      </div>
      <div>
        <h3>تنظيف بعد التشطيب</h3>
        <p>نوفر خدمة تنظيف شاملة بعد التشطيب لإزالة الأتربة وبقايا البناء وتنظيف الأرضيات والجدران والزجاج بشكل احترافي.</p>
        <a href="#" class="read-more">المزيد <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div><!-- End Service Card -->

  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
    <div class="service-card d-flex">
      <div class="icon flex-shrink-0">
        <i class="bi bi-book"></i>
      </div>
      <div>
        <h3>عزل الخزانات والأسطح</h3>
        <p>تقدم شركة الأمانة خدمات عزل الخزانات والأسطح باستخدام أفضل مواد العزل لحماية المباني من تسرب المياه والرطوبة.</p>
        <a href="#" class="read-more">المزيد <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div><!-- End Service Card -->

  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="service-card d-flex">
      <div class="icon flex-shrink-0">
        <i class="bi bi-journal-text"></i>
      </div>
      <div>
        <h3>ترميم وصيانة المباني</h3>
        <p>نوفر خدمات الترميم والصيانة للمنازل والمباني مع فريق متخصص لضمان جودة العمل وإعادة المبنى إلى أفضل حالة.</p>
        <a href="#" class="read-more">المزيد <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div><!-- End Service Card -->

</div>

  </div>

</section><!-- /Services Section -->

<!-- Faq Section -->
<section class="faq-9 faq section light-background" id="faq" dir="rtl">

  <div class="container">
    <div class="row">

      <div class="col-lg-5" data-aos="fade-up">
        <h2 class="faq-title">لديك سؤال؟ تعرف على الأسئلة الشائعة عن شركة الأمانة</h2>
        <p class="faq-description">هنا تجد أهم الأسئلة التي يطرحها العملاء عن خدمات شركة الأمانة في تنظيف المنازل والشركات، عزل الخزانات والأسطح، الترميم والصيانة ومكافحة الحشرات.</p>
        <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
          <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="..." fill="currentColor"></path>
          </svg>
        </div>
      </div>

      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
        <div class="faq-container">

          <div class="faq-item faq-active">
            <h3>ما هي خدمات شركة الأمانة للنظافة والعزل؟</h3>
            <div class="faq-content">
              <p>تقدم شركة الأمانة مجموعة متكاملة من الخدمات تشمل تنظيف المنازل والشركات، تنظيف بعد التشطيب، تنظيف الواجهات الزجاجية، عزل الخزانات والأسطح، ترميم وصيانة المباني، ومكافحة الحشرات والقوارض.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>هل توفر شركة الأمانة خدمة تنظيف بعد التشطيب؟</h3>
            <div class="faq-content">
              <p>نعم، توفر شركة الأمانة خدمة تنظيف شاملة بعد التشطيب لإزالة الأتربة وبقايا مواد البناء وتنظيف الأرضيات والجدران والزجاج بشكل احترافي.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>ما أهمية عزل الخزانات والأسطح؟</h3>
            <div class="faq-content">
              <p>يساعد عزل الخزانات والأسطح في حماية المباني من تسرب المياه والرطوبة ويزيد من عمر المبنى، وتستخدم شركة الأمانة أفضل مواد العزل لضمان أعلى جودة.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>هل تقدم شركة الأمانة خدمات الترميم والصيانة؟</h3>
            <div class="faq-content">
              <p>نعم، تقدم شركة الأمانة خدمات الترميم وصيانة المباني وإصلاح التشققات وإعادة تأهيل المنازل والمباني بأعلى مستوى من الجودة.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>هل توفر الشركة خدمة مكافحة الحشرات؟</h3>
            <div class="faq-content">
              <p>نعم، توفر شركة الأمانة خدمات مكافحة الحشرات والقوارض باستخدام مواد آمنة وفعالة للقضاء على الحشرات وضمان بيئة نظيفة وصحية.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>كيف يمكنني التواصل مع شركة الأمانة؟</h3>
            <div class="faq-content">
              <p>يمكنك التواصل مع شركة الأمانة لخدمات النظافة والعزل والترميم بسهولة عبر الهاتف أو الواتساب على الرقم 0568947117 للحصول على استشارة أو حجز الخدمة.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

        </div>
      </div>

    </div>
  </div>
</section><!-- /Faq Section -->
<!-- Contact Section -->
<section id="contact" class="contact section light-background" dir="rtl">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>تواصل معنا</h2>
  <p>يمكنك التواصل مع شركة الأمانة لأي استفسار حول خدمات التنظيف، العزل، الترميم، أو حجز خدمة مباشرة.</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row g-4 g-lg-5">

    <!-- معلومات الاتصال -->
    <div class="col-lg-5">
      <div class="info-box" data-aos="fade-up" data-aos-delay="200">
        <h3>معلومات التواصل</h3>
        <p>يسرنا استقبال جميع استفساراتكم وأسئلتكم عبر الهاتف، الواتساب، البريد الإلكتروني، أو حساباتنا على وسائل التواصل الاجتماعي.</p>

        <div class="info-item" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <i class="bi bi-geo-alt"></i>
          </div>
          <div class="content">
            <h4>الموقع</h4>
            <p>شركة الأمانة – خدمات النظافة والعزل والترميم، المملكة العربية السعودية</p>
          </div>
        </div>

        <div class="info-item" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <i class="bi bi-telephone"></i>
          </div>
          <div class="content">
            <h4>أرقام الهاتف</h4>
            <p>📞 056 894 7117</p>
            <p>📞 واتس آب: 056 894 7117</p>
          </div>
        </div>

        <div class="info-item" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <i class="bi bi-envelope"></i>
          </div>
          <div class="content">
            <h4>البريد الإلكتروني</h4>
            <p>📧 info@alamanaclean.com</p>
          </div>
        </div>

        <div class="info-item" data-aos="fade-up" data-aos-delay="600">
          <div class="icon-box">
            <i class="bi bi-share"></i>
          </div>
          <div class="content">
            <h4>تابعنا على السوشيال ميديا</h4>
            <p>
              <a href="https://www.facebook.com/profile.php?id=61585056446251" target="_blank">Facebook</a>
            </p>
          </div>
        </div>

      </div>
    </div>

    <!-- نموذج الاتصال -->
    <div class="col-lg-7">
      <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
        <h3>راسلنا الآن</h3>
        <p>املأ النموذج أدناه وسنقوم بالرد عليك في أسرع وقت ممكن لحجز خدمات شركة الأمانة.</p>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="اسمك" required>
            </div>

            <div class="col-md-6">
              <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" required>
            </div>

            <div class="col-12">
              <input type="text" class="form-control" name="subject" placeholder="عنوان الرسالة" required>
            </div>

            <div class="col-12">
              <textarea class="form-control" name="message" rows="6" placeholder="اكتب رسالتك هنا" required></textarea>
            </div>

            <div class="col-12 text-center">
              <div class="loading">جارٍ الإرسال...</div>
              <div class="error-message"></div>
              <div class="sent-message">تم إرسال رسالتك بنجاح. شكرًا لتواصلك معنا!</div>

              <button type="submit" class="btn">إرسال الرسالة</button>
            </div>

          </div>
        </form>

      </div>
    </div>

  </div>

</div>
</section><!-- /Contact Section -->
@endsection
