module.exports = {
    root: true,
    env: {
        browser: true
    },
    extends: [
        'eslint:recommended',
        'prettier' // Make sure "prettier" is the last element in this list
    ],
    parserOptions: {
        ecmaVersion: 'latest',
        sourceType: 'module'
    },
    rules: {
        'no-console': 'warn',
        'semi': ['error', 'always'],
        'quotes': ['error', 'single']
    }
}
