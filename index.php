<?php get_header(); ?>
<div class="mainContainer">
    <?php
    $imagesDirectory = get_template_directory_uri() . '/img/';
    $socialMediaIconsDirectory = $imagesDirectory . 'social-media-icons/';
    $postID = get_option('compu_settings');
    $args = $postID['id_number'];
    $titleString = $postID['title'];
    if( ! $args ){
        $args = 'posts_per_page=1';
        $my_query = new WP_Query( $args );
    } else {
        $prepArg = 'p=' . (string)($args);
        $my_query = new WP_Query( $prepArg );

    }

    if( $my_query->have_posts() ) :
    while( $my_query->have_posts() ) : $my_query->the_post();
    ?>
    <div class="row">
        <div class="medium-12 large-12 columns">
            <div class="row clearfix">
                <div class="medium-9 large-9 columns">
                    <div class="row collapse">
                        <div class="large-12 medium-12 columns logo-slogan-container">
                            <div class="row">
                                <div class="medium-12 large-12 columns">
                                    <img src="<?php echo $imagesDirectory . 'compusigns-3d-logo.png'; ?>" alt="Compu Signs"/>
                                </div>
                                <h2 class="font-effect-shadow-multiple slogan-line text-right">Big or Small We Do Them All!</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="medium-3 large-3 columns">
                    <div class="buttonContainer buttonList">
                        <div class="row">
                            <div class="medium-12 large-12 columns">
                                <a class="button expand radius" href="#">Request A Quote</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="medium-12 large-12 columns">
                                <div class="row">
                                    <div class="medium-4 large-4 columns"><a href="#"><img class="centered-image" src="<?php echo $socialMediaIconsDirectory . 'google+.png'; ?>" alt=""/></a></div>
                                    <div class="medium-4 large-4 columns"><a href="#"><img class="centered-image" src="<?php echo $socialMediaIconsDirectory . 'facebook.png'; ?>" alt=""/></a></div>
                                    <div class="medium-4 large-4 columns"><a href="#"><img class="centered-image" src="<?php echo $socialMediaIconsDirectory . 'twitter.png'; ?>" alt=""/></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--    here-->
    <div class="row">
        <div class="medium-6 large-3 columns">
            <div class="animateContainer">
                <div id="slideInPanel">
                    <h3>Get a Quote!</h3>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="large-12 columns">
                                <div class="row collapse">
                                    <div class="small-8 columns">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="small-4 columns">
                                        <a href="#" class="button postfix">Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <h3>Lorem ipsum dolor sit amet.</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eius modi saepe!</p>
                    <h4><a href="#">Some Useful link</a>
                    </h4>

                    <p>Debitis error hic iure nemo perspiciatis quaerat, quam quas quo? Laudantium, tempore!</p>
                </div>
            </div>
        </div>
        <div id="firstStop" class="medium-6 large-9 columns">
            <article class="articleContainer" itemscope="" itemtype="http://schema.org/Article">
                <h1 class="font-effect-shadow-multiple fancytext" itemprop="headline">Lorem ipsum dolor sit amet.</h1>
                <div itemprop="articleBody">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor ea labore rem sint. Accusamus, assumenda est
                        eveniet hic nam ut!</p>

                    <p>Autem, cumque debitis enim esse expedita in inventore labore libero mollitia non nostrum quaerat quas
                        recusandae reiciendis rem temporibus totam.</p>
                    <img class="right" src="<?php echo $imagesDirectory . 'placeholder300.png' ?>" alt="placeholder image"/>
                    <p>Accusamus ad fugiat, mollitia pariatur perferendis quas! Aliquid aperiam atque exercitationem explicabo
                        facere, ipsum maiores minima quo quos sapiente voluptate?</p>

                    <p>Alias corporis ea, nobis omnis possimus provident voluptatibus. Culpa deserunt dolorem doloremque ea eos
                        incidunt obcaecati placeat quia reiciendis rerum?</p>

                    <p>Ad libero nisi tenetur? Dolor dolorem eaque facilis natus obcaecati omnis, veritatis voluptatum. A
                        consequuntur doloribus excepturi nisi officia rerum.</p>
                    <?php //the_content(); ?>
                </div>
            </article>
        <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
        </div>
    </div>
    <div id="tabContainer" class="row">
        <div class="medium-12 large-12 columns">
            <dl class="tabs" data-tab>
                <dd class="active"><a href="#panel2-1">Signs</a></dd>
                <dd><a href="#panel2-2">Banners</a></dd>
                <dd><a href="#panel2-3">Vehicle Graphics</a></dd>
                <dd><a href="#panel2-4">Digital Imaging</a></dd>
                <dd><a href="#panel2-5">Other Services</a></dd>
            </dl>
<!--            <hr/>-->
            <div class="tabs-content">
                <div class="content active" id="panel2-1">
                    <dl class="tabs vertical" data-tab>
                        <dd class="active"><a class="loadOrbitReFlow" href="#panel1a">Exterior Signs</a>
                        </dd>
                        <dd><a href="#panel2a">Interior Signs</a></dd>
                        <dd><a class="loadOrbitReFlow" href="#panel3a">Real Estate Signs</a></dd>
                        <dd><a href="#panel4a">Traffic Signs</a></dd>
                    </dl>
                    <div class="tabs-content vertical">
                        <div class="content active" id="panel1a">
                            <h3 class="text-center white-text">Shingled Roofs</h3>
                            <ul class="shingleSlider" data-orbit>
                                <li><img src="<?php echo $imagesDirectory . 'slide1.jpg' ?>" alt=""/>

                                    <div class="orbit-caption">Some caption</div>
                                </li>
                                <li><img src="<?php echo $imagesDirectory . 'slide2.jpg' ?>" alt=""/>

                                    <div class="orbit-caption">Another Caption</div>
                                </li>
                                <li><img src="<?php echo $imagesDirectory . 'slide3.jpg' ?>" alt=""/>

                                    <div class="orbit-caption">Caption 3</div>
                                </li>
                                <li><img src="<?php echo $imagesDirectory . 'slide4.jpg' ?>" alt=""/>

                                    <div class="orbit-caption">Caption 4</div>
                                </li>
                            </ul>
                        </div>
                        <div class="content" id="panel2a">
                            <h3 class="text-center white-text">Interior Signs</h3>
                            Select from a number of different options for your interior signage in order to brand your business and define your space.<br /><br />

                            <b>3 Dimensional logo & lettering</b><br />
                            Boldly display your company's insignia with dimensional lettering in order to provide the impact and visual creativity you're looking for.<br /><br />

                            <b>Point of purchase (POP)</b><br />
                            From menu boards to promotional material, consider point-of-sale material to prompt a purchase and attract clientele.<br /><br />

                            <b>Informational</b><br />
                            We can manufacture, from a variety of materials, for a number of different practical applications, directory signs, ADA signs, safety & caution signage as well as name plates.<br /><br />

                            <b>Decorative</b><br />
                            From a mural on wall paper to your logo on the dance floor, a talented design and production staff are on hand to help you, as simply or as elaborately, enhance and adorn your space.<br /><br />

                            <b>Tradeshow signs</b><br />
                            Take your graphics on the road effortlessly with our collapsible, foldable, portable signs. We offer table cloths, retractable and stationary banner stands, pop-up booths and so much more.

                            <br /><br />
                        </div>
                        <div class="content" id="panel3a">
                            <h3 class="text-center white-text">Tile Roofs</h3>
                            <ul id="fadeSlider" class="imageFade">
                                <li>
                                    <img src="<?php echo $imagesDirectory . 'tile-slide1.jpg' ?>" alt="tile slide two"/>
                                    <!--                                    <div class="sliderCaption">A caption</div>-->
                                </li>
                                <li>
                                    <img src="<?php echo $imagesDirectory . 'tile-slide2.jpg' ?>" alt="tile slide two"/>
                                    <!--                                    <div class="sliderCaption">Another caption</div>-->
                                </li>
                                <li>
                                    <img src="<?php echo $imagesDirectory . 'tile-slide3.jpg' ?>" alt="tile slide two"/>
                                    <!--                                    <div class="sliderCaption">A third caption</div>-->
                                </li>
                                <li>
                                    <img src="<?php echo $imagesDirectory . 'tile-slide4.jpg' ?>" alt="tile slide two"/>
                                    <!--                                    <div class="sliderCaption">Ad the last caption</div>-->
                                </li>
                            </ul>
                            <!--                            <img src="--><?php //echo $imagesDirectory . 'tile-slide2.jpg' ?><!--" alt="tile slide two"/>-->
                            <div class="row">
                                <div class="small-12 medium-12 large-12 columns">
                                    <div class="panel">
                                        <h3 class="text-right">Some headline and keyword</h3>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Atque deleniti doloremque eos ipsum non nulla qui tempore?
                                            A ipsum laboriosam nemo repellat reprehenderit rerum
                                            temporibus.</p>

                                        <p>Aliquid animi, aut beatae consequatur cupiditate dicta
                                            eveniet harum laborum modi nobis quae quos unde
                                            voluptatibus? Ab aperiam, atque distinctio doloribus iste
                                            quod repellat tenetur?</p>

                                        <p>Beatae deserunt dignissimos incidunt reprehenderit. Eaque
                                            earum, enim eum explicabo iste labore minus nam obcaecati
                                            perferendis quae quas sunt temporibus tenetur ut
                                            voluptatum! Dicta, sapiente?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content" id="panel4a">
                            <h2>Traffic Signs</h2>
                        </div>
                    </div>
                </div>
                <div class="content" id="panel2-2">
                    <div class="row">
                        <div class="small-12 medium-12 large-12 columns">
                            <div class="panel">
                                <h3>Siding Info</h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                                    blanditiis cum cumque ducimus fugit inventore nam necessitatibus nobis
                                    rerum sit! Doloremque minima praesentium ratione similique.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content" id="panel2-3">
                    <div class="row">
                        <div class="small-12 medium-12 large-12 columns">
                            <div class="panel callout">
                                <h3 class="text-right">Some headline and keyword</h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                                    autem dignissimos dolores doloribus, eveniet facilis impedit,
                                    itaque magnam nihil qui quibusdam rem similique temporibus
                                    vel!</p>

                                <p>A accusamus, amet id modi necessitatibus quia rem. Ab aperiam
                                    debitis doloremque ex ipsum neque temporibus unde voluptatem
                                    voluptatibus? Magni odit, similique? Mollitia, nostrum,
                                    tenetur.</p>

                                <p>A adipisci assumenda consectetur dolorum ducimus eius enim eos
                                    exercitationem necessitatibus neque nobis odio quo, reprehenderit
                                    tempora temporibus. Assumenda aut commodi error expedita placeat
                                    tempore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content" id="panel2-4">
                    <dl class="tabs vertical" data-tab>
                        <dd class="active"><a href="#panel1a">Digital Imaging</a></dd>
                        <dd><a href="#panel2a">Something Else</a></dd>
                    </dl>
                    <div class="tabs-content vertical">
                        <div class="content active" id="panel1a">
                            <div class="row">
                                <div class="small-12 medium-12 large-12 columns">
                                    <div class="panel callout">
                                        <h3 class="text-left">Something written about this
                                            subject</h3>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Quas, quia voluptate. Accusantium blanditiis cupiditate,
                                            facere laboriosam mollitia optio quisquam rerum sed
                                            tempora unde. Aspernatur, unde?</p>

                                        <p>Delectus ea illum mollitia odio officia porro provident
                                            quidem? Beatae consequatur cum cupiditate delectus dolor
                                            exercitationem ipsam placeat possimus sunt tempora,
                                            temporibus, vero. Dolore, perferendis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content" id="panel2a">
                            <div class="row">
                                <div class="small-12 medium-12 large-12 columns">
                                    <div class="panel">
                                        <h3 class="text-center">Another such thing here with key
                                            words</h3>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Aliquam atque commodi incidunt, quidem quod unde.</p>

                                        <p>Cum doloremque ea inventore laudantium minima nostrum
                                            quidem, ut veniam. Consequatur illum porro reprehenderit
                                            voluptas!</p>

                                        <p>A ab aspernatur deserunt distinctio ea eveniet impedit
                                            itaque libero magni, nihil, quo saepe, vitae.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content" id="panel2-5">
                    <h2>Other Services</h2>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="medium-12 large-12 columns">
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, repudiandae!</p>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
