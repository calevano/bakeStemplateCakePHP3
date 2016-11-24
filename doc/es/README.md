# changeSecuritySaltCakePHP3
Crear plantillas que no dependen de un controlador y menos de un modelo

El crear una plantilla que no tenga relación con un controlador o modelo suele ser común, por ejemplo crear una plantilla " Bienvenido " donde mostrarás un saludo o mostrarás unas instrucciones en la página.

Por eso buscando en la documentación de CakePHP encontre la posibilidad de extender el " bake " y adecuarlo a lo que necesito ( en este caso crear un template personalizado por defecto).

Es posible añadir nuevas opciones de comandos de "bake" o anular las que proporciona CakePHP mediante la creación de "task" en su aplicación o complementos.

Sigue los siguientes pasos:

1.- Primero crea el archivo "task" en src/Shell/Task/StemplateTask.php.
Tambien puedes crearlo con este simple comando
```console
"bin/cake bake task Stemplate"
```

2.- Una vez creado el archivo "Stemplate", copia el contenido de mi archivo "StemplateTask.php" en el tuyo.

**Quedara de la siguiente forma**
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

3.- Ahora viene lo más facil y divertido, creamos una carpeta dentro de "src/Template" llamado "Bake"

4.- Dentro de la carpeta "Bake" que hemos creado dentro de "src/Template", creamos un archivo con el nombre que le hemos puesto al "Task", este archivo debe estár en letras minusculas con extension ".ctp" (en este caso sería "stemplate.ctp").

5.- Ahora dentro del archivo "stemplate.ctp" podemos poner una plantilla base que creemos conveniente.

Yo cree uno de acuerdo a mi plantilla que uso para mi proyecto, tú puedes modificarlo a tú manera.

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

### Donde <%= $name %> representa

* **<%= $name %>** representa el nombre que le hemos dado a nuestro template
* Podemos crear una carpeta que tenga un archivo "**index**" de la siguiente manera:
```console
"bin/cake bake stemplate Portada\\index"
```

* Tambien podemos crear un archivo " *.ctp " que no este dentro de una carpeta de la siguiente manera:
```console
"bin/cake bake stemplate Index"
```

Más referencias puedes encontrarla aquí: [http://book.cakephp.org/3.0/en/bake/development.html](http://book.cakephp.org/3.0/en/bake/development.html)