<?php

/**
 * git项目 git到远程的创作命令
 * 使用步骤：
 *	①准备工作
 *		1.初始化身份信息（只要不变换电脑，只需要做1次即可）
 *       git config --global user.name '用户名'
 *       git config --global user.email '邮箱地址'   
 *		2.克隆仓库代码（下载仓库代码） /  拉取最新的（pull，更新）
 *		git clone HTTPS 下载地址
 *      【工作第1天：克隆，其后的每1天开工前都是pull】
 *          git pull
 *	②写代码（对代码的编辑、创建、删除操作）
 *	③提交本地仓库（暂存区）
 *      git add .
 *	④提交到远程仓库（当天下班的时候）
 *  git commit -m '注释'
 *  git push
 *
 */

 echo '更新了git https操作';