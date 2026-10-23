# PHP & Symfony Development Bootcamp

> A structured, project-driven journey from PHP fundamentals to building modern web applications with Symfony, Twig, and Doctrine.

## Overview

This repository documents my journey toward becoming an independent PHP and Symfony developer.

The objective is not simply to finish tutorials, memorize syntax, or reproduce applications built by other developers. It is to develop the knowledge, problem-solving skills, and practical experience necessary to design, build, debug, test, and maintain my own applications.

The curriculum begins with PHP fundamentals and progresses through object-oriented programming, web development, SQL, Symfony, Twig, Doctrine ORM, application security, testing, and software architecture.

Throughout the bootcamp, concepts are reinforced through practical exercises, independent challenges, and an evolving personal Book Manager application.

**Learning is measured by demonstrated understanding, not deadlines or the number of lessons completed.**

## Table of Contents

- [Learning Objectives](#learning-objectives)
- [Technology Stack](#technology-stack)
- [Learning Philosophy](#learning-philosophy)
- [Curriculum](#curriculum)
- [Capstone Project](#capstone-project)
- [Repository Structure](#repository-structure)
- [Getting Started](#getting-started)
- [Development Workflow](#development-workflow)
- [GitHub Project Management](#github-project-management)
- [Learning Resources](#learning-resources)
- [Current Progress](#current-progress)

## Learning Objectives

By completing this bootcamp, I aim to:

- Understand PHP fundamentals, including variables, types, control flow, arrays, and functions.
- Write readable, maintainable PHP using object-oriented programming principles.
- Work confidently with Composer, namespaces, autoloading, and modern PHP conventions.
- Understand HTTP, web servers, PHP-FPM, HTML, CSS, and server-side rendering.
- Design relational databases and write SQL queries independently.
- Build applications using Symfony's routing, controllers, services, and dependency injection.
- Create reusable, accessible interfaces using Twig templates.
- Persist application data using Doctrine ORM and database migrations.
- Implement validation, authentication, authorization, and secure application practices.
- Write automated tests and investigate problems using debugging tools.
- Use Git, GitHub Issues, branches, and pull requests to manage development.
- Plan, build, document, and deploy applications based on original ideas.

The long-term goal is to become comfortable solving unfamiliar programming problems without depending on step-by-step tutorials.

## Technology Stack

The bootcamp uses the following technologies as they become relevant to the curriculum.

| Technology | Purpose |
|---|---|
| PHP 8.5 | Primary programming language |
| Symfony 7.4 LTS | Web application framework |
| Twig | Server-side templating |
| Doctrine ORM | Object-relational mapping |
| MySQL 8.4 | Relational database |
| SQLite | Optional lightweight database for exercises |
| Nginx | Local web server |
| PHP-FPM | PHP application execution |
| Composer | PHP dependency management |
| HTML & CSS | Application structure and presentation |
| JavaScript | Progressive frontend interactivity |
| Node.js & npm | Frontend development tooling |
| Visual Studio Code | Development environment |
| Xdebug | Interactive PHP debugging |
| Git & GitHub | Version control and project management |
| Ubuntu 26.04 LTS | Primary development operating system |

Symfony and its related packages will be introduced during the appropriate curriculum phases.

The goal is to understand each technology's purpose before introducing additional complexity.

## Learning Philosophy

The bootcamp follows a practice-first approach built around five principles.

### 1. Fundamentals Before Frameworks

Understand PHP, HTTP, and SQL before relying on Symfony abstractions.

### 2. One Concept at a Time

Lessons introduce manageable concepts through explanations, small examples, and focused practice.

### 3. Active Recall

Predict program behavior, explain code, and answer questions without immediately consulting solutions.

### 4. Learn Through Projects

Apply concepts to practical exercises and progressively more sophisticated applications.

### 5. Demonstrate Understanding

Complete independent challenges, review code, and verify functionality before advancing.

Each lesson generally follows this learning cycle:

**Learn → Practice → Recall → Apply → Review**

There are no arbitrary completion deadlines.

## Curriculum

The curriculum consists of twelve progressive phases.

| Phase | Subject |
|---|---|
| 01 | PHP Fundamentals |
| 02 | Intermediate PHP |
| 03 | Object-Oriented PHP |
| 04 | Modern PHP & Composer |
| 05 | Web Development Fundamentals |
| 06 | Databases & SQL |
| 07 | Symfony Fundamentals |
| 08 | Twig Templates & Components |
| 09 | Doctrine ORM & Database Relationships |
| 10 | Building Complete Symfony Applications |
| 11 | Advanced Symfony |
| 12 | Independent Application Development |

Each phase includes learning objectives, practical exercises, and a project milestone.

See [ROADMAP.md](ROADMAP.md) for the complete curriculum and current lesson progress.

## Capstone Project

### Book Manager

The primary application developed throughout the bootcamp is a personal Book Manager inspired by ThingsBook.

It will evolve from a small PHP console program into a complete Symfony web application.

Planned functionality includes:

- Managing a personal book library
- Tracking reading status and progress
- Organizing books by authors, genres, and custom shelves
- Writing reviews and assigning ratings
- Maintaining reading journals and notes
- Searching and filtering book collections
- Viewing reading statistics
- Managing user accounts and preferences
- Exporting and backing up application data

The application will be developed incrementally.

Early versions will focus on PHP fundamentals. Later versions will introduce persistent storage, object-oriented design, HTTP, Symfony, Twig, and Doctrine.

The project will live in [`projects/book-manager/`](projects/book-manager/).

Features are planned learning objectives and will be implemented as the necessary skills are developed.

## Repository Structure

```text
php-symfony-bootcamp/
├── docs/
├── lessons/
│   └── phase-01-php-fundamentals/
├── projects/
│   └── book-manager/
├── .editorconfig
├── .gitattributes
├── .gitignore
├── README.md
└── ROADMAP.md
```

Directory responsibilities:

- **`docs/`** — Learning references, development documentation, and project specifications.
- **`lessons/`** — PHP and Symfony lessons organized by curriculum phase.
- **`projects/`** — Practical applications, including the evolving Book Manager.

Additional directories will be introduced when they serve a practical purpose.

## Getting Started

### Development Environment

The primary workstation runs Ubuntu 26.04 LTS with a local LEMP stack.

The environment includes PHP 8.5, Nginx, MySQL, PHP-FPM, Composer, Node.js, Git, GitHub CLI, VS Code, and Xdebug.

Symfony CLI and other framework-specific tools are introduced separately as part of the development environment setup.

### Clone the Repository

Using Git over SSH:

```bash
mkdir -p ~/Projects

cd ~/Projects

git clone git@github.com:hermit-codes/php-symfony-bootcamp.git

cd php-symfony-bootcamp
```

GitHub SSH authentication must be configured before cloning with this method.

### Run a PHP Lesson

From the repository root:

```bash
php lessons/phase-01-php-fundamentals/05-match.php
```

Individual lessons may include additional instructions.

### Debug PHP with Xdebug

The development environment supports debugging PHP scripts through VS Code.

With the PHP Debug extension configured and its listener running:

```bash
XDEBUG_TRIGGER=1 php lessons/phase-01-php-fundamentals/05-match.php
```

VS Code can stop at breakpoints and display the current variables.

## Development Workflow

Development follows a lightweight, issue-driven workflow.

1. Identify a meaningful task or learning objective.
2. Create or select a GitHub issue when appropriate.
3. Create a focused working branch from `main`.
4. Implement and verify the changes.
5. Commit using Conventional Commits.
6. Open a pull request for significant changes.
7. Review and merge the changes into `main`.

### Branch Naming

Examples:

```text
docs/symfony-transition
chore/setup-symfony-cli
feat/book-library
fix/reading-progress-validation
```

Short-lived branches are preferred over maintaining unnecessary long-running development branches.

### Conventional Commits

Examples:

```text
docs: update Symfony learning roadmap
feat: complete PHP loops lesson
feat: add book collection management
fix: correct reading progress calculation
test: add book validation tests
refactor: simplify book status handling
chore: configure development tooling
```

### Phase Milestones

Completed curriculum phases receive annotated Git tags.

Examples:

```text
phase-01
phase-02
phase-03
```

Tags are created only after the relevant phase has been completed and reviewed.

## GitHub Project Management

GitHub Issues track meaningful development work, curriculum improvements, and project features.

Milestones group related work into learning phases or project objectives.

Labels identify the type and area of work.

The repository uses the following conventions:

| Label category | Purpose |
|---|---|
| `type:*` | Identifies the kind of work |
| `area:*` | Identifies the affected part of the project |

Examples include `type:lesson`, `type:feature`, `type:docs`, `area:curriculum`, and `area:book-manager`.

`ROADMAP.md` remains the primary record of lesson progress.

Not every exercise requires a GitHub issue or pull request.

The workflow should support learning and development rather than create unnecessary administrative work.

## Learning Resources

The bootcamp prioritizes free, authoritative learning resources.

Primary references include:

- [PHP Manual](https://www.php.net/manual/en/)
- [Symfony Documentation](https://symfony.com/doc/current/index.html)
- [Symfony 7.4 Documentation](https://symfony.com/doc/7.4/index.html)
- [Twig Documentation](https://twig.symfony.com/doc/)
- [Doctrine ORM Documentation](https://www.doctrine-project.org/projects/doctrine-orm/en/current/index.html)
- [MySQL 8.4 Reference Manual](https://dev.mysql.com/doc/refman/8.4/en/)
- [Composer Documentation](https://getcomposer.org/doc/)
- [Git Documentation](https://git-scm.com/doc)

Additional free tutorials, videos, and practice resources will be added as they become relevant.

Paid courses are not required.

## Current Progress

**Current phase:** 01 — PHP Fundamentals

**Completed lessons:** 01.01–01.05

**Next lesson:** 01.06 — Loops & Iteration

**Current development work:** Transitioning the repository, curriculum, and development tooling from Laravel to Symfony.

Completed lessons and existing Git history are preserved throughout the transition.

Progress is tracked in [ROADMAP.md](ROADMAP.md).

---

*Learn the fundamentals. Build useful things. Develop independence.*
