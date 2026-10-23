# Learning Guide

> A practical guide to learning PHP and Symfony through small steps, active recall, independent problem-solving, and real projects.

## Purpose

This guide explains **how** the PHP & Symfony Bootcamp works. The [roadmap](../ROADMAP.md) describes **what** we learn; the [README](../README.md) introduces the project.

The objective is to become comfortable designing, building, testing, and debugging applications independently—not merely following tutorials or completing checklists.

## Core Principles

1. **One concept at a time.** Introduce one new idea, then practice it before moving on.
2. **Fundamentals before abstractions.** Learn PHP, HTTP, and SQL before relying on Symfony to handle them.
3. **Write code, don't just read it.** Predict outcomes and attempt exercises before reviewing solutions.
4. **Ask why.** Explain why an approach works, not only what syntax to type.
5. **Review without judgment.** Mistakes and debugging are part of learning.
6. **Progress without deadlines.** Advance after demonstrating understanding, not according to an arbitrary schedule.
7. **Build something useful.** Connect lessons to the evolving Book Manager project.

## The Lesson Cycle

Each lesson generally follows five steps. A short lesson may combine steps; a difficult concept may take several sessions.

### 1. Learn

Read a concise explanation, a real-world analogy where helpful, and a small PHP example. New syntax should be explained rather than introduced all at once.

### 2. Practice

Write or modify a short exercise in the appropriate `lessons/` directory. Run it locally and observe the output. Use VS Code and Xdebug to investigate behavior when helpful.

### 3. Recall

Without immediately consulting the example, predict an output, explain a condition, or describe why a line of code behaves as it does. Attempt the question before moving on.

### 4. Apply

Use the concept in a book-related exercise or a small project feature. Prefer changing or writing code independently over copying a complete solution.

### 5. Review

Review the result for correctness, clarity, edge cases, and understanding. Summarize what was learned and note any questions worth revisiting.

## How to Request Help

Getting help is part of professional development. The default approach is to provide **the smallest useful hint**, preserving the opportunity to solve the problem.

| Request | What to expect |
|---|---|
| **Hint** | A nudge toward the next step without revealing the complete answer. |
| **Another hint** | A more specific clue or diagnostic question. |
| **Explain** | A focused explanation with a small illustrative example. |
| **Review my code** | Feedback on the submitted code, its behavior, and possible improvements. |
| **Show a solution** | A complete walkthrough after an attempt or when explicitly requested. |

When debugging, start with the observed output or error, what you expected, and what you have tried. Never share passwords, `.env` secrets, private SSH keys, or access tokens.

## Independent Challenges

Independent challenges check whether a concept transfers beyond the exact lesson example. They should be small, clearly scoped, and appropriate to what has already been taught.

A challenge provides:

- **Goal:** What the program or feature must accomplish.
- **Inputs and expected behavior:** Enough information to test the result.
- **Constraints:** Concepts to practice, where useful.
- **Completion checks:** What to verify before marking it done.

Hints are allowed. The aim is independent reasoning—not artificially avoiding documentation.

## When Is a Lesson Complete?

A lesson is ready to mark complete when the learner can:

- Explain the central concept in their own words.
- Predict or reason about a representative example.
- Write or adapt a small solution using that concept.
- Run and check the solution, including a relevant edge case where appropriate.
- Identify any remaining uncertainty and decide whether review is needed.

A completed video or a copied example **does not by itself** satisfy these requirements. It is fine to revisit completed topics later.

## Phase Completion

Each phase has an associated project milestone and completion requirements in [ROADMAP.md](../ROADMAP.md).

Before completing a phase:

1. Verify required lessons and exercises are complete.
2. Demonstrate the phase concepts through its project or challenge.
3. Review code and run relevant checks or tests.
4. Update learning progress and documentation.
5. Commit the completed work using Conventional Commits.
6. Create an **annotated phase tag** only when the full phase is complete.

Phase tags use names such as `phase-01`, `phase-02`, and `phase-03`. We do **not** tag every lesson.

## Git and GitHub: Keep the Process Proportional

- **`ROADMAP.md`** records lesson-level progress.
- **GitHub Issues** track meaningful work such as curriculum improvements, environment setup, bugs, or application features.
- **Milestones** group related work without imposing deadlines.
- **Short-lived branches and pull requests** are used for significant or reviewable changes.
- **Conventional Commits** describe committed changes, for example `feat: complete PHP loops lesson` or `docs: improve learning guide`.

Not every exercise needs an issue, branch, or pull request. Administrative work should support learning—not replace it.

## Using Free Learning Resources

Use the official PHP and Symfony documentation as primary references, supported by free tutorials or videos when they clarify a concept. Version-specific Symfony documentation should match the version used in a project.

Reference material is a support tool, not a second competing curriculum. Record useful resources in `docs/RESOURCES.md` as that file is developed. Paid courses are not required.

## Book Manager: Build in Layers

The Book Manager begins as small PHP exercises and gradually becomes a persistent, database-backed Symfony web application. Do not introduce Twig, Doctrine, or advanced Symfony infrastructure before the corresponding phase.

Each stage should reuse prior knowledge and leave space for the learner to make implementation decisions. Project requirements can evolve as understanding grows.

## Current Checkpoint

- **Current phase:** 01 — PHP Fundamentals
- **Completed:** Lessons 01.01–01.05
- **Next lesson:** 01.06 — Loops & Iteration
- **Framework direction:** Symfony, with Twig and Doctrine introduced later

> **Measure progress by what you can explain, build, and debug—not by how quickly you move through the roadmap.**
