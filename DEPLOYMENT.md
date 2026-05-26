# Deployment notes — GitHub → Railway (and general production readiness)

Quick options:

- Docker (recommended): Railway supports deploying a Dockerfile from the repo root. The included `Dockerfile` builds frontend assets, installs PHP dependencies, and runs nginx + php-fpm. Use Railway's Docker deploy and set env vars in the Railway dashboard.

- Buildpack (alternative): Use the `Procfile` with the PHP buildpack (heroku/php). To build frontend assets, add a `heroku-postbuild` script in `package.json` or use a multi-buildpack configuration.

Checklist before deploying:

- Create a production `.env` via Railway environment variables — do NOT commit secrets. Add values for `APP_KEY`, `APP_ENV=production`, `APP_DEBUG=false`, `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.
- Run `php artisan key:generate --force` (Railway release command or local) and set `APP_KEY` in env.
- Ensure `APP_URL` points to the Railway app domain.
- Configure `FILESYSTEM_DISK` and storage (use S3 for production or persistent plugin on Railway).
- Configure mailer credentials (SMTP) and production logging settings.
- Run migrations (`php artisan migrate --force`) after deployment or enable a release command in Railway.

Railway-specific tips:

- Add the project to Railway and connect the GitHub repo; select the Dockerfile deploy or the PHP buildpack.
- Set all environment variables in Railway's dashboard; do not upload `.env`.
- For persistent file storage (uploads/images), use S3 and set `FILESYSTEM_DRIVER=s3`.

CI/CD (GitHub Actions):

- A `/.github/workflows/ci.yml` workflow runs tests and builds frontend assets on push/PR.
