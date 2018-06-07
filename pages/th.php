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
            <div class="col col-lg-7 col-md-6 col-sm-12 col-xs-12 left_side">
                <div class="caption">Экохаусы</div>
                <div class="separator"></div>
                <div class="content_target">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, magni nemo quaerat quia quam, dolor adipisci nobis vero suscipit consectetur, cumque iste architecto earum minus? Minima quod sed maiores nesciunt?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptas reprehenderit, quas error fugit, officia facilis ex odit fugiat culpa quod, impedit dolorem consectetur tempora ipsa cum suscipit quibusdam at!</p>
                </div>
            </div>
            <div class="col col-lg-5 col-md-6 hidden-sm hidden-xs right_side">
                <img src="<?= RS."img/img_box1.jpg"; ?>" alt="Image" />
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>

<section class="video hidden-sm hidden-xs">
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


<section class="th_gal_owl parallax-window" data-parallax="scroll" data-image-src="<?= RS.'img/section_bg2.jpg'; ?>">
    <div class="container">
        <div class="th_gal_top owl-carousel">
            <div class="item">
                <div class="title">Воплощаем европейские ценности</div>
                <a href="<?= RS.'img/gallery_item.jpg'; ?>" class="fancybox" data-fancybox="th_page_gal">
                    <img src="<?= RS.'img/gallery_item.jpg'; ?>" alt="Image" />
                </a>
                <div class="curr_image"><span>1 / 4</span></div>
            </div>
            <div class="item">
                <div class="title">Воплощаем европейские ценности 2</div>
                <a href="<?= RS.'img/home-slide.jpg'; ?>" class="fancybox" data-fancybox="th_page_gal">
                    <img src="<?= RS.'img/home-slide.jpg'; ?>" alt="Image" />
                </a>
                <div class="curr_image"><span>2 / 4</span></div>
            </div>
        </div>
        <div class="th_gal_bot owl-carousel">
            <div class="item">
                <img src="<?= RS.'img/gallery_item.jpg'; ?>" alt="Image" />
            </div>
            <div class="item">
                <img src="<?= RS.'img/home-slide.jpg'; ?>" alt="Image" />
            </div>
        </div>
    </div>
</section>

<?php 
/* 
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
*/
?>

<section class="th_genplan hidden-sm hidden-xs">
    <div class="floating">
        <div class="item_type">отдельный дом</div>
        <div class="item_name">Будапешт</div>
        <div class="separator"></div>
        <div class="area">площадь дома <span><span class="val">140</span> <sup>м<sup>2</sup></sup></span></div>
        <div class="add_area">+ цоколь <span><span class="val">40</span> <sup>м<sup>2</sup></sup></span></div>
    </div>
    <img src="<?= RS.'img/genplan_bg.jpg'; ?>" id="genplan_image" alt="Genplan" />
    <?php include("elements/genplan.php"); ?>
</section>

<section class="th_lines parallax-window" data-parallax="scroll" data-image-src="<?= RS.'img/th_section_bg.jpg'; ?>">
    <div class="container">
        <div class="caption">Живи в стиле <br>Экохаус</div>

        <div class="clear"></div>
        <div class="lines">

            <!-- ITEM START -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 lines_outer_item">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 lines_outer_item">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 lines_outer_item">
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
            <div class="col col-lg-8 col-md-12 col-sm-12 col-xs-12 left_side">
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

<section class="th_info_block_2">
    <div class="row">
        <div class="container">

            <div class="col col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="outer_item">
                    <div class="inner_item">
                        <div class="caption">Все <br>подведено</div>
                        <div class="separator"></div>
                        
                        <div class="icon_table_set">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="bg" style="background-image: url('<?= RS.'img/lamp.png'; ?>');"></div>
                                            <div class="text">Свет</div>
                                        </td>
                                        <td>
                                            <div class="bg" style="background-image: url('<?= RS.'img/oven.png'; ?>');"></div>
                                            <div class="text">Газ</div>
                                        </td>
                                        <td>
                                            <div class="bg" style="background-image: url('<?= RS.'img/pipe.png'; ?>');"></div>
                                            <div class="text">Вода</div>
                                        </td>
                                        <td>
                                            <div class="bg" style="background-image: url('<?= RS.'img/radiator.png'; ?>');"></div>
                                            <div class="text">Отопление</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="additional">
                            <p class="title">Дополнительно</p>
                            <ul>
                                <li><span>Система умный дом</span></li>
                                <li><span>4 уровня - цоколь, мансарда, 2 жилых этажа</span></li>
                                <li><span>Утепление минеральной ватой</span></li>
                                <li><span>Автономное отопление</span></li>
                                <li><span>Большие кухни гостинные</span></li>
                                <li><span>Предусмотрено размещение камина</span></li>
                                <li><span>Въезд по пропускам</span></li>
                                <li><span>Места для досуга и отдыха</span></li>
                                <li><span>Охрана и видеонаблюдение</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rd_th_layouts parallax-window" data-parallax="scroll" data-image-src="<?= RS.'img/th_section_bg.jpg'; ?>">
    <div class="container">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 rd_th_layouts_holder">
            <div class="top_owl owl-carousel">
                <div class="item">
                    <a href="<?= RS.'img/layout.jpg'; ?>" class="fancybox" data-fancybox="th_layout_gal_">
                        <img src="<?= RS.'img/layout.jpg'; ?>" alt="Layout">
                    </a>
                </div>
                <div class="item">
                    <a href="<?= RS.'img/gallery_item.jpg'; ?>" class="fancybox" data-fancybox="th_layout_gal_">
                        <img src="<?= RS.'img/gallery_item.jpg'; ?>" alt="Layout">
                    </a>
                </div>
            </div>
            <div class="bot_owl owl-carousel">
                <div class="item">
                    <img src="<?= RS.'img/layout.jpg'; ?>" alt="Layout">
                </div>
                <div class="item">
                    <img src="<?= RS.'img/gallery_item.jpg'; ?>" alt="Layout">
                </div>               
            </div>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 left_side">
            
            <div class="caption">Готовые <br>таунхаусы</div>
            <div class="separator"></div>

            <div class="layouts_switcher">
                <p>Метраж м<sup>2</sup></p>
                <ul>
                    <li class="active"><a href="javascript:void(0);">111</a></li>
                    <li><a href="javascript:void(0);">121</a></li>
                    <li><a href="javascript:void(0);">73.8</a></li>
                </ul>
            </div>

            <div class="th_name">Таунхаус "Амстердам"</div>
            <div class="description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae fugiat quo necessitatibus mollitia sit in temporibus alias, repellendus corporis ut debitis, vero laudantium rerum nemo cum neque facere maiores consectetur.
            </div>

        </div>
    </div>
</section>