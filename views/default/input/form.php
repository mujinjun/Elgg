<?php
	/**
	 * Create a form for data submission.
	 * Use this view for forms rather than creating a form tag in the wild as it provides
	 * extra security which help prevent CSRF attacks.
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Marcus Povey
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 * 
	 * @uses $vars['body'] The body of the form (made up of other input/xxx views and html
	 * @uses $vars['method'] Method (default POST)
	 * @uses $vars['enctype'] How the form is encoded, default blank
	 * @uses $vars['action'] URL of the action being called
	 * 
	 */

$body = $vars['body'];
$action = $vars['action'];
$enctype = $vars['enctype'];
$method = $vars['method']; if (!$method) $method = 'POST';

// TODO: Token generation

?>
<form action="<?php echo $action; ?>" method="<?php echo $method; ?>" <?php if ($enctype!="") echo "enctype=\"$enctype\""; ?>>
<?php echo $body; ?>
</form>