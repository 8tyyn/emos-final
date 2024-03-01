<?php
function truncateString($str, $length) {
    if (strlen($str) > $length) {
        $str = substr($str, 0, $length) . '...';
    }
    return $str;
}