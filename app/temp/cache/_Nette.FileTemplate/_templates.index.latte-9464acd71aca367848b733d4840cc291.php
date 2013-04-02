<?php //netteCache[01]000386a:2:{s:4:"time";s:21:"0.08056700 1364943375";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:64:"/Users/Tomik/Projects/PHP/fraphpuccino/app/templates/index.latte";i:2;i:1364943374;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: /Users/Tomik/Projects/PHP/fraphpuccino/app/templates/index.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'pxlrs2nlx8')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb02111dd290_content')) { function _lb02111dd290_content($_l, $_args) { extract($_args)
;call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>
<p>
	Yay! It works!
</p>

<p>
	Lorem <a href="<?php echo htmlSpecialChars($baseUrl) ?>/second">ipsum dolor</a> sit amet, consectetur adipisicing elit,
	sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
	irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	Excepteur <a href="<?php echo htmlSpecialChars($baseUrl) ?>/second">some other page</a> sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<p>
	Mauris tempor fermentum erat, sollicitudin gravida orci tincidunt ut. Sed scelerisque ullamcorper
	nisi, sed porttitor felis commodo ut. Donec fringilla libero quis erat consectetur non eleifend
	lacus interdum. Integer consectetur vulputate semper. <a href="<?php echo htmlSpecialChars($baseUrl) ?>/nonexistent">Nonexistent</a> non convallis massa. Class aptent
	taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
</p><?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb1941c9529b_title')) { function _lb1941c9529b_title($_l, $_args) { extract($_args)
?><h2>The front page</h2>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = '@layout.latte'; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
// ?>


<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 