<section id="features " class="features section" dir="rtl" >

  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
    <h2>لماذا Tariq E Shewy Academy ؟</h2>
    <p>نقدّم تعليمًا متكاملًا يجمع بين التكنولوجيا، اللغات، وتنمية المهارات بأسلوب حديث واحترافي</p>
  </div>
  <!-- End Section Title -->

  <div class="container">

    <div class="d-flex justify-content-center">

      <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
            <h4>البرمجة والذكاء الاصطناعي</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
            <h4>اللغات والمهارات الرقمية</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
            <h4>القرآن الكريم</h4>
          </a>
        </li>

      </ul>

    </div>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

      <!-- Tab 1 -->
      <div class="tab-pane fade active show" id="features-tab-1">
        <div class="row align-items-center">
          <div class="col-lg-6 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>تعليم البرمجة والذكاء الاصطناعي</h3>
            <p class="fst-italic">
              نُؤهّل الطلاب لسوق العمل من خلال مناهج عملية وحديثة.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>تعليم البرمجة من الصفر حتى الاحتراف</span></li>
              <li><i class="bi bi-check2-all"></i> <span>مبادئ وتطبيقات الذكاء الاصطناعي</span></li>
              <li><i class="bi bi-check2-all"></i> <span>مشاريع عملية وشهادات معتمدة</span></li>
            </ul>
          </div>
          <div class="col-lg-6 text-center">
            <img src="{{ asset('assets/img/features-illustration-1.png') }}" alt="البرمجة والذكاء الاصطناعي" class="img-fluid">
          </div>
        </div>
      </div>

      <!-- Tab 2 -->
      <div class="tab-pane fade" id="features-tab-2">
        <div class="row align-items-center">
          <div class="col-lg-6 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>English – ICT – UC MAS – ICDL</h3>
            <p class="fst-italic">
              تطوير شامل لمهارات اللغة والتكنولوجيا.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>كورسات English لجميع المستويات</span></li>
              <li><i class="bi bi-check2-all"></i> <span>ICT و ICDL معتمدة</span></li>
              <li><i class="bi bi-check2-all"></i> <span>UC MAS لتنمية القدرات العقلية</span></li>
            </ul>
          </div>
          <div class="col-lg-6 text-center">
            <img src="{{ asset('assets/img/features-illustration-2.png') }}" alt="الكورسات التعليمية" class="img-fluid">
          </div>
        </div>
      </div>

      <!-- Tab 3 -->
      <div class="tab-pane fade" id="features-tab-3">
        <div class="row align-items-center">
          <div class="col-lg-6 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>تعليم القرآن الكريم</h3>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>تحفيظ القرآن الكريم للأطفال والكبار</span></li>
              <li><i class="bi bi-check2-all"></i> <span>أحكام التجويد بطريقة مبسطة</span></li>
              <li><i class="bi bi-check2-all"></i> <span>متابعة مستمرة وتقييم دوري</span></li>
            </ul>
            <p class="fst-italic">
              تعليم ديني قائم على أسس صحيحة وبأسلوب تربوي حديث.
            </p>
          </div>
          <div class="col-lg-6 text-center">
            <img src="{{ asset('assets/img/features-illustration-3.png') }}" alt="القرآن الكريم" class="img-fluid">
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

/* ================= Base Card ================= */
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

/* Floating حركة مستمرة */
@keyframes floating {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-12px); }
  100% { transform: translateY(0px); }
}

/* Icon */
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

/* ================= Hover Effects ================= */

.feature-box:hover {
  animation: rotateX360 1.2s ease-in-out forwards, glowPulse 1.2s ease-in-out;
  box-shadow:
    0 0 50px rgba(0,170,255,0.9),
    0 0 100px rgba(0,170,255,0.5);
}

/* دوران 360 حول محور X */
@keyframes rotateX360 {
  0% { transform: rotateX(0deg); }
  100% { transform: rotateX(360deg); }
}

/* نبض الإضاءة */
@keyframes glowPulse {
  0% { box-shadow: 0 0 20px rgba(0,170,255,0.3); }
  50% { box-shadow: 0 0 80px rgba(0,170,255,1); }
  100% { box-shadow: 0 0 20px rgba(0,170,255,0.3); }
}

.feature-box:hover i {
  transform: scale(1.4);
  text-shadow: 0 0 40px #00e0ff;
}

/* ================= Light Sweep Effect ================= */
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

/* ================= Neon Border Ring ================= */
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
        <i class="bi bi-code-slash"></i>
        <h4>تعليم البرمجة</h4>
        <p>
          كورسات برمجة حديثة تناسب جميع الأعمار، من الأساسيات حتى الاحتراف مع تطبيق عملي مستمر.
        </p>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="feature-box">
        <i class="bi bi-cpu"></i>
        <h4>الذكاء الاصطناعي</h4>
        <p>
          فهم وتطبيق مفاهيم الذكاء الاصطناعي بشكل مبسّط يؤهل الطلاب لمستقبل التكنولوجيا.
        </p>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="feature-box">
        <i class="bi bi-mortarboard"></i>
        <h4>مدرسة أونلاين متكاملة</h4>
        <p>
          مدرسة تربوية أونلاين لأولادنا المغتربين بدول الخليج مع متابعة تعليمية مستمرة.
        </p>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="feature-box">
        <i class="bi bi-heart-pulse"></i>
        <h4>قيم وتربية</h4>
        <p>
          نهتم ببناء شخصية الطالب دينيًا وأخلاقيًا بجانب التعليم الأكاديمي والتقني.
        </p>
      </div>
    </div>

  </div>
</div>

</section>
<!-- ================= /Features Cards Section ================= -->
