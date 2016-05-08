<?php

namespace Faker;

class Factory
{
    const DEFAULT_LOCALE = 'en_US';

    protected static $defaultProviders = array('Address', 'Barcode', 'Biased', 'Color', 'Company', 'DateTime', 'File', 'Image', 'Internet', 'Lorem', 'Miscellaneous', 'Payment', 'Person', 'PhoneNumber', 'Text', 'UserAgent', 'Uuid');

<<<<<<< HEAD
    /**
     * Create a new generator
     * 
     * @param string $locale
     * @return Generator
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public static function create($locale = self::DEFAULT_LOCALE)
    {
        $generator = new Generator();
        foreach (static::$defaultProviders as $provider) {
            $providerClassName = self::getProviderClassname($provider, $locale);
            $generator->addProvider(new $providerClassName($generator));
        }

        return $generator;
    }

<<<<<<< HEAD
    /**
     * @param string $provider
     * @param string $locale
     * @return string
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    protected static function getProviderClassname($provider, $locale = '')
    {
        if ($providerClass = self::findProviderClassname($provider, $locale)) {
            return $providerClass;
        }
        // fallback to default locale
        if ($providerClass = self::findProviderClassname($provider, static::DEFAULT_LOCALE)) {
            return $providerClass;
        }
        // fallback to no locale
<<<<<<< HEAD
        if ($providerClass = self::findProviderClassname($provider)) {
=======
        $providerClass = self::findProviderClassname($provider);
        if (class_exists($providerClass)) {
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
            return $providerClass;
        }
        throw new \InvalidArgumentException(sprintf('Unable to find provider "%s" with locale "%s"', $provider, $locale));
    }

<<<<<<< HEAD
    /**
     * @param string $provider
     * @param string $locale
     * @return string
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    protected static function findProviderClassname($provider, $locale = '')
    {
        $providerClass = 'Faker\\' . ($locale ? sprintf('Provider\%s\%s', $locale, $provider) : sprintf('Provider\%s', $provider));
        if (class_exists($providerClass, true)) {
            return $providerClass;
        }
    }
}
