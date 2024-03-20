# Jobify

Jobify is a job listing and posting platform built with Laravel. It allows employers to post jobs and job seekers to apply for them.

## Features

-   Job listings
-   Job postings
-   User registration and authentication
-   Job application system

## Images

## Installation

1. Clone the repository

```bash
git clone https://github.com/mohammedzaher/jobify.git
```

2. Install PHP dependencies

```bash
composer install
```

1. Install JavaScript dependencies

```bash
npm install
```

4. Copy the example env file and make the required configuration changes in the .env file

```bash
cp .env.example .env
```

5. Generate a new application key

```bash
php artisan key:generate
```

6. Run the database migrations (Set the database connection in .env before migrating)

```
php artisan migrate
```

## Usage

1. Start the server

```bash
php artisan serve
```

2. visit `http://localhost:8000` in your browser
3. Register a new account or log in
4. Start posting jobs

## Under Development

-   application system
