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

        $this->mail = Mail::to(['ooxx@gmail.com', 'ooxx@qq.com'])
            ->from('MotherFucker <ooxx@163.com>')
            ->title('Fuck Me!')
            ->content('<h1>Hello~~</h1>');
    }
}