<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Windwalker\Edge\Extension;

/**
 * The BasicExtension class.
 *
 * @since  {DEPLOY_VERSION}
 */
class BasicExtension implements EdgeExtensionInterface
{
	public function getName()
	{
		return 'basic';
	}

	public function getDirectives()
	{
		return array(
			'foreach' => array($this, 'compileForeach'),
			'endforeach' => array($this, 'compileEndforeach'),
		);
	}

	public function compileForeach($expression)
	{
		return '<?php endforeach; ?>';
	}

	public function compileEndforeach($expression)
	{
		return "<?php foreach{$expression}: ?>";
	}
}
