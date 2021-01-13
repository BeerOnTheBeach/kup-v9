<?php

class partial_Navigation_Main_32d61c601bb25d6dfd5a357c18005cce3457c9c4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section MainNavigation
 */
public function section_199fd3cbc502fb014cf96b9d63b613e89d1ba161(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments252 = array();

$output251 .= '';

$output251 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments257 = array();
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$arguments257['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array259 = array();
$array260 = array (
);$array259['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array260);

$expression261 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments257['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression261(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array259)
					),
					$renderingContext
				);
$arguments257['then'] = ' active';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['then'] = NULL;
$arguments262['else'] = NULL;
$arguments262['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array264 = array();
$array265 = array (
);$array264['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array265);

$expression266 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments262['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression266(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array264)
					),
					$renderingContext
				);
$arguments262['then'] = ' dropdown dropdown-hover';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output256 .= '">
                            <a href="';
$array267 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array267)]);

$output256 .= '" id="nav-item-';
$array268 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array268)]);

$output256 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array272);

$expression273 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$arguments269['then'] = ' dropdown-toggle';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output256 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['then'] = NULL;
$arguments274['else'] = NULL;
$arguments274['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array276 = array();
$array277 = array (
);$array276['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array277);

$expression278 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments274['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression278(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array276)
					),
					$renderingContext
				);
$output279 = '';

$output279 .= ' target="';
$array280 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array280)]);

$output279 .= '"';
$arguments274['then'] = $output279;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output256 .= ' title="';
$array281 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array281)]);

$output256 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['then'] = NULL;
$arguments282['else'] = NULL;
$arguments282['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array285);

$expression286 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments282['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array284)
					),
					$renderingContext
				);
$arguments282['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output256 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['image'] = NULL;
$arguments317['src'] = NULL;
$arguments317['width'] = NULL;
$arguments317['height'] = NULL;
$array319 = array (
);$arguments317['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array319);
$array320 = array (
);$arguments317['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array320);
$array321 = array (
);$arguments317['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array321);

$output316 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output316 .= '
                                            ';
return $output316;
};
$arguments314 = array();

$output313 .= '';

$output313 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['additionalAttributes'] = NULL;
$arguments325['data'] = NULL;
$arguments325['class'] = NULL;
$arguments325['dir'] = NULL;
$arguments325['id'] = NULL;
$arguments325['lang'] = NULL;
$arguments325['style'] = NULL;
$arguments325['title'] = NULL;
$arguments325['accesskey'] = NULL;
$arguments325['tabindex'] = NULL;
$arguments325['onclick'] = NULL;
$arguments325['alt'] = NULL;
$arguments325['ismap'] = NULL;
$arguments325['longdesc'] = NULL;
$arguments325['usemap'] = NULL;
$arguments325['src'] = NULL;
$arguments325['treatIdAsReference'] = NULL;
$arguments325['image'] = NULL;
$arguments325['crop'] = NULL;
$arguments325['cropVariant'] = 'default';
$arguments325['width'] = NULL;
$arguments325['height'] = NULL;
$arguments325['minWidth'] = NULL;
$arguments325['minHeight'] = NULL;
$arguments325['maxWidth'] = NULL;
$arguments325['maxHeight'] = NULL;
$arguments325['absolute'] = false;
$array327 = array (
);$arguments325['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array327);
$array328 = array (
);$arguments325['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array328);
$array329 = array (
);$arguments325['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array329);
$array330 = array (
);$arguments325['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array330);
$array331 = array (
);$arguments325['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array331);

$output324 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '
                                            ';
return $output324;
};
$arguments322 = array();
$arguments322['if'] = NULL;

$output313 .= '';

$output313 .= '
                                        ';
return $output313;
};
$arguments294 = array();
$arguments294['then'] = NULL;
$arguments294['else'] = NULL;
$arguments294['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array310 = array();
$array311 = array (
);$array310['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array311);
$array310['1'] = ' === svg';

$expression312 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments294['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array310)
					),
					$renderingContext
				);
$arguments294['__thenClosure'] = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['image'] = NULL;
$arguments297['src'] = NULL;
$arguments297['width'] = NULL;
$arguments297['height'] = NULL;
$array299 = array (
);$arguments297['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array299);
$array300 = array (
);$arguments297['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array300);
$array301 = array (
);$arguments297['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array301);

$output296 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output296 .= '
                                            ';
return $output296;
};
$arguments294['__elseClosures'][] = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['additionalAttributes'] = NULL;
$arguments303['data'] = NULL;
$arguments303['class'] = NULL;
$arguments303['dir'] = NULL;
$arguments303['id'] = NULL;
$arguments303['lang'] = NULL;
$arguments303['style'] = NULL;
$arguments303['title'] = NULL;
$arguments303['accesskey'] = NULL;
$arguments303['tabindex'] = NULL;
$arguments303['onclick'] = NULL;
$arguments303['alt'] = NULL;
$arguments303['ismap'] = NULL;
$arguments303['longdesc'] = NULL;
$arguments303['usemap'] = NULL;
$arguments303['src'] = NULL;
$arguments303['treatIdAsReference'] = NULL;
$arguments303['image'] = NULL;
$arguments303['crop'] = NULL;
$arguments303['cropVariant'] = 'default';
$arguments303['width'] = NULL;
$arguments303['height'] = NULL;
$arguments303['minWidth'] = NULL;
$arguments303['minHeight'] = NULL;
$arguments303['maxWidth'] = NULL;
$arguments303['maxHeight'] = NULL;
$arguments303['absolute'] = false;
$array305 = array (
);$arguments303['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array305);
$array306 = array (
);$arguments303['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array306);
$array307 = array (
);$arguments303['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array307);
$array308 = array (
);$arguments303['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array308);
$array309 = array (
);$arguments303['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array309);

$output302 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output302 .= '
                                            ';
return $output302;
};

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '
                                    </span>
                                ';
return $output293;
};
$arguments287 = array();
$arguments287['then'] = NULL;
$arguments287['else'] = NULL;
$arguments287['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array290);
$array289['1'] = ' && ';
$array291 = array (
);$array289['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array291);

$expression292 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments287['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments287['__thenClosure'] = $renderChildrenClosure288;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output256 .= '
                                <span class="nav-link-text">';
$array332 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array332)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments333 = array();
$arguments333['then'] = NULL;
$arguments333['else'] = NULL;
$arguments333['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array335 = array();
$array336 = array (
);$array335['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array336);

$expression337 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments333['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression337(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array335)
					),
					$renderingContext
				);
$arguments333['__thenClosure'] = $renderChildrenClosure334;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output256 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array344 = array (
);
$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array344)]);

$output343 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments421 = array();

$output420 .= '';

$output420 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$output425 = '';

$output425 .= '
                                                <li>
                                                    <a href="';
$array426 = array (
);
$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array426)]);

$output425 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments427 = array();
$arguments427['then'] = NULL;
$arguments427['else'] = NULL;
$arguments427['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array429 = array();
$array430 = array (
);$array429['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array430);

$expression431 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments427['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression431(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array429)
					),
					$renderingContext
				);
$arguments427['then'] = ' active';

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output425 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['then'] = NULL;
$arguments432['else'] = NULL;
$arguments432['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array434 = array();
$array435 = array (
);$array434['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array435);

$expression436 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments432['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression436(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array434)
					),
					$renderingContext
				);
$output437 = '';

$output437 .= ' target="';
$array438 = array (
);
$output437 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array438)]);

$output437 .= '"';
$arguments432['then'] = $output437;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output425 .= ' title="';
$array439 = array (
);
$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array439)]);

$output425 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$output466 = '';

$output466 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['image'] = NULL;
$arguments470['src'] = NULL;
$arguments470['width'] = NULL;
$arguments470['height'] = NULL;
$array472 = array (
);$arguments470['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array472);
$array473 = array (
);$arguments470['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array473);
$array474 = array (
);$arguments470['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array474);

$output469 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '
                                                                    ';
return $output469;
};
$arguments467 = array();

$output466 .= '';

$output466 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['additionalAttributes'] = NULL;
$arguments478['data'] = NULL;
$arguments478['class'] = NULL;
$arguments478['dir'] = NULL;
$arguments478['id'] = NULL;
$arguments478['lang'] = NULL;
$arguments478['style'] = NULL;
$arguments478['title'] = NULL;
$arguments478['accesskey'] = NULL;
$arguments478['tabindex'] = NULL;
$arguments478['onclick'] = NULL;
$arguments478['alt'] = NULL;
$arguments478['ismap'] = NULL;
$arguments478['longdesc'] = NULL;
$arguments478['usemap'] = NULL;
$arguments478['src'] = NULL;
$arguments478['treatIdAsReference'] = NULL;
$arguments478['image'] = NULL;
$arguments478['crop'] = NULL;
$arguments478['cropVariant'] = 'default';
$arguments478['width'] = NULL;
$arguments478['height'] = NULL;
$arguments478['minWidth'] = NULL;
$arguments478['minHeight'] = NULL;
$arguments478['maxWidth'] = NULL;
$arguments478['maxHeight'] = NULL;
$arguments478['absolute'] = false;
$array480 = array (
);$arguments478['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array480);
$array481 = array (
);$arguments478['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array481);
$array482 = array (
);$arguments478['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array482);
$array483 = array (
);$arguments478['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array483);
$array484 = array (
);$arguments478['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array484);

$output477 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output477 .= '
                                                                    ';
return $output477;
};
$arguments475 = array();
$arguments475['if'] = NULL;

$output466 .= '';

$output466 .= '
                                                                ';
return $output466;
};
$arguments447 = array();
$arguments447['then'] = NULL;
$arguments447['else'] = NULL;
$arguments447['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array463 = array();
$array464 = array (
);$array463['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array464);
$array463['1'] = ' === svg';

$expression465 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments447['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression465(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array463)
					),
					$renderingContext
				);
$arguments447['__thenClosure'] = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['image'] = NULL;
$arguments450['src'] = NULL;
$arguments450['width'] = NULL;
$arguments450['height'] = NULL;
$array452 = array (
);$arguments450['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array452);
$array453 = array (
);$arguments450['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array453);
$array454 = array (
);$arguments450['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array454);

$output449 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
                                                                    ';
return $output449;
};
$arguments447['__elseClosures'][] = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['additionalAttributes'] = NULL;
$arguments456['data'] = NULL;
$arguments456['class'] = NULL;
$arguments456['dir'] = NULL;
$arguments456['id'] = NULL;
$arguments456['lang'] = NULL;
$arguments456['style'] = NULL;
$arguments456['title'] = NULL;
$arguments456['accesskey'] = NULL;
$arguments456['tabindex'] = NULL;
$arguments456['onclick'] = NULL;
$arguments456['alt'] = NULL;
$arguments456['ismap'] = NULL;
$arguments456['longdesc'] = NULL;
$arguments456['usemap'] = NULL;
$arguments456['src'] = NULL;
$arguments456['treatIdAsReference'] = NULL;
$arguments456['image'] = NULL;
$arguments456['crop'] = NULL;
$arguments456['cropVariant'] = 'default';
$arguments456['width'] = NULL;
$arguments456['height'] = NULL;
$arguments456['minWidth'] = NULL;
$arguments456['minHeight'] = NULL;
$arguments456['maxWidth'] = NULL;
$arguments456['maxHeight'] = NULL;
$arguments456['absolute'] = false;
$array458 = array (
);$arguments456['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array458);
$array459 = array (
);$arguments456['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array459);
$array460 = array (
);$arguments456['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array460);
$array461 = array (
);$arguments456['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array461);
$array462 = array (
);$arguments456['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array462);

$output455 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output455 .= '
                                                                    ';
return $output455;
};

$output446 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output446 .= '
                                                            </span>
                                                        ';
return $output446;
};
$arguments440 = array();
$arguments440['then'] = NULL;
$arguments440['else'] = NULL;
$arguments440['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array442 = array();
$array443 = array (
);$array442['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array443);
$array442['1'] = ' && ';
$array444 = array (
);$array442['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array444);

$expression445 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments440['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression445(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array442)
					),
					$renderingContext
				);
$arguments440['__thenClosure'] = $renderChildrenClosure441;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext);

$output425 .= '
                                                        <span class="dropdown-text">';
$array485 = array (
);
$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array485)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments486 = array();
$arguments486['then'] = NULL;
$arguments486['else'] = NULL;
$arguments486['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array488 = array();
$array489 = array (
);$array488['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array489);

$expression490 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments486['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression490(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array488)
					),
					$renderingContext
				);
$arguments486['__thenClosure'] = $renderChildrenClosure487;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output425 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output425;
};
$arguments423 = array();
$arguments423['if'] = NULL;

$output420 .= '';

$output420 .= '
                                        ';
return $output420;
};
$arguments349 = array();
$arguments349['then'] = NULL;
$arguments349['else'] = NULL;
$arguments349['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array417 = array();
$array418 = array (
);$array417['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array418);

$expression419 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments349['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array417)
					),
					$renderingContext
				);
$arguments349['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments349['__elseClosures'][] = function() use ($renderingContext, $self) {
$output351 = '';

$output351 .= '
                                                <li>
                                                    <a href="';
$array352 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array352)]);

$output351 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['then'] = NULL;
$arguments353['else'] = NULL;
$arguments353['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array355 = array();
$array356 = array (
);$array355['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array356);

$expression357 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments353['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression357(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array355)
					),
					$renderingContext
				);
$arguments353['then'] = ' active';

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output351 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['then'] = NULL;
$arguments358['else'] = NULL;
$arguments358['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array360 = array();
$array361 = array (
);$array360['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array361);

$expression362 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments358['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression362(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array360)
					),
					$renderingContext
				);
$output363 = '';

$output363 .= ' target="';
$array364 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array364)]);

$output363 .= '"';
$arguments358['then'] = $output363;

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output351 .= ' title="';
$array365 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array365)]);

$output351 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output392 = '';

$output392 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['image'] = NULL;
$arguments396['src'] = NULL;
$arguments396['width'] = NULL;
$arguments396['height'] = NULL;
$array398 = array (
);$arguments396['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array398);
$array399 = array (
);$arguments396['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array399);
$array400 = array (
);$arguments396['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array400);

$output395 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
                                                                    ';
return $output395;
};
$arguments393 = array();

$output392 .= '';

$output392 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$output403 = '';

$output403 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['additionalAttributes'] = NULL;
$arguments404['data'] = NULL;
$arguments404['class'] = NULL;
$arguments404['dir'] = NULL;
$arguments404['id'] = NULL;
$arguments404['lang'] = NULL;
$arguments404['style'] = NULL;
$arguments404['title'] = NULL;
$arguments404['accesskey'] = NULL;
$arguments404['tabindex'] = NULL;
$arguments404['onclick'] = NULL;
$arguments404['alt'] = NULL;
$arguments404['ismap'] = NULL;
$arguments404['longdesc'] = NULL;
$arguments404['usemap'] = NULL;
$arguments404['src'] = NULL;
$arguments404['treatIdAsReference'] = NULL;
$arguments404['image'] = NULL;
$arguments404['crop'] = NULL;
$arguments404['cropVariant'] = 'default';
$arguments404['width'] = NULL;
$arguments404['height'] = NULL;
$arguments404['minWidth'] = NULL;
$arguments404['minHeight'] = NULL;
$arguments404['maxWidth'] = NULL;
$arguments404['maxHeight'] = NULL;
$arguments404['absolute'] = false;
$array406 = array (
);$arguments404['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array406);
$array407 = array (
);$arguments404['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array407);
$array408 = array (
);$arguments404['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array408);
$array409 = array (
);$arguments404['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array409);
$array410 = array (
);$arguments404['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array410);

$output403 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output403 .= '
                                                                    ';
return $output403;
};
$arguments401 = array();
$arguments401['if'] = NULL;

$output392 .= '';

$output392 .= '
                                                                ';
return $output392;
};
$arguments373 = array();
$arguments373['then'] = NULL;
$arguments373['else'] = NULL;
$arguments373['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array389 = array();
$array390 = array (
);$array389['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array390);
$array389['1'] = ' === svg';

$expression391 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments373['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression391(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array389)
					),
					$renderingContext
				);
$arguments373['__thenClosure'] = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['image'] = NULL;
$arguments376['src'] = NULL;
$arguments376['width'] = NULL;
$arguments376['height'] = NULL;
$array378 = array (
);$arguments376['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array378);
$array379 = array (
);$arguments376['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array379);
$array380 = array (
);$arguments376['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array380);

$output375 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output375 .= '
                                                                    ';
return $output375;
};
$arguments373['__elseClosures'][] = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['additionalAttributes'] = NULL;
$arguments382['data'] = NULL;
$arguments382['class'] = NULL;
$arguments382['dir'] = NULL;
$arguments382['id'] = NULL;
$arguments382['lang'] = NULL;
$arguments382['style'] = NULL;
$arguments382['title'] = NULL;
$arguments382['accesskey'] = NULL;
$arguments382['tabindex'] = NULL;
$arguments382['onclick'] = NULL;
$arguments382['alt'] = NULL;
$arguments382['ismap'] = NULL;
$arguments382['longdesc'] = NULL;
$arguments382['usemap'] = NULL;
$arguments382['src'] = NULL;
$arguments382['treatIdAsReference'] = NULL;
$arguments382['image'] = NULL;
$arguments382['crop'] = NULL;
$arguments382['cropVariant'] = 'default';
$arguments382['width'] = NULL;
$arguments382['height'] = NULL;
$arguments382['minWidth'] = NULL;
$arguments382['minHeight'] = NULL;
$arguments382['maxWidth'] = NULL;
$arguments382['maxHeight'] = NULL;
$arguments382['absolute'] = false;
$array384 = array (
);$arguments382['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array384);
$array385 = array (
);$arguments382['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array385);
$array386 = array (
);$arguments382['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array386);
$array387 = array (
);$arguments382['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array387);
$array388 = array (
);$arguments382['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array388);

$output381 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '
                                                                    ';
return $output381;
};

$output372 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output372 .= '
                                                            </span>
                                                        ';
return $output372;
};
$arguments366 = array();
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array368 = array();
$array369 = array (
);$array368['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array369);
$array368['1'] = ' && ';
$array370 = array (
);$array368['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array370);

$expression371 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression371(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array368)
					),
					$renderingContext
				);
$arguments366['__thenClosure'] = $renderChildrenClosure367;

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output351 .= '
                                                        <span class="dropdown-text">';
$array411 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array411)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments412 = array();
$arguments412['then'] = NULL;
$arguments412['else'] = NULL;
$arguments412['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array414 = array();
$array415 = array (
);$array414['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array415);

$expression416 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments412['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression416(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array414)
					),
					$renderingContext
				);
$arguments412['__thenClosure'] = $renderChildrenClosure413;

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output351 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output351;
};

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '
                                    ';
return $output348;
};
$arguments345 = array();
$arguments345['each'] = NULL;
$arguments345['as'] = NULL;
$arguments345['key'] = NULL;
$arguments345['reverse'] = false;
$arguments345['iteration'] = NULL;
$array347 = array (
);$arguments345['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array347);
$arguments345['as'] = 'child';

$output343 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output343 .= '
                                </ul>
                            ';
return $output343;
};
$arguments338 = array();
$arguments338['then'] = NULL;
$arguments338['else'] = NULL;
$arguments338['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array340 = array();
$array341 = array (
);$array340['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array341);

$expression342 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments338['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression342(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array340)
					),
					$renderingContext
				);
$arguments338['__thenClosure'] = $renderChildrenClosure339;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output256 .= '
                        </li>
                    ';
return $output256;
};
$arguments254 = array();
$arguments254['if'] = NULL;

$output251 .= '';

$output251 .= '
                ';
return $output251;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array249);

$expression250 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = ' active';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['then'] = ' dropdown dropdown-hover';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '">
                            <a href="';
$array24 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array24)]);

$output13 .= '" id="nav-item-';
$array25 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array25)]);

$output13 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = ' dropdown-toggle';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$output36 = '';

$output36 .= ' target="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array37)]);

$output36 .= '"';
$arguments31['then'] = $output36;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output13 .= ' title="';
$array38 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array38)]);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output13 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['image'] = NULL;
$arguments74['src'] = NULL;
$arguments74['width'] = NULL;
$arguments74['height'] = NULL;
$array76 = array (
);$arguments74['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array76);
$array77 = array (
);$arguments74['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array77);
$array78 = array (
);$arguments74['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array78);

$output73 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
                                            ';
return $output73;
};
$arguments71 = array();

$output70 .= '';

$output70 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['class'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$arguments82['alt'] = NULL;
$arguments82['ismap'] = NULL;
$arguments82['longdesc'] = NULL;
$arguments82['usemap'] = NULL;
$arguments82['src'] = NULL;
$arguments82['treatIdAsReference'] = NULL;
$arguments82['image'] = NULL;
$arguments82['crop'] = NULL;
$arguments82['cropVariant'] = 'default';
$arguments82['width'] = NULL;
$arguments82['height'] = NULL;
$arguments82['minWidth'] = NULL;
$arguments82['minHeight'] = NULL;
$arguments82['maxWidth'] = NULL;
$arguments82['maxHeight'] = NULL;
$arguments82['absolute'] = false;
$array84 = array (
);$arguments82['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array84);
$array85 = array (
);$arguments82['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array85);
$array86 = array (
);$arguments82['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array86);
$array87 = array (
);$arguments82['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array87);
$array88 = array (
);$arguments82['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array88);

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                                            ';
return $output81;
};
$arguments79 = array();
$arguments79['if'] = NULL;

$output70 .= '';

$output70 .= '
                                        ';
return $output70;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array68);
$array67['1'] = ' === svg';

$expression69 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['image'] = NULL;
$arguments54['src'] = NULL;
$arguments54['width'] = NULL;
$arguments54['height'] = NULL;
$array56 = array (
);$arguments54['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array56);
$array57 = array (
);$arguments54['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array57);
$array58 = array (
);$arguments54['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array58);

$output53 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
                                            ';
return $output53;
};
$arguments51['__elseClosures'][] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['alt'] = NULL;
$arguments60['ismap'] = NULL;
$arguments60['longdesc'] = NULL;
$arguments60['usemap'] = NULL;
$arguments60['src'] = NULL;
$arguments60['treatIdAsReference'] = NULL;
$arguments60['image'] = NULL;
$arguments60['crop'] = NULL;
$arguments60['cropVariant'] = 'default';
$arguments60['width'] = NULL;
$arguments60['height'] = NULL;
$arguments60['minWidth'] = NULL;
$arguments60['minHeight'] = NULL;
$arguments60['maxWidth'] = NULL;
$arguments60['maxHeight'] = NULL;
$arguments60['absolute'] = false;
$array62 = array (
);$arguments60['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array62);
$array63 = array (
);$arguments60['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array63);
$array64 = array (
);$arguments60['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array64);
$array65 = array (
);$arguments60['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array65);
$array66 = array (
);$arguments60['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array66);

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                                            ';
return $output59;
};

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                                    </span>
                                ';
return $output50;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array47);
$array46['1'] = ' && ';
$array48 = array (
);$array46['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array48);

$expression49 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = $renderChildrenClosure45;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output13 .= '
                                <span class="nav-link-text">';
$array89 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array89)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output13 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array101 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array101)]);

$output100 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments178 = array();

$output177 .= '';

$output177 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
                                                <li>
                                                    <a href="';
$array183 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array183)]);

$output182 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$arguments184['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array187 = array (
);$array186['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array187);

$expression188 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments184['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);
$arguments184['then'] = ' active';

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output182 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$arguments189['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array192);

$expression193 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments189['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);
$output194 = '';

$output194 .= ' target="';
$array195 = array (
);
$output194 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array195)]);

$output194 .= '"';
$arguments189['then'] = $output194;

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output182 .= ' title="';
$array196 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array196)]);

$output182 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['image'] = NULL;
$arguments227['src'] = NULL;
$arguments227['width'] = NULL;
$arguments227['height'] = NULL;
$array229 = array (
);$arguments227['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array229);
$array230 = array (
);$arguments227['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array230);
$array231 = array (
);$arguments227['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array231);

$output226 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
                                                                    ';
return $output226;
};
$arguments224 = array();

$output223 .= '';

$output223 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['additionalAttributes'] = NULL;
$arguments235['data'] = NULL;
$arguments235['class'] = NULL;
$arguments235['dir'] = NULL;
$arguments235['id'] = NULL;
$arguments235['lang'] = NULL;
$arguments235['style'] = NULL;
$arguments235['title'] = NULL;
$arguments235['accesskey'] = NULL;
$arguments235['tabindex'] = NULL;
$arguments235['onclick'] = NULL;
$arguments235['alt'] = NULL;
$arguments235['ismap'] = NULL;
$arguments235['longdesc'] = NULL;
$arguments235['usemap'] = NULL;
$arguments235['src'] = NULL;
$arguments235['treatIdAsReference'] = NULL;
$arguments235['image'] = NULL;
$arguments235['crop'] = NULL;
$arguments235['cropVariant'] = 'default';
$arguments235['width'] = NULL;
$arguments235['height'] = NULL;
$arguments235['minWidth'] = NULL;
$arguments235['minHeight'] = NULL;
$arguments235['maxWidth'] = NULL;
$arguments235['maxHeight'] = NULL;
$arguments235['absolute'] = false;
$array237 = array (
);$arguments235['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array237);
$array238 = array (
);$arguments235['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array238);
$array239 = array (
);$arguments235['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array239);
$array240 = array (
);$arguments235['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array240);
$array241 = array (
);$arguments235['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array241);

$output234 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output234 .= '
                                                                    ';
return $output234;
};
$arguments232 = array();
$arguments232['if'] = NULL;

$output223 .= '';

$output223 .= '
                                                                ';
return $output223;
};
$arguments204 = array();
$arguments204['then'] = NULL;
$arguments204['else'] = NULL;
$arguments204['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array220 = array();
$array221 = array (
);$array220['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array221);
$array220['1'] = ' === svg';

$expression222 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments204['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression222(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array220)
					),
					$renderingContext
				);
$arguments204['__thenClosure'] = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['image'] = NULL;
$arguments207['src'] = NULL;
$arguments207['width'] = NULL;
$arguments207['height'] = NULL;
$array209 = array (
);$arguments207['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array209);
$array210 = array (
);$arguments207['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array210);
$array211 = array (
);$arguments207['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array211);

$output206 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output206 .= '
                                                                    ';
return $output206;
};
$arguments204['__elseClosures'][] = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['additionalAttributes'] = NULL;
$arguments213['data'] = NULL;
$arguments213['class'] = NULL;
$arguments213['dir'] = NULL;
$arguments213['id'] = NULL;
$arguments213['lang'] = NULL;
$arguments213['style'] = NULL;
$arguments213['title'] = NULL;
$arguments213['accesskey'] = NULL;
$arguments213['tabindex'] = NULL;
$arguments213['onclick'] = NULL;
$arguments213['alt'] = NULL;
$arguments213['ismap'] = NULL;
$arguments213['longdesc'] = NULL;
$arguments213['usemap'] = NULL;
$arguments213['src'] = NULL;
$arguments213['treatIdAsReference'] = NULL;
$arguments213['image'] = NULL;
$arguments213['crop'] = NULL;
$arguments213['cropVariant'] = 'default';
$arguments213['width'] = NULL;
$arguments213['height'] = NULL;
$arguments213['minWidth'] = NULL;
$arguments213['minHeight'] = NULL;
$arguments213['maxWidth'] = NULL;
$arguments213['maxHeight'] = NULL;
$arguments213['absolute'] = false;
$array215 = array (
);$arguments213['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array215);
$array216 = array (
);$arguments213['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array216);
$array217 = array (
);$arguments213['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array217);
$array218 = array (
);$arguments213['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array218);
$array219 = array (
);$arguments213['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array219);

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
                                                                    ';
return $output212;
};

$output203 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '
                                                            </span>
                                                        ';
return $output203;
};
$arguments197 = array();
$arguments197['then'] = NULL;
$arguments197['else'] = NULL;
$arguments197['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array200);
$array199['1'] = ' && ';
$array201 = array (
);$array199['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array201);

$expression202 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments197['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments197['__thenClosure'] = $renderChildrenClosure198;

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output182 .= '
                                                        <span class="dropdown-text">';
$array242 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array242)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments243 = array();
$arguments243['then'] = NULL;
$arguments243['else'] = NULL;
$arguments243['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array246 = array (
);$array245['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array246);

$expression247 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments243['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);
$arguments243['__thenClosure'] = $renderChildrenClosure244;

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output182 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output182;
};
$arguments180 = array();
$arguments180['if'] = NULL;

$output177 .= '';

$output177 .= '
                                        ';
return $output177;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array175);

$expression176 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments106['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments106['__elseClosures'][] = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
                                                <li>
                                                    <a href="';
$array109 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array109)]);

$output108 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array113);

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments110['then'] = ' active';

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output108 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$output120 = '';

$output120 .= ' target="';
$array121 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array121)]);

$output120 .= '"';
$arguments115['then'] = $output120;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output108 .= ' title="';
$array122 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array122)]);

$output108 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['image'] = NULL;
$arguments153['src'] = NULL;
$arguments153['width'] = NULL;
$arguments153['height'] = NULL;
$array155 = array (
);$arguments153['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array155);
$array156 = array (
);$arguments153['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array156);
$array157 = array (
);$arguments153['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array157);

$output152 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                                                                    ';
return $output152;
};
$arguments150 = array();

$output149 .= '';

$output149 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['alt'] = NULL;
$arguments161['ismap'] = NULL;
$arguments161['longdesc'] = NULL;
$arguments161['usemap'] = NULL;
$arguments161['src'] = NULL;
$arguments161['treatIdAsReference'] = NULL;
$arguments161['image'] = NULL;
$arguments161['crop'] = NULL;
$arguments161['cropVariant'] = 'default';
$arguments161['width'] = NULL;
$arguments161['height'] = NULL;
$arguments161['minWidth'] = NULL;
$arguments161['minHeight'] = NULL;
$arguments161['maxWidth'] = NULL;
$arguments161['maxHeight'] = NULL;
$arguments161['absolute'] = false;
$array163 = array (
);$arguments161['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array163);
$array164 = array (
);$arguments161['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array164);
$array165 = array (
);$arguments161['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array165);
$array166 = array (
);$arguments161['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array166);
$array167 = array (
);$arguments161['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array167);

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
                                                                    ';
return $output160;
};
$arguments158 = array();
$arguments158['if'] = NULL;

$output149 .= '';

$output149 .= '
                                                                ';
return $output149;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array147);
$array146['1'] = ' === svg';

$expression148 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['image'] = NULL;
$arguments133['src'] = NULL;
$arguments133['width'] = NULL;
$arguments133['height'] = NULL;
$array135 = array (
);$arguments133['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array135);
$array136 = array (
);$arguments133['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array136);
$array137 = array (
);$arguments133['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array137);

$output132 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
                                                                    ';
return $output132;
};
$arguments130['__elseClosures'][] = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['additionalAttributes'] = NULL;
$arguments139['data'] = NULL;
$arguments139['class'] = NULL;
$arguments139['dir'] = NULL;
$arguments139['id'] = NULL;
$arguments139['lang'] = NULL;
$arguments139['style'] = NULL;
$arguments139['title'] = NULL;
$arguments139['accesskey'] = NULL;
$arguments139['tabindex'] = NULL;
$arguments139['onclick'] = NULL;
$arguments139['alt'] = NULL;
$arguments139['ismap'] = NULL;
$arguments139['longdesc'] = NULL;
$arguments139['usemap'] = NULL;
$arguments139['src'] = NULL;
$arguments139['treatIdAsReference'] = NULL;
$arguments139['image'] = NULL;
$arguments139['crop'] = NULL;
$arguments139['cropVariant'] = 'default';
$arguments139['width'] = NULL;
$arguments139['height'] = NULL;
$arguments139['minWidth'] = NULL;
$arguments139['minHeight'] = NULL;
$arguments139['maxWidth'] = NULL;
$arguments139['maxHeight'] = NULL;
$arguments139['absolute'] = false;
$array141 = array (
);$arguments139['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array141);
$array142 = array (
);$arguments139['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array142);
$array143 = array (
);$arguments139['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array143);
$array144 = array (
);$arguments139['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array144);
$array145 = array (
);$arguments139['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array145);

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
                                                                    ';
return $output138;
};

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
                                                            </span>
                                                        ';
return $output129;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array126);
$array125['1'] = ' && ';
$array127 = array (
);$array125['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array127);

$expression128 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = $renderChildrenClosure124;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output108 .= '
                                                        <span class="dropdown-text">';
$array168 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array168)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments169 = array();
$arguments169['then'] = NULL;
$arguments169['else'] = NULL;
$arguments169['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array171 = array();
$array172 = array (
);$array171['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array172);

$expression173 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments169['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression173(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array171)
					),
					$renderingContext
				);
$arguments169['__thenClosure'] = $renderChildrenClosure170;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output108 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output108;
};

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
                                    ';
return $output105;
};
$arguments102 = array();
$arguments102['each'] = NULL;
$arguments102['as'] = NULL;
$arguments102['key'] = NULL;
$arguments102['reverse'] = false;
$arguments102['iteration'] = NULL;
$array104 = array (
);$arguments102['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array104);
$arguments102['as'] = 'child';

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output100 .= '
                                </ul>
                            ';
return $output100;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array98);

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = $renderChildrenClosure96;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output13 .= '
                        </li>
                    ';
return $output13;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array9);
$arguments7['as'] = 'item';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        </ul>
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array4);

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
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output491 = '';

$output491 .= '

<header id="page-header" class="bp-page-header navbar navbar-mainnavigation navbar-';
$array492 = array (
);
$output491 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.style', $array492)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments493 = array();
$arguments493['then'] = NULL;
$arguments493['else'] = NULL;
$arguments493['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array495 = array();
$array496 = array (
);$array495['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array496);

$expression497 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments493['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression497(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array495)
					),
					$renderingContext
				);
$arguments493['then'] = ' navbar-has-image';

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments498 = array();
$arguments498['then'] = NULL;
$arguments498['else'] = NULL;
$arguments498['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array500 = array();
$array501 = array (
);$array500['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array501);

$expression502 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments498['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression502(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array500)
					),
					$renderingContext
				);
$arguments498['else'] = ' navbar-top';
$output503 = '';

$output503 .= ' navbar-';
$array504 = array (
);
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array504)]);

$output503 .= ' navbar-fixed-';
$array505 = array (
);
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array505)]);
$arguments498['then'] = $output503;

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output491 .= '">
    <div class="container">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
$output535 = '';

$output535 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$output543 = '';

$output543 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['src'] = NULL;
$arguments544['treatIdAsReference'] = false;
$arguments544['image'] = NULL;
$arguments544['crop'] = NULL;
$arguments544['cropVariant'] = 'default';
$arguments544['width'] = NULL;
$arguments544['height'] = NULL;
$arguments544['minWidth'] = NULL;
$arguments544['minHeight'] = NULL;
$arguments544['maxWidth'] = NULL;
$arguments544['maxHeight'] = NULL;
$arguments544['absolute'] = false;
$array546 = array (
);$arguments544['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array546);

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext)]);

$output543 .= '" alt="';
$array547 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array547)]);

$output543 .= '" height="';
$array548 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array548)]);

$output543 .= '" width="';
$array549 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array549)]);

$output543 .= '">
                    <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments550 = array();
$arguments550['src'] = NULL;
$arguments550['treatIdAsReference'] = false;
$arguments550['image'] = NULL;
$arguments550['crop'] = NULL;
$arguments550['cropVariant'] = 'default';
$arguments550['width'] = NULL;
$arguments550['height'] = NULL;
$arguments550['minWidth'] = NULL;
$arguments550['minHeight'] = NULL;
$arguments550['maxWidth'] = NULL;
$arguments550['maxHeight'] = NULL;
$arguments550['absolute'] = false;
$array552 = array (
);$arguments550['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.fileInverted', $array552);

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext)]);

$output543 .= '" alt="';
$array553 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array553)]);

$output543 .= '" height="';
$array554 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array554)]);

$output543 .= '" width="';
$array555 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array555)]);

$output543 .= '">
                ';
return $output543;
};
$arguments539 = array();
$arguments539['additionalAttributes'] = NULL;
$arguments539['data'] = NULL;
$arguments539['class'] = NULL;
$arguments539['dir'] = NULL;
$arguments539['id'] = NULL;
$arguments539['lang'] = NULL;
$arguments539['style'] = NULL;
$arguments539['title'] = NULL;
$arguments539['accesskey'] = NULL;
$arguments539['tabindex'] = NULL;
$arguments539['onclick'] = NULL;
$arguments539['target'] = NULL;
$arguments539['rel'] = NULL;
$arguments539['pageUid'] = NULL;
$arguments539['pageType'] = NULL;
$arguments539['noCache'] = NULL;
$arguments539['noCacheHash'] = NULL;
$arguments539['section'] = NULL;
$arguments539['linkAccessRestrictedPages'] = NULL;
$arguments539['additionalParams'] = NULL;
$arguments539['absolute'] = NULL;
$arguments539['addQueryString'] = NULL;
$arguments539['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments539['addQueryStringMethod'] = NULL;
$array541 = array (
);$arguments539['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array541);
$arguments539['class'] = 'navbar-brand navbar-brand-image';
$array542 = array (
);$arguments539['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array542);

$output538 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);

$output538 .= '
            ';
return $output538;
};
$arguments536 = array();

$output535 .= '';

$output535 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$output558 = '';

$output558 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
$array563 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array563)]);
};
$arguments559 = array();
$arguments559['additionalAttributes'] = NULL;
$arguments559['data'] = NULL;
$arguments559['class'] = NULL;
$arguments559['dir'] = NULL;
$arguments559['id'] = NULL;
$arguments559['lang'] = NULL;
$arguments559['style'] = NULL;
$arguments559['title'] = NULL;
$arguments559['accesskey'] = NULL;
$arguments559['tabindex'] = NULL;
$arguments559['onclick'] = NULL;
$arguments559['target'] = NULL;
$arguments559['rel'] = NULL;
$arguments559['pageUid'] = NULL;
$arguments559['pageType'] = NULL;
$arguments559['noCache'] = NULL;
$arguments559['noCacheHash'] = NULL;
$arguments559['section'] = NULL;
$arguments559['linkAccessRestrictedPages'] = NULL;
$arguments559['additionalParams'] = NULL;
$arguments559['absolute'] = NULL;
$arguments559['addQueryString'] = NULL;
$arguments559['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments559['addQueryStringMethod'] = NULL;
$array561 = array (
);$arguments559['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array561);
$arguments559['class'] = 'navbar-brand navbar-brand-text';
$array562 = array (
);$arguments559['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array562);

$output558 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext);

$output558 .= '
            ';
return $output558;
};
$arguments556 = array();
$arguments556['if'] = NULL;

$output535 .= '';

$output535 .= '
        ';
return $output535;
};
$arguments506 = array();
$arguments506['then'] = NULL;
$arguments506['else'] = NULL;
$arguments506['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array532 = array();
$array533 = array (
);$array532['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array533);

$expression534 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments506['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression534(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array532)
					),
					$renderingContext
				);
$arguments506['__thenClosure'] = function() use ($renderingContext, $self) {
$output508 = '';

$output508 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments514 = array();
$arguments514['src'] = NULL;
$arguments514['treatIdAsReference'] = false;
$arguments514['image'] = NULL;
$arguments514['crop'] = NULL;
$arguments514['cropVariant'] = 'default';
$arguments514['width'] = NULL;
$arguments514['height'] = NULL;
$arguments514['minWidth'] = NULL;
$arguments514['minHeight'] = NULL;
$arguments514['maxWidth'] = NULL;
$arguments514['maxHeight'] = NULL;
$arguments514['absolute'] = false;
$array516 = array (
);$arguments514['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array516);

$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext)]);

$output513 .= '" alt="';
$array517 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array517)]);

$output513 .= '" height="';
$array518 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array518)]);

$output513 .= '" width="';
$array519 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array519)]);

$output513 .= '">
                    <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['src'] = NULL;
$arguments520['treatIdAsReference'] = false;
$arguments520['image'] = NULL;
$arguments520['crop'] = NULL;
$arguments520['cropVariant'] = 'default';
$arguments520['width'] = NULL;
$arguments520['height'] = NULL;
$arguments520['minWidth'] = NULL;
$arguments520['minHeight'] = NULL;
$arguments520['maxWidth'] = NULL;
$arguments520['maxHeight'] = NULL;
$arguments520['absolute'] = false;
$array522 = array (
);$arguments520['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.fileInverted', $array522);

$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext)]);

$output513 .= '" alt="';
$array523 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array523)]);

$output513 .= '" height="';
$array524 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array524)]);

$output513 .= '" width="';
$array525 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array525)]);

$output513 .= '">
                ';
return $output513;
};
$arguments509 = array();
$arguments509['additionalAttributes'] = NULL;
$arguments509['data'] = NULL;
$arguments509['class'] = NULL;
$arguments509['dir'] = NULL;
$arguments509['id'] = NULL;
$arguments509['lang'] = NULL;
$arguments509['style'] = NULL;
$arguments509['title'] = NULL;
$arguments509['accesskey'] = NULL;
$arguments509['tabindex'] = NULL;
$arguments509['onclick'] = NULL;
$arguments509['target'] = NULL;
$arguments509['rel'] = NULL;
$arguments509['pageUid'] = NULL;
$arguments509['pageType'] = NULL;
$arguments509['noCache'] = NULL;
$arguments509['noCacheHash'] = NULL;
$arguments509['section'] = NULL;
$arguments509['linkAccessRestrictedPages'] = NULL;
$arguments509['additionalParams'] = NULL;
$arguments509['absolute'] = NULL;
$arguments509['addQueryString'] = NULL;
$arguments509['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments509['addQueryStringMethod'] = NULL;
$array511 = array (
);$arguments509['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array511);
$arguments509['class'] = 'navbar-brand navbar-brand-image';
$array512 = array (
);$arguments509['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array512);

$output508 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);

$output508 .= '
            ';
return $output508;
};
$arguments506['__elseClosures'][] = function() use ($renderingContext, $self) {
$output526 = '';

$output526 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure528 = function() use ($renderingContext, $self) {
$array531 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array531)]);
};
$arguments527 = array();
$arguments527['additionalAttributes'] = NULL;
$arguments527['data'] = NULL;
$arguments527['class'] = NULL;
$arguments527['dir'] = NULL;
$arguments527['id'] = NULL;
$arguments527['lang'] = NULL;
$arguments527['style'] = NULL;
$arguments527['title'] = NULL;
$arguments527['accesskey'] = NULL;
$arguments527['tabindex'] = NULL;
$arguments527['onclick'] = NULL;
$arguments527['target'] = NULL;
$arguments527['rel'] = NULL;
$arguments527['pageUid'] = NULL;
$arguments527['pageType'] = NULL;
$arguments527['noCache'] = NULL;
$arguments527['noCacheHash'] = NULL;
$arguments527['section'] = NULL;
$arguments527['linkAccessRestrictedPages'] = NULL;
$arguments527['additionalParams'] = NULL;
$arguments527['absolute'] = NULL;
$arguments527['addQueryString'] = NULL;
$arguments527['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments527['addQueryStringMethod'] = NULL;
$array529 = array (
);$arguments527['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array529);
$arguments527['class'] = 'navbar-brand navbar-brand-text';
$array530 = array (
);$arguments527['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array530);

$output526 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext);

$output526 .= '
            ';
return $output526;
};

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);

$output491 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
$output569 = '';

$output569 .= '
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainnavigation" aria-expanded="false" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments570 = array();
$arguments570['key'] = NULL;
$arguments570['id'] = NULL;
$arguments570['default'] = NULL;
$arguments570['arguments'] = NULL;
$arguments570['extensionName'] = NULL;
$arguments570['languageKey'] = NULL;
$arguments570['alternativeLanguageKeys'] = NULL;
$arguments570['key'] = 'togglenavigation';
$arguments570['extensionName'] = 'bootstrap_package';

$output569 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext)]);

$output569 .= '">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="mainnavigation" class="collapse navbar-collapse">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments572 = array();
$arguments572['section'] = NULL;
$arguments572['partial'] = NULL;
$arguments572['delegate'] = NULL;
$arguments572['renderable'] = NULL;
$arguments572['arguments'] = array (
);
$arguments572['optional'] = false;
$arguments572['default'] = NULL;
$arguments572['contentAs'] = NULL;
$arguments572['debug'] = true;
$arguments572['partial'] = 'DropIn/Navigation/MainBefore';
$arguments572['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output569 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext);

$output569 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments575 = array();
$arguments575['section'] = NULL;
$arguments575['partial'] = NULL;
$arguments575['delegate'] = NULL;
$arguments575['renderable'] = NULL;
$arguments575['arguments'] = array (
);
$arguments575['optional'] = false;
$arguments575['default'] = NULL;
$arguments575['contentAs'] = NULL;
$arguments575['debug'] = true;
$arguments575['section'] = 'MainNavigation';
// Rendering Array
$array577 = array();
$array578 = array (
);$array577['menu'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array578);
$array579 = array (
);$array577['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array579);
$arguments575['arguments'] = $array577;

$output569 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext);

$output569 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments580 = array();
$arguments580['section'] = NULL;
$arguments580['partial'] = NULL;
$arguments580['delegate'] = NULL;
$arguments580['renderable'] = NULL;
$arguments580['arguments'] = array (
);
$arguments580['optional'] = false;
$arguments580['default'] = NULL;
$arguments580['contentAs'] = NULL;
$arguments580['debug'] = true;
$arguments580['partial'] = 'DropIn/Navigation/MainAfter';
$arguments580['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output569 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments580, $renderChildrenClosure581, $renderingContext);

$output569 .= '
            </nav>
        ';
return $output569;
};
$arguments564 = array();
$arguments564['then'] = NULL;
$arguments564['else'] = NULL;
$arguments564['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array566 = array();
$array567 = array (
);$array566['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array567);

$expression568 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments564['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression568(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array566)
					),
					$renderingContext
				);
$arguments564['__thenClosure'] = $renderChildrenClosure565;

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext);

$output491 .= '
    </div>
</header>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
$output585 = '';

$output585 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
$output591 = '';

$output591 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
$output595 = '';

$output595 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
$output836 = '';

$output836 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure838 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments837 = array();

$output836 .= '';

$output836 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure840 = function() use ($renderingContext, $self) {
$output841 = '';

$output841 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure843 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments842 = array();
$arguments842['then'] = NULL;
$arguments842['else'] = NULL;
$arguments842['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array844 = array();
$array845 = array (
);$array844['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array845);

$expression846 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments842['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression846(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array844)
					),
					$renderingContext
				);
$arguments842['then'] = ' active';

$output841 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments842, $renderChildrenClosure843, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure848 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments847 = array();
$arguments847['then'] = NULL;
$arguments847['else'] = NULL;
$arguments847['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array849 = array();
$array850 = array (
);$array849['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array850);

$expression851 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments847['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression851(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array849)
					),
					$renderingContext
				);
$arguments847['then'] = ' dropdown dropdown-hover';

$output841 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments847, $renderChildrenClosure848, $renderingContext);

$output841 .= '">
                            <a href="';
$array852 = array (
);
$output841 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array852)]);

$output841 .= '" id="nav-item-';
$array853 = array (
);
$output841 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array853)]);

$output841 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure855 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments854 = array();
$arguments854['then'] = NULL;
$arguments854['else'] = NULL;
$arguments854['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array856 = array();
$array857 = array (
);$array856['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array857);

$expression858 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments854['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression858(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array856)
					),
					$renderingContext
				);
$arguments854['then'] = ' dropdown-toggle';

$output841 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments854, $renderChildrenClosure855, $renderingContext);

$output841 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure860 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments859 = array();
$arguments859['then'] = NULL;
$arguments859['else'] = NULL;
$arguments859['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array861 = array();
$array862 = array (
);$array861['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array862);

$expression863 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments859['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression863(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array861)
					),
					$renderingContext
				);
$output864 = '';

$output864 .= ' target="';
$array865 = array (
);
$output864 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array865)]);

$output864 .= '"';
$arguments859['then'] = $output864;

$output841 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments859, $renderChildrenClosure860, $renderingContext);

$output841 .= ' title="';
$array866 = array (
);
$output841 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array866)]);

$output841 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure868 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments867 = array();
$arguments867['then'] = NULL;
$arguments867['else'] = NULL;
$arguments867['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array869 = array();
$array870 = array (
);$array869['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array870);

$expression871 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments867['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression871(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array869)
					),
					$renderingContext
				);
$arguments867['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output841 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments867, $renderChildrenClosure868, $renderingContext);

$output841 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure873 = function() use ($renderingContext, $self) {
$output878 = '';

$output878 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure880 = function() use ($renderingContext, $self) {
$output898 = '';

$output898 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure900 = function() use ($renderingContext, $self) {
$output901 = '';

$output901 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure903 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments902 = array();
$arguments902['image'] = NULL;
$arguments902['src'] = NULL;
$arguments902['width'] = NULL;
$arguments902['height'] = NULL;
$array904 = array (
);$arguments902['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array904);
$array905 = array (
);$arguments902['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array905);
$array906 = array (
);$arguments902['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array906);

$output901 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments902, $renderChildrenClosure903, $renderingContext);

$output901 .= '
                                            ';
return $output901;
};
$arguments899 = array();

$output898 .= '';

$output898 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure908 = function() use ($renderingContext, $self) {
$output909 = '';

$output909 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure911 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments910 = array();
$arguments910['additionalAttributes'] = NULL;
$arguments910['data'] = NULL;
$arguments910['class'] = NULL;
$arguments910['dir'] = NULL;
$arguments910['id'] = NULL;
$arguments910['lang'] = NULL;
$arguments910['style'] = NULL;
$arguments910['title'] = NULL;
$arguments910['accesskey'] = NULL;
$arguments910['tabindex'] = NULL;
$arguments910['onclick'] = NULL;
$arguments910['alt'] = NULL;
$arguments910['ismap'] = NULL;
$arguments910['longdesc'] = NULL;
$arguments910['usemap'] = NULL;
$arguments910['src'] = NULL;
$arguments910['treatIdAsReference'] = NULL;
$arguments910['image'] = NULL;
$arguments910['crop'] = NULL;
$arguments910['cropVariant'] = 'default';
$arguments910['width'] = NULL;
$arguments910['height'] = NULL;
$arguments910['minWidth'] = NULL;
$arguments910['minHeight'] = NULL;
$arguments910['maxWidth'] = NULL;
$arguments910['maxHeight'] = NULL;
$arguments910['absolute'] = false;
$array912 = array (
);$arguments910['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array912);
$array913 = array (
);$arguments910['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array913);
$array914 = array (
);$arguments910['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array914);
$array915 = array (
);$arguments910['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array915);
$array916 = array (
);$arguments910['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array916);

$output909 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments910, $renderChildrenClosure911, $renderingContext);

$output909 .= '
                                            ';
return $output909;
};
$arguments907 = array();
$arguments907['if'] = NULL;

$output898 .= '';

$output898 .= '
                                        ';
return $output898;
};
$arguments879 = array();
$arguments879['then'] = NULL;
$arguments879['else'] = NULL;
$arguments879['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array895 = array();
$array896 = array (
);$array895['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array896);
$array895['1'] = ' === svg';

$expression897 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments879['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression897(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array895)
					),
					$renderingContext
				);
$arguments879['__thenClosure'] = function() use ($renderingContext, $self) {
$output881 = '';

$output881 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure883 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments882 = array();
$arguments882['image'] = NULL;
$arguments882['src'] = NULL;
$arguments882['width'] = NULL;
$arguments882['height'] = NULL;
$array884 = array (
);$arguments882['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array884);
$array885 = array (
);$arguments882['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array885);
$array886 = array (
);$arguments882['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array886);

$output881 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments882, $renderChildrenClosure883, $renderingContext);

$output881 .= '
                                            ';
return $output881;
};
$arguments879['__elseClosures'][] = function() use ($renderingContext, $self) {
$output887 = '';

$output887 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure889 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments888 = array();
$arguments888['additionalAttributes'] = NULL;
$arguments888['data'] = NULL;
$arguments888['class'] = NULL;
$arguments888['dir'] = NULL;
$arguments888['id'] = NULL;
$arguments888['lang'] = NULL;
$arguments888['style'] = NULL;
$arguments888['title'] = NULL;
$arguments888['accesskey'] = NULL;
$arguments888['tabindex'] = NULL;
$arguments888['onclick'] = NULL;
$arguments888['alt'] = NULL;
$arguments888['ismap'] = NULL;
$arguments888['longdesc'] = NULL;
$arguments888['usemap'] = NULL;
$arguments888['src'] = NULL;
$arguments888['treatIdAsReference'] = NULL;
$arguments888['image'] = NULL;
$arguments888['crop'] = NULL;
$arguments888['cropVariant'] = 'default';
$arguments888['width'] = NULL;
$arguments888['height'] = NULL;
$arguments888['minWidth'] = NULL;
$arguments888['minHeight'] = NULL;
$arguments888['maxWidth'] = NULL;
$arguments888['maxHeight'] = NULL;
$arguments888['absolute'] = false;
$array890 = array (
);$arguments888['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array890);
$array891 = array (
);$arguments888['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array891);
$array892 = array (
);$arguments888['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array892);
$array893 = array (
);$arguments888['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array893);
$array894 = array (
);$arguments888['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array894);

$output887 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments888, $renderChildrenClosure889, $renderingContext);

$output887 .= '
                                            ';
return $output887;
};

$output878 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments879, $renderChildrenClosure880, $renderingContext);

$output878 .= '
                                    </span>
                                ';
return $output878;
};
$arguments872 = array();
$arguments872['then'] = NULL;
$arguments872['else'] = NULL;
$arguments872['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array874 = array();
$array875 = array (
);$array874['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array875);
$array874['1'] = ' && ';
$array876 = array (
);$array874['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array876);

$expression877 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments872['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression877(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array874)
					),
					$renderingContext
				);
$arguments872['__thenClosure'] = $renderChildrenClosure873;

$output841 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments872, $renderChildrenClosure873, $renderingContext);

$output841 .= '
                                <span class="nav-link-text">';
$array917 = array (
);
$output841 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array917)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure919 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments918 = array();
$arguments918['then'] = NULL;
$arguments918['else'] = NULL;
$arguments918['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array920 = array();
$array921 = array (
);$array920['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array921);

$expression922 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments918['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression922(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array920)
					),
					$renderingContext
				);
$arguments918['__thenClosure'] = $renderChildrenClosure919;

$output841 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments918, $renderChildrenClosure919, $renderingContext);

$output841 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure924 = function() use ($renderingContext, $self) {
$output928 = '';

$output928 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array929 = array (
);
$output928 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array929)]);

$output928 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure931 = function() use ($renderingContext, $self) {
$output933 = '';

$output933 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure935 = function() use ($renderingContext, $self) {
$output1005 = '';

$output1005 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1007 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments1006 = array();

$output1005 .= '';

$output1005 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1009 = function() use ($renderingContext, $self) {
$output1010 = '';

$output1010 .= '
                                                <li>
                                                    <a href="';
$array1011 = array (
);
$output1010 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array1011)]);

$output1010 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1013 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1012 = array();
$arguments1012['then'] = NULL;
$arguments1012['else'] = NULL;
$arguments1012['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1014 = array();
$array1015 = array (
);$array1014['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array1015);

$expression1016 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1012['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1016(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1014)
					),
					$renderingContext
				);
$arguments1012['then'] = ' active';

$output1010 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1012, $renderChildrenClosure1013, $renderingContext);

$output1010 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1018 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1017 = array();
$arguments1017['then'] = NULL;
$arguments1017['else'] = NULL;
$arguments1017['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1019 = array();
$array1020 = array (
);$array1019['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array1020);

$expression1021 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1017['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1021(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1019)
					),
					$renderingContext
				);
$output1022 = '';

$output1022 .= ' target="';
$array1023 = array (
);
$output1022 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array1023)]);

$output1022 .= '"';
$arguments1017['then'] = $output1022;

$output1010 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1017, $renderChildrenClosure1018, $renderingContext);

$output1010 .= ' title="';
$array1024 = array (
);
$output1010 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array1024)]);

$output1010 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1026 = function() use ($renderingContext, $self) {
$output1031 = '';

$output1031 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1033 = function() use ($renderingContext, $self) {
$output1051 = '';

$output1051 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1053 = function() use ($renderingContext, $self) {
$output1054 = '';

$output1054 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1056 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1055 = array();
$arguments1055['image'] = NULL;
$arguments1055['src'] = NULL;
$arguments1055['width'] = NULL;
$arguments1055['height'] = NULL;
$array1057 = array (
);$arguments1055['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1057);
$array1058 = array (
);$arguments1055['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1058);
$array1059 = array (
);$arguments1055['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1059);

$output1054 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1055, $renderChildrenClosure1056, $renderingContext);

$output1054 .= '
                                                                    ';
return $output1054;
};
$arguments1052 = array();

$output1051 .= '';

$output1051 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1061 = function() use ($renderingContext, $self) {
$output1062 = '';

$output1062 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1064 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1063 = array();
$arguments1063['additionalAttributes'] = NULL;
$arguments1063['data'] = NULL;
$arguments1063['class'] = NULL;
$arguments1063['dir'] = NULL;
$arguments1063['id'] = NULL;
$arguments1063['lang'] = NULL;
$arguments1063['style'] = NULL;
$arguments1063['title'] = NULL;
$arguments1063['accesskey'] = NULL;
$arguments1063['tabindex'] = NULL;
$arguments1063['onclick'] = NULL;
$arguments1063['alt'] = NULL;
$arguments1063['ismap'] = NULL;
$arguments1063['longdesc'] = NULL;
$arguments1063['usemap'] = NULL;
$arguments1063['src'] = NULL;
$arguments1063['treatIdAsReference'] = NULL;
$arguments1063['image'] = NULL;
$arguments1063['crop'] = NULL;
$arguments1063['cropVariant'] = 'default';
$arguments1063['width'] = NULL;
$arguments1063['height'] = NULL;
$arguments1063['minWidth'] = NULL;
$arguments1063['minHeight'] = NULL;
$arguments1063['maxWidth'] = NULL;
$arguments1063['maxHeight'] = NULL;
$arguments1063['absolute'] = false;
$array1065 = array (
);$arguments1063['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1065);
$array1066 = array (
);$arguments1063['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1066);
$array1067 = array (
);$arguments1063['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1067);
$array1068 = array (
);$arguments1063['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1068);
$array1069 = array (
);$arguments1063['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1069);

$output1062 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1063, $renderChildrenClosure1064, $renderingContext);

$output1062 .= '
                                                                    ';
return $output1062;
};
$arguments1060 = array();
$arguments1060['if'] = NULL;

$output1051 .= '';

$output1051 .= '
                                                                ';
return $output1051;
};
$arguments1032 = array();
$arguments1032['then'] = NULL;
$arguments1032['else'] = NULL;
$arguments1032['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1048 = array();
$array1049 = array (
);$array1048['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array1049);
$array1048['1'] = ' === svg';

$expression1050 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments1032['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1050(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1048)
					),
					$renderingContext
				);
$arguments1032['__thenClosure'] = function() use ($renderingContext, $self) {
$output1034 = '';

$output1034 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1036 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1035 = array();
$arguments1035['image'] = NULL;
$arguments1035['src'] = NULL;
$arguments1035['width'] = NULL;
$arguments1035['height'] = NULL;
$array1037 = array (
);$arguments1035['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1037);
$array1038 = array (
);$arguments1035['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1038);
$array1039 = array (
);$arguments1035['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1039);

$output1034 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1035, $renderChildrenClosure1036, $renderingContext);

$output1034 .= '
                                                                    ';
return $output1034;
};
$arguments1032['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1040 = '';

$output1040 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1042 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1041 = array();
$arguments1041['additionalAttributes'] = NULL;
$arguments1041['data'] = NULL;
$arguments1041['class'] = NULL;
$arguments1041['dir'] = NULL;
$arguments1041['id'] = NULL;
$arguments1041['lang'] = NULL;
$arguments1041['style'] = NULL;
$arguments1041['title'] = NULL;
$arguments1041['accesskey'] = NULL;
$arguments1041['tabindex'] = NULL;
$arguments1041['onclick'] = NULL;
$arguments1041['alt'] = NULL;
$arguments1041['ismap'] = NULL;
$arguments1041['longdesc'] = NULL;
$arguments1041['usemap'] = NULL;
$arguments1041['src'] = NULL;
$arguments1041['treatIdAsReference'] = NULL;
$arguments1041['image'] = NULL;
$arguments1041['crop'] = NULL;
$arguments1041['cropVariant'] = 'default';
$arguments1041['width'] = NULL;
$arguments1041['height'] = NULL;
$arguments1041['minWidth'] = NULL;
$arguments1041['minHeight'] = NULL;
$arguments1041['maxWidth'] = NULL;
$arguments1041['maxHeight'] = NULL;
$arguments1041['absolute'] = false;
$array1043 = array (
);$arguments1041['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1043);
$array1044 = array (
);$arguments1041['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1044);
$array1045 = array (
);$arguments1041['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1045);
$array1046 = array (
);$arguments1041['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1046);
$array1047 = array (
);$arguments1041['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1047);

$output1040 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1041, $renderChildrenClosure1042, $renderingContext);

$output1040 .= '
                                                                    ';
return $output1040;
};

$output1031 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1032, $renderChildrenClosure1033, $renderingContext);

$output1031 .= '
                                                            </span>
                                                        ';
return $output1031;
};
$arguments1025 = array();
$arguments1025['then'] = NULL;
$arguments1025['else'] = NULL;
$arguments1025['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1027 = array();
$array1028 = array (
);$array1027['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array1028);
$array1027['1'] = ' && ';
$array1029 = array (
);$array1027['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array1029);

$expression1030 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1025['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1030(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1027)
					),
					$renderingContext
				);
$arguments1025['__thenClosure'] = $renderChildrenClosure1026;

$output1010 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1025, $renderChildrenClosure1026, $renderingContext);

$output1010 .= '
                                                        <span class="dropdown-text">';
$array1070 = array (
);
$output1010 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array1070)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1072 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments1071 = array();
$arguments1071['then'] = NULL;
$arguments1071['else'] = NULL;
$arguments1071['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1073 = array();
$array1074 = array (
);$array1073['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array1074);

$expression1075 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1071['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1075(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1073)
					),
					$renderingContext
				);
$arguments1071['__thenClosure'] = $renderChildrenClosure1072;

$output1010 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1071, $renderChildrenClosure1072, $renderingContext);

$output1010 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output1010;
};
$arguments1008 = array();
$arguments1008['if'] = NULL;

$output1005 .= '';

$output1005 .= '
                                        ';
return $output1005;
};
$arguments934 = array();
$arguments934['then'] = NULL;
$arguments934['else'] = NULL;
$arguments934['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1002 = array();
$array1003 = array (
);$array1002['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array1003);

$expression1004 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments934['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1004(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1002)
					),
					$renderingContext
				);
$arguments934['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments934['__elseClosures'][] = function() use ($renderingContext, $self) {
$output936 = '';

$output936 .= '
                                                <li>
                                                    <a href="';
$array937 = array (
);
$output936 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array937)]);

$output936 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure939 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments938 = array();
$arguments938['then'] = NULL;
$arguments938['else'] = NULL;
$arguments938['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array940 = array();
$array941 = array (
);$array940['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array941);

$expression942 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments938['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression942(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array940)
					),
					$renderingContext
				);
$arguments938['then'] = ' active';

$output936 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments938, $renderChildrenClosure939, $renderingContext);

$output936 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure944 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments943 = array();
$arguments943['then'] = NULL;
$arguments943['else'] = NULL;
$arguments943['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array945 = array();
$array946 = array (
);$array945['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array946);

$expression947 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments943['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression947(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array945)
					),
					$renderingContext
				);
$output948 = '';

$output948 .= ' target="';
$array949 = array (
);
$output948 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array949)]);

$output948 .= '"';
$arguments943['then'] = $output948;

$output936 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments943, $renderChildrenClosure944, $renderingContext);

$output936 .= ' title="';
$array950 = array (
);
$output936 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array950)]);

$output936 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure952 = function() use ($renderingContext, $self) {
$output957 = '';

$output957 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure959 = function() use ($renderingContext, $self) {
$output977 = '';

$output977 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure979 = function() use ($renderingContext, $self) {
$output980 = '';

$output980 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure982 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments981 = array();
$arguments981['image'] = NULL;
$arguments981['src'] = NULL;
$arguments981['width'] = NULL;
$arguments981['height'] = NULL;
$array983 = array (
);$arguments981['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array983);
$array984 = array (
);$arguments981['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array984);
$array985 = array (
);$arguments981['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array985);

$output980 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments981, $renderChildrenClosure982, $renderingContext);

$output980 .= '
                                                                    ';
return $output980;
};
$arguments978 = array();

$output977 .= '';

$output977 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
$output988 = '';

$output988 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure990 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments989 = array();
$arguments989['additionalAttributes'] = NULL;
$arguments989['data'] = NULL;
$arguments989['class'] = NULL;
$arguments989['dir'] = NULL;
$arguments989['id'] = NULL;
$arguments989['lang'] = NULL;
$arguments989['style'] = NULL;
$arguments989['title'] = NULL;
$arguments989['accesskey'] = NULL;
$arguments989['tabindex'] = NULL;
$arguments989['onclick'] = NULL;
$arguments989['alt'] = NULL;
$arguments989['ismap'] = NULL;
$arguments989['longdesc'] = NULL;
$arguments989['usemap'] = NULL;
$arguments989['src'] = NULL;
$arguments989['treatIdAsReference'] = NULL;
$arguments989['image'] = NULL;
$arguments989['crop'] = NULL;
$arguments989['cropVariant'] = 'default';
$arguments989['width'] = NULL;
$arguments989['height'] = NULL;
$arguments989['minWidth'] = NULL;
$arguments989['minHeight'] = NULL;
$arguments989['maxWidth'] = NULL;
$arguments989['maxHeight'] = NULL;
$arguments989['absolute'] = false;
$array991 = array (
);$arguments989['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array991);
$array992 = array (
);$arguments989['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array992);
$array993 = array (
);$arguments989['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array993);
$array994 = array (
);$arguments989['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array994);
$array995 = array (
);$arguments989['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array995);

$output988 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments989, $renderChildrenClosure990, $renderingContext);

$output988 .= '
                                                                    ';
return $output988;
};
$arguments986 = array();
$arguments986['if'] = NULL;

$output977 .= '';

$output977 .= '
                                                                ';
return $output977;
};
$arguments958 = array();
$arguments958['then'] = NULL;
$arguments958['else'] = NULL;
$arguments958['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array974 = array();
$array975 = array (
);$array974['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array975);
$array974['1'] = ' === svg';

$expression976 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments958['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression976(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array974)
					),
					$renderingContext
				);
$arguments958['__thenClosure'] = function() use ($renderingContext, $self) {
$output960 = '';

$output960 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure962 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments961 = array();
$arguments961['image'] = NULL;
$arguments961['src'] = NULL;
$arguments961['width'] = NULL;
$arguments961['height'] = NULL;
$array963 = array (
);$arguments961['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array963);
$array964 = array (
);$arguments961['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array964);
$array965 = array (
);$arguments961['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array965);

$output960 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments961, $renderChildrenClosure962, $renderingContext);

$output960 .= '
                                                                    ';
return $output960;
};
$arguments958['__elseClosures'][] = function() use ($renderingContext, $self) {
$output966 = '';

$output966 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure968 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments967 = array();
$arguments967['additionalAttributes'] = NULL;
$arguments967['data'] = NULL;
$arguments967['class'] = NULL;
$arguments967['dir'] = NULL;
$arguments967['id'] = NULL;
$arguments967['lang'] = NULL;
$arguments967['style'] = NULL;
$arguments967['title'] = NULL;
$arguments967['accesskey'] = NULL;
$arguments967['tabindex'] = NULL;
$arguments967['onclick'] = NULL;
$arguments967['alt'] = NULL;
$arguments967['ismap'] = NULL;
$arguments967['longdesc'] = NULL;
$arguments967['usemap'] = NULL;
$arguments967['src'] = NULL;
$arguments967['treatIdAsReference'] = NULL;
$arguments967['image'] = NULL;
$arguments967['crop'] = NULL;
$arguments967['cropVariant'] = 'default';
$arguments967['width'] = NULL;
$arguments967['height'] = NULL;
$arguments967['minWidth'] = NULL;
$arguments967['minHeight'] = NULL;
$arguments967['maxWidth'] = NULL;
$arguments967['maxHeight'] = NULL;
$arguments967['absolute'] = false;
$array969 = array (
);$arguments967['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array969);
$array970 = array (
);$arguments967['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array970);
$array971 = array (
);$arguments967['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array971);
$array972 = array (
);$arguments967['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array972);
$array973 = array (
);$arguments967['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array973);

$output966 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments967, $renderChildrenClosure968, $renderingContext);

$output966 .= '
                                                                    ';
return $output966;
};

$output957 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments958, $renderChildrenClosure959, $renderingContext);

$output957 .= '
                                                            </span>
                                                        ';
return $output957;
};
$arguments951 = array();
$arguments951['then'] = NULL;
$arguments951['else'] = NULL;
$arguments951['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array953 = array();
$array954 = array (
);$array953['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array954);
$array953['1'] = ' && ';
$array955 = array (
);$array953['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array955);

$expression956 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments951['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression956(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array953)
					),
					$renderingContext
				);
$arguments951['__thenClosure'] = $renderChildrenClosure952;

$output936 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments951, $renderChildrenClosure952, $renderingContext);

$output936 .= '
                                                        <span class="dropdown-text">';
$array996 = array (
);
$output936 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array996)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure998 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments997 = array();
$arguments997['then'] = NULL;
$arguments997['else'] = NULL;
$arguments997['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array999 = array();
$array1000 = array (
);$array999['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array1000);

$expression1001 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments997['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1001(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array999)
					),
					$renderingContext
				);
$arguments997['__thenClosure'] = $renderChildrenClosure998;

$output936 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments997, $renderChildrenClosure998, $renderingContext);

$output936 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output936;
};

$output933 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments934, $renderChildrenClosure935, $renderingContext);

$output933 .= '
                                    ';
return $output933;
};
$arguments930 = array();
$arguments930['each'] = NULL;
$arguments930['as'] = NULL;
$arguments930['key'] = NULL;
$arguments930['reverse'] = false;
$arguments930['iteration'] = NULL;
$array932 = array (
);$arguments930['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array932);
$arguments930['as'] = 'child';

$output928 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments930, $renderChildrenClosure931, $renderingContext);

$output928 .= '
                                </ul>
                            ';
return $output928;
};
$arguments923 = array();
$arguments923['then'] = NULL;
$arguments923['else'] = NULL;
$arguments923['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array925 = array();
$array926 = array (
);$array925['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array926);

$expression927 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments923['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression927(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array925)
					),
					$renderingContext
				);
$arguments923['__thenClosure'] = $renderChildrenClosure924;

$output841 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments923, $renderChildrenClosure924, $renderingContext);

$output841 .= '
                        </li>
                    ';
return $output841;
};
$arguments839 = array();
$arguments839['if'] = NULL;

$output836 .= '';

$output836 .= '
                ';
return $output836;
};
$arguments596 = array();
$arguments596['then'] = NULL;
$arguments596['else'] = NULL;
$arguments596['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array833 = array();
$array834 = array (
);$array833['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array834);

$expression835 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments596['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression835(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array833)
					),
					$renderingContext
				);
$arguments596['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments596['__elseClosures'][] = function() use ($renderingContext, $self) {
$output598 = '';

$output598 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments599 = array();
$arguments599['then'] = NULL;
$arguments599['else'] = NULL;
$arguments599['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array601 = array();
$array602 = array (
);$array601['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array602);

$expression603 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments599['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression603(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array601)
					),
					$renderingContext
				);
$arguments599['then'] = ' active';

$output598 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments599, $renderChildrenClosure600, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments604 = array();
$arguments604['then'] = NULL;
$arguments604['else'] = NULL;
$arguments604['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array606 = array();
$array607 = array (
);$array606['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array607);

$expression608 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments604['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression608(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array606)
					),
					$renderingContext
				);
$arguments604['then'] = ' dropdown dropdown-hover';

$output598 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext);

$output598 .= '">
                            <a href="';
$array609 = array (
);
$output598 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array609)]);

$output598 .= '" id="nav-item-';
$array610 = array (
);
$output598 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array610)]);

$output598 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments611 = array();
$arguments611['then'] = NULL;
$arguments611['else'] = NULL;
$arguments611['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array613 = array();
$array614 = array (
);$array613['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array614);

$expression615 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments611['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression615(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array613)
					),
					$renderingContext
				);
$arguments611['then'] = ' dropdown-toggle';

$output598 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext);

$output598 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments616 = array();
$arguments616['then'] = NULL;
$arguments616['else'] = NULL;
$arguments616['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array618 = array();
$array619 = array (
);$array618['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array619);

$expression620 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments616['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression620(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array618)
					),
					$renderingContext
				);
$output621 = '';

$output621 .= ' target="';
$array622 = array (
);
$output621 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array622)]);

$output621 .= '"';
$arguments616['then'] = $output621;

$output598 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments616, $renderChildrenClosure617, $renderingContext);

$output598 .= ' title="';
$array623 = array (
);
$output598 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array623)]);

$output598 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments624 = array();
$arguments624['then'] = NULL;
$arguments624['else'] = NULL;
$arguments624['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array626 = array();
$array627 = array (
);$array626['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array627);

$expression628 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments624['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression628(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array626)
					),
					$renderingContext
				);
$arguments624['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output598 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext);

$output598 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
$output635 = '';

$output635 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$output655 = '';

$output655 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure657 = function() use ($renderingContext, $self) {
$output658 = '';

$output658 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure660 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments659 = array();
$arguments659['image'] = NULL;
$arguments659['src'] = NULL;
$arguments659['width'] = NULL;
$arguments659['height'] = NULL;
$array661 = array (
);$arguments659['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array661);
$array662 = array (
);$arguments659['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array662);
$array663 = array (
);$arguments659['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array663);

$output658 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments659, $renderChildrenClosure660, $renderingContext);

$output658 .= '
                                            ';
return $output658;
};
$arguments656 = array();

$output655 .= '';

$output655 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
$output666 = '';

$output666 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure668 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments667 = array();
$arguments667['additionalAttributes'] = NULL;
$arguments667['data'] = NULL;
$arguments667['class'] = NULL;
$arguments667['dir'] = NULL;
$arguments667['id'] = NULL;
$arguments667['lang'] = NULL;
$arguments667['style'] = NULL;
$arguments667['title'] = NULL;
$arguments667['accesskey'] = NULL;
$arguments667['tabindex'] = NULL;
$arguments667['onclick'] = NULL;
$arguments667['alt'] = NULL;
$arguments667['ismap'] = NULL;
$arguments667['longdesc'] = NULL;
$arguments667['usemap'] = NULL;
$arguments667['src'] = NULL;
$arguments667['treatIdAsReference'] = NULL;
$arguments667['image'] = NULL;
$arguments667['crop'] = NULL;
$arguments667['cropVariant'] = 'default';
$arguments667['width'] = NULL;
$arguments667['height'] = NULL;
$arguments667['minWidth'] = NULL;
$arguments667['minHeight'] = NULL;
$arguments667['maxWidth'] = NULL;
$arguments667['maxHeight'] = NULL;
$arguments667['absolute'] = false;
$array669 = array (
);$arguments667['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array669);
$array670 = array (
);$arguments667['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array670);
$array671 = array (
);$arguments667['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array671);
$array672 = array (
);$arguments667['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array672);
$array673 = array (
);$arguments667['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array673);

$output666 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments667, $renderChildrenClosure668, $renderingContext);

$output666 .= '
                                            ';
return $output666;
};
$arguments664 = array();
$arguments664['if'] = NULL;

$output655 .= '';

$output655 .= '
                                        ';
return $output655;
};
$arguments636 = array();
$arguments636['then'] = NULL;
$arguments636['else'] = NULL;
$arguments636['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array652 = array();
$array653 = array (
);$array652['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array653);
$array652['1'] = ' === svg';

$expression654 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments636['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression654(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array652)
					),
					$renderingContext
				);
$arguments636['__thenClosure'] = function() use ($renderingContext, $self) {
$output638 = '';

$output638 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments639 = array();
$arguments639['image'] = NULL;
$arguments639['src'] = NULL;
$arguments639['width'] = NULL;
$arguments639['height'] = NULL;
$array641 = array (
);$arguments639['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array641);
$array642 = array (
);$arguments639['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array642);
$array643 = array (
);$arguments639['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array643);

$output638 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext);

$output638 .= '
                                            ';
return $output638;
};
$arguments636['__elseClosures'][] = function() use ($renderingContext, $self) {
$output644 = '';

$output644 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments645 = array();
$arguments645['additionalAttributes'] = NULL;
$arguments645['data'] = NULL;
$arguments645['class'] = NULL;
$arguments645['dir'] = NULL;
$arguments645['id'] = NULL;
$arguments645['lang'] = NULL;
$arguments645['style'] = NULL;
$arguments645['title'] = NULL;
$arguments645['accesskey'] = NULL;
$arguments645['tabindex'] = NULL;
$arguments645['onclick'] = NULL;
$arguments645['alt'] = NULL;
$arguments645['ismap'] = NULL;
$arguments645['longdesc'] = NULL;
$arguments645['usemap'] = NULL;
$arguments645['src'] = NULL;
$arguments645['treatIdAsReference'] = NULL;
$arguments645['image'] = NULL;
$arguments645['crop'] = NULL;
$arguments645['cropVariant'] = 'default';
$arguments645['width'] = NULL;
$arguments645['height'] = NULL;
$arguments645['minWidth'] = NULL;
$arguments645['minHeight'] = NULL;
$arguments645['maxWidth'] = NULL;
$arguments645['maxHeight'] = NULL;
$arguments645['absolute'] = false;
$array647 = array (
);$arguments645['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array647);
$array648 = array (
);$arguments645['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array648);
$array649 = array (
);$arguments645['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array649);
$array650 = array (
);$arguments645['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array650);
$array651 = array (
);$arguments645['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array651);

$output644 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext);

$output644 .= '
                                            ';
return $output644;
};

$output635 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments636, $renderChildrenClosure637, $renderingContext);

$output635 .= '
                                    </span>
                                ';
return $output635;
};
$arguments629 = array();
$arguments629['then'] = NULL;
$arguments629['else'] = NULL;
$arguments629['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array631 = array();
$array632 = array (
);$array631['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array632);
$array631['1'] = ' && ';
$array633 = array (
);$array631['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array633);

$expression634 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments629['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression634(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array631)
					),
					$renderingContext
				);
$arguments629['__thenClosure'] = $renderChildrenClosure630;

$output598 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext);

$output598 .= '
                                <span class="nav-link-text">';
$array674 = array (
);
$output598 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array674)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure676 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments675 = array();
$arguments675['then'] = NULL;
$arguments675['else'] = NULL;
$arguments675['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array677 = array();
$array678 = array (
);$array677['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array678);

$expression679 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments675['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression679(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array677)
					),
					$renderingContext
				);
$arguments675['__thenClosure'] = $renderChildrenClosure676;

$output598 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments675, $renderChildrenClosure676, $renderingContext);

$output598 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
$output685 = '';

$output685 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array686 = array (
);
$output685 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array686)]);

$output685 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
$output690 = '';

$output690 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure692 = function() use ($renderingContext, $self) {
$output762 = '';

$output762 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure764 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments763 = array();

$output762 .= '';

$output762 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure766 = function() use ($renderingContext, $self) {
$output767 = '';

$output767 .= '
                                                <li>
                                                    <a href="';
$array768 = array (
);
$output767 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array768)]);

$output767 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure770 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments769 = array();
$arguments769['then'] = NULL;
$arguments769['else'] = NULL;
$arguments769['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array771 = array();
$array772 = array (
);$array771['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array772);

$expression773 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments769['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression773(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array771)
					),
					$renderingContext
				);
$arguments769['then'] = ' active';

$output767 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments769, $renderChildrenClosure770, $renderingContext);

$output767 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure775 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments774 = array();
$arguments774['then'] = NULL;
$arguments774['else'] = NULL;
$arguments774['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array776 = array();
$array777 = array (
);$array776['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array777);

$expression778 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments774['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression778(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array776)
					),
					$renderingContext
				);
$output779 = '';

$output779 .= ' target="';
$array780 = array (
);
$output779 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array780)]);

$output779 .= '"';
$arguments774['then'] = $output779;

$output767 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments774, $renderChildrenClosure775, $renderingContext);

$output767 .= ' title="';
$array781 = array (
);
$output767 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array781)]);

$output767 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure783 = function() use ($renderingContext, $self) {
$output788 = '';

$output788 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure790 = function() use ($renderingContext, $self) {
$output808 = '';

$output808 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure810 = function() use ($renderingContext, $self) {
$output811 = '';

$output811 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure813 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments812 = array();
$arguments812['image'] = NULL;
$arguments812['src'] = NULL;
$arguments812['width'] = NULL;
$arguments812['height'] = NULL;
$array814 = array (
);$arguments812['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array814);
$array815 = array (
);$arguments812['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array815);
$array816 = array (
);$arguments812['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array816);

$output811 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments812, $renderChildrenClosure813, $renderingContext);

$output811 .= '
                                                                    ';
return $output811;
};
$arguments809 = array();

$output808 .= '';

$output808 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure818 = function() use ($renderingContext, $self) {
$output819 = '';

$output819 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure821 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments820 = array();
$arguments820['additionalAttributes'] = NULL;
$arguments820['data'] = NULL;
$arguments820['class'] = NULL;
$arguments820['dir'] = NULL;
$arguments820['id'] = NULL;
$arguments820['lang'] = NULL;
$arguments820['style'] = NULL;
$arguments820['title'] = NULL;
$arguments820['accesskey'] = NULL;
$arguments820['tabindex'] = NULL;
$arguments820['onclick'] = NULL;
$arguments820['alt'] = NULL;
$arguments820['ismap'] = NULL;
$arguments820['longdesc'] = NULL;
$arguments820['usemap'] = NULL;
$arguments820['src'] = NULL;
$arguments820['treatIdAsReference'] = NULL;
$arguments820['image'] = NULL;
$arguments820['crop'] = NULL;
$arguments820['cropVariant'] = 'default';
$arguments820['width'] = NULL;
$arguments820['height'] = NULL;
$arguments820['minWidth'] = NULL;
$arguments820['minHeight'] = NULL;
$arguments820['maxWidth'] = NULL;
$arguments820['maxHeight'] = NULL;
$arguments820['absolute'] = false;
$array822 = array (
);$arguments820['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array822);
$array823 = array (
);$arguments820['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array823);
$array824 = array (
);$arguments820['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array824);
$array825 = array (
);$arguments820['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array825);
$array826 = array (
);$arguments820['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array826);

$output819 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments820, $renderChildrenClosure821, $renderingContext);

$output819 .= '
                                                                    ';
return $output819;
};
$arguments817 = array();
$arguments817['if'] = NULL;

$output808 .= '';

$output808 .= '
                                                                ';
return $output808;
};
$arguments789 = array();
$arguments789['then'] = NULL;
$arguments789['else'] = NULL;
$arguments789['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array805 = array();
$array806 = array (
);$array805['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array806);
$array805['1'] = ' === svg';

$expression807 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments789['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression807(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array805)
					),
					$renderingContext
				);
$arguments789['__thenClosure'] = function() use ($renderingContext, $self) {
$output791 = '';

$output791 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure793 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments792 = array();
$arguments792['image'] = NULL;
$arguments792['src'] = NULL;
$arguments792['width'] = NULL;
$arguments792['height'] = NULL;
$array794 = array (
);$arguments792['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array794);
$array795 = array (
);$arguments792['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array795);
$array796 = array (
);$arguments792['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array796);

$output791 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments792, $renderChildrenClosure793, $renderingContext);

$output791 .= '
                                                                    ';
return $output791;
};
$arguments789['__elseClosures'][] = function() use ($renderingContext, $self) {
$output797 = '';

$output797 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure799 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments798 = array();
$arguments798['additionalAttributes'] = NULL;
$arguments798['data'] = NULL;
$arguments798['class'] = NULL;
$arguments798['dir'] = NULL;
$arguments798['id'] = NULL;
$arguments798['lang'] = NULL;
$arguments798['style'] = NULL;
$arguments798['title'] = NULL;
$arguments798['accesskey'] = NULL;
$arguments798['tabindex'] = NULL;
$arguments798['onclick'] = NULL;
$arguments798['alt'] = NULL;
$arguments798['ismap'] = NULL;
$arguments798['longdesc'] = NULL;
$arguments798['usemap'] = NULL;
$arguments798['src'] = NULL;
$arguments798['treatIdAsReference'] = NULL;
$arguments798['image'] = NULL;
$arguments798['crop'] = NULL;
$arguments798['cropVariant'] = 'default';
$arguments798['width'] = NULL;
$arguments798['height'] = NULL;
$arguments798['minWidth'] = NULL;
$arguments798['minHeight'] = NULL;
$arguments798['maxWidth'] = NULL;
$arguments798['maxHeight'] = NULL;
$arguments798['absolute'] = false;
$array800 = array (
);$arguments798['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array800);
$array801 = array (
);$arguments798['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array801);
$array802 = array (
);$arguments798['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array802);
$array803 = array (
);$arguments798['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array803);
$array804 = array (
);$arguments798['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array804);

$output797 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments798, $renderChildrenClosure799, $renderingContext);

$output797 .= '
                                                                    ';
return $output797;
};

$output788 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments789, $renderChildrenClosure790, $renderingContext);

$output788 .= '
                                                            </span>
                                                        ';
return $output788;
};
$arguments782 = array();
$arguments782['then'] = NULL;
$arguments782['else'] = NULL;
$arguments782['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array784 = array();
$array785 = array (
);$array784['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array785);
$array784['1'] = ' && ';
$array786 = array (
);$array784['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array786);

$expression787 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments782['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression787(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array784)
					),
					$renderingContext
				);
$arguments782['__thenClosure'] = $renderChildrenClosure783;

$output767 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments782, $renderChildrenClosure783, $renderingContext);

$output767 .= '
                                                        <span class="dropdown-text">';
$array827 = array (
);
$output767 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array827)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure829 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments828 = array();
$arguments828['then'] = NULL;
$arguments828['else'] = NULL;
$arguments828['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array830 = array();
$array831 = array (
);$array830['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array831);

$expression832 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments828['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression832(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array830)
					),
					$renderingContext
				);
$arguments828['__thenClosure'] = $renderChildrenClosure829;

$output767 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments828, $renderChildrenClosure829, $renderingContext);

$output767 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output767;
};
$arguments765 = array();
$arguments765['if'] = NULL;

$output762 .= '';

$output762 .= '
                                        ';
return $output762;
};
$arguments691 = array();
$arguments691['then'] = NULL;
$arguments691['else'] = NULL;
$arguments691['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array759 = array();
$array760 = array (
);$array759['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array760);

$expression761 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments691['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression761(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array759)
					),
					$renderingContext
				);
$arguments691['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments691['__elseClosures'][] = function() use ($renderingContext, $self) {
$output693 = '';

$output693 .= '
                                                <li>
                                                    <a href="';
$array694 = array (
);
$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array694)]);

$output693 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure696 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments695 = array();
$arguments695['then'] = NULL;
$arguments695['else'] = NULL;
$arguments695['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array697 = array();
$array698 = array (
);$array697['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array698);

$expression699 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments695['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression699(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array697)
					),
					$renderingContext
				);
$arguments695['then'] = ' active';

$output693 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext);

$output693 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments700 = array();
$arguments700['then'] = NULL;
$arguments700['else'] = NULL;
$arguments700['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array702 = array();
$array703 = array (
);$array702['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array703);

$expression704 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments700['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression704(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array702)
					),
					$renderingContext
				);
$output705 = '';

$output705 .= ' target="';
$array706 = array (
);
$output705 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array706)]);

$output705 .= '"';
$arguments700['then'] = $output705;

$output693 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext);

$output693 .= ' title="';
$array707 = array (
);
$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array707)]);

$output693 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
$output714 = '';

$output714 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure716 = function() use ($renderingContext, $self) {
$output734 = '';

$output734 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
$output737 = '';

$output737 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments738 = array();
$arguments738['image'] = NULL;
$arguments738['src'] = NULL;
$arguments738['width'] = NULL;
$arguments738['height'] = NULL;
$array740 = array (
);$arguments738['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array740);
$array741 = array (
);$arguments738['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array741);
$array742 = array (
);$arguments738['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array742);

$output737 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments738, $renderChildrenClosure739, $renderingContext);

$output737 .= '
                                                                    ';
return $output737;
};
$arguments735 = array();

$output734 .= '';

$output734 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
$output745 = '';

$output745 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments746 = array();
$arguments746['additionalAttributes'] = NULL;
$arguments746['data'] = NULL;
$arguments746['class'] = NULL;
$arguments746['dir'] = NULL;
$arguments746['id'] = NULL;
$arguments746['lang'] = NULL;
$arguments746['style'] = NULL;
$arguments746['title'] = NULL;
$arguments746['accesskey'] = NULL;
$arguments746['tabindex'] = NULL;
$arguments746['onclick'] = NULL;
$arguments746['alt'] = NULL;
$arguments746['ismap'] = NULL;
$arguments746['longdesc'] = NULL;
$arguments746['usemap'] = NULL;
$arguments746['src'] = NULL;
$arguments746['treatIdAsReference'] = NULL;
$arguments746['image'] = NULL;
$arguments746['crop'] = NULL;
$arguments746['cropVariant'] = 'default';
$arguments746['width'] = NULL;
$arguments746['height'] = NULL;
$arguments746['minWidth'] = NULL;
$arguments746['minHeight'] = NULL;
$arguments746['maxWidth'] = NULL;
$arguments746['maxHeight'] = NULL;
$arguments746['absolute'] = false;
$array748 = array (
);$arguments746['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array748);
$array749 = array (
);$arguments746['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array749);
$array750 = array (
);$arguments746['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array750);
$array751 = array (
);$arguments746['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array751);
$array752 = array (
);$arguments746['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array752);

$output745 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments746, $renderChildrenClosure747, $renderingContext);

$output745 .= '
                                                                    ';
return $output745;
};
$arguments743 = array();
$arguments743['if'] = NULL;

$output734 .= '';

$output734 .= '
                                                                ';
return $output734;
};
$arguments715 = array();
$arguments715['then'] = NULL;
$arguments715['else'] = NULL;
$arguments715['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array731 = array();
$array732 = array (
);$array731['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array732);
$array731['1'] = ' === svg';

$expression733 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments715['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression733(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array731)
					),
					$renderingContext
				);
$arguments715['__thenClosure'] = function() use ($renderingContext, $self) {
$output717 = '';

$output717 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments718 = array();
$arguments718['image'] = NULL;
$arguments718['src'] = NULL;
$arguments718['width'] = NULL;
$arguments718['height'] = NULL;
$array720 = array (
);$arguments718['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array720);
$array721 = array (
);$arguments718['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array721);
$array722 = array (
);$arguments718['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array722);

$output717 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments718, $renderChildrenClosure719, $renderingContext);

$output717 .= '
                                                                    ';
return $output717;
};
$arguments715['__elseClosures'][] = function() use ($renderingContext, $self) {
$output723 = '';

$output723 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure725 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments724 = array();
$arguments724['additionalAttributes'] = NULL;
$arguments724['data'] = NULL;
$arguments724['class'] = NULL;
$arguments724['dir'] = NULL;
$arguments724['id'] = NULL;
$arguments724['lang'] = NULL;
$arguments724['style'] = NULL;
$arguments724['title'] = NULL;
$arguments724['accesskey'] = NULL;
$arguments724['tabindex'] = NULL;
$arguments724['onclick'] = NULL;
$arguments724['alt'] = NULL;
$arguments724['ismap'] = NULL;
$arguments724['longdesc'] = NULL;
$arguments724['usemap'] = NULL;
$arguments724['src'] = NULL;
$arguments724['treatIdAsReference'] = NULL;
$arguments724['image'] = NULL;
$arguments724['crop'] = NULL;
$arguments724['cropVariant'] = 'default';
$arguments724['width'] = NULL;
$arguments724['height'] = NULL;
$arguments724['minWidth'] = NULL;
$arguments724['minHeight'] = NULL;
$arguments724['maxWidth'] = NULL;
$arguments724['maxHeight'] = NULL;
$arguments724['absolute'] = false;
$array726 = array (
);$arguments724['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array726);
$array727 = array (
);$arguments724['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array727);
$array728 = array (
);$arguments724['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array728);
$array729 = array (
);$arguments724['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array729);
$array730 = array (
);$arguments724['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array730);

$output723 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments724, $renderChildrenClosure725, $renderingContext);

$output723 .= '
                                                                    ';
return $output723;
};

$output714 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments715, $renderChildrenClosure716, $renderingContext);

$output714 .= '
                                                            </span>
                                                        ';
return $output714;
};
$arguments708 = array();
$arguments708['then'] = NULL;
$arguments708['else'] = NULL;
$arguments708['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array710 = array();
$array711 = array (
);$array710['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array711);
$array710['1'] = ' && ';
$array712 = array (
);$array710['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array712);

$expression713 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments708['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression713(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array710)
					),
					$renderingContext
				);
$arguments708['__thenClosure'] = $renderChildrenClosure709;

$output693 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments708, $renderChildrenClosure709, $renderingContext);

$output693 .= '
                                                        <span class="dropdown-text">';
$array753 = array (
);
$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array753)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure755 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments754 = array();
$arguments754['then'] = NULL;
$arguments754['else'] = NULL;
$arguments754['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array756 = array();
$array757 = array (
);$array756['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array757);

$expression758 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments754['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression758(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array756)
					),
					$renderingContext
				);
$arguments754['__thenClosure'] = $renderChildrenClosure755;

$output693 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments754, $renderChildrenClosure755, $renderingContext);

$output693 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output693;
};

$output690 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments691, $renderChildrenClosure692, $renderingContext);

$output690 .= '
                                    ';
return $output690;
};
$arguments687 = array();
$arguments687['each'] = NULL;
$arguments687['as'] = NULL;
$arguments687['key'] = NULL;
$arguments687['reverse'] = false;
$arguments687['iteration'] = NULL;
$array689 = array (
);$arguments687['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array689);
$arguments687['as'] = 'child';

$output685 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments687, $renderChildrenClosure688, $renderingContext);

$output685 .= '
                                </ul>
                            ';
return $output685;
};
$arguments680 = array();
$arguments680['then'] = NULL;
$arguments680['else'] = NULL;
$arguments680['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array682 = array();
$array683 = array (
);$array682['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array683);

$expression684 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments680['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression684(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array682)
					),
					$renderingContext
				);
$arguments680['__thenClosure'] = $renderChildrenClosure681;

$output598 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext);

$output598 .= '
                        </li>
                    ';
return $output598;
};

$output595 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext);

$output595 .= '
            ';
return $output595;
};
$arguments592 = array();
$arguments592['each'] = NULL;
$arguments592['as'] = NULL;
$arguments592['key'] = NULL;
$arguments592['reverse'] = false;
$arguments592['iteration'] = NULL;
$array594 = array (
);$arguments592['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array594);
$arguments592['as'] = 'item';

$output591 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output591 .= '
        </ul>
    ';
return $output591;
};
$arguments586 = array();
$arguments586['then'] = NULL;
$arguments586['else'] = NULL;
$arguments586['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array588 = array();
$array589 = array (
);$array588['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array589);

$expression590 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments586['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression590(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array588)
					),
					$renderingContext
				);
$arguments586['__thenClosure'] = $renderChildrenClosure587;

$output585 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output585 .= '
';
return $output585;
};
$arguments583 = array();
$arguments583['name'] = NULL;
$arguments583['name'] = 'MainNavigation';

$output491 .= NULL;

$output491 .= '

';

return $output491;
}


}
#