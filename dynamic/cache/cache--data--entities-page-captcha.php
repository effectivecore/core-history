<?php

namespace effectivecore { # cache for data--entities-page-captcha

  cache::$data['data--entities-page-captcha'] = new \effectivecore\entity();
  cache::$data['data--entities-page-captcha']->name = 'captcha';
  cache::$data['data--entities-page-captcha']->storage_id = 'main';
  cache::$data['data--entities-page-captcha']->fields = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields->ip_address = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields->ip_address->type = 'varchar';
  cache::$data['data--entities-page-captcha']->fields->ip_address->size = 15;
  cache::$data['data--entities-page-captcha']->fields->ip_address->not_null = true;
  cache::$data['data--entities-page-captcha']->fields->characters = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields->characters->type = 'varchar';
  cache::$data['data--entities-page-captcha']->fields->characters->size = 32;
  cache::$data['data--entities-page-captcha']->fields->characters->not_null = true;
  cache::$data['data--entities-page-captcha']->fields->created = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields->created->type = 'datetime';
  cache::$data['data--entities-page-captcha']->fields->created->not_null = true;
  cache::$data['data--entities-page-captcha']->fields->attempts = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields->attempts->type = 'integer';
  cache::$data['data--entities-page-captcha']->fields->attempts->not_null = true;
  cache::$data['data--entities-page-captcha']->fields->canvas_data = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields->canvas_data->type = 'blob';
  cache::$data['data--entities-page-captcha']->fields->canvas_data->not_null = true;
  cache::$data['data--entities-page-captcha']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entities-page-captcha']->constraints['key_id']->fields['ip_address'] = 'ip_address';
  cache::$data['data--entities-page-captcha']->indexes['idx_created'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->indexes['idx_created']->type = 'index';
  cache::$data['data--entities-page-captcha']->indexes['idx_created']->fields['created'] = 'created';

}