<?php

class BuilderModule_action_domainmodelling_6da1820be99633d11f508f2399aaa57bfb82b0be extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'eb' => 
  array (
    0 => 'EBT\\ExtensionBuilder\\ViewHelpers',
  ),
));
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div id="domainModelEditor">
		<div id="left">
			<div id="propertiesForm"></div>
		</div>
		<div id="center">
			<div id="moduleBar"></div>
			<div id="modelingLayer"></div>
		</div>
		<div id="helpPanel"></div>
	</div>
	<script type="text/javascript">
		// InputEx needs a correct path to this image
		inputEx.spacerUrl = TYPO3.settings.extensionBuilder.publicResourcesUrl + \'/jsDomainModeling/wireit/lib/inputex/images/space.gif\';

		YAHOO.util.Event.onDOMReady(function() {
			const editor = new WireIt.WiringEditor(extbaseModeling_wiringEditorLanguage);
			const initialWarnings = ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$array5 = array (
);return $renderingContext->getVariableProvider()->getByPath('initialWarnings', $array5);
};
$arguments3 = array();
$arguments3['value'] = NULL;
$arguments3['forceObject'] = false;
$renderChildrenClosure4 = ($arguments3['value'] !== null) ? function() use ($arguments3) { return $arguments3['value']; } : $renderChildrenClosure4;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
};
$arguments1 = array();
$arguments1['value'] = NULL;

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= ';
			if (initialWarnings.length > 0) {
				editor.alert(\'Warning\', initialWarnings.join(\'<br />\'));
			}
		});
	</script>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['name'] = NULL;
$arguments7['name'] = 'Default';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output6 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
	<div id="domainModelEditor">
		<div id="left">
			<div id="propertiesForm"></div>
		</div>
		<div id="center">
			<div id="moduleBar"></div>
			<div id="modelingLayer"></div>
		</div>
		<div id="helpPanel"></div>
	</div>
	<script type="text/javascript">
		// InputEx needs a correct path to this image
		inputEx.spacerUrl = TYPO3.settings.extensionBuilder.publicResourcesUrl + \'/jsDomainModeling/wireit/lib/inputex/images/space.gif\';

		YAHOO.util.Event.onDOMReady(function() {
			const editor = new WireIt.WiringEditor(extbaseModeling_wiringEditorLanguage);
			const initialWarnings = ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$array16 = array (
);return $renderingContext->getVariableProvider()->getByPath('initialWarnings', $array16);
};
$arguments14 = array();
$arguments14['value'] = NULL;
$arguments14['forceObject'] = false;
$renderChildrenClosure15 = ($arguments14['value'] !== null) ? function() use ($arguments14) { return $arguments14['value']; } : $renderChildrenClosure15;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
};
$arguments12 = array();
$arguments12['value'] = NULL;

$output11 .= isset($arguments12['value']) ? $arguments12['value'] : $renderChildrenClosure13();

$output11 .= ';
			if (initialWarnings.length > 0) {
				editor.alert(\'Warning\', initialWarnings.join(\'<br />\'));
			}
		});
	</script>
';
return $output11;
};
$arguments9 = array();
$arguments9['name'] = NULL;
$arguments9['name'] = 'Content';

$output6 .= NULL;

$output6 .= '

';

return $output6;
}


}
#