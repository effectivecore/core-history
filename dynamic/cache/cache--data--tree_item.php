<?php

namespace effectivecore { # cache for data--tree_item

  cache::$data['data--tree_item']['core']['admin'] = new \effectivecore\tree_item();
  cache::$data['data--tree_item']['core']['admin']->id = 'admin';
  cache::$data['data--tree_item']['core']['admin']->id_parent = 'main';
  cache::$data['data--tree_item']['core']['admin']->parent_is_tree = true;
  cache::$data['data--tree_item']['core']['admin']->title = 'Administer';
  cache::$data['data--tree_item']['core']['admin']->attributes['class']['admin'] = 'admin';
  cache::$data['data--tree_item']['core']['admin']->access = new \stdClass();
  cache::$data['data--tree_item']['core']['admin']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_item']['core']['modules'] = new \effectivecore\tree_item();
  cache::$data['data--tree_item']['core']['modules']->id = 'modules';
  cache::$data['data--tree_item']['core']['modules']->id_parent = 'admin';
  cache::$data['data--tree_item']['core']['modules']->title = 'Modules';
  cache::$data['data--tree_item']['core']['modules']->attributes['href'] = '/admin/modules';
  cache::$data['data--tree_item']['core']['modules']->attributes['class']['modules'] = 'modules';
  cache::$data['data--tree_item']['core']['modules']->access = new \stdClass();
  cache::$data['data--tree_item']['core']['modules']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_item']['develop']['develop'] = new \effectivecore\tree_item();
  cache::$data['data--tree_item']['develop']['develop']->id = 'develop';
  cache::$data['data--tree_item']['develop']['develop']->id_parent = 'main';
  cache::$data['data--tree_item']['develop']['develop']->parent_is_tree = true;
  cache::$data['data--tree_item']['develop']['develop']->title = 'Develop';
  cache::$data['data--tree_item']['develop']['develop']->attributes['class']['develop'] = 'develop';
  cache::$data['data--tree_item']['develop']['develop']->access = new \stdClass();
  cache::$data['data--tree_item']['develop']['develop']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_item']['develop']['demo'] = new \effectivecore\tree_item();
  cache::$data['data--tree_item']['develop']['demo']->id = 'demo';
  cache::$data['data--tree_item']['develop']['demo']->id_parent = 'develop';
  cache::$data['data--tree_item']['develop']['demo']->title = 'Demo';
  cache::$data['data--tree_item']['develop']['demo']->attributes['href'] = '/develop/demo';
  cache::$data['data--tree_item']['develop']['demo']->attributes['class']['demo'] = 'demo';
  cache::$data['data--tree_item']['develop']['demo']->access = new \stdClass();
  cache::$data['data--tree_item']['develop']['demo']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_item']['page']['decoration'] = new \effectivecore\tree_item();
  cache::$data['data--tree_item']['page']['decoration']->id = 'decoration';
  cache::$data['data--tree_item']['page']['decoration']->id_parent = 'admin';
  cache::$data['data--tree_item']['page']['decoration']->title = 'Decoration';
  cache::$data['data--tree_item']['page']['decoration']->attributes['href'] = '/admin/decoration';
  cache::$data['data--tree_item']['page']['decoration']->attributes['class']['decoration'] = 'decoration';
  cache::$data['data--tree_item']['page']['decoration']->access = new \stdClass();
  cache::$data['data--tree_item']['page']['decoration']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_item']['user']['login'] = new \effectivecore\tree_item();
  cache::$data['data--tree_item']['user']['login']->id = 'login';
  cache::$data['data--tree_item']['user']['login']->id_parent = 'user_anonymous';
  cache::$data['data--tree_item']['user']['login']->parent_is_tree = true;
  cache::$data['data--tree_item']['user']['login']->title = 'login';
  cache::$data['data--tree_item']['user']['login']->attributes['href'] = '/user/login';
  cache::$data['data--tree_item']['user']['login']->attributes['class']['login'] = 'login';
  cache::$data['data--tree_item']['user']['login']->weight = -20;
  cache::$data['data--tree_item']['user']['login']->access = new \stdClass();
  cache::$data['data--tree_item']['user']['login']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--tree_item']['user']['registration'] = new \effectivecore\tree_item();
  cache::$data['data--tree_item']['user']['registration']->id = 'registration';
  cache::$data['data--tree_item']['user']['registration']->id_parent = 'user_anonymous';
  cache::$data['data--tree_item']['user']['registration']->parent_is_tree = true;
  cache::$data['data--tree_item']['user']['registration']->title = 'registration';
  cache::$data['data--tree_item']['user']['registration']->attributes['href'] = '/user/registration';
  cache::$data['data--tree_item']['user']['registration']->attributes['class']['registration'] = 'registration';
  cache::$data['data--tree_item']['user']['registration']->weight = -10;
  cache::$data['data--tree_item']['user']['registration']->access = new \stdClass();
  cache::$data['data--tree_item']['user']['registration']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--tree_item']['user']['user_edit'] = new \effectivecore\tree_item();
  cache::$data['data--tree_item']['user']['user_edit']->id = 'user_edit';
  cache::$data['data--tree_item']['user']['user_edit']->id_parent = 'user_logged_in';
  cache::$data['data--tree_item']['user']['user_edit']->parent_is_tree = true;
  cache::$data['data--tree_item']['user']['user_edit']->title = 'edit';
  cache::$data['data--tree_item']['user']['user_edit']->attributes['href'] = '/user/%%_id_user/edit';
  cache::$data['data--tree_item']['user']['user_edit']->attributes['class']['user-edit'] = 'user-edit';
  cache::$data['data--tree_item']['user']['user_edit']->weight = -20;
  cache::$data['data--tree_item']['user']['user_edit']->access = new \stdClass();
  cache::$data['data--tree_item']['user']['user_edit']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_item']['user']['user_edit']->access->roles['registered'] = 'registered';
  cache::$data['data--tree_item']['user']['logout'] = new \effectivecore\tree_item();
  cache::$data['data--tree_item']['user']['logout']->id = 'logout';
  cache::$data['data--tree_item']['user']['logout']->id_parent = 'user_logged_in';
  cache::$data['data--tree_item']['user']['logout']->parent_is_tree = true;
  cache::$data['data--tree_item']['user']['logout']->title = 'logout';
  cache::$data['data--tree_item']['user']['logout']->attributes['href'] = '/user/logout';
  cache::$data['data--tree_item']['user']['logout']->attributes['class']['logout'] = 'logout';
  cache::$data['data--tree_item']['user']['logout']->weight = -10;
  cache::$data['data--tree_item']['user']['logout']->access = new \stdClass();
  cache::$data['data--tree_item']['user']['logout']->access->roles['registered'] = 'registered';
  cache::$data['data--tree_item']['user']['roles'] = new \effectivecore\tree_item();
  cache::$data['data--tree_item']['user']['roles']->id = 'roles';
  cache::$data['data--tree_item']['user']['roles']->id_parent = 'admin';
  cache::$data['data--tree_item']['user']['roles']->title = 'Roles';
  cache::$data['data--tree_item']['user']['roles']->attributes['href'] = '/admin/roles';
  cache::$data['data--tree_item']['user']['roles']->attributes['class']['roles'] = 'roles';
  cache::$data['data--tree_item']['user']['roles']->access = new \stdClass();
  cache::$data['data--tree_item']['user']['roles']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_item']['user']['users'] = new \effectivecore\tree_item();
  cache::$data['data--tree_item']['user']['users']->id = 'users';
  cache::$data['data--tree_item']['user']['users']->id_parent = 'admin';
  cache::$data['data--tree_item']['user']['users']->title = 'Users';
  cache::$data['data--tree_item']['user']['users']->attributes['href'] = '/admin/users';
  cache::$data['data--tree_item']['user']['users']->attributes['class']['users'] = 'users';
  cache::$data['data--tree_item']['user']['users']->access = new \stdClass();
  cache::$data['data--tree_item']['user']['users']->access->roles['admins'] = 'admins';

}