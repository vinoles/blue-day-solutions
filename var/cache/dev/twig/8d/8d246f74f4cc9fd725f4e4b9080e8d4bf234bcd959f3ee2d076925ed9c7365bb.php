<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f6217e166b994556adba263301db96e59c16bbb339fedd6cb1926679508bc20e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af5f6d5776fcd781e00e22fab27f290ece8ad792837e05d18fbef2a2db218fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5f6d5776fcd781e00e22fab27f290ece8ad792837e05d18fbef2a2db218fe6->enter($__internal_af5f6d5776fcd781e00e22fab27f290ece8ad792837e05d18fbef2a2db218fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e3e55da15896a837f0677f5cadc8b77b86238474b2258e592684d43b49604840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e55da15896a837f0677f5cadc8b77b86238474b2258e592684d43b49604840->enter($__internal_e3e55da15896a837f0677f5cadc8b77b86238474b2258e592684d43b49604840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_af5f6d5776fcd781e00e22fab27f290ece8ad792837e05d18fbef2a2db218fe6->leave($__internal_af5f6d5776fcd781e00e22fab27f290ece8ad792837e05d18fbef2a2db218fe6_prof);

        
        $__internal_e3e55da15896a837f0677f5cadc8b77b86238474b2258e592684d43b49604840->leave($__internal_e3e55da15896a837f0677f5cadc8b77b86238474b2258e592684d43b49604840_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
