<?php
namespace App\Support;

class Helper
{
    public static function intentToBool($var)
    {
        $old_var = strtolower($var);
        $yes = ['1', 'true', 'on', 'yes', 'y'];
        $no = ['0', 'false', 'off', 'no', 'n'];

        if(in_array($old_var, $yes, true)) {
            return 1;
        } else if (in_array($old_var, $no, true)) {
            return 0;
        } else {
            return $var;
        }
    }

    public static function normalizeData($data)
    {
        foreach ($data as $key => $value) {
            $data[$key]  = static::intentToBool($value);
        }

        return $data;
    }

    public static function arrayValidate($array, $keys)
    {
        $options = array_intersect_key($array, array_flip($keys));

        $options = array_map(function($value) {
            if($value == null) {
                return '';
            }
            return $value;
        }, $options);

        return $options;
    }
}
