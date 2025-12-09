# Game Field Leasing - Project Documentation

## Project Overview

**Project Name:** Game Field Leasing Platform  
**What it does:** A website where users can book and reserve sports fields (football, basketball, tennis courts)  
**Built with:** Laravel 12 (PHP Framework) + Tailwind CSS (for styling)  
**Database:** SQLite

---

## What the Project Does

This is a **sports field booking website**. Users can:
1. Browse available sports fields
2. Select a field and book it for a specific date/time
3. See pricing in Indonesian Rupiah (Rp)
4. View information about the company
5. Contact the company

---

## Project Structure (Folder Organization)

```
gamefield/
├── routes/web.php          ← All website links/pages go here
├── resources/views/        ← HTML pages (Blade templates)
│   ├── layouts/app.blade.php    ← Main template (header, navbar)
│   ├── home.blade.php           ← Home page
│   ├── booking.blade.php        ← Booking form
│   ├── about.blade.php          ← About company
│   ├── contact.blade.php        ← Contact page
│   ├── login.blade.php          ← Login page
│   └── logout.blade.php         ← Logout page
├── resources/css/app.css   ← Styling (Tailwind CSS)
├── public/images/          ← Pictures/photos
├── composer.json           ← PHP dependencies
└── package.json            ← JavaScript dependencies
```

---

## How Routes Work

**File: `routes/web.php`**

```php
<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});
```

**Explanation:**
- `Route::get()` = When user visits a URL, what should happen?
- `/` = Home page
- `/booking` = Booking page
- `/about` = About page
- `/contact` = Contact page
- `function ()` = What code to run
- `return view('home')` = Show the `home.blade.php` file

---

## Pages Explained

### 1. Home Page (`home.blade.php`)
**Purpose:** Show users what the website is about

**Sections:**
- **Hero Section** - Big image with "BOOK YOUR FAVORITE SPORTS PLACE NOW" text
- **About Section** - Company mission statement
- **How It Works** - 4 steps: Find → Choose → Pay → Play
- **Featured Fields** - Shows 3 popular fields (Football, Basketball, Tennis) with photos and prices
- **Testimonials** - Customer reviews with 5-star ratings
- **Call-to-Action** - Button to start booking

**Code Pattern:**
```php
@extends('layouts.app')    ← Use main template
@section('content')        ← Start page content
<!-- HTML content here -->
@endsection               ← End page content
```

### 2. Booking Page (`booking.blade.php`)
**Purpose:** Let users reserve a sports field

**Main Features:**
- **Booking Form** with fields for:
  - Select field (dropdown with 4 options)
  - Date picker
  - Duration (1-8 hours)
  - Start time & end time
  - Name, email, phone
  - Number of players
  - Special requests
  - Checkbox to agree to terms

- **Summary Sidebar** - Shows what you selected:
  - Field name
  - Date
  - Time
  - Total price

- **Available Fields Grid** - Shows 4 fields with pricing:
  - ⚽ Football - Rp 150.000/jam
  - 🏀 Basketball - Rp 100.000/jam
  - 🎾 Tennis - Rp 80.000/jam
  - 🏐 Multipurpose - Rp 120.000/jam

### 3. About Page (`about.blade.php`)
**Purpose:** Tell the story of the company

**Sections:**
- **Company Mission** - Why we exist, what we believe in
- **Why Choose Us** - 4 reasons:
  - ⚡ Quick Booking
  - 💰 Best Prices
  - ✨ Quality Facilities
  - 🤝 24/7 Support

- **Facilities** - Details about each type of field:
  - Football fields (with photo)
  - Basketball courts (with photo)
  - Tennis courts (with photo)

- **Statistics**:
  - 500+ Fields
  - 2000+ Users
  - 15+ Sports Types
  - 98% Satisfaction

- **Team Members**:
  - Christian (CEO)
  - Nicholas (Operations Manager)
  - Marco (Tech Director)

### 4. Contact Page (`contact.blade.php`)
**Purpose:** Help users get in touch

**Features:**
- **Contact Form** with fields:
  - Name
  - Email
  - Phone
  - Subject (dropdown)
  - Message
  - Checkbox for consent

- **Contact Info** (4 cards):
  - Location: 123 Sports Avenue
  - Phone: +1 (555) 123-4567
  - Email: support@gamefield.com
  - Hours: Mon-Fri 9AM-6PM

- **FAQ Section** - 5 common questions with answers that expand when clicked:
  1. How do I make a booking?
  2. What's the cancellation policy?
  3. Do you offer discounts?
  4. Can I host events?
  5. What payment methods do you accept?

### 5. Login Page (`login.blade.php`)
**Purpose:** User sign-in form

**Form Fields:**
- Email input
- Password input
- "Remember me" checkbox
- "Forgot password" link
- "Sign up" link for new users

### 6. Logout Page (`logout.blade.php`)
**Purpose:** Confirm user logged out

**Elements:**
- Goodbye message with emoji
- 3 buttons:
  - Sign In Again
  - Return to Home
  - Browse Fields

---

## Master Layout (`layouts/app.blade.php`)

This is the template that every page uses. It contains:

```php
<!DOCTYPE html>
<html>
<head>
    <title>Game Field Leasing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <h1>🏟️ Game Field Leasing</h1>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/booking">Booking</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')  ← Different for each page
    </main>
</body>
</html>
```

**Why use a master layout?**
- Don't repeat navbar in every page
- Keep consistent design
- Easy to update navigation across all pages

---

## Styling with Tailwind CSS

Tailwind is a CSS framework that uses "utility classes" instead of custom CSS.

**Examples:**
```html
<!-- Red background -->
<div class="bg-red-600">

<!-- White text, large font, bold -->
<h1 class="text-white text-3xl font-bold">

<!-- Flexbox for alignment -->
<div class="flex justify-between items-center">

<!-- Responsive - different on mobile vs desktop -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
```

**Color Scheme:**
- Background: Black (#000000)
- Text: White (#FFFFFF)
- Accent Color: Red (#DC2626)
- Borders: Gray (#374151)

---

## Development Setup

### Before Running:
```bash
cd C:\Users\user\gamefield
composer install          # Install PHP packages
npm install              # Install JavaScript packages
php artisan key:generate # Generate app encryption key
```

### To Run Development Server:
```bash
composer run dev
```
This starts:
- Laravel server at http://localhost:8000
- Vite (CSS/JS compiler)
- Watches for file changes

### To Build for Production:
```bash
npm run build
```
This creates optimized CSS and JavaScript files.

---

## Database

**Current:** SQLite (simple, file-based database)
**File Location:** `database/database.sqlite`

**Tables:**
- `users` - User accounts
- `cache` - For caching
- `jobs` - Background jobs

---

## Pricing

All prices are in **Indonesian Rupiah (Rp)**

| Sport | Price | Duration |
|-------|-------|----------|
| Football | Rp 150.000 | Per Hour |
| Basketball | Rp 100.000 | Per Hour |
| Tennis | Rp 80.000 | Per Hour |
| Multipurpose | Rp 120.000 | Per Hour |

---

## Images Needed

These 4 photos need to be uploaded to `public/images/`:

1. **facility.jpg** - General sports facility (used on home page)
2. **football.jpg** - Football field photo
3. **basketball.jpg** - Basketball court photo
4. **tennis.jpg** - Tennis court photo

Each image: ~1200x800px, JPG format

---

## What's Working ✅

- ✅ All 6 pages display correctly
- ✅ Navigation menu works
- ✅ Responsive design (works on mobile, tablet, desktop)
- ✅ Professional dark theme with red accents
- ✅ Indonesian Rupiah pricing
- ✅ Contact form (HTML only - doesn't send emails yet)
- ✅ Booking form (HTML only - doesn't save to database yet)
- ✅ FAQ with expand/collapse functionality
- ✅ Image placeholders configured

---

## What's NOT Done Yet 🔲

- 🔲 User login/registration (authentication)
- 🔲 Save bookings to database
- 🔲 Payment processing (Stripe, PayPal, etc.)
- 🔲 Send confirmation emails
- 🔲 Admin dashboard
- 🔲 Real-time availability checking
- 🔲 User reviews/ratings

---

## Key Files to Know

| File | Purpose |
|------|---------|
| `routes/web.php` | All website URLs/links |
| `resources/views/layouts/app.blade.php` | Main template (header, navbar) |
| `resources/css/app.css` | Tailwind CSS configuration |
| `composer.json` | PHP packages needed |
| `package.json` | JavaScript packages needed |

---

## Summary for Teacher

### What We Built:
A **professional sports field booking website** with 6 pages using Laravel 12 and Tailwind CSS.

### How It Works:
1. User visits website (e.g., http://localhost:8000/)
2. They can browse different pages (Home, About, Booking, Contact)
3. Clicking links navigates to different pages
4. All pages share the same navbar and design
5. Forms are built but not connected to database yet

### Tech Stack:
- **Backend:** Laravel 12 (PHP)
- **Frontend:** Blade Templates + Tailwind CSS
- **Database:** SQLite
- **Tools:** Composer (PHP), npm (JavaScript), Vite (bundler)

### Next Steps to Complete the Project:
1. Add user authentication (login/registration)
2. Create database tables for bookings
3. Add payment processing
4. Send confirmation emails
5. Create admin panel

---

**Created:** December 1, 2025  
**Status:** Frontend Complete, Ready for Backend Integration