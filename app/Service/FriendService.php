<?php
/**
 * Created by PhpStorm.
 * User: qap
 * Date: 2019/10/9
 * Time: 13:39
 */

namespace App\Service;

use App\Model\UserFriendModel;
use App\Model\UserModel;
use Hyperf\Di\Annotation\Inject;

/**
 * Class FriendService
 * @package App\Service
 */
class FriendService extends BaseService
{
    /**
     * @Inject()
     * @var UserModel
     */
    private $userModel;

    /**
     * @Inject()
     * @var UserFriendModel
     */
    private $userFriendModel;

    /**
     * @param $account
     * @return array
     */
    public function searchFriend($account)
    {
        $result = $this->userModel->searchUserByAccount($account);
        return $this->success($result);
    }

    /**
     * 删除好友
     * @param $friendId
     * @param $userId
     * @return array
     */
    public function deleteFriend($friendId, $userId)
    {
        $result = $this->userFriendModel->deleteFriend($friendId, $userId);
        return $this->success($result);
    }
}