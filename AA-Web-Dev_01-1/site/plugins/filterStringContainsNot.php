<?php

collection::$filters['!*='] = function($collection, $field, $value, $split = false) {

  foreach($collection->data as $key => $item) {
    if(!str::contains((string)collection::extractValue($item, $field), $value)) continue;
    unset($collection->$key);
  }

  return $collection;

};

