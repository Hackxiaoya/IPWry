# IPWry
IPWry  
  
纯真 IP 库 Laravel 版 。  
  
数据库版本：2020-10-01  
  
纯真IP库  
官网：http://www.cz88.net  
在官网右上角有个IP数据库下载  
  
  
#### 安装
> composer require hackxiaoya/ipwry  

更新你的依赖包 composer update 或者全新安装 composer install。
  
  
#### 例子
Facades用法  
> $ip = mt_rand(); // 取一个随机IP。  
> $ip = IPWry::ntoa($ip); // 将IP转换成文本型格式。  
> $record = IPWry::query($ip); // 取出IP对应的地址。  
> echo "\n", $ip, "\t", $record['country'], "\t", $record['area']; // 输出结果。  

在视图中
> @inject('ipwry', 'ipwry')  
> {{ $ipwry->query('127.0.0.1')->implode(' ') }}  
