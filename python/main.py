from typing import List
from dataclasses import dataclass


@dataclass
class UserData:
    id: int
    name: str
    emai: str


USER_LIST = (
    {'id': 1, 'name': 'ユーザー1', 'email': 'user1@example.com', 'password': 'password'},
    {'id': 2, 'name': 'ユーザー2', 'email': 'user2@example.com', 'password': 'password'},
    {'id': 3, 'name': 'ユーザー3', 'email': 'user3@example.com', 'password': 'password'},
)


def getUserDatas(users: List[UserData]):
    userDatas = []
    for user in users:
        userDatas.append(UserData(user['id'], user['name'], user['email']))
    return userDatas


userDatas = getUserDatas(USER_LIST)

print(userDatas)
