<?php

namespace AirlinePassengerManifest\Enum;

class ESeatClasses
{
    const FIRST_CLASS_INDEX = 0;
    const BUSINESS_INDEX = 1;
    const PREMIUM_ECONOMY_INDEX = 2;
    const ECONOMY_INDEX = 3;

    public static function getName($seatClass) {
        switch ($seatClass) {
            case self::FIRST_CLASS_INDEX:
                $name = 'First Class';
                break;
            case self::PREMIUM_ECONOMY_INDEX:
                $name = 'Premium Economy';
                break;
            case self::BUSINESS_INDEX:
                $name = 'Business';
                break;
            case self::ECONOMY_INDEX:
                $name = 'Economy';
                break;
            default:
                $name = '';
        }

        return $name;
    }

    public static function getAll() : array {
        return [
            self::FIRST_CLASS_INDEX => self::getName(self::FIRST_CLASS_INDEX),
            self::PREMIUM_ECONOMY_INDEX => self::getName(self::PREMIUM_ECONOMY_INDEX),
            self::BUSINESS_INDEX => self::getName(self::BUSINESS_INDEX),
            self::ECONOMY_INDEX => self::getName(self::ECONOMY_INDEX),
        ];
    }
}
