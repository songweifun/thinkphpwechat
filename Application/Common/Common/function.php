<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午4:44
 */

function dd( $data ) {
    echo "<pre>" . print_r( $data, true );
}

/**
 * 全局变量
 *
 * @param $name 变量名
 * @param string $value 变量值
 *
 * @return mixed 返回值
 * v('a','abc');  v('a')
 */
if ( ! function_exists( 'v' ) ) {
    function v( $name = null, $value = '[null]' ) {
        static $vars = [ ];
        if ( is_null( $name ) ) {
            return $vars;
        } else if ( $value == '[null]' ) {
            //取变量
            $tmp = $vars;
            foreach ( explode( '.', $name ) as $d ) {
                if ( isset( $tmp[ $d ] ) ) {
                    $tmp = $tmp[ $d ];
                } else {
                    return null;
                }
            }

            return $tmp;
        } else {
            //设置
            $tmp = &$vars;
            foreach ( explode( '.', $name ) as $d ) {
                if ( ! isset( $tmp[ $d ] ) ) {
                    $tmp[ $d ] = [ ];
                }
                $tmp = &$tmp[ $d ];
            }

            return $tmp = $value;
        }
    }
}


/**
 * 生成模块的后台访问地址
 */
function site_url($url,$args=[]){
    //$data=get_defined_constants(true);
    //dd($data['user']);
    $info=explode('.',$url);
    return __APP__.'?'."mo=".$info[0].'&ac='.$info[1].'&t=Site&'.http_build_query($args);

}

/**
 * 生成模块的前台访问地址
 */
function web_url($url,$args=[]){
    //$data=get_defined_constants(true);
    //dd($data['user']);
    $info=explode('.',$url);
    return __APP__.'?'."mo=".$info[0].'&ac='.$info[1].'&t=Web&'.http_build_query($args);

}