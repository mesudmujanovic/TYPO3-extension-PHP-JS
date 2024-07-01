<?php

class partial_PageLayout_RecordDefault_Header_f8a13fc3a773e14eaf1234966d4aadd4684726a6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="t3-ctype-identifier" data-ctype="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.CType', $array1)]);

$output0 .= '" data-list_type="';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.list_type', $array2)]);

$output0 .= '" data-tx_gridelements_backend_layout="';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.tx_gridelements_backend_layout', $array3)]);

$output0 .= '">
    <div class="t3-page-ce-header ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
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
);$array6['2'] = $renderingContext->getVariableProvider()->getByPath('item.dragAndDropAllowed', $array8);

$expression9 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)
					),
					$renderingContext
				);
$arguments4['then'] = 't3-page-ce-header-draggable t3js-page-ce-draghandle';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '">
        <div class="col t3-page-ce-header-icons-left">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array12 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.icons', $array12);
};
$arguments10 = array();
$arguments10['value'] = NULL;

$output0 .= isset($arguments10['value']) ? $arguments10['value'] : $renderChildrenClosure11();

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                <span class="t3js-flag" title="';
$array19 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.siteLanguage.title', $array19)]);

$output18 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['identifier'] = NULL;
$arguments20['size'] = 'small';
$arguments20['overlay'] = NULL;
$arguments20['state'] = 'default';
$arguments20['alternativeMarkupIdentifier'] = NULL;
$array22 = array (
);$arguments20['identifier'] = $renderingContext->getVariableProvider()->getByPath('item.siteLanguage.flagIdentifier', $array22);

$output18 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output18 .= '</span>
            ';
return $output18;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('item.siteLanguage.flagIdentifier', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
        </div>
        <div class="col-auto align-self-end t3-page-ce-header-icons-right">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
                <div class="btn-toolbar">
                    <div class="btn-group btn-group-sm">
                        <a href="';
$array30 = array (
);
$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.editUrl', $array30)]);

$output29 .= '" class="btn btn-default" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['key'] = NULL;
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['languageKey'] = NULL;
$arguments31['alternativeLanguageKeys'] = NULL;
$arguments31['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output29 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['identifier'] = NULL;
$arguments33['size'] = 'small';
$arguments33['overlay'] = NULL;
$arguments33['state'] = 'default';
$arguments33['alternativeMarkupIdentifier'] = NULL;
$arguments33['identifier'] = 'actions-open';

$output29 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output29 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                            <a class="btn btn-default" href="';
$array41 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.visibilityToggleUrl', $array41)]);

$output40 .= '" title="';
$array42 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.visibilityToggleTitle', $array42)]);

$output40 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['identifier'] = NULL;
$arguments43['size'] = 'small';
$arguments43['overlay'] = NULL;
$arguments43['state'] = 'default';
$arguments43['alternativeMarkupIdentifier'] = NULL;
$output45 = '';

$output45 .= 'actions-edit-';
$array46 = array (
);
$output45 .= $renderingContext->getVariableProvider()->getByPath('item.visibilityToggleIconName', $array46);
$arguments43['identifier'] = $output45;

$output40 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output40 .= '
                            </a>
                        ';
return $output40;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('item.visibilityToggling', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = $renderChildrenClosure36;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output29 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                            <a class="btn btn-default t3js-modal-trigger" href="';
$array53 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteUrl', $array53)]);

$output52 .= '"
                            data-severity="warning"
                            data-title="';
$array54 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteConfirmText', $array54)]);

$output52 .= '"
                            data-content="';
$array55 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteConfirmText', $array55)]);

$output52 .= '"
                            data-button-close-text="';
$array56 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteCancelText', $array56)]);

$output52 .= '"
                            title="';
$array57 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteTitle', $array57)]);

$output52 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['identifier'] = NULL;
$arguments58['size'] = 'small';
$arguments58['overlay'] = NULL;
$arguments58['state'] = 'default';
$arguments58['alternativeMarkupIdentifier'] = NULL;
$arguments58['identifier'] = 'actions-edit-delete';
$arguments58['size'] = 'small';

$output52 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output52 .= '
                            </a>
                        ';
return $output52;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('item.delible', $array50);

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = $renderChildrenClosure48;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output29 .= '
                    </div>
                </div>
            ';
return $output29;
};
$arguments23 = array();
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$arguments23['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('item.editable', $array26);
$array25['1'] = ' && ';
$array27 = array (
);$array25['2'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array27);

$expression28 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments23['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments23['__thenClosure'] = $renderChildrenClosure24;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
        </div>
    </div>
</div>
';

return $output0;
}


}
#