# lottery_show
现场大转盘抽奖，适用于会场参展等场景。
[「平安好医生」](http://jk.cn)参加2015年移动互联网大会的现场抽奖解决方案。

### 环境要求
- 部署在支持PHP运行的环境
- 在浏览器中进行抽奖，浏览器需要支持HTML5，支持local storage

### 功能
- 支持不同奖项中奖概率及次数配置
- 支持回车键、空格键和鼠标点击触发抽奖


### 实现
- 原始方案（抽奖与转盘的基本逻辑） ：来自 http://www.thinkphp.cn/code/1153.html 
- 新增：抽奖次数通过javascript 保存在浏览器local storge中
- 新增：按回车、空格键抽奖

### Demo
- http://lottery.zuogang.li

