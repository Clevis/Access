<?php

/**
 * This file is part of the Nette Framework (http://nette.org)
 *
 * Copyright (c) 2004 David Grudl (http://davidgrudl.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 * @package Nette\Mail
 */



/**
 * Mailer interface.
 *
 * @author     David Grudl
 * @package Nette\Mail
 */
interface IMailer
{

	/**
	 * Sends email.
	 * @param  Mail
	 * @return void
	 */
	function send(Mail $mail);

}
