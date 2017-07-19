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
         * Sets primary key column as 'ID'.
         * @var string
         */
        protected $primaryKey = 'ID';

        /**
         * This properties cannot by assigned directly.
         * @var array
         */
        protected $guarded = ['ID'];

        /**
         * Disables Eloquent model's timestamps.
         * @var boolean
         */
        public $timestamps = false;
    }
}