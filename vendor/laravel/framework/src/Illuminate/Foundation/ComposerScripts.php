<?php

namespace Illuminate\Foundation;

use Composer\Script\Event;

class ComposerScripts
{
    /**
     * Handle the post-install Composer event.
     *
     * @param  \Composer\Script\Event  $event
     * @return void
     */
    public static function postInstall(Event $event)
    {
        require_once $event->getComposer()->getConfig()->get('vendor-dir').'/autoload.php';

        static::clearCompiled();
    }

    /**
     * Handle the post-update Composer event.
     *
     * @param  \Composer\Script\Event  $event
     * @return void
     */
    public static function postUpdate(Event $event)
    {
        require_once $event->getComposer()->getConfig()->get('vendor-dir').'/autoload.php';

        static::clearCompiled();
    }

    /**
     * Clear the cached Laravel bootstrapping files.
     *
     * @return void
     */
<<<<<<< HEAD
    protected static function clearCompiled()
=======
    private static function clearCompiled()
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    {
        $laravel = new Application(getcwd());

        if (file_exists($compiledPath = $laravel->getCachedCompilePath())) {
            @unlink($compiledPath);
        }

        if (file_exists($servicesPath = $laravel->getCachedServicesPath())) {
            @unlink($servicesPath);
        }
    }
}
