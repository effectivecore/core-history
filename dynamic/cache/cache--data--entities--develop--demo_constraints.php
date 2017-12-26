<?php

namespace effectivecore { # cache for data--entities--develop--demo_constraints

  cache::$data['data--entities--develop--demo_constraints'] = new \effectivecore\entity();
  cache::$data['data--entities--develop--demo_constraints']->name = 'demo_constraints';
  cache::$data['data--entities--develop--demo_constraints']->storage_id = 'main';
  cache::$data['data--entities--develop--demo_constraints']->fields = new \stdClass();
  cache::$data['data--entities--develop--demo_constraints']->fields->f_integer_1 = new \stdClass();
  cache::$data['data--entities--develop--demo_constraints']->fields->f_integer_1->type = 'integer';
  cache::$data['data--entities--develop--demo_constraints']->fields->f_integer_1->not_null = true;
  cache::$data['data--entities--develop--demo_constraints']->fields->f_integer_1->default = 0;
  cache::$data['data--entities--develop--demo_constraints']->fields->f_integer_2 = new \stdClass();
  cache::$data['data--entities--develop--demo_constraints']->fields->f_integer_2->type = 'integer';
  cache::$data['data--entities--develop--demo_constraints']->fields->f_integer_2->not_null = true;
  cache::$data['data--entities--develop--demo_constraints']->fields->f_integer_2->default = 0;
  cache::$data['data--entities--develop--demo_constraints']->constraints['key_f_integer_1'] = new \stdClass();
  cache::$data['data--entities--develop--demo_constraints']->constraints['key_f_integer_1']->type = 'primary key';
  cache::$data['data--entities--develop--demo_constraints']->constraints['key_f_integer_1']->fields['f_integer_1'] = 'f_integer_1';
  cache::$data['data--entities--develop--demo_constraints']->constraints['key_f_integer_2'] = new \stdClass();
  cache::$data['data--entities--develop--demo_constraints']->constraints['key_f_integer_2']->type = 'unique';
  cache::$data['data--entities--develop--demo_constraints']->constraints['key_f_integer_2']->fields['f_integer_2'] = 'f_integer_2';

}