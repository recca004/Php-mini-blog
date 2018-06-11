<?php
namespace application\contact;

use includes\components\CommonController;
use application\contact\ModelContact;


class Controller extends CommonController
{

    protected function _process()
   {
        echo $this->_action;
        switch ($this->_action) 
        {
            case 'send':
 $this->_view = 'contact/contact_sent.php';
                break;

            default :

                $this->_view = 'contact/contact.php';

                break;
        }
   }
} 

  
