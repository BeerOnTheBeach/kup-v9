<?php

class partial_Header_Header_64f683ce53cdf09867c85aea3fab980f62e0bb90 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
            <h1 class="';
$array145 = array (
);
$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array145)]);

$output144 .= ' ';
$array146 = array (
);
$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array146)]);

$output144 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '<span>';
$array151 = array (
);
$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array151)]);

$output150 .= '</span>';
return $output150;
};
$arguments147 = array();
$arguments147['parameter'] = NULL;
$arguments147['target'] = '';
$arguments147['class'] = '';
$arguments147['title'] = '';
$arguments147['additionalParams'] = '';
$arguments147['additionalAttributes'] = array (
);
$arguments147['useCacheHash'] = false;
$arguments147['addQueryString'] = false;
$arguments147['addQueryStringMethod'] = 'GET';
$arguments147['addQueryStringExclude'] = '';
$arguments147['absolute'] = false;
$array149 = array (
);$arguments147['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array149);

$output144 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output144 .= '
            </h1>
        ';
return $output144;
};
$arguments142 = array();
$arguments142['value'] = NULL;
$arguments142['value'] = 1;

$output141 .= '';

$output141 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
            <h2 class="';
$array155 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array155)]);

$output154 .= ' ';
$array156 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array156)]);

$output154 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '<span>';
$array161 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array161)]);

$output160 .= '</span>';
return $output160;
};
$arguments157 = array();
$arguments157['parameter'] = NULL;
$arguments157['target'] = '';
$arguments157['class'] = '';
$arguments157['title'] = '';
$arguments157['additionalParams'] = '';
$arguments157['additionalAttributes'] = array (
);
$arguments157['useCacheHash'] = false;
$arguments157['addQueryString'] = false;
$arguments157['addQueryStringMethod'] = 'GET';
$arguments157['addQueryStringExclude'] = '';
$arguments157['absolute'] = false;
$array159 = array (
);$arguments157['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array159);

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output154 .= '
            </h2>
        ';
return $output154;
};
$arguments152 = array();
$arguments152['value'] = NULL;
$arguments152['value'] = 2;

$output141 .= '';

$output141 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
            <h3 class="';
$array165 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array165)]);

$output164 .= ' ';
$array166 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array166)]);

$output164 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '<span>';
$array171 = array (
);
$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array171)]);

$output170 .= '</span>';
return $output170;
};
$arguments167 = array();
$arguments167['parameter'] = NULL;
$arguments167['target'] = '';
$arguments167['class'] = '';
$arguments167['title'] = '';
$arguments167['additionalParams'] = '';
$arguments167['additionalAttributes'] = array (
);
$arguments167['useCacheHash'] = false;
$arguments167['addQueryString'] = false;
$arguments167['addQueryStringMethod'] = 'GET';
$arguments167['addQueryStringExclude'] = '';
$arguments167['absolute'] = false;
$array169 = array (
);$arguments167['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array169);

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output164 .= '
            </h3>
        ';
return $output164;
};
$arguments162 = array();
$arguments162['value'] = NULL;
$arguments162['value'] = 3;

$output141 .= '';

$output141 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
            <h4 class="';
$array175 = array (
);
$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array175)]);

$output174 .= ' ';
$array176 = array (
);
$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array176)]);

$output174 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '<span>';
$array181 = array (
);
$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array181)]);

$output180 .= '</span>';
return $output180;
};
$arguments177 = array();
$arguments177['parameter'] = NULL;
$arguments177['target'] = '';
$arguments177['class'] = '';
$arguments177['title'] = '';
$arguments177['additionalParams'] = '';
$arguments177['additionalAttributes'] = array (
);
$arguments177['useCacheHash'] = false;
$arguments177['addQueryString'] = false;
$arguments177['addQueryStringMethod'] = 'GET';
$arguments177['addQueryStringExclude'] = '';
$arguments177['absolute'] = false;
$array179 = array (
);$arguments177['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array179);

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output174 .= '
            </h4>
        ';
return $output174;
};
$arguments172 = array();
$arguments172['value'] = NULL;
$arguments172['value'] = 4;

$output141 .= '';

$output141 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
            <h5 class="';
$array185 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array185)]);

$output184 .= ' ';
$array186 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array186)]);

$output184 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '<span>';
$array191 = array (
);
$output190 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array191)]);

$output190 .= '</span>';
return $output190;
};
$arguments187 = array();
$arguments187['parameter'] = NULL;
$arguments187['target'] = '';
$arguments187['class'] = '';
$arguments187['title'] = '';
$arguments187['additionalParams'] = '';
$arguments187['additionalAttributes'] = array (
);
$arguments187['useCacheHash'] = false;
$arguments187['addQueryString'] = false;
$arguments187['addQueryStringMethod'] = 'GET';
$arguments187['addQueryStringExclude'] = '';
$arguments187['absolute'] = false;
$array189 = array (
);$arguments187['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array189);

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output184 .= '
            </h5>
        ';
return $output184;
};
$arguments182 = array();
$arguments182['value'] = NULL;
$arguments182['value'] = 5;

$output141 .= '';

$output141 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
            <h6 class="';
$array195 = array (
);
$output194 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array195)]);

$output194 .= ' ';
$array196 = array (
);
$output194 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array196)]);

$output194 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '<span>';
$array201 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array201)]);

$output200 .= '</span>';
return $output200;
};
$arguments197 = array();
$arguments197['parameter'] = NULL;
$arguments197['target'] = '';
$arguments197['class'] = '';
$arguments197['title'] = '';
$arguments197['additionalParams'] = '';
$arguments197['additionalAttributes'] = array (
);
$arguments197['useCacheHash'] = false;
$arguments197['addQueryString'] = false;
$arguments197['addQueryStringMethod'] = 'GET';
$arguments197['addQueryStringExclude'] = '';
$arguments197['absolute'] = false;
$array199 = array (
);$arguments197['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array199);

$output194 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output194 .= '
            </h6>
        ';
return $output194;
};
$arguments192 = array();
$arguments192['value'] = NULL;
$arguments192['value'] = 6;

$output141 .= '';

$output141 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output204 = '';

$output204 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return ' -- do not show header -- ';
};
$arguments205 = array();

$output204 .= NULL;

$output204 .= '
        ';
return $output204;
};
$arguments202 = array();
$arguments202['value'] = NULL;
$arguments202['value'] = 100;

$output141 .= '';

$output141 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['section'] = NULL;
$arguments216['partial'] = NULL;
$arguments216['delegate'] = NULL;
$arguments216['renderable'] = NULL;
$arguments216['arguments'] = array (
);
$arguments216['optional'] = false;
$arguments216['default'] = NULL;
$arguments216['contentAs'] = NULL;
$arguments216['debug'] = true;
$arguments216['partial'] = 'Header/Header';
// Rendering Array
$array218 = array();
$array219 = array (
);$array218['header'] = $renderingContext->getVariableProvider()->getByPath('header', $array219);
$array220 = array (
);$array218['layout'] = $renderingContext->getVariableProvider()->getByPath('default', $array220);
$array221 = array (
);$array218['class'] = $renderingContext->getVariableProvider()->getByPath('class', $array221);
$array222 = array (
);$array218['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array222);
$array223 = array (
);$array218['link'] = $renderingContext->getVariableProvider()->getByPath('link', $array223);
$arguments216['arguments'] = $array218;

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output215 .= '
            ';
return $output215;
};
$arguments210 = array();
$arguments210['then'] = NULL;
$arguments210['else'] = NULL;
$arguments210['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array213);

$expression214 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments210['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments210['__thenClosure'] = $renderChildrenClosure211;

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '
        ';
return $output209;
};
$arguments207 = array();

$output141 .= '';

$output141 .= '
    ';
return $output141;
};
$arguments7 = array();
$arguments7['expression'] = NULL;
$array140 = array (
);$arguments7['expression'] = $renderingContext->getVariableProvider()->getByPath('layout', $array140);

$output6 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 1;
}): return call_user_func(function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
            <h1 class="';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array10)]);

$output9 .= ' ';
$array11 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array11)]);

$output9 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '<span>';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array16)]);

$output15 .= '</span>';
return $output15;
};
$arguments12 = array();
$arguments12['parameter'] = NULL;
$arguments12['target'] = '';
$arguments12['class'] = '';
$arguments12['title'] = '';
$arguments12['additionalParams'] = '';
$arguments12['additionalAttributes'] = array (
);
$arguments12['useCacheHash'] = false;
$arguments12['addQueryString'] = false;
$arguments12['addQueryStringMethod'] = 'GET';
$arguments12['addQueryStringExclude'] = '';
$arguments12['absolute'] = false;
$array14 = array (
);$arguments12['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array14);

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output9 .= '
            </h1>
        ';
return $output9;
});
case call_user_func(function() use ($renderingContext, $self) {

return 2;
}): return call_user_func(function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
            <h2 class="';
$array28 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array28)]);

$output27 .= ' ';
$array29 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array29)]);

$output27 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '<span>';
$array34 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array34)]);

$output33 .= '</span>';
return $output33;
};
$arguments30 = array();
$arguments30['parameter'] = NULL;
$arguments30['target'] = '';
$arguments30['class'] = '';
$arguments30['title'] = '';
$arguments30['additionalParams'] = '';
$arguments30['additionalAttributes'] = array (
);
$arguments30['useCacheHash'] = false;
$arguments30['addQueryString'] = false;
$arguments30['addQueryStringMethod'] = 'GET';
$arguments30['addQueryStringExclude'] = '';
$arguments30['absolute'] = false;
$array32 = array (
);$arguments30['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array32);

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output27 .= '
            </h2>
        ';
return $output27;
});
case call_user_func(function() use ($renderingContext, $self) {

return 3;
}): return call_user_func(function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
            <h3 class="';
$array46 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array46)]);

$output45 .= ' ';
$array47 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array47)]);

$output45 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '<span>';
$array52 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array52)]);

$output51 .= '</span>';
return $output51;
};
$arguments48 = array();
$arguments48['parameter'] = NULL;
$arguments48['target'] = '';
$arguments48['class'] = '';
$arguments48['title'] = '';
$arguments48['additionalParams'] = '';
$arguments48['additionalAttributes'] = array (
);
$arguments48['useCacheHash'] = false;
$arguments48['addQueryString'] = false;
$arguments48['addQueryStringMethod'] = 'GET';
$arguments48['addQueryStringExclude'] = '';
$arguments48['absolute'] = false;
$array50 = array (
);$arguments48['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array50);

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output45 .= '
            </h3>
        ';
return $output45;
});
case call_user_func(function() use ($renderingContext, $self) {

return 4;
}): return call_user_func(function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
            <h4 class="';
$array64 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array64)]);

$output63 .= ' ';
$array65 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array65)]);

$output63 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '<span>';
$array70 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array70)]);

$output69 .= '</span>';
return $output69;
};
$arguments66 = array();
$arguments66['parameter'] = NULL;
$arguments66['target'] = '';
$arguments66['class'] = '';
$arguments66['title'] = '';
$arguments66['additionalParams'] = '';
$arguments66['additionalAttributes'] = array (
);
$arguments66['useCacheHash'] = false;
$arguments66['addQueryString'] = false;
$arguments66['addQueryStringMethod'] = 'GET';
$arguments66['addQueryStringExclude'] = '';
$arguments66['absolute'] = false;
$array68 = array (
);$arguments66['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array68);

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output63 .= '
            </h4>
        ';
return $output63;
});
case call_user_func(function() use ($renderingContext, $self) {

return 5;
}): return call_user_func(function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
            <h5 class="';
$array82 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array82)]);

$output81 .= ' ';
$array83 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array83)]);

$output81 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '<span>';
$array88 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array88)]);

$output87 .= '</span>';
return $output87;
};
$arguments84 = array();
$arguments84['parameter'] = NULL;
$arguments84['target'] = '';
$arguments84['class'] = '';
$arguments84['title'] = '';
$arguments84['additionalParams'] = '';
$arguments84['additionalAttributes'] = array (
);
$arguments84['useCacheHash'] = false;
$arguments84['addQueryString'] = false;
$arguments84['addQueryStringMethod'] = 'GET';
$arguments84['addQueryStringExclude'] = '';
$arguments84['absolute'] = false;
$array86 = array (
);$arguments84['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array86);

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output81 .= '
            </h5>
        ';
return $output81;
});
case call_user_func(function() use ($renderingContext, $self) {

return 6;
}): return call_user_func(function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
            <h6 class="';
$array100 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array100)]);

$output99 .= ' ';
$array101 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array101)]);

$output99 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '<span>';
$array106 = array (
);
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array106)]);

$output105 .= '</span>';
return $output105;
};
$arguments102 = array();
$arguments102['parameter'] = NULL;
$arguments102['target'] = '';
$arguments102['class'] = '';
$arguments102['title'] = '';
$arguments102['additionalParams'] = '';
$arguments102['additionalAttributes'] = array (
);
$arguments102['useCacheHash'] = false;
$arguments102['addQueryString'] = false;
$arguments102['addQueryStringMethod'] = 'GET';
$arguments102['addQueryStringExclude'] = '';
$arguments102['absolute'] = false;
$array104 = array (
);$arguments102['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array104);

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output99 .= '
            </h6>
        ';
return $output99;
});
case call_user_func(function() use ($renderingContext, $self) {

return 100;
}): return call_user_func(function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return ' -- do not show header -- ';
};
$arguments118 = array();

$output117 .= NULL;

$output117 .= '
        ';
return $output117;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['section'] = NULL;
$arguments132['partial'] = NULL;
$arguments132['delegate'] = NULL;
$arguments132['renderable'] = NULL;
$arguments132['arguments'] = array (
);
$arguments132['optional'] = false;
$arguments132['default'] = NULL;
$arguments132['contentAs'] = NULL;
$arguments132['debug'] = true;
$arguments132['partial'] = 'Header/Header';
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['header'] = $renderingContext->getVariableProvider()->getByPath('header', $array135);
$array136 = array (
);$array134['layout'] = $renderingContext->getVariableProvider()->getByPath('default', $array136);
$array137 = array (
);$array134['class'] = $renderingContext->getVariableProvider()->getByPath('class', $array137);
$array138 = array (
);$array134['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array138);
$array139 = array (
);$array134['link'] = $renderingContext->getVariableProvider()->getByPath('link', $array139);
$arguments132['arguments'] = $array134;

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
            ';
return $output131;
};
$arguments126 = array();
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$arguments126['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array129);

$expression130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments126['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)
					),
					$renderingContext
				);
$arguments126['__thenClosure'] = $renderChildrenClosure127;

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
        ';
return $output125;
});
}
}, array($arguments7));

$output6 .= '
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('header', $array4);

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