<?php

  ##################################################################
  ### Copyright © 2017—2019 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          abstract class locale implements has_cache_cleaning {

  static protected $cache_settings;

  static function cache_cleaning() {
    static::$cache_settings = null;
  }

  static function init() {
    static::$cache_settings = storage::get('files')->select('settings/locales');
  }

  static function settings_get() {
    if    (static::$cache_settings == null) static::init();
    return static::$cache_settings;
  }

  ###############
  ### formats ###
  ###############

  static function     date_native_to_global($date)     {return \DateTime::createFromFormat(static::settings_get()->format_date,     $date,      new \DateTimeZone(core::timezone_client_get()))->setTimezone( new \DateTimeZone('UTC') )->format( 'Y-m-d'       );}
  static function     time_native_to_global($time)     {return \DateTime::createFromFormat(static::settings_get()->format_time,     $time,      new \DateTimeZone(core::timezone_client_get()))->setTimezone( new \DateTimeZone('UTC') )->format(       'H:i:s' );}
  static function datetime_native_to_global($datetime) {return \DateTime::createFromFormat(static::settings_get()->format_datetime, $datetime,  new \DateTimeZone(core::timezone_client_get()))->setTimezone( new \DateTimeZone('UTC') )->format( 'Y-m-d H:i:s' );}
  static function     date_global_to_native($date)     {return \DateTime::createFromFormat('Y-m-d',       $date,     new \DateTimeZone('UTC'))->setTimezone( new \DateTimeZone(core::timezone_client_get()) )->format( static::settings_get()->format_date      );}
  static function     time_global_to_native($time)     {return \DateTime::createFromFormat(      'H:i:s', $time,     new \DateTimeZone('UTC'))->setTimezone( new \DateTimeZone(core::timezone_client_get()) )->format( static::settings_get()->format_time      );}
  static function datetime_global_to_native($datetime) {return \DateTime::createFromFormat('Y-m-d H:i:s', $datetime, new \DateTimeZone('UTC'))->setTimezone( new \DateTimeZone(core::timezone_client_get()) )->format( static::settings_get()->format_datetime  );}
  static function timestmp_global_to_native($timestmp) {return \DateTime::createFromFormat('U',           $timestmp                          )->setTimezone( new \DateTimeZone(core::timezone_client_get()) )->format( static::settings_get()->format_datetime  );}

  static function persent_format($number, $precision = 2) {return static::number_format(floatval($number), $precision).'%';}
  static function msecond_format($number, $precision = 6) {return static::number_format(floatval($number), $precision);}
  static function version_format($number)                 {return static::number_format(floatval($number), 3, null, null, false);}

  static function number_format($number, $precision = 0, $dec_point = null, $thousands = null, $no_zeros = true) {
    $dec_point = $dec_point === null ? static::settings_get()->decimal_point       : $dec_point;
    $thousands = $thousands === null ? static::settings_get()->thousands_separator : $thousands;
    return core::number_format($number, $precision, $dec_point, $thousands, $no_zeros);
  }

  static function human_bytes_format($bytes, $decimals = 2) {
    return core::bytes_to_human($bytes, $decimals, static::settings_get()->decimal_point);
  }

}}