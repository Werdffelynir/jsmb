<?php
// cat config.json | php -f builder.php 
// php -f builder.php < config.json

class Builder
{
    private $configDefault = [
        'output' => '',
        'main' => '',
        'modules_dir' => '',
        'temp_line' => 'THIS-LINE-WILL-DELETED',
        'replaces' => [],
    ];

    private $config;

    public function __construct(array $config)
    {
        $this->config = array_merge($this->configDefault, $config);

        print_r($this->config);

//        input('Opa ?', function ($ok){
//            print('Opa');
//            print($ok);
//        });
    }
}

$configJSON = stream_get_contents(fopen('php://stdin','r'));
new Builder(json_decode($configJSON, true));

