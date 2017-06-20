Yii 2 Advanced Project Template
===============================

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
Doctor Module
===============================

1. Add this code to your config in return array.

    'modules' => [
        'doctor' => [
            'class' => 'frontend\modules\doctor\Doctor',
        ],
    ],
2. If you already have migration you don't need to migrate user table

    Run this command for migrate 

    php yii migrate --migrationPath=frontend/modules/doctor/migrations 

3. After migrate you can use 
    username: admin
    password: admin12

4. If you don't want put this module in frontend you need to change namespace.


     

