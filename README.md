# Happy New Year
愿望清单。一个简单的web页面，记录你的新年愿望。一年之后再通过邮箱/短信发送给你
## 使用指南
### 部署环境
- MySQL
- PHP5+

### 配置流程
- 重命名config目录下的**config-sample.xml**文件为**config.xml**，并修改其中的数据库信息为你的机器环境。
- 打开mysql（命令行或GUI客户端），执行config目录下的**dream.sql**脚本，构建数据库。

>如果你使用mysql命令行。你可以在shell的config目录中，打开mysql CLI：

```shell
mysql -u用户名 -p
```
成功登录之后，执行dream.sql脚本
```mysql
source dream.sql;
```

## LICENSE
**MIT协议**
