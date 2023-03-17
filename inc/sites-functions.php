<?php

function save_rand_meta($id, $meta_name, $meta_value) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, $meta_name ) ) {
      $get_meta = get_post_meta( $post_id, $meta_name, true );
      return $get_meta;
    } else {
      add_post_meta( $post_id, $meta_name, $meta_value, true );
      $get_meta = get_post_meta( $post_id, $meta_name, true );
      return $get_meta;
    }
  }
}

//Main Rating 
function main_rating($id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'site_main_rating' ) ) {
      $site_rating = get_post_meta( $post_id, 'site_main_rating', true );
      return $site_rating;
    } else {
      $rand_rating = mt_rand(70, 90);
      add_post_meta( $post_id, 'site_main_rating', $rand_rating, true );
      $site_rating = get_post_meta( $post_id, 'site_main_rating', true );
      return $site_rating;
    }
  }
}

//Site Price
function site_price($id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'site_price' ) ) {
      $site_price = get_post_meta( $post_id, 'site_price', true );
      return $site_price;
    } else {
      $rand_price = mt_rand(1, 5);
      $rand_price = $rand_price.'00';
      add_post_meta( $post_id, 'site_price', $rand_price, true );
      $site_price = get_post_meta( $post_id, 'site_price', true );
      return $site_price;
    }
  }
}

function get_site_name($url, $id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'check_site_name' ) ) {
      $site_name = get_post_meta( $post_id, 'check_site_name', true );
      return $site_name;
    } else {
      $html = file_get_html('http://'.$url);
      if ($html) {
        $get_name = $html->find('meta[property="og:site_name"]', 0)->content;
        add_post_meta( $post_id, 'check_site_name', $get_name, true );
        $site_name = get_post_meta( $post_id, 'check_site_name', true );
        return $site_name;
      }
    }
  }
}

function get_site_lang($url, $id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'check_site_locale' ) ) {
      $site_lang = get_post_meta( $post_id, 'check_site_locale', true );
      return $site_lang;
    } else {
      $html = file_get_html('http://'.$url);
      if ($html) {
        $locale = $html->find('meta[property="og:locale"]', 0)->content;
        if ($locale === 'ru_RU') {
          $site_locale = 'Російська';
        } elseif ($locale === 'ua_UA') {
          $site_locale = 'Українська';
        } else {
          $site_locale = 'Невідомо';
        }
        add_post_meta( $post_id, 'check_site_locale', $site_locale, true );
        $site_lang = get_post_meta( $post_id, 'check_site_locale', true );
        return $site_lang;
      }
    }
  }
}

function get_site_cms($url, $id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'check_site_cms_meta' ) ) {
      $site_cms = get_post_meta( $post_id, 'check_site_cms_meta', true );
      return $site_cms;
    } else {
      $html = file_get_html('http://'.$url);
      if ($html) {
        //for opencart
        $html_opencart = file_get_html('http://'.$url.'/admin');

        if ( strpos($html->innertext, 'uaprom-static/')!==false) {
          $cms_value = 'Prom';
        } elseif ( strpos($html->innertext, 'wp-content/themes')!==false ) {
          $cms_value = 'WordPress';
        } elseif ( strpos($html->innertext, '/horoshop')!==false ) {
          $cms_value = 'Хорошоп';
        } elseif ( strpos($html->innertext, 'prestashop')!==false ) {
          $cms_value = 'PrestaShop';
        } elseif ( strpos($html->innertext, 'tildacdn.')!==false ) {
          $cms_value = 'Tilda';
        } elseif ( strpos($html->innertext, 'Joomla!')!==false ) {
          $cms_value = 'Joomla';
        } elseif ( strpos($html_opencart->innertext, 'OpenCart')!==false ) {
          $cms_value = 'OpenCart';
        } elseif ( strpos($html->innertext, 'Drupal ')!==false || strpos($html->innertext, 'drupal.org')!==false ) {
          $cms_value = 'Drupal';
        } else {
          $cms_value = '🤷‍♂️';
        }

        add_post_meta( $post_id, 'check_site_cms_meta', $cms_value, true );
        $site_cms = get_post_meta( $post_id, 'check_site_cms_meta', true );
        return $site_cms;
      }
    }
  }
}

function get_site_description($url, $id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'check_site_description' ) ) {
      $site_description = get_post_meta( $post_id, 'check_site_description', true );
      return $site_description;
    } else {
      $html = file_get_html('http://'.$url);
      if ($html) {
        $get_description = $html->find('meta[name="description"]', 0)->content;

        add_post_meta( $post_id, 'check_site_description', $get_description, true );
        $site_description = get_post_meta( $post_id, 'check_site_description', true );
        return $site_description;
      }
    }
  }
}

function get_site_title($url, $id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'check_site_title' ) ) {
      $site_title = get_post_meta( $post_id, 'check_site_title', true );
      return $site_title;
    } else {
      $html = file_get_html('http://'.$url);
      if ($html) {
        $get_title = $html->find('title', 0)->plaintext;

        add_post_meta( $post_id, 'check_site_title', $get_title, true );
        $site_title = get_post_meta( $post_id, 'check_site_title', true );
        return $site_title;
      }
    }
  }
}

function check_google_analytics($url, $id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'check_google_analytics' ) ) {
      $chech_ga = get_post_meta( $post_id, 'check_google_analytics', true );
      return $chech_ga;
    } else {
      $html = file_get_html('http://'.$url);
      if ($html) {
        if ( strpos($html->innertext, 'gtag')!==false || strpos($html->innertext, 'GoogleAnalyticsObject')!==false) {
          $ga_value = 'yes';
        } else {
          $ga_value = 'no';
        }
        add_post_meta( $post_id, 'check_google_analytics', $ga_value, true );
        $chech_ga = get_post_meta( $post_id, 'check_google_analytics', true );
        return $chech_ga;
      }
    }
  }
}

function check_facebook_pixel($url, $id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'check_facebook_pixel' ) ) {
      $facebook_pixel = get_post_meta( $post_id, 'check_facebook_pixel', true );
      return $facebook_pixel;
    } else {
      $html = file_get_html('http://'.$url);
      if ($html) {
        if ( strpos($html->innertext, 'fbq(')!==false || strpos($html->innertext, 'https://connect.facebook.net')!==false) {
          $facebook_pixel_value = 'yes';
        } else {
          $facebook_pixel_value = 'no';
        }
        add_post_meta( $post_id, 'check_facebook_pixel', $facebook_pixel_value, true );
        $facebook_pixel = get_post_meta( $post_id, 'check_facebook_pixel', true );
        return $facebook_pixel;
      }
    }
  }
}

function check_yandex_metrika($url, $id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'check_yandex_metrika' ) ) {
      $yandex_metrika = get_post_meta( $post_id, 'check_yandex_metrika', true );
      return $yandex_metrika;
    } else {
      $html = file_get_html('http://'.$url);
      if ($html) {
        if ( strpos($html->innertext, 'mc.yandex.ru')!==false ) {
          $mc_value = 'yes';
        } else {
          $mc_value = 'no';
        }
        add_post_meta( $post_id, 'check_yandex_metrika', $mc_value, true );
        $yandex_metrika = get_post_meta( $post_id, 'check_yandex_metrika', true );
        return $yandex_metrika;
      }
    }
  }
}

//Reviews
//Tech 
function tech_rating($id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'site_tech_rating' ) ) {
      $tech_rating = get_post_meta( $post_id, 'site_tech_rating', true );
      return $tech_rating;
    } else {
      $rand_tech_rating = mt_rand(70, 90);
      add_post_meta( $post_id, 'site_tech_rating', $rand_tech_rating, true );
      $tech_rating = get_post_meta( $post_id, 'site_tech_rating', true );
      return $tech_rating;
    }
  }
}

//Inner 
function inner_rating($id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'site_inner_rating' ) ) {
      $inner_rating = get_post_meta( $post_id, 'site_inner_rating', true );
      return $inner_rating;
    } else {
      $rand_inner_rating = mt_rand(70, 90);
      add_post_meta( $post_id, 'site_inner_rating', $rand_inner_rating, true );
      $inner_rating = get_post_meta( $post_id, 'site_inner_rating', true );
      return $inner_rating;
    }
  }
}

//Out 
function out_rating($id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'site_out_rating' ) ) {
      $out_rating = get_post_meta( $post_id, 'site_out_rating', true );
      return $out_rating;
    } else {
      $rand_out_rating = mt_rand(70, 90);
      add_post_meta( $post_id, 'site_out_rating', $rand_out_rating, true );
      $out_rating = get_post_meta( $post_id, 'site_out_rating', true );
      return $out_rating;
    }
  }
}

//common 
function common_rating($id) {
  $tr_array_id = array();
  $tr_ids = pll_get_post_translations($id);
  foreach ($tr_ids as $tr_id) {
    array_push($tr_array_id, $tr_id);
  }
  foreach ($tr_array_id as $post_id) {
    if ( metadata_exists( 'post', $post_id, 'site_common_rating' ) ) {
      $common_rating = get_post_meta( $post_id, 'site_common_rating', true );
      return $common_rating;
    } else {
      $rand_common_rating = mt_rand(70, 90);
      add_post_meta( $post_id, 'site_common_rating', $rand_common_rating, true );
      $common_rating = get_post_meta( $post_id, 'site_common_rating', true );
      return $common_rating;
    }
  }
}