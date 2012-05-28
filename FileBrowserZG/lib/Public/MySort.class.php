<?php

/*
 * ****************************************
 * FileName : MySort.class.php
 * Author : Quanhua
 * Creation Time : 2012-5-26
 * Description : 用到的特殊排序
 *
 * Modifier : Quanhua
 * Modification Time : 2012-5-26
 * Description : 创建
 * 
 * ****************************************
 */

class MySort {
    
    /**
     * 对二位数组,按照第二维的某个元素进行排序
     * @param array $multi_array 要排序的二维数组, 必须是整齐的二维数组,比如一张二维表
     * @param mixed $sort_field 第二维的元素的下标或键
     * @param string $sort_type 排序的结果的类型,升序或降序
     * @return mixed 成功返回排好序的数组, 失败返回false
     */
    public static function multi_array_sort($multi_array, $sort_field, $sort_type = SORT_ASC) {
        if (!is_array($multi_array))//判断是否是数组
            return FALSE;
        //获取排序参考数组$arr_field
        $arr_field = array();
        foreach ($multi_array as $row) {
            if (!is_array($row))//判断是否是数组
                return FALSE;
            $arr_field[] = strtolower($row[$sort_field]);
        }
        //多数组排序,$multi_array被改变
        array_multisort($arr_field, $sort_type, $multi_array);
        //返回
        return $multi_array;
    }
}

