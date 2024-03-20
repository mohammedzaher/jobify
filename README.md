# Jobify

Jobify is a job listing and posting platform built with Laravel. It allows employers to post jobs and job seekers to apply for them.

## Features

-   Job listings
-   Job postings
-   User registration and authentication
-   Job application system

<details markdown='1'><summary>Images</summary>

![image](https://github.com/mohammedzaher/jobify/assets/66143194/ed024a5c-74da-4ff6-9838-b96dd3f227ad)
![image](https://github.com/mohammedzaher/jobify/assets/66143194/56ca18e3-a7a4-4f0f-8755-c69364cba56d)
![image](https://github.com/mohammedzaher/jobify/assets/66143194/86742836-cae2-473f-835a-65345b208a7d)
![image](https://github.com/mohammedzaher/jobify/assets/66143194/d2e41e7e-d332-41dc-b1d1-8ce6053abd57)
![image](https://github.com/mohammedzaher/jobify/assets/66143194/de1427eb-a00c-4716-8747-46dfdade5d5c)
![image](https://github.com/mohammedzaher/jobify/assets/66143194/4fc32158-502d-487f-bf86-ee1751336f5c)
![image](https://github.com/mohammedzaher/jobify/assets/66143194/3f550a01-5548-407f-92a5-95882af98109)
![image](https://github.com/mohammedzaher/jobify/assets/66143194/8ed713cd-a916-465b-9fbf-9dbd5282c266)

 </details>

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

```bash
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
