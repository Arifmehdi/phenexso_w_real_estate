(function () {
    var preloader = document.getElementById('lf-preloader');

    window.addEventListener('load', function () {
        setTimeout(function () {
            preloader.classList.add('hide');
        }, 1200);
    });

    // Slider
    var slides = document.querySelectorAll('.slider-slide');
    var wrapper = document.querySelector('.slider-wrapper');
    var dots = document.querySelectorAll('.slider-dot');
    var prevBtn = document.querySelector('.slider-prev');
    var nextBtn = document.querySelector('.slider-next');
    var currentSlide = 0;
    var totalSlides = slides.length;
    var autoPlayInterval;

    function goToSlide(index) {
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        currentSlide = index;
        wrapper.style.transform = 'translateX(-' + (currentSlide * 100) + '%)';
        dots.forEach(function (dot, i) {
            dot.classList.toggle('active', i === currentSlide);
        });
    }

    function nextSlide() {
        goToSlide(currentSlide + 1);
    }

    function prevSlide() {
        goToSlide(currentSlide - 1);
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(nextSlide, 5000);
    }

    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }

    if (prevBtn) prevBtn.addEventListener('click', function () { stopAutoPlay(); prevSlide(); startAutoPlay(); });
    if (nextBtn) nextBtn.addEventListener('click', function () { stopAutoPlay(); nextSlide(); startAutoPlay(); });

    dots.forEach(function (dot, i) {
        dot.addEventListener('click', function () { stopAutoPlay(); goToSlide(i); startAutoPlay(); });
    });

    if (totalSlides > 0) {
        startAutoPlay();
    }

    // Scroll to top
    var scrollTopBtn = document.getElementById('ast-scroll-top');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 100) {
            scrollTopBtn.style.display = 'block';
        } else {
            scrollTopBtn.style.display = 'none';
        }
    });

    if (scrollTopBtn) {
        scrollTopBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Mobile menu
    var mobileToggle = document.querySelector('.mobile-toggle');
    var mobileNav = document.querySelector('.mobile-nav');
    var mobileOverlay = document.querySelector('.mobile-nav-overlay');
    var mobileClose = document.querySelector('.mobile-nav .close-btn');

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function () {
            mobileNav.classList.add('open');
            mobileOverlay.classList.add('open');
            mobileToggle.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    }

    function closeMobileNav() {
        mobileNav.classList.remove('open');
        mobileOverlay.classList.remove('open');
        mobileToggle.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (mobileClose) mobileClose.addEventListener('click', closeMobileNav);
    if (mobileOverlay) mobileOverlay.addEventListener('click', closeMobileNav);

    // Membership form
    var form = document.getElementById('membership-form');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(form);
            var name = formData.get('name');
            var email = formData.get('email');
            if (!name || !email) {
                alert('Please fill in required fields (Name and Email).');
                return;
            }
            alert('Thank you! Your form has been submitted.');
            form.reset();
        });
    }
})();
