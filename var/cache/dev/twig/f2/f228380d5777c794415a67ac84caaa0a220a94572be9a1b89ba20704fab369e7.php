<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0a81723be19d1a6dea670688b4b24e5046fc1bae71aa3dfd11bab2226a79f0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a81723be19d1a6dea670688b4b24e5046fc1bae71aa3dfd11bab2226a79f0a2->enter($__internal_0a81723be19d1a6dea670688b4b24e5046fc1bae71aa3dfd11bab2226a79f0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_50408be505c8a099a0aea190d8901ca3f459c77f3d17125d405c2aa1cef66177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50408be505c8a099a0aea190d8901ca3f459c77f3d17125d405c2aa1cef66177->enter($__internal_50408be505c8a099a0aea190d8901ca3f459c77f3d17125d405c2aa1cef66177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a81723be19d1a6dea670688b4b24e5046fc1bae71aa3dfd11bab2226a79f0a2->leave($__internal_0a81723be19d1a6dea670688b4b24e5046fc1bae71aa3dfd11bab2226a79f0a2_prof);

        
        $__internal_50408be505c8a099a0aea190d8901ca3f459c77f3d17125d405c2aa1cef66177->leave($__internal_50408be505c8a099a0aea190d8901ca3f459c77f3d17125d405c2aa1cef66177_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f25014ecabdd8c22e34d26c48c0b6db1616545e4ff1a207dba6ae892e301fee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25014ecabdd8c22e34d26c48c0b6db1616545e4ff1a207dba6ae892e301fee2->enter($__internal_f25014ecabdd8c22e34d26c48c0b6db1616545e4ff1a207dba6ae892e301fee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b1959f870dfe17414bf7343bff3e08b79eea4ca4b04580112f893815469ef0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1959f870dfe17414bf7343bff3e08b79eea4ca4b04580112f893815469ef0c3->enter($__internal_b1959f870dfe17414bf7343bff3e08b79eea4ca4b04580112f893815469ef0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1959f870dfe17414bf7343bff3e08b79eea4ca4b04580112f893815469ef0c3->leave($__internal_b1959f870dfe17414bf7343bff3e08b79eea4ca4b04580112f893815469ef0c3_prof);

        
        $__internal_f25014ecabdd8c22e34d26c48c0b6db1616545e4ff1a207dba6ae892e301fee2->leave($__internal_f25014ecabdd8c22e34d26c48c0b6db1616545e4ff1a207dba6ae892e301fee2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8aeb541a8262eb8876e44b2fadc539616ab2e08bc4fb8b26255fd813757beb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8aeb541a8262eb8876e44b2fadc539616ab2e08bc4fb8b26255fd813757beb7->enter($__internal_b8aeb541a8262eb8876e44b2fadc539616ab2e08bc4fb8b26255fd813757beb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed68f35d5e04fc7508b5ded7d9f1b7cfe6949dace60383c13d68f9331dd044e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed68f35d5e04fc7508b5ded7d9f1b7cfe6949dace60383c13d68f9331dd044e5->enter($__internal_ed68f35d5e04fc7508b5ded7d9f1b7cfe6949dace60383c13d68f9331dd044e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ed68f35d5e04fc7508b5ded7d9f1b7cfe6949dace60383c13d68f9331dd044e5->leave($__internal_ed68f35d5e04fc7508b5ded7d9f1b7cfe6949dace60383c13d68f9331dd044e5_prof);

        
        $__internal_b8aeb541a8262eb8876e44b2fadc539616ab2e08bc4fb8b26255fd813757beb7->leave($__internal_b8aeb541a8262eb8876e44b2fadc539616ab2e08bc4fb8b26255fd813757beb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34a567d40b8b95e1da1596dd46227bb766f869a0e8d154be60229768e4b795fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a567d40b8b95e1da1596dd46227bb766f869a0e8d154be60229768e4b795fd->enter($__internal_34a567d40b8b95e1da1596dd46227bb766f869a0e8d154be60229768e4b795fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dd2a5ec45a368a7328545a4b1c3ce0699efb2348072f0803aca0755a1a447bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2a5ec45a368a7328545a4b1c3ce0699efb2348072f0803aca0755a1a447bf0->enter($__internal_dd2a5ec45a368a7328545a4b1c3ce0699efb2348072f0803aca0755a1a447bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dd2a5ec45a368a7328545a4b1c3ce0699efb2348072f0803aca0755a1a447bf0->leave($__internal_dd2a5ec45a368a7328545a4b1c3ce0699efb2348072f0803aca0755a1a447bf0_prof);

        
        $__internal_34a567d40b8b95e1da1596dd46227bb766f869a0e8d154be60229768e4b795fd->leave($__internal_34a567d40b8b95e1da1596dd46227bb766f869a0e8d154be60229768e4b795fd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Bdx0217PHP_Final_Checkpoint/Finale_Checkpoint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
