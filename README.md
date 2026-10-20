# PHP & Laravel Development Bootcamp

> A project-driven journey from PHP fundamentals to building complete web applications with Laravel and Blade.

## Overview

This repository documents my journey toward becoming a proficient PHP and Laravel developer.

The goal is not simply to complete tutorials or memorize syntax. It is to develop the knowledge, confidence, and problem-solving skills necessary to independently design, build, test, and maintain applications.

The curriculum begins with PHP fundamentals and progresses through object-oriented programming, web development, databases, Laravel, Blade templates, and application architecture.

Throughout the bootcamp, concepts are reinforced through practical exercises and an evolving book-management application.

## Table of Contents

- [Learning Objectives](#learning-objectives)
- [Technology Stack](#technology-stack)
- [Learning Approach](#learning-approach)
- [Curriculum](#curriculum)
- [Capstone Project](#capstone-project)
- [Repository Structure](#repository-structure)
- [Getting Started](#getting-started)
- [Git Workflow](#git-workflow)
- [Progress](#progress)

## Learning Objectives

By completing this bootcamp, I aim to:

- Develop a strong understanding of PHP syntax, data types, functions, and program flow.
- Understand object-oriented programming and modern PHP development practices.
- Work confidently with Composer and third-party packages.
- Understand HTTP, HTML, CSS, and server-side web development.
- Design and interact with relational databases using SQL.
- Build applications using Laravel's routing, controllers, middleware, and Eloquent ORM.
- Create reusable, maintainable interfaces using Blade templates and components.
- Implement forms, validation, authentication, authorization, and automated testing.
- Debug applications and solve programming problems independently.
- Plan, build, and deploy complete applications from original ideas.

## Technology Stack

| Technology | Purpose |
|---|---|
| PHP 8.5 | Primary programming language |
| Laravel | Web application framework |
| Blade | Server-side templating engine |
| HTML & CSS | User interface structure and styling |
| JavaScript | Progressive client-side interactivity |
| SQLite | Initial relational database |
| Composer | PHP dependency management |
| Node.js & npm | Frontend tooling and dependencies |
| Vite | Frontend asset bundling |
| Visual Studio Code | Development environment |
| Git & GitHub | Version control and repository hosting |

Additional technologies will be introduced when projects require them.

## Learning Approach

This bootcamp follows a practice-first learning philosophy.

### One Concept at a Time

Lessons introduce concepts in manageable increments, with clear explanations and focused examples.

### Active Learning

Each lesson includes exercises, coding challenges, or active-recall questions to reinforce understanding.

### Project-Based Development

Concepts are applied to practical applications rather than remaining isolated theoretical exercises.

### Progressive Complexity

Projects begin with simple implementations and evolve as new programming techniques are introduced.

### Understanding Before Progression

Learning milestones are completed through demonstrated understanding rather than arbitrary deadlines.

## Curriculum

| Phase | Subject |
|---|---|
| 01 | PHP Fundamentals |
| 02 | Intermediate PHP |
| 03 | Object-Oriented PHP |
| 04 | Modern PHP & Composer |
| 05 | Web Development Fundamentals |
| 06 | Databases & SQL |
| 07 | Laravel Fundamentals |
| 08 | Blade Templates & Components |
| 09 | Eloquent ORM & Database Relationships |
| 10 | Building Complete Laravel Applications |
| 11 | Advanced Laravel |
| 12 | Independent Application Development |

For detailed objectives, exercises, and milestones, see [ROADMAP.md](ROADMAP.md).

## Capstone Project

### Book Manager

The primary project is a personal book-management application inspired by ThingsBook.

The application will evolve alongside the curriculum, beginning as a simple PHP program and eventually becoming a complete Laravel application.

Planned capabilities include:

- Personal book library and collections
- Reading status and progress tracking
- Book ratings and reviews
- Reading journals and notes
- Organization through categories and tags
- Search and filtering
- Reading statistics and dashboards
- Responsive interfaces built with Blade

Features will be implemented incrementally as the necessary concepts are learned.

Project source code will live in [`projects/book-manager/`](projects/book-manager/).

## Repository Structure

```text
php-laravel-bootcamp/
├── docs/
├── lessons/
│   └── phase-01-php-fundamentals/
├── projects/
│   └── book-manager/
├── .editorconfig
├── .gitignore
├── README.md
└── ROADMAP.md
```

**Directory responsibilities:**

- `docs/` — Reference materials, learning notes, and project documentation.
- `lessons/` — Exercises organized by curriculum phase.
- `projects/` — Practical applications and progressively developed projects.

Additional directories will be created as the curriculum progresses.

## Getting Started

### Prerequisites

The development environment uses:

- PHP 8.5
- Composer
- Node.js and npm
- Git
- Visual Studio Code

Laravel will be introduced during the appropriate curriculum phase.

### Clone the Repository

```bash
git clone https://github.com/hermit-codes/php-laravel-bootcamp.git
cd php-laravel-bootcamp
```

### Run a PHP Exercise

Once lesson files have been added, navigate to the relevant directory and run a PHP script:

```bash
php example.php
```

Each project may provide additional setup instructions as its dependencies and architecture evolve.

## Git Workflow

This repository follows Conventional Commits.

Examples:

```text
docs: add bootcamp curriculum roadmap
feat: implement book progress tracking
fix: validate book page count
refactor: simplify reading status logic
test: add book validation tests
chore: configure project tooling
```

Completed lessons and milestones are committed to the `main` branch.

Annotated Git tags mark the completion of curriculum phases:

```text
phase-01
phase-02
phase-03
```

Tags are created only after the relevant phase has been completed and reviewed.

## Progress

**Current Phase:** 01 — PHP Fundamentals

**Current Focus:** Development environment, repository setup, and introductory PHP concepts.

Progress will be updated as lessons and project milestones are completed.

---

*Learn the fundamentals. Build useful things. Develop independence.*
