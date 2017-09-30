<?php

namespace effectivecore { # cache for settings--entities

  cache_factory::$info['settings--entities']['created'] = '2017-09-30 20:44:07';
  cache_factory::$data['settings--entities']['tree']['tree'] = new \effectivecore\entity();
  cache_factory::$data['settings--entities']['tree']['tree']->name = 'tree';
  cache_factory::$data['settings--entities']['tree']['tree']->storage_id = 'db_main';
  cache_factory::$data['settings--entities']['tree']['tree']->charset = 'utf8';
  cache_factory::$data['settings--entities']['tree']['tree']->fields = new \stdClass();
  cache_factory::$data['settings--entities']['tree']['tree']->fields->id = new \stdClass();
  cache_factory::$data['settings--entities']['tree']['tree']->fields->id->type = 'int';
  cache_factory::$data['settings--entities']['tree']['tree']->fields->id->size = 11;
  cache_factory::$data['settings--entities']['tree']['tree']->fields->id->unsigned = true;
  cache_factory::$data['settings--entities']['tree']['tree']->fields->id->not_null = true;
  cache_factory::$data['settings--entities']['tree']['tree']->fields->id->auto_increment = true;
  cache_factory::$data['settings--entities']['tree']['tree']->fields->title = new \stdClass();
  cache_factory::$data['settings--entities']['tree']['tree']->fields->title->type = 'varchar';
  cache_factory::$data['settings--entities']['tree']['tree']->fields->title->size = 255;
  cache_factory::$data['settings--entities']['tree']['tree']->fields->title->not_null = true;
  cache_factory::$data['settings--entities']['tree']['tree']->indexes['primary'] = new \stdClass();
  cache_factory::$data['settings--entities']['tree']['tree']->indexes['primary']->type = 'primary key';
  cache_factory::$data['settings--entities']['tree']['tree']->indexes['primary']->fields['id'] = 'id';
  cache_factory::$data['settings--entities']['tree']['tree_item'] = new \effectivecore\entity();
  cache_factory::$data['settings--entities']['tree']['tree_item']->name = 'tree_item';
  cache_factory::$data['settings--entities']['tree']['tree_item']->storage_id = 'db_main';
  cache_factory::$data['settings--entities']['tree']['tree_item']->charset = 'utf8';
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields = new \stdClass();
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->id = new \stdClass();
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->id->type = 'int';
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->id->size = 11;
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->id->unsigned = true;
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->id->not_null = true;
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->id->auto_increment = true;
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->parent_id = new \stdClass();
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->parent_id->type = 'int';
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->parent_id->size = 11;
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->parent_id->unsigned = true;
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->parent_id->not_null = true;
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->title = new \stdClass();
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->title->type = 'varchar';
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->title->size = 255;
  cache_factory::$data['settings--entities']['tree']['tree_item']->fields->title->not_null = true;
  cache_factory::$data['settings--entities']['tree']['tree_item']->indexes['primary'] = new \stdClass();
  cache_factory::$data['settings--entities']['tree']['tree_item']->indexes['primary']->type = 'primary key';
  cache_factory::$data['settings--entities']['tree']['tree_item']->indexes['primary']->fields['id'] = 'id';
  cache_factory::$data['settings--entities']['user']['user'] = new \effectivecore\entity();
  cache_factory::$data['settings--entities']['user']['user']->name = 'user';
  cache_factory::$data['settings--entities']['user']['user']->storage_id = 'db_main';
  cache_factory::$data['settings--entities']['user']['user']->charset = 'utf8';
  cache_factory::$data['settings--entities']['user']['user']->fields = new \stdClass();
  cache_factory::$data['settings--entities']['user']['user']->fields->id = new \stdClass();
  cache_factory::$data['settings--entities']['user']['user']->fields->id->type = 'int';
  cache_factory::$data['settings--entities']['user']['user']->fields->id->size = 11;
  cache_factory::$data['settings--entities']['user']['user']->fields->id->unsigned = true;
  cache_factory::$data['settings--entities']['user']['user']->fields->id->not_null = true;
  cache_factory::$data['settings--entities']['user']['user']->fields->id->auto_increment = true;
  cache_factory::$data['settings--entities']['user']['user']->fields->email = new \stdClass();
  cache_factory::$data['settings--entities']['user']['user']->fields->email->type = 'varchar';
  cache_factory::$data['settings--entities']['user']['user']->fields->email->size = 255;
  cache_factory::$data['settings--entities']['user']['user']->fields->email->not_null = true;
  cache_factory::$data['settings--entities']['user']['user']->fields->password_hash = new \stdClass();
  cache_factory::$data['settings--entities']['user']['user']->fields->password_hash->type = 'varchar';
  cache_factory::$data['settings--entities']['user']['user']->fields->password_hash->size = 255;
  cache_factory::$data['settings--entities']['user']['user']->fields->created = new \stdClass();
  cache_factory::$data['settings--entities']['user']['user']->fields->created->type = 'timestamp';
  cache_factory::$data['settings--entities']['user']['user']->fields->created->not_null = true;
  cache_factory::$data['settings--entities']['user']['user']->fields->created->default = 'current_timestamp';
  cache_factory::$data['settings--entities']['user']['user']->fields->is_embed = new \stdClass();
  cache_factory::$data['settings--entities']['user']['user']->fields->is_embed->type = 'int';
  cache_factory::$data['settings--entities']['user']['user']->fields->is_embed->size = 1;
  cache_factory::$data['settings--entities']['user']['user']->fields->is_embed->not_null = true;
  cache_factory::$data['settings--entities']['user']['user']->fields->is_embed->default = 0;
  cache_factory::$data['settings--entities']['user']['user']->indexes['primary'] = new \stdClass();
  cache_factory::$data['settings--entities']['user']['user']->indexes['primary']->type = 'primary key';
  cache_factory::$data['settings--entities']['user']['user']->indexes['primary']->fields['id'] = 'id';
  cache_factory::$data['settings--entities']['user']['user']->indexes['unique_email'] = new \stdClass();
  cache_factory::$data['settings--entities']['user']['user']->indexes['unique_email']->type = 'unique key';
  cache_factory::$data['settings--entities']['user']['user']->indexes['unique_email']->fields['email'] = 'email';
  cache_factory::$data['settings--entities']['user']['session'] = new \effectivecore\entity();
  cache_factory::$data['settings--entities']['user']['session']->name = 'session';
  cache_factory::$data['settings--entities']['user']['session']->storage_id = 'db_main';
  cache_factory::$data['settings--entities']['user']['session']->charset = 'utf8';
  cache_factory::$data['settings--entities']['user']['session']->fields = new \stdClass();
  cache_factory::$data['settings--entities']['user']['session']->fields->id = new \stdClass();
  cache_factory::$data['settings--entities']['user']['session']->fields->id->type = 'varchar';
  cache_factory::$data['settings--entities']['user']['session']->fields->id->size = 255;
  cache_factory::$data['settings--entities']['user']['session']->fields->id->not_null = true;
  cache_factory::$data['settings--entities']['user']['session']->fields->user_id = new \stdClass();
  cache_factory::$data['settings--entities']['user']['session']->fields->user_id->type = 'int';
  cache_factory::$data['settings--entities']['user']['session']->fields->user_id->size = 11;
  cache_factory::$data['settings--entities']['user']['session']->fields->user_id->unsigned = true;
  cache_factory::$data['settings--entities']['user']['session']->fields->user_id->not_null = true;
  cache_factory::$data['settings--entities']['user']['session']->fields->created = new \stdClass();
  cache_factory::$data['settings--entities']['user']['session']->fields->created->type = 'timestamp';
  cache_factory::$data['settings--entities']['user']['session']->fields->created->not_null = true;
  cache_factory::$data['settings--entities']['user']['session']->fields->created->default = 'current_timestamp';
  cache_factory::$data['settings--entities']['user']['session']->fields->data = new \stdClass();
  cache_factory::$data['settings--entities']['user']['session']->fields->data->type = 'longblob';
  cache_factory::$data['settings--entities']['user']['session']->fields->data->null = true;
  cache_factory::$data['settings--entities']['user']['session']->indexes['primary'] = new \stdClass();
  cache_factory::$data['settings--entities']['user']['session']->indexes['primary']->type = 'primary key';
  cache_factory::$data['settings--entities']['user']['session']->indexes['primary']->fields['id'] = 'id';
  cache_factory::$data['settings--entities']['user']['role'] = new \effectivecore\entity();
  cache_factory::$data['settings--entities']['user']['role']->name = 'role';
  cache_factory::$data['settings--entities']['user']['role']->storage_id = 'db_main';
  cache_factory::$data['settings--entities']['user']['role']->charset = 'utf8';
  cache_factory::$data['settings--entities']['user']['role']->fields = new \stdClass();
  cache_factory::$data['settings--entities']['user']['role']->fields->id = new \stdClass();
  cache_factory::$data['settings--entities']['user']['role']->fields->id->type = 'varchar';
  cache_factory::$data['settings--entities']['user']['role']->fields->id->size = 255;
  cache_factory::$data['settings--entities']['user']['role']->fields->id->not_null = true;
  cache_factory::$data['settings--entities']['user']['role']->fields->title = new \stdClass();
  cache_factory::$data['settings--entities']['user']['role']->fields->title->type = 'varchar';
  cache_factory::$data['settings--entities']['user']['role']->fields->title->size = 255;
  cache_factory::$data['settings--entities']['user']['role']->fields->title->not_null = true;
  cache_factory::$data['settings--entities']['user']['role']->fields->is_embed = new \stdClass();
  cache_factory::$data['settings--entities']['user']['role']->fields->is_embed->type = 'int';
  cache_factory::$data['settings--entities']['user']['role']->fields->is_embed->size = 1;
  cache_factory::$data['settings--entities']['user']['role']->fields->is_embed->not_null = true;
  cache_factory::$data['settings--entities']['user']['role']->fields->is_embed->default = 0;
  cache_factory::$data['settings--entities']['user']['role']->indexes['primary'] = new \stdClass();
  cache_factory::$data['settings--entities']['user']['role']->indexes['primary']->type = 'primary key';
  cache_factory::$data['settings--entities']['user']['role']->indexes['primary']->fields['id'] = 'id';
  cache_factory::$data['settings--entities']['user']['permission'] = new \effectivecore\entity();
  cache_factory::$data['settings--entities']['user']['permission']->name = 'permission';
  cache_factory::$data['settings--entities']['user']['permission']->storage_id = 'db_main';
  cache_factory::$data['settings--entities']['user']['permission']->charset = 'utf8';
  cache_factory::$data['settings--entities']['user']['permission']->fields = new \stdClass();
  cache_factory::$data['settings--entities']['user']['permission']->fields->id = new \stdClass();
  cache_factory::$data['settings--entities']['user']['permission']->fields->id->type = 'varchar';
  cache_factory::$data['settings--entities']['user']['permission']->fields->id->size = 255;
  cache_factory::$data['settings--entities']['user']['permission']->fields->id->not_null = true;
  cache_factory::$data['settings--entities']['user']['permission']->fields->title = new \stdClass();
  cache_factory::$data['settings--entities']['user']['permission']->fields->title->type = 'varchar';
  cache_factory::$data['settings--entities']['user']['permission']->fields->title->size = 255;
  cache_factory::$data['settings--entities']['user']['permission']->fields->title->not_null = true;
  cache_factory::$data['settings--entities']['user']['permission']->indexes['primary'] = new \stdClass();
  cache_factory::$data['settings--entities']['user']['permission']->indexes['primary']->type = 'primary key';
  cache_factory::$data['settings--entities']['user']['permission']->indexes['primary']->fields['id'] = 'id';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user'] = new \effectivecore\entity();
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->name = 'relation_role_ws_user';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->storage_id = 'db_main';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->charset = 'utf8';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->fields = new \stdClass();
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->fields->role_id = new \stdClass();
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->fields->role_id->type = 'varchar';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->fields->role_id->size = 255;
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->fields->role_id->not_null = true;
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->fields->user_id = new \stdClass();
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->fields->user_id->type = 'int';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->fields->user_id->size = 11;
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->fields->user_id->unsigned = true;
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->fields->user_id->not_null = true;
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->indexes['primary'] = new \stdClass();
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->indexes['primary']->type = 'primary key';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->indexes['primary']->fields['role_id'] = 'role_id';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_user']->indexes['primary']->fields['user_id'] = 'user_id';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission'] = new \effectivecore\entity();
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->name = 'relation_role_ws_permission';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->storage_id = 'db_main';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->charset = 'utf8';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->fields = new \stdClass();
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->fields->role_id = new \stdClass();
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->fields->role_id->type = 'varchar';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->fields->role_id->size = 255;
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->fields->role_id->not_null = true;
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->fields->permission_id = new \stdClass();
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->fields->permission_id->type = 'varchar';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->fields->permission_id->size = 255;
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->fields->permission_id->not_null = true;
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->indexes['primary'] = new \stdClass();
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->indexes['primary']->type = 'primary key';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->indexes['primary']->fields['role_id'] = 'role_id';
  cache_factory::$data['settings--entities']['user']['relation_role_ws_permission']->indexes['primary']->fields['permission_id'] = 'permission_id';

}