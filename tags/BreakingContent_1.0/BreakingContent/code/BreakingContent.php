<?php
class BreakingContent extends DataObjectDecorator
{
        function extraStatics(){
                return array(
                        'db' => array(
                				'BreakingContentEnable' => 'Boolean',
                                'BreakingContentTexto' => 'HTMLText'
                        )
                );
        }
         
        public function updateCMSFields(FieldSet &$fields) {
        		$fields->addFieldToTab('Root.Breaking', new CheckboxField('BreakingContentEnable', 'Activar'));
                $fields->addFieldToTab('Root.Breaking', new HTMLEditorField('BreakingContentTexto', 'Contenido del BreakingContent'));
        }
         
        function contentControllerInit($controller) {
        }
         
}