<?php

class Standard_action_TextmediaAbove_89f9e8dd646ac11587532884358e449a63fa7880 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Header
 */
public function section_31341c6f0c7af677ffb8fadcb92038e8ac2b6193(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return NULL;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <div class="textmedia textmedia-above">
        <div class="textmedia-item textmedia-gallery">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['renderable'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['debug'] = true;
$arguments1['partial'] = 'Media/Gallery';
$arguments1['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        </div>
        <div class="textmedia-item textmedia-text">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'Header/All';
$arguments4['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array9 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array9);
};
$arguments7 = array();
$arguments7['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
        </div>
    </div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output10 = '';

$output10 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['name'] = NULL;
$arguments11['name'] = 'Default';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output10 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['name'] = NULL;
$arguments13['name'] = 'Header';

$output10 .= NULL;

$output10 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '

    <div class="textmedia textmedia-above">
        <div class="textmedia-item textmedia-gallery">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['section'] = NULL;
$arguments18['partial'] = NULL;
$arguments18['delegate'] = NULL;
$arguments18['renderable'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$arguments18['default'] = NULL;
$arguments18['contentAs'] = NULL;
$arguments18['debug'] = true;
$arguments18['partial'] = 'Media/Gallery';
$arguments18['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
        </div>
        <div class="textmedia-item textmedia-text">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['section'] = NULL;
$arguments21['partial'] = NULL;
$arguments21['delegate'] = NULL;
$arguments21['renderable'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['optional'] = false;
$arguments21['default'] = NULL;
$arguments21['contentAs'] = NULL;
$arguments21['debug'] = true;
$arguments21['partial'] = 'Header/All';
$arguments21['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output17 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array26);
};
$arguments24 = array();
$arguments24['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output17 .= '
        </div>
    </div>

';
return $output17;
};
$arguments15 = array();
$arguments15['name'] = NULL;
$arguments15['name'] = 'Main';

$output10 .= NULL;

$output10 .= '

';

return $output10;
}


}
#