# changeSecuritySaltCakePHP3
Crear plantillas que no dependen de un controlador y menos de un modelo

Es posible añadir nuevas opciones de comandos de "bake" o anular las que proporciona CakePHP mediante la creación de "task" en su aplicación o complementos.

Sigue los siguientes pasos:

1.-  Primero crea el archivo "task" en src/Shell/Task/StemplateTask.php.
Tambien puedes crearlo con este simple comando bin/cake bake task Stemplate

2.- Una vez creado el archivo de Stemplate cambialo por mi archivo del repositorio que he creado StemplateTask.php

3.- Ahora viene lo mas facil y divertido, creamos una carpeta dentro src/Template llamado "Bake"

4.- Dentro de la carpeta que hemos creado, creamos un archivo con el nombre que le hemos puesto al "Task" que hemos creado en letras minusculas con extension ".ctp"

5.- Ahora dentro de este archivo lo que tenemos que hacer es crear un "skeleton template" que creemos conveniente.

Yo cree uno de acuerdo a mi plantilla que realice, tu puedes modificarlo a tu gusto

más referencias  puedes encontrarla aquí: [http://book.cakephp.org/3.0/en/bake/development.html](http://book.cakephp.org/3.0/en/bake/development.html)