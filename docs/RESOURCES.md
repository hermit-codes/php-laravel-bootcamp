# PHP & Symfony Bootcamp — Learning Resources

> A curated collection of free learning resources supporting the PHP & Symfony Development Bootcamp.

## Purpose

This document provides reliable, freely accessible resources for learning modern PHP, Symfony, Twig, Doctrine, MySQL, testing, and professional development practices.

Resources are organized according to the twelve phases described in [ROADMAP.md](../ROADMAP.md).

The bootcamp roadmap remains the primary curriculum. These resources provide additional explanations, examples, technical references, and opportunities for practice.

**Paid courses are not required to complete this bootcamp.**

## How to Use This Guide

Learning should follow a manageable process:

1. Begin with the current lesson in `ROADMAP.md`.
2. Read the recommended documentation for that concept.
3. Practice by writing and executing code.
4. Complete the active-recall question or coding challenge.
5. Apply the concept to the Book Manager when appropriate.
6. Review the result before advancing.

Do not attempt to read every resource at once.

**Use the resources relevant to the concept currently being studied.**

---

## Phase 01 — PHP Fundamentals

**Goal:** Understand PHP syntax, variables, control flow, arrays, and functions.

### Primary Resources

**PHP Manual**

- [PHP Language Reference](https://www.php.net/manual/en/langref.php)
- [PHP Types](https://www.php.net/manual/en/language.types.php)
- [PHP Variables](https://www.php.net/manual/en/language.variables.php)
- [PHP Operators](https://www.php.net/manual/en/language.operators.php)
- [PHP Control Structures](https://www.php.net/manual/en/language.control-structures.php)
- [PHP Functions](https://www.php.net/manual/en/language.functions.php)
- [PHP Arrays](https://www.php.net/manual/en/language.types.array.php)

### Practice

Use these resources while completing exercises involving:

- Variables and output
- Data types and conversions
- Operators and expressions
- Conditional statements
- Match expressions
- Loops
- Arrays
- Functions
- Input validation

### Project Application

**Book Manager v0.1 — Console Prototype**

Create a PHP program that displays a collection of books, tracks reading status, and calculates reading progress.

### Learning Check

Can I write a small PHP program using variables, conditionals, loops, arrays, and functions without copying a complete solution?

---

## Phase 02 — Intermediate PHP

**Goal:** Work with files, exceptions, dates, application state, and structured data.

### Primary Resources

- [PHP Error Handling](https://www.php.net/manual/en/language.exceptions.php)
- [PHP Filesystem Functions](https://www.php.net/manual/en/ref.filesystem.php)
- [PHP JSON Functions](https://www.php.net/manual/en/ref.json.php)
- [PHP Date and Time](https://www.php.net/manual/en/book.datetime.php)
- [PHP Superglobals](https://www.php.net/manual/en/language.variables.superglobals.php)
- [PHP Sessions](https://www.php.net/manual/en/book.session.php)
- [PHP Security](https://www.php.net/manual/en/security.php)

### Practice

Study how PHP applications:

- Read and write files
- Handle errors
- Encode and decode JSON
- Work with dates
- Process user input
- Manage sessions
- Organize code into multiple files

### Project Application

**Book Manager v0.2 — Persistent Data**

Save and restore a book collection using JSON files.

### Learning Check

Can I save structured information, retrieve it later, and handle invalid or missing data safely?

---

## Phase 03 — Object-Oriented PHP

**Goal:** Understand classes, objects, interfaces, inheritance, and encapsulation.

### Primary Resources

- [PHP Classes and Objects](https://www.php.net/manual/en/language.oop5.php)
- [PHP Properties](https://www.php.net/manual/en/language.oop5.properties.php)
- [PHP Constructors](https://www.php.net/manual/en/language.oop5.decon.php)
- [PHP Visibility](https://www.php.net/manual/en/language.oop5.visibility.php)
- [PHP Interfaces](https://www.php.net/manual/en/language.oop5.interfaces.php)
- [PHP Abstract Classes](https://www.php.net/manual/en/language.oop5.abstract.php)
- [PHP Traits](https://www.php.net/manual/en/language.oop5.traits.php)
- [PHP Namespaces](https://www.php.net/manual/en/language.namespaces.php)

### Practice

Develop small examples using:

- Classes and objects
- Properties and methods
- Constructors
- Visibility
- Type declarations
- Interfaces
- Inheritance
- Abstract classes
- Traits
- Namespaces

### Project Application

**Book Manager v0.3 — Object-Oriented Refactor**

Organize the application using appropriate classes such as `Book`, `Author`, and `Library`.

### Learning Check

Can I explain when creating a class makes code easier to maintain—and when a simple function would be sufficient?

---

## Phase 04 — Modern PHP & Composer

**Goal:** Learn modern dependency management, autoloading, testing, debugging, and project organization.

### Primary Resources

- [Composer Documentation](https://getcomposer.org/doc/)
- [Composer Introduction](https://getcomposer.org/doc/00-intro.md)
- [Composer Schemas](https://getcomposer.org/doc/04-schema.md)
- [PHP-FIG Standards](https://www.php-fig.org/psr/)
- [PSR-4 Autoloading](https://www.php-fig.org/psr/psr-4/)
- [PHPUnit Documentation](https://docs.phpunit.de/)
- [Xdebug Documentation](https://xdebug.org/docs/)
- [PHP Attributes](https://www.php.net/manual/en/language.attributes.php)

### Practice

Learn how to:

- Manage dependencies with Composer
- Understand `composer.json` and `composer.lock`
- Organize PHP namespaces
- Configure autoloading
- Write unit tests
- Debug PHP with Xdebug
- Follow common PHP coding conventions

### Project Application

**Book Manager v0.4 — Structured PHP Application**

Introduce Composer autoloading, namespaces, unit tests, and improved application structure.

### Learning Check

Can I create a small Composer-managed project, organize its classes, and write a test for one important behavior?

---

## Phase 05 — Web Development Fundamentals

**Goal:** Understand HTTP, HTML, CSS, browser requests, and server-side PHP applications.

### Primary Resources

**Mozilla Developer Network**

- [How the Web Works](https://developer.mozilla.org/en-US/docs/Learn_web_development/Getting_started/Web_standards/How_the_web_works)
- [HTTP Overview](https://developer.mozilla.org/en-US/docs/Web/HTTP/Guides/Overview)
- [HTML Documentation](https://developer.mozilla.org/en-US/docs/Web/HTML)
- [CSS Documentation](https://developer.mozilla.org/en-US/docs/Web/CSS)
- [HTML Forms](https://developer.mozilla.org/en-US/docs/Learn_web_development/Extensions/Forms)

**PHP**

- [PHP Forms](https://www.php.net/manual/en/tutorial.forms.php)
- [PHP Sessions](https://www.php.net/manual/en/book.session.php)
- [PHP htmlspecialchars](https://www.php.net/manual/en/function.htmlspecialchars.php)

**Web Server**

- [Nginx Documentation](https://nginx.org/en/docs/)
- [PHP-FPM Documentation](https://www.php.net/manual/en/install.fpm.php)

### Practice

Learn to:

- Understand requests and responses
- Create HTML forms
- Process GET and POST requests
- Display dynamic PHP pages
- Validate and escape user input
- Understand cookies and sessions
- Create basic responsive layouts

### Project Application

**Book Manager v0.5 — Web Interface**

Build a browser-based interface for viewing books and submitting information.

### Learning Check

Can I explain how a request travels from Firefox through Nginx and PHP-FPM to a PHP application?

---

## Phase 06 — Databases & SQL

**Goal:** Understand relational databases and interact with them directly using SQL and PDO.

### Primary Resources

- [MySQL 8.4 Reference Manual](https://dev.mysql.com/doc/refman/8.4/en/)
- [MySQL Tutorial](https://dev.mysql.com/doc/refman/8.4/en/tutorial.html)
- [MySQL SELECT Statement](https://dev.mysql.com/doc/refman/8.4/en/select.html)
- [MySQL JOIN Clause](https://dev.mysql.com/doc/refman/8.4/en/join.html)
- [MySQL Transactions](https://dev.mysql.com/doc/refman/8.4/en/commit.html)
- [PHP PDO](https://www.php.net/manual/en/book.pdo.php)
- [PDO Prepared Statements](https://www.php.net/manual/en/pdo.prepared-statements.php)

### Optional Practice

- [SQLBolt](https://sqlbolt.com/)
- [SQLZoo](https://sqlzoo.net/)

These interactive resources can supplement our MySQL lessons. Their exercises may use different SQL implementations, so verify syntax against MySQL documentation when necessary.

### Practice

Learn how to:

- Design tables
- Choose appropriate data types
- Create primary and foreign keys
- Write SQL queries
- Insert, update, and delete records
- Join related tables
- Use transactions
- Connect PHP to MySQL using PDO
- Prevent SQL injection using prepared statements

### Project Application

**Book Manager v0.6 — Database-Powered Application**

Replace file-based storage with MySQL.

### Learning Check

Can I design a small relational database and retrieve related information using SQL without depending on an ORM?

---

## Phase 07 — Symfony Fundamentals

**Goal:** Understand Symfony's project structure, routing, controllers, services, configuration, and dependency injection.

**Target framework:** Symfony 7.4 LTS.

### Primary Resources

- [Symfony 7.4 Documentation](https://symfony.com/doc/7.4/index.html)
- [Installing Symfony](https://symfony.com/doc/7.4/setup.html)
- [Symfony Getting Started](https://symfony.com/doc/7.4/getting_started/index.html)
- [Symfony Routing](https://symfony.com/doc/7.4/routing.html)
- [Symfony Controllers](https://symfony.com/doc/7.4/controller.html)
- [Symfony Service Container](https://symfony.com/doc/7.4/service_container.html)
- [Symfony Configuration](https://symfony.com/doc/7.4/configuration.html)
- [Symfony Console](https://symfony.com/doc/7.4/console.html)

### Free Video Resource

- [SymfonyCasts — Symfony Learning Track](https://symfonycasts.com/tracks/symfony)

The SymfonyCasts track includes free foundational video lessons. Check access conditions for individual courses; not every course is necessarily free.

### Practice

Learn how to:

- Create a Symfony application
- Understand the project directory structure
- Configure routes
- Create controllers
- Handle requests and responses
- Use Symfony Console
- Register and use services
- Understand dependency injection
- Configure environments

### Project Application

**Book Manager v0.7 — Symfony Foundation**

Introduce Symfony and rebuild the application's web functionality using its framework conventions.

### Learning Check

Can I explain what a route, controller, and service do—and how Symfony connects them?

---

## Phase 08 — Twig Templates & Components

**Goal:** Create maintainable server-rendered interfaces using Twig.

### Primary Resources

- [Twig Documentation](https://twig.symfony.com/doc/)
- [Twig for Template Designers](https://twig.symfony.com/doc/3.x/templates.html)
- [Twig Template Inheritance](https://twig.symfony.com/doc/3.x/tags/extends.html)
- [Symfony Templates](https://symfony.com/doc/7.4/templates.html)
- [Symfony Forms](https://symfony.com/doc/7.4/forms.html)
- [Symfony UX](https://ux.symfony.com/)

### Practice

Learn how to:

- Display data with Twig
- Use template variables
- Create conditions and loops
- Build reusable layouts
- Use template inheritance
- Include reusable template fragments
- Render forms
- Display validation errors
- Organize styles and frontend assets

### Project Application

**Book Manager v0.8 — Twig Interface**

Create reusable layouts, book cards, navigation, and reading progress displays.

### Learning Check

Can I build a dynamic page using Twig while keeping application logic inside appropriate PHP classes?

---

## Phase 09 — Doctrine ORM & Database Relationships

**Goal:** Understand how Doctrine maps PHP objects to relational database records.

### Primary Resources

- [Doctrine ORM Documentation](https://www.doctrine-project.org/projects/doctrine-orm/en/stable/index.html)
- [Doctrine Getting Started](https://www.doctrine-project.org/projects/doctrine-orm/en/current/tutorials/getting-started.html)
- [Symfony Doctrine Integration](https://symfony.com/doc/7.4/doctrine.html)
- [Doctrine Migrations](https://www.doctrine-project.org/projects/doctrine-migrations/en/stable/index.html)

### Practice

Learn how to:

- Configure database connections
- Define Doctrine entities
- Use entity repositories
- Persist and retrieve objects
- Understand the EntityManager
- Create database migrations
- Model one-to-many relationships
- Model many-to-many relationships
- Write Doctrine queries
- Avoid inefficient database access

### Project Application

**Book Manager v0.9 — Relational Data**

Implement persistent books, authors, reading sessions, reviews, and categories using Doctrine.

### Learning Check

Can I explain the relationship between a PHP entity, its Doctrine mapping, and the corresponding MySQL table?

---

## Phase 10 — Building Complete Symfony Applications

**Goal:** Build secure, testable, maintainable Symfony applications.

### Primary Resources

- [Symfony Security](https://symfony.com/doc/7.4/security.html)
- [Symfony Validation](https://symfony.com/doc/7.4/validation.html)
- [Symfony Forms](https://symfony.com/doc/7.4/forms.html)
- [Symfony Testing](https://symfony.com/doc/7.4/testing.html)
- [Symfony File Uploads](https://symfony.com/doc/7.4/controller/upload_file.html)
- [OWASP Top 10](https://owasp.org/www-project-top-ten/)
- [PHPUnit Documentation](https://docs.phpunit.de/)

### Practice

Learn how to:

- Authenticate users
- Authorize access
- Validate form data
- Handle file uploads
- Protect sensitive information
- Create unit tests
- Write functional tests
- Test database behavior
- Investigate security vulnerabilities

### Project Application

**Book Manager v1.0 — Complete Application**

Deliver a working application with accounts, book management, reading progress, reviews, search, and automated tests.

### Learning Check

Can I implement a complete feature, validate its input, protect access appropriately, and verify its behavior through tests?

---

## Phase 11 — Advanced Symfony

**Goal:** Explore techniques for designing and maintaining larger Symfony applications.

### Primary Resources

- [Symfony Messenger](https://symfony.com/doc/7.4/messenger.html)
- [Symfony Scheduler](https://symfony.com/doc/7.4/scheduler.html)
- [Symfony Events](https://symfony.com/doc/7.4/event_dispatcher.html)
- [Symfony Cache](https://symfony.com/doc/7.4/cache.html)
- [Symfony Mailer](https://symfony.com/doc/7.4/mailer.html)
- [Symfony Logging](https://symfony.com/doc/7.4/logging.html)
- [Symfony Deployment](https://symfony.com/doc/7.4/deployment.html)
- [Symfony Performance](https://symfony.com/doc/7.4/performance.html)

### Practice

Explore:

- Event dispatching
- Background messages and jobs
- Scheduled tasks
- Caching
- Email notifications
- API development
- Application architecture
- Performance optimization
- Logging and monitoring
- Deployment considerations

### Project Application

**Book Manager v1.1 — Advanced Features**

Introduce selected advanced functionality where it provides practical value.

### Learning Check

Can I explain why an architectural technique is appropriate for a particular problem instead of introducing unnecessary complexity?

---

## Phase 12 — Independent Application Development

**Goal:** Apply the complete curriculum to an original application.

### Primary Resources

- [Symfony Documentation](https://symfony.com/doc/7.4/index.html)
- [PHP Manual](https://www.php.net/manual/en/)
- [Git Documentation](https://git-scm.com/doc)
- [GitHub Documentation](https://docs.github.com/en)
- [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/)
- [OWASP Cheat Sheet Series](https://cheatsheetseries.owasp.org/)
- [Symfony Deployment](https://symfony.com/doc/7.4/deployment.html)

### Independent Project Requirements

Design and implement an original application.

The project should demonstrate the ability to:

- Define application requirements
- Organize development tasks
- Design a database
- Structure a Symfony application
- Implement features independently
- Write automated tests
- Debug problems
- Apply appropriate security practices
- Use Git and GitHub professionally
- Document the application
- Prepare it for deployment

### Learning Check

Can I take an original software idea from initial requirements to a functional, tested, documented application?

---

## Additional Development References

### PHP & Composer

- [PHP Manual](https://www.php.net/manual/en/)
- [Composer Documentation](https://getcomposer.org/doc/)
- [PHP-FIG Standards](https://www.php-fig.org/psr/)

### Symfony Ecosystem

- [Symfony](https://symfony.com/)
- [Symfony 7.4 Documentation](https://symfony.com/doc/7.4/index.html)
- [SymfonyCasts](https://symfonycasts.com/)
- [Twig](https://twig.symfony.com/)
- [Doctrine](https://www.doctrine-project.org/)

### Development Tools

- [Visual Studio Code](https://code.visualstudio.com/docs)
- [Xdebug](https://xdebug.org/docs/)
- [Git](https://git-scm.com/doc)
- [GitHub CLI](https://cli.github.com/manual/)

### Linux & Web Servers

- [Ubuntu Documentation](https://documentation.ubuntu.com/)
- [Nginx Documentation](https://nginx.org/en/docs/)
- [PHP-FPM](https://www.php.net/manual/en/install.fpm.php)

---

## Resource Selection Guidelines

When choosing supplementary resources:

1. Prefer official documentation where possible.
2. Match the documentation to the installed software version.
3. Favor material that explains concepts rather than only providing code to copy.
4. Prefer freely accessible resources without required subscriptions.
5. Verify third-party tutorials against current documentation.
6. Avoid adding resources merely to increase the size of this list.

A resource is useful when it helps solve a specific learning problem.

## Maintaining This Document

As the bootcamp progresses:

- Add resources that have proven helpful.
- Remove broken or outdated links.
- Update version-specific documentation when the project upgrades.
- Record useful references for challenging topics.
- Keep the list organized by learning phase.

Do not treat this document as another checklist that must be completed in full.

---

**The goal is not to consume every tutorial available. The goal is to learn enough to build software independently.**
