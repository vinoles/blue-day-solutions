<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f682ccf0e7e89383167d9939fcff9684dc8fca7f407ada3404c61a6917aa081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f682ccf0e7e89383167d9939fcff9684dc8fca7f407ada3404c61a6917aa081->enter($__internal_4f682ccf0e7e89383167d9939fcff9684dc8fca7f407ada3404c61a6917aa081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_af8a9e3aac83139750a9f846d6acdecb51408e4c599b9b8826b1a5db3a6b8f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8a9e3aac83139750a9f846d6acdecb51408e4c599b9b8826b1a5db3a6b8f4f->enter($__internal_af8a9e3aac83139750a9f846d6acdecb51408e4c599b9b8826b1a5db3a6b8f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "</body>
</html>
";
        
        $__internal_4f682ccf0e7e89383167d9939fcff9684dc8fca7f407ada3404c61a6917aa081->leave($__internal_4f682ccf0e7e89383167d9939fcff9684dc8fca7f407ada3404c61a6917aa081_prof);

        
        $__internal_af8a9e3aac83139750a9f846d6acdecb51408e4c599b9b8826b1a5db3a6b8f4f->leave($__internal_af8a9e3aac83139750a9f846d6acdecb51408e4c599b9b8826b1a5db3a6b8f4f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_641c9aa8c7076bc058a8c1be3ee6b17c33b3b133e054357c03972c3968353942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641c9aa8c7076bc058a8c1be3ee6b17c33b3b133e054357c03972c3968353942->enter($__internal_641c9aa8c7076bc058a8c1be3ee6b17c33b3b133e054357c03972c3968353942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5d7876ebf8f6bb2b0571e0b350722c02f5da420cd37b875538071ee017e83e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d7876ebf8f6bb2b0571e0b350722c02f5da420cd37b875538071ee017e83e0->enter($__internal_e5d7876ebf8f6bb2b0571e0b350722c02f5da420cd37b875538071ee017e83e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e5d7876ebf8f6bb2b0571e0b350722c02f5da420cd37b875538071ee017e83e0->leave($__internal_e5d7876ebf8f6bb2b0571e0b350722c02f5da420cd37b875538071ee017e83e0_prof);

        
        $__internal_641c9aa8c7076bc058a8c1be3ee6b17c33b3b133e054357c03972c3968353942->leave($__internal_641c9aa8c7076bc058a8c1be3ee6b17c33b3b133e054357c03972c3968353942_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aed94d56a96903d63cd4d509032ae213bf78b44da1b9627861913381bf367d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed94d56a96903d63cd4d509032ae213bf78b44da1b9627861913381bf367d2e->enter($__internal_aed94d56a96903d63cd4d509032ae213bf78b44da1b9627861913381bf367d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f34f9faf98074c8d965fc72e5777311f21cb1a7371620f1b36f00418b15a4d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34f9faf98074c8d965fc72e5777311f21cb1a7371620f1b36f00418b15a4d14->enter($__internal_f34f9faf98074c8d965fc72e5777311f21cb1a7371620f1b36f00418b15a4d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <style>
                body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
                h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
                h1 { font-size: 36px; }
                h2 { font-size: 21px; margin-bottom: 1em; }
                p { margin: 0 0 1em 0; }
                a { color: #0000F0; }
                a:hover { text-decoration: none; }
                code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
                #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
                #container { padding: 2em; }
                #welcome, #status { margin-bottom: 2em; }
                #welcome h1 span { display: block; font-size: 75%; }
                #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
                #icon-book { display: none; }

                @media (min-width: 768px) {
                    #wrapper { width: 80%; margin: 2em auto; }
                    #icon-book { display: inline-block; }
                    #status a, #next a { display: block; }

                    @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                    @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                    .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
                }
            </style>
        ";
        
        $__internal_f34f9faf98074c8d965fc72e5777311f21cb1a7371620f1b36f00418b15a4d14->leave($__internal_f34f9faf98074c8d965fc72e5777311f21cb1a7371620f1b36f00418b15a4d14_prof);

        
        $__internal_aed94d56a96903d63cd4d509032ae213bf78b44da1b9627861913381bf367d2e->leave($__internal_aed94d56a96903d63cd4d509032ae213bf78b44da1b9627861913381bf367d2e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9001df35a6d723ad544450481a0b1ac42b8650f10bb8497e46fe6881d622d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9001df35a6d723ad544450481a0b1ac42b8650f10bb8497e46fe6881d622d73->enter($__internal_f9001df35a6d723ad544450481a0b1ac42b8650f10bb8497e46fe6881d622d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_245fe2ca05df53f8f55c6041817a606be8a5331b6a1629c91e137fb032bdf63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245fe2ca05df53f8f55c6041817a606be8a5331b6a1629c91e137fb032bdf63a->enter($__internal_245fe2ca05df53f8f55c6041817a606be8a5331b6a1629c91e137fb032bdf63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_245fe2ca05df53f8f55c6041817a606be8a5331b6a1629c91e137fb032bdf63a->leave($__internal_245fe2ca05df53f8f55c6041817a606be8a5331b6a1629c91e137fb032bdf63a_prof);

        
        $__internal_f9001df35a6d723ad544450481a0b1ac42b8650f10bb8497e46fe6881d622d73->leave($__internal_f9001df35a6d723ad544450481a0b1ac42b8650f10bb8497e46fe6881d622d73_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa1e7e36b3655c998ffc3702f746e979d2a66c0f01ac981ad27918143be40f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1e7e36b3655c998ffc3702f746e979d2a66c0f01ac981ad27918143be40f42->enter($__internal_aa1e7e36b3655c998ffc3702f746e979d2a66c0f01ac981ad27918143be40f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f66fd71ff7cf69415d7866920944bedf1562f69da2bdb9ae8b93dfbb44ea0ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66fd71ff7cf69415d7866920944bedf1562f69da2bdb9ae8b93dfbb44ea0ce5->enter($__internal_f66fd71ff7cf69415d7866920944bedf1562f69da2bdb9ae8b93dfbb44ea0ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f66fd71ff7cf69415d7866920944bedf1562f69da2bdb9ae8b93dfbb44ea0ce5->leave($__internal_f66fd71ff7cf69415d7866920944bedf1562f69da2bdb9ae8b93dfbb44ea0ce5_prof);

        
        $__internal_aa1e7e36b3655c998ffc3702f746e979d2a66c0f01ac981ad27918143be40f42->leave($__internal_aa1e7e36b3655c998ffc3702f746e979d2a66c0f01ac981ad27918143be40f42_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 39,  128 => 38,  92 => 8,  83 => 7,  65 => 5,  53 => 40,  51 => 39,  49 => 38,  42 => 35,  40 => 7,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>

        {% block stylesheets %}
            <style>
                body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
                h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
                h1 { font-size: 36px; }
                h2 { font-size: 21px; margin-bottom: 1em; }
                p { margin: 0 0 1em 0; }
                a { color: #0000F0; }
                a:hover { text-decoration: none; }
                code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
                #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
                #container { padding: 2em; }
                #welcome, #status { margin-bottom: 2em; }
                #welcome h1 span { display: block; font-size: 75%; }
                #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
                #icon-book { display: none; }

                @media (min-width: 768px) {
                    #wrapper { width: 80%; margin: 2em auto; }
                    #icon-book { display: inline-block; }
                    #status a, #next a { display: block; }

                    @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                    @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                    .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
                }
            </style>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    {% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/app/Resources/views/base.html.twig");
    }
}
