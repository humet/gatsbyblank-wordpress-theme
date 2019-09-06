<?php

// Filter except length to 35 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
  return 17;
  }
  add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );
  
  function custom_excerpt_more( $more ) {
    return '....';
  }
  add_filter( 'excerpt_more', 'custom_excerpt_more' );