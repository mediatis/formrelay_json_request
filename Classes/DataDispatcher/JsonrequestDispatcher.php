<?php

namespace Mediatis\FormrelayJsonrequest\DataDispatcher;

use Mediatis\Formrelay\DataDispatcher\RequestDispatcher;
use Mediatis\Formrelay\Domain\Model\FormField\MultiValueFormField;

class JsonrequestDispatcher extends RequestDispatcher
{
    const DEFAULT_HEADERS = [
        'Content-Type' => 'application/json',
    ];

    protected function computeValueArray(array $data): array
    {
        $result = [];
        foreach ($data as $key => $value) {
            if (is_numeric($key)) {
                $key = (int) $key;
            }
            if ($value instanceof MultiValueFormField) {
                $value = $this->computeValueArray(iterator_to_array($value));
            }
            $result[$key] = $value;
        }
        return $result;
    }

    protected function buildBody(array $data): string
    {
        return json_encode($this->computeValueArray($data), JSON_PRETTY_PRINT);
    }

    protected function buildHeaders(array $data): array
    {
        return parent::buildHeaders($data) + static::DEFAULT_HEADERS;
    }
}
