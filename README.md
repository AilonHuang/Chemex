<img style="width: 100%" src="https://oss.celaraze.com/chemex/banner.gif"/>

<div align="center">
    <img src="https://oss.celaraze.com/chemex/logo.png" />
</div>

<p align="center">
<a href="http://chemex.it" target="_blank">Chemex 官方网站</a> |
<a href="https://chemex.famio.cn" target="_blank">Demo 演示站点</a>
</p>

<p align="center">
    <img src="https://img.shields.io/badge/Latest Release-1.7.3-orange" />
    <img src="https://img.shields.io/badge/PHP-7.3+-green" />
    <img src="https://img.shields.io/badge/MariaDB-10.2+-blueviolet" />
    <img src="https://img.shields.io/badge/License-GPL3.0-blue" />
</p>

<p align="center">
    <img src="https://travis-ci.com/Celaraze/Chemex.svg?branch=main" />
    <img src='https://gitee.com/celaraze/Chemex/badge/giteego.svg?name=PHP base env build&id=13010' />
    <img src="https://github.com/Celaraze/Chemex/workflows/Laravel/badge.svg?event=push" />
    <img src="https://app.fossa.com/api/projects/git%2Bgithub.com%2FCelaraze%2FChemex.svg?type=shield" />
</p>

<p align="center">
    <img src="https://app.fossa.com/api/projects/git%2Bgithub.com%2FCelaraze%2FChemex.svg?type=large" />
</p>

## 鸣谢

没有它们就没有 Chemex 咖啡壶：

`JetBrains` 提供优秀的IDE。

<a href="https://www.jetbrains.com/?from=Chemex" target="_blank">
<img src="https://oss.celaraze.com/chemex/jetbrains.svg" />
</a>

[Laravel](https://laravel.com/) ，优雅的 PHP Web 框架。

[Dcat Admin](https://dcatadmin.com) ，高颜值、高效率的后台开发框架。

`Dr. Peter Schlumbohm`，感谢发明了 Chemex 冲煮咖啡。

## 简介

Chemex 是一个轻量的、现代设计风格的 ICT 资产管理系统。得益于 [Laravel](https://laravel.com/) 框架以及 [Dcat Admin](https://dcatadmin.com) 开发平台，使其具备了优雅、简洁的优秀体验。
Chemex 是完全免费且开源的，任何人都可以无限制的修改代码以及部署服务，这对于很多想要对ICT资产做信息化管理的中小型企业来说，是一个很好的选择：低廉的成本换回的是高效的管理方案，同时又有健康的生态提供支持。

<p align="center">
    <img src="https://oss.celaraze.com/chemex/Chemex%20%E5%92%96%E5%95%A1%E5%A3%B6%20%281%29.png" />
</p>

## 特点

优秀的 RBAC 权限控制。

尽可能的操作简化。

支持在线更新，随时保持应用的最新版本。

数据支持导出导入，迁移更方便。
    
### 版本号命名

Chemex 咖啡壶将会以咖啡豆品种作为 `major` 版本的命名，例如 `1.x` 版本称为 `肯亚（Kenya）`，旨在为 ICT 运维人员提供管理能力的同时，普及咖啡知识，静下心喝一杯属于当前版本的冲煮咖啡。

|major|版本名|发布|
|----|----|----|
|1.x|肯亚（Kenya）|✔|
    
### 开发计划

|序号|项目|状态|优先级|
|----|----|----|----|
|1|制造商管理基础|✔|紧急|
|2|雇员管理基础|✔|紧急|
|3|硬件管理基础|✔|紧急|
|4|软件管理基础|✔|紧急|
|5|设备管理基础|✔|紧急|
|6|盘点管理基础|✔|紧急|
|7|自动生成二维码|✔|一般|
|8|扫描二维码查看信息|✔|一般|
|9|硬件归属|✔|紧急|
|10|软件归属|✔|紧急|
|11|软件授权数量管理|✔|一般|
|12|软件解除归属|✔|一般|
|13|历史履历|✔|紧急|
|14|操作人员全记录|✔|紧急|
|15|简易部署|✔|紧急|
|16|图表基础|✔|一般|
|17|图表更多的优化|✔|一般|
|18|移动端盘点|✔|一般|
|19|数据库导出（备份）|❌|紧急|
|20|人性化的站点配置|❌|一般|
|21|服务程序管理基础|✔|一般|
|22|服务程序状态看板|✔|一般|
|23|设备在线SSH管理|✔|一般|
|24|维修管理基础|✔|紧急|
|25|支持OTA升级|✔|紧急|

## 环境要求

`PHP 7.3 +`

`MariaDB 10.2 +`

`ext-zip` 扩展，注意和 PHP 版本相同。

`ext-json` 扩展，注意和 PHP 版本相同。

源码开发依赖于 `composer` 包管理器。

## 部署

> 注意：使用过程中，必须避免直接修改数据库数据，Laravel 拥有强大的 Eloquent ORM 模型层，Chemex 中的所有逻辑交互都由模型关联完成，直接修改数据库数据将会导致未知的错误。应用脱离数据库直接交互是现在最流行的做法。

### 生产环境

#### 源码部署

> 视频部署演示教程：https://www.bilibili.com/video/BV1uK4y1j7pw/

生产环境下为遵守安全策略，非常建议在服务器本地进行部署，暂时不提供相关线上初始化安装的功能。因此，虽然前期部署的步骤较多，但已经为大家自动化处理了很大部分的流程，只需要跟着下面的命令一步步执行，一般是不会有部署问题的。

1：为你的计算机安装 `PHP` 环境，参考：[PHP官方](https://www.php.net/downloads) 。

2：为你的计算机安装 `mariaDB` ，并且有可以使用的 `mariadb-client` 客户端工具，一般安装完 `MariaDB` 会自动安装，如果在 Ubuntu 上可能需要另外执行 `sudo apt install mariadb-client` 进行安装。

3：创建一个数据库，命名任意，但记得之后填写配置时需要对应正确，并且数据库字符集为 `utf8-general-ci`。

4：下载 [发行版](https://gitee.com/celaraze/Chemex/releases) ，解压得到程序目录，放置到你想要放置的地方。

5：在项目根目录中，复制 `.env.example` 文件为一份新的，并重命名为 `.env`。

6：在 `.env` 中配置数据库信息以及 `APP_URL` 信息。

7：进入项目根目录，执行 `php artisan migrate` 进行数据库迁移。

8：进入项目根目录，执行 `php artisan chemex:install` 进行安装。

9：你可能使用的web服务器为 `nginx` 以及 `apache`，无论怎样，应用的起始路径在 `/public` 目录，请确保指向正确。

10：修改web服务器的伪静态规则为：`try_files $uri $uri/ /index.php?$args;`。

11：为了确保在线自动更新可用，请确认网站根目录及其所有子目录的权限为可读写，即 `755`，拥有者为 `www`。

12：此时可以通过访问 `http://your_domain` 来使用 Chemex，如果 `admin` 的账号密码不正确，请执行 `php artisan chemex:reset` 来重置管理员账号密码为：`admin / admin`。

#### OVF部署

下载地址：[Chemex_OVF.7z](https://pan.baidu.com/s/1BuuXEI9rGL3x3mG-idvsMw) ，提取码： `nh5o` 。

出于此系统使用的最终用户均以IT运维人员居多，考虑到部署过程中可能涉及到的开发相关配置，为了减少这部分的依赖，也提供了 `OVF` 的开放虚拟机格式部署方式。支持 `ESXi 6.5+` 和 `VMWare WorkStation 10+` ，只需要导入即可完成部署。

导入方式不再赘述了，这是IT运维人员的基本操作，这里有一些配置需要注意：

`LNMP` 环境使用了 [AppNode](https://www.appnode.com/) 作为面板，访问地址：`http://127.0.0.1:8888`，用户名密码均为 `admin`。

在面板中已经部署好了 Chemex 最新版本，可以在 `AppNode面板` 中找到 `网站管理` 查看，面板的使用方法也请移步参照官方。

此 `OVF` 基于 `CentOS 7` 制作，`root` 密码为 `123456`，桌面 GUI 环境登录用户为 `chemex`，密码为 `ITuser123!`。

数据库 `root` 密码为 `123456`。

Chemex 访问地址 `http://127.0.0.1`，剩下的本地化配置还请自行修改站点配置。

### 开发环境

欢迎对此感兴趣的开发者进行协同开发，使 Chemex 更趋于完美。开发过程相对于简单，没有过多得环境配置和改动。

1：为你的计算机安装 `PHP` 环境，参考：[PHP官方](https://www.php.net/downloads) 。

2：安装 `composer` 包管理工具，参考：[composer官方](https://getcomposer.org/download/) 。

3：在项目根目录中，复制 `.env.example` 为 `.env`。

4：在 `.env` 中配置数据库信息以及 `APP_URL` 信息。

5：进入项目根目录，执行 `php artisan migrate` 进行数据库迁移。

6：仍然在项目根目录中，执行 `php artisan chemex:install` 进行安装。

7：参考 [Laravel](https://laravel.com/) 以及 [Dcat Admin](https://dcatadmin.com) 相关文档进行开发。

## 更新

### 自动

Chemex支持自动在线自动更新，进入菜单 `更新` 进行操作即可。

为了确保在线自动更新可用，请确认网站根目录及其所有子目录的权限为 `755`，拥有者为 `www`。

### 手动

下载最新的 Release 包，覆盖文件到根目录即可，其它可能的配置修改参考 Release 说明。

## 截图

![](https://oss.celaraze.com/cache/screencapture-chemex-dev-famio-cn-auth-login-1603706219204.png)

![](https://oss.celaraze.com/cache/screencapture-chemex-dev-famio-cn-1603706238227.png)

![](https://oss.celaraze.com/cache/screencapture-chemex-dev-famio-cn-device-records-1603706430021.png)

![](https://oss.celaraze.com/cache/screencapture-chemex-dev-famio-cn-1603706418946.png)

![](https://oss.celaraze.com/cache/screencapture-chemex-dev-famio-cn-update-1603706399037.png)

![](https://oss.celaraze.com/cache/screencapture-chemex-dev-famio-cn-device-records-1603706347150.png)

![](https://oss.celaraze.com/cache/screencapture-chemex-dev-famio-cn-software-records-1603706367326.png)

![](https://oss.celaraze.com/cache/screencapture-chemex-dev-famio-cn-software-records-1603706441673.png)

## 参与贡献

1：`Fork` 本仓库，修改代码，提交 `Pull Request`。

2：如果您的组织、公司正在使用Chemex，请在 issue 中告知。

## 开源协议

Chemex 遵循 [GPL3.0](https://www.gnu.org/licenses/gpl-3.0.html) 开源协议。
