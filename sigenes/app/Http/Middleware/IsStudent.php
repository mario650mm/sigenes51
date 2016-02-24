<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 23/02/16
 * Time: 09:13 PM
 */

namespace App\Http\Middleware;


class IsStudent extends IsType{

    public function getType()
    {
        return 'student';
    }
}