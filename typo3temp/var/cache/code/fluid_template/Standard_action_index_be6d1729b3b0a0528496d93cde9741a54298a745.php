<?php

class Standard_action_index_be6d1729b3b0a0528496d93cde9741a54298a745 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<typo3-formengine-container-sitelanguage identifier="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('nameObject', $array1)]);

$output0 .= '">
    <div ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$array4 = array (
);return $renderingContext->getVariableProvider()->getByPath('formGroupAttributes', $array4);
};
$arguments2 = array();
$arguments2['value'] = NULL;

$output0 .= isset($arguments2['value']) ? $arguments2['value'] : $renderChildrenClosure3();

$output0 .= '>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$array7 = array (
);return $renderingContext->getVariableProvider()->getByPath('fieldInformation', $array7);
};
$arguments5 = array();
$arguments5['value'] = NULL;

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '
        <div class="form-group t3js-formengine-validation-marker">
            <div class="typo3-newRecordLink" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['languageKey'] = NULL;
$arguments8['alternativeLanguageKeys'] = NULL;
$arguments8['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.languages.createNew';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output0 .= '">
                <button type="button" class="btn btn-default t3js-create-new-button">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['identifier'] = NULL;
$arguments10['size'] = 'small';
$arguments10['overlay'] = NULL;
$arguments10['state'] = 'default';
$arguments10['alternativeMarkupIdentifier'] = NULL;
$arguments10['identifier'] = 'actions-add';
$arguments10['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
                    ';
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
$arguments12['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.languages.createNew';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output0 .= '
                </button>
            </div>
        </div>
        <div class="input-group form-group t3js-formengine-validation-marker">
            <select id="';
$array14 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectorConfigutation.identifier', $array14)]);

$output0 .= '" class="form-select t3js-create-new-selector" size="';
$array15 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectorConfigutation.size', $array15)]);

$output0 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                    <option value="';
$array20 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('option.value', $array20)]);

$output19 .= '">';
$array21 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('option.label', $array21)]);

$output19 .= '</option>
                ';
return $output19;
};
$arguments16 = array();
$arguments16['each'] = NULL;
$arguments16['as'] = NULL;
$arguments16['key'] = NULL;
$arguments16['reverse'] = false;
$arguments16['iteration'] = NULL;
$array18 = array (
);$arguments16['each'] = $renderingContext->getVariableProvider()->getByPath('selectorConfigutation.options', $array18);
$arguments16['as'] = 'option';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
            </select>
        </div>
        <div class="panel-group panel-hover" id="';
$array22 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('inlineRecords.identifier', $array22)]);

$output0 .= '" data-title="';
$array23 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('inlineRecords.title', $array23)]);

$output0 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('inlineRecords.records', $array26);
};
$arguments24 = array();
$arguments24['value'] = NULL;

$output0 .= isset($arguments24['value']) ? $arguments24['value'] : $renderChildrenClosure25();

$output0 .= '
        </div>
        <input type="hidden" class="inlineRecord" name="';
$array27 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('nameForm', $array27)]);

$output0 .= '" value="';
$array28 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('childRecordUids', $array28)]);

$output0 .= '" data-formengine-validation-rules="';
$array29 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationRules', $array29)]);

$output0 .= '" />
    </div>
</typo3-formengine-container-sitelanguage>
';

return $output0;
}


}
#