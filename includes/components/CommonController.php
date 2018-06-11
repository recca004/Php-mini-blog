<?php
namespace includes\components;

class CommonController {

    protected $_action;
     protected $_router;
    protected $_view;
    protected $_datas = [];

    public function __construct($actionUrl, $routerUrl) {
        $this->_action = $actionUrl;
         $this->_router = $routerUrl;


        $this->_process();
    }
    
      public function get_view() {

        return $this->_view;
    }

    public function get_datas() {

        return $this->_datas;
    }

}
