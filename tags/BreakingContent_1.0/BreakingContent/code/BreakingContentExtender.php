<?php
    class BreakingContentExtender extends DataObjectDecorator
    {
            function contentControllerInit($controller) {
                                     
                    $enable = $this->owner->SiteConfig->BreakingContentEnable;
                    $htmlContent = $this->owner->SiteConfig->BreakingContentTexto;
                                     
                    if($enable==1)
                    {
                    	Requirements::javascript("sapphire/thirdparty/jquery/jquery-packed.js");
                        Requirements::javascript("BreakingContent/javascript/jquery.easing.1.3.js");   
                        Requirements::javascript("BreakingContent/javascript/jquery.bouncebox.1.0.js");
                        Requirements::css("BreakingContent/css/breaking.css");
                        Requirements::customScript("
                            $(document).ready(function(){

                                /* Converting the #box div into a bounceBox: */
                                $('#box').bounceBox({left : '35%'});
                            
                                 $('#box').bounceBoxShow();
                                
                                /* When the box is clicked, hide it: */
                                $('#box').click(function(){
                                    $('#box').bounceBoxHide();
                                });
                            });
                    	");
                    }
            }
    }
