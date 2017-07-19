<?php
namespace BitrixModel
{
    use Arrilot\BitrixModels\Models\EloquentModel;

    /**
     * Базовый класс модели, полученной напрямую из БД.
     *
     * @link https://github.com/arrilot/bitrix-models#Использование-моделей-eloquent \Arrilot\BitrixModels\Models\EloquentModel
     */
    class Database extends EloquentModel
    {
        /**
         * Запрещаем использование timestamp от Eloquent.
         * @var boolean
         */
        public $timestamps = false;
    }
}