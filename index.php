<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MentalEscaper | Психологическая помощь</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/CSS/styles.css">
</head>

<!-- Существующие метатеги и стили -->
<style>
        /* Глобальные улучшения */
        :root {
            --pink: #FF9FDB;
            --purple: #A68EFF;
            --lavender: #E8D7FF;
            --text-dark: #2D2A4E;
            --radius-xl: 40px;
            --radius-md: 28px;
            --gradient: linear-gradient(135deg, var(--purple) 0%, var(--pink) 100%);
        }

        /* Стили для формы регистрации */
        .registration-block {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border-radius: var(--radius-xl);
            padding: 4rem;
            margin: 4rem auto;
            max-width: 600px;
            box-shadow: 0 25px 50px -12px rgba(124, 115, 255, 0.15);
            position: relative;
            overflow: hidden;
        }

        .registration-block::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -30%;
            width: 600px;
            height: 600px;
            background: var(--gradient);
            border-radius: 50%;
            opacity: 0.08;
            z-index: 0;
        }

        .registration-title {
            font-size: 2.5rem;
            color: var(--text-dark);
            margin-bottom: 2rem;
            text-align: center;
            font-family: 'Comfortaa', cursive;
        }

        .input-group {
            position: relative;
            margin-bottom: 2rem;
        }

        .input-group input {
            width: 100%;
            padding: 1.2rem;
            border: 2px solid rgba(124, 115, 255, 0.1);
            border-radius: var(--radius-md);
            background: rgba(249, 246, 255, 0.9);
            font-size: 1.1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .input-group label {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--dark);
            pointer-events: none;
            transition: all 0.3s;
        }

        .input-group input:focus,
        .input-group input:valid {
            border-color: var(--primary);
            box-shadow: 0 4px 15px rgba(124, 115, 255, 0.2);
        }

        .input-group input:focus + label,
        .input-group input:valid + label {
            top: -10px;
            left: 0.5rem;
            font-size: 0.9rem;
            color: var(--primary);
        }

        .btn-register {
            position: relative;
            width: 100%;
            padding: 1.2rem;
            border: none;
            border-radius: 60px;
            background: var(--gradient);
            color: white;
            font-weight: 700;
            cursor: pointer;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(124, 115, 255, 0.3);
        }

        .auth-links {
            margin-top: 2rem;
            text-align: center;
        }

        .auth-link {
            display: block;
            color: var(--dark);
            text-decoration: none;
            margin: 0.5rem 0;
            transition: color 0.3s;
        }

        .auth-link:hover {
            color: var(--primary);
        }

        @media (max-width: 768px) {
            .registration-block {
                padding: 2rem;
                margin: 2rem;
            }

            .registration-title {
                font-size: 2rem;
            }

            .input-group input {
                padding: 1rem;
            }
        }


        /* Блок анализа с ИИ - полный редизайн */
        .analysis-block {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 4rem;
            background: var(--lavender);
            border-radius: var(--radius-xl);
            padding: 4rem;
            margin: 4rem auto;
            position: relative;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(124, 115, 255, 0.25);
        }

        .analysis-block::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -30%;
            width: 600px;
            height: 600px;
            background: var(--gradient);
            border-radius: 50%;
            opacity: 0.1;
            z-index: 0;
        }

        .analysis-input {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .analysis-textarea {
            width: 100%;
            height: 250px;
            padding: 2rem;
            border: 3px solid rgba(255, 255, 255, 0.5);
            border-radius: var(--radius-md);
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            font-size: 1.1rem;
            color: var(--text-dark);
            transition: all 0.3s;
            box-shadow: 0 8px 32px rgba(166, 142, 255, 0.1);
        }

        .analysis-textarea:focus {
            border-color: var(--pink);
            background: rgba(255, 255, 255, 1);
            box-shadow: 0 12px 40px rgba(255, 159, 219, 0.2);
        }

        .analysis-output {
            position: relative;
            min-height: 400px;
            padding: 2.5rem;
            background: rgba(255, 255, 255, 0.95);
            border-radius: var(--radius-md);
            backdrop-filter: blur(12px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
        }

        .ai-response {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-dark);
            position: relative;
        }

        .ai-response::after {
            content: '💖';
            position: absolute;
            bottom: -2rem;
            right: 0;
            font-size: 2rem;
            opacity: 0.3;
        }

        /* Анимированная кнопка */
        .analyze-btn {
            position: relative;
            overflow: hidden;
            border: none;
            padding: 1.5rem 3rem;
            border-radius: 60px;
            background: var(--gradient);
            color: white;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
            box-shadow: 0 15px 30px rgba(166, 142, 255, 0.4);
        }

        .analyze-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 25px 50px rgba(166, 142, 255, 0.3);
        }

        .analyze-btn::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg,
                transparent 25%,
                rgba(255, 255, 255, 0.1) 50%,
                transparent 75%);
            transform: rotate(30deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) rotate(30deg); }
            100% { transform: translateX(100%) rotate(30deg); }
        }

        .error-message {
  color: #dc3545;
  background: #ffe6e6;
  border: 1px solid #ffcccc;
  padding: 1rem;
  border-radius: var(--radius-md);
  margin-top: 1rem;
  display: none;
}

.dynamic-image {
  width: 100%;
  border-radius: var(--radius-md);
  margin-top: 2rem;
  display: none;
}

.ai-response {
  display: none;
}

.affirmations-block {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
gap: 2rem;
padding: 4rem 2rem;
position: relative;
}

.affirmation-card {
position: relative;
min-height: 400px;
border-radius: var(--radius-xl);
overflow: hidden;
background-size: cover;
background-position: center;
transform: translateY(0);
transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.affirmation-card::before {
content: '';
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: linear-gradient(45deg,
  rgba(44,42,78,0.9) 0%,
  rgba(166,142,255,0.4) 100%);
z-index: 1;
}

.affirmation-card:hover {
transform: translateY(-10px);
box-shadow: 0 25px 50px rgba(124,115,255,0.15);
}

.affirmation-content {
position: relative;
z-index: 2;
padding: 2rem;
color: white;
height: 100%;
display: flex;
flex-direction: column;
justify-content: flex-end;
}

.affirmation-content h3 {
font-size: 2.2rem;
margin-bottom: 1.5rem;
text-shadow: 0 2px 10px rgba(0,0,0,0.3);
}

.affirmation-text p {
font-size: 1.2rem;
line-height: 1.6;
opacity: 0.9;
margin-bottom: 2rem;
position: relative;
z-index: 2;
}

.floating-text {
position: absolute;
font-size: 6rem;
font-weight: 700;
opacity: 0.08;
animation: float 25s infinite linear;
pointer-events: none;
z-index: 0;
}

@keyframes float {
0% { transform: translate(-50%, -50%) rotate(-15deg); }
50% { transform: translate(50%, 50%) rotate(15deg); }
100% { transform: translate(-50%, -50%) rotate(-15deg); }
}

.voice-icon {
position: absolute;
top: 2rem;
right: 2rem;
width: 60px;
height: 60px;
background: rgba(255,255,255,0.95);
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
transition: all 0.3s;
z-index: 3;
backdrop-filter: blur(5px);
}

.voice-icon i {
color: var(--primary);
font-size: 1.6rem;
margin-left: 5px;
transition: transform 0.3s;
}

.voice-icon:hover {
transform: scale(1.1);
box-shadow: 0 5px 15px rgba(124,115,255,0.3);
}

@media (max-width: 768px) {
.affirmations-block {
  padding: 2rem 1rem;
  grid-template-columns: 1fr;
}

.affirmation-card {
  min-height: 300px;
}

.affirmation-content h3 {
  font-size: 1.8rem;
}

.floating-text {
  font-size: 4rem;
}
}

        /* Адаптивность */
        @media (max-width: 1024px) {
            .analysis-block {
                grid-template-columns: 1fr;
                padding: 2.5rem;
                margin: 2rem auto;
            }

            .affirmations-block {
                padding: 2rem;
                grid-template-columns: 1fr;
            }

            .analysis-textarea {
                height: 180px;
            }
        }

        @media (max-width: 480px) {
            .analysis-block,
            .affirmations-block {
                border-radius: var(--radius-md);
                padding: 1.5rem;
            }

            .analyze-btn {
                width: 100%;
                padding: 1.2rem;
            }
        }
    </style>

<body>
    <header>
        <nav class="navbar">
            <a href="/" class="logo">
                <img src="img/лого1.png" alt="Лого">
                MentalEscaper
            </a>

            <div class="nav-links">
                <a href="/">Главная</a>
                <a href="/test.php">Анализ</a>
                <a href="/advice.php">Рекомендации</a>
                <a href="/affirmations">Аффирмации</a>
                <a href="/breathing">Медитация</a>
            </div>

            <div class="auth-buttons">
                <button class="btn">Войти</button>
            </div>

            <div class="burger">
                <div class="burger-line"></div>
                <div class="burger-line"></div>
                <div class="burger-line"></div>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Ваш путь к гармонии начинается здесь</h1>
            <p>Индивидуальный подход к ментальному здоровью с использованием AI-технологий и методов когнитивной терапии</p>
            <button class="btn btn-hero">Начать бесплатный тест</button>
        </div>
        <div class="hero-image">
            <div class="slider-container">
                <div class="slider-track">
                    <div class="slider-item active">
                        <img src="img/hero_photo.jpg" alt="Медитация">
                    </div>
                    <div class="slider-item">
                        <img src="img/hero_photo2.jpg" alt="Йога">
                    </div>
                    <div class="slider-item">
                        <img src="img/hero_photo3.jpg" alt="Терапия">
                    </div>
                </div>
                <div class="slider-dots"></div>
            </div>
        </div>
    </section>

    <!-- Добавьте эту секцию после блока hero -->
<section class="section" id="registration">
    <div class="registration-block">
        <div class="registration-content">
            <h2 class="registration-title">Начните свой путь к гармонии</h2>

            <form class="registration-form" id="regForm">
                <div class="input-group">
                    <input type="text" id="fullname" required>
                    <label for="fullname">ФИО</label>
                    <div class="input-border"></div>
                </div>

                <div class="input-group">
                    <input type="email" id="email" required>
                    <label for="email">Электронная почта</label>
                    <div class="input-border"></div>
                </div>

                <div class="input-group">
                    <input type="password" id="password" required>
                    <label for="password">Пароль</label>
                    <div class="input-border"></div>
                </div>

                <button type="submit" class="btn-register">
                    <span class="btn-text">Войти</span>
                    <div class="btn-gradient"></div>
                </button>
            </form>

            <div class="auth-links">
                <a href="#recover" class="auth-link">Забыли пароль?</a>
                <a href="#login" class="auth-link">Уже есть аккаунт?</a>
            </div>
        </div>
    </div>
</section>

    <!-- Обновленный блок анализа -->
    <section class="section" id="analysis">
        <div class="analysis-block">
            <div class="analysis-input">
                <h2 style="font-size: 2.5rem; color: var(--text-dark); margin-bottom: 1rem;">
                    💬 Расскажите о своем состоянии
                </h2>
                <p style="color: #5A5773; margin-bottom: 2rem;">
                    Наш ИИ-психолог проанализирует ваши эмоции и даст персонализированные рекомендации
                </p>
                <textarea
                    class="analysis-textarea"
                    id="userInput"
                    placeholder="Пример: Сегодня я чувствую тревогу из-за работы..."
                    spellcheck="false"
                ></textarea>
                <button class="analyze-btn" id="analyzeBtn">
                    Анализировать мое состояние
                </button>
            </div>
            <div class="ai-response" id="aiResponse">
                <div class="loader" id="loader"></div>
                <div id="responseContent"></div>
                <div id="errorMessage" class="error-message"></div>
                <img src="https://images.unsplash.com/photo-1617791160536-598cf32026fb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                     alt="Психологическая помощь"
                     class="dynamic-image">
            </div>
        </div>
    </section>

    <section class="section" id="affirmations">
    <div class="affirmations-block">
        <!-- Карточка 1 -->
        <div class="affirmation-card"
            style="background-image: url('https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')">
            <div class="particles-overlay"></div>
            <div class="voice-icon">
                <i class="fas fa-play"></i>
            </div>
            <div class="affirmation-content">
                <h3>Я наполнен спокойствием</h3>
                <div class="affirmation-text">
                    <p>Как океан остается невозмутимым под поверхностью волн, так и мой разум сохраняет мир внутри</p>
                    <div class="floating-text">гармония</div>
                </div>
            </div>
        </div>

        <!-- Карточка 2 -->
        <div class="affirmation-card"
            style="background-image: url('https://images.unsplash.com/photo-1490730141103-6cac27aaab94?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')">
            <div class="particles-overlay"></div>
            <div class="voice-icon">
                <i class="fas fa-play"></i>
            </div>
            <div class="affirmation-content">
                <h3>Я достоин лучшего</h3>
                <div class="affirmation-text">
                    <p>Моя ценность безгранична, как звездное небо. Я принимаю любовь и изобилие вселенной</p>
                    <div class="floating-text">уверенность</div>
                </div>
            </div>
        </div>

        <!-- Добавьте больше карточек -->
    </div>
</section>



    <canvas id="particles-canvas"></canvas>
    <script src="/scripts.js"></script>



<script>
        // Озвучивание аффирмаций
        function speakText(text) {
            const synth = window.speechSynthesis;
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'ru-RU';
            utterance.pitch = 0.9;
            utterance.rate = 1.1;
            synth.speak(utterance);
        }

        // Инициализация аффирмаций
        document.querySelectorAll('.affirmation-card').forEach(card => {
            card.addEventListener('click', () => {
                const text = card.querySelector('h3').textContent;
                speakText(text);
            });
        });
    </script>

    <script>
    // Улучшенная анимация кнопки
    document.querySelectorAll('.analyze-btn').forEach(btn => {
        btn.addEventListener('mousemove', e => {
            const x = e.pageX - btn.offsetLeft;
            const y = e.pageY - btn.offsetTop;
            btn.style.setProperty('--x', x + 'px');
            btn.style.setProperty('--y', y + 'px');
        });
    });

    // Параллакс-эффект для карточек
    document.querySelectorAll('.affirmation-card').forEach(card => {
        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.transform = `perspective(1000px) rotateX(${(y - rect.height/2)/20}deg) rotateY(${-(x - rect.width/2)/20}deg)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
        });
    });

    // Добавить эти функции в ваш scripts.js
</script>

<script>
// Валидация формы
document.getElementById('regForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const inputs = Array.from(this.elements).filter(el => el.tagName === 'INPUT');
    let isValid = true;

    inputs.forEach(input => {
        if (!input.checkValidity()) {
            input.parentElement.classList.add('invalid');
            isValid = false;
        } else {
            input.parentElement.classList.remove('invalid');
        }
    });

    if (isValid) {
        // Отправка формы
        console.log('Форма валидна, отправляем данные');
    }
});

// Динамическая валидация
document.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', () => {
        if (input.checkValidity()) {
            input.parentElement.classList.remove('invalid');
        }
    });
});
</script>

<script>
    // Конфигурация OpenAI
    const OPENAI_CONFIG = {
        MODEL: "gpt-3.5-turbo",
        MAX_TOKENS: 500
    };

    const UI_ELEMENTS = {
        userInput: document.getElementById('userInput'),
        analyzeBtn: document.getElementById('analyzeBtn'),
        responseContent: document.getElementById('responseContent'),
        errorMessage: document.getElementById('errorMessage'),
        loader: document.getElementById('loader')
    };

    // Основной обработчик
    async function handleAnalysisRequest() {
        const userText = UI_ELEMENTS.userInput.value.trim();

        if (!userText) {
            showError("Пожалуйста, опишите вашу ситуацию.");
            return;
        }

        try {
            toggleLoader(true);
            clearMessages();

            // Для теста без API используйте mockOpenAIResponse()
            const responseData = await fetchOpenAIResponse(userText);
            displayResponse(responseData);

        } catch (error) {
            handleApiError(error);
        } finally {
            toggleLoader(false);
        }
    }

    // Реальный запрос к OpenAI API
    async function fetchOpenAIResponse(userText) {
        const response = await fetch(OPENAI_CONFIG.ENDPOINT, {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${OPENAI_CONFIG.API_KEY}`
            },
            body: JSON.stringify({
                model: OPENAI_CONFIG.MODEL,
                messages: [{
                    role: "user",
                    content: `Проанализируй психологическое состояние: ${userText}.
                             Ответь в формате: 1) Анализ; 2) Рекомендации; 3) Цитата`
                }],
                max_tokens: OPENAI_CONFIG.MAX_TOKENS
            })
        });

        if (!response.ok) {
            const errorData = await response.json();
            throw new Error(errorData.error?.message || `Ошибка ${response.status}`);
        }

        return response.json();
    }

    // Мок-ответ для тестирования без API
    function mockOpenAIResponse() {
        return {
            choices: [{
                message: {
                    content: `1) Вы испытываете умеренную тревогу\n2) Практикуйте дыхательные упражнения\n3) "Спокойствие приходит изнутри" - Далай-лама`
                }
            }]
        };
    }

    // Обработчик ошибок
    function handleApiError(error) {
        const errorMessages = {
            401: "Неверный API-ключ",
            429: "Слишком много запросов",
            default: `Ошибка: ${error.message}`
        };

        showError(errorMessages[error.message.split(' ').pop()] || errorMessages.default);
    }

    // Вспомогательные функции
    function toggleLoader(show) {
        UI_ELEMENTS.loader.style.display = show ? 'block' : 'none';
    }

    function clearMessages() {
        UI_ELEMENTS.responseContent.textContent = '';
        UI_ELEMENTS.errorMessage.textContent = '';
    }

    function displayResponse(data) {
        UI_ELEMENTS.responseContent.innerHTML = data.choices[0].message.content;
    }

    function showError(message) {
        UI_ELEMENTS.errorMessage.textContent = message;
        UI_ELEMENTS.errorMessage.style.display = 'block';
    }

    UI_ELEMENTS.analyzeBtn.addEventListener('click', handleAnalysisRequest);
</script>


</body>
</html>
