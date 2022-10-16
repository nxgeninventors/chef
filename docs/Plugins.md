

# Manage Roles and Permission
- https://spatie.be/docs/laravel-permission/v5/introduction
- https://github.com/LaravelDaily/laravel-roles-permissions-manager
- https://laravel-news.com/two-best-roles-permissions-packages
- https://spatie.be/docs/laravel-permission/v5/installation-laravel

# Spatie Laravel dashboard 

- https://spatie.be/docs/laravel-dashboard/


# 
- https://cerwyn.medium.com/git-hooks-implementation-in-laravel-unit-testing-prettier-automation-e6de138c09b9
- https://sebastiandedeyne.com/running-php-cs-fixer-on-every-commit-with-husky-and-lint-staged/



&nbsp;
# PDF
- https://spatie.be/docs/browsershot/v2/introduction

## Browsershot

- Install nodejs
- Configure env path
- open command prompt/terminal to check nodejs installation


```
npm i puppeteer
npm i puppeteer -g
```

## windows 10 Browsershot Fixes

- https://github.com/spatie/browsershot/issues/295#issuecomment-1012684624
- https://stackoverflow.com/questions/58775229/problem-with-the-installation-of-spatie-on-windows

```php

//src/Controller/Component/PDFComponent.php

Browsershot::url($url)
    // ->setNodeBinary(NODE_BINARY)
    // ->setNpmBinary(NPM_BINARY)
    ->setNodeBinary('C:\Progra~1\nodejs\node.exe')
    ->format('A4')
    ->waitUntilNetworkIdle()
    ->save('pdf/'.$name);

```