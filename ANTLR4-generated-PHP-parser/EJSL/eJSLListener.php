<?php

/*
 * Generated from D:/wamp/www/eJSL-ANTLR4/grammar\eJSL.g4 by ANTLR 4.9.1
 */

namespace EJSL;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see eJSLParser}.
 */
interface eJSLListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see eJSLParser::eJSLModel()}.
	 * @param $context The parse tree.
	 */
	public function enterEJSLModel(Context\EJSLModelContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::eJSLModel()}.
	 * @param $context The parse tree.
	 */
	public function exitEJSLModel(Context\EJSLModelContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::eJSLPart()}.
	 * @param $context The parse tree.
	 */
	public function enterEJSLPart(Context\EJSLPartContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::eJSLPart()}.
	 * @param $context The parse tree.
	 */
	public function exitEJSLPart(Context\EJSLPartContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::cmsCore()}.
	 * @param $context The parse tree.
	 */
	public function enterCmsCore(Context\CmsCoreContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::cmsCore()}.
	 * @param $context The parse tree.
	 */
	public function exitCmsCore(Context\CmsCoreContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::coreFeature()}.
	 * @param $context The parse tree.
	 */
	public function enterCoreFeature(Context\CoreFeatureContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::coreFeature()}.
	 * @param $context The parse tree.
	 */
	public function exitCoreFeature(Context\CoreFeatureContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::cmsExtension()}.
	 * @param $context The parse tree.
	 */
	public function enterCmsExtension(Context\CmsExtensionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::cmsExtension()}.
	 * @param $context The parse tree.
	 */
	public function exitCmsExtension(Context\CmsExtensionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::feature()}.
	 * @param $context The parse tree.
	 */
	public function enterFeature(Context\FeatureContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::feature()}.
	 * @param $context The parse tree.
	 */
	public function exitFeature(Context\FeatureContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterType(Context\TypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitType(Context\TypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::datatypeReference()}.
	 * @param $context The parse tree.
	 */
	public function enterDatatypeReference(Context\DatatypeReferenceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::datatypeReference()}.
	 * @param $context The parse tree.
	 */
	public function exitDatatypeReference(Context\DatatypeReferenceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::standardTypes()}.
	 * @param $context The parse tree.
	 */
	public function enterStandardTypes(Context\StandardTypesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::standardTypes()}.
	 * @param $context The parse tree.
	 */
	public function exitStandardTypes(Context\StandardTypesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::datatype()}.
	 * @param $context The parse tree.
	 */
	public function enterDatatype(Context\DatatypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::datatype()}.
	 * @param $context The parse tree.
	 */
	public function exitDatatype(Context\DatatypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::parameter()}.
	 * @param $context The parse tree.
	 */
	public function enterParameter(Context\ParameterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::parameter()}.
	 * @param $context The parse tree.
	 */
	public function exitParameter(Context\ParameterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::parameterGroup()}.
	 * @param $context The parse tree.
	 */
	public function enterParameterGroup(Context\ParameterGroupContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::parameterGroup()}.
	 * @param $context The parse tree.
	 */
	public function exitParameterGroup(Context\ParameterGroupContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::pageAction()}.
	 * @param $context The parse tree.
	 */
	public function enterPageAction(Context\PageActionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::pageAction()}.
	 * @param $context The parse tree.
	 */
	public function exitPageAction(Context\PageActionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::entitypackage()}.
	 * @param $context The parse tree.
	 */
	public function enterEntitypackage(Context\EntitypackageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::entitypackage()}.
	 * @param $context The parse tree.
	 */
	public function exitEntitypackage(Context\EntitypackageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::entity()}.
	 * @param $context The parse tree.
	 */
	public function enterEntity(Context\EntityContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::entity()}.
	 * @param $context The parse tree.
	 */
	public function exitEntity(Context\EntityContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::entityRef()}.
	 * @param $context The parse tree.
	 */
	public function enterEntityRef(Context\EntityRefContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::entityRef()}.
	 * @param $context The parse tree.
	 */
	public function exitEntityRef(Context\EntityRefContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::attributeRef()}.
	 * @param $context The parse tree.
	 */
	public function enterAttributeRef(Context\AttributeRefContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::attributeRef()}.
	 * @param $context The parse tree.
	 */
	public function exitAttributeRef(Context\AttributeRefContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::attribute()}.
	 * @param $context The parse tree.
	 */
	public function enterAttribute(Context\AttributeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::attribute()}.
	 * @param $context The parse tree.
	 */
	public function exitAttribute(Context\AttributeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::reference()}.
	 * @param $context The parse tree.
	 */
	public function enterReference(Context\ReferenceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::reference()}.
	 * @param $context The parse tree.
	 */
	public function exitReference(Context\ReferenceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::page()}.
	 * @param $context The parse tree.
	 */
	public function enterPage(Context\PageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::page()}.
	 * @param $context The parse tree.
	 */
	public function exitPage(Context\PageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::staticPage()}.
	 * @param $context The parse tree.
	 */
	public function enterStaticPage(Context\StaticPageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::staticPage()}.
	 * @param $context The parse tree.
	 */
	public function exitStaticPage(Context\StaticPageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::dynamicPage()}.
	 * @param $context The parse tree.
	 */
	public function enterDynamicPage(Context\DynamicPageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::dynamicPage()}.
	 * @param $context The parse tree.
	 */
	public function exitDynamicPage(Context\DynamicPageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::indexPage()}.
	 * @param $context The parse tree.
	 */
	public function enterIndexPage(Context\IndexPageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::indexPage()}.
	 * @param $context The parse tree.
	 */
	public function exitIndexPage(Context\IndexPageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::detailsPage()}.
	 * @param $context The parse tree.
	 */
	public function enterDetailsPage(Context\DetailsPageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::detailsPage()}.
	 * @param $context The parse tree.
	 */
	public function exitDetailsPage(Context\DetailsPageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::detailPageField()}.
	 * @param $context The parse tree.
	 */
	public function enterDetailPageField(Context\DetailPageFieldContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::detailPageField()}.
	 * @param $context The parse tree.
	 */
	public function exitDetailPageField(Context\DetailPageFieldContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::customPage()}.
	 * @param $context The parse tree.
	 */
	public function enterCustomPage(Context\CustomPageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::customPage()}.
	 * @param $context The parse tree.
	 */
	public function exitCustomPage(Context\CustomPageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::htmlTypes()}.
	 * @param $context The parse tree.
	 */
	public function enterHtmlTypes(Context\HtmlTypesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::htmlTypes()}.
	 * @param $context The parse tree.
	 */
	public function exitHtmlTypes(Context\HtmlTypesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::simpleHTMLTypes()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleHTMLTypes(Context\SimpleHTMLTypesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::simpleHTMLTypes()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleHTMLTypes(Context\SimpleHTMLTypesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::complexHTMLTypes()}.
	 * @param $context The parse tree.
	 */
	public function enterComplexHTMLTypes(Context\ComplexHTMLTypesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::complexHTMLTypes()}.
	 * @param $context The parse tree.
	 */
	public function exitComplexHTMLTypes(Context\ComplexHTMLTypesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::link()}.
	 * @param $context The parse tree.
	 */
	public function enterLink(Context\LinkContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::link()}.
	 * @param $context The parse tree.
	 */
	public function exitLink(Context\LinkContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::pageActionRef()}.
	 * @param $context The parse tree.
	 */
	public function enterPageActionRef(Context\PageActionRefContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::pageActionRef()}.
	 * @param $context The parse tree.
	 */
	public function exitPageActionRef(Context\PageActionRefContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::pageRef()}.
	 * @param $context The parse tree.
	 */
	public function enterPageRef(Context\PageRefContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::pageRef()}.
	 * @param $context The parse tree.
	 */
	public function exitPageRef(Context\PageRefContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::externalLink()}.
	 * @param $context The parse tree.
	 */
	public function enterExternalLink(Context\ExternalLinkContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::externalLink()}.
	 * @param $context The parse tree.
	 */
	public function exitExternalLink(Context\ExternalLinkContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::internalLink()}.
	 * @param $context The parse tree.
	 */
	public function enterInternalLink(Context\InternalLinkContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::internalLink()}.
	 * @param $context The parse tree.
	 */
	public function exitInternalLink(Context\InternalLinkContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::contextLink()}.
	 * @param $context The parse tree.
	 */
	public function enterContextLink(Context\ContextLinkContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::contextLink()}.
	 * @param $context The parse tree.
	 */
	public function exitContextLink(Context\ContextLinkContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::attvalueRef()}.
	 * @param $context The parse tree.
	 */
	public function enterAttvalueRef(Context\AttvalueRefContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::attvalueRef()}.
	 * @param $context The parse tree.
	 */
	public function exitAttvalueRef(Context\AttvalueRefContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::linkParameter()}.
	 * @param $context The parse tree.
	 */
	public function enterLinkParameter(Context\LinkParameterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::linkParameter()}.
	 * @param $context The parse tree.
	 */
	public function exitLinkParameter(Context\LinkParameterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::extension()}.
	 * @param $context The parse tree.
	 */
	public function enterExtension(Context\ExtensionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::extension()}.
	 * @param $context The parse tree.
	 */
	public function exitExtension(Context\ExtensionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::extensionPackage()}.
	 * @param $context The parse tree.
	 */
	public function enterExtensionPackage(Context\ExtensionPackageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::extensionPackage()}.
	 * @param $context The parse tree.
	 */
	public function exitExtensionPackage(Context\ExtensionPackageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::component()}.
	 * @param $context The parse tree.
	 */
	public function enterComponent(Context\ComponentContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::component()}.
	 * @param $context The parse tree.
	 */
	public function exitComponent(Context\ComponentContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::section()}.
	 * @param $context The parse tree.
	 */
	public function enterSection(Context\SectionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::section()}.
	 * @param $context The parse tree.
	 */
	public function exitSection(Context\SectionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::backend()}.
	 * @param $context The parse tree.
	 */
	public function enterBackend(Context\BackendContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::backend()}.
	 * @param $context The parse tree.
	 */
	public function exitBackend(Context\BackendContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::pageReference()}.
	 * @param $context The parse tree.
	 */
	public function enterPageReference(Context\PageReferenceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::pageReference()}.
	 * @param $context The parse tree.
	 */
	public function exitPageReference(Context\PageReferenceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::componentReference()}.
	 * @param $context The parse tree.
	 */
	public function enterComponentReference(Context\ComponentReferenceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::componentReference()}.
	 * @param $context The parse tree.
	 */
	public function exitComponentReference(Context\ComponentReferenceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::noncoreComponentRef()}.
	 * @param $context The parse tree.
	 */
	public function enterNoncoreComponentRef(Context\NoncoreComponentRefContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::noncoreComponentRef()}.
	 * @param $context The parse tree.
	 */
	public function exitNoncoreComponentRef(Context\NoncoreComponentRefContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::frontend()}.
	 * @param $context The parse tree.
	 */
	public function enterFrontend(Context\FrontendContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::frontend()}.
	 * @param $context The parse tree.
	 */
	public function exitFrontend(Context\FrontendContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::module()}.
	 * @param $context The parse tree.
	 */
	public function enterModule(Context\ModuleContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::module()}.
	 * @param $context The parse tree.
	 */
	public function exitModule(Context\ModuleContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::plugin()}.
	 * @param $context The parse tree.
	 */
	public function enterPlugin(Context\PluginContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::plugin()}.
	 * @param $context The parse tree.
	 */
	public function exitPlugin(Context\PluginContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::library()}.
	 * @param $context The parse tree.
	 */
	public function enterLibrary(Context\LibraryContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::library()}.
	 * @param $context The parse tree.
	 */
	public function exitLibrary(Context\LibraryContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::package()}.
	 * @param $context The parse tree.
	 */
	public function enterPackage(Context\PackageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::package()}.
	 * @param $context The parse tree.
	 */
	public function exitPackage(Context\PackageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::classRef()}.
	 * @param $context The parse tree.
	 */
	public function enterClassRef(Context\ClassRefContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::classRef()}.
	 * @param $context The parse tree.
	 */
	public function exitClassRef(Context\ClassRefContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::phpclass()}.
	 * @param $context The parse tree.
	 */
	public function enterPhpclass(Context\PhpclassContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::phpclass()}.
	 * @param $context The parse tree.
	 */
	public function exitPhpclass(Context\PhpclassContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::method()}.
	 * @param $context The parse tree.
	 */
	public function enterMethod(Context\MethodContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::method()}.
	 * @param $context The parse tree.
	 */
	public function exitMethod(Context\MethodContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::methodParameter()}.
	 * @param $context The parse tree.
	 */
	public function enterMethodParameter(Context\MethodParameterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::methodParameter()}.
	 * @param $context The parse tree.
	 */
	public function exitMethodParameter(Context\MethodParameterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::template()}.
	 * @param $context The parse tree.
	 */
	public function enterTemplate(Context\TemplateContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::template()}.
	 * @param $context The parse tree.
	 */
	public function exitTemplate(Context\TemplateContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::manifest()}.
	 * @param $context The parse tree.
	 */
	public function enterManifest(Context\ManifestContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::manifest()}.
	 * @param $context The parse tree.
	 */
	public function exitManifest(Context\ManifestContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::author()}.
	 * @param $context The parse tree.
	 */
	public function enterAuthor(Context\AuthorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::author()}.
	 * @param $context The parse tree.
	 */
	public function exitAuthor(Context\AuthorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::language()}.
	 * @param $context The parse tree.
	 */
	public function enterLanguage(Context\LanguageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::language()}.
	 * @param $context The parse tree.
	 */
	public function exitLanguage(Context\LanguageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::keyValuePair()}.
	 * @param $context The parse tree.
	 */
	public function enterKeyValuePair(Context\KeyValuePairContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::keyValuePair()}.
	 * @param $context The parse tree.
	 */
	public function exitKeyValuePair(Context\KeyValuePairContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::position()}.
	 * @param $context The parse tree.
	 */
	public function enterPosition(Context\PositionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::position()}.
	 * @param $context The parse tree.
	 */
	public function exitPosition(Context\PositionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::positionParameter()}.
	 * @param $context The parse tree.
	 */
	public function enterPositionParameter(Context\PositionParameterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::positionParameter()}.
	 * @param $context The parse tree.
	 */
	public function exitPositionParameter(Context\PositionParameterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::cssBlock()}.
	 * @param $context The parse tree.
	 */
	public function enterCssBlock(Context\CssBlockContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::cssBlock()}.
	 * @param $context The parse tree.
	 */
	public function exitCssBlock(Context\CssBlockContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::standardTypeKinds()}.
	 * @param $context The parse tree.
	 */
	public function enterStandardTypeKinds(Context\StandardTypeKindsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::standardTypeKinds()}.
	 * @param $context The parse tree.
	 */
	public function exitStandardTypeKinds(Context\StandardTypeKindsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::simpleHTMLTypeKinds()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleHTMLTypeKinds(Context\SimpleHTMLTypeKindsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::simpleHTMLTypeKinds()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleHTMLTypeKinds(Context\SimpleHTMLTypeKindsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see eJSLParser::complexHTMLTypeKinds()}.
	 * @param $context The parse tree.
	 */
	public function enterComplexHTMLTypeKinds(Context\ComplexHTMLTypeKindsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see eJSLParser::complexHTMLTypeKinds()}.
	 * @param $context The parse tree.
	 */
	public function exitComplexHTMLTypeKinds(Context\ComplexHTMLTypeKindsContext $context) : void;
}