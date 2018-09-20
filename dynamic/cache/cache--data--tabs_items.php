<?php

namespace effcore { # cache for data--tabs_items

  cache::$data['data--tabs_items']['storage']['select'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['select']->id = 'instance_select';
  cache::$data['data--tabs_items']['storage']['select']->id_parent = 'T:instance_manage';
  cache::$data['data--tabs_items']['storage']['select']->title = 'Select';
  cache::$data['data--tabs_items']['storage']['select']->action_name = 'select';
  cache::$data['data--tabs_items']['storage']['select']->attributes['class']['select'] = 'select';
  cache::$data['data--tabs_items']['storage']['select']->weight = 100;
  cache::$data['data--tabs_items']['storage']['insert'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['insert']->id = 'instance_insert';
  cache::$data['data--tabs_items']['storage']['insert']->id_parent = 'T:instance_manage';
  cache::$data['data--tabs_items']['storage']['insert']->title = 'Insert';
  cache::$data['data--tabs_items']['storage']['insert']->action_name = 'insert';
  cache::$data['data--tabs_items']['storage']['insert']->attributes['class']['insert'] = 'insert';
  cache::$data['data--tabs_items']['storage']['update'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['update']->id = 'instance_update';
  cache::$data['data--tabs_items']['storage']['update']->id_parent = 'T:instance_manage';
  cache::$data['data--tabs_items']['storage']['update']->title = 'Update';
  cache::$data['data--tabs_items']['storage']['update']->action_name = 'update';
  cache::$data['data--tabs_items']['storage']['update']->attributes['class']['update'] = 'update';
  cache::$data['data--tabs_items']['storage']['delete'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['delete']->id = 'instance_delete';
  cache::$data['data--tabs_items']['storage']['delete']->id_parent = 'T:instance_manage';
  cache::$data['data--tabs_items']['storage']['delete']->title = 'Delete';
  cache::$data['data--tabs_items']['storage']['delete']->action_name = 'delete';
  cache::$data['data--tabs_items']['storage']['delete']->attributes['class']['delete'] = 'delete';
  cache::$data['data--tabs_items']['demo']['demo_item_1'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['demo']['demo_item_1']->id = 'demo_item_1';
  cache::$data['data--tabs_items']['demo']['demo_item_1']->id_parent = 'T:demo';
  cache::$data['data--tabs_items']['demo']['demo_item_1']->title = 'item #1';
  cache::$data['data--tabs_items']['demo']['demo_item_1']->action_name = 'item_1';
  cache::$data['data--tabs_items']['demo']['demo_item_1']->action_name_default = 'item_1/item_1_1';
  cache::$data['data--tabs_items']['demo']['demo_item_1']->attributes['class']['demo-item-1'] = 'demo-item-1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_1'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['demo']['demo_item_1_1']->id = 'demo_item_1_1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_1']->id_parent = 'demo_item_1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_1']->title = 'item #1.1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_1']->action_name = 'item_1/item_1_1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_1']->attributes['class']['demo-item-1-1'] = 'demo-item-1-1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['demo']['demo_item_1_2']->id = 'demo_item_1_2';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2']->id_parent = 'demo_item_1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2']->title = 'item #1.2';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2']->action_name = 'item_1/item_1_2';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2']->attributes['class']['demo-item-1-2'] = 'demo-item-1-2';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_1'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_1']->id = 'demo_item_1_2_1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_1']->id_parent = 'demo_item_1_2';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_1']->title = 'item #1.2.1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_1']->action_name = 'item_1/item_1_2/item_1_2_1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_1']->attributes['class']['demo-item-1-2-1'] = 'demo-item-1-2-1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_2'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_2']->id = 'demo_item_1_2_2';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_2']->id_parent = 'demo_item_1_2';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_2']->title = 'item #1.2.2';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_2']->action_name = 'item_1/item_1_2/item_1_2_2';
  cache::$data['data--tabs_items']['demo']['demo_item_1_2_2']->attributes['class']['demo-item-1-2-2'] = 'demo-item-1-2-2';
  cache::$data['data--tabs_items']['demo']['demo_item_1_3'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['demo']['demo_item_1_3']->id = 'demo_item_1_3';
  cache::$data['data--tabs_items']['demo']['demo_item_1_3']->id_parent = 'demo_item_1';
  cache::$data['data--tabs_items']['demo']['demo_item_1_3']->title = 'item #1.3';
  cache::$data['data--tabs_items']['demo']['demo_item_1_3']->action_name = 'item_1/item_1_3';
  cache::$data['data--tabs_items']['demo']['demo_item_1_3']->attributes['class']['demo-item-1-3'] = 'demo-item-1-3';
  cache::$data['data--tabs_items']['demo']['demo_item_2'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['demo']['demo_item_2']->id = 'demo_item_2';
  cache::$data['data--tabs_items']['demo']['demo_item_2']->id_parent = 'T:demo';
  cache::$data['data--tabs_items']['demo']['demo_item_2']->title = 'item #2';
  cache::$data['data--tabs_items']['demo']['demo_item_2']->action_name = 'item_2';
  cache::$data['data--tabs_items']['demo']['demo_item_2']->attributes['class']['demo-item-2'] = 'demo-item-2';
  cache::$data['data--tabs_items']['develop']['class'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['develop']['class']->id = 'structures_class';
  cache::$data['data--tabs_items']['develop']['class']->id_parent = 'T:structures';
  cache::$data['data--tabs_items']['develop']['class']->title = 'Classes';
  cache::$data['data--tabs_items']['develop']['class']->action_name = 'class';
  cache::$data['data--tabs_items']['develop']['class']->action_name_default = 'class/list';
  cache::$data['data--tabs_items']['develop']['class']->attributes['class']['class'] = 'class';
  cache::$data['data--tabs_items']['develop']['class_list'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['develop']['class_list']->id = 'structures_class_list';
  cache::$data['data--tabs_items']['develop']['class_list']->id_parent = 'structures_class';
  cache::$data['data--tabs_items']['develop']['class_list']->title = 'List';
  cache::$data['data--tabs_items']['develop']['class_list']->action_name = 'class/list';
  cache::$data['data--tabs_items']['develop']['class_list']->attributes['class']['list'] = 'list';
  cache::$data['data--tabs_items']['develop']['class_diagram'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['develop']['class_diagram']->id = 'structures_class_diagram';
  cache::$data['data--tabs_items']['develop']['class_diagram']->id_parent = 'structures_class';
  cache::$data['data--tabs_items']['develop']['class_diagram']->title = 'Diagram';
  cache::$data['data--tabs_items']['develop']['class_diagram']->action_name = 'class/diagram';
  cache::$data['data--tabs_items']['develop']['class_diagram']->attributes['class']['diagram'] = 'diagram';
  cache::$data['data--tabs_items']['develop']['interface'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['develop']['interface']->id = 'structures_interface';
  cache::$data['data--tabs_items']['develop']['interface']->id_parent = 'T:structures';
  cache::$data['data--tabs_items']['develop']['interface']->title = 'Interfaces';
  cache::$data['data--tabs_items']['develop']['interface']->action_name = 'interface';
  cache::$data['data--tabs_items']['develop']['interface']->action_name_default = 'interface/list';
  cache::$data['data--tabs_items']['develop']['interface']->attributes['class']['interface'] = 'interface';
  cache::$data['data--tabs_items']['develop']['trait'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['develop']['trait']->id = 'structures_trait';
  cache::$data['data--tabs_items']['develop']['trait']->id_parent = 'T:structures';
  cache::$data['data--tabs_items']['develop']['trait']->title = 'Traits';
  cache::$data['data--tabs_items']['develop']['trait']->action_name = 'trait';
  cache::$data['data--tabs_items']['develop']['trait']->action_name_default = 'trait/list';
  cache::$data['data--tabs_items']['develop']['trait']->attributes['class']['trait'] = 'trait';

}