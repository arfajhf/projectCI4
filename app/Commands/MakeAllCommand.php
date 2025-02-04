<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class MakeAllCommand extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'Costum';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'make:mms';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Membuat model, migration, dan seeder sekaligus';

    /**
     * The Command's Usage
     *
     * @var string
     */
    // protected $usage = 'command:name [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    // protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    // protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        $name = array_shift($params);

        if (empty($name)) {
            CLI::error('Nama entitas harus diisi.');
            return;
        }

        // Buat Migration
        CLI::write('Membuat Migration...');
        command('make:migration Create' . $name . 'Table');

        // Buat Model
        CLI::write('Membuat Model...');
        command('make:model ' . $name . 'Model');

        // Buat Seeder
        CLI::write('Membuat Seeder...');
        command('make:seeder ' . $name . 'Seeder');

        CLI::write('Migration, Model, dan Seeder untuk ' . $name . ' selesai dibuat!', 'green');
    }
}
