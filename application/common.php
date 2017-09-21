<?php

/**
 * print_r()函数优化
 *
 * @param $str
 */
function p($str){
    echo '<div style="border: 1px solid bisque;border-bottom-color:red;border-right-color:red;color:green;background-color: bisque;"><pre>';
    print_r($str);
    echo '</pre></div>';
}


/**
 * var_dump()函数优化
 * @param $str
 */
function v($str){
    echo '<div style="border: 1px solid bisque;border-bottom-color:red;border-right-color:red;color:green;background-color: bisque;"><pre>';
    var_dump($str);
    echo '</pre></div>';
}


/**
 * dump()函数优化
 * @param $str
 */
function d($str){
    echo '<div style="border: 1px solid bisque;border-bottom-color:red;border-right-color:red;color:green;background-color: bisque;"><pre>';
    dump($str);
    echo '</pre></div>';
}

/**
 * 打印最近使用的SQL语句
 * @param $model
 */
function ps($model){
    $re = $model -> getLastSql();
    p($re);
}

/**
 * 生成订单号
 * @return string
 */
function make_orderId(){
    $mic     = explode(".",(microtime()));
    $mictime = $mic[1];
    $midtime = explode ( " ", $mictime);
    $reftime = $midtime[0];                                  //取微秒
    $time    = date("YmdHis",time());                        //取年月日时分                                                     //取年月日时分秒
    
    $sdcustomno  = $time.$reftime.rand(10,99);               //订单在商户系统中的流水号 商户信息+日期+随机数
    return $sdcustomno;
}