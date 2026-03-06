<!-- Hero Section -->
<section id="hero" class="hero-section">

  <!-- Video Background -->
  <video
    autoplay
    muted
    loop
    playsinline
    preload="metadata"
    class="hero-video"
  >
    <source src="{{ asset('assets/video/heroo.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Overlay -->
  <div class="hero-overlay"></div>

  <!-- Content -->
  <div class="hero-content">

    <h1>شركة الأمانة سعود للعزل والترميم والنظافة</h1>

    <p>
      خدمات متكاملة في النظافة، عزل الخزانات والأسطح، الترميم،
      تنظيف الكنب والسجاد ومكافحة الحشرات بأحدث المعدات
    </p>

    <a href="tel:0568947117" class="hero-btn">
      اتصل بنا الآن
    </a>

  </div>

</section>

<style>

.hero-section {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
  background: #000;
}

/* الفيديو */
.hero-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(0.85) contrast(1.05) saturate(1.1);
}

/* الطبقة الداكنة */
.hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to bottom,
    rgba(0,0,0,0.4),
    rgba(0,0,0,0.8)
  );
  z-index: 1;
}

/* المحتوى */
.hero-content {
  position: relative;
  z-index: 2;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #fff;
  gap: 20px;
  padding: 20px;
}

.hero-content h1 {
  font-size: clamp(32px, 5vw, 56px);
  font-weight: 700;
  letter-spacing: 1px;
}

.hero-content p {
  max-width: 650px;
  font-size: 18px;
  opacity: 0.9;
}

/* الزر */
.hero-btn {
  padding: 14px 40px;
  border-radius: 50px;
  background: #0d83fd;
  color: #fff;
  font-size: 18px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

.hero-btn:hover {
  background: #33e4ff;
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(0, 242, 255, 0.4);
}

/* موبايل */
@media (max-width: 768px) {

  .hero-content h1 {
    font-size: 28px;
  }

  .hero-content p {
    font-size: 15px;
  }

  .hero-btn {
    font-size: 16px;
    padding: 12px 30px;
  }

}

</style>