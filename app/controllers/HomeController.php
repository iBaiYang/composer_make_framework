<?php

/**
 * \HomeController
 */
class HomeController extends BaseController
{
    public function home()
    {
//        echo "<h1>控制器成功！</h1>";
//        Article::first();
//        $article = Article::first();
//        require dirname(__FILE__).'/../views/home.php';

        $this->view = View::make('home')
            ->with('article', Article::first())
            ->withTitle('MFFC :-D')
            ->withFuckMe('OK!');
    }
}