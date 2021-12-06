grammar  eJSL;

eJSLModel:
	'eJSLModel'	name=STRING
	'{'
		'eJSL part:' eJSLPart
	'}'
	;

eJSLPart:
	cmsCore | cmsExtension
;

cmsCore:
	'CMS Core' '{'
		('dataTypes' '{' datatypes+=datatype ( ',' datatypes+=datatype)* '}')?
		('globalParameters' '{' (globalparameters+=parameter)* '}')?
		('parameterGroups' '{' (parametergroups+=parameterGroup)* '}')?
		feature
		//(coreFeature += coreFeature*) // for further implementation of core features
	'}'
;

coreFeature:
	'core features'
;

cmsExtension:
		'CMS Extension' '{'
			('dataTypes' '{' datatypes+=datatype ( ',' datatypes+=datatype)* '}')?
			('globalParameters' '{' (globalparameters+=parameter)* '}')?
			('parameterGroups' '{'  (parametergroups+=parameterGroup)* '}')?
			feature
			('extensions' '{' (extensions+=extension)* '}')?
	'}'
;

feature:
	('entityPackages' '{' (entitypackages+=entitypackage)* '}')?
	('entities' '{' (entities+=entity)* '}')?
	('pages' '{' (pages+=page)* '}')?
	('sections' '{' (sections+=section)+ '}')?
;

// data model
type:
	datatypeReference | standardTypes
;

datatypeReference:
	datatype
	| QualifiedName
; // Xtext: DatatypeReference: type=[Datatype|QualifiedName];

standardTypes:
	typeLbl=standardTypeKinds (notnull='Not Null')? ('Default =' defaultvalue=STRING)? (autoincrement='Auto Increment')?
;

datatype:
	'Datatype' name=ID '=' typeLbl=STRING;

parameter:
	'Parameter' name=ID
	'{'
		'type =' (dtype=htmlTypes)
		('defaultValue =' defaultvalue=STRING)?
		('label =' label=STRING)?
		('size =' size=INT)?
		('description =' descripton=STRING)?
		('values' '{' values+=keyValuePair (',' values+=keyValuePair)* '}')?
		('fieldAttributes' '{' (attributes+=keyValuePair (',' attributes+=keyValuePair)*)? '}')?
	'}'
;

parameterGroup:
	'ParameterGroup' name=ID
	'{'
		('label =' label=STRING)?
		('parameters' '{' ((globalparameters+=parameter) | (parameters+=parameter))* '}')
	'}'
;

pageAction:
	'PageAction' name=ID
	'{'
		'type =' ((pageActionType=PageActionKind))
		'position =' ((pageActionPosition=PageActionPositionKind))
	'}'
;

entitypackage:
	'Entitypackage' name=ID
	'{'
		('entityPackages' '{' (entitypackages+=entitypackage)* '}')?
		('entities' '{' (entities+=entity)* '}')?
		('dataTypes' '{' (datatypes+=datatype)* '}')?
	'}'
;

entity:
	'Entity' name=MYID ('extends' supertype=entityRef)? (preserve='@preserve')?
	'{'
		('attributes' '{' (attributes+=attribute)* '}')?
		// Cardinality
		('references' '{' (references+=reference)* '}')?
	'}'
;

entityRef:
    entity
    |QualifiedName
;

attributeRef:
    attribute
    |QualifiedName
;

attribute:
	'Attribute' name=MYID (preserve='@preserve')? '{'
		'type =' type
		(isunique = 'Unique attribute' ('with' (withattribute=attributeRef | id='ID'))?)?
		(isprimary = 'Primary attribute')?
	'}'
;

reference:
	'Reference' (preserve='@preserve')?
	'{'
		'entityAttribute =' attributeLbl+=attributeRef (',' attributeLbl+=attributeRef)*
		'referencedEntity =' entityLbl=entityRef
		'referencedEntityAttribute =' (attributereferenced +=attributeRef| id='ID') (attributereferenced +=attributeRef)*
		('min =' lower=NUMBER)?
		'max =' upper=NUMBER
	'}'
;

// page model

page:
	staticPage | dynamicPage | customPage
;

staticPage:
	'StaticPage' name=MYID (preserve='@preserve')?
	'{'
		('*parameterGroups =' parametergroups+=parameterGroup (',' parametergroups+=parameterGroup)*)?
		('*globalParameters =' globalparameters+=parameter (',' globalparameters+=parameter)*)?
		('localParameters' '{' (localparameters+=parameter)* '}')?
		('pageActions' '{' (pageactions+=pageAction)* '}')?
		('links' '{' (links+=link)* '}')?
		'HTMLBody' '{' htmlBody = STRING '}'
	'}'
;

dynamicPage:
	indexPage | detailsPage
;

indexPage:
	'IndexPage' name=MYID (preserve='@preserve')?
	'{'
		('*entities = ' entities+=entityRef (',' entities+=entityRef)*)?
		('*parameterGroups = ' parametergroups+=parameterGroup (',' parametergroups+=parameterGroup)*)?
		('*globalParameters = ' globalparameters+=parameter (',' globalparameters+=parameter)*)?
		('localParameters' '{' (localparameters+=parameter)* '}')?
		('pageActions' '{' (pageactions+=pageAction)* '}')?
		(statussupport='statusSupport')?
		(orderingsupport='orderingSupport')?
		('representationColumns =' tablecolumns+=attributeRef (',' tablecolumns+=attributeRef)*)?
		('filters =' filters+=attributeRef (',' filters+=attributeRef)*)?
		('links' '{' (links+=link)* '}')?
	'}'
;

detailsPage:
	'DetailsPage' name=MYID (preserve='@preserve')?
	'{'
		('*entities = ' entities+=entityRef (',' entities+=entityRef)*)?
		('editFields' '{' (editfields+=detailPageField (',' editfields+=detailPageField)*)? '}')?
		('*parameterGroups =' parametergroups+=parameterGroup (',' parametergroups+=parameterGroup)*)?
		('*globalParameters =' globalparameters+=parameter (',' globalparameters+=parameter)*)?
		('localParameters' '{' (localparameters+=parameter)* '}')?
		('pageActions' '{' (pageactions+=pageAction)* '}')?
		('tableColumns =' tablecolumns+=attributeRef (',' tablecolumns+=attributeRef)*)?
		('filters =' filters+=attributeRef (',' filters+=attributeRef)*)?
		'links' '{' (links+=link)* '}'
	'}'
;

detailPageField:
	attributeLbl = attributeRef
	'{'
		(('htmlType =' (htmltype = htmlTypes)) | ('fieldType =' (fieldtype = attributeRef)))
		 ('values' '{' values+=keyValuePair (',' values+=keyValuePair)* '}')?
		('fieldAttributes' '{' (attributes+=keyValuePair (',' attributes+=keyValuePair)*)? '}')?
		(required='required')?
	'}'
;

customPage:
	'CustomPage' name=MYID (preserve='@preserve')?
	'{'
		'pageType =' pageType = PageKinds
		('*entities' entities+=entityRef (',' entities+=entityRef)*)?
		('pageActions' '{' (pageactions+=pageAction)* '}')?
		('*parameterGroups' parametergroups+=parameterGroup (',' parametergroups+=parameterGroup)*)?
		('*globalParameters' globalparameters+=parameter (',' globalparameters+=parameter)*)?
		('localParameters' '{' (localparameters+=parameter)* '}')?
		('links' '{' (links+=link)* '}')?
	'}'
;

htmlTypes:
	simpleHTMLTypes | complexHTMLTypes | datatypeReference
;

simpleHTMLTypes:
	htmltype = simpleHTMLTypeKinds
;

complexHTMLTypes:
	htmltype = complexHTMLTypeKinds
;

link:
	externalLink | internalLink
;

pageActionRef:
    pageAction
    |QualifiedName
;

pageRef:
    page
    |QualifiedName
;

externalLink:
	'ExternalLink'
	'{'
		'target =' target=STRING
		('linkedAttribute =' linkedAttribute=attributeRef)?
		('linkedAction =' linkedAction=pageActionRef)?
		('label' '=' label=STRING)?
	'}'
;

internalLink:
	('InternalLink' name=MYID
	'{'
		'target =' target=pageRef
		('linkedAttribute =' linkedAttribute=attributeRef)?
		('linkedAction =' linkedAction=pageActionRef)?
	'}') | contextLink
;

contextLink:
	'InternalContextLink' name=MYID
	'{'
		'target =' target=pageRef
		('linkedAttribute =' linkedAttribute=attributeRef)?
		('linkedAction =' linkedAction=pageActionRef)?
		('linkParameters' '{' (linkparameters+=linkParameter)* '}')?
	'}'
;

attvalueRef:
    attribute
    |STRING
;

linkParameter:
	'Parameter' name=MYID '=' ('*Attribute '(attvalue=attvalueRef| id='ID') | value=STRING)
;

// extension model

extension:
	extensionPackage | component | module | plugin | library | template
;

extensionPackage:
	'ExtensionPackage' name=MYID
	'{'
		'Manifest' '{' manifest '}'
		('languages' '{' (languages+=language)* '}')?
		'extensions' '{' (extensions+=extension)+ '}'
	'}'
;

component:
	'Component' name=MYID
	'{'
		'Manifest' '{' manifest '}'
		('globalParameters' '{' (globalParamter+=parameterGroup)* '}')?
		('languages' '{' (languages+=language)* '}')?
		'sections' '{' (sections+=section)+ '}'
	'}'
;

section:
	backend | frontend
;

backend:
	'BackendSection'
	'{'
		'*Pages' '{'
			pageRefLbl += pageReference*
		'}'
	'}'
;

pageReference:
	'*Page :' pageLbl=pageRef ('from :' pagescr=componentReference)? ('data' sect = DataAccessKinds)?
;

componentReference:
	ref=noncoreComponentRef | core=CoreComponent
; // Xtext: ComponentReference: ref=[Component|QualifiedName] | core=CoreComponent;

noncoreComponentRef:
    component
    |QualifiedName
;

frontend:
	'FrontendSection'
	'{'
		'*Pages' '{'
			pageRefLbl += pageReference*
		'}'
	'}'
;

module:
	'Module' name=MYID
	'{'
		'Manifest' '{' manifest '}'
		('languages' '{' (languages+=language)* '}')?
		(pageRefLbl=pageReference)?
	'}'
;

plugin:
	'Plugin' name=MYID
	'{'
		'Manifest' '{' manifest '}'
		('languages' '{' (languages+=language)* '}')?
		'pluginType =' typeLbl=PluginKinds
		('*entities =' entities+=entityRef (',' entities+=entityRef)*)?
		('parameters' '{' (localparameters+=parameter)* '}')?
	'}'
;

library:
	'Library' name=MYID
	'{'
		'Manifest' '{' manifest '}'
		('languages' '{' (languages+=language)* '}')?
		('*entities = ' entities+=entityRef (',' entities+=entityRef)*)?
		('classes' '{' (classes+=phpclass)* '}')?
		('packages' '{' (packages+=package)* '}')?
	'}'
;

package:
	'Package' name=MYID
	'{'
		('packages' '{' (packages+=package)* '}')?
		('classes' '{' (classes+=phpclass)* '}')?
	'}'
;

classRef:
    phpclass
    |QualifiedName
;

phpclass:
    'Class' name=MYID ('extends' supertype=classRef)?
    '{'
    	('*classReferences = ' references+=classRef (',' references+=classRef)*)?
    	('*entities = ' entities+=entityRef (',' entities+=entityRef)*)?
        ('methods' '{' (methods+=method)* '}')?
    '}'
;

method:
    'Method' name=MYID
    '{'
        ('returnValue = ' returnvalue=ID ':' type)?
        ('methodParameters' '{' (methodparameters+=methodParameter)* '}')?
    '}'
;

methodParameter:
    'methodParameter' name=ID ':' type
;

template:
	'Template' name=MYID
	'{'
		'Manifest' '{' manifest '}'
		('languages' '{' (languages+=language)* '}')?
		('parameters' '{' (localparameters+=parameter)* '}')?
		('positions' '{' (positions+=position)* '}')?
		('cssBlocks' '{' (cssblocks+=cssBlock)* '}')?
	'}'
;

manifest:
	'authors' '{' (authors+=author)+ '}'
	('creationDate =' creationdate=DATE)?
	('copyright =' copyright=STRING)?
	('license =' license=STRING)?
	('link =' linkLbl=STRING)?
	('version =' version=STRING)?
	('description =' description=STRING)?;

author:
	'Author' name=STRING
	'{'
		('authorEmail =' authoremail=STRING)?
		('authorURL =' authorurl=STRING)?
	'}'
;

language:
	'Language' (sys='system')? name=LANGUAGE_CODE
	'{'
    	('keyValuePairs' '{' (keyvaluepairs+=keyValuePair)* '}')?
    '}'
;

keyValuePair:
	name=ID '=' value=STRING
;

position:
	'TemplatePosition' (name=POSITION_TYPES | name=ID)
	'{'
		('positionParameters' '{' (positionparameters+=positionParameter)* '}')?
	'}'
;

DATE:
  ((('0'..'2') ('0'..'9') '.' ('02')) |
  (('0'..'2') ('0'..'9') '.' ((('0') (('1') | ('3'..'9'))) | ('1') ('0'..'2')) | (('1') ('0'..'2'))) |
  (('30') '.' ((('0') (('1') | ('3'..'9'))) | ('1') ('0'..'2'))) |
  (('31') '.' ((('0') (('1') | ('3') | ('5') | ('7') | ('8'))) | (('1') (('0')| ('2'))))))
  '.' ('0'..'2') ('0'..'9') ('0'..'9') ('0'..'9')
;

LANGUAGE_CODE:
    'a'..'z' 'a'..'z' '-' 'A'..'Z' 'A'..'Z'
;

POSITION_TYPES:
	'head' | 'contents' | 'footer' | 'left' | 'right'
;

positionParameter:
	'PositionParameter' name = ID
	'{'
		('divId =' divid = ID)?
		('positionType =' typeLbL = POSITION_TYPES_NAMES)?
		('CSSKeyValuePairs' '{' (keyvaluepairs+=keyValuePair)* '}')?
	'}'
;

POSITION_TYPES_NAMES:
	'modules' | 'component'
;

cssBlock:
	'CssBlock' selector=STRING
	'('
		('KeyValuePairs' '{' (keyvaluepairs+=keyValuePair)* '}')?
	')'
;

NUMBER : ('-')?INT;

QualifiedName: MYID ('.' MYID)*;

MYID : ('<')? ID ('>')?;

PluginKinds:
    'authenticate' | 'captcha' | 'content' | 'contact' |
    'editors' | 'extensions' | 'finder' | 'quick_icons' |
    'search' | 'system' | 'user' | 'xml_rpc'
;

PageActionKind:
	'SAVE' | 'NEW' | 'SAVE_CLOSE' | 'SAVE_COPY' | 'CANCEL' | 'CLOSE' | 'ARCHIVE' | 'EDIT' | 'PUBLISH' | 'UNPUBLISH' | 'HIDE' | 'CHECKIN' | 'TRASH' |'INDIVIDUAL' | 'LOGIN' | 'PWRESET'
; 

PageActionPositionKind:
	'top' | 'center' | 'bottom'
; 

standardTypeKinds:
	'Integer' | 'Decimal' | 'Currency' | 'Boolean' | 'Text' | 'Short_Text' | 'Time' | 'Date' | 'Datetime' | 'Link' | 'Image' | 'File'
; 

DataAccessKinds:
	'backendDAO' | 'frontendDAO' | 'database' | 'webservice'
; // enum originally in Xtext: backendDAO='backendDAO' | frontendDAO='frontendDAO' | database='database' | webservice='webservice'
  // BUT: labels in lexer rules are not supported in ANTLR 4; actions cannot reference elements of lexical rules but you can use getText() to get the entire text matched for the rule.

PageKinds:
	'list' | 'details' | 'custom'
;

simpleHTMLTypeKinds:
	'Integer' | 'Yes_No_Buttons' | 'Textarea' | 'Text_Field' | 'Link' | 'Datepicker' | 'Imagepicker' | 'Filepicker' | 'Text_Field_NE' | 'Editor'
; 

complexHTMLTypeKinds:
	'Select'| 'Multiselect' | 'Checkbox' | 'Radiobutton' | 'Encrypted_Text' | 'Hidden'
;

CoreComponent:
	'User' | 'Menu' | 'Content'
; //  enum, in Xtext these tokens were without the quotes ???

ID: '^'?('a'..'z'|'A'..'Z'|'_') ('a'..'z'|'A'..'Z'|'_'|'0'..'9')*;

INT: ('0'..'9')+;

STRING:
    '"' ( '\\' . /* 'b'|'t'|'n'|'f'|'r'|'u'|'"'|"'"|'\\' */ | ~('\\'|'"') )* '"' |
    '\'' ( '\\' . /* 'b'|'t'|'n'|'f'|'r'|'u'|'"'|"'"|'\\' */ | ~('\\'| '\'') )*  '\''
;

ML_COMMENT : '/*' .*? '*/'; // .*? matches anything until the first */

SL_COMMENT : '//' ~('\n'|'\r')* ('\r'? '\n')?;

WS         : (' '|'\t'|'\r'|'\n')+;

ANY_OTHER: .;