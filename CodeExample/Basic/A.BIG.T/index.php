<?php

/*
 * License: MIT
 *    Time: 2017-02-12 00:25:32
 *    Name: A.BIG.T.php
 *    Note: CloudGate A.BIG.T Basic Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'A.BIG.T.Conf');

# ClouGate控制器
require_once "../../Controller/Controller.php";

# Cloud配置信息
echo "[General]\r\n";
echo CURL(true,$RuleList['General']).$CURLContent."\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "#  \r\n";
echo "# A.BIG.T Config File [CloudGate]\r\n";
echo "# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
echo '🇨🇳 = custom,172.0.0.1,80,aes-256-cfb,Password'."\r\n";
echo '🇳🇫 = custom,172.0.0.1,80,aes-256-cfb,Password'."\r\n";
echo '🇬🇧 = custom,172.0.0.1,80,aes-256-cfb,Password'."\r\n";
echo "[Proxy Group]\r\n";
echo "Proxy = select, 🇨🇳, 🇳🇫, 🇬🇧\r\n";

# CloudGate模块
echo "[Rule]\r\n";
echo Replace(CURL($RuleList['Default']).$CURLContent,'A.BIG.T').$ABIGT_Default;
echo Replace(CURL($RuleList['Advanced']).$CURLContent,'A.BIG.T').$ABIGT_Advanced;
echo Replace(CURL($RuleList['DIRECT']).$CURLContent,'A.BIG.T').$ABIGT_DIRECT;
echo Replace(CURL($RuleList['REJECT']).$CURLContent,'A.BIG.T').$ABIGT_REJECT;
echo Replace(CURL($RuleList['USERAGENT']).$CURLContent,'A.BIG.T').$ABIGT_USERAGENT;
echo Replace(CURL($RuleList['KEYWORD']).$CURLContent,'A.BIG.T').$ABIGT_KEYWORD;
echo Replace(CURL($RuleList['IPCIDR']).$CURLContent,'A.BIG.T').$ABIGT_IPCIDR;
echo Replace(CURL($RuleList['Other']).$CURLContent,'A.BIG.T').$ABIGT_Other;
echo "[Host]\r\n";
echo Replace(CURL($RuleList['Host']).$CURLContent,'A.BIG.T').$ABIGT_Host;
echo "[URL Rewrite]\r\n";
echo Replace(CURL($RuleList['Rewrite']).$CURLContent,'A.BIG.T').$ABIGT_Rewrite;

?>