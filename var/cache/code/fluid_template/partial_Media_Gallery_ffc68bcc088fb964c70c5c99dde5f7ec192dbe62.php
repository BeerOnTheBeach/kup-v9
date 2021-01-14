<?php

class partial_Media_Gallery_ffc68bcc088fb964c70c5c99dde5f7ec192dbe62 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return '1';
};
$arguments7 = array();
$arguments7['value'] = NULL;
$arguments7['name'] = NULL;
$arguments7['name'] = 'imagecols';
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string19 = '{data.imagecols as integer}';
$array20 = array (
  0 => '{data.imagecols as integer}',
  1 => '{data.imagecols as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string19, $array20);
};
$arguments17 = array();
$arguments17['value'] = NULL;
$arguments17['name'] = NULL;
$arguments17['name'] = 'imagecols';
$renderChildrenClosure18 = ($arguments17['value'] !== null) ? function() use ($arguments17) { return $arguments17['value']; } : $renderChildrenClosure18;
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '
    ';
return $output16;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$array14 = array (
);return $renderingContext->getVariableProvider()->getByPath('files', $array14);
};
$arguments12 = array();
$arguments12['subject'] = NULL;
$renderChildrenClosure13 = ($arguments12['subject'] !== null) ? function() use ($arguments12) { return $arguments12['subject']; } : $renderChildrenClosure13;$array11['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
$array11['1'] = ' > 1';

$expression15 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = $renderChildrenClosure10;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$array23 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings.gallery.columns.{imagecols}', $array23);
};
$arguments21 = array();
$arguments21['value'] = NULL;
$arguments21['name'] = NULL;
$arguments21['name'] = 'columnConfig';
$renderChildrenClosure22 = ($arguments21['value'] !== null) ? function() use ($arguments21) { return $arguments21['value']; } : $renderChildrenClosure22;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output6 .= '
    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['as'] = NULL;
$arguments24['variants'] = NULL;
$arguments24['multiplier'] = NULL;
$arguments24['gutters'] = NULL;
$arguments24['corrections'] = NULL;
$arguments24['as'] = 'variants';
$array26 = array (
);$arguments24['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array26);
$array27 = array (
);$arguments24['multiplier'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.multiplier', $array27);
$array28 = array (
);$arguments24['gutters'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.gutters', $array28);
$array29 = array (
);$arguments24['corrections'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.corrections', $array29);

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output6 .= '

    <div class="gallery-row">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            <div class="gallery-item ';
$array34 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('columnConfig.class', $array34)]);

$output33 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['section'] = NULL;
$arguments35['partial'] = NULL;
$arguments35['delegate'] = NULL;
$arguments35['renderable'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['optional'] = false;
$arguments35['default'] = NULL;
$arguments35['contentAs'] = NULL;
$arguments35['debug'] = true;
$arguments35['partial'] = 'Media/Type';
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array38);
$array39 = array (
);$array37['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array39);
$array40 = array (
);$array37['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array40);
$array41 = array (
);$array37['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array41);
$arguments35['arguments'] = $array37;

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output33 .= '
            </div>
        ';
return $output33;
};
$arguments30 = array();
$arguments30['each'] = NULL;
$arguments30['as'] = NULL;
$arguments30['key'] = NULL;
$arguments30['reverse'] = false;
$arguments30['iteration'] = NULL;
$array32 = array (
);$arguments30['each'] = $renderingContext->getVariableProvider()->getByPath('files', $array32);
$arguments30['as'] = 'file';
$arguments30['iteration'] = 'fileIteration';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output6 .= '
    </div>

';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('files', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#