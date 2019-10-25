<?php
/**
 *连接数组的属性
 */
function joinkeys($arr){
    $str = '';
    foreach ($arr as $key => $value){
        $str .= $key.',';
    }
    $str = substr($str,0,-1);
    return $str;
}
/**
 * 连接数组元素
 */
function joinValues($arr){
    $str = '';
    foreach ($arr as $key => $value){
        $str .= "'$value',";
    }
    $str = substr($str,0,-1);
    return $str;
}
/*
 * 实现拼接键值对
 * $关联数组
 */
function joinKeysValues($arr){
    $str='';
    forEach($arr as $key=>$value){
        $str .="$key='$value',";

    }
    $str = substr($str,0,-1);
    return $str;
}