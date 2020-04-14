<?php
namespace lib;

class PayUtils {

	/**
	 * ����������Ԫ�أ����ա�����=����ֵ����ģʽ�á�&���ַ�ƴ�ӳ��ַ���
	 * @param $para ��Ҫƴ�ӵ�����
	 * return ƴ������Ժ���ַ���
	 */
	static public function createLinkstring($para) {
		$arg  = "";
		foreach ($para as $key=>$val) {
			$arg.=$key."=".$val."&";
		}
		//ȥ�����һ��&�ַ�
		$arg = substr($arg,0,-1);

		return $arg;
	}
	/**
	 * ����������Ԫ�أ����ա�����=����ֵ����ģʽ�á�&���ַ�ƴ�ӳ��ַ����������ַ�����urlencode����
	 * @param $para ��Ҫƴ�ӵ�����
	 * return ƴ������Ժ���ַ���
	 */
	static public function createLinkstringUrlencode($para) {
		$arg  = "";
		foreach ($para as $key=>$val) {
			$arg.=$key."=".urlencode($val)."&";
		}
		//ȥ�����һ��&�ַ�
		$arg = substr($arg,0,-1);

		return $arg;
	}
	/**
	 * ��ȥ�����еĿ�ֵ��ǩ������
	 * @param $para ǩ��������
	 * return ȥ����ֵ��ǩ�����������ǩ��������
	 */
	static public function paraFilter($para) {
		$para_filter = array();
		foreach ($para as $key=>$val) {
			if($key == "sign" || $key == "sign_type" || $val == "")continue;
			else $para_filter[$key] = $para[$key];
		}
		return $para_filter;
	}
	/**
	 * ����������
	 * @param $para ����ǰ������
	 * return ����������
	 */
	static public function argSort($para) {
		ksort($para);
		reset($para);
		return $para;
	}
	/**
	 * ǩ���ַ���
	 * @param $prestr ��Ҫǩ�����ַ���
	 * @param $key ˽Կ
	 * return ǩ�����
	 */
	static public function md5Sign($prestr, $key) {
		$prestr = $prestr . $key;
		return md5($prestr);
	}

	/**
	 * ��֤ǩ��
	 * @param $prestr ��Ҫǩ�����ַ���
	 * @param $sign ǩ�����
	 * @param $key ˽Կ
	 * return ǩ�����
	 */
	static public function md5Verify($prestr, $sign, $key) {
		$prestr = $prestr . $key;
		$mysgin = md5($prestr);

		if($mysgin == $sign) {
			return true;
		}
		else {
			return false;
		}
	}
}
