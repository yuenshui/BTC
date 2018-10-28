<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 作者：671
 * 时间：2018年9月29日10:23:37
 * 描述：博彩功能
 */
class BocaiController extends VerifyController 
{
	// 博彩首页
	public function index()
	{
		$this->display();
	}

	// 獲取餘額
	public function getbalance()
	{
		$result = M('UserAccount')->getFieldByUserId($this->user_id, 'extract_balance');
		$this->ajaxReturn($result);
	}

	// 买
	public function deal()
	{
		$type = I('get.type');
		$title = $type == 1 ? "買漲" : "買跌";

		$this->assign([
			'title'	=> $title
		]);
		$this->display();
	}

	// 确认下单
	public function okorder()
	{
		$result = ['code' => -1, 'msg' => '購買失敗'];
		$post = I('post.');
		$account = M('UserAccount');
		// 判斷金額是否正確
		if ($post['money'] < 1 || is_nan($post['money']) || empty($post['money'])) 
			$this->ajaxReturn($result);
		if (((int)date('i')+1)%5 == 0)
			$this->ajaxReturn(['code' => 1, 'msg' => '最後一分鐘禁止購買']);

		// 扣除餘額
		$balance = $account->getFieldByUserId($this->user_id, 'extract_balance');
		$lastbalance = $balance - $post['money'];	// 最终剩余余额
		if ($lastbalance < 0)
			$this->ajaxReturn(['code' => -1, 'msg' => '您的餘額不足']);
		$account->startTrans();
		$accountinfo = $account->where(['user_id' => $this->user_id])
			->save(['extract_balance' => $lastbalance]);
		if ($accountinfo == 0) $this->ajaxReturn($result);

		// 生成订单号
		$letter = ['X', 'K', 'V', 'B', 'N', 'M', 'Z', 'D', 'O'];
		$stime  = time();
		$order  = $letter[rand(0,count($letter)-1)].time();
		$post['uid'] = $this->user_id;
		$post['create_time'] = $post['buy_time'] = $stime;
		$post['order_id'] = $order;
		$info = M('WMinlog')->add($post);
		if ($info == 0) {
			$account->rollback();
			$this->ajaxReturn($result);
		}
		$account->commit();
		M('WMinlog')->commit();
		$this->ajaxReturn(['code' => 0, 'msg' => '下單成功']);
	}
}