# bakeStemplateCakePHP3
Create templates that do not depend on a controller and less than a model

Creating a template that is not related to a driver or model is usually common, for example create a "Welcome" template where you will show a greeting or show instructions on the page.


So in the documentation of CakePHP I found the possibility to extend the bake and adapt it to what I need (in this case create a custom template by default).

It is possible to add new bake command options or override those provided by CakePHP by creating "task" in your application or add-ons.

Follow these steps:

1.- First, create the task file src/Shell/Task/StemplateTask.php.
You can also create it with this simple command
```console
"bin/cake bake task Stemplate"
```

2.- Once the "Stemplate" file has been created, copy the contents of my "StemplateTask.php" file into yours.

**It will be as follows**
```php
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
```

3.- Now comes the easiest and fun, we create a folder inside "src/Template" called "Bake".

4.- Within the folder "Bake" that we created in "src/Template", we created a file with the name that we have put to the "Task", this file must be in lowercase letters with extension "*.ctp" (in this case Would be "stemplate.ctp")

5.- Now inside the file "stemplate.ctp" we can put a base template that we think is convenient.

I create one according to my template that I use for my project, you can modify it your way.

```html
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2><%= $name %></h2>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Body Copy</h2>
            </div>

            <div class="card-body card-padding">
                <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis
                    mollis, est non commodo luctus.</p>
                <p>Pellentesque lacinia sagittis libero et feugiat. Etiam volutpat adipiscing tortor non
                    luctus. Vivamus venenatis vitae metus et aliquet. Praesent vitae justo purus. In
                    hendrerit lorem nisl, ac lacinia urna aliquet non. Quisque nisi tellus, rhoncus quis est
                    sit amet, lacinia euismod nunc. Aenean nec nibh velit. Fusce quis ante in nisl molestie
                    fringilla. Nunc vitae ante id magna feugiat condimentum. Maecenas sit amet urna
                    massa.</p>
                <p>Integer eu lectus sollicitudin, hendrerit est ac, sollicitudin nisl. Quisque viverra
                    sodales lectus nec ultrices. Fusce elit dolor, dignissim a nunc id, varius suscipit
                    turpis. Cras porttitor turpis vitae leo accumsan molestie. Morbi vitae luctus leo. Sed
                    nec scelerisque magna, et adipiscing est. Proin lobortis lectus eu sem ullamcorper,
                    commodo malesuada quam fringilla. Curabitur ac nunc dui. Class aptent taciti sociosqu ad
                    litora torquent per conubia nostra, per inceptos himenaeos. Fusce sagittis enim eu est
                    lacinia, ut egestas ligula imperdiet.</p>
            </div>
        </div>
    </div>
</section>
```

### Where <%= $name %> represents

* **<%= $name %>** Represents the name that we have given to our template.
* We can create a folder that has an "**index**" file as follows:
```console
"bin/cake bake stemplate Portada\\index"
```

* We can also create a " *.ctp " file that is not inside a folder as follows:
```console
"bin/cake bake stemplate Index"
```

* Within our "src/Template" we will see that a folder or file was generated using the command that we have typed

More references you can find it here: [http://book.cakephp.org/3.0/en/bake/development.html](http://book.cakephp.org/3.0/en/bake/development.html)