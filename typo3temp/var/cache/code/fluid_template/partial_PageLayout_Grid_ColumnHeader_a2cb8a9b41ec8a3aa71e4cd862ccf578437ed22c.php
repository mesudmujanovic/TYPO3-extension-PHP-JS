<?php

class partial_PageLayout_Grid_ColumnHeader_a2cb8a9b41ec8a3aa71e4cd862ccf578437ed22c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div class="t3-page-column-header">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
            <div class="t3-page-column-header-icons">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                    <a href="';
$array44 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.editUrl', $array44)]);

$output43 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['key'] = NULL;
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['languageKey'] = NULL;
$arguments45['alternativeLanguageKeys'] = NULL;
$arguments45['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:editColumn';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output43 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['identifier'] = NULL;
$arguments47['size'] = 'small';
$arguments47['overlay'] = NULL;
$arguments47['state'] = 'default';
$arguments47['alternativeMarkupIdentifier'] = NULL;
$arguments47['identifier'] = 'actions-document-open';

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output43 .= '
                    </a>
                ';
return $output43;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array40);
$array39['1'] = ' && ';
$array41 = array (
);$array39['2'] = $renderingContext->getVariableProvider()->getByPath('column.editUrl', $array41);

$expression42 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$arguments37['__thenClosure'] = $renderChildrenClosure38;

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
            </div>
            ';
$array49 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.title', $array49)]);

$output36 .= '
        ';
return $output36;
};
$arguments34 = array();

$output33 .= '';

$output33 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$arguments56['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:unusedColPos';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '
        ';
return $output55;
};
$arguments50 = array();
$arguments50['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('column.unused', $array53);

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);

$output33 .= '';

$output33 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
            ';
$array64 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.titleUnassigned', $array64)]);

$output63 .= '
        ';
return $output63;
};
$arguments58 = array();
$arguments58['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('column.unassigned', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);

$output33 .= '';

$output33 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
            ';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.titleInaccessible', $array68)]);

$output67 .= '
        ';
return $output67;
};
$arguments65 = array();
$arguments65['if'] = NULL;

$output33 .= '';

$output33 .= '
    ';
return $output33;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('column.active', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
            <div class="t3-page-column-header-icons">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                    <a href="';
$array11 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.editUrl', $array11)]);

$output10 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['key'] = NULL;
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['languageKey'] = NULL;
$arguments12['alternativeLanguageKeys'] = NULL;
$arguments12['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:editColumn';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output10 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['identifier'] = NULL;
$arguments14['size'] = 'small';
$arguments14['overlay'] = NULL;
$arguments14['state'] = 'default';
$arguments14['alternativeMarkupIdentifier'] = NULL;
$arguments14['identifier'] = 'actions-document-open';

$output10 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output10 .= '
                    </a>
                ';
return $output10;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array7);
$array6['1'] = ' && ';
$array8 = array (
);$array6['2'] = $renderingContext->getVariableProvider()->getByPath('column.editUrl', $array8);

$expression9 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = $renderChildrenClosure5;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
            </div>
            ';
$array16 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.title', $array16)]);

$output3 .= '
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:unusedColPos';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output17 .= '
        ';
return $output17;
};
$arguments1['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('column.unused', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
            ';
$array24 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.titleUnassigned', $array24)]);

$output23 .= '
        ';
return $output23;
};
$arguments1['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('column.unassigned', $array26);

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
            ';
$array29 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.titleInaccessible', $array29)]);

$output28 .= '
        ';
return $output28;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$array71 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.beforeSectionMarkup', $array71);
};
$arguments69 = array();
$arguments69['value'] = NULL;

$output0 .= isset($arguments69['value']) ? $arguments69['value'] : $renderChildrenClosure70();

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
    <div class="t3-page-ce t3js-page-ce" data-page="';
$array81 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.context.pageId', $array81)]);

$output80 .= '" id="';
$array82 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.uniqueId', $array82)]);

$output80 .= '">
        <div class="t3js-page-new-ce t3-page-ce-wrapper-new-ce" id="colpos-';
$array83 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array83)]);

$output80 .= '-page-';
$array84 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.context.pageId', $array84)]);

$output80 .= '-';
$array85 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.uniqueId', $array85)]);

$output80 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                    <typo3-backend-new-content-element-wizard-button url="';
$array107 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.newContentUrl', $array107)]);

$output106 .= '" title="';
$array108 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitle', $array108)]);

$output106 .= '">
                        <button type="button" class="btn btn-default btn-sm">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['identifier'] = NULL;
$arguments109['size'] = 'small';
$arguments109['overlay'] = NULL;
$arguments109['state'] = 'default';
$arguments109['alternativeMarkupIdentifier'] = NULL;
$arguments109['identifier'] = 'actions-add';

$output106 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output106 .= '
                            ';
$array111 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitleShort', $array111)]);

$output106 .= '
                        </button>
                    </typo3-backend-new-content-element-wizard-button>
                ';
return $output106;
};
$arguments104 = array();

$output103 .= '';

$output103 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                    <a href="';
$array115 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.newContentUrl', $array115)]);

$output114 .= '" title="';
$array116 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitle', $array116)]);

$output114 .= '" class="btn btn-default btn-sm">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['identifier'] = NULL;
$arguments117['size'] = 'small';
$arguments117['overlay'] = NULL;
$arguments117['state'] = 'default';
$arguments117['alternativeMarkupIdentifier'] = NULL;
$arguments117['identifier'] = 'actions-add';

$output114 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output114 .= '
                        ';
$array119 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitleShort', $array119)]);

$output114 .= '
                    </a>
                ';
return $output114;
};
$arguments112 = array();
$arguments112['if'] = NULL;

$output103 .= '';

$output103 .= '
            ';
return $output103;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('column.context.drawingConfiguration.showNewContentWizard', $array101);

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$arguments86['__thenClosure'] = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                    <typo3-backend-new-content-element-wizard-button url="';
$array89 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.newContentUrl', $array89)]);

$output88 .= '" title="';
$array90 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitle', $array90)]);

$output88 .= '">
                        <button type="button" class="btn btn-default btn-sm">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['identifier'] = NULL;
$arguments91['size'] = 'small';
$arguments91['overlay'] = NULL;
$arguments91['state'] = 'default';
$arguments91['alternativeMarkupIdentifier'] = NULL;
$arguments91['identifier'] = 'actions-add';

$output88 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output88 .= '
                            ';
$array93 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitleShort', $array93)]);

$output88 .= '
                        </button>
                    </typo3-backend-new-content-element-wizard-button>
                ';
return $output88;
};
$arguments86['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                    <a href="';
$array95 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.newContentUrl', $array95)]);

$output94 .= '" title="';
$array96 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitle', $array96)]);

$output94 .= '" class="btn btn-default btn-sm">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['identifier'] = NULL;
$arguments97['size'] = 'small';
$arguments97['overlay'] = NULL;
$arguments97['state'] = 'default';
$arguments97['alternativeMarkupIdentifier'] = NULL;
$arguments97['identifier'] = 'actions-add';

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output94 .= '
                        ';
$array99 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitleShort', $array99)]);

$output94 .= '
                    </a>
                ';
return $output94;
};

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output80 .= '
        </div>
        <div class="t3-page-ce-dropzone-available t3js-page-ce-dropzone-available"></div>
    </div>
';
return $output80;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array75);
$array74['1'] = ' && ';
$array76 = array (
);$array74['2'] = $renderingContext->getVariableProvider()->getByPath('column.contentEditable', $array76);
$array74['3'] = ' && ';
$array77 = array (
);$array74['4'] = $renderingContext->getVariableProvider()->getByPath('column.context.allowNewContent', $array77);
$array74['5'] = ' && ';
$array78 = array (
);$array74['6'] = $renderingContext->getVariableProvider()->getByPath('column.active', $array78);

$expression79 = function($context) {return (((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node6"]));};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = $renderChildrenClosure73;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#