<?php

declare (strict_types = 1);

namespace app\model;

use think\Model;

class User extends Model
{
    /**
     * @var string
     */
    protected $table = 'user';

    /**
     * @var string
     */
    protected $pk = 'id';

}
