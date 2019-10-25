<?php
$file = $_FILES['file'];    //用于接收文件
    /*
     * name=> ‘logo.png’   上传文件的名字
     * type=>‘image/png’    类型
     * tmp_name=>''     临时路径
     * error=>''      状态码  0  代表上传成功
     * size=>213    单位 是 B
     * */
//    tmp_name ->uploads/20190927/xxx.png

if(!is_dir('../uploads')){
    mkdir('../uploads');
}

$data = date('Ymd');

if (!is_dir('../uploads/'.$data)){
    mkdir('../uploads/'.$data);
}
$imgname=time() . mt_rand(0,99999);
$ext = substr($file['type'],6);
$imgname .= '.'.$ext;

$movepath = '../uploads/'.$data.'/'.$imgname;
$webpath = '/wehome/uploads/'.$data.'/'.$imgname;
$result=move_uploaded_file($file['tmp_name'],$movepath);

if ($result){
    echo json_encode([
        'code'=>200,
        'msg'=>'图片上传成功',
        'src'=>$webpath
    ]);
}else{
    echo json_encode([
        'code'=>404,
        'msg'=>'图片上传失败'
    ]);
}