<?php

namespace Mediatis\FormrelayJsonrequest\Destination;

use Mediatis\Formrelay\Destination\AbstractDestination;
use Mediatis\FormrelayJsonrequest\DataDispatcher\JsonrequestDispatcher;

class Jsonrequest extends AbstractDestination
{
    public function getExtensionKey(): string
    {
        return "tx_formrelay_jsonrequest";
    }

    protected function getDispatcher(array $conf, array $data, array $context)
    {
        $url = $conf['url'];

        $cookieNames = [];
        if (isset($conf['cookies'])) {
            if (is_array($conf['cookies'])) {
                $cookieNames = $conf['cookies'];
            } else {
                $cookieNames = explode(',', (string)$conf['cookies']);
            }
        }
        $cookies = [];
        foreach ($cookieNames as $name) {
            if (isset($_COOKIE[$name])) {
                $cookies[$name] = $_COOKIE[$name];
            }
        }

        return $this->objectManager->get(JsonrequestDispatcher::class, $url, $cookies);
    }
}
