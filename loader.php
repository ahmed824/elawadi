<!-- Elwady SVG/GSAP Preloader -->
<div class="elwady-preloader-container" id="elwady-preloader">
    <div class="elwady-floating-particles"></div>
    <div class="elwady-glow-effect"></div>
    <div class="elwady-logo-container">
        <svg class="elwady-logo-svg" viewBox="0 0 477 458" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="main-structure">
                <path
                    d="M421.696 112.949C442.118 113.467 458.514 130.183 458.514 150.729L458.501 151.705C457.983 172.126 441.267 188.522 420.721 188.522L419.745 188.51C413.818 188.36 408.231 186.844 403.284 184.267L346.353 237.526C345.595 238.235 345.164 239.227 345.164 240.265V285.472C345.164 286.891 344.681 288.268 343.795 289.376L240.661 418.294C239.345 419.938 236.836 419.915 235.55 418.248L136.105 289.339C135.262 288.245 134.805 286.903 134.805 285.521V240.312C134.805 239.253 134.356 238.244 133.572 237.533L74.7461 184.222L76.4258 182.37L135.251 235.681C136.558 236.865 137.305 238.548 137.305 240.312V285.521C137.305 286.35 137.579 287.156 138.085 287.812L237.529 416.722C237.826 417.106 238.405 417.111 238.709 416.731L341.843 287.814C342.375 287.15 342.664 286.323 342.664 285.472V240.265C342.664 238.535 343.381 236.882 344.645 235.7L401.004 182.977C390.421 176.492 383.276 164.945 382.94 151.705L382.928 150.729C382.928 129.857 399.848 112.937 420.721 112.937L421.696 112.949Z"
                    fill="url(#elwady-paint0_linear)" />
                <path
                    d="M439.372 0.0126953C459.793 0.530393 476.189 17.2469 476.189 37.793L476.177 38.7686C475.659 59.1898 458.942 75.5857 438.396 75.5859L437.421 75.5732C428.743 75.3534 420.792 72.2064 414.518 67.085L301.001 173.278C300.243 173.987 299.813 174.979 299.813 176.017V274.2C299.813 275.568 299.363 276.899 298.534 277.987L240.731 353.854C239.406 355.594 236.774 355.553 235.502 353.773L181.319 277.918C180.562 276.858 180.155 275.588 180.155 274.285V176.063C180.155 175.005 179.708 173.996 178.924 173.285L61.7061 67.0557C55.1915 72.3857 46.8666 75.5859 37.793 75.5859L36.8174 75.5732C16.7201 75.0641 0.522052 58.8658 0.0126953 38.7686L0 37.793C0 16.9206 16.9206 0 37.793 0L38.7686 0.0126953C59.1899 0.530266 75.5859 17.2469 75.5859 37.793L75.5732 38.7686C75.307 49.2719 70.7543 58.7089 63.6006 65.3994L180.603 171.433C181.91 172.617 182.655 174.299 182.655 176.063V274.285C182.655 275.067 182.9 275.829 183.354 276.465L237.536 352.32C237.83 352.731 238.437 352.74 238.743 352.339L296.546 276.473C297.043 275.82 297.313 275.021 297.313 274.2V176.017C297.313 174.287 298.03 172.634 299.293 171.452L412.625 65.4316C405.451 58.7393 400.883 49.2893 400.616 38.7686L400.604 37.793C400.604 16.9206 417.524 0 438.396 0L439.372 0.0126953Z"
                    fill="url(#elwady-paint0_linear)" />
            </g>
            <g id="nodes">
                <circle id="node1" cx="56" cy="150" r="25" fill="url(#elwady-paint1_linear)" opacity="0.9" />
                <circle id="node2" cx="421" cy="150" r="25" fill="url(#elwady-paint1_linear)" opacity="0.9" />
                <circle id="node3" cx="38" cy="38" r="25" fill="url(#elwady-paint1_linear)" opacity="0.9" />
                <circle id="node4" cx="438" cy="38" r="25" fill="url(#elwady-paint1_linear)" opacity="0.9" />
                <circle id="center-node" cx="238" cy="420" r="36" fill="white" stroke="url(#elwady-paint1_linear)"
                    stroke-width="3" />
            </g>
            <defs>
                <linearGradient id="elwady-paint0_linear" x1="22" y1="419" x2="376" y2="56"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#CBA228" />
                    <stop offset="1" stop-color="#EFCA5E" />
                </linearGradient>
                <linearGradient id="elwady-paint1_linear" x1="204" y1="458" x2="267" y2="400"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#CBA228" />
                    <stop offset="1" stop-color="#EFCA5E" />
                </linearGradient>
            </defs>
        </svg>
    </div>
    <div class="elwady-loading-text">جاري التحميل...</div>
    <div class="elwady-progress-container">
        <div class="elwady-progress-bar" id="elwady-progressBar"></div>
    </div>
    <div class="elwady-percentage" id="elwady-percentage">0%</div>
</div>
<style>
    .elwady-preloader-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: linear-gradient(135deg, rgb(70, 70, 77) 0%, white 50%, rgb(209, 209, 227) 100%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 99999;
        transition: opacity 0.5s ease-out;
        direction: rtl;
    }

    .elwady-preloader-container.fade-out {
        opacity: 0;
        pointer-events: none;
    }

    .elwady-logo-container {
        position: relative;
        width: 180px;
        height: 180px;
        margin-bottom: 2rem;
    }

    .elwady-logo-svg {
        width: 100%;
        height: 100%;
        filter: drop-shadow(0 10px 30px rgba(203, 162, 40, 0.13)); /* gold shadow */
    }

    .elwady-glow-effect {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(203, 162, 40, 0.10) 0%, transparent 70%);
        border-radius: 50%;
        animation: elwady-pulse 2s infinite;
        z-index: 1;
    }

    @keyframes elwady-pulse {
        0%, 100% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.5;
        }
        50% {
            transform: translate(-50%, -50%) scale(1.1);
            opacity: 0.8;
        }
    }

    .elwady-loading-text {
        color: #181828;
        font-size: 1.3rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 1rem;
        opacity: 0.95;
        text-shadow: 0 2px 8px rgba(203, 162, 40, 0.08);
    }

    .elwady-progress-container {
        width: 220px;
        height: 5px;
        background: rgba(203, 162, 40, 0.10);
        border-radius: 2px;
        overflow: hidden;
        margin-bottom: 1rem;
        box-shadow: 0 2px 8px rgba(203, 162, 40, 0.08);
    }

    .elwady-progress-bar {
        height: 100%;
        background: linear-gradient(90deg, #cba228 0%, #efca5e 100%);
        border-radius: 2px;
        width: 0%;
        transition: width 0.3s cubic-bezier(.4,0,.2,1);
        box-shadow: 0 1px 6px #cba22833;
    }

    .elwady-percentage {
        color: #181828;
        font-size: 1rem;
        font-weight: 600;
        opacity: 0.85;
        text-shadow: 0 1px 4px #efca5e22;
    }

    .elwady-floating-particles {
        position: absolute;
        width: 100%;
        height: 100%;
        pointer-events: none;
        top: 0;
        left: 0;
        z-index: 0;
    }

    .elwady-particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: linear-gradient(135deg, #cba228 60%, #efca5e 100%);
        border-radius: 50%;
        opacity: 0.7;
        box-shadow: 0 0 6px #cba22844;
    }

    @media (max-width: 768px) {
        .elwady-logo-container {
            width: 120px;
            height: 120px;
        }
        .elwady-glow-effect {
            width: 140px;
            height: 140px;
        }
        .elwady-progress-container {
            width: 120px;
        }
        .elwady-loading-text {
            font-size: 1rem;
        }
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    (function () {
        // GSAP Animation Timeline
        const tl = gsap.timeline();
        let progress = 0;
        const progressBar = document.getElementById('elwady-progressBar');
        const percentage = document.getElementById('elwady-percentage');
        const preloader = document.getElementById('elwady-preloader');

        // Create floating particles
        function createParticles() {
            const particleContainer = document.querySelector('.elwady-floating-particles');
            for (let i = 0; i < 18; i++) {
                const particle = document.createElement('div');
                particle.className = 'elwady-particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particleContainer.appendChild(particle);
                gsap.to(particle, {
                    x: (Math.random() - 0.5) * 120,
                    y: (Math.random() - 0.5) * 120,
                    duration: 2.5 + Math.random() * 1.5,
                    repeat: -1,
                    yoyo: true,
                    ease: "sine.inOut"
                });
                gsap.to(particle, {
                    opacity: 0.2,
                    duration: 1 + Math.random(),
                    repeat: -1,
                    yoyo: true,
                    ease: "sine.inOut"
                });
            }
        }

        // Initialize animations
        function initPreloader() {
            gsap.set("#main-structure", { opacity: 0, scale: 0.8 });
            gsap.set("#nodes circle", { scale: 0, transformOrigin: "center" });
            gsap.set(".elwady-loading-text", { opacity: 0, y: 20 });
            gsap.set(".elwady-progress-container", { opacity: 0, y: 20 });
            gsap.set(".elwady-percentage", { opacity: 0, y: 20 });
            tl.to("#main-structure", { opacity: 1, scale: 1, duration: 1, ease: "back.out(1.7)" })
                .to("#nodes circle", { scale: 1, duration: 0.6, stagger: 0.1, ease: "back.out(1.7)" }, "-=0.5")
                .to(".elwady-loading-text", { opacity: 1, y: 0, duration: 0.5 }, "-=0.3")
                .to([".elwady-progress-container", ".elwady-percentage"], { opacity: 1, y: 0, duration: 0.5, stagger: 0.1 }, "-=0.2");
            gsap.to("#nodes circle", { scale: 1.2, duration: 1.5, repeat: -1, yoyo: true, stagger: 0.2, ease: "sine.inOut" });
            gsap.to("#center-node", { rotation: 360, duration: 4, repeat: -1, ease: "none", transformOrigin: "center" });
            gsap.to(".elwady-loading-text", { opacity: 0.6, duration: 1, repeat: -1, yoyo: true, ease: "sine.inOut" });
        }

        // Progress simulation
        function simulateProgress() {
            const progressInterval = setInterval(() => {
                progress += Math.random() * 15 + 5;
                if (progress >= 100) {
                    progress = 100;
                    clearInterval(progressInterval);
                    setTimeout(hidePreloader, 400);
                }
                progressBar.style.width = progress + '%';
                percentage.textContent = Math.round(progress) + '%';
            }, 180);
        }

        // Hide preloader
        function hidePreloader() {
            gsap.to(preloader, {
                opacity: 0,
                duration: 0.7,
                ease: "power2.inOut",
                onComplete: () => {
                    preloader.style.display = 'none';
                    if (window.startAboutCounters) window.startAboutCounters();
                }
            });
        }

        // Initialize everything
        document.addEventListener('DOMContentLoaded', () => {
            createParticles();
            initPreloader();
            simulateProgress();
        });
    })();
</script>