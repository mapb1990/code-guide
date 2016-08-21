<?php namespace Memorix\Services;

use Memorix\Contracts\User;
use Memorix\Contracts\UserRepository;
use Memorix\Validators\UserValidator;

/**
 * Class UserService
 *
 * @package Memorix\Services
 * @author Miguel Borges <miguel.borges@edirectinsure.com>
 */
class UserService
{
    /**
     * The users repository
     * 
     * @var \Memorix\Contracts\UserRepository
     */
    protected $users;

    /**
     * The user validator
     * 
     * @var \Memorix\Validators\UserValidator
     */
    protected $validator;

    /**
     * UserService constructor.
     *
     * @param \Memorix\Contracts\UserRepository $users
     * @param \Memorix\Validators\UserValidator $validator
     */
    public function __construct(UserRepository $users, UserValidator $validator)
    {
        $this->users = $users;
        $this->validator = $validator;
    }

    /**
     * Create a new user.
     * 
     * @param array $attributes
     * @return User
     */
    public function createUser(array $attributes) : User
    {
        $this->validator->with($attributes)->passesOrFail();

        if (array_key_exists('password', $attributes)) {
             $attributes['password'] = bcrypt($attributes['password']);
        }

        $user = $this->users->create($attributes);
        $this->users->attachUserPreferences($user, ['autoplay' => false]);

        return $user;
    }

    /**
     * Attach preferences to a user
     * 
     * @param \Memorix\Contracts\User $user
     * @param array $preferences
     * @return bool
     */
    public function setUserPreferences(User $user, array $preferences) : bool
    {
        return $this->users->attachUserPreferences($user, $preferences);
    }

    /**
     * A description for this method
     *
     * Paragraphs are separated by an empty line.
     * 
     * @param  \Memorix\Contracts\User[] Arrays of Users objects.
     * @return \Memorix\Contracts\User[]
     */
    protected function someMethod(array $users) {
        $var = [];

        /**
         * @var $user \Memorix\Contracts\User
         */
        foreach ($users as $user) {
            $var[] = $user->someMethod();
        }

        return $var;
    }

}
