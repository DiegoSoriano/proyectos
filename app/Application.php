<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 06/12/2017
 * Time: 03:35 PM
 */

namespace App;


class Application extends \Illuminate\Foundation\Application
{
    public function publicPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'public_html';
    }
}