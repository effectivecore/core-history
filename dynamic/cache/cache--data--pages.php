<?php

namespace effcore { # cache for data--pages

  cache::$data['data--pages']['user']['user_edit'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['user_edit']->cache_name = 'data--pages-user-user_edit';
  cache::$data['data--pages']['user']['user_edit']->display = new \stdClass();
  cache::$data['data--pages']['user']['user_edit']->display->check = 'url';
  cache::$data['data--pages']['user']['user_edit']->display->where = 'path';
  cache::$data['data--pages']['user']['user_edit']->display->match = '%^/user/(?<id_user>[0-9]+)/edit$%';
  cache::$data['data--pages']['user']['user_edit']->access = new \stdClass();
  cache::$data['data--pages']['user']['user_edit']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['user_edit']->access->roles['registered'] = 'registered';
  cache::$data['data--pages']['user']['user_delete'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['user_delete']->cache_name = 'data--pages-user-user_delete';
  cache::$data['data--pages']['user']['user_delete']->display = new \stdClass();
  cache::$data['data--pages']['user']['user_delete']->display->check = 'url';
  cache::$data['data--pages']['user']['user_delete']->display->where = 'path';
  cache::$data['data--pages']['user']['user_delete']->display->match = '%^/manage/users/delete/(?<id_user>[0-9]+)$%';
  cache::$data['data--pages']['user']['user_delete']->access = new \stdClass();
  cache::$data['data--pages']['user']['user_delete']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['user'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['user']->cache_name = 'data--pages-user-user';
  cache::$data['data--pages']['user']['user']->display = new \stdClass();
  cache::$data['data--pages']['user']['user']->display->check = 'url';
  cache::$data['data--pages']['user']['user']->display->where = 'path';
  cache::$data['data--pages']['user']['user']->display->match = '%^/user/(?<id_user>[0-9]+)$%';
  cache::$data['data--pages']['user']['user']->access = new \stdClass();
  cache::$data['data--pages']['user']['user']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['user']->access->roles['registered'] = 'registered';
  cache::$data['data--pages']['user']['registration'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['registration']->cache_name = 'data--pages-user-registration';
  cache::$data['data--pages']['user']['registration']->display = new \stdClass();
  cache::$data['data--pages']['user']['registration']->display->check = 'url';
  cache::$data['data--pages']['user']['registration']->display->where = 'path';
  cache::$data['data--pages']['user']['registration']->display->match = '%^/user/registration$%';
  cache::$data['data--pages']['user']['registration']->access = new \stdClass();
  cache::$data['data--pages']['user']['registration']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages']['user']['logout'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['logout']->cache_name = 'data--pages-user-logout';
  cache::$data['data--pages']['user']['logout']->display = new \stdClass();
  cache::$data['data--pages']['user']['logout']->display->check = 'url';
  cache::$data['data--pages']['user']['logout']->display->where = 'path';
  cache::$data['data--pages']['user']['logout']->display->match = '%^/user/logout$%';
  cache::$data['data--pages']['user']['logout']->access = new \stdClass();
  cache::$data['data--pages']['user']['logout']->access->roles['registered'] = 'registered';
  cache::$data['data--pages']['user']['login'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['login']->cache_name = 'data--pages-user-login';
  cache::$data['data--pages']['user']['login']->display = new \stdClass();
  cache::$data['data--pages']['user']['login']->display->check = 'url';
  cache::$data['data--pages']['user']['login']->display->where = 'path';
  cache::$data['data--pages']['user']['login']->display->match = '%^/user/login$%';
  cache::$data['data--pages']['user']['login']->access = new \stdClass();
  cache::$data['data--pages']['user']['login']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages']['storage']['instance_select_multiple_by_entity_name'] = new \effcore\external_cache();
  cache::$data['data--pages']['storage']['instance_select_multiple_by_entity_name']->cache_name = 'data--pages-storage-instance_select_multiple_by_entity_name';
  cache::$data['data--pages']['storage']['instance_select_multiple_by_entity_name']->display = new \stdClass();
  cache::$data['data--pages']['storage']['instance_select_multiple_by_entity_name']->display->check = 'url';
  cache::$data['data--pages']['storage']['instance_select_multiple_by_entity_name']->display->where = 'path';
  cache::$data['data--pages']['storage']['instance_select_multiple_by_entity_name']->display->match = '%^(?<base>/manage/instances)/(?<action>select)/(?<entity_name>[a-z0-9_]+)$%';
  cache::$data['data--pages']['storage']['instance_select_multiple_by_entity_name']->access = new \stdClass();
  cache::$data['data--pages']['storage']['instance_select_multiple_by_entity_name']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['storage']['instance_redirect_to_select'] = new \effcore\external_cache();
  cache::$data['data--pages']['storage']['instance_redirect_to_select']->cache_name = 'data--pages-storage-instance_redirect_to_select';
  cache::$data['data--pages']['storage']['instance_redirect_to_select']->display = new \stdClass();
  cache::$data['data--pages']['storage']['instance_redirect_to_select']->display->check = 'url';
  cache::$data['data--pages']['storage']['instance_redirect_to_select']->display->where = 'path';
  cache::$data['data--pages']['storage']['instance_redirect_to_select']->display->match = '%^(?<base>/manage/instances)/(?<action>select)$%';
  cache::$data['data--pages']['storage']['instance_redirect_to_select']->access = new \stdClass();
  cache::$data['data--pages']['storage']['instance_redirect_to_select']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['storage']['instance_redirect_to_insert'] = new \effcore\external_cache();
  cache::$data['data--pages']['storage']['instance_redirect_to_insert']->cache_name = 'data--pages-storage-instance_redirect_to_insert';
  cache::$data['data--pages']['storage']['instance_redirect_to_insert']->display = new \stdClass();
  cache::$data['data--pages']['storage']['instance_redirect_to_insert']->display->check = 'url';
  cache::$data['data--pages']['storage']['instance_redirect_to_insert']->display->where = 'path';
  cache::$data['data--pages']['storage']['instance_redirect_to_insert']->display->match = '%^(?<base>/manage/instances)/(?<action>insert)$%';
  cache::$data['data--pages']['storage']['instance_redirect_to_insert']->access = new \stdClass();
  cache::$data['data--pages']['storage']['instance_redirect_to_insert']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['storage']['instance_insert_by_entity_name'] = new \effcore\external_cache();
  cache::$data['data--pages']['storage']['instance_insert_by_entity_name']->cache_name = 'data--pages-storage-instance_insert_by_entity_name';
  cache::$data['data--pages']['storage']['instance_insert_by_entity_name']->display = new \stdClass();
  cache::$data['data--pages']['storage']['instance_insert_by_entity_name']->display->check = 'url';
  cache::$data['data--pages']['storage']['instance_insert_by_entity_name']->display->where = 'path';
  cache::$data['data--pages']['storage']['instance_insert_by_entity_name']->display->match = '%^(?<base>/manage/instances)/(?<action>insert)/(?<entity_name>[a-z0-9_]+)$%';
  cache::$data['data--pages']['storage']['instance_insert_by_entity_name']->access = new \stdClass();
  cache::$data['data--pages']['storage']['instance_insert_by_entity_name']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['page']['decoration'] = new \effcore\external_cache();
  cache::$data['data--pages']['page']['decoration']->cache_name = 'data--pages-page-decoration';
  cache::$data['data--pages']['page']['decoration']->display = new \stdClass();
  cache::$data['data--pages']['page']['decoration']->display->check = 'url';
  cache::$data['data--pages']['page']['decoration']->display->where = 'path';
  cache::$data['data--pages']['page']['decoration']->display->match = '%^/manage/decoration$%';
  cache::$data['data--pages']['page']['decoration']->access = new \stdClass();
  cache::$data['data--pages']['page']['decoration']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['menu']['trees'] = new \effcore\external_cache();
  cache::$data['data--pages']['menu']['trees']->cache_name = 'data--pages-menu-trees';
  cache::$data['data--pages']['menu']['trees']->display = new \stdClass();
  cache::$data['data--pages']['menu']['trees']->display->check = 'url';
  cache::$data['data--pages']['menu']['trees']->display->where = 'path';
  cache::$data['data--pages']['menu']['trees']->display->match = '%^(?<base>/manage/trees)/(?<action>[a-z]+)(/(?<id>[a-z_]+)|)$%';
  cache::$data['data--pages']['menu']['trees']->access = new \stdClass();
  cache::$data['data--pages']['menu']['trees']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['test']['tests'] = new \effcore\external_cache();
  cache::$data['data--pages']['test']['tests']->cache_name = 'data--pages-test-tests';
  cache::$data['data--pages']['test']['tests']->display = new \stdClass();
  cache::$data['data--pages']['test']['tests']->display->check = 'url';
  cache::$data['data--pages']['test']['tests']->display->where = 'path';
  cache::$data['data--pages']['test']['tests']->display->match = '%^/develop/tests$%';
  cache::$data['data--pages']['test']['tests']->access = new \stdClass();
  cache::$data['data--pages']['test']['tests']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['demo']['demo'] = new \effcore\external_cache();
  cache::$data['data--pages']['demo']['demo']->cache_name = 'data--pages-demo-demo';
  cache::$data['data--pages']['demo']['demo']->display = new \stdClass();
  cache::$data['data--pages']['demo']['demo']->display->check = 'url';
  cache::$data['data--pages']['demo']['demo']->display->where = 'path';
  cache::$data['data--pages']['demo']['demo']->display->match = '%^(?<base>/develop/demo)(/(?<tabs>[a-z0-9_/]+)|)$%';
  cache::$data['data--pages']['demo']['demo']->access = new \stdClass();
  cache::$data['data--pages']['demo']['demo']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['develop']['structures'] = new \effcore\external_cache();
  cache::$data['data--pages']['develop']['structures']->cache_name = 'data--pages-develop-structures';
  cache::$data['data--pages']['develop']['structures']->display = new \stdClass();
  cache::$data['data--pages']['develop']['structures']->display->check = 'url';
  cache::$data['data--pages']['develop']['structures']->display->where = 'path';
  cache::$data['data--pages']['develop']['structures']->display->match = '%^(?<base>/develop/structures)/(?<type>class|interface|trait)/(?<view>list|diagram|diagram_export)$%';
  cache::$data['data--pages']['develop']['structures']->access = new \stdClass();
  cache::$data['data--pages']['develop']['structures']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['develop']['php_mod_usage'] = new \effcore\external_cache();
  cache::$data['data--pages']['develop']['php_mod_usage']->cache_name = 'data--pages-develop-php_mod_usage';
  cache::$data['data--pages']['develop']['php_mod_usage']->display = new \stdClass();
  cache::$data['data--pages']['develop']['php_mod_usage']->display->check = 'url';
  cache::$data['data--pages']['develop']['php_mod_usage']->display->where = 'path';
  cache::$data['data--pages']['develop']['php_mod_usage']->display->match = '%^/develop/php_mod_usage$%';
  cache::$data['data--pages']['develop']['php_mod_usage']->access = new \stdClass();
  cache::$data['data--pages']['develop']['php_mod_usage']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['core']['modules'] = new \effcore\external_cache();
  cache::$data['data--pages']['core']['modules']->cache_name = 'data--pages-core-modules';
  cache::$data['data--pages']['core']['modules']->display = new \stdClass();
  cache::$data['data--pages']['core']['modules']->display->check = 'url';
  cache::$data['data--pages']['core']['modules']->display->where = 'path';
  cache::$data['data--pages']['core']['modules']->display->match = '%^(?<base>/manage/modules)(/(?<action>[a-z]+)/(?<id>[a-z_]+)|)$%';
  cache::$data['data--pages']['core']['modules']->access = new \stdClass();
  cache::$data['data--pages']['core']['modules']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['core']['install'] = new \effcore\external_cache();
  cache::$data['data--pages']['core']['install']->cache_name = 'data--pages-core-install';
  cache::$data['data--pages']['core']['install']->display = new \stdClass();
  cache::$data['data--pages']['core']['install']->display->check = 'url';
  cache::$data['data--pages']['core']['install']->display->where = 'path';
  cache::$data['data--pages']['core']['install']->display->match = '%^/install$%';
  cache::$data['data--pages']['core']['install']->access = new \stdClass();
  cache::$data['data--pages']['core']['install']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages']['core']['info'] = new \effcore\external_cache();
  cache::$data['data--pages']['core']['info']->cache_name = 'data--pages-core-info';
  cache::$data['data--pages']['core']['info']->display = new \stdClass();
  cache::$data['data--pages']['core']['info']->display->check = 'url';
  cache::$data['data--pages']['core']['info']->display->where = 'path';
  cache::$data['data--pages']['core']['info']->display->match = '%^/manage/info$%';
  cache::$data['data--pages']['core']['info']->access = new \stdClass();
  cache::$data['data--pages']['core']['info']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['core']['front'] = new \effcore\external_cache();
  cache::$data['data--pages']['core']['front']->cache_name = 'data--pages-core-front';
  cache::$data['data--pages']['core']['front']->display = new \stdClass();
  cache::$data['data--pages']['core']['front']->display->check = 'url';
  cache::$data['data--pages']['core']['front']->display->where = 'path';
  cache::$data['data--pages']['core']['front']->display->match = '%^/$%';
  cache::$data['data--pages']['core']['front']->access = null;
  cache::$data['data--pages']['core']['cron'] = new \effcore\external_cache();
  cache::$data['data--pages']['core']['cron']->cache_name = 'data--pages-core-cron';
  cache::$data['data--pages']['core']['cron']->display = new \stdClass();
  cache::$data['data--pages']['core']['cron']->display->check = 'url';
  cache::$data['data--pages']['core']['cron']->display->where = 'path';
  cache::$data['data--pages']['core']['cron']->display->match = '%^/cron/(?<key>[a-z0-9]{40})$%';
  cache::$data['data--pages']['core']['cron']->access = null;

}