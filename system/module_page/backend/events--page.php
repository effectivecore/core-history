<?php

  ##################################################################
  ### Copyright © 2017—2020 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore\modules\page {
          use \effcore\access;
          use \effcore\entity;
          use \effcore\instance;
          use \effcore\markup;
          use \effcore\message;
          use \effcore\part_preset;
          use \effcore\selection;
          use \effcore\text;
          use \effcore\url;
          abstract class events_page {

  static function block_messages($page) {
    return new message;
  }

  static function block_title($page) {
    return new markup('h1', ['id' => 'title'],
      new text($page->title, [], true, true)
    );
  }

  static function block_page_actions($page) {
    if ($page->origin == 'sql' && access::check((object)['roles' => ['admins' => 'admins']])) {
      return new markup('x-page-actions', [],
        new markup('a', ['data-id' => 'update', 'href' => '/manage/data/content/page/'.$page->id.'/update?'.url::back_part_make()], 'update this page')
      );
    }
  }

  static function on_part_presets_dynamic_build($event, $id = null) {
    if ($id === null                                     ) {foreach (entity::get('text'   )->instances_select() as $c_item)                                                                                                   part_preset::insert('text_sql_'.   $c_item->id, 'Texts',    $c_item->description ?: 'NO TITLE', [], null, 'code', '\\effcore\\modules\\page\\events_page::block_instance', [], ['instance_id' => $c_item->id, 'entity_name' => 'text'   ], 0, 'page');}
    if ($id !== null && strpos($id, 'text_sql_'   ) === 0) {                                                       $c_item = (new instance('text',    ['id' => substr($id, strlen('text_sql_'   ))]))->select(); if ($c_item) part_preset::insert('text_sql_'.   $c_item->id, 'Texts',    $c_item->description ?: 'NO TITLE', [], null, 'code', '\\effcore\\modules\\page\\events_page::block_instance', [], ['instance_id' => $c_item->id, 'entity_name' => 'text'   ], 0, 'page');}
    if ($id === null                                     ) {foreach (entity::get('picture')->instances_select() as $c_item)                                                                                                   part_preset::insert('picture_sql_'.$c_item->id, 'Pictures', $c_item->title       ?: 'NO TITLE', [], null, 'code', '\\effcore\\modules\\page\\events_page::block_instance', [], ['instance_id' => $c_item->id, 'entity_name' => 'picture'], 0, 'page');}
    if ($id !== null && strpos($id, 'picture_sql_') === 0) {                                                       $c_item = (new instance('picture', ['id' => substr($id, strlen('picture_sql_'))]))->select(); if ($c_item) part_preset::insert('picture_sql_'.$c_item->id, 'Pictures', $c_item->title       ?: 'NO TITLE', [], null, 'code', '\\effcore\\modules\\page\\events_page::block_instance', [], ['instance_id' => $c_item->id, 'entity_name' => 'picture'], 0, 'page');}
    if ($id === null                                     ) {foreach (entity::get('video'  )->instances_select() as $c_item)                                                                                                   part_preset::insert('video_sql_'.  $c_item->id, 'Videos',   $c_item->title       ?: 'NO TITLE', [], null, 'code', '\\effcore\\modules\\page\\events_page::block_instance', [], ['instance_id' => $c_item->id, 'entity_name' => 'video'  ], 0, 'page');}
    if ($id !== null && strpos($id, 'video_sql_'  ) === 0) {                                                       $c_item = (new instance('video',   ['id' => substr($id, strlen('video_sql_'  ))]))->select(); if ($c_item) part_preset::insert('video_sql_'.  $c_item->id, 'Videos',   $c_item->title       ?: 'NO TITLE', [], null, 'code', '\\effcore\\modules\\page\\events_page::block_instance', [], ['instance_id' => $c_item->id, 'entity_name' => 'video'  ], 0, 'page');}
    if ($id === null                                     ) {foreach (entity::get('audio'  )->instances_select() as $c_item)                                                                                                   part_preset::insert('audio_sql_'.  $c_item->id, 'Audios',   $c_item->title       ?: 'NO TITLE', [], null, 'code', '\\effcore\\modules\\page\\events_page::block_instance', [], ['instance_id' => $c_item->id, 'entity_name' => 'audio'  ], 0, 'page');}
    if ($id !== null && strpos($id, 'audio_sql_'  ) === 0) {                                                       $c_item = (new instance('audio',   ['id' => substr($id, strlen('audio_sql_'  ))]))->select(); if ($c_item) part_preset::insert('audio_sql_'.  $c_item->id, 'Audios',   $c_item->title       ?: 'NO TITLE', [], null, 'code', '\\effcore\\modules\\page\\events_page::block_instance', [], ['instance_id' => $c_item->id, 'entity_name' => 'audio'  ], 0, 'page');}
  }

  static function block_instance($page, $args) {
    if (!empty($args['instance_id'])) {
      $entity = entity::get($args['entity_name']);
      $selection = new selection;
      $selection->id = $args['entity_name'].'_'.$args['instance_id'];
      $selection->template = 'content';
      $selection->decorator_params = $entity->decorator_params ?? null;
      $selection->query_params['conditions'] = ['id_!f' => '~'.$args['entity_name'].'.id', 'operator' => '=', 'id_!v' => $args['instance_id']];
      foreach ($entity->fields as $c_name => $c_field) {
        if (!empty($c_field->managing_on_select_is_enabled)) {
          $selection->field_insert_entity(null,
            $entity->name, $c_name, $c_field->managing_selection_params ?? []
          );
        }
      }
      $selection->build();
      return $selection;
    }
  }

}}