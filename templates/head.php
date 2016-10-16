<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <?php if (has_post_thumbnail()): ?>
    <?php global $post ?>
    <?php $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'mobile-hero'); ?>
    <?php $large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'fullsize'); ?>
    <style>
      .hero {
        background-image: url(<?= $mobile[0]; ?>);
      }

      @media screen and (min-width: 768px) {
        .hero {
          background-image: url(<?= $large[0]; ?>);
        }
      }
    </style>
  <?php endif; ?>
</head>
