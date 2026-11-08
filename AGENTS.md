# AGENTS.md

imgproxy URL builder for PHP (8.2+).

## Code

- Keep the builder immutable: methods return new instances.
- Respect the architecture rules in `deptrac.yaml`.
- Keep the code compatible with PHP 8.2, so no typed class constants and no `new Foo()->bar()` without parentheses.
- Don't abbreviate names.
- Use code comments sparingly. Comment only what the code can't say, and keep the wording precise and concise.

## Changelog

- Add user-facing changes to `## [Unreleased]` in `CHANGELOG.md`.

## Checks

- Iterate with focused checks, e.g. `composer test -- --filter=…` or `composer phpstan`.
- Run `composer check` before finishing. It covers style, static analysis, architecture, dependencies, tests, 100% coverage and mutation testing.
- Auto-fix with `composer ecs-fix`, `composer rector-fix` and `composer composer-normalize-fix`.
- Never weaken a check to make it pass: no new ignores, baselines, deptrac exceptions or lowered thresholds. Fix the cause.

## Git

- Commit only when asked.
- Use Conventional Commits, e.g. `refactor: slim the architecture down`.
- Don't add AI attribution such as co-author trailers or generated-by footers.
