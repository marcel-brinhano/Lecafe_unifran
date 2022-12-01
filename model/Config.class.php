<?php 

Class Config{

	//INFORMÃÇÕES BÁSICAS DO SITE Localhost
	const SITE_URL = "http://lecafe-unifran-cc.umbler.net/";
	const SITE_PASTA = "";
	const SITE_NOME = "LeCafé";
	const SITE_EMAIL_ADM = "lecafe_unifran@outlook.com";
	const BD_LIMIT_POR_PAG = 6;
	const SITE_CEP = '13570000';


	//INFORMAÇÕES DO BANCO DE DADOS Localhost
	const BD_HOST = "mysql247.umbler.com",
		  BD_USER = "lecafe_unifran",
		  BD_SENHA = "suasenha",
		  BD_BANCO = "lecafe",
		  BD_PREFIX = "";

/*	//INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "lecafe";
	const SITE_NOME = "LeCafé";
	const SITE_EMAIL_ADM = "lecafe_unifran@outlook.com";
	const BD_LIMIT_POR_PAG = 6;
	const SITE_CEP = '13570000';


	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "lojalecafe",
		  BD_PREFIX = "";*/

	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp-mail.outlook.com";
	const EMAIL_USER = "lecafe_unifran@outlook.com";
	const EMAIL_NOME = "Contato Cafeteria LeCafé";
	const EMAIL_SENHA = "suasenha";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "lecafe_unifran@outlook.com";

	const PS_EMAIL  = "email@gmail.com";
    const PS_TOKEN  = "";
    const PS_TOKEN_SBX = "990497BE946F4DD29AA39FF7C9DBE9E8";
    const PS_AMBIENTE = "sandbox";
}
 ?>