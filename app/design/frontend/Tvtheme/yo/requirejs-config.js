var config = {
    shim: {
        jquery: {
            exports: '$'
        },
        'Tvtheme_Megamenu/js/tv_megamenu':
            {
                deps: ['jquery']
            }, 
        'owl.carousel/owl.carousel.min':
            {
                deps: ['jquery']
            },
        'js/jquery.stellar.min': 
            {
                deps: ['jquery']
            },
        'js/default':
            {
               deps: ['jquery'] 
            },
        'js/jquery.parallax.min':
            {
            deps: ['jquery']
            }
    }
};