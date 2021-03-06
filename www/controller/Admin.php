<?php

class admin extends Ohirugohan {

    private $_data;
    private $_category;

    function __construct( $request ) {
      parent::__construct();
      self::_authorized();
    }
    function setData($image_list) {
        $this->_data = $image_list;
    }
    function getData() {
        return $this->_data;
    }
    function setCategory($category) {
        $this->_category = $category;
    }
    function getCategory() {
        return $this->_category;
    }

    private function _authorized() {
      $callback = $this->input->get('callback');
      if ( ! isset($callback) || $callback === '' ) {
        $callback = 'http://ohirugohan.net';
      }
    }
}
