<?php
namespace application\articles;

use includes\components\CommonController;
use application\articles\ModelArticle;

include_once SITE_PATH . '/application/articles/ModelArticle.php';

Class Controller  extends CommonController{



    protected function _process()
 {
        $model_article = new ModelArticle;

        if ($this->_action === 'details')
            {
              $this->_datas = $model_article->article($this->_router);

              $this->_view = 'articles/articles.php';
            // $this->_view = 'articles/article_detail.php';
            // $this->_datas = $model_article->article($this->_router);


            }

            else if ($this->_action === 'form')
                {

             $this->_view = 'articles/article_form.php';
                 }

            else if ($this->_action === 'ajax')
            {
                     echo $model_article->articlesJSON();
                     exit;

            }
            else if ($this->_action === 'add')
            {
                     $this->_datas= $model_article->addArticle();
                     $this->_view = 'articles/article_form.php';

            }
            else if ($this->_action === 'delete')
            {
                     $this->_datas= $model_article->deleteArticle($this->_router);
                      exit;

            }


        else {
            $this->_datas = $model_article->articles();

            $this->_view = 'articles/articles.php';
        }


    }

}
