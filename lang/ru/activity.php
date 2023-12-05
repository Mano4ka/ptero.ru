<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Не удалось войти в систему',
        'success' => 'Вошёл в систему',
        'password-reset' => 'Восстановление пароля',
        'reset-password' => 'Запрошен сброс пароля',
        'checkpoint' => 'Запрошена двухфакторная аутентификация',
        'recovery-token' => 'Использован токен двухфакторного восстановления',
        'token' => 'Решенная двухфакторная задача',
        'ip-blocked' => 'Заблокированный запрос с IP-адреса, не указанного в списке, для :identifier',
        'sftp' => [
            'fail' => 'Не удалось войти в систему по SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Изменен адрес электронной почты c :old на :new',
            'password-changed' => 'Изменен пароль',
        ],
        'api-key' => [
            'create' => 'Создан новый ключ API. :identifier',
            'delete' => 'Удален ключ API :identifier',
        ],
        'ssh-key' => [
            'create' => 'Добавлен SSH-ключ. :fingerprint в учетную запись.',
            'delete' => 'Удален SSH-ключ. :fingerprint из учетной записи.',
        ],
        'two-factor' => [
            'create' => 'Включена двухфакторная аутентификация',
            'delete' => 'Выключена двухфакторная аутентификация',
        ],
    ],
    'server' => [
        'reinstall' => 'Переустановил сервер',
        'console' => [
            'command' => 'Выполнил команду ":command" на сервере',
        ],
        'power' => [
            'start' => 'Запустил сервер',
            'stop' => 'Остановил сервер',
            'restart' => 'Перезапустил сервер',
            'kill' => 'Убил серверный процесс',
        ],
        'backup' => [
            'download' => 'Скачал резервную копию :name',
            'delete' => 'Удалил резервную копию :name',
            'restore' => 'Восстановил резервную копию :name (удаленные файлы: :truncate)',
            'restore-complete' => 'Завершено восстановление резервной копии :name',
            'restore-failed' => 'Не удалось завершить восстановление резервной копии :name',
            'start' => 'Запустил новое резервное копирование :name',
            'complete' => 'Резервная копия :name отмечена как завершенная.',
            'fail' => 'Резервная копия :name помечена как неудачная',
            'lock' => 'Заблокировал резервную копию :name',
            'unlock' => 'Разблокировал резервную копию :name',
        ],
        'database' => [
            'create' => 'Создал новую базу данных :name',
            'rotate-password' => 'Пароль для базы данных изменен :name',
            'delete' => 'Удалена база данных :name',
        ],
        'file' => [
            'compress_one' => 'Сжат :directory:file',
            'compress_other' => 'Сжато :count файлов в :directory',
            'read' => 'Просмотрел содержимое :file',
            'copy' => 'Создал копию :file',
            'create-directory' => 'Создал каталог :directory:name',
            'decompress' => 'Распаковал :files в :directory',
            'delete_one' => 'Удалил :directory:files.0',
            'delete_other' => 'Удалил :count файлов в :directory',
            'download' => 'Скачал :file',
            'pull' => 'Скачал удаленный файл с :url в :directory',
            'rename_one' => 'Переименовал :directory:files.0.from to :directory:files.0.to',
            'rename_other' => 'Переименовал :count файлов в :directory',
            'write' => 'Написал новый контент для :file',
            'upload' => 'Начал загрузку файла',
            'uploaded' => 'Загрузил :directory:file',
        ],
        'sftp' => [
            'denied' => 'Доступ к SFTP заблокирован из-за разрешений',
            'create_one' => 'Создан :files.0',
            'create_other' => 'Создано :count новых файлов',
            'write_one' => 'Изменено содержимое :files.0',
            'write_other' => 'Изменено содержимое файлов :count',
            'delete_one' => 'Удалён :files.0',
            'delete_other' => 'Удалено :count файлов',
            'create-directory_one' => 'Created the :files.0 directory',
            'create-directory_other' => 'Created :count directories',
            'rename_one' => 'Переименован из :files.0.from в :files.0.to',
            'rename_other' => 'Переименованы или перемещены файлы :count',
        ],
        'allocation' => [
            'create' => 'Добавлено :allocation  на сервер.',
            'notes' => 'Обновлены распределение к :allocation из ":old" в ":new"',
            'primary' => 'Установлено в качестве основного распределения сервера :allocation',
            'delete' => 'Удалено распределение :allocation',
        ],
        'schedule' => [
            'create' => 'Создал расписание :name.',
            'update' => 'Обновлено расписание :name',
            'execute' => 'Вручную выполнил задачу по расписанию :name',
            'delete' => 'Удалено расписание :name',
        ],
        'task' => [
            'create' => 'Создана новая задача ":action" для расписания :name',
            'update' => 'Обновлена ​​задача ":action" для расписания :name',
            'delete' => 'Удалена задача для расписания :name',
        ],
        'settings' => [
            'rename' => 'Переименовал сервер с :old на :new',
            'description' => 'Изменено описание сервера с:old на :new.',
        ],
        'startup' => [
            'edit' => 'Изменена переменная :variable с ":old" на ":new"',
            'image' => 'Обновлен образ Docker для сервера с :old на :new',
        ],
        'subuser' => [
            'create' => 'Добавлен :email в качестве субпользователя.',
            'update' => 'Обновлены права субпользователя для :email.',
            'delete' => 'Удален :email в качестве субпользователя.',
        ],
    ],
];
