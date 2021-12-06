
##Changes from the Xtext-grammar to the ANTLR4-grammar
* non-terminals must start with small case,return type is by default the same as the rule itself,  no type between '{' and '}'
```
  EJSLModel returns EJSLModel:
  {EJSLModel}
  'eJSLModel' name=STRING
  '{'
  ('eJSL part:' ejslPart=EJSLPart)
  '}';
```
becomes:
```
    eJSLModel:
	'eJSLModel' name=STRING
	'{'
		'eJSL part:' ejslPart
	'}';
```
* only single quotes for string literals, so ","  becomes ','.
* 'not' in expressions is ~ instead of !
* no enum type.
* no ?= boolean assignment.
* -> matches 'until' in Xtext, but refers to a command in ANTLR4.
* labels can only be assigned to tokens or single rule refs. Multiple rule refs should be extracted as a subrule. See https://stackoverflow.com/questions/30744500/antlr4-label-assigned-to-a-block-which-is-not-a-set/30745544. For instance, the attribute:
```
    supertype=[Entity|QualifiedName])?
```
becomes:
```
    supertype=entityRef
    
    // adding a rule for entityRef:
    entityRef:
        entity
        |QualifiedName
    ;
```
* rule names and label names cannot be the same in ANTLR4, resulting in error 69 LABEL_CONFLICTS_WITH_RULE. Had that with 'type', 'attribute', 'page', 'pageRef', 'entity' and 'link'. I (provisionally) renamed those label names to *Lbl.
* while compiling the parser to PHP there were 2 conflicts with names in the target language: 'class' and 'default'. The error (134) was: "symbol class conflicts with generated code in target language or runtime". Idem for symbol default. So changed rulename 'class' to 'phpclass'. Symbol 'default' was only  used onceas a label (in the standardTypes-rule) and has been replaced by 'defaultvalue'.
