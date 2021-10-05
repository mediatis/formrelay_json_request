<?php

namespace Mediatis\FormrelayJsonRequest\Destination;

use Mediatis\Formrelay\Destination\AbstractDestination;
use Mediatis\FormrelayJsonRequest\DataDispatcher\JsonRequestDispatcher;

class JsonRequest extends AbstractDestination
{
    public function getExtensionKey(): string
    {
        return "tx_formrelay_json_request";
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

        return $this->objectManager->get(JsonRequestDispatcher::class, $url, $cookies);
    }
}
