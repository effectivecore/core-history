<?php

namespace effcore { # cache for data--pages

  cache::$data['data--pages']['core']['front'] = new \effcore\different_cache();
  cache::$data['data--pages']['core']['front']->cache_name = 'data--pages-core-front';
  cache::$data['data--pages']['core']['front']->display = new \stdClass();
  cache::$data['data--pages']['core']['front']->display->check = 'url';
  cache::$data['data--pages']['core']['front']->display->match = '%^/$%';
  cache::$data['data--pages']['core']['front']->access = null;
  cache::$data['data--pages']['core']['info'] = new \effcore\different_cache();
  cache::$data['data--pages']['core']['info']->cache_name = 'data--pages-core-info';
  cache::$data['data--pages']['core']['info']->display = new \stdClass();
  cache::$data['data--pages']['core']['info']->display->check = 'url';
  cache::$data['data--pages']['core']['info']->display->match = '%^/admin/info$%';
  cache::$data['data--pages']['core']['info']->access = new \stdClass();
  cache::$data['data--pages']['core']['info']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['core']['install'] = new \effcore\different_cache();
  cache::$data['data--pages']['core']['install']->cache_name = 'data--pages-core-install';
  cache::$data['data--pages']['core']['install']->display = new \stdClass();
  cache::$data['data--pages']['core']['install']->display->check = 'url';
  cache::$data['data--pages']['core']['install']->display->match = '%^/install$%';
  cache::$data['data--pages']['core']['install']->access = new \stdClass();
  cache::$data['data--pages']['core']['install']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages']['core']['modules'] = new \effcore\different_cache();
  cache::$data['data--pages']['core']['modules']->cache_name = 'data--pages-core-modules';
  cache::$data['data--pages']['core']['modules']->display = new \stdClass();
  cache::$data['data--pages']['core']['modules']->display->check = 'url';
  cache::$data['data--pages']['core']['modules']->display->match = '%^/admin/modules$%';
  cache::$data['data--pages']['core']['modules']->access = new \stdClass();
  cache::$data['data--pages']['core']['modules']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['develop']['demo'] = new \effcore\different_cache();
  cache::$data['data--pages']['develop']['demo']->cache_name = 'data--pages-develop-demo';
  cache::$data['data--pages']['develop']['demo']->display = new \stdClass();
  cache::$data['data--pages']['develop']['demo']->display->check = 'url';
  cache::$data['data--pages']['develop']['demo']->display->match = '%^/develop/demo$%';
  cache::$data['data--pages']['develop']['demo']->access = new \stdClass();
  cache::$data['data--pages']['develop']['demo']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['page']['decoration'] = new \effcore\different_cache();
  cache::$data['data--pages']['page']['decoration']->cache_name = 'data--pages-page-decoration';
  cache::$data['data--pages']['page']['decoration']->display = new \stdClass();
  cache::$data['data--pages']['page']['decoration']->display->check = 'url';
  cache::$data['data--pages']['page']['decoration']->display->match = '%^/admin/decoration$%';
  cache::$data['data--pages']['page']['decoration']->access = new \stdClass();
  cache::$data['data--pages']['page']['decoration']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['login'] = new \effcore\different_cache();
  cache::$data['data--pages']['user']['login']->cache_name = 'data--pages-user-login';
  cache::$data['data--pages']['user']['login']->display = new \stdClass();
  cache::$data['data--pages']['user']['login']->display->check = 'url';
  cache::$data['data--pages']['user']['login']->display->match = '%^/user/login$%';
  cache::$data['data--pages']['user']['login']->access = new \stdClass();
  cache::$data['data--pages']['user']['login']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages']['user']['logout'] = new \effcore\different_cache();
  cache::$data['data--pages']['user']['logout']->cache_name = 'data--pages-user-logout';
  cache::$data['data--pages']['user']['logout']->display = new \stdClass();
  cache::$data['data--pages']['user']['logout']->display->check = 'url';
  cache::$data['data--pages']['user']['logout']->display->match = '%^/user/logout$%';
  cache::$data['data--pages']['user']['logout']->access = new \stdClass();
  cache::$data['data--pages']['user']['logout']->access->roles['registered'] = 'registered';
  cache::$data['data--pages']['user']['registration'] = new \effcore\different_cache();
  cache::$data['data--pages']['user']['registration']->cache_name = 'data--pages-user-registration';
  cache::$data['data--pages']['user']['registration']->display = new \stdClass();
  cache::$data['data--pages']['user']['registration']->display->check = 'url';
  cache::$data['data--pages']['user']['registration']->display->match = '%^/user/registration$%';
  cache::$data['data--pages']['user']['registration']->access = new \stdClass();
  cache::$data['data--pages']['user']['registration']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages']['user']['roles'] = new \effcore\different_cache();
  cache::$data['data--pages']['user']['roles']->cache_name = 'data--pages-user-roles';
  cache::$data['data--pages']['user']['roles']->display = new \stdClass();
  cache::$data['data--pages']['user']['roles']->display->check = 'url';
  cache::$data['data--pages']['user']['roles']->display->match = '%^/admin/roles$%';
  cache::$data['data--pages']['user']['roles']->access = new \stdClass();
  cache::$data['data--pages']['user']['roles']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['user'] = new \effcore\different_cache();
  cache::$data['data--pages']['user']['user']->cache_name = 'data--pages-user-user';
  cache::$data['data--pages']['user']['user']->display = new \stdClass();
  cache::$data['data--pages']['user']['user']->display->check = 'url';
  cache::$data['data--pages']['user']['user']->display->match = '%^/user/[0-9]+$%';
  cache::$data['data--pages']['user']['user']->access = new \stdClass();
  cache::$data['data--pages']['user']['user']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['user']->access->roles['registered'] = 'registered';
  cache::$data['data--pages']['user']['user_delete'] = new \effcore\different_cache();
  cache::$data['data--pages']['user']['user_delete']->cache_name = 'data--pages-user-user_delete';
  cache::$data['data--pages']['user']['user_delete']->display = new \stdClass();
  cache::$data['data--pages']['user']['user_delete']->display->check = 'url';
  cache::$data['data--pages']['user']['user_delete']->display->match = '%^/admin/users/delete/[0-9]+$%';
  cache::$data['data--pages']['user']['user_delete']->access = new \stdClass();
  cache::$data['data--pages']['user']['user_delete']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['user_edit'] = new \effcore\different_cache();
  cache::$data['data--pages']['user']['user_edit']->cache_name = 'data--pages-user-user_edit';
  cache::$data['data--pages']['user']['user_edit']->display = new \stdClass();
  cache::$data['data--pages']['user']['user_edit']->display->check = 'url';
  cache::$data['data--pages']['user']['user_edit']->display->match = '%^/user/[0-9]+/edit$%';
  cache::$data['data--pages']['user']['user_edit']->access = new \stdClass();
  cache::$data['data--pages']['user']['user_edit']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['user_edit']->access->roles['registered'] = 'registered';
  cache::$data['data--pages']['user']['users'] = new \effcore\different_cache();
  cache::$data['data--pages']['user']['users']->cache_name = 'data--pages-user-users';
  cache::$data['data--pages']['user']['users']->display = new \stdClass();
  cache::$data['data--pages']['user']['users']->display->check = 'url';
  cache::$data['data--pages']['user']['users']->display->match = '%^/admin/users$%';
  cache::$data['data--pages']['user']['users']->access = new \stdClass();
  cache::$data['data--pages']['user']['users']->access->roles['admins'] = 'admins';

}