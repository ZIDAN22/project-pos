# Project POS - Inventory Management System

A Laravel-based inventory management system designed for Point of Sale (POS) operations. This application helps manage assets such as computers, laptops, printers, and other equipment, tracking their locations, status, mutations, procurements, and disposals.

## Features

- **Asset Management**: CRUD operations for inventory items (inventaris) including details like asset code, name, type, brand, model, serial number, specifications, acquisition date, and status.
- **Location Tracking**: Associate assets with specific locations (lokasi).
- **Asset Mutations**: Track asset movements and changes (mutasi_asset).
- **Procurement Management**: Handle asset acquisitions (pengadaan).
- **Disposal Tracking**: Manage asset disposals (disposal_asset).
- **User Management**: Basic user registration and authentication.
- **Dashboard**: Admin dashboard for overview and management.
- **Filtering and Search**: Search and filter assets by name, type, location, and status.
- **Responsive UI**: Built with Blade templates and Bootstrap for a clean, responsive interface.

## Tech Stack

- **Backend**: Laravel 12 (PHP 8.2+)
- **Database**: MySQL (via migrations)
- **Frontend**: Blade templates, Bootstrap, Vite for asset compilation
- **Testing**: Pest PHP
- **Development Tools**: Composer, NPM, Laravel Sail (optional)

## Installation

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and NPM
- MySQL or another supported database

### Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/project-pos.git
   cd project-pos
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js Dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your database credentials and other settings.

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Run Database Migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed the Database (Optional)**
   ```bash
   php artisan db:seed
   ```

8. **Build Assets**
   ```bash
   npm run build
   ```

9. **Start the Development Server**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`.

### Alternative Setup with Laravel Sail (Docker)

If you prefer using Docker:

1. Ensure Docker is installed.
2. Run the setup script:
   ```bash
   ./vendor/bin/sail up
   ```
3. Access the app at `http://localhost`.

## Usage

- **Dashboard**: Visit `/dashboard` to view the admin dashboard.
- **Inventory Management**: 
  - View all assets: `/inventaris`
  - Add new asset: `/inventaris/create`
  - Edit/Delete assets via the index page.
- **Registration**: Register new users at `/Register`.

## Testing

Run the test suite using Pest:

```bash
php artisan test
```

## Contributing

1. Fork the repository.
2. Create a feature branch: `git checkout -b feature/your-feature-name`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin feature/your-feature-name`
5. Submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
