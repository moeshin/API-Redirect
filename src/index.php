<?php
/**
 * API Redirect
 * 
 * @author 小さな手は
 * @version 1.0.0
 * @link https://www.littlehands.site/
 * @link https://github.com/moeshin/API-Redirect/
 */
require '../api.php';
$api = new API();

$url = $api->get('url')
	or $api->over([
		'message' => '参数错误'
	]);

$code = [];
$rs = [];
$r = get_headers($url, 1);

is_array($loc = empty($r['Location'])?[]:$r['Location']) or $loc = [$loc];

$loop = count($loc);

for ($i = 0; $i < $loop+1; $i++) {
	$rs[] = [
		'url' => $i?$loc[$i-1]:$url,
		'code' => empty($r[$i])?0:preg_replace('#^.* (\d*) .*$#', '$1', $r[$i])+0
	];
}

$api->out($rs);
?>