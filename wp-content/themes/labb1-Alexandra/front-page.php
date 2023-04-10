<? get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <? if (have_posts()): ?>
                        <div class="hero">
                            <img src="img/city.jpg" />
                            <div class="text">
                                <? while(have_posts()): the_post(); 
                                    the_content(); ?>
                                        
                                    <? endwhile; ?>
                            </div>
                        </div>
                    <? else: ?>
                        <p>Inga poster hittades</p>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>


<? get_footer(); ?>
