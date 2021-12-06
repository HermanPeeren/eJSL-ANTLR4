<?php

/*
 * Generated from D:/wamp/www/eJSL-ANTLR4/grammar\eJSL.g4 by ANTLR 4.9.1
 */

namespace EJSL;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see eJSLParser}.
 */
interface eJSLVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see eJSLParser::eJSLModel()}.
	 *
	 * @param Context\EJSLModelContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEJSLModel(Context\EJSLModelContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::eJSLPart()}.
	 *
	 * @param Context\EJSLPartContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEJSLPart(Context\EJSLPartContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::cmsCore()}.
	 *
	 * @param Context\CmsCoreContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCmsCore(Context\CmsCoreContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::coreFeature()}.
	 *
	 * @param Context\CoreFeatureContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCoreFeature(Context\CoreFeatureContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::cmsExtension()}.
	 *
	 * @param Context\CmsExtensionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCmsExtension(Context\CmsExtensionContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::feature()}.
	 *
	 * @param Context\FeatureContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFeature(Context\FeatureContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::type()}.
	 *
	 * @param Context\TypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType(Context\TypeContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::datatypeReference()}.
	 *
	 * @param Context\DatatypeReferenceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatatypeReference(Context\DatatypeReferenceContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::standardTypes()}.
	 *
	 * @param Context\StandardTypesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStandardTypes(Context\StandardTypesContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::datatype()}.
	 *
	 * @param Context\DatatypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatatype(Context\DatatypeContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::parameter()}.
	 *
	 * @param Context\ParameterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameter(Context\ParameterContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::parameterGroup()}.
	 *
	 * @param Context\ParameterGroupContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameterGroup(Context\ParameterGroupContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::pageAction()}.
	 *
	 * @param Context\PageActionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPageAction(Context\PageActionContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::entitypackage()}.
	 *
	 * @param Context\EntitypackageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEntitypackage(Context\EntitypackageContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::entity()}.
	 *
	 * @param Context\EntityContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEntity(Context\EntityContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::entityRef()}.
	 *
	 * @param Context\EntityRefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEntityRef(Context\EntityRefContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::attributeRef()}.
	 *
	 * @param Context\AttributeRefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAttributeRef(Context\AttributeRefContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::attribute()}.
	 *
	 * @param Context\AttributeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAttribute(Context\AttributeContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::reference()}.
	 *
	 * @param Context\ReferenceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReference(Context\ReferenceContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::page()}.
	 *
	 * @param Context\PageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPage(Context\PageContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::staticPage()}.
	 *
	 * @param Context\StaticPageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStaticPage(Context\StaticPageContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::dynamicPage()}.
	 *
	 * @param Context\DynamicPageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDynamicPage(Context\DynamicPageContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::indexPage()}.
	 *
	 * @param Context\IndexPageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndexPage(Context\IndexPageContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::detailsPage()}.
	 *
	 * @param Context\DetailsPageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDetailsPage(Context\DetailsPageContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::detailPageField()}.
	 *
	 * @param Context\DetailPageFieldContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDetailPageField(Context\DetailPageFieldContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::customPage()}.
	 *
	 * @param Context\CustomPageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCustomPage(Context\CustomPageContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::htmlTypes()}.
	 *
	 * @param Context\HtmlTypesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitHtmlTypes(Context\HtmlTypesContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::simpleHTMLTypes()}.
	 *
	 * @param Context\SimpleHTMLTypesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSimpleHTMLTypes(Context\SimpleHTMLTypesContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::complexHTMLTypes()}.
	 *
	 * @param Context\ComplexHTMLTypesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComplexHTMLTypes(Context\ComplexHTMLTypesContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::link()}.
	 *
	 * @param Context\LinkContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLink(Context\LinkContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::pageActionRef()}.
	 *
	 * @param Context\PageActionRefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPageActionRef(Context\PageActionRefContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::pageRef()}.
	 *
	 * @param Context\PageRefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPageRef(Context\PageRefContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::externalLink()}.
	 *
	 * @param Context\ExternalLinkContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExternalLink(Context\ExternalLinkContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::internalLink()}.
	 *
	 * @param Context\InternalLinkContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInternalLink(Context\InternalLinkContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::contextLink()}.
	 *
	 * @param Context\ContextLinkContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContextLink(Context\ContextLinkContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::attvalueRef()}.
	 *
	 * @param Context\AttvalueRefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAttvalueRef(Context\AttvalueRefContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::linkParameter()}.
	 *
	 * @param Context\LinkParameterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLinkParameter(Context\LinkParameterContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::extension()}.
	 *
	 * @param Context\ExtensionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExtension(Context\ExtensionContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::extensionPackage()}.
	 *
	 * @param Context\ExtensionPackageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExtensionPackage(Context\ExtensionPackageContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::component()}.
	 *
	 * @param Context\ComponentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComponent(Context\ComponentContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::section()}.
	 *
	 * @param Context\SectionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSection(Context\SectionContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::backend()}.
	 *
	 * @param Context\BackendContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBackend(Context\BackendContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::pageReference()}.
	 *
	 * @param Context\PageReferenceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPageReference(Context\PageReferenceContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::componentReference()}.
	 *
	 * @param Context\ComponentReferenceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComponentReference(Context\ComponentReferenceContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::noncoreComponentRef()}.
	 *
	 * @param Context\NoncoreComponentRefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNoncoreComponentRef(Context\NoncoreComponentRefContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::frontend()}.
	 *
	 * @param Context\FrontendContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFrontend(Context\FrontendContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::module()}.
	 *
	 * @param Context\ModuleContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModule(Context\ModuleContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::plugin()}.
	 *
	 * @param Context\PluginContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPlugin(Context\PluginContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::library()}.
	 *
	 * @param Context\LibraryContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLibrary(Context\LibraryContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::package()}.
	 *
	 * @param Context\PackageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPackage(Context\PackageContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::classRef()}.
	 *
	 * @param Context\ClassRefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitClassRef(Context\ClassRefContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::phpclass()}.
	 *
	 * @param Context\PhpclassContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPhpclass(Context\PhpclassContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::method()}.
	 *
	 * @param Context\MethodContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMethod(Context\MethodContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::methodParameter()}.
	 *
	 * @param Context\MethodParameterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMethodParameter(Context\MethodParameterContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::template()}.
	 *
	 * @param Context\TemplateContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTemplate(Context\TemplateContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::manifest()}.
	 *
	 * @param Context\ManifestContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitManifest(Context\ManifestContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::author()}.
	 *
	 * @param Context\AuthorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAuthor(Context\AuthorContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::language()}.
	 *
	 * @param Context\LanguageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLanguage(Context\LanguageContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::keyValuePair()}.
	 *
	 * @param Context\KeyValuePairContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitKeyValuePair(Context\KeyValuePairContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::position()}.
	 *
	 * @param Context\PositionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPosition(Context\PositionContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::positionParameter()}.
	 *
	 * @param Context\PositionParameterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPositionParameter(Context\PositionParameterContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::cssBlock()}.
	 *
	 * @param Context\CssBlockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCssBlock(Context\CssBlockContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::standardTypeKinds()}.
	 *
	 * @param Context\StandardTypeKindsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStandardTypeKinds(Context\StandardTypeKindsContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::simpleHTMLTypeKinds()}.
	 *
	 * @param Context\SimpleHTMLTypeKindsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSimpleHTMLTypeKinds(Context\SimpleHTMLTypeKindsContext $context);

	/**
	 * Visit a parse tree produced by {@see eJSLParser::complexHTMLTypeKinds()}.
	 *
	 * @param Context\ComplexHTMLTypeKindsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComplexHTMLTypeKinds(Context\ComplexHTMLTypeKindsContext $context);
}