<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/10/10
 * Time: 16:14
 */

namespace app\admin\Validate;


use think\Validate;

class Nav extends Validate
{
    protected $rule = [
        'id'=>'require|number',
        'nname'=>'require',
        'ename'=>'require|alpha',
        'nsort'=>'require|number',
        'ntpl'=>'require',
        'field'=>'require',
        'value'=>'require'
    ];
    protected $message = [

    ];
    protected $scene = [
        'insert'=>['nname','ename','nsort','ntpl'],
        'del'=>['id'],
        'update'=>['field','value']
    ];
}