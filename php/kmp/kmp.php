<?php


// var_dump(kmp_search('abcadaabcadcac', 'abcabc'));
//var_dump(kmp_search('abcadaabcadcac', 'abcaba'));
var_dump(kmp_search('ababaabaabac', 'abaabac'));
function kmp_search($main_string, $sub_string)
{
    $next = make_next($sub_string);
    var_dump($next);
    $main_len = strlen($main_string);
    $j = 0;
    for ($i = 0; $i < $main_len;) {
        if ($main_string[$i] == $sub_string[$j]) {
            echo '在', 'main: $i=',$i, '->', $main_string[$i], '，sub: $j=', $j, '->', $sub_string[$j], '相等', PHP_EOL;
            $j++;
            $i++;
        }
        else {
            echo '在', 'main: $i=',$i, '->', $main_string[$i], '，sub: $j=', $j, '->', $sub_string[$j], '不相等', PHP_EOL;
            $old_j = $j;
            $j = $j - ($j - $next[$j - 1]);
            echo '$next[', $old_j, '- 1] = ', $next[$old_j-1], '，跳转位', $old_j - $next[$old_j - 1], PHP_EOL;
        }
        sleep(1);
    }
}


function make_next($sub_string)
{
    $next = [0];
    $sub_len = strlen($sub_string);
//    var_dump('元字符：', $sub_string);

    for ($i = 1; $i < $sub_len; $i++)
    {
        $next[$i]  = 0;
        $sub_str = substr($sub_string, 0, $i + 1);
        $sub_sub_len = strlen($sub_str);
        $local_index = ceil($sub_sub_len  / 2);
//        var_dump('$sub_str: '. $sub_str, '$i :' . $i);
        for ($j = 0; $j < $local_index; $j++) {
            $prefix_str = substr($sub_str, 0, $j + 1);
            $endfix_str = substr($sub_str, $sub_sub_len - $j - 1);
//            var_dump('prefix_str:' . $prefix_str, 'endfix_str: ' . $endfix_str);
            if ($prefix_str == $endfix_str) {
                $next[$i] = strlen($endfix_str);
//                var_dump('next[i]:' . $next[$i]);
            }
        }

//        var_dump('$local_index:' .$local_index, '$sub_str: '. $sub_str, '$i = ' . $i, 'prefix_str:' . $prefix_str, 'endfix_str: ' . $endfix_str);
    }
//    var_dump($next);
//    exit;
    return $next;
}
