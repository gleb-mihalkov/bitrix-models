<?php
namespace BitrixModel
{
    use Arrilot\BitrixModels\Models\EloquentModel;

    /**
     * Базовый класс модели элемента Highload-блока.
     *
     * @link https://github.com/arrilot/bitrix-models#Использование-моделей-eloquent \Arrilot\BitrixModels\Models\EloquentModel
     */
    class Highload extends EloquentModel
    {
        /**
         * Указывает, что первичным ключом является столбец 'ID'.
         * @var string
         */
        protected $primaryKey = 'ID';

        /**
         * Запрещат задавать свойство 'ID' при массовом присвоение значений.
         * @var array
         */
        protected $guarded = ['ID'];

        /**
         * Запрещает использовать Eloquest timestamps.
         * @var boolean
         */
        public $timestamps = false;
    }
}