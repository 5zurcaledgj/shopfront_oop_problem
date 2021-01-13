<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc186421e83592be84f76ff28b295d485
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AirlinePassengerManifest\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AirlinePassengerManifest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'AirlinePassengerManifest\\Aircraft\\Aircraft' => __DIR__ . '/../..' . '/src/Aircraft/Aircraft.php',
        'AirlinePassengerManifest\\AirlineCompany\\AirlineCompany' => __DIR__ . '/../..' . '/src/AirlineCompany/AirlineCompany.php',
        'AirlinePassengerManifest\\AirlineCompany\\IAirlineCompany' => __DIR__ . '/../..' . '/src/AirlineCompany/IAirlineCompany.php',
        'AirlinePassengerManifest\\AirplaneType\\AirplaneType' => __DIR__ . '/../..' . '/src/AirplaneType/AirplaneType.php',
        'AirlinePassengerManifest\\AirplaneType\\IAirplaneType' => __DIR__ . '/../..' . '/src/AirplaneType/IAirplaneType.php',
        'AirlinePassengerManifest\\Configuration' => __DIR__ . '/../..' . '/src/Configuration.php',
        'AirlinePassengerManifest\\Enum\\Gender' => __DIR__ . '/../..' . '/src/Enum/Gender.php',
        'AirlinePassengerManifest\\Enum\\SeatClasses' => __DIR__ . '/../..' . '/src/Enum/SeatClasses.php',
        'AirlinePassengerManifest\\Factories\\AirlineCompanyFactory' => __DIR__ . '/../..' . '/src/Factories/AirlineCompanyFactory.php',
        'AirlinePassengerManifest\\Factories\\AirplaneTypeFactory' => __DIR__ . '/../..' . '/src/Factories/AirplaneTypeFactory.php',
        'AirlinePassengerManifest\\IPassenger' => __DIR__ . '/../..' . '/src/IPassenger.php',
        'AirlinePassengerManifest\\Passenger' => __DIR__ . '/../..' . '/src/Passenger.php',
        'AirlinePassengerManifest\\Ticket\\ITicket' => __DIR__ . '/../..' . '/src/Ticket/ITicket.php',
        'AirlinePassengerManifest\\Ticket\\Ticket' => __DIR__ . '/../..' . '/src/Ticket/Ticket.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc186421e83592be84f76ff28b295d485::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc186421e83592be84f76ff28b295d485::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc186421e83592be84f76ff28b295d485::$classMap;

        }, null, ClassLoader::class);
    }
}
