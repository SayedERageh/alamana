
 <header id="header" class="header d-flex align-items-center fixed-top " dir="rtl">
  <div class="header-container container-fluid bg-dark container-xl position-relative d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo d-flex align-items-center ms-auto ms-xl-0">
      <!-- لو حابب تحط لوجو صورة -->
      <!-- <img src="assets/img/logo.png" alt="أكاديمية طارق الشوي"> -->
      <h1 class="sitename">طارق الشيوي</h1>
    </a>

    <!-- Navigation -->
    <nav id="navmenu" class="navmenu bg-dark" >
      <ul>
    <li><a class="{{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">الرئيسية</a></li>
<li><a class="{{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">عن الأكاديمية</a></li>

        <li><a href="#features">أنشطة الأكاديمية</a></li>
        <li><a href="#services">الخدمات التعليمية</a></li>
        <li><a href="#pricing">الاشتراكات</a></li>

        <li class="dropdown">
          <a href="#">
            <span>الكورسات</span>
            <i class="bi bi-chevron-down toggle-dropdown"></i>
          </a>
          <ul>
            <li><a href="#quran">تحفيظ القرآن الكريم</a></li>
            <li><a href="#programming">البرمجة والذكاء الاصطناعي</a></li>

            <li class="dropdown">
              <a href="#">
                <span>كورسات المهارات</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i>
              </a>
              <ul>
                <li><a href="#english">English</a></li>
                <li><a href="#ict">ICT</a></li>
                <li><a href="#icdl">ICDL</a></li>
                <li><a href="#ucmas">UC Mas</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li><a href="#contact">تواصل معنا</a></li>
      </ul>

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- CTA Button -->
    <a class="btn-getstarted" href="tel:01063069860">
      تواصل الآن
    </a>

  </div>
</header>
<style>
  /* ================= NAV MENU PROFESSIONAL GLOW ================= */

.navmenu {
  background: transparent !important;
}

/* شكل اللينكات */
.navmenu ul li a {
  color: #ffffff;
  font-weight: 600;
  font-size: 15px;
  position: relative;
  padding: 10px 14px;
  transition: all 0.35s ease;
  text-shadow: 0 0 6px rgba(0, 153, 255, 0.25);
}

/* خط سفلي متحرك */
.navmenu ul li a::after {
  content: "";
  position: absolute;
  bottom: 4px;
  left: 50%;
  width: 0;
  height: 2px;
  background: linear-gradient(90deg, #00c6ff, #0072ff);
  transition: all 0.35s ease;
  transform: translateX(-50%);
  box-shadow: 0 0 10px rgba(0, 153, 255, 0.8);
}

/* Hover Effect */
.navmenu ul li a:hover {
  color: #00c6ff;
  text-shadow:
    0 0 8px rgba(0, 198, 255, 0.8),
    0 0 16px rgba(0, 114, 255, 0.6);
}

.navmenu ul li a:hover::after {
  width: 80%;
}

/* Active Link */
.navmenu ul li a.active {
  color: #00c6ff;
  text-shadow:
    0 0 10px rgba(0, 198, 255, 1),
    0 0 20px rgba(0, 114, 255, 0.8);
}

.navmenu ul li a.active::after {
  width: 100%;
}

/* Dropdown menu */
.navmenu .dropdown ul {
  background: rgba(10, 10, 15, 0.95);
  border-radius: 12px;
  padding: 10px 0;
  box-shadow:
    0 10px 30px rgba(0, 0, 0, 0.6),
    0 0 25px rgba(0, 153, 255, 0.15);
}

/* Dropdown links */
.navmenu .dropdown ul li a {
  font-size: 14px;
  text-shadow: none;
}

.navmenu .dropdown ul li a:hover {
  color: #00c6ff;
  padding-right: 18px;
}

</style>