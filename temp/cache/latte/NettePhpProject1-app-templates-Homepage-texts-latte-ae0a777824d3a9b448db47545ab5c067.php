<?php
// source: C:\wamp\www\NettePhpProject1\app/templates/Homepage/texts.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('9657209266', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb78f75edf2c_content')) { function _lb78f75edf2c_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($array) as $value) { ?>
    <div><?php echo Latte\Runtime\Filters::escapeHtml($template->capitalize($value), ENT_NOQUOTES) ?></div>
<?php if (!$iterator->isLast()) { ?>
        <hr>
<?php } $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
Velikost vašich souborů je: <?php echo Latte\Runtime\Filters::escapeHtml($template->bytes($size), ENT_NOQUOTES) ?><br>
Nyní je: <?php echo Latte\Runtime\Filters::escapeHtml($template->date($time, 'j. n. Y'), ENT_NOQUOTES) ?>

<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 