<?php
return array (
       
		'TMPL_PARSE_STRING' => array (
				'__PUBLIC__' => __ROOT__ . '/Public',
				'__JS__' => __ROOT__ . '/Public/js',
				'__CSS__' => __ROOT__ . '/Public/css',
				'__IMG__' => __ROOT__ . '/Public/images',
				'__DATA__' => __ROOT__ . '/Data/' 
		),
		
		'DB_TYPE' => 'mysql', 		// ���ݿ�����
		'DB_HOST' => 'localhost', 	// ��������ַ
		'DB_NAME' => 'db_classroom',   // ���ݿ�����
		'DB_USER' => 'root', 		// ���ݿ��û���
		'DB_PWD' => '123456',		    // ���ݿ�����
		'DB_PORT' => '3306', 		// ���ݿ�˿�
		'DB_PREFIX' => 'tb_', 		// ���ݿ��ǰ׺
		
		'DB_PARAMS' => array (), 	// ���ݿ����Ӳ���
		'DB_DEBUG' => TRUE, 		// ���ݿ����ģʽ ��������Լ�¼SQL��־
		'DB_FIELDS_CACHE' => true,  // �����ֶλ���
		'DB_CHARSET' => 'utf8', 	// ���ݿ����Ĭ�ϲ���utf8
		'DB_DEPLOY_TYPE' => 0, 		// ���ݿⲿ��ʽ:0 ����ʽ(��һ������),1 �ֲ�ʽ(���ӷ�����)
		'DB_RW_SEPARATE' => false,  // ���ݿ��д�Ƿ���� ����ʽ��Ч
		'DB_MASTER_NUM' => 1, 		// ��д����� ������������
		'DB_SLAVE_NO' => ''
		
) // ָ���ӷ��������
;