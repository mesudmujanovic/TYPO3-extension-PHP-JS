<?php

class BuilderModule_action_index_33c22dd30f41c91883219e26e8ecebb710ff394b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>Extension Builder</h1>
	<p class="bodytext">This page is intended to give you some overview about the workflow we suggest.</p>
	<h2>What is this extension builder about?</h2>
	<ul>
		<li>This extension builder helps you to build and manage applications based on <b>Extbase</b> and <b>Fluid</b>.</li>
		<li>We also want to provide a learning tool for <b>Domain-Driven Design</b></li>
	</ul>
	<h2>Domain Driven Design</h2>
	View <a class="text-primary" href="https://www.infoq.com/presentations/model-to-work-evans/" target="_blank">Putting the Model to Work and Strategic Design</a> by Eric Evans to get an introduction into Domain Driven Design (DDD).
	<h2>Domain Modelling</h2>
	At first, you will start creating your <b>Domain Model</b> with a graphical editor. This editor will do the following for you:
	<ul>
		<li><b>Extension Skeleton</b>: will create the extension directory structure needed</li>
		<li><b>Domain Model</b>: Will create basic classes for the Domain Model, residing under Domain/Model/</li>
		<li><b>Database Tables and TCA</b>: Will create Database Tables and TCA definitions which fit to the domain model.</li>
		<li><b>Skeleton Locallang Files</b>: Will create skeleton locallang files</li>
		<li><b>Plugin Configuration</b>: Will create a plugin configuration, so it will work out-of-the-box.</li>
		<li><b>Dynamic Scaffolding</b>: Automatically create all CRUD actions (Create, Read, Update, Delete) for Aggregate Roots.</li>
	</ul>
	Have a look at the Documentation <a class="text-primary" href="https://docs.typo3.org/p/friendsoftypo3/extension-builder/main/en-us/Index.html" target="_blank" >Using the Extension Builder</a> for more details.
	<br /><br />
	<p><b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return 'Go to the Domain Modeller';
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['aria'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['name'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['rev'] = NULL;
$arguments1['target'] = NULL;
$arguments1['action'] = NULL;
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = NULL;
$arguments1['noCache'] = NULL;
$arguments1['section'] = NULL;
$arguments1['format'] = NULL;
$arguments1['linkAccessRestrictedPages'] = NULL;
$arguments1['additionalParams'] = NULL;
$arguments1['absolute'] = NULL;
$arguments1['addQueryString'] = NULL;
$arguments1['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['action'] = 'domainmodelling';
$arguments1['class'] = 'text-primary';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</b></p>

	<h2>Iterative model refinement</h2>
	The first version of the model will usually not be the one you\'ll use later on. That\'s why you should take your time, and improve your model.<br />
	Useful things to know:
	<ul>
		<li><b>Dynamic Scaffolding</b>: The Scaffolding will automatically adjust the templates needed to render CRUD-functionality for your domain models.
			That is, if you modify your domain model by adding or removing fields, the standard CRUD actions display the new fields as well.
	</ul>
	When you start to modify the generated files, but still want to use the graphical modeler to extend your model, you have to enable the roundtrip feature
	in the Extension Builder settings in the Extension Manager.<br />
	You will find a file in your extension directory Configuration/ExtensionBuilder/settings.yaml.<br />
	There you can configure which files should be overwritten, kept or merged if you save your model.<br />
	A good practice would be, to let the Extension Builder generate the Partials for form fields and properties for you and include them in your templates.
	<br /><br />
	<h3>Please have a look at the <a class="text-primary" href="https://docs.typo3.org/p/friendsoftypo3/extension-builder/main/en-us/Security/Index.html" target="_blank" >Security section</a> to avoid unsecure extensions!</h3>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['name'] = NULL;
$arguments4['name'] = 'Default';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output3 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
	<h1>Extension Builder</h1>
	<p class="bodytext">This page is intended to give you some overview about the workflow we suggest.</p>
	<h2>What is this extension builder about?</h2>
	<ul>
		<li>This extension builder helps you to build and manage applications based on <b>Extbase</b> and <b>Fluid</b>.</li>
		<li>We also want to provide a learning tool for <b>Domain-Driven Design</b></li>
	</ul>
	<h2>Domain Driven Design</h2>
	View <a class="text-primary" href="https://www.infoq.com/presentations/model-to-work-evans/" target="_blank">Putting the Model to Work and Strategic Design</a> by Eric Evans to get an introduction into Domain Driven Design (DDD).
	<h2>Domain Modelling</h2>
	At first, you will start creating your <b>Domain Model</b> with a graphical editor. This editor will do the following for you:
	<ul>
		<li><b>Extension Skeleton</b>: will create the extension directory structure needed</li>
		<li><b>Domain Model</b>: Will create basic classes for the Domain Model, residing under Domain/Model/</li>
		<li><b>Database Tables and TCA</b>: Will create Database Tables and TCA definitions which fit to the domain model.</li>
		<li><b>Skeleton Locallang Files</b>: Will create skeleton locallang files</li>
		<li><b>Plugin Configuration</b>: Will create a plugin configuration, so it will work out-of-the-box.</li>
		<li><b>Dynamic Scaffolding</b>: Automatically create all CRUD actions (Create, Read, Update, Delete) for Aggregate Roots.</li>
	</ul>
	Have a look at the Documentation <a class="text-primary" href="https://docs.typo3.org/p/friendsoftypo3/extension-builder/main/en-us/Index.html" target="_blank" >Using the Extension Builder</a> for more details.
	<br /><br />
	<p><b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return 'Go to the Domain Modeller';
};
$arguments9 = array();
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['aria'] = NULL;
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['name'] = NULL;
$arguments9['rel'] = NULL;
$arguments9['rev'] = NULL;
$arguments9['target'] = NULL;
$arguments9['action'] = NULL;
$arguments9['controller'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['pluginName'] = NULL;
$arguments9['pageUid'] = NULL;
$arguments9['pageType'] = NULL;
$arguments9['noCache'] = NULL;
$arguments9['section'] = NULL;
$arguments9['format'] = NULL;
$arguments9['linkAccessRestrictedPages'] = NULL;
$arguments9['additionalParams'] = NULL;
$arguments9['absolute'] = NULL;
$arguments9['addQueryString'] = NULL;
$arguments9['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments9['addQueryStringMethod'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['action'] = 'domainmodelling';
$arguments9['class'] = 'text-primary';

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '</b></p>

	<h2>Iterative model refinement</h2>
	The first version of the model will usually not be the one you\'ll use later on. That\'s why you should take your time, and improve your model.<br />
	Useful things to know:
	<ul>
		<li><b>Dynamic Scaffolding</b>: The Scaffolding will automatically adjust the templates needed to render CRUD-functionality for your domain models.
			That is, if you modify your domain model by adding or removing fields, the standard CRUD actions display the new fields as well.
	</ul>
	When you start to modify the generated files, but still want to use the graphical modeler to extend your model, you have to enable the roundtrip feature
	in the Extension Builder settings in the Extension Manager.<br />
	You will find a file in your extension directory Configuration/ExtensionBuilder/settings.yaml.<br />
	There you can configure which files should be overwritten, kept or merged if you save your model.<br />
	A good practice would be, to let the Extension Builder generate the Partials for form fields and properties for you and include them in your templates.
	<br /><br />
	<h3>Please have a look at the <a class="text-primary" href="https://docs.typo3.org/p/friendsoftypo3/extension-builder/main/en-us/Security/Index.html" target="_blank" >Security section</a> to avoid unsecure extensions!</h3>
';
return $output8;
};
$arguments6 = array();
$arguments6['name'] = NULL;
$arguments6['name'] = 'Content';

$output3 .= NULL;

$output3 .= '

';

return $output3;
}


}
#