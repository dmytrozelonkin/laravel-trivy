module.exports = {
    ci: {
        collect: {
            url: [
                'https://sigma.software/',
                'https://sigma.software/about',
                'https://sigma.software/services',
            ],
        },
        upload: {
            target: 'temporary-public-storage',
        },
        assert: {
            preset: 'lighthouse:recommended',
        },
    },
};
