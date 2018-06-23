# API Redirect
获取 重定向 后的得真实地址

Demo: `GET https://api.littlehands.site/Redirect/` （[API-RedirectExt](https://www.littlehands.site/archives/API-RedirectExt.html)）

[GitHub 地址](https://github.com/moeshin/API-Redirect) | [GitHub 下载](https://codeload.github.com/moeshin/API-Redirect/zip/master)

<!--more-->

## 参数说明
参数|说明
-|-
url|请求地址

## 返回说明
参数名|类型|说明
-|-|-
url|string|返回地址
code|int|状态码

### 举个栗子
请求：

`GET https://api.littlehands.site/Redirect/?url=https://baidu.com`

返回：
```javascript
[
	{
		"url":"https://baidu.com", //原请求地址
		"code":302
	},
	{
		"url":"http://www.baidu.com/", //最终真实地址
		"code":200
	}
]
```
