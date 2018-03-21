<?php

namespace effcore { # cache for data--tabs_items

  cache::$data['data--tabs_items']['develop']['list'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['develop']['list']->id = 'list';
  cache::$data['data--tabs_items']['develop']['list']->id_parent = 'classes';
  cache::$data['data--tabs_items']['develop']['list']->parent_is_tab = true;
  cache::$data['data--tabs_items']['develop']['list']->action_name = 'list';
  cache::$data['data--tabs_items']['develop']['list']->title = 'List';
  cache::$data['data--tabs_items']['develop']['list']->attributes['class']['list'] = 'list';
  cache::$data['data--tabs_items']['develop']['diagrams'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['develop']['diagrams']->id = 'diagrams';
  cache::$data['data--tabs_items']['develop']['diagrams']->id_parent = 'classes';
  cache::$data['data--tabs_items']['develop']['diagrams']->parent_is_tab = true;
  cache::$data['data--tabs_items']['develop']['diagrams']->action_name = 'diagrams';
  cache::$data['data--tabs_items']['develop']['diagrams']->title = 'Diagrams';
  cache::$data['data--tabs_items']['develop']['diagrams']->attributes['class']['diagrams'] = 'diagrams';
  cache::$data['data--tabs_items']['storage']['insert'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['insert']->id = 'insert';
  cache::$data['data--tabs_items']['storage']['insert']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['storage']['insert']->parent_is_tab = true;
  cache::$data['data--tabs_items']['storage']['insert']->action_name = 'insert';
  cache::$data['data--tabs_items']['storage']['insert']->title = 'Insert';
  cache::$data['data--tabs_items']['storage']['insert']->attributes['class']['insert'] = 'insert';
  cache::$data['data--tabs_items']['storage']['select'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['select']->id = 'select';
  cache::$data['data--tabs_items']['storage']['select']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['storage']['select']->parent_is_tab = true;
  cache::$data['data--tabs_items']['storage']['select']->action_name = 'select';
  cache::$data['data--tabs_items']['storage']['select']->title = 'Select';
  cache::$data['data--tabs_items']['storage']['select']->attributes['class']['select'] = 'select';
  cache::$data['data--tabs_items']['storage']['select']->weight = -10;
  cache::$data['data--tabs_items']['storage']['update'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['update']->id = 'update';
  cache::$data['data--tabs_items']['storage']['update']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['storage']['update']->parent_is_tab = true;
  cache::$data['data--tabs_items']['storage']['update']->action_name = 'update';
  cache::$data['data--tabs_items']['storage']['update']->title = 'Update';
  cache::$data['data--tabs_items']['storage']['update']->attributes['class']['update'] = 'update';
  cache::$data['data--tabs_items']['storage']['delete'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['delete']->id = 'delete';
  cache::$data['data--tabs_items']['storage']['delete']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['storage']['delete']->parent_is_tab = true;
  cache::$data['data--tabs_items']['storage']['delete']->action_name = 'delete';
  cache::$data['data--tabs_items']['storage']['delete']->title = 'Delete';
  cache::$data['data--tabs_items']['storage']['delete']->attributes['class']['delete'] = 'delete';

}