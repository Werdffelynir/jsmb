# JavaScript Module Builder

Простой сборщик JavaScript файлов. Использует модульную структуру.

### config.json
```json
{
  "dump":     "build/application.js",
  "layout":   "src/layout.js",
  "root":     "src/",
  "modules_auto_include": false,
  "modules": {
    "module_one":    "module_one.js",
    "module_two":    "module_two.js",
    "helper":        "helper.js",
    "static":        "static.js"
  },
  "delete_string_marker" : "// <<< DELETE THIS STRING",
  "replaces" : {}
}
```

### Run 

```bash
cd /path/to/builder
php -f parser.php
```

### Watcher Config
```python
FNAME = 'src'
SYSCOMMAND = 'php -f parser.php'
```

### Run watcher
```bash
cd /path/to/builder
python3 watcher.py 
```