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

## TODO

### - Database Design

- [ ] Design base models and migrations.
    - **Start**: 10/20/2024 10:11
    - **End**: in-progress
- [ ] Establish a morph relationship between relevant entities, such as users and borrowed books.
    - **Start**:
    - **End**:

### - Authentication

- [ ] Implement user authentication with registration and login functionalities.
    - **Start**:
    - **End**:
- [ ] Secure the application by ensuring proper authentication mechanisms.
    - **Start**:
    - **End**:

### - Role & Permission Management

- [ ] Implement RBAC with at least two roles (e.g., admin and regular user).
    - **Start**:
    - **End**:
- [ ] Define permissions for adding, editing, and deleting books.
    - **Start**:
    - **End**:

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
