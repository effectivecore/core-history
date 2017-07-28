<?php

namespace effectivecore {
          class form_field_select extends form_field {

  public $values = [];

  function build() {
    $this->child_insert(new markup('select'), 'default');
    foreach ($this->values as $value => $title) {
      $this->child_select('default')->child_insert(
        new markup('option', ['value' => $value], $title), $value
      );
    }
  }

  function value_insert() {
  }

}}