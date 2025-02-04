<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Commands extends BaseConfig
{
    public $commands = [
        // Daftar command default, jangan dihapus
        'make:mms' => \App\Commands\MakeAllCommand::class, // Tambahkan ini
    ];
}
