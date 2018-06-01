var reinit = {
    all: () => {

    },
    owl: (selector, params) => {
        var selector = selector || false;
        var params = params || {};
        if(!selector) return false;
        selector.owlCarousel(params);
    },
};

var app = {
    start: () => {
        console.log("App started...");

        reinit.owl($('.home_slider .sld_holder'), {
            items: 1,
            autoHeight: true
        });
        
    },
};

(function($){
    app.start();
})(jQuery);