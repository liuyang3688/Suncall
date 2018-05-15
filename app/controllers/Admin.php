<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		$this->load->view('Admin/index');
	}
	public function apply()
	{
		if ($_SERVER['REQUEST_METHOD'] === "GET")
		{
			header("Location: http://127.0.0.1");
			exit;
		}
		else
		{
			$name = $this->input->post("name");
			$phone = $this->input->post("phone");
			$email = $this->input->post("email");
			
			// 设置邮箱
			require_once "class.phpmailer.php";
			require_once("class.smtp.php");
			$mail  = new PHPMailer(); 
			$mail->CharSet    ="UTF-8";         			//设定邮件编码，如果发中文此项必须设置为 UTF-8
			$mail->isSMTP();
			$mail->Debugoutput = 'html';
			$mail->SMTPAuth   = true;                   	// 启用 SMTP 验证功能
			$mail->SMTPSecure = "ssl";                  	// SMTP 安全协议
			$mail->Host       = "smtp.qq.com";       		// SMTP 服务器
			$mail->Port       = 465;                    		// SMTP服务器的端口号
			$mail->Username   = "1960009001@qq.com";  			// SMTP服务器用户名
			$mail->Password   = "cxqbksltowedbbbi";        				// SMTP服务器密码
			$mail->setFrom('1960009001@qq.com', 'liuyang');    // 设置发件人地址和名称
			$mail->addAddress("liuyang2@ieslab.cn", "michael");
			
			$mail->Subject = "会员注册信息";
			$mail->msgHTML('<b>会员注册信息</b><br/><br/>姓名：'.$name.'<br/>手机号：'.$phone.'<br/>电子邮箱：'.$email);	
			$mail->AltBody = 'This is a plain-text message body';
			if(!$mail->Send()) {
				$ret['code'] = false;
    			$ret['msg'] = '邮件发送失败！'.$mail->ErrorInfo;
				echo json_encode($ret);
			} else {
				$ret['code'] = true;
			    $ret['msg'] = '会员注册成功！';
				echo json_encode($ret);
			} 
			
		}
	}
	public function groupon()
	{
		if ($_SERVER['REQUEST_METHOD'] === "GET")
		{
			header("Location: http://127.0.0.1");
			exit;
		}
		else
		{
			$name = $this->input->post("name");
			$phone = $this->input->post("phone");
			$email = $this->input->post("email");
			$memo = $this->input->post("memo");
			
			// 设置邮箱
			require_once "class.phpmailer.php";
			require_once("class.smtp.php");
			$mail  = new PHPMailer(); 
			$mail->CharSet    ="UTF-8";         			//设定邮件编码，如果发中文此项必须设置为 UTF-8
			$mail->isSMTP();
			$mail->Debugoutput = 'html';
			$mail->SMTPAuth   = true;                   	// 启用 SMTP 验证功能
			$mail->SMTPSecure = "ssl";                  	// SMTP 安全协议
			$mail->Host       = "smtp.qq.com";       		// SMTP 服务器
			$mail->Port       = 465;                    		// SMTP服务器的端口号
			$mail->Username   = "1960009001@qq.com";  			// SMTP服务器用户名
			$mail->Password   = "cxqbksltowedbbbi";        				// SMTP服务器密码
			$mail->setFrom('1960009001@qq.com', 'liuyang');    // 设置发件人地址和名称
			$mail->addAddress("liuyang2@ieslab.cn", "michael");
			
			$mail->Subject = "商务团购信息";
			$mail->msgHTML('<br/>类型：商务团购<br/>姓名：'.$name.'<br/>手机号：'.$phone.'<br/>电子邮箱：'.$email.'<br/>备注信息：'.$memo);	
			$mail->AltBody = 'This is a plain-text message body';
			if(!$mail->Send()) {
				$ret['code'] = false;
    			$ret['msg'] = '邮件发送失败！'.$mail->ErrorInfo;
				echo json_encode($ret);
			} else {
				$ret['code'] = true;
			    $ret['msg'] = '信息提交成功！';
				echo json_encode($ret);
			} 
			
		}
	}
	public function welfare()
	{
		if ($_SERVER['REQUEST_METHOD'] === "GET")
		{
			header("Location: http://127.0.0.1");
			exit;
		}
		else
		{
			$name = $this->input->post("name");
			$phone = $this->input->post("phone");
			$email = $this->input->post("email");
			$memo = $this->input->post("memo");
			
			// 设置邮箱
			require_once("class.phpmailer.php");
			require_once("class.smtp.php");
			$mail  = new PHPMailer(); 
			$mail->CharSet    ="UTF-8";         			//设定邮件编码，如果发中文此项必须设置为 UTF-8
			$mail->isSMTP();
			$mail->Debugoutput = 'html';
			$mail->SMTPAuth   = true;                   	// 启用 SMTP 验证功能
			$mail->SMTPSecure = "ssl";                  	// SMTP 安全协议
			$mail->Host       = "smtp.qq.com";       		// SMTP 服务器
			$mail->Port       = 465;                    		// SMTP服务器的端口号
			$mail->Username   = "1960009001@qq.com";  			// SMTP服务器用户名
			$mail->Password   = "cxqbksltowedbbbi";        				// SMTP服务器密码
			$mail->setFrom('1960009001@qq.com', 'liuyang');    // 设置发件人地址和名称
			$mail->addAddress("liuyang2@ieslab.cn", "michael");
			
			$mail->Subject = "企业福利信息";
			$mail->msgHTML('<br/>类型：企业福利<br/>姓名：'.$name.'<br/>手机号：'.$phone.'<br/>电子邮箱：'.$email.'<br/>备注信息：'.$memo);	
			$mail->AltBody = 'This is a plain-text message body';
			if(!$mail->Send()) {
				$ret['code'] = false;
    			$ret['msg'] = '邮件发送失败！'.$mail->ErrorInfo;
				echo json_encode($ret);
			} else {
				$ret['code'] = true;
			    $ret['msg'] = '信息提交成功！';
				echo json_encode($ret);
			} 
			
		}
	}
}
