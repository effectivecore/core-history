<?php

namespace effectivecore { # cache for data--data_demo

  cache::$data['data--data_demo']['develop'] = new \stdClass();
  cache::$data['data--data_demo']['develop']->demo_integer = 1;
  cache::$data['data--data_demo']['develop']->demo_float = 2.3;
  cache::$data['data--data_demo']['develop']->demo_boolean = true;
  cache::$data['data--data_demo']['develop']->demo_string_empty = '';
  cache::$data['data--data_demo']['develop']->demo_string = 'text';
  cache::$data['data--data_demo']['develop']->demo_string_text = new \effectivecore\text();
  cache::$data['data--data_demo']['develop']->demo_string_text->text = 'like code: new text(\'any text\') # translated by default';
  cache::$data['data--data_demo']['develop']->demo_array_empty = [];
  cache::$data['data--data_demo']['develop']->demo_array['item_1'] = 'item value #1';
  cache::$data['data--data_demo']['develop']->demo_array['item_2'] = 'item value #2';
  cache::$data['data--data_demo']['develop']->demo_array['item_3'] = 'item value #3';
  cache::$data['data--data_demo']['develop']->demo_array['item_5'] = 'item value #5 (insert + update)';
  cache::$data['data--data_demo']['develop']->demo_array['item_6'] = 'item value #6 (insert)';
  cache::$data['data--data_demo']['develop']->demo_object_empty = new \stdClass();
  cache::$data['data--data_demo']['develop']->demo_object = new \stdClass();
  cache::$data['data--data_demo']['develop']->demo_object->prop_1 = 'property value #1';
  cache::$data['data--data_demo']['develop']->demo_object->prop_2 = 'property value #2';
  cache::$data['data--data_demo']['develop']->demo_object->prop_3 = 'property value #3';
  cache::$data['data--data_demo']['develop']->demo_object->prop_5 = 'property value #5 (insert + update)';
  cache::$data['data--data_demo']['develop']->demo_object->prop_6 = 'property value #6 (insert)';
  cache::$data['data--data_demo']['develop']->demo_null = null;

}