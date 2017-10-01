<?php

namespace effectivecore { # cache for settings--trees

  cache_factory::$info['settings--trees']['created'] = '2017-10-01 10:46:51';
  cache_factory::$data['settings--trees']['core']['main'] = new \effectivecore\tree();
  cache_factory::$data['settings--trees']['core']['main']->title = 'Main menu';
  cache_factory::$data['settings--trees']['core']['main']->attributes['class']['main'] = 'main';
  cache_factory::$data['settings--trees']['core']['main']->weight = 2;
  cache_factory::$data['settings--trees']['user']['user'] = new \effectivecore\tree();
  cache_factory::$data['settings--trees']['user']['user']->title = 'User menu';
  cache_factory::$data['settings--trees']['user']['user']->attributes['class']['user'] = 'user';
  cache_factory::$data['settings--trees']['user']['user']->weight = 1;

}