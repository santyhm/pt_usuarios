<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name} {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    // public function handle()
    // {
    //     return 0;
    // }
    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        $password = $this->secret('Enter the password');

        // Verificar si el correo electrónico ya está en uso
        if (User::where('email', $email)->exists()) {
            $this->error('User with this email already exists');
            return;
        }

        // Crear el nuevo usuario
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();

        $this->info('User created successfully');
    }
}
