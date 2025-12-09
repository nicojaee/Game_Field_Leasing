# Copilot Instructions for Game Field Leasing

This is a **Laravel 12 application** for sports field booking/leasing platform using Tailwind CSS and Vite.

## Architecture Overview

**Tech Stack:**
- Backend: Laravel 12 (PHP 8.2+), Eloquent ORM
- Frontend: Blade templates, Tailwind CSS 4 with Vite, minimal JavaScript
- Database: SQLite for development (configurable)
- Testing: PHPUnit with Unit/Feature test structure

**Key Pattern:** This is a traditional **server-rendered Laravel application**. Routes directly return Blade views. No API layer or REST endpoints currently exist. All pages use the layouts/app.blade.php master template.

**Directory Structure:**
- pp/Models/ - Eloquent models (currently: User.php)
- pp/Http/Controllers/ - Controller classes (empty; routes use closures)
- 
esources/views/ - Blade templates with Tailwind styling
- 
esources/css/ & 
esources/js/ - Frontend assets compiled by Vite
- database/migrations/ - Schema definitions (users, cache, jobs tables)
- database/seeders/ - Data fixtures
- 
outes/web.php - Web routes (all current routes defined here)

## Critical Developer Workflows

### Local Development Setup
`bash
composer install           # Install PHP dependencies
npm install              # Install Node dependencies
php artisan key:generate # Generate APP_KEY
php artisan migrate      # Run migrations
`

### Running the Development Environment
`bash
composer run dev         # Starts concurrent: Laravel server, queue listener, logs, Vite
`
This command runs via concurrently - multiple processes together. Useful for testing real-time logs and background jobs.

### Running Tests
`bash
composer run test        # Clears config cache, runs PHPUnit
`
Tests use in-memory SQLite (DB_DATABASE = :memory: in phpunit.xml). Feature tests should test HTTP responses; Unit tests test business logic.

### Building for Production
`bash
npm run build            # Vite compiles CSS/JS to public/
`

## Project-Specific Patterns

### Routing Convention
All routes currently use **closure-based routes** in 
outes/web.php:
`php
Route::get('/booking', function () {
    return view('booking');
});
`
**When adding new routes:** Continue this pattern OR migrate to controller-based routing if controllers grow. Use resource routes for CRUD operations.

### View Structure
- Master layout: 
esources/views/layouts/app.blade.php (navbar, structure)
- Page views: 
esources/views/{page}.blade.php - extend the layout with @extends('layouts.app') and @section('content')
- Tailwind v4 is configured via @theme block in pp.css - customize design tokens there
- Images referenced via sset('images/...') - files in public/images/

### Blade Template Patterns
`php
@extends('layouts.app')
@section('content')
  <!-- Page content here -->
  {{ asset('images/foto.jpg') }}  <!-- Asset helper -->
@endsection
`

### Styling Approach
- **Tailwind CSS 4** with @tailwindcss/vite plugin
- Semantic HTML with utility classes (no custom CSS components currently)
- Dark theme: g-black text-white is site default
- Accent color: Red (	ext-red-500, g-red-600) for CTAs

### Asset Pipeline
Vite entry points: 
esources/css/app.css, 
esources/js/app.js
- @vite() directive in layout loads compiled assets
- CSS imports Tailwind and scans views/JS for class discovery
- JS imports bootstrap (Axios, etc.) but app-specific code is minimal

### Database & Models
Currently: User model with factory. Schema uses timestamps and soft deletes (configured in migrations).
**Pattern:** Use Eloquent mutators in models for data transformation. Factories in database/factories/ for testing data.

## External Dependencies & Integration Points

- **Laravel Sail:** Docker option (configured in composer.json) for isolated dev environment
- **Laravel Pail:** Real-time log streaming (included in dev dependencies)
- **Faker:** Test data generation for factories
- **Mockery:** Mocking library for unit tests
- **Pint:** PHP code formatter (can run ./vendor/bin/pint)
- **Axios:** Included in npm but not actively used (ready for AJAX)

## Testing Patterns

**Feature Tests** (HTTP level):
`php
public function test_the_application_returns_a_successful_response(): void {
    \ = \->get('/');
    \->assertStatus(200);
}
`
Located in 	ests/Feature/. Useful for testing routes, redirects, view content.

**Unit Tests** (business logic):
Located in 	ests/Unit/. Test models, services, helpers in isolation.

**Running:** composer run test runs both suites. PHPUnit config in phpunit.xml handles environment setup (in-memory DB, test env variables).

## Common Tasks & Commands

| Task | Command |
|------|---------|
| Start dev server + assets + logs | composer run dev |
| Run tests | composer run test |
| Build frontend assets | 
pm run build |
| Create migration | php artisan make:migration create_table_name |
| Create model + factory | php artisan make:model FieldSlot -f |
| Create controller | php artisan make:controller FieldController |
| Format code | ./vendor/bin/pint |
| Access Laravel REPL | php artisan tinker |

## Key Files to Understand

- 
outes/web.php - All HTTP entry points
- 
esources/views/layouts/app.blade.php - Site navigation, meta tags, asset loading
- ite.config.js - Asset build configuration
- composer.json - PHP scripts and dependencies
- package.json - Node scripts and CSS/JS build tools
- config/app.php - App name, timezone, locale settings

---

**Last Updated:** December 2025 | **Framework:** Laravel 12 | **Node:** ESM modules
