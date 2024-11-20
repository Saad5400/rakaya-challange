## Development

```bash
# Setup
composer install
cp .env.example .env # Update the .env with your database credentials
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
npm install
npm run build

# Run the dev server (it will run both the backend and frontend!)
composer run dev
```

You can now visit the site at [http://localhost:8000](http://localhost:8000)!

You may used these credentials to login:

- Admin: admin@rakaya.sa / Password1234!
- User:  user@rakaya.sa / Password1234!

## Side Notes

- This projects is aimed to showcase my abilities and coding style, thus as little as possible third-party packages are
  used.
- The database tables are simplified and not normalized to keep the project simple.
    - For example, the `books` table should have a relationship with a separate table for `authors`.
- I've implemented a simplified roles and permissions from scratch that is based on my understanding of
  `spatie/laravel-permission` (which I prefer to use in real projects).

## TODO

### - Database Design

- [x] Design base models and migrations.
    - **Start**: 10/20/2024 10:11
    - **End**: 10/20/2024 11:11
    - **Details**:
        - [x] `users`
        - [x] `roles`
        - [x] `permissions`
        - [x] `role_has_permissions`
        - [x] ~~model_has_roles~~ `user_has_roles`
        - [x] `books`
        - [x] Establish a morph relationship between relevant entities, such as users and borrowed books.
        - [x] `borrwables`

### - Authentication

- [ ] Implement user authentication with registration and login functionalities.
    - **Start**:
    - **End**:
- [ ] Secure the application by ensuring proper authentication mechanisms.
    - **Start**:
    - **End**:

### - Role & Permission Management

- [x] Implement RBAC with at least two roles (e.g., admin and regular user).
    - **Start**: 10/20/2024 10:40
    - **End**: 10/20/2024 11:11
- [x] Define permissions for adding, editing, and deleting books.
    - **Start**: 10/20/2024 10:21
    - **End**: 10/20/2024 11:11

### - Blade Components

- [ ] Create at least two distinct reusable Blade components to ensure a modular design.
    - **Start**:
    - **End**:
- [ ] Example: Navigation bar, footer, or book card.
    - **Start**:
    - **End**:

### - Data Table Integration

- [ ] Add a data table to display books with details like title, author, and availability.
    - **Start**:
    - **End**:
- [ ] Implement sorting, searching, and pagination using AJAX.
    - **Start**:
    - **End**:

### - AJAX Functionality

- [ ] Use AJAX for enhancing user experience.
    - **Start**:
    - **End**:
- [ ] Example: Dynamically load book details or update borrow status without page reload.
    - **Start**:
    - **End**:

### - PDF Export

- [ ] Implement functionality to export a list of books or details to PDF.
    - **Start**:
    - **End**:
- [ ] Use a Laravel package like DomPDF or Laravel Snappy for generation.
    - **Start**:
    - **End**:

### - GitHub Repository and Documentation

- [ ] Create a public repository and ensure code is well-documented.
    - **Start**:
    - **End**:
- [ ] Follow Laravel best practices and share the repo with it.rakaya@gmail.com.
    - **Start**:
    - **End**:

Additional tasks:

- [ ] Automated deployment.
- [ ] Custom domain setup.
- [ ] Email notifications.
- [ ] Unit tests.
- [ ] End-to-end tests.
