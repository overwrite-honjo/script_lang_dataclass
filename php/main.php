<?php

class UserData
{
    public int $id;
    public string $name;
    public string $email;

    public function __construct(
        int $id,
        string $name,
        string $email
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}

const USER_LIST = [
    ['id' => 1, 'name' => 'ユーザー1', 'email' => 'user1@example.com', 'password' => 'password'],
    ['id' => 2, 'name' => 'ユーザー2', 'email' => 'user2@example.com', 'password' => 'password'],
    ['id' => 3, 'name' => 'ユーザー3', 'email' => 'user3@example.com', 'password' => 'password'],
];

function getUserDatas(array  $users): array
{
    $userDatas = [];
    foreach ($users as $user) {
        $userDatas[] = new UserData(
            $user['id'],
            $user['name'],
            $user['email']
        );
    }
    return $userDatas;
}

$users = getUserDatas(USER_LIST);

print_r($users);