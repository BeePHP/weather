<?php
// beesoft api
return [
	// 地图
	'baidu_map' => [ // 百度地图 https://map.baidu.com http://lbsyun.baidu.com
		'base_url' => '',
		'api_key' => env('BAIDU_MAP_API_KEY', ''),
	],
	'amap' => [ // 高德地图 https://www.gaode.com/ https://www.amap.com https://lbs.amap.com
		'base_url' => 'https://restapi.amap.com/v3/weather/weatherInfo',
		'api_key' => env('AMAP_API_KEY', ''),
	],
	'tencent_map' => [ // 腾讯地图 https://map.qq.com https://lbs.qq.com
		'base_url' => '',
		'api_key' => env('TENCENT_MAP_API_KEY', ''),
	],
	'google_map' => [ // 谷歌地图 https://www.google.com/maps
		'base_url' => '',
	],
	'yahoo_map' => [ // 雅虎地图 https://maps.yahoo.com
	],
	'bing_map' => [ // bing 地图 https://bing.com/maps
	],
	'yandexo_map' => [ // yandex 地图 https://yandex.com/maps
	],
	'goo_map' => [ // goo 地图 https://map.goo.ne.jp/map
	],
	'naver_map' => [ // naver 地图 https://map.naver.com
	],
	// 其它
	'remove_bg' => [ // https://www.remove.bg
		'base_url' => '',
		'api_key' => env('FACEPLUSPLUS_API_KEY', 'zHHHwk9oPpNVFmti6m6UVbS9'),
	],
	'faceplusplus' => [ // https://www.faceplusplus.com.cn
		'base_url' => 'https://api-cn.faceplusplus.com',
		'api_key' => env('FACEPLUSPLUS_API_KEY', '5uqLK56hVVR1vyCF5wyphK68PtlfIWaX'),
		'api_secret' env('FACEPLUSPLUS_API_SECRET', 'vXrpKg0xrld-eYh8ic65-wEsp7-O_oHr'),
	],
	// body
	// '/humanbodypp/v2/segment', // 人体识别
	// '/humanbodypp/v1/gesture', // 手势识别
	// '/humanbodypp/v1/detect', // 人体属性分析
	// '/humanbodypp/v1/skeleton', // 人体骨骼检测
	'linkpreview' => [
		'base_url' => 'https://api.linkpreview.net',
		'api_key' => env('LINKPREVIEW_API_KEY', '5da337efc8a48e73f706c780fe6b7b5e0334d4a2a1834'),
	],
];
