<?php

namespace application\articles;

use includes\Db;

class ModelArticle {
    //put your code here
    public function articlesJSON() {


        $datas = [];


        $articles = $this->articles();

        while ( $row = $articles['articles']->fetch_array() )
          {
            $datas[] = $row;
        }
        return json_encode($datas);
    }

    public function articles() {

        $datas = [];
        $db = Db::connect();

        $results = $db->query('SELECT * FROM articles');

        if (!$db->errno && $results->num_rows > 0) {
            $datas['articles'] = $results;

        }
        return $datas;

        $this->_view = 'articles/articles.php';
    }

    public function article($id) {

      $datas = [];
      $db = Db::connect();

      $results = $db->query('SELECT * FROM articles WHERE IdArticle=23');

      if (!$db->errno && $results->num_rows > 0) {
          $datas['articles'] = $results;

      }
      return $datas;

      $this->_view = 'articles/articles.php';




    }





        public function addArticle() {

          $datas = array();

          $db = Db::connect();

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $TitleArticle=$_POST['TitleArticle'];
              $IntroArticle=$_POST['IntroArticle'];
              $ContentArticle=$_POST['ContentArticle'];
              //SELECT * FROM articles WHERE IdArticle = \''.$db->real_escape_string($id).'\'
              $results = $db->query( "INSERT INTO `articles` (`IdArticle`, `TitleArticle`, `IntroArticle`, `ContentArticle`) VALUES (NULL, '$TitleArticle', '$IntroArticle', '$ContentArticle') ");
              $this->_view = 'articles/articles.php';
            }

        }

        public function deleteArticle($id) {

          $datas = array();

          $db = Db::connect();


              //SELECT * FROM articles WHERE IdArticle = \''.$db->real_escape_string($id).'\'
              $results = $db->query( "FROM `articles` WHERE `articles`.`IdArticle` =$id ");



        }

}
