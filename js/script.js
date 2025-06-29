document.addEventListener('DOMContentLoaded', () => {
    "use strict";

    /**
     * Clients Swiper
     */
    new Swiper('.clients-swiper', {
        speed: 400,
        loop: true,
        slidesPerView: 3,
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
                slidesPerView: 4,
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
     * Navbar links active state on scroll and click (desktop and mobile)
     */
    let desktopNavbarLinks = document.querySelectorAll('.navbar-nav .nav-link[href^="#"]');
    let mobileNavbarLinks = document.querySelectorAll('.side-nav-links a[href^="#"]');
    let allNavbarLinks = [...desktopNavbarLinks, ...mobileNavbarLinks];

    function navbarlinksActive() {
        let position = window.scrollY + 200;
        allNavbarLinks.forEach(navbarlink => {
            if (!navbarlink.hash) return;
            let section = document.querySelector(navbarlink.hash);
            if (!section) return;
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                allNavbarLinks.forEach(link => link.classList.remove('active'));
                // Set active for all links with same hash (desktop & mobile)
                allNavbarLinks.forEach(link => {
                    if (link.hash === navbarlink.hash) link.classList.add('active');
                });
            }
        });
    }
    window.addEventListener('load', navbarlinksActive);
    document.addEventListener('scroll', navbarlinksActive);

    // Add click event to nav-links (desktop & mobile)
    allNavbarLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            allNavbarLinks.forEach(l => l.classList.remove('active'));
            // Set active for all links with same hash
            allNavbarLinks.forEach(l => {
                if (l.hash === link.hash) l.classList.add('active');
            });
        });
    });

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

    // Animate all counters in About Us section, but only when called
    function startAboutCounters() {
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
    }
    window.startAboutCounters = startAboutCounters;

    // Side Nav Elements
    const sideNav = document.getElementById('sideNav');
    const sideNavOverlay = document.getElementById('sideNavOverlay');
    const openSideNav = document.getElementById('openSideNav');
    const closeSideNav = document.getElementById('closeSideNav');
    // Open Side Nav
    if (openSideNav) {
        openSideNav.addEventListener('click', function () {
            sideNav.classList.add('open');
            sideNavOverlay.classList.add('open');
        });
    }
    // Close Side Nav
    if (closeSideNav) {
        closeSideNav.addEventListener('click', function () {
            sideNav.classList.remove('open');
            sideNavOverlay.classList.remove('open');
        });
    }
    if (sideNavOverlay) {
        sideNavOverlay.addEventListener('click', function () {
            sideNav.classList.remove('open');
            sideNavOverlay.classList.remove('open');
        });
    }
    // Generate Stars in Side Nav
    const navStarsBg = document.querySelector('.nav-stars-bg');
    if (navStarsBg) {
        for (let i = 0; i < 60; i++) {
            const star = document.createElement('div');
            star.className = 'nav-star';
            star.style.left = Math.random() * 100 + '%';
            star.style.top = Math.random() * 100 + '%';
            star.style.width = (Math.random() * 2 + 1) + 'px';
            star.style.height = star.style.width;
            star.style.animationDelay = (Math.random() * 3) + 's';
            navStarsBg.appendChild(star);
        }
    }
    // Mobile language toggle
    const langToggleMobile = document.getElementById('lang-toggle-mobile');
    if (langToggleMobile) {
        langToggleMobile.addEventListener('click', function () {
            document.getElementById('lang-toggle').click();
        });
    }
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

/**
 * Form Submission Handler
 */
function handleFormSubmit(event) {
    event.preventDefault();
    
    const form = event.target;
    const submitBtn = document.getElementById('submitBtn');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoading = submitBtn.querySelector('.btn-loading');
    
    // Get form data
    const formData = new FormData(form);
    const name = formData.get('name');
    const email = formData.get('email');
    const phone = formData.get('phone');
    const message = formData.get('message');
    
    // Validate form
    if (!name || !email || !phone || !message) {
        showToast('يرجى ملء جميع الحقول المطلوبة', 'error');
        return;
    }
    
    // Show loading state
    submitBtn.disabled = true;
    btnText.classList.add('d-none');
    btnLoading.classList.remove('d-none');
    
    // Create WhatsApp message
    const whatsappMessage = `مرحباً، لدي استفسار جديد:

الاسم: ${name}
البريد الإلكتروني: ${email}
رقم الجوال: ${phone}
الرسالة: ${message}

شكراً لكم.`;
    
    // Encode message for URL
    const encodedMessage = encodeURIComponent(whatsappMessage);
    const whatsappNumber = '00966548010732';
    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
    
    // Simulate processing delay
    setTimeout(() => {
        // Open WhatsApp
        window.open(whatsappUrl, '_blank');
        
        // Show success toast
        showToast('تم إرسال رسالتك بنجاح! سيتم التواصل معك قريباً.', 'success');
        
        // Reset form
        form.reset();
        
        // Reset button state
        submitBtn.disabled = false;
        btnText.classList.remove('d-none');
        btnLoading.classList.add('d-none');
        
    }, 1500);
}

/**
 * Toast Notification System
 */
function showToast(message, type = 'info') {
    const toastContainer = document.getElementById('toastContainer');
    
    // Create toast element
    const toast = document.createElement('div');
    toast.className = `toast align-items-center text-white border-0`;
    toast.setAttribute('role', 'alert');
    toast.setAttribute('aria-live', 'assertive');
    toast.setAttribute('aria-atomic', 'true');
    
    // Set background color based on type
    switch(type) {
        case 'success':
            toast.style.backgroundColor = '#28a745';
            break;
        case 'error':
            toast.style.backgroundColor = '#dc3545';
            break;
        case 'warning':
            toast.style.backgroundColor = '#ffc107';
            toast.style.color = '#000';
            break;
        default:
            toast.style.backgroundColor = '#17a2b8';
    }
    
    toast.innerHTML = `
        <div class="d-flex">
            <div class="toast-body">
                ${message}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    `;
    
    // Add toast to container
    toastContainer.appendChild(toast);
    
    // Initialize and show toast
    const bsToast = new bootstrap.Toast(toast, {
        autohide: true,
        delay: 5000
    });
    
    bsToast.show();
    
    // Remove toast element after it's hidden
    toast.addEventListener('hidden.bs.toast', () => {
        toast.remove();
    });
} 