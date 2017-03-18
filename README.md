Скрипт для аутентификации и авторизации на сайте с использованием сессий и кук.
##TODO:
- [x] аутентификация
- [x] авторизация
- [x] выход
- [x] регистрация
- [x] восстановление пароля (функцию отправки письма с новым паролем реализовал, но возможно потребуется дополнительно настроить SMTP, например, с помощью Composer пакета PHPMailer);
- [ ] пользователи с разными привилегиями 
- [x] подготавливаемые запросы в PDO для защиты от SQL инъекций
- [x] фронт на бутстрап
- [x] ajax проверка формы регистрации 
- [ ] добавить скриншоты в ридми
- [x] переписать скрипт согласно MVC
- [x] переписать элементы MVC на классы
- [x] использовать автозагрузчик классов
- [ ] страница для ошибок в продакшене

##Пример config.ini
    ; первая БД
    [vagrant]
    host = "localhost"
    user = "homestead"
    password = "secret"
    db = "db_name"

    ; вторая БД
    [db_two]
    host = "localhost"
    user = "root"
    password = ""
    db = "db_name"