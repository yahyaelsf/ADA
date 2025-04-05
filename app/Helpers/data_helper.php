<?php

if (!function_exists('transformData')) {
    function transformData(array $data): array
    {
        return array_map(function ($item) {
            if (is_array($item)) {
                $item = (object) $item;
            }

            if (is_object($item)) {
                foreach ($item as $key => $value) {
                    $item->{$key} = transformValue($value);
                }
            }
            return $item;
        }, $data);
    }

    function transformValue($value)
    {
        if (is_string($value)) {
            if ($value === 'true') return true;
            if ($value === 'false') return false;
            if (is_numeric($value)) {
                return strpos($value, '.') !== false ? (float) $value : (int) $value;
            }
        } elseif (is_array($value)) {
            return array_map(fn($v) => transformValue($v), $value);
        } elseif (is_object($value)) {
            foreach ($value as $key => $subValue) {
                $value->{$key} = transformValue($subValue);
            }
        }
        return $value;
    }
}
