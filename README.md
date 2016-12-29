# JavaScript Module Builder

Простой сборщик JavaScript файлов, модулей приложения.
Принцип работы заключается в шаблонизации основного JavaScript файла `main` 
с подстанновкой шаблонов по нахожденю `модуль = путь к файлу`

**Сборщик**

- config.json   Файл конфигурации для скриптов builder.php watcher.py
- builder.php   Обработчик файлов, компилирует модули в один файл
- watcher.py    Наблюдатель за изминениями в рабочей директории


**config.json**

Основные параметры:

```json
{
  "output": "build/application.js",
  "main":  "src/main.js",
  "root": "src/",
  "watcher_directory": "src/",
  "watcher_command": "php -f builder.php < config.json"
}
```

- `output`                файл вывода
- `main`                  файл входа, основной шаблон
- `root`                  корень модулей
- `watcher_directory`     директория наблюдения
- `watcher_command`       комманда выполнения при изминении


**Запуск**

```bash
cd /path/to/builder
python3 watcher.py config.json
```
