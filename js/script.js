document.addEventListener('DOMContentLoaded', () => {
    "use strict";

    /**
     * Clients Swiper
     */
    new Swiper('.clients-swiper', {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 60
            },
            640: {
                slidesPerView: 4,
                spaceBetween: 80
            },
            992: {
                slidesPerView: 5,
                spaceBetween: 120
            }
        }
    });

    /**
     * News Swiper
     */
    new Swiper('.news-swiper', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            320: {
              slidesPerView: 1,
              spaceBetween: 20
            },
      
            768: {
              slidesPerView: 2,
              spaceBetween: 20
            },
      
            992: {
              slidesPerView: 2,
              spaceBetween: 20
            }
          }
    });

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = document.querySelectorAll('#navbarNav .nav-link');

    function navbarlinksActive() {
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return;
            let section = document.querySelector(navbarlink.hash);
            if (!section) return;
            let position = window.scrollY + 200;
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active');
            } else {
                navbarlink.classList.remove('active');
            }
        })
    }
    window.addEventListener('load', navbarlinksActive);
    document.addEventListener('scroll', navbarlinksActive);

    /**
     * About Us Counters Animation
     */
    function animateCounter(element, endValue, duration = 2) {
        let obj = { val: 0 };
        gsap.to(obj, {
            val: endValue,
            duration: duration,
            ease: 'power1.out',
            onUpdate: function () {
                if (element.dataset.prefix) {
                    element.textContent = element.dataset.prefix + Math.floor(obj.val);
                } else {
                    element.textContent = Math.floor(obj.val);
                }
            },
            onComplete: function () {
                if (element.dataset.prefix) {
                    element.textContent = element.dataset.prefix + endValue;
                } else {
                    element.textContent = endValue;
                }
            }
        });
    }

    // Animate all counters in About Us section
    document.querySelectorAll('.about-us-counters h4').forEach(counter => {
        let text = counter.textContent.trim();
        let prefix = '';
        let number = text;
        // Extract prefix (like '+') and number
        if (/^[^\d]+/.test(text)) {
            prefix = text.match(/^[^\d]+/)[0];
            number = text.replace(/^[^\d]+/, '');
        }
        number = parseInt(number.replace(/\D/g, ''));
        counter.dataset.prefix = prefix;
        animateCounter(counter, number, 2);
    });

});

// WhatsApp button drop-in animation
window.addEventListener('DOMContentLoaded', function() {
    var waBtn = document.querySelector('.whatsapp-float');
    if (waBtn) {
        waBtn.classList.add('wa-drop-in');
        setTimeout(function() {
            waBtn.classList.remove('wa-drop-in');
        }, 700); // match CSS animation duration
    }
}); 