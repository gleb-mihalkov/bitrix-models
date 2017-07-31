<?php
namespace BitrixModel
{
    use Arrilot\BitrixModels\ServiceProvider;
    use Bitrix\Main\Config\Configuration;
    use Illuminate\Database\Capsule\Manager as Capsule;
    use Illuminate\Container\Container;
    use Illuminate\Events\Dispatcher;

    /**
     * Сервис моделей.
     */
    class Service
    {
        /**
         * Запускает сервис.
         * @return void
         */
        public static function init()
        {
            ServiceProvider::register();
            self::initEloquent();
        }

        /**
         * Инициализирует модели Eloquent.
         * @internal
         * @return void
         */
        protected static function initEloquent()
        {
            $config = Configuration::getInstance();
            $config = $config->get('connections');
            $config = $config['default'];

            $container = Container::getInstance();

            if (!$container) {
                $container = new Container();
                Container::setInstance($container);
            }

            $capsule = new Capsule($container);

            $capsule->addConnection([
                'driver'    => 'mysql',
                'host'      => $config['host'],
                'database'  => $config['database'],
                'username'  => $config['login'],
                'password'  => $config['password'],
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
                'strict'    => false,
            ]);

            $dispatcher = new Dispatcher($container);
            $capsule->setEventDispatcher($dispatcher);

            $capsule->setAsGlobal();
            $capsule->bootEloquent();
        }
    }
}