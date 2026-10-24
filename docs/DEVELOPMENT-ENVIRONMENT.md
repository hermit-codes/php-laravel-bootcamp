# PHP & Symfony Development Environment

> Development environment configuration and verification for the PHP & Symfony Bootcamp.

## Overview

The bootcamp is developed on Ubuntu 26.04 LTS using PHP 8.5, Composer, Symfony CLI, MySQL, Nginx, PHP-FPM, and Visual Studio Code.

The environment supports PHP command-line exercises, interactive debugging, relational database development, and future Symfony applications.

Symfony applications will be introduced during the appropriate curriculum phase.

## Operating System

- **OS:** Ubuntu 26.04 LTS
- **Architecture:** x86_64
- **Editor:** Visual Studio Code
- **Terminal:** Linux shell

The repository is located at:

```text
~/Projects/php-symfony-bootcamp
```

## Installed Development Tools

| Tool | Version | Purpose |
|---|---|---|
| PHP CLI | 8.5.4 | PHP command-line execution |
| PHP-FPM | 8.5.4 | PHP processing for Nginx |
| Composer | 2.10.3 | PHP dependency management |
| Symfony CLI | 5.22.2 | Symfony development utilities |
| MySQL | 8.4.11 | Relational database |
| Nginx | 1.28.3 | Web server |
| Xdebug | 3.5.0 | PHP debugging |
| Git | Installed | Version control |
| GitHub CLI | Installed | GitHub repository management |
| Node.js and npm | Installed | Frontend development tooling |

Installed versions may change as the operating system and development tools receive updates.

**Symfony CLI is not the Symfony framework.** The CLI is installed, but the Book Manager Symfony application has not yet been created.

The curriculum currently targets Symfony 7.4 LTS for future framework development.

## PHP Configuration

The PHP CLI uses:

```text
/etc/php/8.5/cli/php.ini
```

PHP-FPM uses:

```text
/etc/php/8.5/fpm/php.ini
```

These configurations are maintained separately.

Verify the CLI version:

```bash
php --version
```

Verify the PHP-FPM version:

```bash
php-fpm8.5 -v
```

List loaded PHP extensions:

```bash
php -m
```

## Symfony CLI

Symfony CLI is installed through the official Symfony APT package repository.

Verify the CLI:

```bash
symfony version
```

Check the executable location:

```bash
command -v symfony
```

Expected location:

```text
/usr/bin/symfony
```

Check Symfony's system requirements:

```bash
symfony check:requirements
```

The requirements checker passed during the environment setup.

This check examines the command-line PHP environment. PHP-FPM has its own configuration and should be verified separately when configuring a web application.

## Web Server and PHP-FPM

Nginx and PHP-FPM are installed as part of the local LEMP stack.

Check their status:

```bash
systemctl is-active nginx
systemctl is-active php8.5-fpm
```

Expected result for each service:

```text
active
```

Test the Nginx configuration:

```bash
sudo nginx -t
```

The Nginx configuration test passed during the Symfony tooling setup.

Nginx will be retained for future PHP and Symfony web development.

Symfony CLI also provides a local development server. Using that server does not require uninstalling Nginx.

## MySQL

MySQL 8.4 is installed and running locally.

The following development database has been configured:

| Setting | Value |
|---|---|
| Database | `book_manager_dev` |
| Application user | `bookmanager` |
| Host | `127.0.0.1` |
| Port | `3306` |

Check the service:

```bash
systemctl is-active mysql
```

Verify application account connectivity:

```bash
mysql -h 127.0.0.1 -P 3306 \
  -u bookmanager -p \
  -D book_manager_dev \
  -e "SELECT DATABASE(), CURRENT_USER(), VERSION();"
```

The `-p` option prompts for the database password without placing it directly in the command.

**Do not commit database passwords, access tokens, or other secrets to the repository.**

MySQL connectivity was verified successfully during environment setup.

The database will be used when relational database development and Doctrine are introduced.

## Visual Studio Code

A dedicated PHP development profile is used for the bootcamp.

### PHP Development Extensions

The profile includes:

- PHP Intelephense
- PHP Debug
- Twig Language 2
- Symfony Language Tools
- GitLens
- EditorConfig
- Prettier
- ESLint
- Code Spell Checker
- Error Lens

The PHP profile provides PHP language intelligence, interactive debugging, and support for future Symfony and Twig development.

### Editor Preferences

The profile uses:

- Four-space indentation
- Spaces instead of tabs
- Automatic formatting on save
- Unix line endings
- Trailing whitespace removal
- Automatic final newline insertion
- JetBrains Mono as the preferred editor and terminal font

Profile settings are maintained within VS Code's user configuration rather than copied into this repository.

Symfony-specific editor features requiring an application will be verified when the first Symfony project is created.

## Xdebug

Xdebug 3.5 is installed for interactive PHP debugging.

The local debugger communicates with VS Code using:

```text
Host: 127.0.0.1
Port: 9003
```

Xdebug is configured to start debugging when triggered.

A previously verified debugging command is:

```bash
XDEBUG_TRIGGER=1 php lessons/phase-01-php-fundamentals/05-match.php
```

In VS Code:

1. Open the PHP lesson.
2. Set a breakpoint.
3. Start the **Listen for Xdebug** configuration.
4. Execute the script with `XDEBUG_TRIGGER=1`.
5. Inspect execution and variables when the breakpoint is reached.

The repository has a local `.vscode/launch.json` configuration for Xdebug.

## Composer

Composer manages PHP dependencies.

Verify the installation:

```bash
composer --version
```

Run its diagnostic checks:

```bash
composer diagnose
```

The globally installed Laravel Installer was removed during the migration from Laravel to Symfony.

No Symfony application dependencies have been installed into the repository yet.

## Git and GitHub

The repository uses Git for version control and GitHub for issue tracking and pull requests.

Repository:

```text
hermit-codes/php-symfony-bootcamp
```

Development conventions include:

- Short-lived branches
- Conventional Commits
- Focused pull requests
- GitHub Issues for meaningful work
- Milestones for related tasks
- Annotated tags for completed curriculum phases

See the repository's [README](../README.md) and [Learning Guide](LEARNING-GUIDE.md) for additional details.

## Environment Verification

The following checks were completed successfully:

- [x] PHP CLI is available.
- [x] Composer is operational.
- [x] Laravel Installer is removed.
- [x] Symfony CLI is installed.
- [x] Symfony system requirements pass.
- [x] Nginx is active.
- [x] PHP-FPM is active.
- [x] MySQL is active.
- [x] Nginx configuration validation passes.
- [x] PHP-FPM loads Xdebug.
- [x] The Book Manager database accepts application-user connections.
- [x] VS Code's PHP profile has been reviewed.
- [x] Twig and Symfony editor extensions are installed.
- [x] VS Code reports no configuration errors or warnings.

### Additional Checks for Future Projects

The following checks will be performed when development reaches the relevant phases:

- Verify Symfony application startup.
- Verify HTTP requests through the selected development server.
- Verify Symfony's database connection.
- Verify Doctrine migrations.
- Verify Twig template functionality.
- Verify Symfony-specific editor features.
- Verify application-level debugging and testing.

## Current Development Status

The development environment is prepared for Symfony development.

The bootcamp remains in:

**Phase 01 — PHP Fundamentals**

Completed lessons:

**01.01–01.05**

Next lesson:

**01.06 — Loops & Iteration**

The Symfony application will be created during the framework portion of the curriculum.

---

*Maintain a working environment, document meaningful changes, and introduce new tools only when they serve a practical purpose.*
