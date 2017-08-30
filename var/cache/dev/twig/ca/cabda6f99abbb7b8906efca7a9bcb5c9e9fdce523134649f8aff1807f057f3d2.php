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
        $__internal_101fd268a2252b94a5be2f03f9a6dbb87feb3f45934642dd17ea48346587ccec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101fd268a2252b94a5be2f03f9a6dbb87feb3f45934642dd17ea48346587ccec->enter($__internal_101fd268a2252b94a5be2f03f9a6dbb87feb3f45934642dd17ea48346587ccec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cd84ec0141660f3d586d75fb9d74fe34e695872477e94f5524665de51c131dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd84ec0141660f3d586d75fb9d74fe34e695872477e94f5524665de51c131dce->enter($__internal_cd84ec0141660f3d586d75fb9d74fe34e695872477e94f5524665de51c131dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_101fd268a2252b94a5be2f03f9a6dbb87feb3f45934642dd17ea48346587ccec->leave($__internal_101fd268a2252b94a5be2f03f9a6dbb87feb3f45934642dd17ea48346587ccec_prof);

        
        $__internal_cd84ec0141660f3d586d75fb9d74fe34e695872477e94f5524665de51c131dce->leave($__internal_cd84ec0141660f3d586d75fb9d74fe34e695872477e94f5524665de51c131dce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2763c0ea07e1e4fb00cbdc3409479c3d7ab8cd59e1ee84b193dee99d6af16c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2763c0ea07e1e4fb00cbdc3409479c3d7ab8cd59e1ee84b193dee99d6af16c2->enter($__internal_c2763c0ea07e1e4fb00cbdc3409479c3d7ab8cd59e1ee84b193dee99d6af16c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9734232270400d0311cf71f6f2ce17ff65e75a03f2274bc211020c4f12bbc2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9734232270400d0311cf71f6f2ce17ff65e75a03f2274bc211020c4f12bbc2bd->enter($__internal_9734232270400d0311cf71f6f2ce17ff65e75a03f2274bc211020c4f12bbc2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9734232270400d0311cf71f6f2ce17ff65e75a03f2274bc211020c4f12bbc2bd->leave($__internal_9734232270400d0311cf71f6f2ce17ff65e75a03f2274bc211020c4f12bbc2bd_prof);

        
        $__internal_c2763c0ea07e1e4fb00cbdc3409479c3d7ab8cd59e1ee84b193dee99d6af16c2->leave($__internal_c2763c0ea07e1e4fb00cbdc3409479c3d7ab8cd59e1ee84b193dee99d6af16c2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c578e7e17a4a3d258739c5725064a1818af3767a2451fc8ca3f871aea6ba64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c578e7e17a4a3d258739c5725064a1818af3767a2451fc8ca3f871aea6ba64e->enter($__internal_2c578e7e17a4a3d258739c5725064a1818af3767a2451fc8ca3f871aea6ba64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ef728a59b961de9fd1cdee6bb5ef78d3c1fda4af338af7f3a2b397b208acd9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef728a59b961de9fd1cdee6bb5ef78d3c1fda4af338af7f3a2b397b208acd9b->enter($__internal_0ef728a59b961de9fd1cdee6bb5ef78d3c1fda4af338af7f3a2b397b208acd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0ef728a59b961de9fd1cdee6bb5ef78d3c1fda4af338af7f3a2b397b208acd9b->leave($__internal_0ef728a59b961de9fd1cdee6bb5ef78d3c1fda4af338af7f3a2b397b208acd9b_prof);

        
        $__internal_2c578e7e17a4a3d258739c5725064a1818af3767a2451fc8ca3f871aea6ba64e->leave($__internal_2c578e7e17a4a3d258739c5725064a1818af3767a2451fc8ca3f871aea6ba64e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6d7c0a518fb6fa239423f762825c5b2ebad37e8045057afe35a6d67e35c4a5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d7c0a518fb6fa239423f762825c5b2ebad37e8045057afe35a6d67e35c4a5a->enter($__internal_c6d7c0a518fb6fa239423f762825c5b2ebad37e8045057afe35a6d67e35c4a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83fda801eed60b4b21893ed4f10dfc538208328910ed10090c5209ab4fff7208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fda801eed60b4b21893ed4f10dfc538208328910ed10090c5209ab4fff7208->enter($__internal_83fda801eed60b4b21893ed4f10dfc538208328910ed10090c5209ab4fff7208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_83fda801eed60b4b21893ed4f10dfc538208328910ed10090c5209ab4fff7208->leave($__internal_83fda801eed60b4b21893ed4f10dfc538208328910ed10090c5209ab4fff7208_prof);

        
        $__internal_c6d7c0a518fb6fa239423f762825c5b2ebad37e8045057afe35a6d67e35c4a5a->leave($__internal_c6d7c0a518fb6fa239423f762825c5b2ebad37e8045057afe35a6d67e35c4a5a_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
