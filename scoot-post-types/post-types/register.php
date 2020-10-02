<?php

function scoot_register_job_type() {
  $labels = array(
    'name'          => __( 'Jobs', SCOOTDOMAIN ),
    'singular_name' => __( 'Job', SCOOTDOMAIN ),
    'archives'      => __( 'Job Listing', SCOOTDOMAIN ),
    'add_new'       => __( 'Add New Job', SCOOTDOMAIN ),
    'add_new_item'  => __( 'Add New Job', SCOOTDOMAIN ),
    'all_items'     => __ ( 'All Jobs', SCOOTDOMAIN ),
  );

  $args = array(
    'labels'       => $labels,
    'public'       => true,
    'has_archive' => 'job listings',
    'rewrite'      => array( 'has_front' => true ),
    'menu_icon'    => 'dashicons-list-view',
    'supports'     => array( 'title', 'editor' ),
    'show_in_rest' => true,
  );

  register_post_type( 'job', $args );
}
