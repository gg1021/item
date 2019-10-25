<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/10/11
 * Time: 15:45
 */

namespace app\admin\controller;


class Upload
{
    public function index(){

        $file = request()->file('file');

        if ($file){
            $info = $file->validate(['size'=>200*1024,'ext'=>'png,jpg,jpeg,gif,webp'])->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($info){
                $src = UPLOAD_PATH.$info->getSaveName();
                return json([
                    'code'=>0,'msg'=>'上传成功','data'=>['src'=>$src]
                ]);
            }else{
                $file->getError();
                return json([
                    'code'=>400,'msg'=>'上传失败',
                ]);

            }
        }
    }
}