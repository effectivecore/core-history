<?php

namespace effectivecore { # cache for settings--events

  cache_factory::$data['settings--events']['core'] = new \stdClass();
  cache_factory::$data['settings--events']['core']->on_form_init['installation'] = new \stdClass();
  cache_factory::$data['settings--events']['core']->on_form_init['installation']->for = 'installation';
  cache_factory::$data['settings--events']['core']->on_form_init['installation']->handler = '\\effectivecore\\modules\\core\\events_form::on_init_installation';
  cache_factory::$data['settings--events']['core']->on_form_init['installation']->weight = 0;
  cache_factory::$data['settings--events']['core']->on_form_validate['installation'] = new \stdClass();
  cache_factory::$data['settings--events']['core']->on_form_validate['installation']->for = 'installation';
  cache_factory::$data['settings--events']['core']->on_form_validate['installation']->handler = '\\effectivecore\\modules\\core\\events_form::on_validate_installation';
  cache_factory::$data['settings--events']['core']->on_form_validate['installation']->weight = 0;
  cache_factory::$data['settings--events']['core']->on_form_submit['installation'] = new \stdClass();
  cache_factory::$data['settings--events']['core']->on_form_submit['installation']->for = 'installation';
  cache_factory::$data['settings--events']['core']->on_form_submit['installation']->handler = '\\effectivecore\\modules\\core\\events_form::on_submit_installation';
  cache_factory::$data['settings--events']['core']->on_form_submit['installation']->weight = 0;
  cache_factory::$data['settings--events']['develop'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_module_start['develop'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_module_start['develop']->for = 'develop';
  cache_factory::$data['settings--events']['develop']->on_module_start['develop']->handler = '\\effectivecore\\modules\\develop\\events_module::on_start';
  cache_factory::$data['settings--events']['develop']->on_module_start['develop']->weight = 0;
  cache_factory::$data['settings--events']['develop']->on_module_install['develop'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_module_install['develop']->for = 'develop';
  cache_factory::$data['settings--events']['develop']->on_module_install['develop']->handler = '\\effectivecore\\modules\\develop\\events_module::on_install';
  cache_factory::$data['settings--events']['develop']->on_module_install['develop']->weight = 0;
  cache_factory::$data['settings--events']['develop']->on_form_init['demo'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_form_init['demo']->for = 'demo';
  cache_factory::$data['settings--events']['develop']->on_form_init['demo']->handler = '\\effectivecore\\modules\\develop\\events_form::on_init_demo';
  cache_factory::$data['settings--events']['develop']->on_form_init['demo']->weight = 0;
  cache_factory::$data['settings--events']['develop']->on_form_validate['demo'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_form_validate['demo']->for = 'demo';
  cache_factory::$data['settings--events']['develop']->on_form_validate['demo']->handler = '\\effectivecore\\modules\\develop\\events_form::on_validate_demo';
  cache_factory::$data['settings--events']['develop']->on_form_validate['demo']->weight = 0;
  cache_factory::$data['settings--events']['develop']->on_form_submit['demo'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_form_submit['demo']->for = 'demo';
  cache_factory::$data['settings--events']['develop']->on_form_submit['demo']->handler = '\\effectivecore\\modules\\develop\\events_form::on_submit_demo';
  cache_factory::$data['settings--events']['develop']->on_form_submit['demo']->weight = 0;
  cache_factory::$data['settings--events']['page'] = new \stdClass();
  cache_factory::$data['settings--events']['page']->on_module_start['page'] = new \stdClass();
  cache_factory::$data['settings--events']['page']->on_module_start['page']->for = 'page';
  cache_factory::$data['settings--events']['page']->on_module_start['page']->handler = '\\effectivecore\\modules\\page\\events_module::on_start';
  cache_factory::$data['settings--events']['page']->on_module_start['page']->weight = 0;
  cache_factory::$data['settings--events']['page']->on_form_init['decoration'] = new \stdClass();
  cache_factory::$data['settings--events']['page']->on_form_init['decoration']->for = 'decoration';
  cache_factory::$data['settings--events']['page']->on_form_init['decoration']->handler = '\\effectivecore\\modules\\page\\events_form::on_init_decoration';
  cache_factory::$data['settings--events']['page']->on_form_init['decoration']->weight = 0;
  cache_factory::$data['settings--events']['page']->on_form_validate['decoration'] = new \stdClass();
  cache_factory::$data['settings--events']['page']->on_form_validate['decoration']->for = 'decoration';
  cache_factory::$data['settings--events']['page']->on_form_validate['decoration']->handler = '\\effectivecore\\modules\\page\\events_form::on_validate_decoration';
  cache_factory::$data['settings--events']['page']->on_form_validate['decoration']->weight = 0;
  cache_factory::$data['settings--events']['page']->on_form_submit['decoration'] = new \stdClass();
  cache_factory::$data['settings--events']['page']->on_form_submit['decoration']->for = 'decoration';
  cache_factory::$data['settings--events']['page']->on_form_submit['decoration']->handler = '\\effectivecore\\modules\\page\\events_form::on_submit_decoration';
  cache_factory::$data['settings--events']['page']->on_form_submit['decoration']->weight = 0;
  cache_factory::$data['settings--events']['storage'] = new \stdClass();
  cache_factory::$data['settings--events']['storage']->on_storage_init_before['pdo'] = new \stdClass();
  cache_factory::$data['settings--events']['storage']->on_storage_init_before['pdo']->for = 'pdo';
  cache_factory::$data['settings--events']['storage']->on_storage_init_before['pdo']->handler = '\\effectivecore\\modules\\storage\\events_storage::on_storage_init_before';
  cache_factory::$data['settings--events']['storage']->on_storage_init_before['pdo']->weight = 0;
  cache_factory::$data['settings--events']['storage']->on_storage_init_after['pdo'] = new \stdClass();
  cache_factory::$data['settings--events']['storage']->on_storage_init_after['pdo']->for = 'pdo';
  cache_factory::$data['settings--events']['storage']->on_storage_init_after['pdo']->handler = '\\effectivecore\\modules\\storage\\events_storage::on_storage_init_after';
  cache_factory::$data['settings--events']['storage']->on_storage_init_after['pdo']->weight = 0;
  cache_factory::$data['settings--events']['storage']->on_query_before['pdo'] = new \stdClass();
  cache_factory::$data['settings--events']['storage']->on_query_before['pdo']->for = 'pdo';
  cache_factory::$data['settings--events']['storage']->on_query_before['pdo']->handler = '\\effectivecore\\modules\\storage\\events_storage::on_query_before';
  cache_factory::$data['settings--events']['storage']->on_query_before['pdo']->weight = 0;
  cache_factory::$data['settings--events']['storage']->on_query_after['pdo'] = new \stdClass();
  cache_factory::$data['settings--events']['storage']->on_query_after['pdo']->for = 'pdo';
  cache_factory::$data['settings--events']['storage']->on_query_after['pdo']->handler = '\\effectivecore\\modules\\storage\\events_storage::on_query_after';
  cache_factory::$data['settings--events']['storage']->on_query_after['pdo']->weight = 0;
  cache_factory::$data['settings--events']['tree'] = new \stdClass();
  cache_factory::$data['settings--events']['tree']->on_module_start['tree'] = new \stdClass();
  cache_factory::$data['settings--events']['tree']->on_module_start['tree']->for = 'tree';
  cache_factory::$data['settings--events']['tree']->on_module_start['tree']->handler = '\\effectivecore\\modules\\tree\\events_module::on_start';
  cache_factory::$data['settings--events']['tree']->on_module_start['tree']->weight = -100;
  cache_factory::$data['settings--events']['tree']->on_module_install['tree'] = new \stdClass();
  cache_factory::$data['settings--events']['tree']->on_module_install['tree']->for = 'tree';
  cache_factory::$data['settings--events']['tree']->on_module_install['tree']->handler = '\\effectivecore\\modules\\tree\\events_module::on_install';
  cache_factory::$data['settings--events']['tree']->on_module_install['tree']->weight = 0;
  cache_factory::$data['settings--events']['user'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_module_start['user'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_module_start['user']->for = 'user';
  cache_factory::$data['settings--events']['user']->on_module_start['user']->handler = '\\effectivecore\\modules\\user\\events_module::on_start';
  cache_factory::$data['settings--events']['user']->on_module_start['user']->weight = -80;
  cache_factory::$data['settings--events']['user']->on_module_install['user'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_module_install['user']->for = 'user';
  cache_factory::$data['settings--events']['user']->on_module_install['user']->handler = '\\effectivecore\\modules\\user\\events_module::on_install';
  cache_factory::$data['settings--events']['user']->on_module_install['user']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_init['login'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_init['login']->for = 'login';
  cache_factory::$data['settings--events']['user']->on_form_init['login']->handler = '\\effectivecore\\modules\\user\\events_form::on_init_login';
  cache_factory::$data['settings--events']['user']->on_form_init['login']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_init['user_edit'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_init['user_edit']->for = 'user_edit';
  cache_factory::$data['settings--events']['user']->on_form_init['user_edit']->handler = '\\effectivecore\\modules\\user\\events_form::on_init_user_edit';
  cache_factory::$data['settings--events']['user']->on_form_init['user_edit']->weight = 1;
  cache_factory::$data['settings--events']['user']->on_form_validate['login'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_validate['login']->for = 'login';
  cache_factory::$data['settings--events']['user']->on_form_validate['login']->handler = '\\effectivecore\\modules\\user\\events_form::on_validate_login';
  cache_factory::$data['settings--events']['user']->on_form_validate['login']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_validate['user_edit'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_validate['user_edit']->for = 'user_edit';
  cache_factory::$data['settings--events']['user']->on_form_validate['user_edit']->handler = '\\effectivecore\\modules\\user\\events_form::on_validate_user_edit';
  cache_factory::$data['settings--events']['user']->on_form_validate['user_edit']->weight = 1;
  cache_factory::$data['settings--events']['user']->on_form_validate['registration'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_validate['registration']->for = 'registration';
  cache_factory::$data['settings--events']['user']->on_form_validate['registration']->handler = '\\effectivecore\\modules\\user\\events_form::on_validate_registration';
  cache_factory::$data['settings--events']['user']->on_form_validate['registration']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_submit['login'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_submit['login']->for = 'login';
  cache_factory::$data['settings--events']['user']->on_form_submit['login']->handler = '\\effectivecore\\modules\\user\\events_form::on_submit_login';
  cache_factory::$data['settings--events']['user']->on_form_submit['login']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_submit['logout'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_submit['logout']->for = 'logout';
  cache_factory::$data['settings--events']['user']->on_form_submit['logout']->handler = '\\effectivecore\\modules\\user\\events_form::on_submit_logout';
  cache_factory::$data['settings--events']['user']->on_form_submit['logout']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_submit['user_delete'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_submit['user_delete']->for = 'user_delete';
  cache_factory::$data['settings--events']['user']->on_form_submit['user_delete']->handler = '\\effectivecore\\modules\\user\\events_form::on_submit_user_delete';
  cache_factory::$data['settings--events']['user']->on_form_submit['user_delete']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_submit['user_edit'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_submit['user_edit']->for = 'user_edit';
  cache_factory::$data['settings--events']['user']->on_form_submit['user_edit']->handler = '\\effectivecore\\modules\\user\\events_form::on_submit_user_edit';
  cache_factory::$data['settings--events']['user']->on_form_submit['user_edit']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_submit['registration'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_submit['registration']->for = 'registration';
  cache_factory::$data['settings--events']['user']->on_form_submit['registration']->handler = '\\effectivecore\\modules\\user\\events_form::on_submit_registration';
  cache_factory::$data['settings--events']['user']->on_form_submit['registration']->weight = 0;

}