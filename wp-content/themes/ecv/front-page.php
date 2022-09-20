<?php get_header(); ?>

<?php
    $imageHp = get_field('media');

    $imageTitle = $imageHp['title'];
    $imageUrl = $imageHp['url'];
    $imageAlt = $imageHp['alt'];
?>

<div>
    <div>
        <button class="btn btn-primary text">
            Call to action
        </button>
    </div>
    <div>
        <button class="btn btn-secondary">
            <span class="text">Call to action</span>
        </button>
    </div>
    <div>
        <button class="btn btn-grey">
            Call to action
        </button>
    </div>
</div>

<?php get_footer(); ?>