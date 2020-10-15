<?php

  ##################################################################
  ### Copyright © 2017—2021 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore\modules\storage {
          use \effcore\block_preset;
          use \effcore\page;
          use \effcore\selection;
          use \effcore\tab_item;
          use \effcore\tabs;
          use \effcore\url;
          abstract class events_page {

  static function on_breadcrumbs_build_before($event, $breadcrumbs) {
    if (page::get_current()->id === 'instance_select' ||
        page::get_current()->id === 'instance_insert' ||
        page::get_current()->id === 'instance_update' ||
        page::get_current()->id === 'instance_delete') {
      $breadcrumbs->is_remove_last_link = false;
      $tab_data = tabs::select('data');
      $tab_data->build();
      foreach ($tab_data->children_select_recursive() as $c_child) {
        if ($c_child instanceof tab_item) {
          if ($c_child->is_active      () ||
              $c_child->is_active_trail()) {
            $breadcrumbs->link_insert(
              $c_child->id,
              $c_child->title,
              $c_child->href_default_get()
            );
          }
        }
      }
    }
  }

  static function on_breadcrumbs_build_after_apply_back_return($event, $breadcrumbs) {
    if (page::get_current()->id === 'instance_select' ||
        page::get_current()->id === 'instance_insert' ||
        page::get_current()->id === 'instance_update' ||
        page::get_current()->id === 'instance_delete') {
      $back_return_0 = page::get_current()->args_get('back_return_0');
      $back_return_n = page::get_current()->args_get('back_return_n');
      $rowids = array_keys($breadcrumbs->link_select_all());
      $rowid_last = array_pop($rowids);
      if ($rowid_last) {
        $breadcrumbs->link_update($rowid_last,                         null,
          $back_return_0 ?: (url::back_url_get() ?: ($back_return_n ?: null))
        );
      }
    }
  }

  static function on_block_presets_dynamic_build($event, $id = null) {
    if ($id === null                                       ) {foreach (selection::get_all('sql') as $c_item)       block_preset::insert('selection_sql_'.$c_item->id, 'Selections', $c_item->title ?: 'NO TITLE', [ /* no areas */ ], /* display = */ null, 'code', '\\effcore\\modules\\storage\\events_page::block_selection_sql', [ /* no properties */ ], ['id' => $c_item->id], 0, 'storage');}
    if ($id !== null && strpos($id, 'selection_sql_') === 0) {$c_item__id = substr($id, strlen('selection_sql_')); block_preset::insert('selection_sql_'.$c_item__id, 'Selections',                   'NO TITLE', [ /* no areas */ ], /* display = */ null, 'code', '\\effcore\\modules\\storage\\events_page::block_selection_sql', [ /* no properties */ ], ['id' => $c_item__id], 0, 'storage');}
  }

  static function block_selection_sql($page, $args) {
    if (!empty($args['id'])) {
      return selection::get($args['id']);
    }
  }

}}