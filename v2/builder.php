<?php
// cat config.json | php -f builder.php
// php -f builder.php < config.json

class Builder
{
    private $configDefault = [
        'output' => false,
        'main' => false,
        'root' => false,
        'devline' => 'THIS-LINE-WILL-DELETED',
        'replaces' => [],
        'mark' => "[[['%s']]]",
    ];

    private $config;

    public function __construct(array $config)
    {
        $this->config = array_merge($this->configDefault, $config);

        $context = file_get_contents($this->config['main']);
        $root = $this->config['root'];
        $files = scandir($root);

        if (!empty($files)) {
            foreach($files as $file) {
                if (strlen($file) > 3 && substr($file, -3) === '.js' && is_file($root.$file)) {
                    $ctx = file_get_contents($root.$file);
                    $context = str_replace("[[['" . (substr($file, 0, -3)) . "']]]", $ctx, $context);
                }
            }
        }

        // replace
        if (!empty($this->config['replaces'])) {
            foreach($this->config['replaces'] as $search => $re)
                $context = str_replace($search, $re, $context);
        }

        // deleted string
        $contextArr = explode("\n", $context);
        foreach ($contextArr as $i => $str) {
            if (strpos($str, $this->config['devline']) !== false)
                unset($contextArr[$i]);
        };
        $context = join("\n", $contextArr);


        // build
        if (file_put_contents($this->config['output'], $context))
            $this->show("[Parser] File {$this->config['output']} is created.");
        else
            $this->show("[Parser] Error File {$this->config['output']} not created. Content not find.");
    }

    public function show($data) {
        print_r($data);
        print("\n");
    }

}

$configJSON = stream_get_contents(fopen('php://stdin','r'));
new Builder(json_decode($configJSON, true));

