# Vizag Florist (Core PHP Multi-Vendor eCommerce)

Production-oriented gifting marketplace inspired by FNP with MVC-like Core PHP architecture.

## Features
- Sticky FNP-style header with search/cart/profile placeholders
- Dynamic home sections: hero, featured, bestsellers
- Product details with add-ons and live price update
- Cart/checkout foundation with Razorpay endpoints
- Transaction-safe order creation model (`orders`, `order_items`, `order_item_addons`)
- Multi-vendor schema, admin/vendor panel placeholders
- CMS, banners, coupons, delivery slots, payouts schema

## Tech
- PHP 8.1+, Core PHP MVC-like structure
- MySQL 8+
- Bootstrap 5 + Vanilla JS
- Razorpay PHP SDK

## Setup
1. `cp .env.example .env`
2. Update DB and Razorpay keys.
3. `composer install`
4. Import DB: `mysql -u root -p < database/sql/vizag_florist.sql`
5. Run app: `php -S localhost:8000 -t public`
6. Open `http://localhost:8000`

## Project Structure
- `app/Controllers` request handlers
- `app/Models` PDO data layer
- `app/Views` Bootstrap templates
- `public/` entry point and assets
- `routes/web.php` route registry
- `database/sql/vizag_florist.sql` full schema
- `admin_panel/` and `vendor_panel/` entry placeholders

## Security Practices Included
- PDO prepared statements
- Server-side transaction for order save flow
- Escaped output in templates
- Session initialization from config

## Next Production Steps
- Implement full auth (customer/vendor/admin guards)
- Build CRUD screens for admin/vendor modules
- Wire real cart persistence and coupon logic
- Complete Razorpay order creation + signature verification
- Add server-side validation library and CSRF tokens
- Add logs/queue/email/SMS/observability + test suite
