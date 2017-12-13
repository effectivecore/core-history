<?php

  ##################################################################
  ### Copyright © 2017—2018 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effectivecore {
          class form_container_checkboxes extends \effectivecore\form_container {

  public $field_tag_name = 'x-field';
  public $field_title_tag_name = 'label';
  public $field_title_position = 'bottom';
  public $input_tag_name = 'checkbox';
  public $input_attributes = [];
  public $values = [];
  public $disabled = [];
  public $checked = [];

  function build() {
    $this->attribute_insert('class', factory::array_values_map_to_keys(['boxes', $this->input_tag_name]));
    foreach ($this->values as $value => $title) {
      $this->input_insert($title, ['value' => $value]);
    }
  }

  function input_insert($title = null, $attr = [], $new_id = null) {
    $input = new markup_simple('input', ['type' => $this->input_tag_name] + $attr + $this->attribute_select('', 'input_attributes'));
    $value = $input->attribute_select('value');
    if (isset($this->checked[$value]))  $input->attribute_insert('checked', 'checked');
    if (isset($this->disabled[$value])) $input->attribute_insert('disabled', 'disabled');
    $field = new form_field( $this->field_tag_name, $title );
    $field->title_tag_name = $this->field_title_tag_name;
    $field->title_position = $this->field_title_position;
    $field->child_insert($input, 'element');
    return $this->child_insert($field, $new_id);
  }

  function default_set($value) {
    foreach ($this->children as $c_field) {
      $c_input = $c_field->child_select('element');
      if ($c_input->attribute_select('value') == $value) {
        return $c_input->attribute_insert('checked', 'checked');
      }
    }
  }

  function default_get() {
    foreach ($this->children as $c_field) {
      $c_input = $c_field->child_select('element');
      if ($c_input->attribute_select('checked') == 'checked') {
        return $c_input->attribute_select('value');
      }
    }
  }

}}