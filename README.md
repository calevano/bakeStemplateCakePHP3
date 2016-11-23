# changeSecuritySaltCakePHP3
Create templates that do not depend on a controller and less than a model


It is possible to add new bake command options or override those provided by CakePHP by creating "task" in your application or add-ons.

Follow these steps:

1.- First, create the task file src/Shell/Task/StemplateTask.php.
You can also create it with this simple command bin/cake bake task Stemplate

2.- Once the Stemplate file is created, change it to my repository file that I created StemplateTask.php

3.- Now comes the easiest and fun, we create a folder inside src/Template called "Bake"

4.- Within the folder that we created, we created a file with the name that we have put to the "Task" that we created in lowercase letters with extension ".ctp"

5.- Now inside this file what we have to do is create a "skeleton template" that we think is convenient.

I create one according to my template that you make, you can modify it to your liking

More references you can find it here: [http://book.cakephp.org/3.0/en/bake/development.html](http://book.cakephp.org/3.0/en/bake/development.html)