module.exports = {
    'resources/**/*.{scss,js}': ['prettier --write'],
    '**/*.php': ['php ./vendor/bin/php-cs-fixer fix --config .php-cs --allow-risky=yes'],
};