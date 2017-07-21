<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8134dbfc95d11b9e093c2dc43bffe040a935fc57bd2a17a5186ab153a92880f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8134dbfc95d11b9e093c2dc43bffe040a935fc57bd2a17a5186ab153a92880f3->enter($__internal_8134dbfc95d11b9e093c2dc43bffe040a935fc57bd2a17a5186ab153a92880f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_605c3ae9c503a0fa1d35e95c54c82cb34979856f5bbb2c4630c0540689c69004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605c3ae9c503a0fa1d35e95c54c82cb34979856f5bbb2c4630c0540689c69004->enter($__internal_605c3ae9c503a0fa1d35e95c54c82cb34979856f5bbb2c4630c0540689c69004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8134dbfc95d11b9e093c2dc43bffe040a935fc57bd2a17a5186ab153a92880f3->leave($__internal_8134dbfc95d11b9e093c2dc43bffe040a935fc57bd2a17a5186ab153a92880f3_prof);

        
        $__internal_605c3ae9c503a0fa1d35e95c54c82cb34979856f5bbb2c4630c0540689c69004->leave($__internal_605c3ae9c503a0fa1d35e95c54c82cb34979856f5bbb2c4630c0540689c69004_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ec6a4091001f2b5c86237f26d05633160dc4a478fda647e491df7496148d136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec6a4091001f2b5c86237f26d05633160dc4a478fda647e491df7496148d136->enter($__internal_0ec6a4091001f2b5c86237f26d05633160dc4a478fda647e491df7496148d136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5fc461581b3e1b6b4fbf93188861b84b5ab09554d96794c6085e5009ec61e78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc461581b3e1b6b4fbf93188861b84b5ab09554d96794c6085e5009ec61e78a->enter($__internal_5fc461581b3e1b6b4fbf93188861b84b5ab09554d96794c6085e5009ec61e78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5fc461581b3e1b6b4fbf93188861b84b5ab09554d96794c6085e5009ec61e78a->leave($__internal_5fc461581b3e1b6b4fbf93188861b84b5ab09554d96794c6085e5009ec61e78a_prof);

        
        $__internal_0ec6a4091001f2b5c86237f26d05633160dc4a478fda647e491df7496148d136->leave($__internal_0ec6a4091001f2b5c86237f26d05633160dc4a478fda647e491df7496148d136_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5a0d8ca7e1ee80b8a2687477b48310d5bf623f5ab33afbc32f753b9cc39ff3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a0d8ca7e1ee80b8a2687477b48310d5bf623f5ab33afbc32f753b9cc39ff3e->enter($__internal_f5a0d8ca7e1ee80b8a2687477b48310d5bf623f5ab33afbc32f753b9cc39ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66062554cc772cb856831ae5e4bb5c23a0ae7e7a5a42a69123dce30249fc7579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66062554cc772cb856831ae5e4bb5c23a0ae7e7a5a42a69123dce30249fc7579->enter($__internal_66062554cc772cb856831ae5e4bb5c23a0ae7e7a5a42a69123dce30249fc7579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_66062554cc772cb856831ae5e4bb5c23a0ae7e7a5a42a69123dce30249fc7579->leave($__internal_66062554cc772cb856831ae5e4bb5c23a0ae7e7a5a42a69123dce30249fc7579_prof);

        
        $__internal_f5a0d8ca7e1ee80b8a2687477b48310d5bf623f5ab33afbc32f753b9cc39ff3e->leave($__internal_f5a0d8ca7e1ee80b8a2687477b48310d5bf623f5ab33afbc32f753b9cc39ff3e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_331e60237bd5c868c9c9b4d8ea769febac6e869847733c175293f1863c6e55b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331e60237bd5c868c9c9b4d8ea769febac6e869847733c175293f1863c6e55b5->enter($__internal_331e60237bd5c868c9c9b4d8ea769febac6e869847733c175293f1863c6e55b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b1f230c5a9f2c77acf28be29261d75bfec15cdc48246adc2ec1ad2c7098c702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1f230c5a9f2c77acf28be29261d75bfec15cdc48246adc2ec1ad2c7098c702->enter($__internal_3b1f230c5a9f2c77acf28be29261d75bfec15cdc48246adc2ec1ad2c7098c702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3b1f230c5a9f2c77acf28be29261d75bfec15cdc48246adc2ec1ad2c7098c702->leave($__internal_3b1f230c5a9f2c77acf28be29261d75bfec15cdc48246adc2ec1ad2c7098c702_prof);

        
        $__internal_331e60237bd5c868c9c9b4d8ea769febac6e869847733c175293f1863c6e55b5->leave($__internal_331e60237bd5c868c9c9b4d8ea769febac6e869847733c175293f1863c6e55b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Bdx0217PHP_Final_Checkpoint/Finale_Checkpoint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
