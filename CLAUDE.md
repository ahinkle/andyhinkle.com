# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is Andy Hinkle's personal website (andyhinkle.com) built with Laravel 12 and uses Laravel Folio for file-based routing. The site features a blog, speaking engagements, and GitHub contribution tracking.

## Core Architecture

- **Laravel Folio**: Uses file-based routing via `resources/views/pages/` directory. Pages are automatically routed based on file structure.
- **Blade Components**: Custom components in `app/View/Components/` with auto-resolution via `ahinkle/auto-resolvable-blade-components`
- **Content Management**: Speaking content stored as Markdown files in `resources/content/speaking/` with YAML front matter
- **Database**: SQLite database for simple data storage
- **Styling**: TailwindCSS 4.x with Alpine.js for interactivity

## Key Commands

### Development
```bash
# Start development server
npm run dev

# Laravel artisan commands
php artisan serve
```

When developing locally, you should use Laravel Herd at andyhinkle.com.test (and not the `artisan serve` command directly)

### Testing
```bash
# Run PHP tests with Pest
php artisan test
# or
vendor/bin/pest

# Run specific test
vendor/bin/pest tests/Feature/Pages/BlogTest.php
```

### Code Quality
```bash
# Laravel Pint (code formatting)
vendor/bin/pint

# PHPStan (static analysis, level 6)
vendor/bin/phpstan analyse

# Rector (automated refactoring)
vendor/bin/rector

# Prettier (frontend formatting)
npm run format
```

### Frontend Build
```bash
# Build for production
npm run build
```

## Special Features

### GitHub Integration
- `FetchGitHubContributionsCommand` fetches and stores GitHub activity
- `RecentGithubContributions` component displays contribution data

### Speaking Content
- Markdown files with YAML front matter in `resources/content/speaking/`
- Podcast transcripts stored in `transcripts/` subdirectory
- Content accessible via Folio routes like `/speaking/[Speaking:slug]`

### Auto-Resolvable Components
Uses `ahinkle/auto-resolvable-blade-components` package for automatic component resolution without explicit registration.

## File Structure Patterns

### Page Components
- Main pages: `resources/views/pages/`
- Blog posts: `resources/views/pages/blog/`
- Speaking pages: `resources/views/pages/speaking/`

### Blade Components
- Layout components: `app/View/Components/Layout/`
- Feature components: `app/View/Components/`
- Dev tools: `app/View/Components/Dev/`

### Content
- Speaking content: `resources/content/speaking/`
- Static images: `public/images/`

## Testing Approach

- Uses Pest testing framework
- Test files mirror app structure in `tests/Feature/`
- Environment configured for testing in `phpunit.xml`
- Test database uses SQLite in-memory or file-based storage

## Content Management

### Blog Posts
Blog posts are Blade templates in `resources/views/pages/blog/` and are routed automatically by Folio.

### Speaking Content
Speaking content uses:
- Markdown files with YAML front matter
- Transcript files for searchability
- `Speaking` model with `Sushi` for file-based data
