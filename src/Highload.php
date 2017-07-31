<?php
namespace BitrixModel
{
    use Arrilot\BitrixModels\Models\EloquentModel;
    use Illuminate\Contracts\Support\Arrayable;

    /**
     * Базовый класс модели элемента Highload-блока.
     *
     * @link https://github.com/arrilot/bitrix-models#Использование-моделей-eloquent \Arrilot\BitrixModels\Models\EloquentModel
     */
    class Highload extends EloquentModel
    {
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

        /**
         * Получает модель или массив моделей по первичному ключу.
         * @param  numeric|numeric[] $id      ID модели или массив ID моделей.
         * @param  array             $columns Свойства модели, которые должны быть заполнены.
         * @return static|static[]          Модель или массив моделей.
         */
        public static function id($id, $columns = ['*'])
        {
            $isList = is_array($id) || $id instanceof Arrayable;
            $value = $id;

            if ($isList)
            {
                $value = [];

                foreach ($id as $item)
                {
                    $list[] = $item * 1;
                }
            }
            else
            {
                $value = $id * 1;
            }

            return parent::find($value, $columns);
        }
    }
}