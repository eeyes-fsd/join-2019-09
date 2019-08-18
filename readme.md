# e瞳网2019年招新页面
### 简介
此仓库包含2019年e瞳网招新页面后端代码  
后端主要实现数据API与后台管理功能  
## 技术栈
### 项目模板
* 项目使用 `Laravel 5.8` 开发  
* API系统使用 `Dingo/Api` 项目  
* 内容处理使用 `Mews/Purifier` 项目
### 项目部署
#### 环境要求
https://laravel.com/docs/5.8
* PHP >= 7.1.3 (实际中由于部分包的限制，要求 PHP >= 7.2)
* BCMath PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* Mbstring PHP Extension
* OpenSSL PHP Extension
* PDO PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
#### 部署步骤
复制 `.env.example` 到 `.env` 并修改其中数据库、API的相关配置  
修改目录 `/storage` `/bootstrap/cache` 的访问权限  
运行命令 `php artisan key:generate`  
运行命令 `php artisan migrate`  

## LICENSE

MIT License

Copyright (c) 2018 eeyes.net

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
