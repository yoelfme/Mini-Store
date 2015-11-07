<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\User\UserRepo;
use App\Support\Helper;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user
                            {name}
                            {email}
                            {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command used for create a new user.';

    /**
     * Instance of repository of model User
     */
    protected $userRepo = null;

    /**
     * Create a new command instance.
     *
     * @param UserRepo $userRepo
     * @return mixed
     */
    public function __construct(
        UserRepo $userRepo
    )
    {
        parent::__construct();
        $this->userRepo = $userRepo;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $arguments = $this->argument();
        $arguments_allowed = [
            'name',
            'email',
            'password',
        ];

        $arguments = Helper::arrayValidate($arguments, $arguments_allowed);
        $data = $arguments;

        $user = $this->userRepo->findBy('email', $data['email']);

        if($user) {
            $this->error('The user ' . $user->email . ' already exists');
        } else {
            $user = $this->userRepo->create($data);

            $this->info('The user was created');
            $this->info('The ID user is: ' . $user->id);
        }
    }
}
