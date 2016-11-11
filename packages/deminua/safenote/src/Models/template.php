<?php

/**
 * @file
 * template.php
 */

/**
 * Preprocess function for node.tpl.php
 */
function babenko_preprocess_node(&$vars) {
    $vars['submitted'] = $vars['date'];

  if ($vars['node']->type == 'article') {
    $image_path = @file_create_url($vars['node']->field_avatar['und'][0]['uri']);
    $element = array(
      '#tag' => 'meta',
      '#attributes' => array(
        "property" => "og:image:url",
        "content" => $image_path,
      ),
    );
    drupal_add_html_head($element,'facebook_share_image');
  }


    /*
    if($vars['view_mode'] == 'teaser') {
        $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';
        $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->nid . '__teaser';
    }*/

}

function babenko_preprocess_page(&$variables) {
    drupal_add_js(drupal_get_path('theme', 'babenko') .'/javascripts/babenko.js', array('type' => 'file', 'scope' => 'footer'));
    #drupal_add_js(drupal_get_path('theme', 'MYTHEME') .'/mytheme.js', 'file');
}


function babenko_preprocess_field(&$variables, $hook) {
    $element = $variables['element'];
    if (isset($element['#field_name'])) {
        if ($element['#field_name'] == 'field_image') {

            foreach($variables['items'] as $key => $item){
                $variables['items'][$key]['#item']['alt'] = $variables['items'][$key]['#item']['title'];

                $variables['items'][$key]['#path']['options']['attributes']['data-lightbox'] = 'gallery';
                $variables['items'][$key]['#path']['options']['attributes']['data-title'] = $variables['items'][$key]['#item']['title'];
                $variables['items'][$key]['#path']['options']['attributes']['class'] = 'thumbnail';
            }
        }

      if ($element['#field_name'] == 'field_avatar' AND $element['#view_mode'] == 'full') {

        foreach($variables['items'] as $key => $item){
          $variables['items'][$key]['#item']['alt'] = $variables['items'][$key]['#item']['title'];

          $variables['items'][$key]['#path']['options']['attributes']['data-lightbox'] = 'gallery';
          $variables['items'][$key]['#path']['options']['attributes']['data-title'] = $variables['items'][$key]['#item']['title'];
        }
      }

    }
}






/*
function babenko_node_view($node, $view_mode) {
    if ($node->type=="assignment"){
        if ($view_mode == 'full'){
            $node->content['my_extra_content'] = array(
                "#markup"=> '<div>My extra content!</div>',
                "#weight"=> 100
            );
        }
        return $node;
    }
}


function babenko_node_view($node, $view_mode, $langcode) {
    $node->content ['my_additional_field'] = array(
        '#markup' => $additional_field,
        '#weight' => 10,
        '#theme' => 'mymodule_my_additional_field',
    );
}
*/

/*
function babenko_node_view($node, $view_mode, $langcode) {

    $node->content['links']['fb'] = array(
        '#links' => array(
            array(
                'title' => '<img src="/images/icfbk.jpg"/>',
                'html' => TRUE,
                'href' => 'http://www.facebook.com/dialog/feed',
            ),
        ),
    );

    return $node;
}
*/
