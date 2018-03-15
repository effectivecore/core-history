<?php

namespace effcore { # cache for data--tabs_items

  cache::$data['data--tabs_items']['core']['entity_select'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['core']['entity_select']->id = 'entity_select';
  cache::$data['data--tabs_items']['core']['entity_select']->id_parent = 'entity';
  cache::$data['data--tabs_items']['core']['entity_select']->parent_is_tab = true;
  cache::$data['data--tabs_items']['core']['entity_select']->title = 'Select';
  cache::$data['data--tabs_items']['core']['entity_select']->attributes['href'] = 'select';
  cache::$data['data--tabs_items']['core']['entity_select']->attributes['class']['select'] = 'select';
  cache::$data['data--tabs_items']['core']['entity_insert'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['core']['entity_insert']->id = 'entity_insert';
  cache::$data['data--tabs_items']['core']['entity_insert']->id_parent = 'entity';
  cache::$data['data--tabs_items']['core']['entity_insert']->parent_is_tab = true;
  cache::$data['data--tabs_items']['core']['entity_insert']->title = 'Insert';
  cache::$data['data--tabs_items']['core']['entity_insert']->attributes['href'] = 'insert';
  cache::$data['data--tabs_items']['core']['entity_insert']->attributes['class']['insert'] = 'insert';
  cache::$data['data--tabs_items']['core']['entity_update'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['core']['entity_update']->id = 'entity_update';
  cache::$data['data--tabs_items']['core']['entity_update']->id_parent = 'entity';
  cache::$data['data--tabs_items']['core']['entity_update']->parent_is_tab = true;
  cache::$data['data--tabs_items']['core']['entity_update']->title = 'Update';
  cache::$data['data--tabs_items']['core']['entity_update']->attributes['href'] = 'update';
  cache::$data['data--tabs_items']['core']['entity_update']->attributes['class']['update'] = 'update';
  cache::$data['data--tabs_items']['core']['entity_delete'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['core']['entity_delete']->id = 'entity_delete';
  cache::$data['data--tabs_items']['core']['entity_delete']->id_parent = 'entity';
  cache::$data['data--tabs_items']['core']['entity_delete']->parent_is_tab = true;
  cache::$data['data--tabs_items']['core']['entity_delete']->title = 'Delete';
  cache::$data['data--tabs_items']['core']['entity_delete']->attributes['href'] = 'delete';
  cache::$data['data--tabs_items']['core']['entity_delete']->attributes['class']['delete'] = 'delete';

}