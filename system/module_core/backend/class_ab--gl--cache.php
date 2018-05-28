<?php

  ##################################################################
  ### Copyright © 2017—2018 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          abstract class cache extends dynamic {

  const type = 'cache';
  const directory = dir_dynamic.'cache/';

  static function update($name, $data, $sub_dirs = '', $info = null) {
    if (parent::update($name, $data, $sub_dirs, $info)) {
      console::add_log('storage', 'cache', 'cache for '.$name.' was rebuilded', 'ok', 0);
    }
  }

}}