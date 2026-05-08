# Spotify 2.0

A music streaming web application inspired by Spotify — built with PHP and MySQL as a full-stack university project.

## Features

- User registration & session-based authentication (cookies + PHP sessions)
- Personal account (особистий кабінет)
- Music catalog with full CRUD — add, edit, delete tracks
- Dynamic content loading via AJAX (no full page reloads)
- Multi-language support via GTranslate integration
- Bootstrap 4 responsive layout
- Clean URL routing via Apache `.htaccess`

## Tech Stack

| Layer    | Technology            |
|----------|-----------------------|
| Backend  | PHP 7                 |
| Database | MySQL                 |
| Frontend | HTML5, CSS3, Bootstrap 4 |
| AJAX     | jQuery / jQuery UI    |
| Routing  | Apache `.htaccess`    |

## Project Structure

```
├── index.php        # Main catalog page
├── register.php     # User registration
├── log.php          # Login page
├── createmusic.php  # Add new track (CRUD)
├── update.php       # Edit track
├── about.php        # About page
├── ajax.php         # AJAX handlers
├── mediaForm.php    # Media upload form
├── Bd/              # Database schema (MySQL)
├── style.css        # Custom styles
└── .htaccess        # URL routing
```

## Getting Started

1. Clone the repo into your web server root (e.g. `htdocs/` or `www/`)
2. Import the database schema from the `Bd/` folder into MySQL
3. Set your DB credentials in the connection config
4. Open `http://localhost/Spotify2.0` in your browser
5. Register an account and start adding tracks
