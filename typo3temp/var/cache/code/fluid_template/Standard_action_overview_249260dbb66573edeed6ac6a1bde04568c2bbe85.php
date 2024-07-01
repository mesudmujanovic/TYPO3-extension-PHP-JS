<?php

class Standard_action_overview_249260dbb66573edeed6ac6a1bde04568c2bbe85 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['key'] = NULL;
$arguments293['id'] = NULL;
$arguments293['default'] = NULL;
$arguments293['arguments'] = NULL;
$arguments293['extensionName'] = NULL;
$arguments293['languageKey'] = NULL;
$arguments293['alternativeLanguageKeys'] = NULL;
$arguments293['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints.listing';

$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext)]);

$output292 .= '
                <ul>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
                    <li>
                        <strong>';
$array299 = array (
);
$output298 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item', $array299)]);

$output298 .= '</strong>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
                            <ul>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
                                    <li>
                                        ';
$array310 = array (
);
$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('schema', $array310)]);

$output309 .= ' (';
$array311 = array (
);
$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count', $array311)]);

$output309 .= ')
                                    </li>
                                ';
return $output309;
};
$arguments306 = array();
$arguments306['each'] = NULL;
$arguments306['as'] = NULL;
$arguments306['key'] = NULL;
$arguments306['reverse'] = false;
$arguments306['iteration'] = NULL;
$array308 = array (
);$arguments306['each'] = $renderingContext->getVariableProvider()->getByPath('schemes', $array308);
$arguments306['key'] = 'schema';
$arguments306['as'] = 'count';

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '
                            </ul>
                        ';
return $output305;
};
$arguments300 = array();
$arguments300['then'] = NULL;
$arguments300['else'] = NULL;
$arguments300['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array302 = array();
$array303 = array (
);$array302['0'] = $renderingContext->getVariableProvider()->getByPath('schemes', $array303);

$expression304 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments300['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression304(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array302)
					),
					$renderingContext
				);
$arguments300['__thenClosure'] = $renderChildrenClosure301;

$output298 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output298 .= '
                    </li>
                ';
return $output298;
};
$arguments295 = array();
$arguments295['each'] = NULL;
$arguments295['as'] = NULL;
$arguments295['key'] = NULL;
$arguments295['reverse'] = false;
$arguments295['iteration'] = NULL;
$array297 = array (
);$arguments295['each'] = $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints', $array297);
$arguments295['key'] = 'item';
$arguments295['as'] = 'schemes';

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output292 .= '
                </ul>
            ';
return $output292;
};
$arguments288 = array();
$arguments288['message'] = NULL;
$arguments288['title'] = NULL;
$arguments288['state'] = -2;
$arguments288['iconName'] = NULL;
$arguments288['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['key'] = NULL;
$arguments290['id'] = NULL;
$arguments290['default'] = NULL;
$arguments290['arguments'] = NULL;
$arguments290['extensionName'] = NULL;
$arguments290['languageKey'] = NULL;
$arguments290['alternativeLanguageKeys'] = NULL;
$arguments290['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints';
$arguments288['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);
$arguments288['state'] = 1;
$renderChildrenClosure289 = ($arguments288['message'] !== null) ? function() use ($arguments288) { return $arguments288['message']; } : $renderChildrenClosure289;
$output287 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
        ';
return $output287;
};
$arguments282 = array();
$arguments282['then'] = NULL;
$arguments282['else'] = NULL;
$arguments282['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['0'] = $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints', $array285);

$expression286 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments282['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array284)
					),
					$renderingContext
				);
$arguments282['__thenClosure'] = $renderChildrenClosure283;

$output281 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output281 .= '
        <div class="table-fit">
            <table class="table table-striped table-hover table-sm">
                <thead>
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['key'] = NULL;
$arguments312['id'] = NULL;
$arguments312['default'] = NULL;
$arguments312['arguments'] = NULL;
$arguments312['extensionName'] = NULL;
$arguments312['languageKey'] = NULL;
$arguments312['alternativeLanguageKeys'] = NULL;
$arguments312['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.site';

$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);

$output281 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['key'] = NULL;
$arguments314['id'] = NULL;
$arguments314['default'] = NULL;
$arguments314['arguments'] = NULL;
$arguments314['extensionName'] = NULL;
$arguments314['languageKey'] = NULL;
$arguments314['alternativeLanguageKeys'] = NULL;
$arguments314['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.configuration';

$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext)]);

$output281 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['key'] = NULL;
$arguments316['id'] = NULL;
$arguments316['default'] = NULL;
$arguments316['arguments'] = NULL;
$arguments316['extensionName'] = NULL;
$arguments316['languageKey'] = NULL;
$arguments316['alternativeLanguageKeys'] = NULL;
$arguments316['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.baseUrl';

$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext)]);

$output281 .= '</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$output321 = '';

$output321 .= '
                    <tr>
                        <td class="nowrap">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output325 = '';

$output325 .= '
                                <span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
$array326 = array (
);
$output325 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.margin', $array326)]);

$output325 .= 'px"></span>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$output379 = '';

$output379 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
$output382 = '';

$output382 .= '
                                        <a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array383 = array (
);
$output382 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array383)]);

$output382 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments384 = array();
$arguments384['table'] = NULL;
$arguments384['row'] = NULL;
$arguments384['size'] = 'small';
$arguments384['alternativeMarkupIdentifier'] = NULL;
$arguments384['table'] = 'pages';
$array386 = array (
);$arguments384['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array386);

$output382 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output382 .= '
                                        </a>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$output415 = '';

$output415 .= '
                                                    ';
$array416 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array416)]);

$output415 .= ' [ID: ';
$array417 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array417)]);

$output415 .= ']
                                                ';
return $output415;
};
$arguments409 = array();
$arguments409['additionalAttributes'] = NULL;
$arguments409['data'] = NULL;
$arguments409['aria'] = NULL;
$arguments409['route'] = NULL;
$arguments409['parameters'] = array (
);
$arguments409['referenceType'] = 'absolute';
$arguments409['name'] = NULL;
$arguments409['rel'] = NULL;
$arguments409['rev'] = NULL;
$arguments409['target'] = NULL;
$arguments409['class'] = NULL;
$arguments409['dir'] = NULL;
$arguments409['id'] = NULL;
$arguments409['lang'] = NULL;
$arguments409['style'] = NULL;
$arguments409['title'] = NULL;
$arguments409['accesskey'] = NULL;
$arguments409['tabindex'] = NULL;
$arguments409['onclick'] = NULL;
$arguments409['route'] = 'site_configuration';
// Rendering Array
$array411 = array();
$array411['action'] = 'edit';
$array412 = array (
);$array411['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array412);
$arguments409['parameters'] = $array411;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments413 = array();
$arguments413['key'] = NULL;
$arguments413['id'] = NULL;
$arguments413['default'] = NULL;
$arguments413['arguments'] = NULL;
$arguments413['extensionName'] = NULL;
$arguments413['languageKey'] = NULL;
$arguments413['alternativeLanguageKeys'] = NULL;
$arguments413['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments409['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output408 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output408 .= '
                                            ';
return $output408;
};
$arguments406 = array();

$output405 .= '';

$output405 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
                                                ';
$array421 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array421)]);

$output420 .= ' [ID: ';
$array422 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array422)]);

$output420 .= ']
                                            ';
return $output420;
};
$arguments418 = array();
$arguments418['if'] = NULL;

$output405 .= '';

$output405 .= '
                                        ';
return $output405;
};
$arguments387 = array();
$arguments387['then'] = NULL;
$arguments387['else'] = NULL;
$arguments387['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array402 = array();
$array403 = array (
);$array402['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array403);

$expression404 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments387['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression404(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array402)
					),
					$renderingContext
				);
$arguments387['__thenClosure'] = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
$output396 = '';

$output396 .= '
                                                    ';
$array397 = array (
);
$output396 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array397)]);

$output396 .= ' [ID: ';
$array398 = array (
);
$output396 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array398)]);

$output396 .= ']
                                                ';
return $output396;
};
$arguments390 = array();
$arguments390['additionalAttributes'] = NULL;
$arguments390['data'] = NULL;
$arguments390['aria'] = NULL;
$arguments390['route'] = NULL;
$arguments390['parameters'] = array (
);
$arguments390['referenceType'] = 'absolute';
$arguments390['name'] = NULL;
$arguments390['rel'] = NULL;
$arguments390['rev'] = NULL;
$arguments390['target'] = NULL;
$arguments390['class'] = NULL;
$arguments390['dir'] = NULL;
$arguments390['id'] = NULL;
$arguments390['lang'] = NULL;
$arguments390['style'] = NULL;
$arguments390['title'] = NULL;
$arguments390['accesskey'] = NULL;
$arguments390['tabindex'] = NULL;
$arguments390['onclick'] = NULL;
$arguments390['route'] = 'site_configuration';
// Rendering Array
$array392 = array();
$array392['action'] = 'edit';
$array393 = array (
);$array392['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array393);
$arguments390['parameters'] = $array392;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['key'] = NULL;
$arguments394['id'] = NULL;
$arguments394['default'] = NULL;
$arguments394['arguments'] = NULL;
$arguments394['extensionName'] = NULL;
$arguments394['languageKey'] = NULL;
$arguments394['alternativeLanguageKeys'] = NULL;
$arguments394['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments390['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output389 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output389 .= '
                                            ';
return $output389;
};
$arguments387['__elseClosures'][] = function() use ($renderingContext, $self) {
$output399 = '';

$output399 .= '
                                                ';
$array400 = array (
);
$output399 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array400)]);

$output399 .= ' [ID: ';
$array401 = array (
);
$output399 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array401)]);

$output399 .= ']
                                            ';
return $output399;
};

$output382 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext);

$output382 .= '
                                    ';
return $output382;
};
$arguments380 = array();

$output379 .= '';

$output379 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$output425 = '';

$output425 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments426 = array();
$arguments426['table'] = NULL;
$arguments426['row'] = NULL;
$arguments426['size'] = 'small';
$arguments426['alternativeMarkupIdentifier'] = NULL;
$arguments426['table'] = 'pages';
$array428 = array (
);$arguments426['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array428);

$output425 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output425 .= '
                                        ';
$array429 = array (
);
$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array429)]);

$output425 .= '<br>
                                    ';
return $output425;
};
$arguments423 = array();
$arguments423['if'] = NULL;

$output379 .= '';

$output379 .= '
                                ';
return $output379;
};
$arguments327 = array();
$arguments327['then'] = NULL;
$arguments327['else'] = NULL;
$arguments327['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array375 = array();
$array376 = array (
);$array375['0'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array376);
$array375['1'] = ' == ';
$array377 = array (
);$array375['2'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array377);

$expression378 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments327['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression378(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array375)
					),
					$renderingContext
				);
$arguments327['__thenClosure'] = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
                                        <a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array330 = array (
);
$output329 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array330)]);

$output329 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments331 = array();
$arguments331['table'] = NULL;
$arguments331['row'] = NULL;
$arguments331['size'] = 'small';
$arguments331['alternativeMarkupIdentifier'] = NULL;
$arguments331['table'] = 'pages';
$array333 = array (
);$arguments331['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array333);

$output329 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output329 .= '
                                        </a>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
$output352 = '';

$output352 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output362 = '';

$output362 .= '
                                                    ';
$array363 = array (
);
$output362 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array363)]);

$output362 .= ' [ID: ';
$array364 = array (
);
$output362 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array364)]);

$output362 .= ']
                                                ';
return $output362;
};
$arguments356 = array();
$arguments356['additionalAttributes'] = NULL;
$arguments356['data'] = NULL;
$arguments356['aria'] = NULL;
$arguments356['route'] = NULL;
$arguments356['parameters'] = array (
);
$arguments356['referenceType'] = 'absolute';
$arguments356['name'] = NULL;
$arguments356['rel'] = NULL;
$arguments356['rev'] = NULL;
$arguments356['target'] = NULL;
$arguments356['class'] = NULL;
$arguments356['dir'] = NULL;
$arguments356['id'] = NULL;
$arguments356['lang'] = NULL;
$arguments356['style'] = NULL;
$arguments356['title'] = NULL;
$arguments356['accesskey'] = NULL;
$arguments356['tabindex'] = NULL;
$arguments356['onclick'] = NULL;
$arguments356['route'] = 'site_configuration';
// Rendering Array
$array358 = array();
$array358['action'] = 'edit';
$array359 = array (
);$array358['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array359);
$arguments356['parameters'] = $array358;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['key'] = NULL;
$arguments360['id'] = NULL;
$arguments360['default'] = NULL;
$arguments360['arguments'] = NULL;
$arguments360['extensionName'] = NULL;
$arguments360['languageKey'] = NULL;
$arguments360['alternativeLanguageKeys'] = NULL;
$arguments360['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments356['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output355 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output355 .= '
                                            ';
return $output355;
};
$arguments353 = array();

$output352 .= '';

$output352 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
                                                ';
$array368 = array (
);
$output367 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array368)]);

$output367 .= ' [ID: ';
$array369 = array (
);
$output367 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array369)]);

$output367 .= ']
                                            ';
return $output367;
};
$arguments365 = array();
$arguments365['if'] = NULL;

$output352 .= '';

$output352 .= '
                                        ';
return $output352;
};
$arguments334 = array();
$arguments334['then'] = NULL;
$arguments334['else'] = NULL;
$arguments334['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array349 = array();
$array350 = array (
);$array349['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array350);

$expression351 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments334['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression351(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array349)
					),
					$renderingContext
				);
$arguments334['__thenClosure'] = function() use ($renderingContext, $self) {
$output336 = '';

$output336 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
                                                    ';
$array344 = array (
);
$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array344)]);

$output343 .= ' [ID: ';
$array345 = array (
);
$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array345)]);

$output343 .= ']
                                                ';
return $output343;
};
$arguments337 = array();
$arguments337['additionalAttributes'] = NULL;
$arguments337['data'] = NULL;
$arguments337['aria'] = NULL;
$arguments337['route'] = NULL;
$arguments337['parameters'] = array (
);
$arguments337['referenceType'] = 'absolute';
$arguments337['name'] = NULL;
$arguments337['rel'] = NULL;
$arguments337['rev'] = NULL;
$arguments337['target'] = NULL;
$arguments337['class'] = NULL;
$arguments337['dir'] = NULL;
$arguments337['id'] = NULL;
$arguments337['lang'] = NULL;
$arguments337['style'] = NULL;
$arguments337['title'] = NULL;
$arguments337['accesskey'] = NULL;
$arguments337['tabindex'] = NULL;
$arguments337['onclick'] = NULL;
$arguments337['route'] = 'site_configuration';
// Rendering Array
$array339 = array();
$array339['action'] = 'edit';
$array340 = array (
);$array339['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array340);
$arguments337['parameters'] = $array339;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['key'] = NULL;
$arguments341['id'] = NULL;
$arguments341['default'] = NULL;
$arguments341['arguments'] = NULL;
$arguments341['extensionName'] = NULL;
$arguments341['languageKey'] = NULL;
$arguments341['alternativeLanguageKeys'] = NULL;
$arguments341['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments337['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output336 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output336 .= '
                                            ';
return $output336;
};
$arguments334['__elseClosures'][] = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
                                                ';
$array347 = array (
);
$output346 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array347)]);

$output346 .= ' [ID: ';
$array348 = array (
);
$output346 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array348)]);

$output346 .= ']
                                            ';
return $output346;
};

$output329 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output329 .= '
                                    ';
return $output329;
};
$arguments327['__elseClosures'][] = function() use ($renderingContext, $self) {
$output370 = '';

$output370 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments371 = array();
$arguments371['table'] = NULL;
$arguments371['row'] = NULL;
$arguments371['size'] = 'small';
$arguments371['alternativeMarkupIdentifier'] = NULL;
$arguments371['table'] = 'pages';
$array373 = array (
);$arguments371['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array373);

$output370 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output370 .= '
                                        ';
$array374 = array (
);
$output370 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array374)]);

$output370 .= '<br>
                                    ';
return $output370;
};

$output325 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output325 .= '
                            ';
return $output325;
};
$arguments322 = array();
$arguments322['each'] = NULL;
$arguments322['as'] = NULL;
$arguments322['key'] = NULL;
$arguments322['reverse'] = false;
$arguments322['iteration'] = NULL;
$array324 = array (
);$arguments322['each'] = $renderingContext->getVariableProvider()->getByPath('page.rootline', $array324);
$arguments322['as'] = 'rootLinePage';
$arguments322['iteration'] = 'i';

$output321 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output321 .= '
                        </td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
$output445 = '';

$output445 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
$output448 = '';

$output448 .= '
                                    <code>';
$array449 = array (
);
$output448 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array449)]);

$output448 .= '</code>
                                ';
return $output448;
};
$arguments446 = array();

$output445 .= '';

$output445 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$output452 = '';

$output452 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$output457 = '';

$output457 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments458 = array();
$arguments458['key'] = NULL;
$arguments458['id'] = NULL;
$arguments458['default'] = NULL;
$arguments458['arguments'] = NULL;
$arguments458['extensionName'] = NULL;
$arguments458['languageKey'] = NULL;
$arguments458['alternativeLanguageKeys'] = NULL;
$arguments458['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output457 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext)]);

$output457 .= '
                                        ';
return $output457;
};
$arguments453 = array();
$arguments453['additionalAttributes'] = NULL;
$arguments453['data'] = NULL;
$arguments453['aria'] = NULL;
$arguments453['route'] = NULL;
$arguments453['parameters'] = array (
);
$arguments453['referenceType'] = 'absolute';
$arguments453['name'] = NULL;
$arguments453['rel'] = NULL;
$arguments453['rev'] = NULL;
$arguments453['target'] = NULL;
$arguments453['class'] = NULL;
$arguments453['dir'] = NULL;
$arguments453['id'] = NULL;
$arguments453['lang'] = NULL;
$arguments453['style'] = NULL;
$arguments453['title'] = NULL;
$arguments453['accesskey'] = NULL;
$arguments453['tabindex'] = NULL;
$arguments453['onclick'] = NULL;
$arguments453['route'] = 'site_configuration';
// Rendering Array
$array455 = array();
$array455['action'] = 'edit';
$array456 = array (
);$array455['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array456);
$arguments453['parameters'] = $array455;
$arguments453['title'] = 'Create configuration';
$arguments453['class'] = 'btn btn-primary';

$output452 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output452 .= '
                                    </div>
                                ';
return $output452;
};
$arguments450 = array();
$arguments450['if'] = NULL;

$output445 .= '';

$output445 .= '
                            ';
return $output445;
};
$arguments430 = array();
$arguments430['then'] = NULL;
$arguments430['else'] = NULL;
$arguments430['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array442 = array();
$array443 = array (
);$array442['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array443);

$expression444 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments430['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression444(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array442)
					),
					$renderingContext
				);
$arguments430['__thenClosure'] = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
                                    <code>';
$array433 = array (
);
$output432 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array433)]);

$output432 .= '</code>
                                ';
return $output432;
};
$arguments430['__elseClosures'][] = function() use ($renderingContext, $self) {
$output434 = '';

$output434 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$output439 = '';

$output439 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments440 = array();
$arguments440['key'] = NULL;
$arguments440['id'] = NULL;
$arguments440['default'] = NULL;
$arguments440['arguments'] = NULL;
$arguments440['extensionName'] = NULL;
$arguments440['languageKey'] = NULL;
$arguments440['alternativeLanguageKeys'] = NULL;
$arguments440['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output439 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext)]);

$output439 .= '
                                        ';
return $output439;
};
$arguments435 = array();
$arguments435['additionalAttributes'] = NULL;
$arguments435['data'] = NULL;
$arguments435['aria'] = NULL;
$arguments435['route'] = NULL;
$arguments435['parameters'] = array (
);
$arguments435['referenceType'] = 'absolute';
$arguments435['name'] = NULL;
$arguments435['rel'] = NULL;
$arguments435['rev'] = NULL;
$arguments435['target'] = NULL;
$arguments435['class'] = NULL;
$arguments435['dir'] = NULL;
$arguments435['id'] = NULL;
$arguments435['lang'] = NULL;
$arguments435['style'] = NULL;
$arguments435['title'] = NULL;
$arguments435['accesskey'] = NULL;
$arguments435['tabindex'] = NULL;
$arguments435['onclick'] = NULL;
$arguments435['route'] = 'site_configuration';
// Rendering Array
$array437 = array();
$array437['action'] = 'edit';
$array438 = array (
);$array437['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array438);
$arguments435['parameters'] = $array437;
$arguments435['title'] = 'Create configuration';
$arguments435['class'] = 'btn btn-primary';

$output434 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output434 .= '
                                    </div>
                                ';
return $output434;
};

$output321 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output321 .= '
                        </td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
$output465 = '';

$output465 .= '
                                <table class="table table-striped table-no-borders">
                                    <tr>
                                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments466 = array();
$arguments466['key'] = NULL;
$arguments466['id'] = NULL;
$arguments466['default'] = NULL;
$arguments466['arguments'] = NULL;
$arguments466['extensionName'] = NULL;
$arguments466['languageKey'] = NULL;
$arguments466['alternativeLanguageKeys'] = NULL;
$arguments466['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site_language.language';

$output465 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext)]);

$output465 .= '</th>
                                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['key'] = NULL;
$arguments468['id'] = NULL;
$arguments468['default'] = NULL;
$arguments468['arguments'] = NULL;
$arguments468['extensionName'] = NULL;
$arguments468['languageKey'] = NULL;
$arguments468['alternativeLanguageKeys'] = NULL;
$arguments468['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.fullUrlPrefix';

$output465 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext)]);

$output465 .= '</th>
                                    </tr>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$output473 = '';

$output473 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
$output493 = '';

$output493 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$output496 = '';

$output496 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments497 = array();
$arguments497['identifier'] = NULL;
$arguments497['size'] = 'small';
$arguments497['overlay'] = NULL;
$arguments497['state'] = 'default';
$arguments497['alternativeMarkupIdentifier'] = NULL;
$array499 = array (
);$arguments497['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array499);

$output496 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext);

$output496 .= ' ';
$array500 = array (
);
$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array500)]);

$output496 .= ' <code class="m-0">[';
$array501 = array (
);
$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId', $array501)]);

$output496 .= ']</code>
                                                ';
return $output496;
};
$arguments494 = array();

$output493 .= '';

$output493 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
$output504 = '';

$output504 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['identifier'] = NULL;
$arguments505['size'] = 'small';
$arguments505['overlay'] = NULL;
$arguments505['state'] = 'default';
$arguments505['alternativeMarkupIdentifier'] = NULL;
$array507 = array (
);$arguments505['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array507);
$arguments505['overlay'] = 'overlay-hidden';

$output504 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output504 .= ' <span class="text-muted">';
$array508 = array (
);
$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array508)]);

$output504 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments509 = array();
$arguments509['key'] = NULL;
$arguments509['id'] = NULL;
$arguments509['default'] = NULL;
$arguments509['arguments'] = NULL;
$arguments509['extensionName'] = NULL;
$arguments509['languageKey'] = NULL;
$arguments509['alternativeLanguageKeys'] = NULL;
$arguments509['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext)]);

$output504 .= ') <code class="m-0">[';
$array511 = array (
);
$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId', $array511)]);

$output504 .= ']</code></span>
                                                ';
return $output504;
};
$arguments502 = array();
$arguments502['if'] = NULL;

$output493 .= '';

$output493 .= '
                                            ';
return $output493;
};
$arguments474 = array();
$arguments474['then'] = NULL;
$arguments474['else'] = NULL;
$arguments474['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array490 = array();
$array491 = array (
);$array490['0'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.enabled', $array491);

$expression492 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments474['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression492(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array490)
					),
					$renderingContext
				);
$arguments474['__thenClosure'] = function() use ($renderingContext, $self) {
$output476 = '';

$output476 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments477 = array();
$arguments477['identifier'] = NULL;
$arguments477['size'] = 'small';
$arguments477['overlay'] = NULL;
$arguments477['state'] = 'default';
$arguments477['alternativeMarkupIdentifier'] = NULL;
$array479 = array (
);$arguments477['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array479);

$output476 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext);

$output476 .= ' ';
$array480 = array (
);
$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array480)]);

$output476 .= ' <code class="m-0">[';
$array481 = array (
);
$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId', $array481)]);

$output476 .= ']</code>
                                                ';
return $output476;
};
$arguments474['__elseClosures'][] = function() use ($renderingContext, $self) {
$output482 = '';

$output482 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments483 = array();
$arguments483['identifier'] = NULL;
$arguments483['size'] = 'small';
$arguments483['overlay'] = NULL;
$arguments483['state'] = 'default';
$arguments483['alternativeMarkupIdentifier'] = NULL;
$array485 = array (
);$arguments483['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array485);
$arguments483['overlay'] = 'overlay-hidden';

$output482 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);

$output482 .= ' <span class="text-muted">';
$array486 = array (
);
$output482 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array486)]);

$output482 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments487 = array();
$arguments487['key'] = NULL;
$arguments487['id'] = NULL;
$arguments487['default'] = NULL;
$arguments487['arguments'] = NULL;
$arguments487['extensionName'] = NULL;
$arguments487['languageKey'] = NULL;
$arguments487['alternativeLanguageKeys'] = NULL;
$arguments487['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output482 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext)]);

$output482 .= ') <code class="m-0">[';
$array489 = array (
);
$output482 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId', $array489)]);

$output482 .= ']</code></span>
                                                ';
return $output482;
};

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output473 .= '
                                        </td>
                                        <td><a href="';
$array512 = array (
);
$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array512)]);

$output473 .= '" target="_blank">';
$array513 = array (
);
$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array513)]);

$output473 .= '</a></td>
                                    </tr>
                                ';
return $output473;
};
$arguments470 = array();
$arguments470['each'] = NULL;
$arguments470['as'] = NULL;
$arguments470['key'] = NULL;
$arguments470['reverse'] = false;
$arguments470['iteration'] = NULL;
$array472 = array (
);$arguments470['each'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages', $array472);
$arguments470['as'] = 'siteLanguage';

$output465 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output465 .= '
                                </table>
                            ';
return $output465;
};
$arguments460 = array();
$arguments460['then'] = NULL;
$arguments460['else'] = NULL;
$arguments460['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array462 = array();
$array463 = array (
);$array462['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration', $array463);

$expression464 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments460['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression464(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array462)
					),
					$renderingContext
				);
$arguments460['__thenClosure'] = $renderChildrenClosure461;

$output321 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);

$output321 .= '
                        </td>
                        <td class="col-control nowrap">
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$output519 = '';

$output519 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$output526 = '';

$output526 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure528 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments527 = array();
$arguments527['identifier'] = NULL;
$arguments527['size'] = 'small';
$arguments527['overlay'] = NULL;
$arguments527['state'] = 'default';
$arguments527['alternativeMarkupIdentifier'] = NULL;
$arguments527['identifier'] = 'actions-open';

$output526 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext);

$output526 .= '
                                    ';
return $output526;
};
$arguments520 = array();
$arguments520['additionalAttributes'] = NULL;
$arguments520['data'] = NULL;
$arguments520['aria'] = NULL;
$arguments520['route'] = NULL;
$arguments520['parameters'] = array (
);
$arguments520['referenceType'] = 'absolute';
$arguments520['name'] = NULL;
$arguments520['rel'] = NULL;
$arguments520['rev'] = NULL;
$arguments520['target'] = NULL;
$arguments520['class'] = NULL;
$arguments520['dir'] = NULL;
$arguments520['id'] = NULL;
$arguments520['lang'] = NULL;
$arguments520['style'] = NULL;
$arguments520['title'] = NULL;
$arguments520['accesskey'] = NULL;
$arguments520['tabindex'] = NULL;
$arguments520['onclick'] = NULL;
$arguments520['route'] = 'site_configuration';
// Rendering Array
$array522 = array();
$array522['action'] = 'edit';
$array523 = array (
);$array522['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array523);
$arguments520['parameters'] = $array522;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments524 = array();
$arguments524['key'] = NULL;
$arguments524['id'] = NULL;
$arguments524['default'] = NULL;
$arguments524['arguments'] = NULL;
$arguments524['extensionName'] = NULL;
$arguments524['languageKey'] = NULL;
$arguments524['alternativeLanguageKeys'] = NULL;
$arguments524['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments520['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);
$arguments520['class'] = 'btn btn-default';

$output519 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output519 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
$output540 = '';

$output540 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments541 = array();
$arguments541['identifier'] = NULL;
$arguments541['size'] = 'small';
$arguments541['overlay'] = NULL;
$arguments541['state'] = 'default';
$arguments541['alternativeMarkupIdentifier'] = NULL;
$arguments541['identifier'] = 'actions-delete';

$output540 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext);

$output540 .= '
                                    ';
return $output540;
};
$arguments529 = array();
$arguments529['additionalAttributes'] = NULL;
$arguments529['data'] = NULL;
$arguments529['aria'] = NULL;
$arguments529['route'] = NULL;
$arguments529['parameters'] = array (
);
$arguments529['referenceType'] = 'absolute';
$arguments529['name'] = NULL;
$arguments529['rel'] = NULL;
$arguments529['rev'] = NULL;
$arguments529['target'] = NULL;
$arguments529['class'] = NULL;
$arguments529['dir'] = NULL;
$arguments529['id'] = NULL;
$arguments529['lang'] = NULL;
$arguments529['style'] = NULL;
$arguments529['title'] = NULL;
$arguments529['accesskey'] = NULL;
$arguments529['tabindex'] = NULL;
$arguments529['onclick'] = NULL;
$arguments529['route'] = 'site_configuration';
// Rendering Array
$array531 = array();
$array531['action'] = 'delete';
$array532 = array (
);$array531['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array532);
$arguments529['parameters'] = $array531;
$arguments529['class'] = 'btn btn-default t3js-modal-trigger';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments533 = array();
$arguments533['key'] = NULL;
$arguments533['id'] = NULL;
$arguments533['default'] = NULL;
$arguments533['arguments'] = NULL;
$arguments533['extensionName'] = NULL;
$arguments533['languageKey'] = NULL;
$arguments533['alternativeLanguageKeys'] = NULL;
$arguments533['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$arguments529['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);
// Rendering Array
$array535 = array();
$array535['severity'] = 'error';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments536 = array();
$arguments536['key'] = NULL;
$arguments536['id'] = NULL;
$arguments536['default'] = NULL;
$arguments536['arguments'] = NULL;
$arguments536['extensionName'] = NULL;
$arguments536['languageKey'] = NULL;
$arguments536['alternativeLanguageKeys'] = NULL;
$arguments536['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$array535['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure539 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments538 = array();
$arguments538['key'] = NULL;
$arguments538['id'] = NULL;
$arguments538['default'] = NULL;
$arguments538['arguments'] = NULL;
$arguments538['extensionName'] = NULL;
$arguments538['languageKey'] = NULL;
$arguments538['alternativeLanguageKeys'] = NULL;
$arguments538['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';
$array535['button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments538, $renderChildrenClosure539, $renderingContext);
$arguments529['data'] = $array535;

$output519 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output519 .= '
                                ';
return $output519;
};
$arguments514 = array();
$arguments514['then'] = NULL;
$arguments514['else'] = NULL;
$arguments514['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array516 = array();
$array517 = array (
);$array516['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array517);

$expression518 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments514['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression518(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array516)
					),
					$renderingContext
				);
$arguments514['__thenClosure'] = $renderChildrenClosure515;

$output321 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output321 .= '
                            </div>
                        </td>
                    </tr>
                ';
return $output321;
};
$arguments318 = array();
$arguments318['each'] = NULL;
$arguments318['as'] = NULL;
$arguments318['key'] = NULL;
$arguments318['reverse'] = false;
$arguments318['iteration'] = NULL;
$array320 = array (
);$arguments318['each'] = $renderingContext->getVariableProvider()->getByPath('pages', $array320);
$arguments318['as'] = 'page';

$output281 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output281 .= '
                </tbody>
            </table>
        </div>
    ';
return $output281;
};
$arguments279 = array();

$output278 .= '';

$output278 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure544 = function() use ($renderingContext, $self) {
$output545 = '';

$output545 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output550 = '';

$output550 .= '
            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments551 = array();
$arguments551['key'] = NULL;
$arguments551['id'] = NULL;
$arguments551['default'] = NULL;
$arguments551['arguments'] = NULL;
$arguments551['extensionName'] = NULL;
$arguments551['languageKey'] = NULL;
$arguments551['alternativeLanguageKeys'] = NULL;
$arguments551['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.message';

$output550 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments551, $renderChildrenClosure552, $renderingContext)]);

$output550 .= '</p>
        ';
return $output550;
};
$arguments546 = array();
$arguments546['message'] = NULL;
$arguments546['title'] = NULL;
$arguments546['state'] = -2;
$arguments546['iconName'] = NULL;
$arguments546['disableIcon'] = false;
$arguments546['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments548 = array();
$arguments548['key'] = NULL;
$arguments548['id'] = NULL;
$arguments548['default'] = NULL;
$arguments548['arguments'] = NULL;
$arguments548['extensionName'] = NULL;
$arguments548['languageKey'] = NULL;
$arguments548['alternativeLanguageKeys'] = NULL;
$arguments548['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.title';
$arguments546['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext);
$renderChildrenClosure547 = ($arguments546['message'] !== null) ? function() use ($arguments546) { return $arguments546['message']; } : $renderChildrenClosure547;
$output545 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments546, $renderChildrenClosure547, $renderingContext);

$output545 .= '
    ';
return $output545;
};
$arguments543 = array();
$arguments543['if'] = NULL;

$output278 .= '';

$output278 .= '
';
return $output278;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array275 = array();
$array276 = array (
);$array275['0'] = $renderingContext->getVariableProvider()->getByPath('pages', $array276);

$expression277 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression277(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array275)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints.listing';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '
                <ul>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                    <li>
                        <strong>';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item', $array23)]);

$output22 .= '</strong>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
                            <ul>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                                    <li>
                                        ';
$array34 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('schema', $array34)]);

$output33 .= ' (';
$array35 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count', $array35)]);

$output33 .= ')
                                    </li>
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
);$arguments30['each'] = $renderingContext->getVariableProvider()->getByPath('schemes', $array32);
$arguments30['key'] = 'schema';
$arguments30['as'] = 'count';

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
                            </ul>
                        ';
return $output29;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('schemes', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output22 .= '
                    </li>
                ';
return $output22;
};
$arguments19 = array();
$arguments19['each'] = NULL;
$arguments19['as'] = NULL;
$arguments19['key'] = NULL;
$arguments19['reverse'] = false;
$arguments19['iteration'] = NULL;
$array21 = array (
);$arguments19['each'] = $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints', $array21);
$arguments19['key'] = 'item';
$arguments19['as'] = 'schemes';

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output16 .= '
                </ul>
            ';
return $output16;
};
$arguments12 = array();
$arguments12['message'] = NULL;
$arguments12['title'] = NULL;
$arguments12['state'] = -2;
$arguments12['iconName'] = NULL;
$arguments12['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['languageKey'] = NULL;
$arguments14['alternativeLanguageKeys'] = NULL;
$arguments14['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints';
$arguments12['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
$arguments12['state'] = 1;
$renderChildrenClosure13 = ($arguments12['message'] !== null) ? function() use ($arguments12) { return $arguments12['message']; } : $renderChildrenClosure13;
$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
        ';
return $output11;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['0'] = $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints', $array9);

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = $renderChildrenClosure7;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
        <div class="table-fit">
            <table class="table table-striped table-hover table-sm">
                <thead>
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['languageKey'] = NULL;
$arguments36['alternativeLanguageKeys'] = NULL;
$arguments36['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.site';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output5 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['languageKey'] = NULL;
$arguments38['alternativeLanguageKeys'] = NULL;
$arguments38['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.configuration';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output5 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$arguments40['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.baseUrl';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output5 .= '</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                    <tr>
                        <td class="nowrap">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                                <span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
$array50 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.margin', $array50)]);

$output49 .= 'px"></span>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                                        <a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array107 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array107)]);

$output106 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['table'] = NULL;
$arguments108['row'] = NULL;
$arguments108['size'] = 'small';
$arguments108['alternativeMarkupIdentifier'] = NULL;
$arguments108['table'] = 'pages';
$array110 = array (
);$arguments108['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array110);

$output106 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output106 .= '
                                        </a>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                                                    ';
$array140 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array140)]);

$output139 .= ' [ID: ';
$array141 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array141)]);

$output139 .= ']
                                                ';
return $output139;
};
$arguments133 = array();
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['aria'] = NULL;
$arguments133['route'] = NULL;
$arguments133['parameters'] = array (
);
$arguments133['referenceType'] = 'absolute';
$arguments133['name'] = NULL;
$arguments133['rel'] = NULL;
$arguments133['rev'] = NULL;
$arguments133['target'] = NULL;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['route'] = 'site_configuration';
// Rendering Array
$array135 = array();
$array135['action'] = 'edit';
$array136 = array (
);$array135['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array136);
$arguments133['parameters'] = $array135;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['languageKey'] = NULL;
$arguments137['alternativeLanguageKeys'] = NULL;
$arguments137['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments133['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
                                            ';
return $output132;
};
$arguments130 = array();

$output129 .= '';

$output129 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
                                                ';
$array145 = array (
);
$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array145)]);

$output144 .= ' [ID: ';
$array146 = array (
);
$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array146)]);

$output144 .= ']
                                            ';
return $output144;
};
$arguments142 = array();
$arguments142['if'] = NULL;

$output129 .= '';

$output129 .= '
                                        ';
return $output129;
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array127);

$expression128 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                                                    ';
$array121 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array121)]);

$output120 .= ' [ID: ';
$array122 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array122)]);

$output120 .= ']
                                                ';
return $output120;
};
$arguments114 = array();
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['aria'] = NULL;
$arguments114['route'] = NULL;
$arguments114['parameters'] = array (
);
$arguments114['referenceType'] = 'absolute';
$arguments114['name'] = NULL;
$arguments114['rel'] = NULL;
$arguments114['rev'] = NULL;
$arguments114['target'] = NULL;
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['route'] = 'site_configuration';
// Rendering Array
$array116 = array();
$array116['action'] = 'edit';
$array117 = array (
);$array116['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array117);
$arguments114['parameters'] = $array116;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['languageKey'] = NULL;
$arguments118['alternativeLanguageKeys'] = NULL;
$arguments118['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments114['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
                                            ';
return $output113;
};
$arguments111['__elseClosures'][] = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
                                                ';
$array124 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array124)]);

$output123 .= ' [ID: ';
$array125 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array125)]);

$output123 .= ']
                                            ';
return $output123;
};

$output106 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output106 .= '
                                    ';
return $output106;
};
$arguments104 = array();

$output103 .= '';

$output103 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['table'] = NULL;
$arguments150['row'] = NULL;
$arguments150['size'] = 'small';
$arguments150['alternativeMarkupIdentifier'] = NULL;
$arguments150['table'] = 'pages';
$array152 = array (
);$arguments150['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array152);

$output149 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
                                        ';
$array153 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array153)]);

$output149 .= '<br>
                                    ';
return $output149;
};
$arguments147 = array();
$arguments147['if'] = NULL;

$output103 .= '';

$output103 .= '
                                ';
return $output103;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array100);
$array99['1'] = ' == ';
$array101 = array (
);$array99['2'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array101);

$expression102 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                                        <a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array54 = array (
);
$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array54)]);

$output53 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['table'] = NULL;
$arguments55['row'] = NULL;
$arguments55['size'] = 'small';
$arguments55['alternativeMarkupIdentifier'] = NULL;
$arguments55['table'] = 'pages';
$array57 = array (
);$arguments55['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array57);

$output53 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output53 .= '
                                        </a>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                                                    ';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array87)]);

$output86 .= ' [ID: ';
$array88 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array88)]);

$output86 .= ']
                                                ';
return $output86;
};
$arguments80 = array();
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['aria'] = NULL;
$arguments80['route'] = NULL;
$arguments80['parameters'] = array (
);
$arguments80['referenceType'] = 'absolute';
$arguments80['name'] = NULL;
$arguments80['rel'] = NULL;
$arguments80['rev'] = NULL;
$arguments80['target'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['route'] = 'site_configuration';
// Rendering Array
$array82 = array();
$array82['action'] = 'edit';
$array83 = array (
);$array82['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array83);
$arguments80['parameters'] = $array82;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['languageKey'] = NULL;
$arguments84['alternativeLanguageKeys'] = NULL;
$arguments84['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments80['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
                                            ';
return $output79;
};
$arguments77 = array();

$output76 .= '';

$output76 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                                                ';
$array92 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array92)]);

$output91 .= ' [ID: ';
$array93 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array93)]);

$output91 .= ']
                                            ';
return $output91;
};
$arguments89 = array();
$arguments89['if'] = NULL;

$output76 .= '';

$output76 .= '
                                        ';
return $output76;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array74);

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments58['__thenClosure'] = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                                                    ';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array68)]);

$output67 .= ' [ID: ';
$array69 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array69)]);

$output67 .= ']
                                                ';
return $output67;
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['aria'] = NULL;
$arguments61['route'] = NULL;
$arguments61['parameters'] = array (
);
$arguments61['referenceType'] = 'absolute';
$arguments61['name'] = NULL;
$arguments61['rel'] = NULL;
$arguments61['rev'] = NULL;
$arguments61['target'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['route'] = 'site_configuration';
// Rendering Array
$array63 = array();
$array63['action'] = 'edit';
$array64 = array (
);$array63['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array64);
$arguments61['parameters'] = $array63;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['key'] = NULL;
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['languageKey'] = NULL;
$arguments65['alternativeLanguageKeys'] = NULL;
$arguments65['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments61['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                                            ';
return $output60;
};
$arguments58['__elseClosures'][] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                                                ';
$array71 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array71)]);

$output70 .= ' [ID: ';
$array72 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array72)]);

$output70 .= ']
                                            ';
return $output70;
};

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output53 .= '
                                    ';
return $output53;
};
$arguments51['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['table'] = NULL;
$arguments95['row'] = NULL;
$arguments95['size'] = 'small';
$arguments95['alternativeMarkupIdentifier'] = NULL;
$arguments95['table'] = 'pages';
$array97 = array (
);$arguments95['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array97);

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
                                        ';
$array98 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array98)]);

$output94 .= '<br>
                                    ';
return $output94;
};

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output49 .= '
                            ';
return $output49;
};
$arguments46 = array();
$arguments46['each'] = NULL;
$arguments46['as'] = NULL;
$arguments46['key'] = NULL;
$arguments46['reverse'] = false;
$arguments46['iteration'] = NULL;
$array48 = array (
);$arguments46['each'] = $renderingContext->getVariableProvider()->getByPath('page.rootline', $array48);
$arguments46['as'] = 'rootLinePage';
$arguments46['iteration'] = 'i';

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
                        </td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
                                    <code>';
$array173 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array173)]);

$output172 .= '</code>
                                ';
return $output172;
};
$arguments170 = array();

$output169 .= '';

$output169 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['languageKey'] = NULL;
$arguments182['alternativeLanguageKeys'] = NULL;
$arguments182['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);

$output181 .= '
                                        ';
return $output181;
};
$arguments177 = array();
$arguments177['additionalAttributes'] = NULL;
$arguments177['data'] = NULL;
$arguments177['aria'] = NULL;
$arguments177['route'] = NULL;
$arguments177['parameters'] = array (
);
$arguments177['referenceType'] = 'absolute';
$arguments177['name'] = NULL;
$arguments177['rel'] = NULL;
$arguments177['rev'] = NULL;
$arguments177['target'] = NULL;
$arguments177['class'] = NULL;
$arguments177['dir'] = NULL;
$arguments177['id'] = NULL;
$arguments177['lang'] = NULL;
$arguments177['style'] = NULL;
$arguments177['title'] = NULL;
$arguments177['accesskey'] = NULL;
$arguments177['tabindex'] = NULL;
$arguments177['onclick'] = NULL;
$arguments177['route'] = 'site_configuration';
// Rendering Array
$array179 = array();
$array179['action'] = 'edit';
$array180 = array (
);$array179['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array180);
$arguments177['parameters'] = $array179;
$arguments177['title'] = 'Create configuration';
$arguments177['class'] = 'btn btn-primary';

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '
                                    </div>
                                ';
return $output176;
};
$arguments174 = array();
$arguments174['if'] = NULL;

$output169 .= '';

$output169 .= '
                            ';
return $output169;
};
$arguments154 = array();
$arguments154['then'] = NULL;
$arguments154['else'] = NULL;
$arguments154['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array167);

$expression168 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments154['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression168(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
$arguments154['__thenClosure'] = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
                                    <code>';
$array157 = array (
);
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array157)]);

$output156 .= '</code>
                                ';
return $output156;
};
$arguments154['__elseClosures'][] = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['key'] = NULL;
$arguments164['id'] = NULL;
$arguments164['default'] = NULL;
$arguments164['arguments'] = NULL;
$arguments164['extensionName'] = NULL;
$arguments164['languageKey'] = NULL;
$arguments164['alternativeLanguageKeys'] = NULL;
$arguments164['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext)]);

$output163 .= '
                                        ';
return $output163;
};
$arguments159 = array();
$arguments159['additionalAttributes'] = NULL;
$arguments159['data'] = NULL;
$arguments159['aria'] = NULL;
$arguments159['route'] = NULL;
$arguments159['parameters'] = array (
);
$arguments159['referenceType'] = 'absolute';
$arguments159['name'] = NULL;
$arguments159['rel'] = NULL;
$arguments159['rev'] = NULL;
$arguments159['target'] = NULL;
$arguments159['class'] = NULL;
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['title'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$arguments159['route'] = 'site_configuration';
// Rendering Array
$array161 = array();
$array161['action'] = 'edit';
$array162 = array (
);$array161['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array162);
$arguments159['parameters'] = $array161;
$arguments159['title'] = 'Create configuration';
$arguments159['class'] = 'btn btn-primary';

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
                                    </div>
                                ';
return $output158;
};

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output45 .= '
                        </td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
                                <table class="table table-striped table-no-borders">
                                    <tr>
                                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['key'] = NULL;
$arguments190['id'] = NULL;
$arguments190['default'] = NULL;
$arguments190['arguments'] = NULL;
$arguments190['extensionName'] = NULL;
$arguments190['languageKey'] = NULL;
$arguments190['alternativeLanguageKeys'] = NULL;
$arguments190['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site_language.language';

$output189 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output189 .= '</th>
                                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['key'] = NULL;
$arguments192['id'] = NULL;
$arguments192['default'] = NULL;
$arguments192['arguments'] = NULL;
$arguments192['extensionName'] = NULL;
$arguments192['languageKey'] = NULL;
$arguments192['alternativeLanguageKeys'] = NULL;
$arguments192['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.fullUrlPrefix';

$output189 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext)]);

$output189 .= '</th>
                                    </tr>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['identifier'] = NULL;
$arguments221['size'] = 'small';
$arguments221['overlay'] = NULL;
$arguments221['state'] = 'default';
$arguments221['alternativeMarkupIdentifier'] = NULL;
$array223 = array (
);$arguments221['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array223);

$output220 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= ' ';
$array224 = array (
);
$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array224)]);

$output220 .= ' <code class="m-0">[';
$array225 = array (
);
$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId', $array225)]);

$output220 .= ']</code>
                                                ';
return $output220;
};
$arguments218 = array();

$output217 .= '';

$output217 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['identifier'] = NULL;
$arguments229['size'] = 'small';
$arguments229['overlay'] = NULL;
$arguments229['state'] = 'default';
$arguments229['alternativeMarkupIdentifier'] = NULL;
$array231 = array (
);$arguments229['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array231);
$arguments229['overlay'] = 'overlay-hidden';

$output228 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= ' <span class="text-muted">';
$array232 = array (
);
$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array232)]);

$output228 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments233 = array();
$arguments233['key'] = NULL;
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$arguments233['languageKey'] = NULL;
$arguments233['alternativeLanguageKeys'] = NULL;
$arguments233['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output228 .= ') <code class="m-0">[';
$array235 = array (
);
$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId', $array235)]);

$output228 .= ']</code></span>
                                                ';
return $output228;
};
$arguments226 = array();
$arguments226['if'] = NULL;

$output217 .= '';

$output217 .= '
                                            ';
return $output217;
};
$arguments198 = array();
$arguments198['then'] = NULL;
$arguments198['else'] = NULL;
$arguments198['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array214 = array();
$array215 = array (
);$array214['0'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.enabled', $array215);

$expression216 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments198['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression216(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array214)
					),
					$renderingContext
				);
$arguments198['__thenClosure'] = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['identifier'] = NULL;
$arguments201['size'] = 'small';
$arguments201['overlay'] = NULL;
$arguments201['state'] = 'default';
$arguments201['alternativeMarkupIdentifier'] = NULL;
$array203 = array (
);$arguments201['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array203);

$output200 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= ' ';
$array204 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array204)]);

$output200 .= ' <code class="m-0">[';
$array205 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId', $array205)]);

$output200 .= ']</code>
                                                ';
return $output200;
};
$arguments198['__elseClosures'][] = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['identifier'] = NULL;
$arguments207['size'] = 'small';
$arguments207['overlay'] = NULL;
$arguments207['state'] = 'default';
$arguments207['alternativeMarkupIdentifier'] = NULL;
$array209 = array (
);$arguments207['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array209);
$arguments207['overlay'] = 'overlay-hidden';

$output206 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output206 .= ' <span class="text-muted">';
$array210 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array210)]);

$output206 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments211 = array();
$arguments211['key'] = NULL;
$arguments211['id'] = NULL;
$arguments211['default'] = NULL;
$arguments211['arguments'] = NULL;
$arguments211['extensionName'] = NULL;
$arguments211['languageKey'] = NULL;
$arguments211['alternativeLanguageKeys'] = NULL;
$arguments211['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext)]);

$output206 .= ') <code class="m-0">[';
$array213 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId', $array213)]);

$output206 .= ']</code></span>
                                                ';
return $output206;
};

$output197 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output197 .= '
                                        </td>
                                        <td><a href="';
$array236 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array236)]);

$output197 .= '" target="_blank">';
$array237 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array237)]);

$output197 .= '</a></td>
                                    </tr>
                                ';
return $output197;
};
$arguments194 = array();
$arguments194['each'] = NULL;
$arguments194['as'] = NULL;
$arguments194['key'] = NULL;
$arguments194['reverse'] = false;
$arguments194['iteration'] = NULL;
$array196 = array (
);$arguments194['each'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages', $array196);
$arguments194['as'] = 'siteLanguage';

$output189 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output189 .= '
                                </table>
                            ';
return $output189;
};
$arguments184 = array();
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$arguments184['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array187 = array (
);$array186['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration', $array187);

$expression188 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments184['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);
$arguments184['__thenClosure'] = $renderChildrenClosure185;

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output45 .= '
                        </td>
                        <td class="col-control nowrap">
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['identifier'] = NULL;
$arguments251['size'] = 'small';
$arguments251['overlay'] = NULL;
$arguments251['state'] = 'default';
$arguments251['alternativeMarkupIdentifier'] = NULL;
$arguments251['identifier'] = 'actions-open';

$output250 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output250 .= '
                                    ';
return $output250;
};
$arguments244 = array();
$arguments244['additionalAttributes'] = NULL;
$arguments244['data'] = NULL;
$arguments244['aria'] = NULL;
$arguments244['route'] = NULL;
$arguments244['parameters'] = array (
);
$arguments244['referenceType'] = 'absolute';
$arguments244['name'] = NULL;
$arguments244['rel'] = NULL;
$arguments244['rev'] = NULL;
$arguments244['target'] = NULL;
$arguments244['class'] = NULL;
$arguments244['dir'] = NULL;
$arguments244['id'] = NULL;
$arguments244['lang'] = NULL;
$arguments244['style'] = NULL;
$arguments244['title'] = NULL;
$arguments244['accesskey'] = NULL;
$arguments244['tabindex'] = NULL;
$arguments244['onclick'] = NULL;
$arguments244['route'] = 'site_configuration';
// Rendering Array
$array246 = array();
$array246['action'] = 'edit';
$array247 = array (
);$array246['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array247);
$arguments244['parameters'] = $array246;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['key'] = NULL;
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$arguments248['languageKey'] = NULL;
$arguments248['alternativeLanguageKeys'] = NULL;
$arguments248['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments244['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);
$arguments244['class'] = 'btn btn-default';

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['identifier'] = NULL;
$arguments265['size'] = 'small';
$arguments265['overlay'] = NULL;
$arguments265['state'] = 'default';
$arguments265['alternativeMarkupIdentifier'] = NULL;
$arguments265['identifier'] = 'actions-delete';

$output264 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output264 .= '
                                    ';
return $output264;
};
$arguments253 = array();
$arguments253['additionalAttributes'] = NULL;
$arguments253['data'] = NULL;
$arguments253['aria'] = NULL;
$arguments253['route'] = NULL;
$arguments253['parameters'] = array (
);
$arguments253['referenceType'] = 'absolute';
$arguments253['name'] = NULL;
$arguments253['rel'] = NULL;
$arguments253['rev'] = NULL;
$arguments253['target'] = NULL;
$arguments253['class'] = NULL;
$arguments253['dir'] = NULL;
$arguments253['id'] = NULL;
$arguments253['lang'] = NULL;
$arguments253['style'] = NULL;
$arguments253['title'] = NULL;
$arguments253['accesskey'] = NULL;
$arguments253['tabindex'] = NULL;
$arguments253['onclick'] = NULL;
$arguments253['route'] = 'site_configuration';
// Rendering Array
$array255 = array();
$array255['action'] = 'delete';
$array256 = array (
);$array255['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array256);
$arguments253['parameters'] = $array255;
$arguments253['class'] = 'btn btn-default t3js-modal-trigger';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments257 = array();
$arguments257['key'] = NULL;
$arguments257['id'] = NULL;
$arguments257['default'] = NULL;
$arguments257['arguments'] = NULL;
$arguments257['extensionName'] = NULL;
$arguments257['languageKey'] = NULL;
$arguments257['alternativeLanguageKeys'] = NULL;
$arguments257['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$arguments253['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);
// Rendering Array
$array259 = array();
$array259['severity'] = 'error';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['key'] = NULL;
$arguments260['id'] = NULL;
$arguments260['default'] = NULL;
$arguments260['arguments'] = NULL;
$arguments260['extensionName'] = NULL;
$arguments260['languageKey'] = NULL;
$arguments260['alternativeLanguageKeys'] = NULL;
$arguments260['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$array259['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['key'] = NULL;
$arguments262['id'] = NULL;
$arguments262['default'] = NULL;
$arguments262['arguments'] = NULL;
$arguments262['extensionName'] = NULL;
$arguments262['languageKey'] = NULL;
$arguments262['alternativeLanguageKeys'] = NULL;
$arguments262['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';
$array259['button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);
$arguments253['data'] = $array259;

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output243 .= '
                                ';
return $output243;
};
$arguments238 = array();
$arguments238['then'] = NULL;
$arguments238['else'] = NULL;
$arguments238['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array240 = array();
$array241 = array (
);$array240['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array241);

$expression242 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments238['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression242(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array240)
					),
					$renderingContext
				);
$arguments238['__thenClosure'] = $renderChildrenClosure239;

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output45 .= '
                            </div>
                        </td>
                    </tr>
                ';
return $output45;
};
$arguments42 = array();
$arguments42['each'] = NULL;
$arguments42['as'] = NULL;
$arguments42['key'] = NULL;
$arguments42['reverse'] = false;
$arguments42['iteration'] = NULL;
$array44 = array (
);$arguments42['each'] = $renderingContext->getVariableProvider()->getByPath('pages', $array44);
$arguments42['as'] = 'page';

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output5 .= '
                </tbody>
            </table>
        </div>
    ';
return $output5;
};
$arguments3['__elseClosures'][] = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['key'] = NULL;
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$arguments273['languageKey'] = NULL;
$arguments273['alternativeLanguageKeys'] = NULL;
$arguments273['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.message';

$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext)]);

$output272 .= '</p>
        ';
return $output272;
};
$arguments268 = array();
$arguments268['message'] = NULL;
$arguments268['title'] = NULL;
$arguments268['state'] = -2;
$arguments268['iconName'] = NULL;
$arguments268['disableIcon'] = false;
$arguments268['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['key'] = NULL;
$arguments270['id'] = NULL;
$arguments270['default'] = NULL;
$arguments270['arguments'] = NULL;
$arguments270['extensionName'] = NULL;
$arguments270['languageKey'] = NULL;
$arguments270['alternativeLanguageKeys'] = NULL;
$arguments270['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.title';
$arguments268['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);
$renderChildrenClosure269 = ($arguments268['message'] !== null) ? function() use ($arguments268) { return $arguments268['message']; } : $renderChildrenClosure269;
$output267 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output267 .= '
    ';
return $output267;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
$output558 = '';

$output558 .= '
    <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments559 = array();
$arguments559['key'] = NULL;
$arguments559['id'] = NULL;
$arguments559['default'] = NULL;
$arguments559['arguments'] = NULL;
$arguments559['extensionName'] = NULL;
$arguments559['languageKey'] = NULL;
$arguments559['alternativeLanguageKeys'] = NULL;
$arguments559['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.title';

$output558 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext)]);

$output558 .= '</h3>
    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments561 = array();
$arguments561['key'] = NULL;
$arguments561['id'] = NULL;
$arguments561['default'] = NULL;
$arguments561['arguments'] = NULL;
$arguments561['extensionName'] = NULL;
$arguments561['languageKey'] = NULL;
$arguments561['alternativeLanguageKeys'] = NULL;
$arguments561['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.description';

$output558 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext)]);

$output558 .= '</p>

    <table class="table table-striped table-hover table-sm">
        <thead>
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments563 = array();
$arguments563['key'] = NULL;
$arguments563['id'] = NULL;
$arguments563['default'] = NULL;
$arguments563['arguments'] = NULL;
$arguments563['extensionName'] = NULL;
$arguments563['languageKey'] = NULL;
$arguments563['alternativeLanguageKeys'] = NULL;
$arguments563['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.configuration';

$output558 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext)]);

$output558 .= '</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
$output568 = '';

$output568 .= '
            <tr>
                <td>	<code>';
$array569 = array (
);
$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier', $array569)]);

$output568 .= '</code></td>
                <td class="col-control nowrap">
                    <div class="btn-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
$output581 = '';

$output581 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments582 = array();
$arguments582['identifier'] = NULL;
$arguments582['size'] = 'small';
$arguments582['overlay'] = NULL;
$arguments582['state'] = 'default';
$arguments582['alternativeMarkupIdentifier'] = NULL;
$arguments582['identifier'] = 'actions-delete';

$output581 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext);

$output581 .= '
                            ';
return $output581;
};
$arguments570 = array();
$arguments570['additionalAttributes'] = NULL;
$arguments570['data'] = NULL;
$arguments570['aria'] = NULL;
$arguments570['route'] = NULL;
$arguments570['parameters'] = array (
);
$arguments570['referenceType'] = 'absolute';
$arguments570['name'] = NULL;
$arguments570['rel'] = NULL;
$arguments570['rev'] = NULL;
$arguments570['target'] = NULL;
$arguments570['class'] = NULL;
$arguments570['dir'] = NULL;
$arguments570['id'] = NULL;
$arguments570['lang'] = NULL;
$arguments570['style'] = NULL;
$arguments570['title'] = NULL;
$arguments570['accesskey'] = NULL;
$arguments570['tabindex'] = NULL;
$arguments570['onclick'] = NULL;
$arguments570['route'] = 'site_configuration';
// Rendering Array
$array572 = array();
$array572['action'] = 'delete';
$array573 = array (
);$array572['site'] = $renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier', $array573);
$arguments570['parameters'] = $array572;
$arguments570['class'] = 'btn btn-default t3js-modal-trigger';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments574 = array();
$arguments574['key'] = NULL;
$arguments574['id'] = NULL;
$arguments574['default'] = NULL;
$arguments574['arguments'] = NULL;
$arguments574['extensionName'] = NULL;
$arguments574['languageKey'] = NULL;
$arguments574['alternativeLanguageKeys'] = NULL;
$arguments574['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$arguments570['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext);
// Rendering Array
$array576 = array();
$array576['severity'] = 'error';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['key'] = NULL;
$arguments577['id'] = NULL;
$arguments577['default'] = NULL;
$arguments577['arguments'] = NULL;
$arguments577['extensionName'] = NULL;
$arguments577['languageKey'] = NULL;
$arguments577['alternativeLanguageKeys'] = NULL;
$arguments577['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$array576['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments579 = array();
$arguments579['key'] = NULL;
$arguments579['id'] = NULL;
$arguments579['default'] = NULL;
$arguments579['arguments'] = NULL;
$arguments579['extensionName'] = NULL;
$arguments579['languageKey'] = NULL;
$arguments579['alternativeLanguageKeys'] = NULL;
$arguments579['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';
$array576['button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments579, $renderChildrenClosure580, $renderingContext);
$arguments570['data'] = $array576;

$output568 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output568 .= '
                    </div>
                </td>
            </tr>
        ';
return $output568;
};
$arguments565 = array();
$arguments565['each'] = NULL;
$arguments565['as'] = NULL;
$arguments565['key'] = NULL;
$arguments565['reverse'] = false;
$arguments565['iteration'] = NULL;
$array567 = array (
);$arguments565['each'] = $renderingContext->getVariableProvider()->getByPath('unassignedSites', $array567);
$arguments565['as'] = 'unassignedSite';

$output558 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output558 .= '
        </tbody>
    </table>
';
return $output558;
};
$arguments553 = array();
$arguments553['then'] = NULL;
$arguments553['else'] = NULL;
$arguments553['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array555 = array();
$array556 = array (
);$array555['0'] = $renderingContext->getVariableProvider()->getByPath('unassignedSites', $array556);

$expression557 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments553['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression557(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array555)
					),
					$renderingContext
				);
$arguments553['__thenClosure'] = $renderChildrenClosure554;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#