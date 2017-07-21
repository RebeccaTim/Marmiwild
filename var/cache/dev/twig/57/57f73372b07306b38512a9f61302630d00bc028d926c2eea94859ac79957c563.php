<?php

/* materialize_layout.html.twig */
class __TwigTemplate_0aaea075889ef539fa1602d660134df75bff14114a14743bd84f2e5130e3496e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "materialize_layout.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'button_widget' => array($this, 'block_button_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'form_errors' => array($this, 'block_form_errors'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06568651116716df19332c7f94b2c98661dc2af9dc59913aadb6d6a6ad5ef0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06568651116716df19332c7f94b2c98661dc2af9dc59913aadb6d6a6ad5ef0a2->enter($__internal_06568651116716df19332c7f94b2c98661dc2af9dc59913aadb6d6a6ad5ef0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materialize_layout.html.twig"));

        $__internal_38ab8894a07aeee47642ab0b1a5fafa7ef18989770a1e833413b60313ef9ea52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ab8894a07aeee47642ab0b1a5fafa7ef18989770a1e833413b60313ef9ea52->enter($__internal_38ab8894a07aeee47642ab0b1a5fafa7ef18989770a1e833413b60313ef9ea52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materialize_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06568651116716df19332c7f94b2c98661dc2af9dc59913aadb6d6a6ad5ef0a2->leave($__internal_06568651116716df19332c7f94b2c98661dc2af9dc59913aadb6d6a6ad5ef0a2_prof);

        
        $__internal_38ab8894a07aeee47642ab0b1a5fafa7ef18989770a1e833413b60313ef9ea52->leave($__internal_38ab8894a07aeee47642ab0b1a5fafa7ef18989770a1e833413b60313ef9ea52_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fb5b51f1ab530104043845bad7c83e21e0175a2c7897f18f382ac33756570405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5b51f1ab530104043845bad7c83e21e0175a2c7897f18f382ac33756570405->enter($__internal_fb5b51f1ab530104043845bad7c83e21e0175a2c7897f18f382ac33756570405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f3fde575fa96368702495f07194bc03771884fbf972bae9a57d041a6b1b3f4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fde575fa96368702495f07194bc03771884fbf972bae9a57d041a6b1b3f4a3->enter($__internal_f3fde575fa96368702495f07194bc03771884fbf972bae9a57d041a6b1b3f4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<div class=\"row";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"input-field col s12\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 9
        echo "</div>
    </div>";
        
        $__internal_f3fde575fa96368702495f07194bc03771884fbf972bae9a57d041a6b1b3f4a3->leave($__internal_f3fde575fa96368702495f07194bc03771884fbf972bae9a57d041a6b1b3f4a3_prof);

        
        $__internal_fb5b51f1ab530104043845bad7c83e21e0175a2c7897f18f382ac33756570405->leave($__internal_fb5b51f1ab530104043845bad7c83e21e0175a2c7897f18f382ac33756570405_prof);

    }

    // line 13
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ccb77280ba66926ecad02e95347623cdb7d0bdaf2fa30e3c146658ee258ebf65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb77280ba66926ecad02e95347623cdb7d0bdaf2fa30e3c146658ee258ebf65->enter($__internal_ccb77280ba66926ecad02e95347623cdb7d0bdaf2fa30e3c146658ee258ebf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_dd8bec8e776ddb60f83007d641c7cff0b0eb2cb068fdc5b3a547b2055afe68f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8bec8e776ddb60f83007d641c7cff0b0eb2cb068fdc5b3a547b2055afe68f8->enter($__internal_dd8bec8e776ddb60f83007d641c7cff0b0eb2cb068fdc5b3a547b2055afe68f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 14
        echo "    ";
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")))));
        }
        // line 17
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 18
        if (array_key_exists("tooltip", $context)) {
            // line 19
            echo "        <span class=\"material-icons dp48 elsan-tooltip tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "html", null, true);
            echo "\">error
        </span>
    ";
        }
        
        $__internal_dd8bec8e776ddb60f83007d641c7cff0b0eb2cb068fdc5b3a547b2055afe68f8->leave($__internal_dd8bec8e776ddb60f83007d641c7cff0b0eb2cb068fdc5b3a547b2055afe68f8_prof);

        
        $__internal_ccb77280ba66926ecad02e95347623cdb7d0bdaf2fa30e3c146658ee258ebf65->leave($__internal_ccb77280ba66926ecad02e95347623cdb7d0bdaf2fa30e3c146658ee258ebf65_prof);

    }

    // line 25
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bf46a68dfb61591a5cbd0bc18601618f6b1034cd2a8ad5ba2aa41d42ce92f6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf46a68dfb61591a5cbd0bc18601618f6b1034cd2a8ad5ba2aa41d42ce92f6a5->enter($__internal_bf46a68dfb61591a5cbd0bc18601618f6b1034cd2a8ad5ba2aa41d42ce92f6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_31fc230b5e114dcb51cda056fdbf73f36f831a841b1685103fdde57158250905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fc230b5e114dcb51cda056fdbf73f36f831a841b1685103fdde57158250905->enter($__internal_31fc230b5e114dcb51cda056fdbf73f36f831a841b1685103fdde57158250905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 26
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
        // line 27
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_31fc230b5e114dcb51cda056fdbf73f36f831a841b1685103fdde57158250905->leave($__internal_31fc230b5e114dcb51cda056fdbf73f36f831a841b1685103fdde57158250905_prof);

        
        $__internal_bf46a68dfb61591a5cbd0bc18601618f6b1034cd2a8ad5ba2aa41d42ce92f6a5->leave($__internal_bf46a68dfb61591a5cbd0bc18601618f6b1034cd2a8ad5ba2aa41d42ce92f6a5_prof);

    }

    // line 30
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_365bd438a7d5206a7134ab613564921177b63226dafed5fcc4ab46e3545320f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365bd438a7d5206a7134ab613564921177b63226dafed5fcc4ab46e3545320f3->enter($__internal_365bd438a7d5206a7134ab613564921177b63226dafed5fcc4ab46e3545320f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_883e41a165f13c479010de93a4d07d960d2c4359372479b3aa1716592f342e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883e41a165f13c479010de93a4d07d960d2c4359372479b3aa1716592f342e54->enter($__internal_883e41a165f13c479010de93a4d07d960d2c4359372479b3aa1716592f342e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 31
        echo "<div class=\"row ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 35
        echo "</div>";
        
        $__internal_883e41a165f13c479010de93a4d07d960d2c4359372479b3aa1716592f342e54->leave($__internal_883e41a165f13c479010de93a4d07d960d2c4359372479b3aa1716592f342e54_prof);

        
        $__internal_365bd438a7d5206a7134ab613564921177b63226dafed5fcc4ab46e3545320f3->leave($__internal_365bd438a7d5206a7134ab613564921177b63226dafed5fcc4ab46e3545320f3_prof);

    }

    // line 38
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_50a33d046721f5a9dc03a5a7410bf0e8230b4cd046cdc13f0c8007b356e7bfa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a33d046721f5a9dc03a5a7410bf0e8230b4cd046cdc13f0c8007b356e7bfa8->enter($__internal_50a33d046721f5a9dc03a5a7410bf0e8230b4cd046cdc13f0c8007b356e7bfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_cdcf227be6fc23c0e4295ec8f31cd4c2606718defcc82836a284591b51cb20c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcf227be6fc23c0e4295ec8f31cd4c2606718defcc82836a284591b51cb20c1->enter($__internal_cdcf227be6fc23c0e4295ec8f31cd4c2606718defcc82836a284591b51cb20c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 39
        echo "<input type=\"checkbox\" class=\"filled-in\"";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_cdcf227be6fc23c0e4295ec8f31cd4c2606718defcc82836a284591b51cb20c1->leave($__internal_cdcf227be6fc23c0e4295ec8f31cd4c2606718defcc82836a284591b51cb20c1_prof);

        
        $__internal_50a33d046721f5a9dc03a5a7410bf0e8230b4cd046cdc13f0c8007b356e7bfa8->leave($__internal_50a33d046721f5a9dc03a5a7410bf0e8230b4cd046cdc13f0c8007b356e7bfa8_prof);

    }

    // line 43
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_1046ce93ec42c6dae0e70e7ad7cc695e7eb65c9e7e15c99a451dd3c6e2bb28c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1046ce93ec42c6dae0e70e7ad7cc695e7eb65c9e7e15c99a451dd3c6e2bb28c1->enter($__internal_1046ce93ec42c6dae0e70e7ad7cc695e7eb65c9e7e15c99a451dd3c6e2bb28c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_9c4f37107f56aff53d9c5250a8cd6bd5fa2c418dee25529a75dbf16645c30836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4f37107f56aff53d9c5250a8cd6bd5fa2c418dee25529a75dbf16645c30836->enter($__internal_9c4f37107f56aff53d9c5250a8cd6bd5fa2c418dee25529a75dbf16645c30836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 44
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 45
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 46
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 48
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 49
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 51
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 52
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 53
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 54
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 55
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 58
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 61
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 62
            echo (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))));
            echo "
        </label>";
        }
        
        $__internal_9c4f37107f56aff53d9c5250a8cd6bd5fa2c418dee25529a75dbf16645c30836->leave($__internal_9c4f37107f56aff53d9c5250a8cd6bd5fa2c418dee25529a75dbf16645c30836_prof);

        
        $__internal_1046ce93ec42c6dae0e70e7ad7cc695e7eb65c9e7e15c99a451dd3c6e2bb28c1->leave($__internal_1046ce93ec42c6dae0e70e7ad7cc695e7eb65c9e7e15c99a451dd3c6e2bb28c1_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_903997371e0d99ed39ec9992ef702bd79e63ae22b2940916a834082703ca6259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903997371e0d99ed39ec9992ef702bd79e63ae22b2940916a834082703ca6259->enter($__internal_903997371e0d99ed39ec9992ef702bd79e63ae22b2940916a834082703ca6259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_316c7a56facb784ba401d8e9cce02a7896e3b31e0837c66472cd48c3bcc27241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316c7a56facb784ba401d8e9cce02a7896e3b31e0837c66472cd48c3bcc27241->enter($__internal_316c7a56facb784ba401d8e9cce02a7896e3b31e0837c66472cd48c3bcc27241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_316c7a56facb784ba401d8e9cce02a7896e3b31e0837c66472cd48c3bcc27241->leave($__internal_316c7a56facb784ba401d8e9cce02a7896e3b31e0837c66472cd48c3bcc27241_prof);

        
        $__internal_903997371e0d99ed39ec9992ef702bd79e63ae22b2940916a834082703ca6259->leave($__internal_903997371e0d99ed39ec9992ef702bd79e63ae22b2940916a834082703ca6259_prof);

    }

    // line 72
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_516d3db11dfd87bf3fb8eb4847c1dc94ad36ff207e60b5939647e0a2588da68d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516d3db11dfd87bf3fb8eb4847c1dc94ad36ff207e60b5939647e0a2588da68d->enter($__internal_516d3db11dfd87bf3fb8eb4847c1dc94ad36ff207e60b5939647e0a2588da68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d5927186ba54eebd7dd80e5852cc7eca0d866b4d77d2db70be797dbfa6ed8087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5927186ba54eebd7dd80e5852cc7eca0d866b4d77d2db70be797dbfa6ed8087->enter($__internal_d5927186ba54eebd7dd80e5852cc7eca0d866b4d77d2db70be797dbfa6ed8087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 73
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 74
            $context["required"] = false;
        }
        // line 76
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 77
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 78
            echo "<option value=\"\"";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                echo " disabled=\"disabled\" ";
                if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 80
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 81
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 82
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 83
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 84
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 87
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 88
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 89
        echo "</select>";
        
        $__internal_d5927186ba54eebd7dd80e5852cc7eca0d866b4d77d2db70be797dbfa6ed8087->leave($__internal_d5927186ba54eebd7dd80e5852cc7eca0d866b4d77d2db70be797dbfa6ed8087_prof);

        
        $__internal_516d3db11dfd87bf3fb8eb4847c1dc94ad36ff207e60b5939647e0a2588da68d->leave($__internal_516d3db11dfd87bf3fb8eb4847c1dc94ad36ff207e60b5939647e0a2588da68d_prof);

    }

    // line 92
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_27f81ebe3470c01c2a60289f2e0d7fa32376e7eb5cf3b87eb5af02a8b996ea5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f81ebe3470c01c2a60289f2e0d7fa32376e7eb5cf3b87eb5af02a8b996ea5d->enter($__internal_27f81ebe3470c01c2a60289f2e0d7fa32376e7eb5cf3b87eb5af02a8b996ea5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d4c738262968594facc78ed74138fea22931a313457184bfe89e6c7fc79e0189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c738262968594facc78ed74138fea22931a313457184bfe89e6c7fc79e0189->enter($__internal_d4c738262968594facc78ed74138fea22931a313457184bfe89e6c7fc79e0189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 93
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 94
            echo "<ul class=\"elsan-back-error\">";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 96
                echo "<li class=\"elsan-required\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "</ul>";
        }
        
        $__internal_d4c738262968594facc78ed74138fea22931a313457184bfe89e6c7fc79e0189->leave($__internal_d4c738262968594facc78ed74138fea22931a313457184bfe89e6c7fc79e0189_prof);

        
        $__internal_27f81ebe3470c01c2a60289f2e0d7fa32376e7eb5cf3b87eb5af02a8b996ea5d->leave($__internal_27f81ebe3470c01c2a60289f2e0d7fa32376e7eb5cf3b87eb5af02a8b996ea5d_prof);

    }

    // line 102
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f4e82063d737c3fc7225bc0b4b949d1d4a672ca008d75cf2bebcf0931db56b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e82063d737c3fc7225bc0b4b949d1d4a672ca008d75cf2bebcf0931db56b1a->enter($__internal_f4e82063d737c3fc7225bc0b4b949d1d4a672ca008d75cf2bebcf0931db56b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ef6f61a326cf8b8ac96b1f70da767f6dfd9a092afb89c478f016224139043201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6f61a326cf8b8ac96b1f70da767f6dfd9a092afb89c478f016224139043201->enter($__internal_ef6f61a326cf8b8ac96b1f70da767f6dfd9a092afb89c478f016224139043201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 103
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 104
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_ef6f61a326cf8b8ac96b1f70da767f6dfd9a092afb89c478f016224139043201->leave($__internal_ef6f61a326cf8b8ac96b1f70da767f6dfd9a092afb89c478f016224139043201_prof);

        
        $__internal_f4e82063d737c3fc7225bc0b4b949d1d4a672ca008d75cf2bebcf0931db56b1a->leave($__internal_f4e82063d737c3fc7225bc0b4b949d1d4a672ca008d75cf2bebcf0931db56b1a_prof);

    }

    public function getTemplateName()
    {
        return "materialize_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 104,  391 => 103,  382 => 102,  371 => 98,  363 => 96,  359 => 95,  357 => 94,  355 => 93,  346 => 92,  336 => 89,  334 => 88,  332 => 87,  326 => 84,  324 => 83,  322 => 82,  320 => 81,  318 => 80,  306 => 78,  304 => 77,  297 => 76,  294 => 74,  292 => 73,  283 => 72,  273 => 69,  271 => 68,  262 => 67,  249 => 62,  233 => 61,  229 => 58,  226 => 55,  225 => 54,  224 => 53,  222 => 52,  220 => 51,  217 => 49,  215 => 48,  212 => 46,  210 => 45,  208 => 44,  199 => 43,  179 => 39,  170 => 38,  160 => 35,  158 => 34,  156 => 33,  154 => 32,  148 => 31,  139 => 30,  129 => 27,  127 => 26,  118 => 25,  104 => 20,  101 => 19,  99 => 18,  97 => 17,  94 => 15,  91 => 14,  82 => 13,  71 => 9,  69 => 8,  67 => 7,  65 => 6,  58 => 4,  49 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block form_row -%}
    <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        <div class=\"input-field col s12\">
            {{- form_widget(form) -}}
            {{- form_label(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock form_row %}

{% block form_widget_simple %}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
    {% if tooltip is defined %}
        <span class=\"material-icons dp48 elsan-tooltip tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"{{ tooltip }}\">error
        </span>
    {% endif %}
{% endblock form_widget_simple %}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default(''))|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_row -%}
    <div class=\"row {% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block checkbox_widget -%}
    <input type=\"checkbox\" class=\"filled-in\"{{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget %}

{# Checkbox label is raw here #}
{%- block checkbox_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{ translation_domain is same as(false) ? label|raw : label|trans({}, translation_domain)|raw }}
        </label>
    {%- endif -%}
{%- endblock -%}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('waves-effect waves-light') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required %} disabled=\"disabled\" {% if value is empty %} selected=\"selected\"{% endif %}{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        <ul class=\"elsan-back-error\">
            {%- for error in errors -%}
                <li class=\"elsan-required\">{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ 'materialize-textarea')|trim}) %}
    {{ parent() }}
{%- endblock -%}", "materialize_layout.html.twig", "/var/www/html/Bdx0217PHP_Final_Checkpoint/Finale_Checkpoint/app/Resources/views/materialize_layout.html.twig");
    }
}
