<?php

namespace alirezax5\XuiApi\Panel;

class FranzKafkaYu extends Base
{

    public function updateSetting($webPort, $webCertFile, $webKeyFile, $webBasePath, $xrayTemplateConfig, bool $tgBotEnable = false, $tgNotifyExpireTimeDiff = 0, $tgNotifyTrafficDiff = 0, $cpulimitNotifyConfig = 0, string $tgBotToken = null, $tgBotChatId = null, $tgRunTime = null, $timeLocation = 'Asia/Tehran', $webListen = '')
    {
        $com = compact('webPort', 'webCertFile', 'webKeyFile', 'webBasePath', 'xrayTemplateConfig', 'tgBotEnable', 'tgNotifyExpireTimeDiff', 'tgNotifyTrafficDiff', 'cpulimitNotifyConfig', 'tgBotToken', 'tgBotChatId', 'tgRunTime', 'timeLocation', 'webListen');
        return $this->curl('updateSetting', $com, true);
    }

    public function addInbound($remark, $port, $protocol, $settings, $streamSettings, $autoreset = false, $ipalert = false, $iplimit = 0, $sniffing = null, $expiryTime = 0, $listen = '')
    {
        $sniffing = $sniffing == null ? $this->defaults['sniffing'] : $sniffing;
        $sniffing = json_encode($sniffing);
        $settings = json_encode($settings);
        $streamSettings = json_encode($streamSettings);
        return $this->curl('addInbound', compact('remark', 'port', 'protocol', 'settings', 'streamSettings', 'autoreset', 'ipalert', 'iplimit', 'sniffing', 'expiryTime', 'listen'), true);
    }

    public function editInbound($enable, $id, $remark, $port, $protocol, $settings, $streamSettings, $autoreset = false, $ipalert = false, $iplimit = 0, $sniffing = null, $expiryTime = 0, $listen = '')
    {
        $sniffing = $sniffing == null ? $this->defaults['sniffing'] : $sniffing;
        $sniffing = json_encode($sniffing);
        $settings = json_encode($settings);
        $streamSettings = json_encode($streamSettings);
        $this->setId($id);
        return $this->curl('updateInbound', compact('enable', 'remark', 'port', 'protocol', 'settings', 'streamSettings', 'autoreset', 'ipalert', 'iplimit', 'sniffing', 'expiryTime', 'listen'), true);
    }
}