<section class="th_slider">
    <div class="row">
        <div class="sld_holder owl-carousel">
            <div class="item">
                <img src="<?= RS.'img/home-slide.jpg'; ?>" alt="Slider" />
                <div class="slide_caption">Престижный классический пригород</div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>

<section class="intro">
    <div class="row">
        <div class="container">
            <div class="col col-lg-7 col-md-7 col-sm-7 col-xs-12 left_side">
                <div class="caption">Экохаусы</div>
                <div class="separator"></div>
                <div class="content_target">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, magni nemo quaerat quia quam, dolor adipisci nobis vero suscipit consectetur, cumque iste architecto earum minus? Minima quod sed maiores nesciunt?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptas reprehenderit, quas error fugit, officia facilis ex odit fugiat culpa quod, impedit dolorem consectetur tempora ipsa cum suscipit quibusdam at!</p>
                </div>
            </div>
            <div class="col col-lg-5 col-md-5 col-sm-5 col-xs-12 right_side">
                <img src="<?= RS."img/img_box1.jpg"; ?>" alt="Image" />
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>

<section class="video">
    <div class="row">
        <div class="container">
            <div class="caption">Живи в стиле <br />Экохаус</div>
        </div>
        <div class="video_holder">
            <video poster="<?= RS.'img/video_preloader.jpg'; ?>" class="th_video" id="th_video">
                <source src="<?= RS.'video/demo.mp4'; ?>" type="video/webm; codecs=&quot;vp8, vorbis&quot;">
                <source src="<?= RS.'video/demo.mp4'; ?>" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
                <source src="<?= RS.'video/demo.mp4'; ?>" type="video/ogg; codecs=&quot;theora, vorbis&quot;">
            </video>

            <div class="controls">
                <div class="sound_switcher" onclick="app.mute_video(this);"></div>
                <div class="tracker">
                    <?php include("elements/tracker.php"); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="th_gal">
    <div class="container">
        <div class="preview">
            <div class="title">Воплощаем европейские ценности</div>
            <a href="<?= RS.'img/gallery_item.jpg'; ?>" class="fancybox">
                <img src="<?= RS.'img/gallery_item.jpg'; ?>" alt="Gallery" />
            </a>
            <div class="controls">
                <div class="prev control_item"></div>
                <div class="curr control_item"><span>1 / 5</span></div>
                <div class="next control_item"></div>
            </div>
        </div>

        <div class="queue">
            <div class="circus owl-carousel">
                <div class="item">
                    
                </div>
            </div>
        </div>

        
    </div>
</section>