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

        reinit.owl($('.home_slider .slider'), {
            items: 1
        });
        
    },
};

(function($){
    app.start();
})(jQuery);