<?php

class Standard_action_elementBrowser_6cd289876bd7b623679c15063f046601218876f8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$arguments148['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array150 = array();
$array151 = array (
);$array150['0'] = $renderingContext->getVariableProvider()->getByPath('treeEnabled', $array151);

$expression152 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments148['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression152(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)
					),
					$renderingContext
				);
$arguments148['then'] = 'ElementBrowserWithNavigation';
$arguments148['else'] = 'ElementBrowser';

return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);
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
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section Navigation
 */
public function section_cf03cf2e9cdf95a20af09137dfb9071db0c31bf2(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            <div class="element-browser-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$array36 = array (
);return $renderingContext->getVariableProvider()->getByPath('tree', $array36);
};
$arguments34 = array();
$arguments34['value'] = NULL;

$output33 .= isset($arguments34['value']) ? $arguments34['value'] : $renderChildrenClosure35();

$output33 .= '
            </div>
        ';
return $output33;
};
$arguments31 = array();

$output30 .= '';

$output30 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
            <typo3-backend-component-page-browser
                class="scaffold-content-navigation-component"
                tree-actions="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array45 = array (
);return $renderingContext->getVariableProvider()->getByPath('treeActions', $array45);
};
$arguments43 = array();
$arguments43['value'] = NULL;
$arguments43['forceObject'] = false;
$renderChildrenClosure44 = ($arguments43['value'] !== null) ? function() use ($arguments43) { return $arguments43['value']; } : $renderChildrenClosure44;
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '"
                active-page="';
$array46 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activePage', $array46)]);

$output42 .= '">
            </typo3-backend-component-page-browser>
        ';
return $output42;
};
$arguments37 = array();
$arguments37['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('treeType', $array40);
$array39['1'] = ' == \'page\'';

$expression41 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'page');};
$arguments37['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);

$output30 .= '';

$output30 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
            <typo3-backend-component-filestorage-browser
                class="scaffold-content-navigation-component"
                active-folder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['0'] = $renderingContext->getVariableProvider()->getByPath('activeFolder', $array58);

$expression59 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$array60 = array (
);$arguments55['then'] = $renderingContext->getVariableProvider()->getByPath('activeFolder.combinedIdentifier', $array60);
$arguments55['else'] = '';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);
};
$arguments53 = array();
$arguments53['value'] = NULL;
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = NULL;
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = ($arguments53['value'] !== null) ? function() use ($arguments53) { return $arguments53['value']; } : $renderChildrenClosure54;
$output52 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '"
            >
            </typo3-backend-component-filestorage-browser>
        ';
return $output52;
};
$arguments47 = array();
$arguments47['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('treeType', $array50);
$array49['1'] = ' == \'folder\'';

$expression51 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'folder');};
$arguments47['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);

$output30 .= '';

$output30 .= '
    ';
return $output30;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('tree', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
            <div class="element-browser-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array6 = array (
);return $renderingContext->getVariableProvider()->getByPath('tree', $array6);
};
$arguments4 = array();
$arguments4['value'] = NULL;

$output3 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output3 .= '
            </div>
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
            <typo3-backend-component-page-browser
                class="scaffold-content-navigation-component"
                tree-actions="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('treeActions', $array10);
};
$arguments8 = array();
$arguments8['value'] = NULL;
$arguments8['forceObject'] = false;
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '"
                active-page="';
$array11 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activePage', $array11)]);

$output7 .= '">
            </typo3-backend-component-page-browser>
        ';
return $output7;
};
$arguments1['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('treeType', $array13);
$array12['1'] = ' == \'page\'';

$expression14 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'page');};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
            <typo3-backend-component-filestorage-browser
                class="scaffold-content-navigation-component"
                active-folder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('activeFolder', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$array23 = array (
);$arguments18['then'] = $renderingContext->getVariableProvider()->getByPath('activeFolder.combinedIdentifier', $array23);
$arguments18['else'] = '';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
};
$arguments16 = array();
$arguments16['value'] = NULL;
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = ($arguments16['value'] !== null) ? function() use ($arguments16) { return $arguments16['value']; } : $renderChildrenClosure17;
$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '"
            >
            </typo3-backend-component-filestorage-browser>
        ';
return $output15;
};
$arguments1['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('treeType', $array25);
$array24['1'] = ' == \'folder\'';

$expression26 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'folder');};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output61 = '';

$output61 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['queueIdentifier'] = NULL;
$arguments62['as'] = NULL;
$array64 = array (
);$arguments62['queueIdentifier'] = $renderingContext->getVariableProvider()->getByPath('flashMessageQueueIdentifier', $array64);

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$array67 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array67);
};
$arguments65 = array();
$arguments65['value'] = NULL;

$output61 .= isset($arguments65['value']) ? $arguments65['value'] : $renderChildrenClosure66();

$output61 .= '
';

return $output61;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output68 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['name'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('treeEnabled', $array74);

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments71['then'] = 'ElementBrowserWithNavigation';
$arguments71['else'] = 'ElementBrowser';
$arguments69['name'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output68 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
            <div class="element-browser-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$array114 = array (
);return $renderingContext->getVariableProvider()->getByPath('tree', $array114);
};
$arguments112 = array();
$arguments112['value'] = NULL;

$output111 .= isset($arguments112['value']) ? $arguments112['value'] : $renderChildrenClosure113();

$output111 .= '
            </div>
        ';
return $output111;
};
$arguments109 = array();

$output108 .= '';

$output108 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
            <typo3-backend-component-page-browser
                class="scaffold-content-navigation-component"
                tree-actions="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$array123 = array (
);return $renderingContext->getVariableProvider()->getByPath('treeActions', $array123);
};
$arguments121 = array();
$arguments121['value'] = NULL;
$arguments121['forceObject'] = false;
$renderChildrenClosure122 = ($arguments121['value'] !== null) ? function() use ($arguments121) { return $arguments121['value']; } : $renderChildrenClosure122;
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext)]);

$output120 .= '"
                active-page="';
$array124 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activePage', $array124)]);

$output120 .= '">
            </typo3-backend-component-page-browser>
        ';
return $output120;
};
$arguments115 = array();
$arguments115['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('treeType', $array118);
$array117['1'] = ' == \'page\'';

$expression119 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'page');};
$arguments115['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);

$output108 .= '';

$output108 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
            <typo3-backend-component-filestorage-browser
                class="scaffold-content-navigation-component"
                active-folder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$arguments133['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['0'] = $renderingContext->getVariableProvider()->getByPath('activeFolder', $array136);

$expression137 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments133['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
$array138 = array (
);$arguments133['then'] = $renderingContext->getVariableProvider()->getByPath('activeFolder.combinedIdentifier', $array138);
$arguments133['else'] = '';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
};
$arguments131 = array();
$arguments131['value'] = NULL;
$arguments131['keepQuotes'] = false;
$arguments131['encoding'] = NULL;
$arguments131['doubleEncode'] = true;
$renderChildrenClosure132 = ($arguments131['value'] !== null) ? function() use ($arguments131) { return $arguments131['value']; } : $renderChildrenClosure132;
$output130 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output130 .= '"
            >
            </typo3-backend-component-filestorage-browser>
        ';
return $output130;
};
$arguments125 = array();
$arguments125['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['0'] = $renderingContext->getVariableProvider()->getByPath('treeType', $array128);
$array127['1'] = ' == \'folder\'';

$expression129 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'folder');};
$arguments125['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array127)
					),
					$renderingContext
				);

$output108 .= '';

$output108 .= '
    ';
return $output108;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('tree', $array106);

$expression107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
            <div class="element-browser-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array84 = array (
);return $renderingContext->getVariableProvider()->getByPath('tree', $array84);
};
$arguments82 = array();
$arguments82['value'] = NULL;

$output81 .= isset($arguments82['value']) ? $arguments82['value'] : $renderChildrenClosure83();

$output81 .= '
            </div>
        ';
return $output81;
};
$arguments79['__elseClosures'][] = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
            <typo3-backend-component-page-browser
                class="scaffold-content-navigation-component"
                tree-actions="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$array88 = array (
);return $renderingContext->getVariableProvider()->getByPath('treeActions', $array88);
};
$arguments86 = array();
$arguments86['value'] = NULL;
$arguments86['forceObject'] = false;
$renderChildrenClosure87 = ($arguments86['value'] !== null) ? function() use ($arguments86) { return $arguments86['value']; } : $renderChildrenClosure87;
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output85 .= '"
                active-page="';
$array89 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activePage', $array89)]);

$output85 .= '">
            </typo3-backend-component-page-browser>
        ';
return $output85;
};
$arguments79['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('treeType', $array91);
$array90['1'] = ' == \'page\'';

$expression92 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'page');};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
};
$arguments79['__elseClosures'][] = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
            <typo3-backend-component-filestorage-browser
                class="scaffold-content-navigation-component"
                active-folder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$arguments96['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('activeFolder', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments96['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$array101 = array (
);$arguments96['then'] = $renderingContext->getVariableProvider()->getByPath('activeFolder.combinedIdentifier', $array101);
$arguments96['else'] = '';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);
};
$arguments94 = array();
$arguments94['value'] = NULL;
$arguments94['keepQuotes'] = false;
$arguments94['encoding'] = NULL;
$arguments94['doubleEncode'] = true;
$renderChildrenClosure95 = ($arguments94['value'] !== null) ? function() use ($arguments94) { return $arguments94['value']; } : $renderChildrenClosure95;
$output93 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '"
            >
            </typo3-backend-component-filestorage-browser>
        ';
return $output93;
};
$arguments79['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('treeType', $array103);
$array102['1'] = ' == \'folder\'';

$expression104 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'folder');};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
};

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
';
return $output78;
};
$arguments76 = array();
$arguments76['name'] = NULL;
$arguments76['name'] = 'Navigation';

$output68 .= NULL;

$output68 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['queueIdentifier'] = NULL;
$arguments142['as'] = NULL;
$array144 = array (
);$arguments142['queueIdentifier'] = $renderingContext->getVariableProvider()->getByPath('flashMessageQueueIdentifier', $array144);

$output141 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$array147 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array147);
};
$arguments145 = array();
$arguments145['value'] = NULL;

$output141 .= isset($arguments145['value']) ? $arguments145['value'] : $renderChildrenClosure146();

$output141 .= '
';
return $output141;
};
$arguments139 = array();
$arguments139['name'] = NULL;
$arguments139['name'] = 'Content';

$output68 .= NULL;

$output68 .= '
';

return $output68;
}


}
#