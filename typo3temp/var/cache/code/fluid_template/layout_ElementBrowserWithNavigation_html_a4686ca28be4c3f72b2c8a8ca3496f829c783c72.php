<?php

class layout_ElementBrowserWithNavigation_html_a4686ca28be4c3f72b2c8a8ca3496f829c783c72 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['debug'] = true;
$arguments20['section'] = 'Content';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
    ';
return $output19;
};
$arguments17 = array();

$output16 .= '';

$output16 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
        <div class="element-browser">
            <div class="element-browser-main scaffold-content-navigation-available scaffold-content-navigation-expanded">
                <div class="element-browser-main-sidebar" style="width: ';
$array25 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('initialNavigationWidth', $array25)]);

$output24 .= 'px">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['section'] = NULL;
$arguments26['partial'] = NULL;
$arguments26['delegate'] = NULL;
$arguments26['renderable'] = NULL;
$arguments26['arguments'] = array (
);
$arguments26['optional'] = false;
$arguments26['default'] = NULL;
$arguments26['contentAs'] = NULL;
$arguments26['debug'] = true;
$arguments26['section'] = 'Navigation';

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output24 .= '
                </div>
                <typo3-backend-navigation-switcher
                    parent=".element-browser-main"
                    navigation=".element-browser-main-sidebar"
                    minimum-width="250"
                    initial-width="';
$array28 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('initialNavigationWidth', $array28)]);

$output24 .= '"
                    persistence-identifier="selector.navigation.width"
                ></typo3-backend-navigation-switcher>
                <div class="element-browser-main-content">
                    <div class="element-browser-body">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['section'] = NULL;
$arguments29['partial'] = NULL;
$arguments29['delegate'] = NULL;
$arguments29['renderable'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['optional'] = false;
$arguments29['default'] = NULL;
$arguments29['contentAs'] = NULL;
$arguments29['debug'] = true;
$arguments29['section'] = 'Content';

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output24 .= '
                    </div>
                </div>
            </div>
        </div>
    ';
return $output24;
};
$arguments22 = array();
$arguments22['if'] = NULL;

$output16 .= '';

$output16 .= '
';
return $output16;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('contentOnly', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
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
$arguments4['section'] = 'Content';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <div class="element-browser">
            <div class="element-browser-main scaffold-content-navigation-available scaffold-content-navigation-expanded">
                <div class="element-browser-main-sidebar" style="width: ';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('initialNavigationWidth', $array7)]);

$output6 .= 'px">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['section'] = NULL;
$arguments8['partial'] = NULL;
$arguments8['delegate'] = NULL;
$arguments8['renderable'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['optional'] = false;
$arguments8['default'] = NULL;
$arguments8['contentAs'] = NULL;
$arguments8['debug'] = true;
$arguments8['section'] = 'Navigation';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output6 .= '
                </div>
                <typo3-backend-navigation-switcher
                    parent=".element-browser-main"
                    navigation=".element-browser-main-sidebar"
                    minimum-width="250"
                    initial-width="';
$array10 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('initialNavigationWidth', $array10)]);

$output6 .= '"
                    persistence-identifier="selector.navigation.width"
                ></typo3-backend-navigation-switcher>
                <div class="element-browser-main-content">
                    <div class="element-browser-body">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['section'] = NULL;
$arguments11['partial'] = NULL;
$arguments11['delegate'] = NULL;
$arguments11['renderable'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['optional'] = false;
$arguments11['default'] = NULL;
$arguments11['contentAs'] = NULL;
$arguments11['debug'] = true;
$arguments11['section'] = 'Content';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '
                    </div>
                </div>
            </div>
        </div>
    ';
return $output6;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#