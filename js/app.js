var reinit = {
    all: () => {

    },
    owl: (selector, params) => {
        var selector = selector || false;
        var params = params || {};
        if(!selector) return false;
        selector.owlCarousel(params);
    },
    fancy: (selector, params) => {
        var selector = selector || false;
        var params = params || {};
        if(!selector) return false;
        selector.fancybox(params);
    },
};


var app = {
    start: () => {
        console.log("App started...");

        $("#th_video").bind("timeupdate", app.video_update);
        $('.th_gal .preview .curr span').text("1 / " + $('.th_gal .queue .item').length);

        reinit.owl($('.th_slider .sld_holder'), {
            items: 1,
            autoHeight: true
        });

        reinit.owl($('.th_gal .circus'), {
            items: 4,
            loop: true
        });


        reinit.fancy($('.fancybox'));

        $('.circle_text').hover((e) => {
            var el = e.currentTarget;
            var el_id = el.id;
            var dot_id = el_id.replace("_t", "");
            $(".time_point").removeClass("hovered");
            $('.circle_text').removeClass('hovered');
            $("#" + dot_id).addClass("hovered"); 
            $(el).addClass("hovered");
        }, () => {
            $('.circle_text').removeClass('hovered');
            $(".time_point").removeClass("hovered");            
        });
        
    },
    video_jump: (self) => {
        $('.circle_text').removeClass("active");
        $('.time_point').removeClass("active");
        $(self).addClass("active");
        var curr_id = self.id;
        var dot_id = curr_id.replace("_t", "");
        $("#" + dot_id).addClass("active"); 
        var video = $('#th_video');
        var target_time = $(self).data("time");
        video[0].currentTime = target_time;
        video[0].play();
    },
    video_update: () => {
        var t = ~~$("#th_video")[0].currentTime;
        var total_duration = ~~$('#th_video')[0].duration;

        var m1 = ~~$('#c_part1_t').data("time");
        var m2 = ~~$('#c_part2_t').data("time");
        var m3 = ~~$('#c_part3_t').data("time");
        var m4 = ~~$('#c_part4_t').data("time");
        var m5 = ~~$('#c_part5_t').data("time");
        
        var active_selector = "c_part1_t";
        
        if(t >= m1 && t < m2){
            active_selector = "c_part1_t";            
        }else if(t >= m2 && t < m3){
            active_selector = "c_part2_t";
        }else if(t >= m3 && t < m4){
            active_selector = "c_part3_t";
        }else if(t >= m4 && t < m5){
            active_selector = "c_part4_t";
        }else if(t >= m5) {
            active_selector = "c_part5_t";
        }

        if (t == total_duration){
            $('section.video').slideUp(1000);
        }

        $('.circle_text').removeClass('active');
        $(".time_point").removeClass("active");

        $('#' + active_selector).addClass("active");
        var dot_selector = active_selector.replace("_t", "");
        $('#' + dot_selector).addClass("active");
        
    },
    mute_video: (self) => {
        var video = $('#th_video')[0];
        if(video.muted){
            video.muted = false;
            $(self).removeClass("muted");            
        }else{
            video.muted = true;
            $(self).addClass("muted");
        }
    },
    set_gal_image: (self) => {
        var self = self || {};
        var curr_src = $(self).find('img')[0].src;
        var curr_index = $(self).data("index");
        $('.th_gal .circus .item').removeClass("active");
        $(self).addClass("active");


        var target_image = $('.th_gal .preview img')[0];
        var target_fancy = $('.th_gal .preview .fancybox')[0];

        target_fancy.href = curr_src;
        target_image.src = curr_src;

        $('.th_gal .preview').attr("data-current-index", curr_index);

    }, 
    th_gal_handle: (self, action) => {
        var action = action || "next";
        var target = $('.th_gal .preview img');
        var current_index = $('.th_gal .preview').data("current-index");
        //$('.th_gal .circus .item').removeClass("active");
        var new_index = 0;
        if(action == "next"){
            new_index = parseInt(current_index) + 1;
        }else if(action == "prev"){
            new_index = parseInt(current_index) - 1;            
        }
        var new_src = $('.th_gal .item[data-index="'+ new_index+'"] img')[0].src;
        $('.th_gal .preview').attr("data-current-index", new_index);
        target[0].src = new_src;        
        
    }
};

(function($){
    app.start();
})(jQuery);
