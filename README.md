    "repositories": [
        {
            "type": "path",
            "url": "../starter_kits/laravel-tex-tools",
            "options": {
                "symlink": true
            }
        }
    ],

compose require sigma/laravel-tex-tools:@dev

php artisan vendor:publish --tag=github-actions
php artisan vendor:publish --tag=phpcs-config

https://github.com/dmytrozelonkin/sigma_excellence

git commit --no-verify

https://phpstan.org/
https://github.com/nunomaduro/larastan
https://github.com/TomasVotruba/bladestan
https://mskelton.medium.com/auto-formatting-code-using-prettier-and-github-actions-ed458f58b7df

# How to setup prettier
1. add prettier as dev dependency
2.
3. Setup prettier on local env
   https://prettier.io/docs/en/editors.html
   `Run for files: {**/*,*}.{js,vue}`

scripts:
"lint": "eslint --ext .js,.vue --ignore-path .gitignore --fix resources/js",
"format": "prettier resources --write",

Todo:
- add prettier for JS code styling
- TBD: set rules for phpcs - https://github.com/squizlabs/PHP_CodeSniffer/wiki/Customisable-Sniff-Properties#genericfileslinelength
- TBD: add automate code style checking with git hooks (pre-commit)
- TBD: editorconfig
- TBD: eslint | eslint-config-prettier | eslint-plugin-vue
- TBD: instruction how to setup editor
- TBD: prettier for .blade files
