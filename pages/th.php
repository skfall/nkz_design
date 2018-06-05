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



<section class="th_gal parallax-window" data-parallax="scroll" data-image-src="<?= RS.'img/section_bg2.jpg'; ?>">

    <!-- SLIDER IS NOT FINISHED -->
    <div class="container">
        <div class="preview" data-current-index="0">
            <div class="title">Воплощаем европейские ценности</div>
            <a href="<?= RS.'img/gallery_item.jpg'; ?>" class="fancybox">
                <img src="<?= RS.'img/gallery_item.jpg'; ?>" alt="Image" />
            </a>
            <div class="controls">
                <div class="prev control_item" onclick="app.th_gal_handle(this, 'prev');"></div>
                <div class="curr control_item"><span>1 / 5</span></div>
                <div class="next control_item" onclick="app.th_gal_handle(this, 'next');"></div>
            </div>
        </div>

        <div class="queue">
            <div class="circus owl-carousel">
                <div class="item" onclick="app.set_gal_image(this);" data-index="0">
                    <img src="<?= RS.'img/gallery_item.jpg'; ?>" alt="Image" />
                </div>
                <div class="item" onclick="app.set_gal_image(this);" data-index="1">
                    <img src="<?= RS.'img/home-slide.jpg'; ?>" alt="Image" />
                </div>
                <div class="item" onclick="app.set_gal_image(this);" data-index="2">
                    <img src="<?= RS.'img/gallery_item.jpg'; ?>" alt="Image" />
                </div>
                <div class="item" onclick="app.set_gal_image(this);" data-index="3">
                    <img src="<?= RS.'img/gallery_item.jpg'; ?>" alt="Image" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="th_genplan">
    <img src="<?= RS.'img/genplan_bg.jpg'; ?>" id="genplan_image" alt="Genplan" />
    <?php include("elements/genplan.php"); ?>
</section>

<section class="th_lines parallax-window" data-parallax="scroll" data-image-src="<?= RS.'img/th_section_bg.jpg'; ?>">
    <div class="container">
        <div class="caption">Живи в стиле <br>Экохаус</div>

        <div class="clear"></div>
        <div class="lines">

            <!-- ITEM START -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="item">
                    <div class="image">
                        <img src="<?= RS.'img/th_preview.jpg'; ?>" alt="Image" />
                    </div>
                    <div class="desc">
                        <div class="name">
                            <p class="line">Линия</p>
                            <div class="line_name">Амстердам</div>
                            <div class="separator"></div>
                        </div>
                        <ul class="th_props">
                            <li>площадь дома <span class="value">140 <sup>м<sup>2</sup></sup></span></li>
                            <li>цоколь <span class="value">40 <sup>м<sup>2</sup></sup></span></li>
                            <li>участок <span class="value">45 <sup>м<sup>2</sup></sup></span></li>
                            <li>стоимость от <span class="value">122 000 <sup>у.е.</sup></span></li>
                        </ul>
                        <div class="th_layouts_btn">Планировки</div>
                    </div>        
                </div>
            </div>
            <!-- ITEM END -->  

            <!-- ITEM START -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="item">
                    <div class="image">
                        <img src="<?= RS.'img/th_preview.jpg'; ?>" alt="Image" />
                    </div>
                    <div class="desc">
                        <div class="name">
                            <p class="line">Линия</p>
                            <div class="line_name">Амстердам</div>
                            <div class="separator"></div>
                        </div>
                        <ul class="th_props">
                            <li>площадь дома <span class="value">140 <sup>м<sup>2</sup></sup></span></li>
                            <li>цоколь <span class="value">40 <sup>м<sup>2</sup></sup></span></li>
                            <li>участок <span class="value">45 <sup>м<sup>2</sup></sup></span></li>
                            <li>стоимость от <span class="value">122 000 <sup>у.е.</sup></span></li>
                        </ul>
                        <div class="th_layouts_btn">Планировки</div>
                    </div>        
                </div>
            </div>
            <!-- ITEM END -->  

            <!-- ITEM START -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="item">
                    <div class="image">
                        <img src="<?= RS.'img/th_preview.jpg'; ?>" alt="Image" />
                    </div>
                    <div class="desc">
                        <div class="name">
                            <p class="line">Линия</p>
                            <div class="line_name">Амстердам</div>
                            <div class="separator"></div>
                        </div>
                        <ul class="th_props">
                            <li>площадь дома <span class="value">140 <sup>м<sup>2</sup></sup></span></li>
                            <li>цоколь <span class="value">40 <sup>м<sup>2</sup></sup></span></li>
                            <li>участок <span class="value">45 <sup>м<sup>2</sup></sup></span></li>
                            <li>стоимость от <span class="value">122 000 <sup>у.е.</sup></span></li>
                        </ul>
                        <div class="th_layouts_btn">Планировки</div>
                    </div>        
                </div>
            </div>
            <!-- ITEM END -->  

            
            

        </div>
    </div>
</section>

<section class="th_info_block_1">
    <div class="row">
        <div class="container">
            <div class="col col-lg-7 col-md-7 col-sm-7 col-xs-12 left_side">
                <div class="caption">Ваш <br>уютный <br>дом</div>
                <div class="separator"></div>
                <div class="content_target">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, magni nemo quaerat quia quam, dolor adipisci nobis vero suscipit consectetur, cumque iste architecto earum minus? Minima quod sed maiores nesciunt?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptas reprehenderit, quas error fugit, officia facilis ex odit fugiat culpa quod, impedit dolorem consectetur tempora ipsa cum suscipit quibusdam at!</p>
                </div>

                <div class="icons">
                    <table>
                        <tbody>
                            <tr>
                                <td><span class="bg" style="background-image: url('<?= RS.'img/ico_temp.png'; ?>');"></span><span class="text">Теплые полы и отопление</span></td>
                                <td><span class="bg" style="background-image: url('<?= RS.'img/ico_water.png'; ?>');"></span><span class="text">Контроль протечки воды</td>
                            </tr>
                            <tr>
                                <td><span class="bg" style="background-image: url('<?= RS.'img/ico_light.png'; ?>');"></span><span class="text">Освещение снаружи и внутри дома</span></td>
                                <td><span class="bg" style="background-image: url('<?= RS.'img/ico_bell.png'; ?>');"></span><span class="text">Система безопасности</span></td>
                            </tr>
                            <tr>
                                <td><span class="bg" style="background-image: url('<?= RS.'img/ico_vent.png'; ?>');"></span><span class="text">Вентиляция и климат-контроль</span></td>
                                <td><span class="bg" style="background-image: url('<?= RS.'img/ico_wifi.png'; ?>');"></span><span class="text">ТВ <br>Музыка <br>Интернет</span></td>
                            </tr>
                            <tr>
                                <td><span class="bg" style="background-image: url('<?= RS.'img/ico_doors.png'; ?>');"></span><span class="text">Раскрытие дверей и окон</span></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>

<section class="th_info_block_2"></section>