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

## Docs

- The docs site lives in `docs/` (Astro Starlight, deployed to Cloudflare with Void) in a pnpm workspace driven by Vite+.
- Check it with `pnpm lint` and `pnpm build`; auto-fix with `pnpm fix`.
- When adding or changing an option or enum, update `docs/src/data/options.ts` and `docs/src/content/docs/api/enums.md`.
- Keep the `docs/` examples in line with the code.

## Git

- Commit only when asked.
- Use Conventional Commits, e.g. `refactor: slim the architecture down`.
- Don't add AI attribution such as co-author trailers or generated-by footers.
