Скрипт в ООП стиле для аутентификации и авторизации на сайте. Использует сессии и куки.
##TODO:
-[x] аутентификация
-[x] авторизация
-[x] выход
-[ ] регистрация
-[ ] восстановление пароля
-[ ] пользователи с разными привилегиями 
-[x] подготавливаемые запросы для защиты от SQL инъекций

Пример config.ini
````; первая БД
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
db = "db_name"````