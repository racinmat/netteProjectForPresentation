<?php
// source: C:\wamp\www\NettePhpProject1\app/templates/Homepage/escaping.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('2691581220', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb63dc3744cb_content')) { function _lb63dc3744cb_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div><?php echo Latte\Runtime\Filters::escapeHtml($script, ENT_NOQUOTES) ?></div>
<div onmouseover="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::escapeJs($alert), ENT_COMPAT) ?>">najeď na mne myší</div>
<img <?php echo '"' . Latte\Runtime\Filters::escapeHtml($img, ENT_COMPAT) . '"' ?>>
<img src=<?php echo '"' . Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($imgOnMouseOver), ENT_COMPAT) . '"' ?>>
<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($link), ENT_COMPAT) ?>"></script>
<IMG SRC=<?php echo '"' . Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($onError), ENT_COMPAT) . '"' ?>></img>
<?php echo Latte\Runtime\Filters::escapeHtml($embed, ENT_NOQUOTES) ?>

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