<?php

class Standard_action_index_ab054a3b7d4a2797f2063403d19ec654c2c00e9b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section itemContent
 */
public function section_ad9f4e64769223a0b36868248f54e6da63bb35e3(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array9 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array9);
};
$arguments7 = array();
$arguments7['value'] = NULL;

$output6 .= isset($arguments7['value']) ? $arguments7['value'] : $renderChildrenClosure8();

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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('content', $array4);

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
    <div class="media-left">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array12 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array12);
};
$arguments10 = array();
$arguments10['value'] = NULL;

$output0 .= isset($arguments10['value']) ? $arguments10['value'] : $renderChildrenClosure11();

$output0 .= '
    </div>
    <div class="media-body">
        <strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array16 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.title', $array16);
};
$arguments13 = array();
$arguments13['value'] = NULL;
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = 'UTF-8';
$arguments13['doubleEncode'] = true;
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output0 .= !is_string($value15) && !(is_object($value15) && method_exists($value15, '__toString')) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments13['encoding'], $arguments13['doubleEncode']);

$output0 .= '</strong>
        <br/>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.description', $array22);
};
$arguments19 = array();
$arguments19['value'] = NULL;
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = 'UTF-8';
$arguments19['doubleEncode'] = true;
$value21 = ($arguments19['value'] !== NULL ? $arguments19['value'] : $renderChildrenClosure20());
return !is_string($value21) && !(is_object($value21) && method_exists($value21, '__toString')) ? $value21 : htmlspecialchars($value21, ($arguments19['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments19['encoding'], $arguments19['doubleEncode']);
};
$arguments17 = array();
$arguments17['value'] = NULL;
$renderChildrenClosure18 = ($arguments17['value'] !== null) ? function() use ($arguments17) { return $arguments17['value']; } : $renderChildrenClosure18;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
    </div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output23 = '';

$output23 .= '<div class="t3js-media-new-content-element-wizard media-new-content-element-wizard col-12 col-md-6">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
            <button type="button" class="btn btn-link media p-0 text-start" data-target="';
$array45 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('target', $array45)]);

$output44 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['section'] = NULL;
$arguments46['partial'] = NULL;
$arguments46['delegate'] = NULL;
$arguments46['renderable'] = NULL;
$arguments46['arguments'] = array (
);
$arguments46['optional'] = false;
$arguments46['default'] = NULL;
$arguments46['contentAs'] = NULL;
$arguments46['debug'] = true;
$arguments46['section'] = 'itemContent';
$arguments46['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output44 .= '
            </button>
        ';
return $output44;
};
$arguments42 = array();

$output41 .= '';

$output41 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
            <button type="button" class="btn btn-link media p-0 text-start" data-position-map-arguments="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('positionMapArguments', $array54);
};
$arguments52 = array();
$arguments52['value'] = NULL;

$output51 .= isset($arguments52['value']) ? $arguments52['value'] : $renderChildrenClosure53();

$output51 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['section'] = NULL;
$arguments55['partial'] = NULL;
$arguments55['delegate'] = NULL;
$arguments55['renderable'] = NULL;
$arguments55['arguments'] = array (
);
$arguments55['optional'] = false;
$arguments55['default'] = NULL;
$arguments55['contentAs'] = NULL;
$arguments55['debug'] = true;
$arguments55['section'] = 'itemContent';
$arguments55['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output51 .= '
            </button>
        ';
return $output51;
};
$arguments49 = array();
$arguments49['if'] = NULL;

$output41 .= '';

$output41 .= '
    ';
return $output41;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('target', $array39);

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
            <button type="button" class="btn btn-link media p-0 text-start" data-target="';
$array27 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('target', $array27)]);

$output26 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['section'] = NULL;
$arguments28['partial'] = NULL;
$arguments28['delegate'] = NULL;
$arguments28['renderable'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['optional'] = false;
$arguments28['default'] = NULL;
$arguments28['contentAs'] = NULL;
$arguments28['debug'] = true;
$arguments28['section'] = 'itemContent';
$arguments28['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output26 .= '
            </button>
        ';
return $output26;
};
$arguments24['__elseClosures'][] = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
            <button type="button" class="btn btn-link media p-0 text-start" data-position-map-arguments="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('positionMapArguments', $array34);
};
$arguments32 = array();
$arguments32['value'] = NULL;

$output31 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output31 .= '">
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
$arguments35['section'] = 'itemContent';
$arguments35['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output31 .= '
            </button>
        ';
return $output31;
};

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$array69 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array69);
};
$arguments67 = array();
$arguments67['value'] = NULL;

$output66 .= isset($arguments67['value']) ? $arguments67['value'] : $renderChildrenClosure68();

$output66 .= '
    ';
return $output66;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('content', $array64);

$expression65 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = $renderChildrenClosure62;

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
    <div class="media-left">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$array72 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array72);
};
$arguments70 = array();
$arguments70['value'] = NULL;

$output60 .= isset($arguments70['value']) ? $arguments70['value'] : $renderChildrenClosure71();

$output60 .= '
    </div>
    <div class="media-body">
        <strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$array76 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.title', $array76);
};
$arguments73 = array();
$arguments73['value'] = NULL;
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = 'UTF-8';
$arguments73['doubleEncode'] = true;
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output60 .= !is_string($value75) && !(is_object($value75) && method_exists($value75, '__toString')) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments73['encoding'], $arguments73['doubleEncode']);

$output60 .= '</strong>
        <br/>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$array82 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.description', $array82);
};
$arguments79 = array();
$arguments79['value'] = NULL;
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = 'UTF-8';
$arguments79['doubleEncode'] = true;
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());
return !is_string($value81) && !(is_object($value81) && method_exists($value81, '__toString')) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments79['encoding'], $arguments79['doubleEncode']);
};
$arguments77 = array();
$arguments77['value'] = NULL;
$renderChildrenClosure78 = ($arguments77['value'] !== null) ? function() use ($arguments77) { return $arguments77['value']; } : $renderChildrenClosure78;
$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output60 .= '
    </div>
';
return $output60;
};
$arguments58 = array();
$arguments58['name'] = NULL;
$arguments58['name'] = 'itemContent';

$output23 .= NULL;

$output23 .= '
';

return $output23;
}


}
#