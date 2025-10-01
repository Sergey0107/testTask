<?php

namespace app\models;

use yii\base\Model;

class TextReverse extends Model
{
    public $text;
    public function rules()
    {
        return [
            [['word'], 'required'],
            [['word'], 'string', 'max' => 255],
        ];
    }

    public function reverse(): ?string
    {
        if ($this->text) {
            $parts = preg_split("/([-`])/", $this->text, -1, PREG_SPLIT_DELIM_CAPTURE);

            $result = '';
            foreach ($parts as $part) {
                if (strlen($part) === 1 && preg_match('/[-`]/', $part)) {
                    $result .= $part;
                } else {
                    $chars = preg_split('//u', $part);
                    $result .= implode('', array_reverse($chars));
                }
            }

            return $result;
        }
        return null;
    }
}