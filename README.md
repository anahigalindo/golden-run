# 🌸 Golden Run — API

> **ES** | [EN below](#-golden-run--api-1)

Golden Run nació de combinar tres de mis pasiones: correr, la música de One Direction y sus integrantes como solistas, y mis perritos Odin y Toby 🐾

El nombre viene de *Golden*, canción de Harry Styles de su disco Fine Line — el disco que me presentó su música en solitario 💛

La idea es simple pero real: cuando entrenas, la zona de frecuencia cardíaca en la que estás define tu esfuerzo. ¿Por qué no dejar que esa zona también defina qué artista te acompaña? Cada zona tiene un artista asignado según el BPM real de sus canciones.

---

## 🎶 Zonas y artistas

| Zona | FC | BPM | Artista |
|------|----|-----|---------|
| Z1 · Recuperación | 50-60% | 60-80 | Niall Horan |
| Z2 · Base aeróbica | 60-70% | 80-100 | Louis Tomlinson |
| Z3 · Tempo | 70-80% | 100-120 | One Direction |
| Z4 · Umbral | 80-90% | 120-140 | Harry Styles |
| Z5 · Máximo | 90-100% | 140-160 | Zayn / Liam Payne |

---

## ✨ Features

- 🔐 **Autenticación segura** con Laravel Sanctum
- 🏃‍♀️ **Registro de entrenamientos** — zona, distancia, duración, FC promedio y fecha
- 🐾 **Con o sin perrito** — porque Odin y Toby también merecen su registro
- 🎵 **Recomendación musical por zona** — canciones con BPM real matcheado a tu esfuerzo
- 📊 **Estadísticas personales** — zona favorita, artista del momento, km totales y más

---

## 🛠️ Tech Stack

- PHP 8.x + **Laravel 11**
- **MySQL**
- **Laravel Sanctum** — autenticación por tokens
- RESTful API

---

## 🔌 API Endpoints

| Método | Ruta | Descripción | Auth |
|--------|------|-------------|------|
| POST | `/api/register` | Crear cuenta | No |
| POST | `/api/login` | Iniciar sesión | No |
| POST | `/api/logout` | Cerrar sesión | ✅ |
| GET | `/api/songs/{zone}` | Canciones por zona | ✅ |
| GET | `/api/songs/{zone}/random` | Canción aleatoria por zona | ✅ |
| GET | `/api/runs` | Historial de entrenamientos | ✅ |
| POST | `/api/runs` | Registrar entrenamiento | ✅ |
| GET | `/api/stats` | Estadísticas del usuario | ✅ |

---

## 🚀 Instalación

### Requisitos
- PHP 8.1+
- Composer
- MySQL

```bash
# Clonar el repositorio
git clone https://github.com/anahigalindo/golden-run.git
cd golden-run

# Instalar dependencias
composer install

# Configurar variables de entorno
cp .env.example .env
php artisan key:generate

# Configurar base de datos en .env
DB_CONNECTION=mysql
DB_DATABASE=golden_run
DB_USERNAME=root
DB_PASSWORD=tu_password

# Correr migraciones y seeders
php artisan migrate
php artisan db:seed

# Iniciar servidor
php artisan serve
```

---

## 📁 Estructura

```
app/
├── Http/Controllers/
│   ├── AuthController.php
│   ├── RunController.php
│   └── SongController.php
└── Models/
    ├── User.php
    ├── Run.php
    └── Song.php
database/
├── migrations/
└── seeders/
    └── SongSeeder.php   # 15 canciones con BPM real
routes/
└── api.php
```

---

## 👩‍💻 Sobre este proyecto

Tengo más de 6 años de experiencia con Laravel trabajando en sistemas clínicos de gran escala. Golden Run lo construí como proyecto personal para demostrar esa experiencia en un contexto diferente — uno que incluya mis gustos personales.

El frontend en React está en su propio repositorio: [golden-run-frontend](https://github.com/anahigalindo/golden-run-frontend)

---

---

# 🌸 Golden Run — API

> **EN** | [ES arriba](#-golden-run--api)

Golden Run was born from combining three of my passions: running, the music of One Direction and their solo careers, and my dogs Odin and Toby 🐾

The name comes from *Golden*, a Harry Styles song from his Fine Line album — the album that introduced me to his solo music 💛

The concept is simple but real: when you train, your heart rate zone defines your effort level. So why not let that zone also define which artist accompanies you? Each zone is assigned an artist based on the real BPM of their songs.

---

## 🎶 Zones & Artists

| Zone | HR | BPM | Artist |
|------|----|-----|--------|
| Z1 · Recovery | 50-60% | 60-80 | Niall Horan |
| Z2 · Aerobic Base | 60-70% | 80-100 | Louis Tomlinson |
| Z3 · Tempo | 70-80% | 100-120 | One Direction |
| Z4 · Threshold | 80-90% | 120-140 | Harry Styles |
| Z5 · Maximum | 90-100% | 140-160 | Zayn / Liam Payne |

---

## ✨ Features

- 🔐 **Secure authentication** with Laravel Sanctum
- 🏃‍♀️ **Workout logging** — zone, distance, duration, average heart rate and date
- 🐾 **With or without your dog** — because Odin and Toby deserve their own log
- 🎵 **Zone-based music recommendations** — real BPM matched to your effort level
- 📊 **Personal stats** — favorite zone, top artist, total km and more

---

## 🛠️ Tech Stack

- PHP 8.x + **Laravel 11**
- **MySQL**
- **Laravel Sanctum** — token-based authentication
- RESTful API

---

## 🔌 API Endpoints

| Method | Route | Description | Auth |
|--------|-------|-------------|------|
| POST | `/api/register` | Create account | No |
| POST | `/api/login` | Log in | No |
| POST | `/api/logout` | Log out | ✅ |
| GET | `/api/songs/{zone}` | Songs by zone | ✅ |
| GET | `/api/songs/{zone}/random` | Random song by zone | ✅ |
| GET | `/api/runs` | Workout history | ✅ |
| POST | `/api/runs` | Log workout | ✅ |
| GET | `/api/stats` | User statistics | ✅ |

---

## 🚀 Installation

### Requirements
- PHP 8.1+
- Composer
- MySQL

```bash
# Clone the repository
git clone https://github.com/anahigalindo/golden-run.git
cd golden-run

# Install dependencies
composer install

# Set up environment variables
cp .env.example .env
php artisan key:generate

# Configure database in .env
DB_CONNECTION=mysql
DB_DATABASE=golden_run
DB_USERNAME=root
DB_PASSWORD=your_password

# Run migrations and seeders
php artisan migrate
php artisan db:seed

# Start server
php artisan serve
```

---

## 📁 Project Structure

```
app/
├── Http/Controllers/
│   ├── AuthController.php
│   ├── RunController.php
│   └── SongController.php
└── Models/
    ├── User.php
    ├── Run.php
    └── Song.php
database/
├── migrations/
└── seeders/
    └── SongSeeder.php   # 15 songs with real BPM data
routes/
└── api.php
```

---

## 👩‍💻 About this project

I have 6+ years of Laravel experience working on large-scale clinical management systems. I built Golden Run as a personal project to showcase that experience in a different context — one that includes my personal interests.

The React frontend lives in its own repository: [golden-run-frontend](https://github.com/anahigalindo/golden-run-frontend)

---

*For Odin and Toby 🐾 — and for Harry, whose Golden started all of this 💛*
