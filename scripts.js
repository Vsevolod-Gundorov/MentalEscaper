document.addEventListener('DOMContentLoaded', () => {
    // ==================== Бургер-меню ====================
    const burger = document.querySelector('.burger');
    const navLinks = document.querySelector('.nav-links');
    const authButtons = document.querySelector('.auth-buttons');

    const toggleMenu = () => {
        navLinks.classList.toggle('nav-active');
        authButtons.classList.toggle('nav-active');
        burger.classList.toggle('active');

        document.querySelectorAll('.burger-line').forEach((line, index) => {
            if (index === 1) {
                line.style.opacity = burger.classList.contains('active') ? '0' : '1';
            } else {
                line.style.transform = burger.classList.contains('active') ?
                    `rotate(${index === 0 ? '45deg' : '-45deg'}) translate(${index === 0 ? '4px, 4px' : '-4px, 3px'})` :
                    'rotate(0) translate(0)';
            }
        });
    };

    burger.addEventListener('click', toggleMenu);

    // ==================== Слайдер ====================
    class Slider {
        constructor(container) {
            this.container = container;
            this.track = container.querySelector('.slider-track');
            this.items = Array.from(container.querySelectorAll('.slider-item'));
            this.dotsContainer = container.querySelector('.slider-dots');
            this.currentIndex = 0;
            this.interval = null;
            this.timeout = 7000;

            this.init();
        }

        init() {
            // Создание точек навигации
            this.items.forEach((_, index) => {
                const dot = document.createElement('div');
                dot.classList.add('slider-dot');
                dot.addEventListener('click', () => this.goToSlide(index));
                this.dotsContainer.appendChild(dot);
            });

            // Автопрокрутка
            this.startAutoSlide();
            this.updateDots();

            // Пауза при наведении
            this.container.addEventListener('mouseenter', () =>
                clearInterval(this.interval));

            this.container.addEventListener('mouseleave', () =>
                this.startAutoSlide());
        }

        startAutoSlide() {
            this.interval = setInterval(() =>
                this.nextSlide(), this.timeout);
        }

        nextSlide() {
            const newIndex = (this.currentIndex + 1) % this.items.length;
            this.switchSlide(newIndex);
        }

        goToSlide(index) {
            if(index === this.currentIndex) return;
            this.switchSlide(index);
            clearInterval(this.interval);
            this.startAutoSlide();
        }

        switchSlide(newIndex) {
            this.items[this.currentIndex].classList.remove('active');
            this.items[newIndex].classList.add('active');
            this.track.style.transform = `translateX(-${newIndex * 100}%)`;
            this.currentIndex = newIndex;
            this.updateDots();
        }

        updateDots() {
            this.dotsContainer.querySelectorAll('.slider-dot').forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentIndex);
            });
        }
    }

    // ==================== Плавающие частицы ====================
    class ParticlesSystem {
        constructor(canvas) {
            this.canvas = canvas;
            this.ctx = canvas.getContext('2d');
            this.particles = [];

            this.resize();
            window.addEventListener('resize', () => this.resize());
            this.init();
        }

        resize() {
            this.canvas.width = window.innerWidth;
            this.canvas.height = window.innerHeight;
            this.width = this.canvas.width;
            this.height = this.canvas.height;
        }

        init() {
            // Создание частиц
            for(let i = 0; i < 150; i++) {
                this.particles.push({
                    x: Math.random() * this.width,
                    y: Math.random() * this.height,
                    size: Math.random() * 2 + 1,
                    speedX: Math.random() * 0.5 - 0.25,
                    speedY: Math.random() * 0.5 - 0.25
                });
            }
            this.animate();
        }

        animate() {
            this.ctx.clearRect(0, 0, this.width, this.height);

            this.particles.forEach(particle => {
                // Обновление позиции
                particle.x += particle.speedX;
                particle.y += particle.speedY;

                // Границы экрана
                if(particle.x > this.width) particle.x = 0;
                if(particle.x < 0) particle.x = this.width;
                if(particle.y > this.height) particle.y = 0;
                if(particle.y < 0) particle.y = this.height;

                // Отрисовка
                this.ctx.fillStyle = `rgba(255,255,255,${particle.size/3})`;
                this.ctx.beginPath();
                this.ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
                this.ctx.fill();
            });

            requestAnimationFrame(() => this.animate());
        }
    }

    // ==================== Параллакс-эффект ====================
    const parallaxSections = document.querySelectorAll('.parallax-section');
    const handleScroll = () => {
        const scrollY = window.scrollY;
        parallaxSections.forEach(section => {
            const speed = parseFloat(section.dataset.scrollSpeed) || 0.1;
            section.style.transform = `translateY(${scrollY * speed}px)`;
        });
    };
    document.addEventListener('scroll', handleScroll);

    // ==================== Адаптивность ====================
    const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    const handleResize = () => {
        document.documentElement.style.setProperty('--vh',
            `${window.innerHeight * 0.01}px`);
    };

    // Оптимизация для медленных устройств
    if(isMobile && navigator.connection?.effectiveType.includes('2g')) {
        document.body.style.animation = 'none';
        document.querySelectorAll('.slider-item').forEach(item => {
            item.style.animation = 'none';
        });
    }

    // Инициализация
    window.addEventListener('resize', handleResize);
    handleResize();
    new Slider(document.querySelector('.slider-container'));
    new ParticlesSystem(document.getElementById('particles-canvas'));
});


document.getElementById('playAffirmation').addEventListener('click', function(){
    const affirmationText = document.getElementById('affirmationText').textContent;
    const utterance = new SpeechSynthesisUtterance(affirmationText);
    utterance.lang = 'ru-RU';
    utterance.pitch = 1.3;
    utterance.rate = 0.9;
    utterance.voice = speechSynthesis.getVoices().find(voice => voice.name.includes('Google') || voice.lang === 'ru-RU');
    speechSynthesis.speak(utterance);
});
