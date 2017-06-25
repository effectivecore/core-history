<?php

namespace effectivecore {
          class table_head extends node {

  public $template = 'table_head';

  function child_insert($child, $id = null) {
    if ($child instanceof table_body_row)  return parent::child_insert($child, $id);
    if ($child instanceof entity_instance) return parent::child_insert(new table_head_row([], $child->get_values()), $id);
    if (is_array($child))                  return parent::child_insert(new table_head_row([], $child), $id);
  }

}}