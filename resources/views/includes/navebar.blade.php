<header id="header" class="header d-flex align-items-center fixed-top " dir="rtl">
  <div class="header-container container-fluid bg-dark container-xl position-relative d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo d-flex align-items-center ms-auto ms-xl-0">
      <h1 class="sitename">شركة الأمانة</h1>
    </a>

    <!-- Navigation -->
    <nav id="navmenu" class="navmenu bg-dark">
      <ul>

<li>
<a class="{{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
الرئيسية
</a>
</li>

<li>
<a class="{{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">
من نحن
</a>
</li>

<li><a href="#services">خدماتنا</a></li>

<li class="dropdown">
<a href="#">
<span>الخدمات</span>
<i class="bi bi-chevron-down toggle-dropdown"></i>
</a>

<ul>

<li><a href="#cleaning">خدمات النظافة</a></li>

<li><a href="#insulation">عزل الخزانات والأسطح</a></li>

<li><a href="#renovation">الترميم والمقاولات</a></li>

<li><a href="#sofa">تنظيف الكنب والسجاد</a></li>

<li><a href="#pest">مكافحة الحشرات والقوارض</a></li>

</ul>

</li>

<li><a href="#projects">أعمالنا</a></li>

<li><a href="#contact">تواصل معنا</a></li>

      </ul>

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- CTA Button -->
    <a class="btn-getstarted" href="tel:0568947117">
      اتصل الآن
    </a>

  </div>
</header>