# SMS Leopard Laravel Package

A simple Laravel wrapper for the SMS Leopard API — send SMS messages easily from your Laravel applications.

---
## Installation

## Install via Composer:
```bash
composer require rkmaxwell/smsleopard

php artisan vendor:publish --tag=smsleopard-config

## Add your credentials to your .env:

SMS_LEOPARD_KEY=your_api_key
SMS_LEOPARD_SECRET=your_api_secret
SMS_LEOPARD_SENDER=SMSLEOPARD

## Now use in your project 

use rkmaxwell\smsleopard\Facades\SmsLeopard;

SmsLeopard::send(
    destination: '254712345678',
    message: 'Hello from SMS Leopard!'
);

# ^
## Get in touch
Author: @rkmaxwell

Email: rk@anymobile.co.ke

GitHub: https://github.com/rkmaxwell

Website: https://anymobile.co.ke