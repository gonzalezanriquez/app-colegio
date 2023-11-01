<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\Role;

class AssignRole extends Command
{
    protected $signature = 'user:assign-role {email} {role}';
    protected $description = 'Assign a role to a user';

    public function handle()
    {
        $email = $this->argument('email');
        $roleName = $this->argument('role');

        $user = User::where('email', $email)->first();
        $role = Role::where('name', $roleName)->first();

        if ($user && $role) {
            $user->roles()->attach($role->id);
            $this->info("Role '{$roleName}' assigned to user '{$email}'");
        } else {
            $this->error('User or role not found.');
        }
    }
}
