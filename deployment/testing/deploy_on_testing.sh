#!/bin/bash
#shopt -s expand_aliases
#source ~/.bashrc

#alias composer="/www/server/php/83/bin/php /usr/bin/composer"
#alias php="/www/server/php/83/bin/php"

echo php -v
rm -rf ./error_log

composer install --ignore-platform-reqs --no-interaction --optimize-autoloader
composer dump-autoload

rm -rf ./bootstrap/cache/*

php artisan env:decrypt --env=testing --key=$LARAVEL_ENV_ENCRYPTION_KEY

php artisan down --retry=60  --secret="1630542a-246b-4b66-afa1-dd72a4c43515"


export APP_PUBLIC_DIR=/home/foledu/public_html/testing.fol.edu.sa/public
export APP_DIR=/home/foledu/public_html/testing.fol.edu.sa

rm -rf ./webpack.mix.js
rm -rf ./vite.config.js
rm -rf ./phpunit.xml
rm -rf ./package-lock.json
rm -rf ./package.json
rm -rf ./.idea
rm -rf ./projectFilesBackup
rm -rf ./.editorconfig
rm -rf ./tailwind.config.js
rm -rf ./TODO.md
rm -rf ./INFO.md
#rm -rf ./draft.yaml
rm -rf ./README.md
rm -rf ./.styleci.yml
rm -rf ./.env.example
rm -rf ./postcss.config.js
rm -rf ./.htmlhintrc
rm -rf ./.prettierignore
rm -rf ./.prettierrc.json
rm -rf ./update.html

rm -rf ./tests
#rm -rf ./etc
#rm -rf ./resources/assets


#mv -f ./.env.testing ./.env

#rm -rf ./public/index.php
#cp -rf ./public/* $APP_PUBLIC_DIR
#cp -rf ./deployment/production/public/* $APP_PUBLIC_DIR
#rm -rf ./public

# Change rights
chmod 755 -R ./bootstrap/cache
chmod 755 -R ./storage

php artisan package:discover --ansi
php artisan config:clear  && php artisan route:clear && php artisan view:clear && php artisan optimize:clear
#php artisan view:cache
php artisan config:cache
#php artisan route:cache
php artisan storage:link
php artisan migrate --force
#php artisan up
