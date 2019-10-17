<?php

function getComposerFileData()
{
    return $json = [
            'autoload' => [
                'files' => [
                    'src/Arrays.php'
                    ]
                ],
            'config' => [
                'vendor-dir' => '/composer/vendor'
            ]
    ];
}

{
  "autoload": {
    "files": [
      "src/Arrays.php"
    ]
  },
  "config": {
    "vendor-dir": "/composer/vendor"
  }
}
