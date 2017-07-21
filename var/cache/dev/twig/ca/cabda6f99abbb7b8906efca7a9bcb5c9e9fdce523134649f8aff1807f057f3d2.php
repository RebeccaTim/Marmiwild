<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69467cfd7f843c72a0800ceb744ca17ce9e34e82d01086aff725c4cd50699fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69467cfd7f843c72a0800ceb744ca17ce9e34e82d01086aff725c4cd50699fa8->enter($__internal_69467cfd7f843c72a0800ceb744ca17ce9e34e82d01086aff725c4cd50699fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_786b1b7159fd17a630b9cf10f1a5d4752dc55f7878894fb046e8b84b446756f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786b1b7159fd17a630b9cf10f1a5d4752dc55f7878894fb046e8b84b446756f6->enter($__internal_786b1b7159fd17a630b9cf10f1a5d4752dc55f7878894fb046e8b84b446756f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69467cfd7f843c72a0800ceb744ca17ce9e34e82d01086aff725c4cd50699fa8->leave($__internal_69467cfd7f843c72a0800ceb744ca17ce9e34e82d01086aff725c4cd50699fa8_prof);

        
        $__internal_786b1b7159fd17a630b9cf10f1a5d4752dc55f7878894fb046e8b84b446756f6->leave($__internal_786b1b7159fd17a630b9cf10f1a5d4752dc55f7878894fb046e8b84b446756f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8b9dc6ea841b88d7a1e01d151e8e6868575621090e2e9419452c8d0160b20d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b9dc6ea841b88d7a1e01d151e8e6868575621090e2e9419452c8d0160b20d2->enter($__internal_f8b9dc6ea841b88d7a1e01d151e8e6868575621090e2e9419452c8d0160b20d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac03512b3321c50df0d4586a64252d93dafd6af7bb690e0113c94774f4d360c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac03512b3321c50df0d4586a64252d93dafd6af7bb690e0113c94774f4d360c1->enter($__internal_ac03512b3321c50df0d4586a64252d93dafd6af7bb690e0113c94774f4d360c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ac03512b3321c50df0d4586a64252d93dafd6af7bb690e0113c94774f4d360c1->leave($__internal_ac03512b3321c50df0d4586a64252d93dafd6af7bb690e0113c94774f4d360c1_prof);

        
        $__internal_f8b9dc6ea841b88d7a1e01d151e8e6868575621090e2e9419452c8d0160b20d2->leave($__internal_f8b9dc6ea841b88d7a1e01d151e8e6868575621090e2e9419452c8d0160b20d2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_29a9ab62bff1f920c7dee614092f0049792a2079c0a6e35d8845296e5678baef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a9ab62bff1f920c7dee614092f0049792a2079c0a6e35d8845296e5678baef->enter($__internal_29a9ab62bff1f920c7dee614092f0049792a2079c0a6e35d8845296e5678baef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89d3c25557cf51f50f1ed91d45a38aab371211fbdf149828fbd42401d360cb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d3c25557cf51f50f1ed91d45a38aab371211fbdf149828fbd42401d360cb62->enter($__internal_89d3c25557cf51f50f1ed91d45a38aab371211fbdf149828fbd42401d360cb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_89d3c25557cf51f50f1ed91d45a38aab371211fbdf149828fbd42401d360cb62->leave($__internal_89d3c25557cf51f50f1ed91d45a38aab371211fbdf149828fbd42401d360cb62_prof);

        
        $__internal_29a9ab62bff1f920c7dee614092f0049792a2079c0a6e35d8845296e5678baef->leave($__internal_29a9ab62bff1f920c7dee614092f0049792a2079c0a6e35d8845296e5678baef_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5101b74edd72d9e6e2a83d1067b61a84dc48c3b3e6459bcec1cd361b016dafb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5101b74edd72d9e6e2a83d1067b61a84dc48c3b3e6459bcec1cd361b016dafb7->enter($__internal_5101b74edd72d9e6e2a83d1067b61a84dc48c3b3e6459bcec1cd361b016dafb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a46abacbf8977787f5a7f24ed38dfefb9fddcd38f4d6eb70ebe8b8de76632975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46abacbf8977787f5a7f24ed38dfefb9fddcd38f4d6eb70ebe8b8de76632975->enter($__internal_a46abacbf8977787f5a7f24ed38dfefb9fddcd38f4d6eb70ebe8b8de76632975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a46abacbf8977787f5a7f24ed38dfefb9fddcd38f4d6eb70ebe8b8de76632975->leave($__internal_a46abacbf8977787f5a7f24ed38dfefb9fddcd38f4d6eb70ebe8b8de76632975_prof);

        
        $__internal_5101b74edd72d9e6e2a83d1067b61a84dc48c3b3e6459bcec1cd361b016dafb7->leave($__internal_5101b74edd72d9e6e2a83d1067b61a84dc48c3b3e6459bcec1cd361b016dafb7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Bdx0217PHP_Final_Checkpoint/Finale_Checkpoint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
