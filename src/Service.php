<?php
namespace BitrixModel
{
    use Arrilot\BitrixModels\ServiceProvider;

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
            ServiceProvider::registerEloquent();
        }
    }
}