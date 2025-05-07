<?php get_header(); ?>

<main style="max-width: 800px; margin: 0 auto; padding: 2rem;">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <div class="project-details" style="margin-bottom: 1.5rem;">
      <p><strong>Client:</strong> <?php the_field('client_name'); ?></p>
      <p><strong>Date:</strong> <?php the_field('project_date'); ?></p>
      <p><strong>Website:</strong> 
        <a href="<?php the_field('project_url'); ?>" target="_blank">
          <?php the_field('project_url'); ?>
        </a>
      </p>
    </div>

    <?php $image = get_field('project_image'); ?>
    <?php if ($image): ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="width:100%; border-radius:8px; margin-bottom:1rem;">
    <?php endif; ?>

    <div class="project-content">
      <?php the_content(); ?>
    </div>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
