# Marketing Agency Blog Website

A comprehensive Laravel-based blog platform with integrated marketing, SEO booking, career management, and consultation services. This full-stack application provides both frontend user experience and backend admin functionality.

## Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [API Endpoints](#api-endpoints)
- [Database](#database)
- [Contributing](#contributing)

## Features

### Blog Management

- **Create, Read, Update, Delete** blog posts with rich HTML content
- **Image upload** support in blog posts
- **Recent posts** feature showing latest 10 blog articles
- **Blog listing** with thumbnail extraction from content

### Services & Bookings

- **SEO Booking** - Clients can book SEO services
- **Service Booking** - General service booking system
- **Free Consultation** - Free consultation request management
- **Career Management** - Career bookings and applications

### User Management

- **Authentication & Authorization** using JWT tokens
- **User profiles** with customizable information
- **Email notifications** via OTP Mail system
- **Role-based access control** using middleware

### Additional Features

- **Contact Management** - Contact form submissions
- **Dashboard** - Admin control panel
- **About & Home Pages** - Static content pages
- **Public API** - RESTful endpoints for frontend integration

## Tech Stack

- **Backend Framework**: [Laravel 10.10](https://laravel.com)
- **Language**: PHP 8.1+
- **Database**: MySQL/PostgreSQL (configurable)
- **Authentication**: JWT (Firebase PHP-JWT)
- **Frontend Build**: Vite
- **Frontend Library**: Vue.js/JavaScript
- **Charts**: Chart.js
- **API Client**: Axios
- **Testing**: PHPUnit, Mockery
- **Code Quality**: Laravel Pint

## Requirements

- PHP 8.1 or higher
- Composer
- Node.js & npm
- MySQL or PostgreSQL database
- Git

## Installation

1. **Clone the repository**

    ```bash
    git clone <repository-url>
    cd MarketingAgency
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Install Node dependencies**

    ```bash
    npm install
    ```

4. **Copy environment file**

    ```bash
    cp .env.example .env
    ```

5. **Generate application key**

    ```bash
    php artisan key:generate
    ```

6. **Run database migrations**

    ```bash
    php artisan migrate
    ```

7. **Build frontend assets**
    ```bash
    npm run build
    ```

## Configuration

### Environment Variables

Edit `.env` file and configure:

```env
APP_NAME="Marketing Agency"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=marketing_agency
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-password
MAIL_FROM_ADDRESS=noreply@example.com

JWT_SECRET=your-jwt-secret-key
```

### Database Connection

Configure your database in `.env`. The project supports MySQL and PostgreSQL. Update `DB_CONNECTION` accordingly.

## Usage

### Development Server

Start the Laravel development server:

```bash
php artisan serve
```

Start Vite for frontend asset compilation:

```bash
npm run dev
```

### Building for Production

Build frontend assets:

```bash
npm run build
```

### Running Tests

```bash
php artisan test
```

## Project Structure

```
app/
├── Console/          # Artisan console commands
├── Exceptions/       # Exception handlers
├── Helper/           # Helper classes (JWT, Response, Payment)
├── Http/
│   ├── Controllers/  # Route controllers
│   ├── Kernel.php    # HTTP middleware
│   └── Middleware/   # Custom middleware
├── Mail/             # Mailable classes
├── Models/           # Eloquent models
└── Providers/        # Service providers

routes/
├── web.php           # Web routes
├── api.php           # API routes
└── channels.php      # Broadcast channels

database/
├── migrations/       # Database migrations
└── seeders/          # Database seeders

resources/
├── views/            # Blade templates
├── css/              # Stylesheets
└── js/               # JavaScript files

public/              # Web accessible files
config/              # Application configuration
```

## API Endpoints

### Blog Endpoints

| Method | Endpoint                 | Description              |
| ------ | ------------------------ | ------------------------ |
| GET    | `/api/blog/{id}`         | Get single blog post     |
| GET    | `/api/blog-recent`       | Get 10 most recent blogs |
| GET    | `/blogList`              | List all blogs           |
| POST   | `/admin/blog/store`      | Create new blog          |
| GET    | `/admin/blog/create`     | Blog creation form       |
| PUT    | `/admin/blogs/{id}`      | Update blog post         |
| DELETE | `/admin/blogs/{id}`      | Delete blog post         |
| POST   | `/api/blog-upload-image` | Upload blog image        |

### Other Key Endpoints

| Endpoint       | Purpose                     |
| -------------- | --------------------------- |
| `/`            | Home page                   |
| `/blog/{id}`   | View blog post              |
| `/blog`        | Blog listing page           |
| `/consultancy` | Consultancy page            |
| `/admin/blogs` | Blog management admin panel |
| `/login`       | User login page             |
| `/verify`      | OTP verification page       |

## Database

### Key Models

- **User** - User accounts with authentication
- **Blog** - Blog posts with title and HTML content
- **ServiceBooking** - Service booking records
- **SEOBooking** - SEO service bookings
- **FreeConsultancy** - Free consultation requests
- **Services** - Available services

### Migrations

All database migrations are located in `database/migrations/`. Run migrations with:

```bash
php artisan migrate
```

## Response Helper

The application includes a custom `ResponseHelper` class for consistent API responses. Use it to return standardized JSON responses with status codes and messages.

## Payment Integration

SSLCommerz payment gateway is integrated for handling payments. Configure your SSLCommerz credentials in `.env`:

```env
SSLCOMMERZ_API_KEY=your-api-key
SSLCOMMERZ_STORE_ID=your-store-id
```

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/your-feature`)
3. Commit your changes (`git commit -m 'Add your feature'`)
4. Push to the branch (`git push origin feature/your-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
