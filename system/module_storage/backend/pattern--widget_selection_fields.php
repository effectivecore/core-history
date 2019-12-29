<?php

  ##################################################################
  ### Copyright © 2017—2020 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class widget_selection_fields extends widget_fields {

  public $attributes = ['data-type' => 'selection_fields'];
  public $item_title = 'Field';

  function widget_manage_get($item, $c_row_id, $prefix, $entity_name = 'demo_data', $entity_field_name = 'id') {
    $widget_manage = new markup('x-widget', [
      'data-rearrangeable'         => 'true',
      'data-fields-is-inline-full' => 'true'], [], $item->weight);
  # field for weight
    $field_weight = new field_weight;
    $field_weight->description_state = 'hidden';
    $field_weight->build();
    $field_weight->name_set($prefix.'weight'.$c_row_id);
    $field_weight->required_set(false);
    $field_weight->value_set($item->weight);
  # data markup
    $entity = entity::get($entity_name);
    $entity_field = $entity ? $entity->field_get($entity_field_name) : null;
    $data_markup = new markup('x-info',  [], [
        'title' => new markup('x-title', [], isset($entity_field->title) ? [$entity->title, ': ', $entity_field->title] : 'LOST PART'),
        'id'    => new markup('x-id',    [], [
                   new text_simple($entity_name      ), '.',
                   new text_simple($entity_field_name)]) ]);
  # button for delete item
    $button_delete = new button(null, ['data-style' => 'narrow-delete', 'title' => new text('delete')]);
    $button_delete->break_on_validate = true;
    $button_delete->build();
    $button_delete->value_set($prefix.'delete'.$c_row_id);
    $button_delete->_type = 'delete';
    $button_delete->_id = $c_row_id;
    $this->_buttons['delete'.$c_row_id] = $button_delete;
  # group the fields in widget 'manage'
    $widget_manage->child_insert($field_weight,  'weight'       );
    $widget_manage->child_insert($data_markup,   'data'         );
    $widget_manage->child_insert($button_delete, 'button_delete');
    return $widget_manage;
  }

  function widget_insert_get() {
    $entities = entity::get_all();
    core::array_sort_by_text_property($entities);
    $options = ['not_selected' => '- no -'];
    foreach ($entities as $c_entity) {
      if (!empty($c_entity->managing_is_enabled)) {
        foreach ($c_entity->fields as $c_field_name => $c_field_info) {
          if (!empty($c_field_info->managing_on_select_is_enabled)) {
            if (!isset($options[$c_entity->name])) {
                       $options[$c_entity->name] = new \stdClass;
                       $options[$c_entity->name]->title = $c_entity->title;}
            $options[$c_entity->name]->values[$c_entity->name.'.'.$c_field_name] = new text_multiline([
              'title' => $c_field_info->title, 'id' => '('.$c_entity->name.'.'.$c_field_name.')'], [], ' '
            );
          }
        }
      }
    }
    $select = new field_select('Insert field');
    $select->values = $options;
    $select->build();
    $select->name_set($this->unique_prefix.'insert');
    $select->required_set(false);
    $button_insert = new button('insert', ['title' => new text('insert')]);
    $button_insert->break_on_validate = true;
    $button_insert->build();
    $button_insert->value_set($this->unique_prefix.'insert');
    $button_insert->_type = 'insert';
    $this->_buttons['insert'] = $button_insert;
    return new node([], [$select, $button_insert]);
  }

}}