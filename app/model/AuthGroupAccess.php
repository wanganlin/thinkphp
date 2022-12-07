<?php

declare (strict_types = 1);

namespace app\model;

use think\Model;

class AuthGroupAccess extends Pivot
{
    /**
     * @var string
     */
    protected $table = 'auth_group_access';

}
