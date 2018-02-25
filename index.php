<?php
/**
 * 应用入口文件
 * 1. 检查环境
 * 2. 定义常量
 * 3. 包含框架核心
 */
define("APP_PATH", "./App/");
define("CORE", "./Core/");
define("APP_DEBUG", true);
define("ROOT", __DIR__ . '/');

require CORE . 'Riven.php';
