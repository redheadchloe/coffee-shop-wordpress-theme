<form action="<?php echo home_url('/'); ?>" method="get" class="flex search">
    <i class="fas fa-search"></i>
    <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="検索する">
</form>