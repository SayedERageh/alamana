<section id="features " class="features section" dir="rtl" >

  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
    <h2>لماذا شركة الأمانة سعود ؟</h2>
    <p>نقدم خدمات احترافية في النظافة والعزل والترميم باستخدام أحدث المعدات وفريق عمل متخصص</p>
  </div>
  <!-- End Section Title -->

  <div class="container">

    <div class="d-flex justify-content-center">

      <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
            <h4>خدمات النظافة</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
      <h4>خدمات الصيانة العامة</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
            <h4>التعقيم ومكافحة الحشرات</h4>
          </a>
        </li>

      </ul>

    </div>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

      <!-- Tab 1 -->
      <div class="tab-pane fade active show" id="features-tab-1">
        <div class="row align-items-center">
          <div class="col-lg-6 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>خدمات النظافة المتكاملة</h3>
            <p class="fst-italic">
              نقدم خدمات تنظيف احترافية للمنازل والشركات بأحدث المعدات.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>تنظيف المنازل والشقق والفلل</span></li>
              <li><i class="bi bi-check2-all"></i> <span>تنظيف بعد التشطيب وإزالة مخلفات البناء</span></li>
              <li><i class="bi bi-check2-all"></i> <span>تنظيف الواجهات الزجاجية والكلادنج</span></li>
            </ul>
          </div>
          <div class="col-lg-6 text-center">
            <img src="{{ asset('assets/img/features-illustration-3.png') }}" alt="خدمات النظافة" class="img-fluid">
          </div>
        </div>
      </div>

      <!-- Tab 2 -->
   <div class="tab-pane fade" id="features-tab-2">
  <div class="row align-items-center">
    <div class="col-lg-6 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
      <h3>خدمات الصيانة العامة</h3>
      <p class="fst-italic">
        نقدم خدمات صيانة متكاملة للحفاظ على المنازل والمباني في أفضل حالة.
      </p>
      <ul>
        <li><i class="bi bi-check2-all"></i> <span>صيانة السباكة والكهرباء</span></li>
        <li><i class="bi bi-check2-all"></i> <span>إصلاح الأعطال المنزلية المختلفة</span></li>
        <li><i class="bi bi-check2-all"></i> <span>صيانة دورية للمنازل والشركات</span></li>
      </ul>
    </div>
    <div class="col-lg-6 text-center">
      <img src="{{ asset('assets/img/features-illustration-2.png') }}" alt="خدمات الصيانة" class="img-fluid">
    </div>
  </div>
</div>

      <!-- Tab 3 -->
      <div class="tab-pane fade" id="features-tab-3">
        <div class="row align-items-center">
          <div class="col-lg-6 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>التعقيم ومكافحة الحشرات</h3>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>رش الحشرات والقضاء على القوارض</span></li>
              <li><i class="bi bi-check2-all"></i> <span>تعقيم المنازل والمكاتب بأحدث الأجهزة</span></li>
              <li><i class="bi bi-check2-all"></i> <span>تنظيف وتعقيم الكنب والسجاد بالبخار</span></li>
            </ul>
            <p class="fst-italic">
              حلول آمنة وفعالة للحفاظ على بيئة نظيفة وصحية.
            </p>
          </div>
          <div class="col-lg-6 text-center">
            <img src="{{ asset('assets/img/features-illustration-1.png') }}" alt="التعقيم ومكافحة الحشرات" class="img-fluid">
          </div>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- ================= Features Cards Section ================= -->
<section id="features-cards" class="features-cards section" dir="rtl">

<style>
.features-cards {
  padding: 100px 0;
  background: radial-gradient(circle at top, #0f172a, #020617);
}

.features-cards .col-xl-3 {
  perspective: 1600px;
}

.feature-box {
  position: relative;
  background: linear-gradient(145deg, #0f172a, #000000);
  color: #ffffff;
  border-radius: 22px;
  padding: 45px 25px;
  text-align: center;
  transform-style: preserve-3d;
  transition: all 0.6s ease;
  overflow: hidden;
  border: 1px solid rgba(0,170,255,0.2);
  animation: floating 5s ease-in-out infinite;
  box-shadow:
    0 0 20px rgba(0,170,255,0.2),
    0 0 40px rgba(0,170,255,0.1);
}

@keyframes floating {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-12px); }
  100% { transform: translateY(0px); }
}

.feature-box i {
  font-size: 42px;
  margin-bottom: 15px;
  display: inline-block;
  color: #00aaff;
  text-shadow: 0 0 15px #00aaff;
  transition: 0.5s;
}

.feature-box h4 {
  margin-bottom: 15px;
  font-weight: bold;
}

.feature-box:hover {
  animation: rotateX360 1.2s ease-in-out forwards, glowPulse 1.2s ease-in-out;
  box-shadow:
    0 0 50px rgba(0,170,255,0.9),
    0 0 100px rgba(0,170,255,0.5);
}

@keyframes rotateX360 {
  0% { transform: rotateX(0deg); }
  100% { transform: rotateX(360deg); }
}

@keyframes glowPulse {
  0% { box-shadow: 0 0 20px rgba(0,170,255,0.3); }
  50% { box-shadow: 0 0 80px rgba(0,170,255,1); }
  100% { box-shadow: 0 0 20px rgba(0,170,255,0.3); }
}

.feature-box:hover i {
  transform: scale(1.4);
  text-shadow: 0 0 40px #00e0ff;
}

.feature-box::before {
  content: "";
  position: absolute;
  top: -150%;
  left: -150%;
  width: 300%;
  height: 300%;
  background: linear-gradient(
    120deg,
    transparent,
    rgba(0,170,255,0.3),
    transparent
  );
  transform: rotate(25deg);
  transition: 0.8s;
}

.feature-box:hover::before {
  top: 100%;
  left: 100%;
}

.feature-box::after {
  content: "";
  position: absolute;
  inset: -3px;
  border-radius: 24px;
  background: linear-gradient(45deg, #00aaff, transparent, #00aaff);
  z-index: -1;
  filter: blur(20px);
  opacity: 0;
  transition: 0.6s;
}

.feature-box:hover::after {
  opacity: 1;
}
</style>

<div class="container">
  <div class="row gy-4">

    <div class="col-xl-3 col-md-6">
      <div class="feature-box">
        <i class="bi bi-house-door"></i>
        <h4>تنظيف المنازل</h4>
        <p>
          تنظيف شامل للمنازل والشقق والفلل باستخدام معدات حديثة ومواد آمنة.
        </p>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="feature-box">
        <i class="bi bi-droplet-half"></i>
        <h4>عزل الخزانات</h4>
        <p>
          عزل وتنظيف خزانات المياه الأرضية والعلوية لضمان مياه نظيفة وآمنة.
        </p>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="feature-box">
        <i class="bi bi-tools"></i>
        <h4>الترميم والصيانة</h4>
        <p>
          أعمال الترميم وإعادة تأهيل المنازل والمباني بأعلى جودة.
        </p>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="feature-box">
        <i class="bi bi-bug"></i>
        <h4>مكافحة الحشرات</h4>
        <p>
          رش الحشرات والقضاء على القوارض بمواد آمنة وفعالة.
        </p>
      </div>
    </div>

  </div>
</div>

</section>
<!-- ================= /Features Cards Section ================= -->