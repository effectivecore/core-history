<?php

  ##################################################################
  ### Copyright © 2017—2019 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class page_part_preset_link {

  public $id;
  public $weight = 0;

  function page_part_get() {
    $preset = page_part_preset::select($this->id);
    $page_part = new page_part;
    foreach ($page_part as $c_key => $c_value)
      $page_part->{$c_key} =
         $preset->{$c_key};
    return $page_part;
  }

}}