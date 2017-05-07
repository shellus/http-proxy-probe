# HTTP代理探针
探测代理可用性及匿名度

### 使用方法：
 在请求参数(query-string)中加入一个uuid，然后使用代理服务器请求，如果响应中不存在这个uuid，则可以认为这个代理服务器是不可用的。
 
 如果uuid存在于响应中，可以进行下一步解析，使用一个`\n<br>`来分割每一行，使用`: `来分割键值，形成一个数组。
 
 判断数组中有没有`X-Forwarded-For`这个key，如果没有，说明这是一个高度匿名代理。检查这个key中有没有自己的外网ip，如果没有，说明这是一个匿名代理服务器, 如果有，说明是一个普通代理服务器。
 
 你还可以检查更多，例如检查代理服务器是否帮助你传输了cookie。