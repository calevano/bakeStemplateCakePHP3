<?php
namespace App\Shell\Task;

//use Cake\Console\Shell;
use Bake\Shell\Task\SimpleBakeTask;

/**
 * Stemplate shell task.
 */
class StemplateTask extends SimpleBakeTask
{

    /**
     * main() method.
     *
     * @return bool|int Success or error code.
     */

    public $pathFragment = 'Template/';

    public function name()
    {
        return 'stemplate';
    }

    public function fileName($name)
    {
        return $name . '.ctp';
    }

    public function template()
    {
        return 'stemplate';
    }

//    public function main()
//    {
//    }
}
