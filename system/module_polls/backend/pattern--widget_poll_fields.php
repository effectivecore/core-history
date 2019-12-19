<?php

  ##################################################################
  ### Copyright © 2017—2020 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class widget_poll_fields extends container {

  public $tag_name = 'x-widget';
  public $attributes = ['data-type' => 'poll_fields'];
  public $unique_prefix = '';

  function __construct($attributes = [], $weight = 0) {
    parent::__construct(null, null, null, $attributes, [], $weight);
  }

  function build() {
    if (!$this->is_builded) {
      $widgets_group_manage = new markup('x-widgets-group', [
        'data-type'              => 'manage',
        'data-has-rearrangeable' => 'true']);
    # widgets for manage each item
      foreach ($this->cform->validation_cache_get($this->unique_prefix.'fields') ?? [] as $c_item) {
      # field for text
        $c_field_text = new field_text('Text');
        $c_field_text->description_state = 'hidden';
        $c_field_text->build();
        $c_field_text->name_set($this->unique_prefix.'text_'.$c_item->id);
        $c_field_text->value_set($c_item->text);
      # field for weight
        $c_field_weight = new field_weight();
        $c_field_weight->description_state = 'hidden';
        $c_field_weight->build();
        $c_field_weight->name_set($this->unique_prefix.'weight_'.$c_item->id);
        $c_field_weight->required_set(false);
        $c_field_weight->value_set($c_item->weight);
      # group the fields in widget 'manage'
        $c_widget_manage = new markup('x-widget', ['data-rearrangeable' => 'true', 'data-fields-is-inline' => 'true'], [], $c_item->weight);
        $c_widget_manage->child_insert($c_field_weight, 'weight');
        $c_widget_manage->child_insert($c_field_text,   'text'  );
        $widgets_group_manage->child_insert($c_widget_manage, 'manage_'.$c_item->id);
      }
    # button for insert new item
      $button_insert = new button('insert', ['title' => new text('insert')]);
      $button_insert->build();
      $button_insert->value_set($this->unique_prefix.'button_insert');
    # insert all widgets
      $this->child_insert($widgets_group_manage, 'manage');
      $this->child_insert($button_insert,        'insert');
      $this->is_builded = true;
    }
  }

  function items_get() {
  }

  function items_set($items) {
    $this->cform->validation_cache_set($this->unique_prefix.'fields', $items);
    if ($this->is_builded) {
        $this->is_builded = false;
        $this->build();
    }
  }

  function items_set_once($items) {
    if ($this->cform->validation_cache_get($this->unique_prefix.'fields') === null) {
      $this->items_set($items);
    }
  }

  function on_click_insert($form, $npath) {
  }

  function on_click_delete($form, $npath) {
  }

  ###########################
  ### static declarations ###
  ###########################

  static function on_submit(&$group, $form, $npath) {
    $button = $group->child_select('insert');
    if ($button->is_clicked()) {
      $group->on_click_insert($form, $npath);
    }
  }

}}