<?php get_header(); ?>

<section class="section menu-page width part">
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <h2 class="my-2">メニュー</h2>
    <p class="my-2 text-center">Coffee & co. で、もう一杯飲みたくなる味と出逢う</p>
    <div class="menu-filter flex my-2">
        <?php
        $menus = get_terms(['taxonomy' => 'menu']);
        if (!empty($menus)) :
        ?>
            <?php foreach ($menus as $menu) : ?>
                <button class="filter-btn flex-center" type="button" data-category="<?php echo $menu->slug; ?>">
                    <?php echo $menu->name; ?>
                </button>
            <?php endforeach; ?>
    </div>
<?php endif; ?>
<div class="menu-item grid-4">
    <?php
    $menus = get_terms(['taxonomy' => 'menu']);
    if (!empty($menus)) :
    ?>
        <?php foreach ($menus as $menu) : ?>
            <?php
            $the_query = new WP_Query([
                'post_type' => 'menus',
                'posts_per_page' => 7,
                'tax_query' => [
                    [
                        'taxonomy' => 'menu',
                        'field' => 'slug',
                        'terms' => $menu->slug,
                    ]
                ]
            ]);

            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div data-category="<?php echo $menu->slug; ?>" class="single-menu">
                        <a href="<?php the_permalink(); ?>">
                            <figure>
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : ?>
                                    <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
                                <?php endif; ?>
                            </figure>
                            <figcaption class="flex">
                                <h3 class="menu_title"><?php the_title(); ?></h3>
                                <span class="menu_price"><?php the_content(); ?></span>
                            </figcaption>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
</section>
</div>


<script>
    const menuItems = document.querySelectorAll('.single-menu');
    const filterBtns = document.querySelectorAll('.filter-btn');
    menuItems.forEach(menuItem => {
        menuItem.style.display = 'none';
        filterBtns.forEach(filterBtn => {
            filterBtn.addEventListener('click', (e) => {
                filterBtns.forEach(filterBtn => {
                    filterBtn.classList.remove('active');
                })
                menuCategory = e.currentTarget.dataset.category;
                e.currentTarget.classList.add('active');
                const itemCategory = menuItem.dataset.category;
                if (menuCategory === itemCategory) {
                    menuItem.style.display = 'grid';
                    menuItem.classList.add('active');
                } else {
                    menuItem.style.display = 'none';
                }
            })
        })
    })

    filterBtns[0].click();
</script>
<?php get_footer(); ?>